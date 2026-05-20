<?php
// best-eye-hospital-patiala.php

$pageTitle = "Contact Brar Eye Hospital Bathinda | Book Eye Appointment Online – +91 72182-72182";
$pageDescription = "Contact Brar Eye Hospital Bathinda & Kotkapura. Book an eye checkup appointment with top ophthalmologists. Call +91 72182-72182 or visit Rose Garden Chowk, Bathinda, Punjab.";
$pageKeywords = "contact Brar Eye Hospital, book eye appointment Bathinda, eye doctor appointment Bathinda, eye hospital phone number Bathinda, eye checkup Bathinda, Brar Eye Hospital address";

include('header.php');
?>
    <style>
        :root {
            --accent: #03c0b4;
            --accent-dark: #029d92;
            --overlay-dark: rgba(0, 0, 0, 0.55);
            --text-white: #fff;
            --orange: #f17732;
            --font: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: var(--font);
            background: #f8f9fa;
            color: #333;
        }

        .page-title-banner {
            position: relative;
            width: 100%;
            height: 320px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--text-white);
            overflow: hidden;
        }

        .page-title-banner .page-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(var(--overlay-dark), var(--overlay-dark)), 
                        linear-gradient(135deg, #03c0b4 0%, #029d92 50%, #222 100%);
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .page-title-content {
            position: relative;
            z-index: 2;
            animation: fadeUp 1s ease forwards;
        }

        .page-heading {
            font-size: clamp(1.8rem, 5vw, 3rem);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 10px;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
        }

        .breadcrumb-nav {
            list-style: none;
            display: inline-flex;
            gap: 8px;
            padding: 0;
            margin: 0;
            font-weight: 500;
            font-size: 1.05rem;
        }

        .breadcrumb-nav li {
            color: var(--text-white);
        }

        .breadcrumb-nav a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-nav a:hover {
            color: var(--orange);
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .contact-form-section {
            position: relative;
            background: #f8fafb;
            padding: 70px 0;
            overflow: hidden;
        }

        .form-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 36px rgba(3, 192, 180, 0.10);
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-container h2 {
            font-size: 2.1rem;
            color: var(--accent);
            text-align: center;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .form-control {
            padding: 12px 14px;
            font-size: 1rem;
            border-radius: 7px;
            border: 1px solid #e0e7ef;
            background: #f7fcfd;
            transition: border-color 0.2s;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 0.2rem rgba(3, 192, 180, 0.15);
            background: #fff;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .btn-submit {
            background: var(--accent);
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 14px 38px;
            font-size: 1.08rem;
            font-weight: 600;
            box-shadow: 0 4px 18px rgba(3, 192, 180, 0.16);
            cursor: pointer;
            transition: background 0.24s, box-shadow 0.24s;
            width: 100%;
        }

        .btn-submit:hover {
            background: var(--orange);
            box-shadow: 0 6px 20px rgba(253, 126, 20, 0.20);
        }

        .alert-success-custom {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
        }

        .alert-error-custom {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
        }

        .contact-info-section {
            padding: 80px 0;
            background: #fff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            color: #222;
            margin-bottom: 15px;
        }

        .section-title p {
            font-size: 16px;
            color: #666;
        }

        .location-card {
            background: #fff;
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.1);
            height: 100%;
            transition: all 0.3s ease;
            border-top: 4px solid var(--accent);
            text-align: center;
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
        }

        .location-card .icon-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #03c0b4 0%, #029d92 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .location-card .icon-box i {
            font-size: 36px;
            color: #fff;
        }

        .location-card h3 {
            font-size: 24px;
            font-weight: 700;
            color: #222;
            margin-bottom: 20px;
        }

        .location-card .address {
            font-size: 15px;
            line-height: 1.8;
            color: #666;
        }

        .contact-detail-card {
            background: linear-gradient(135deg, #03c0b4 0%, #029d92 100%);
            border-radius: 10px;
            padding: 35px 25px;
            text-align: center;
            height: 100%;
            color: #fff;
            transition: all 0.3s ease;
        }

        .contact-detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(3, 192, 180, 0.3);
        }

        .contact-detail-card .icon-box {
            width: 70px;
            height: 70px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .contact-detail-card .icon-box i {
            font-size: 32px;
            color: #fff;
        }

        .contact-detail-card h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-detail-card p {
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 5px;
        }

        .contact-detail-card a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s ease;
        }

        .contact-detail-card a:hover {
            text-decoration: underline;
            opacity: 0.9;
        }

        .resume-note {
            background: rgba(255,255,255,0.15);
            padding: 12px;
            border-radius: 6px;
            margin-top: 15px;
            font-size: 13px;
            font-style: italic;
        }

        .map-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            height: 400px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .footer {
            background: #222;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        .footer a {
            color: var(--accent);
            text-decoration: none;
        }

        .footer a:hover {
            color: var(--orange);
        }

        @media (max-width: 991px) {
            .page-title-banner {
                height: 260px;
            }
            .location-card, .contact-detail-card {
                margin-bottom: 30px;
            }
            .map-container {
                height: 350px;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 576px) {
            .page-title-banner {
                height: 200px;
                padding: 50px 10px;
            }
            .page-heading {
                font-size: 1.6rem;
            }
            .form-container {
                padding: 25px 20px;
            }
            .section-title h2 {
                font-size: 28px;
            }
            .map-container {
                height: 300px;
            }
        }
    </style>
</head>
<body>

<section class="page-title-banner">
    <div class="page-bg"></div>
    <div class="page-title-content">
        <h1 class="page-heading" style="color:white;">Contact Us</h1>
        <ul class="breadcrumb-nav">
            <li><a href="#">Home</a></li>
            <li>/</li>
            <li style="color:white;">Contact</li>
        </ul>
    </div>
</section>
<!-- Google reCAPTCHA Script (ADD ONCE ON PAGE) -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section id="brar-contact-section"
style="
max-width:900px;
margin:40px auto;
border-radius:16px;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
box-shadow:0 15px 35px rgba(0,0,0,0.1);
background:#fff;
color:#333;
overflow:hidden;
border:1px solid #eee;
">

  <div style="display:flex; align-items:stretch; flex-wrap:wrap;">

    <div style="flex:1; min-width:300px; padding:40px;">

      <h2 style="
      text-align:left;
      font-size:26px;
      margin-bottom:25px;
      font-weight:700;
      color:#333;
      border-left:5px solid #1dd2c3;
      padding-left:15px;">
        Book an Appointment
      </h2>

      <form action="/contact_section/form-process.php"
            method="POST"
            style="display:flex; flex-direction:column; gap:18px;">

        <!-- Honeypot -->
        <div style="display:none;">
          <input type="text" name="website_url" value="">
        </div>

        <!-- Name & Mobile -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <input type="text" name="name" placeholder="Full Name" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
            
            <input type="text" name="mobile" placeholder="Mobile Number" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
        </div>

        <!-- Email & Age -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <input type="email" name="email" placeholder="Email Address" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
            
            <input type="number" name="age" placeholder="Age" required
            style="width:100px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
        </div>

        <!-- Doctor & Branch -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">

            <select name="doctor" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">

                <option value="" disabled selected>Choose Doctor</option>

                <option value="Dr. P.S. Brar">Dr. P.S. Brar – Medical Director & Chief Eye Surgeon</option>
                <option value="Dr. M.S. Brar">Dr. M.S. Brar – Senior Cataract & Paediatric Surgeon</option>
                <option value="Dr. J.K. Gupta">Dr. J.K. Gupta – Senior Consultant Ophthalmologist</option>
                <option value="Dr. Sunny Goyal">Dr. Sunny Goyal – Cataract & Glaucoma Surgeon</option>
                <option value="Dr. Anand Singh Brar">Dr. Anand Singh Brar – Vitreo-Retina Consultant</option>
                <option value="Dr. B. Ravinder Naik">Dr. B. Ravinder Naik – Cataract, Strabismus & Pediatric Ophthalmology Consultant</option>
                <option value="Dr. Aazambir Singh Brar">Dr. Aazambir Singh Brar – Cataract, Refractive & Vitreo-Retina Surgeon</option>

            </select>

            <select name="branch" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">

                <option value="" disabled selected>Select Branch</option>
                <option value="Kotkapura">Kotkapura</option>
                <option value="Bathinda">Bathinda</option>

            </select>

        </div>

        <!-- Description -->
        <textarea name="description" rows="3"
        placeholder="Briefly describe your eye concern..."
        required
        style="padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; resize:none; outline:none;"></textarea>

        <!-- RECAPTCHA -->
        <div style="transform:scale(0.9); transform-origin:0 0;">
            <div class="g-recaptcha" data-sitekey="6Lcr63AsAAAAAFh4z7-avvXy9-Zi7PnJuFM40IG6"></div>
        </div>

        <!-- Button -->
        <button type="submit"
        style="
        padding:15px;
        background:linear-gradient(to right,#1dd2c3,#18b3a5);
        color:#ffffff;
        border:none;
        border-radius:8px;
        font-size:16px;
        font-weight:600;
        cursor:pointer;
        box-shadow:0 8px 20px rgba(29,210,195,0.3);
        text-transform:uppercase;
        letter-spacing:1px;">
          Confirm Appointment
        </button>

      </form>

    </div>

  </div>

</section>

<section class="contact-info-section">
    <div class="container">
        <div class="section-title">
            <h2>Our Locations</h2>
            <p>Visit us at any of our branches for expert eye care services</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="location-card">
                    <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Bathinda Branch</h3>
                    <div class="address">
                        <p><strong>Address:</strong></p>
                        <p>Adjacent to Kapsons, GT Road,<br>
                        Opp. Mittal Mall, Bathinda<br>
                        Punjab, India</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="location-card">
                    <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Kotkapura Branch</h3>
                    <div class="address">
                        <p><strong>Address:</strong></p>
                        <p>Faridkot Road,<br>
                        Kotkapura - 151204<br>
                        Punjab, India</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-info-section" style="background: #f8f9fa;">
    <div class="container">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p>Reach out to us through phone or email</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-detail-card">
                    <div class="icon-box"><i class="fas fa-phone"></i></div>
                    <h4>Call Us</h4>
                    <p><a href="tel:+917218272182">+91 7218272182</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-detail-card">
                    <div class="icon-box"><i class="fas fa-envelope"></i></div>
                    <h4>Email Us</h4>
                    <p><a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a></p>
                    <p style="margin-top: 10px; font-size: 14px;">For General Inquiries & Appointments</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-detail-card">
                    <div class="icon-box"><i class="fas fa-briefcase"></i></div>
                    <h4>Career Opportunities</h4>
                    <p><a href="mailto:brareyehospitalkkp@gmail.com">brareyehospitalkkp@gmail.com</a></p>
                    <div class="resume-note">
                        Send your resume here for job opportunities
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <div class="section-title">
            <h2>Find Us on Map</h2>
            <p>Locate our branches easily with Google Maps</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4 class="text-center mb-3">Bathinda Location</h4>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.238928659031!2d74.93471457655697!3d30.23026230974101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732eec4237631%3A0xa4771d2f5dd99402!2sBrar%20Eye%20Hospital!5e0!3m2!1sen!2sin!4v1747139055406!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <h4 class="text-center mb-3">Kotkapura Location</h4>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3434.8441991856847!2d74.83162257657033!3d30.58172689547859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39173f5c5c5c5c5d%3A0x5d5c5c5c5c5c5c5d!2sFaridkot%20Road%2C%20Kotkapura%2C%20Punjab%20151204!5e0!3m2!1sen!2sin!4v1747140000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Brar Eye Hospital. All Rights Reserved.</p>
        <p><a href="contactadmin/login.php">Admin Login</a></p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>