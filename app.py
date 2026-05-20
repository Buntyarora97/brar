import os
from flask import Flask, render_template_string, request, redirect, jsonify, session, flash
import json
import re
import urllib.request
import urllib.parse
from datetime import datetime

app = Flask(__name__)
app.secret_key = os.environ.get("SESSION_SECRET", "brar-eye-hospital-secret-key")

# Hospital Configuration
HOSPITAL_EMAIL = 'brareyehospitals@gmail.com'
HOSPITAL_NAME = 'Brar Eye Hospital'
ADMIN_PASSWORD = 'brarhospital2024'

# Spam keywords for detection
SPAM_KEYWORDS = [
    'loan', 'free money', 'winner', 'prize', 'offer', 'click here', 
    'buy now', 'urgent', 'limited time', 'guarantee', 'risk free',
    'make money', 'earn money', 'work from home', 'no experience',
    'viagra', 'casino', 'gambling', 'bitcoin', 'cryptocurrency',
    'seo services', 'website ranking', 'backlinks', 'followers',
    'dating', 'singles', 'hookup', 'webcam', 'adult',
    'paise kamao', 'jaldi paisa', 'free paisa', 'loot', 'offer',
    'guaranteed income', 'easy money', 'instant money'
]

DISPOSABLE_DOMAINS = [
    '10minutemail.com', 'tempmail.org', 'guerrillamail.com',
    'mailinator.com', 'yopmail.com', 'temp-mail.org'
]

def is_spam(name, email, subject, message):
    """Advanced spam detection"""
    content = f"{name} {subject} {message}".lower()
    
    # Check for spam keywords
    for keyword in SPAM_KEYWORDS:
        if keyword in content:
            return True
    
    # Check for excessive caps
    if re.search(r'[A-Z]{10,}', message):
        return True
    
    # Check for multiple exclamation marks
    if re.search(r'!{3,}', message):
        return True
    
    # Check for URLs
    if re.search(r'https?://[^\s]+', message) or re.search(r'www\.[^\s]+', message):
        return True
    
    # Check for email addresses in message
    if re.search(r'[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}', message):
        return True
    
    # Check message length
    if len(message) < 10 or len(message) > 2000:
        return True
    
    # Check for numbers in name
    if re.search(r'\d', name):
        return True
    
    # Check for disposable email domains
    email_domain = email.split('@')[1] if '@' in email else ''
    if email_domain.lower() in DISPOSABLE_DOMAINS:
        return True
    
    return False

def send_to_google_sheets(data):
    """Send form data to Google Sheets via Apps Script"""
    try:
        google_script_url = 'https://script.google.com/macros/s/AKfycbxNapCeeimE_508QayYbJRsZXLMZivb1S0OvNBvoWPghCnis8p-T5C-NwzB8OYm8uV5HQ/exec'
        
        # Prepare data for Google Sheets in the format expected by your script
        sheets_data = {
            'username': data['name'],
            'email': data['email'],
            'phone': data['phone'],
            'subject': data['subject'],
            'message': data['message'],
            'ip': data['ip']
        }
        
        # Convert to JSON
        json_data = json.dumps(sheets_data).encode('utf-8')
        
        # Create request
        req = urllib.request.Request(
            google_script_url,
            data=json_data,
            headers={'Content-Type': 'application/json'}
        )
        
        # Send request
        with urllib.request.urlopen(req, timeout=30) as response:
            result = response.read().decode('utf-8')
            response_data = json.loads(result)
            return response_data.get('result') == 'success'
            
    except Exception as e:
        print(f"Google Sheets error: {e}")
        return False

def log_submission_locally(data):
    """Log submission data to local files"""
    try:
        # Create logs directory if it doesn't exist
        os.makedirs('logs', exist_ok=True)
        
        # Save to monthly file
        filename = f"logs/submissions_{datetime.now().strftime('%Y-%m')}.json"
        
        # Read existing submissions
        submissions = []
        if os.path.exists(filename):
            try:
                with open(filename, 'r', encoding='utf-8') as f:
                    submissions = json.load(f)
            except:
                submissions = []
        
        # Add new submission
        submissions.append({
            'id': f"sub_{datetime.now().strftime('%Y%m%d_%H%M%S')}",
            'timestamp': data['timestamp'],
            'name': data['name'],
            'email': data['email'],
            'phone': data['phone'],
            'subject': data['subject'],
            'message': data['message'],
            'ip': data['ip']
        })
        
        # Save back to file
        with open(filename, 'w', encoding='utf-8') as f:
            json.dump(submissions, f, ensure_ascii=False, indent=2)
        
        return True
    except Exception as e:
        print(f"Local logging error: {e}")
        return False

@app.route('/')
def index():
    return render_template_string(INDEX_HTML)

