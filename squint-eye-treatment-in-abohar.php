<?php
// SEO and Meta Information
$pageTitle = "Squint Eye Treatment in Abohar | Strabismus Correction – Brar Eye Hospital";
$pageDescription = "Get expert squint eye treatment in Abohar at Brar Eye Hospital. Safe strabismus correction for children and adults from Abohar and nearby cities in Punjab.";
$pageKeywords = "squint eye treatment Abohar, squint surgery Abohar, strabismus Abohar, crossed eyes treatment Abohar, eye specialist Abohar";
$canonicalUrl = "https://brareye.com/squint-eye-treatment-in-abohar.php";
 include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:site_name" content="BRAR EYE Hospital">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="assets/squint-styles.css">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalBusiness",
        "name": "BRAR EYE Hospital",
        "description": "Leading squint eye treatment specialist in abohar with expert strabismus care services",
        "url": "<?php echo $canonicalUrl; ?>",
        "telephone": "72182-72182",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "abohar",
            "addressRegion": "Punjab",
            "addressCountry": "IN"
        },
        "medicalSpecialty": [
            "Ophthalmology",
            "Pediatric Ophthalmology",
            "Strabismus Surgery"
        ],
        "serviceType": [
            "Squint Treatment",
            "Strabismus Surgery",
            "Pediatric Eye Care",
            "Vision Therapy"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "130000"
        }
    }
    </script>

    <style>
        /* Squint Eye Treatment Page Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', 'Helvetica', sans-serif;
    line-height: 1.6;
    color: #333;
    background: #fff;
}

.cornea-page-container {
    width: 100%;
    max-width: 100%;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Typography */
h1, h2, h3, h4, h5, h6 {
    font-weight: 600;
    line-height: 1.3;
    color: #f17732;
    margin-bottom: 1rem;
}

h1 { font-size: 2.5rem; }
h2 { font-size: 2rem; }
h3 { font-size: 1.5rem; }
h4 { font-size: 1.25rem; }

p {
    margin-bottom: 1rem;
    color: #4a5568;
}

.lead {
    font-size: 1.125rem;
    font-weight: 400;
    color: #2d3748;
}

/* Buttons */
.btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
    font-size: 1rem;
}

.btn-primary {
    background: #f17732;
    color: white;
    box-shadow: 0 4px 15px rgba(241, 119, 50, 0.3);
}

.btn-primary:hover {
    background: #e6692e;
    transform: translateY(-2px);
}

.btn-secondary {
    background: transparent;
    color: #03c0b4;
    border: 2px solid #03c0b4;
}

.btn-secondary:hover {
    background: #03c0b4;
    color: white;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
    padding: 80px 0;
    min-height: 500px;
}

.hero-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 60px;
    align-items: center;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
    color: #f7f5f3ff;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: #4a5568;
    margin-bottom: 2rem;
}

.hero-stats {
    display: flex;
    gap: 30px;
    margin-bottom: 2rem;
}

.stat-item {
    text-align: center;
}

.stat-item i {
    font-size: 1.5rem;
    color: #03c0b4;
    margin-bottom: 8px;
    display: block;
}

.stat-number {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a202c;
}

.stat-label {
    font-size: 0.875rem;
    color: #718096;
}