@app.route('/contact')
def contact():
    success = request.args.get('success', '')
    error = request.args.get('error', '')
    return render_template_string(CONTACT_HTML, success=success, error=error)

@app.route('/submit-contact', methods=['POST'])
def submit_contact():
    try:
        # Get form data
        name = request.form.get('username', '').strip()
        email = request.form.get('email', '').strip()
        phone = request.form.get('phone', '').strip()
        subject = request.form.get('subject', '').strip()
        message = request.form.get('message', '').strip()
        
        # Validate required fields
        if not name or not email or not message:
            return jsonify({
                'success': False,
                'message': 'कृपया सभी आवश्यक फील्ड भरें। / Please fill in all required fields.'
            })
        
        # Validate email format
        if not re.match(r'^[^\s@]+@[^\s@]+\.[^\s@]+$', email):
            return jsonify({
                'success': False,
                'message': 'कृपया सही email address डालें। / Please enter a valid email address.'
            })
        
        # Check for spam
        if is_spam(name, email, subject, message):
            # Log spam attempt
            spam_log = f"SPAM DETECTED: {datetime.now()}\n"
            spam_log += f"Name: {name}\nEmail: {email}\nMessage: {message[:100]}\n\n"
            
            os.makedirs('logs', exist_ok=True)
            with open('logs/spam_attempts.log', 'a', encoding='utf-8') as f:
                f.write(spam_log)
            
            # Don't tell spammer their message was detected
            return jsonify({
                'success': True,
                'message': 'धन्यवाद! आपका संदेश भेज दिया गया है। / Thank you! Your message has been sent.'
            })
        
        # Prepare submission data
        submission_data = {
            'timestamp': datetime.now().strftime('%Y-%m-%d %H:%M:%S'),
            'name': name,
            'email': email,
            'phone': phone,
            'subject': subject,
            'message': message,
            'ip': request.remote_addr or 'unknown'
        }
        
        # Save locally
        local_saved = log_submission_locally(submission_data)
        
        # Send to Google Sheets
        sheets_sent = send_to_google_sheets(submission_data)
        
        # Log the submission
        log_entry = f"=== FORM SUBMISSION ===\n"
        log_entry += f"Time: {submission_data['timestamp']}\n"
        log_entry += f"Name: {name}\nEmail: {email}\nSubject: {subject}\n"
        log_entry += f"Local Saved: {'YES' if local_saved else 'NO'}\n"
        log_entry += f"Sheets Sent: {'YES' if sheets_sent else 'NO'}\n"
        log_entry += f"========================\n\n"
        
        os.makedirs('logs', exist_ok=True)
        with open('logs/system.log', 'a', encoding='utf-8') as f:
            f.write(log_entry)
        
        return jsonify({
            'success': True,
            'message': 'धन्यवाद! आपका संदेश सफलतापूर्वक भेज दिया गया है। हम जल्दी ही आपसे संपर्क करेंगे। / Thank you! Your message has been sent successfully. We will contact you shortly.',
            'local_saved': local_saved,
            'sheets_sent': sheets_sent
        })
        
    except Exception as e:
        print(f"Form submission error: {e}")
        return jsonify({
            'success': False,
            'message': 'तकनीकी समस्या हुई है। कृपया बाद में पुनः प्रयास करें। / A technical error occurred. Please try again later.'
        })

@app.route('/viewforms')
def viewforms():
    # Check if user is logged in
    if not session.get('admin_logged_in'):
        return render_template_string(ADMIN_LOGIN_HTML)
    
    # Get all submissions
    submissions = []
    try:
        import glob
        submission_files = glob.glob('logs/submissions_*.json')
        
        for file in sorted(submission_files, reverse=True):
            try:
                with open(file, 'r', encoding='utf-8') as f:
                    file_submissions = json.load(f)
                    submissions.extend(file_submissions)
            except:
                continue
        
        # Sort by timestamp (newest first)
        submissions.sort(key=lambda x: x.get('timestamp', ''), reverse=True)
    except:
        pass
    
    # Get spam log
    spam_log = ""
    try:
        if os.path.exists('logs/spam_attempts.log'):
            with open('logs/spam_attempts.log', 'r', encoding='utf-8') as f:
                spam_log = f.read()
    except:
        pass
    
    return render_template_string(ADMIN_PANEL_HTML, 
                                  submissions=submissions[:50], 
                                  total_submissions=len(submissions),
                                  spam_log=spam_log)

@app.route('/admin-login', methods=['POST'])
def admin_login():
    password = request.form.get('password', '')
    if password == ADMIN_PASSWORD:
        session['admin_logged_in'] = True
        return redirect('/viewforms')
    else:
        flash('Incorrect password')
        return redirect('/viewforms')

@app.route('/admin-logout')
def admin_logout():
    session.pop('admin_logged_in', None)
    return redirect('/viewforms')

# HTML Templates
INDEX_HTML = '''
<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brar Eye Hospital - आंखों की देखभाल के लिए</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .hindi-text { font-family: 'Noto Sans Devanagari', sans-serif; }
        .hero-section { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; min-height: 80vh; display: flex; align-items: center; }
        .service-card { background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); transition: transform 0.3s ease; }
        .service-card:hover { transform: translateY(-10px); }
        .contact-info-card { padding: 2rem; text-align: center; background: white; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand hindi-text" href="/">
                <i class="fas fa-eye me-2"></i>Brar Eye Hospital
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">होम / Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">संपर्क / Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="tel:+917218272182"><i class="fas fa-phone me-1"></i>+91 7218272182</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-4 hindi-text">आंखों की देखभाल के लिए <span class="text-warning">विश्वसनीय सेवा</span></h1>
                    <p class="lead mb-4">Brar Eye Hospital में हम आपकी आंखों की संपूर्ण देखभाल करते हैं। अनुभवी डॉक्टरों और आधुनिक तकनीक के साथ।</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="/contact" class="btn btn-warning btn-lg"><i class="fas fa-calendar-alt me-2"></i>अपॉइंटमेंट बुक करें</a>
                        <a href="tel:+917218272182" class="btn btn-outline-light btn-lg"><i class="fas fa-phone me-2"></i>फोन करें</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fas fa-eye display-1 text-warning"></i>
                    <h3 class="hindi-text mt-3">आंखों की विशेषज्ञ देखभाल</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="hindi-text">हमारी सेवाएं / Our Services</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-card h-100">
                        <i class="fas fa-eye-dropper fa-3x text-primary mb-3"></i>
                        <h4 class="hindi-text">मोतियाबिंद सर्जरी</h4>
                        <p>Advanced cataract surgery with latest technology</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card h-100">
                        <i class="fas fa-glasses fa-3x text-primary mb-3"></i>
                        <h4 class="hindi-text">रेटिना की जांच</h4>
                        <p>Comprehensive retina examination</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card h-100">
                        <i class="fas fa-microscope fa-3x text-primary mb-3"></i>
                        <h4 class="hindi-text">ग्लूकोमा उपचार</h4>
                        <p>Advanced glaucoma treatment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="hindi-text">Brar Eye Hospital</h5>
                    <p>आंखों की देखभाल के लिए विश्वसनीय सेवा</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2024 Brar Eye Hospital. All rights reserved.</p>
                    <p><a href="/viewforms" class="text-white-50">Admin Panel</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
'''