.hero-cta {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.hero-image {
    display: flex;
    justify-content: center;
    align-items: center;
}

.medical-icon {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 20px 40px rgba(3, 192, 180, 0.3);
}

.medical-icon i {
    font-size: 4rem;
    color: white;
}

/* Section Styling */
section {
    padding: 80px 0;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-subtitle {
    font-size: 1.125rem;
    color: #718096;
    margin-top: 1rem;
}

/* About Section */
.about-cornea-section {
    background: white;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.medical-list {
    list-style: none;
    margin-top: 1.5rem;
}

.medical-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 0;
    color: #4a5568;
}

.medical-list i {
    color: #f17732;
    font-size: 1rem;
}

.anatomy-diagram {
    background: #f7fafc;
    padding: 30px;
    border-radius: 12px;
    border-left: 4px solid #03c0b4;
}

.anatomy-list {
    list-style: none;
    margin-top: 1rem;
}

.anatomy-list li {
    padding: 8px 0;
    color: #4a5568;
}

/* Services Section */
.services-section {
    background: #f7fafc;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.service-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 4px solid #f17732;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.service-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.service-icon i {
    font-size: 1.5rem;
    color: white;
}

.service-card h3 {
    margin-bottom: 15px;
    color: #1a202c;
}

.service-card p {
    color: #4a5568;
    line-height: 1.6;
}

/* Other sections */
.transplant-section {
    background: white;
}

.section-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.transplant-item {
    background: #f7fafc;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 15px;
    border-left: 4px solid #f17732;
}

.transplant-item h4 {
    color: #1a202c;
    margin-bottom: 8px;
}

.reason-list {
    list-style: none;
    margin-bottom: 2rem;
}

.reason-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 0;
    color: #4a5568;
}

.reason-list i {
    color: #38a169;
}

.safety-note {
    background: #e6fffa;
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #38a169;
}

.safety-note h4 {
    color: #1a202c;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Benefits Section */
.why-choose-section {
    background: white;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.benefit-item {
    text-align: center;
    padding: 30px 20px;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
}

.benefit-item:hover {
    background: #f7fafc;
    transform: translateY(-5px);
}

.benefit-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.benefit-icon i {
    font-size: 1.75rem;
    color: white;
}

/* Vision Correction Section */
.vision-correction-section {
    background: #f7fafc;
}

.correction-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 30px;
}

.option-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.option-card.featured {
    border: 2px solid #f17732;
    position: relative;
}

.featured-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #f17732;
    color: white;
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
}

.option-header {
    padding: 30px;
    text-align: center;
    background: linear-gradient(135deg, #f17732 0%, #e6692e 100%);
    color: white;
}

.option-header i {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.option-features {
    padding: 30px;
}

.option-features ul {
    list-style: none;
}

.option-features li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 0;
    color: #4a5568;
}

.option-features i {
    color: #38a169;
}

/* Testimonials Section */
.testimonials-section {
    background: #f7fafc;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.testimonial-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.testimonial-content p {
    font-style: italic;
    color: #4a5568;
    position: relative;
    padding-left: 20px;
}

.testimonial-content p::before {
    content: '"';
    position: absolute;
    left: 0;
    top: -5px;
    font-size: 2rem;
    color: #f17732;
    line-height: 1;
}

.testimonial-author {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #e2e8f0;
    padding-top: 20px;
    margin-top: 20px;
}

.author-info h4 {
    color: #1a202c;
    margin-bottom: 5px;
}

.author-info span {
    color: #718096;
    font-size: 0.875rem;
}

.rating {
    display: flex;
    gap: 2px;
}

.rating i {
    color: #fbbf24;
    font-size: 1rem;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
    color: white;
    padding: 80px 0;
}

.cta-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.cta-text h2 {
    color: white;
    margin-bottom: 20px;
}

.cta-text p {
    color: #a0aec0;
    margin-bottom: 30px;
}

.cta-benefits {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.benefit {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #a0aec0;
}

.benefit i {
    color: #68d391;
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-method {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.contact-method:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
}

.contact-method.primary {
    background: #f17732;
    border-color: #f17732;
}

.contact-method.primary:hover {
    background: #e6692e;
}

.contact-method i {
    font-size: 1.5rem;
    width: 30px;
    text-align: center;
}

.contact-method div {
    flex: 1;
}

.contact-method strong {
    display: block;
    margin-bottom: 5px;
}

.contact-method span {
    color: #a0aec0;
    font-size: 0.875rem;
}

.contact-method.primary span {
    color: #bee3f8;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .hero-content,
    .content-grid,
    .section-content,
    .cta-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .hero-stats {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 0 15px;
    }
    
    section {
        padding: 60px 0;
    }
    
    .hero-title {
        font-size: 2.25rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 20px;
    }
    
    .hero-cta {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .services-grid,
    .benefits-grid,
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .correction-options {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 1.875rem;
    }
    
    h2 {
        font-size: 1.75rem;
    }
    
    .service-card,
    .testimonial-card,
    .benefit-item {
        padding: 20px;
    }
    
    .medical-icon {
        width: 150px;
        height: 150px;
    }
    
    .medical-icon i {
        font-size: 3rem;
    }
}
    </style>
</head>
<body>

<!-- Main Content Container -->
<div class="cornea-page-container">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title" style="color:#f17732;">Squint Eye Treatment in abohar</h1>
                    <p class="hero-subtitle">Expert Strabismus Care for Children & Adults</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <span class="stat-number">1.3+ Lakh</span>
                            <span class="stat-label">Satisfied Patients</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="stat-number">21+ Years</span>
                            <span class="stat-label">Experience</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-child"></i>
                            <span class="stat-number">Pediatric</span>
                            <span class="stat-label">Specialists</span>
                        </div>
                    </div>
                    <div class="hero-cta">
                        <a href="tel:7218272182" class="btn btn-primary">
                            <i class="fas fa-phone"></i> Call Now: 72182-72182
                        </a>
                        <a href="tel:7218272182" class="btn btn-secondary">Book Appointment</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="medical-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Understanding Squint Section -->
    <section class="about-cornea-section">
        <div class="container">
            <div class="section-header">
                <h2>Understanding Squint (Strabismus)</h2>
                <p class="section-subtitle">When Eyes Don't Align Properly</p>
            </div>
            <div class="content-grid">
                <div class="content-text">
                    <p>Squint, also known as strabismus, is a common vision disorder where the eyes do not align properly. One eye may look straight ahead while the other turns inward, outward, upward, or downward. This misalignment affects vision and depth perception.</p>
                    
                    <p>Squint can affect individuals of all ages, but it often begins in early childhood. If you notice that your child's eyes seem misaligned after the age of 6–7 weeks, it's essential to consult a specialist without delay.</p>
                    
                    <div class="cornea-causes">
                        <h3>Types of Squint:</h3>
                        <ul class="medical-list">
                            <li><i class="fas fa-arrow-right"></i> <strong>Convergent squint (Esotropia)</strong> – Eye turns inward</li>
                            <li><i class="fas fa-arrow-left"></i> <strong>Divergent squint (Exotropia)</strong> – Eye turns outward</li>
                            <li><i class="fas fa-arrow-up"></i> <strong>Vertical squint (Hypertropia)</strong> – Eye turns upward</li>
                            <li><i class="fas fa-arrow-down"></i> <strong>Vertical squint (Hypotropia)</strong> – Eye turns downward</li>
                        </ul>
                    </div>
                </div>
                <div class="eye-anatomy">
                    <div class="anatomy-diagram">
                        <h4>Squint Symptoms in Children</h4>
                        <ul class="anatomy-list">
                            <li><strong>Eyes looking in different directions</strong></li>
                            <li><strong>Blurred or double vision</strong></li>
                            <li><strong>Tilting head to see properly</strong></li>
                            <li><strong>Sensitivity to bright lights</strong></li>
                            <li><strong>Headaches or eye strain</strong></li>
                            <li><strong>Poor depth perception</strong></li>
                        </ul>
                        <div style="margin-top: 20px; padding: 15px; background: #fed7d7; border-radius: 8px; border-left: 4px solid #e53e3e;">
                            <p style="margin: 0; color: #4a5568; font-weight: 500;"><i class="fas fa-exclamation-triangle" style="color: #e53e3e; margin-right: 8px;"></i>Early detection is crucial to prevent amblyopia (lazy eye)!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Options Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Squint Treatment Options</h2>
                <p class="section-subtitle">Comprehensive Non-Surgical & Surgical Solutions</p>
            </div>
            
            <div class="services-grid">
                <!-- Non-Surgical Treatments -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-glasses"></i>
                    </div>
                    <h3>Prescription Glasses</h3>
                    <p>If squint is due to refractive errors, wearing prescription glasses can correct the alignment and improve vision.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-eye-slash"></i>
                    </div>
                    <h3>Eye Patching Therapy</h3>
                    <p>Patching the stronger eye forces the weaker eye to work harder, improving vision and alignment in children.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Eye Exercises</h3>
                    <p>Exercises like pencil push-ups help improve coordination and muscle control for better eye alignment.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-prism"></i>
                    </div>
                    <h3>Prism Glasses</h3>
                    <p>Special lenses that redirect light to reduce double vision and improve eye alignment without surgery.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3>Botulinum Toxin (Botox)</h3>
                    <p>Botox injections into eye muscles to temporarily improve alignment in specific squint cases.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-surgical-scalpel"></i>
                    </div>
                    <h3>Squint Surgery</h3>
                    <p>Advanced surgical techniques to reposition eye muscles for proper alignment when non-surgical methods aren't enough.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Pediatric Care</h3>
                    <p>Specialized child-friendly diagnostic and treatment methods with compassionate care for young patients.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Vision Therapy</h3>
                    <p>Customized vision therapy programs to improve binocular vision and strengthen eye coordination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section -->
    <section class="transplant-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>What Causes Squint?</h2>
                    <p class="lead">Several factors can lead to squint, affecting both children and adults. Understanding the cause helps determine the best treatment approach.</p>
                    
                    <div class="transplant-types">
                        <h3>Common Causes:</h3>
                        <div class="transplant-list">
                            <div class="transplant-item">
                                <h4>Genetic Factors</h4>
                                <p>Hereditary reasons and family history of squint</p>
                            </div>
                            <div class="transplant-item">
                                <h4>Muscle Weakness</h4>
                                <p>Weakness or imbalance in the eye muscles</p>
                            </div>
                            <div class="transplant-item">
                                <h4>Neurological Issues</h4>
                                <p>Nerve problems controlling eye muscles, cerebral palsy, Down syndrome</p>
                            </div>
                            <div class="transplant-item">
                                <h4>Vision Problems</h4>
                                <p>Poor vision due to cataracts, glaucoma, or refractive errors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="transplant-reasons">
                        <h3>Pencil Push-Up Exercise</h3>
                        <p style="margin-bottom: 15px;">This simple exercise helps improve eye coordination:</p>
                        <ul class="reason-list">
                            <li><i class="fas fa-check-circle"></i> Hold a pencil at arm's length</li>
                            <li><i class="fas fa-check-circle"></i> Focus on a letter or mark on it</li>
                            <li><i class="fas fa-check-circle"></i> Slowly bring it toward your nose</li>
                            <li><i class="fas fa-check-circle"></i> Keep it in focus throughout</li>
                            <li><i class="fas fa-check-circle"></i> Stop if it becomes blurry or double</li>
                        </ul>
                        <p style="font-size: 0.9rem; color: #718096; margin-top: 15px;">Doing this daily can help improve binocular vision and strengthen eye muscles.</p>
                    </div>
                    
                    <div class="safety-note">
                        <h4><i class="fas fa-clock"></i> Early Treatment is Key</h4>
                        <p>If untreated, squint can lead to amblyopia (lazy eye), where the brain ignores signals from the misaligned eye, causing permanent vision loss.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose BRAR EYE Hospital for Squint Treatment?</h2>
                <p class="section-subtitle">Your Trusted Partner in Squint-Free Vision</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>21+ Years Expertise</h3>
                    <p>Trusted by families across Punjab with proven track record in squint treatment</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>1.3+ Lakh Patients</h3>
                    <p>Successfully treated over 130,000 patients with various eye conditions</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>Latest diagnostic and surgical equipment for precise squint correction</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Expert Surgeons</h3>
                    <p>Highly skilled eye surgeons with hundreds of successful squint surgeries</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Child-Friendly Care</h3>
                    <p>Compassionate pediatric care with child-friendly diagnostic methods</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-glasses"></i>
                    </div>
                    <h3>Freedom from Specs</h3>
                    <p>Vision improvement guidance and spectacle removal solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Surgery Information Section -->
    <section class="vision-correction-section">
        <div class="container">
            <div class="section-header">
                <h2>Squint Surgery at BRAR EYE Hospital</h2>
                <p class="section-subtitle">Advanced Surgical Solutions for Perfect Eye Alignment</p>
            </div>
            
            <div class="correction-options">
                <div class="option-card featured">
                    <div class="featured-badge">Most Effective</div>
                    <div class="option-header">
                        <i class="fas fa-surgical-scalpel"></i>
                        <h3 style="color : white;">Squint Surgery</h3>
                        <p>Repositioning eye muscles for proper alignment</p>
                    </div>
                    <div class="option-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Short outpatient procedure</li>
                            <li><i class="fas fa-check"></i> Day-care facility available</li>
                            <li><i class="fas fa-check"></i> Advanced surgical techniques</li>
                            <li><i class="fas fa-check"></i> Significant cosmetic improvement</li>
                            <li><i class="fas fa-check"></i> Restores binocular vision</li>
                            <li><i class="fas fa-check"></i> Both eyes may need surgery</li>
                        </ul>
                    </div>
                </div>
                
                <div class="option-card">
                    <div class="option-header">
                        <i class="fas fa-eye"></i>
                        <h3. style="color : white;">Pediatric Squint Care</h3>
                        <p>Specialized care for children with squint</p>
                    </div>
                    <div class="option-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Early intervention programs</li>
                            <li><i class="fas fa-check"></i> Child-friendly environment</li>
                            <li><i class="fas fa-check"></i> Customized treatment plans</li>
                            <li><i class="fas fa-check"></i> Vision therapy sessions</li>
                            <li><i class="fas fa-check"></i> Parent education and support</li>
                            <li><i class="fas fa-check"></i> Long-term follow-up care</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>Success Stories</h2>
                <p class="section-subtitle">Families Trust BRAR EYE Hospital for Squint Treatment</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>My daughter had severe squint since birth. The doctors at BRAR EYE Hospital performed surgery when she was 3 years old. Now she has perfect eye alignment and no more teasing at school. Thank you for giving her confidence back!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Simran Kaur</h4>
                            <span>Mother of 6-year-old patient, abohar</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>I was hesitant about surgery for my 8-year-old son's squint. But the team at BRAR EYE Hospital explained everything clearly. The surgery was quick, and recovery was smooth. His vision has improved dramatically!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Rajinder Singh</h4>
                            <span>Father of patient, abohar</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>Adult squint surgery seemed scary, but Dr. Brar and his team made me feel comfortable. The procedure was painless, and I can now see clearly without double vision. Highly recommend for squint treatment!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Manpreet Kaur</h4>
                            <span>Adult patient, Faridkot</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2>Don't Ignore Signs of Squint</h2>
                    <p>Timely intervention can protect your child's vision and confidence. We are committed to delivering the best squint eye treatment in abohar.</p>
                    <div class="cta-benefits">
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Expert pediatric squint specialists</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Advanced surgical techniques</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Child-friendly environment</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>21+ years of trusted care</span>
                        </div>
                    </div>
                </div>
                <div class="contact-methods">
                    <a href="tel:7218272182" class="contact-method primary">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Call Now for Appointment</strong>
                            <span>72182-72182</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Visit Our Clinic</strong>
                            <span>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-calendar-check"></i>
                        <div>
                            <strong>Book Consultation</strong>
                            <span>Take the first step towards squint-free vision</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>

<?php include 'footer.php'; ?>