CONTACT_HTML = '''
<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>संपर्क करें - Brar Eye Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .hindi-text { font-family: 'Noto Sans Devanagari', sans-serif; }
        .page-title { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 60px 0; color: white; }
        .form-container { background: white; padding: 3rem; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); }
        .security-info { background: #e8f5e8; padding: 15px; border-radius: 8px; margin-bottom: 25px; border-left: 4px solid #28a745; }
        .contact-info-card { padding: 2rem; text-align: center; background: white; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand hindi-text" href="/"><i class="fas fa-eye me-2"></i>Brar Eye Hospital</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">होम / Home</a>
                <a class="nav-link active" href="/contact">संपर्क / Contact</a>
                <a class="nav-link" href="tel:+917218272182"><i class="fas fa-phone me-1"></i>+91 7218272182</a>
            </div>
        </div>
    </nav>

    <section class="page-title">
        <div class="container text-center">
            <h1 class="display-4 hindi-text">हमसे संपर्क करें</h1>
            <p class="lead">Brar Eye Hospital - आंखों की देखभाल के लिए</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-lg-4">
                    <div class="contact-info-card h-100">
                        <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                        <h3 class="hindi-text">हमारे कार्यालय</h3>
                        <div class="mb-3">
                            <h5>बठिंडा कार्यालय</h5>
                            <p>6WJP+3W4, Rose Garden Chowk के पास, Bathinda, Punjab 151001</p>
                        </div>
                        <div>
                            <h5>कोटकपूरा कार्यालय</h5>
                            <p>Faridkot Road, Kotkapura-151204, Punjab</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card h-100">
                        <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                        <h3 class="hindi-text">ईमेल पता</h3>
                        <p><a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card h-100">
                        <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                        <h3 class="hindi-text">संपर्क नंबर</h3>
                        <p><a href="tel:+917218272182">+91 7218272182</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-container">
                        <h2 class="text-center mb-4 hindi-text">हमें संदेश भेजें</h2>
                        
                        <div class="security-info">
                            <i class="fas fa-shield-alt me-2 text-success"></i>
                            <strong>सुरक्षा सूचना:</strong> यह फॉर्म advanced spam protection के साथ सुरक्षित है।
                        </div>
                        
                        <div id="form-messages"></div>
                        
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="आपका पूरा नाम / Your Full Name *" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="आपका ईमेल पता / Your Email Address *" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="tel" name="phone" class="form-control" placeholder="फोन नंबर / Phone Number">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="subject" class="form-control" placeholder="विषय / Subject *" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="message" class="form-control" rows="6" placeholder="आपका संदेश / Your Message *" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary btn-lg" type="submit" id="submit-btn">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        <span id="btn-text">संदेश भेजें / Send Message</span>
                                        <span id="btn-loading" class="d-none"><i class="fas fa-spinner fa-spin me-2"></i>भेजा जा रहा है...</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="hindi-text">Brar Eye Hospital</h5>
                    <p>आंखों की देखभाल के लिए विश्वसनीय सेवा</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2024 Brar Eye Hospital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submit-btn');
            const btnText = document.getElementById('btn-text');
            const btnLoading = document.getElementById('btn-loading');
            const messagesContainer = document.getElementById('form-messages');
            
            // Show loading
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnLoading.classList.remove('d-none');
            
            const formData = new FormData(this);
            
            fetch('/submit-contact', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Hide loading
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoading.classList.add('d-none');
                
                // Show message
                const alertClass = data.success ? 'alert-success' : 'alert-danger';
                const icon = data.success ? 'check-circle' : 'exclamation-triangle';
                
                messagesContainer.innerHTML = `
                    <div class="alert ${alertClass} alert-dismissible fade show">
                        <i class="fas fa-${icon} me-2"></i>
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;
                
                if (data.success) {
                    this.reset();
                    
                    // Show additional success info
                    if (data.sheets_sent) {
                        setTimeout(() => {
                            messagesContainer.innerHTML += `
                                <div class="alert alert-info alert-dismissible fade show">
                                    <i class="fas fa-check me-2"></i>
                                    आपका डेटा Google Sheets में भी सफलतापूर्वक सेव हो गया है। / Your data has also been successfully saved to Google Sheets.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            `;
                        }, 2000);
                    }
                }
            })
            .catch(error => {
                // Hide loading
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoading.classList.add('d-none');
                
                messagesContainer.innerHTML = `
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        तकनीकी समस्या हुई है। कृपया बाद में पुनः प्रयास करें।
                    </div>
                `;
            });
        });
    </script>
</body>
</html>
'''

ADMIN_LOGIN_HTML = '''
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Brar Eye Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                            <h4>Admin Login</h4>
                            <p class="text-muted">Brar Eye Hospital</p>
                        </div>
                        <form method="post" action="/admin-login">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </button>
                        </form>
                        <div class="text-center mt-3">
                            <small class="text-muted">Password: brarhospital2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
'''

ADMIN_PANEL_HTML = '''
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Brar Eye Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .hindi-text { font-family: 'Noto Sans Devanagari', sans-serif; }
        .log-container { max-height: 400px; overflow-y: auto; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 0.375rem; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-eye me-2"></i>Brar Eye Hospital - Admin Panel</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/"><i class="fas fa-home me-1"></i>Website</a>
                <a class="nav-link" href="/contact"><i class="fas fa-envelope me-1"></i>Contact Form</a>
                <a class="nav-link" href="/admin-logout"><i class="fas fa-sign-out-alt me-1"></i>Logout</a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <h1 class="mb-4 hindi-text"><i class="fas fa-tachometer-alt me-2"></i>फॉर्म सबमिशन डैशबोर्ड</h1>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">{{ total_submissions }}</h4>
                                <p class="card-text">Total Submissions</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">{{ submissions|length }}</h4>
                                <p class="card-text">Recent Submissions (Last 50)</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-list fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {% if submissions %}
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0 hindi-text"><i class="fas fa-inbox me-2"></i>Form Submissions</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>IP</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for submission in submissions %}
                            <tr>
                                <td>{{ submission.timestamp }}</td>
                                <td>{{ submission.name }}</td>
                                <td><a href="mailto:{{ submission.email }}">{{ submission.email }}</a></td>
                                <td>{{ submission.subject }}</td>
                                <td title="{{ submission.message }}">{{ submission.message[:50] }}{% if submission.message|length > 50 %}...{% endif %}</td>
                                <td>{{ submission.ip }}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {% else %}
        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>No form submissions found yet.
        </div>
        {% endif %}

        {% if spam_log %}
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h3 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i>Spam Attempts</h3>
            </div>
            <div class="card-body">
                <div class="log-container p-3">
                    <pre class="mb-0">{{ spam_log }}</pre>
                </div>
            </div>
        </div>
        {% endif %}

        <div class="alert alert-success">
            <i class="fas fa-check-circle me-2"></i>
            <strong>Google Sheets Integration Status:</strong> Configured and active. Form submissions are being sent to Google Sheets.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
'''

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)