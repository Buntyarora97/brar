
<?php
$pageTitle = "Eyesight operation in Mansa – BRAR EYE Hospital’s Expertise";
$pageDescription = "Searching for Eyesight operation in Mansa? Visit BRAR EYE Hospital – Where every eye is treated with precision, compassion, and latest tools in ophthalmology.";
$pageKeywords = "vision improvement surgery in mansa, specs removal operation in mansa, corrective eye surgery in mansa, surgical eye care in mansa";
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
<style>
    /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Inter', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #ffffff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header Styles */
.header {
    background: linear-gradient(135deg, #f17732 0%, #03c0b4 100%);
    color: white;
    padding: 1rem 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}

.logo span {
    font-size: 0.9rem;
    opacity: 0.9;
}

.contact-info .phone {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.1rem;
    font-weight: 600;
}

.contact-info .phone i {
    font-size: 1.2rem;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.95) 0%, rgba(3, 192, 180, 0.95) 100%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23f8f9fa"><polygon points="0,100 1000,0 1000,100"/></svg>');
    color: white;
    padding: 4rem 0;
    text-align: center;
    position: relative;
}

.hero-content h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.hero-content h2 {
    font-size: 1.8rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
    opacity: 0.95;
}

.hero-content p {
    font-size: 1.1rem;
    max-width: 800px;
    margin: 0 auto 2rem;
    opacity: 0.9;
}

.hero-cta {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Button Styles */
.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-primary {
    background-color: #f17732;
    color: white;
    box-shadow: 0 4px 15px rgba(241, 119, 50, 0.3);
}

.btn-primary:hover {
    background-color: #e06429;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(241, 119, 50, 0.4);
}

.btn-secondary {
    background-color: transparent;
    color: white;
    border: 2px solid white;
}

.btn-secondary:hover {
    background-color: white;
    color: #f17732;
    transform: translateY(-2px);
}

.btn-large {
    padding: 1rem 2rem;
    font-size: 1.1rem;
}

/* Navigation Menu */
.nav-menu {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 100;
}

.nav-list {
    display: flex;
    list-style: none;
    gap: 2rem;
    padding: 1rem 0;
    overflow-x: auto;
}

.nav-list a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.nav-list a:hover,
.nav-list a.active {
    background: linear-gradient(135deg, #f17732, #03c0b4);
    color: white;
    transform: translateY(-2px);
}

/* Main Content */
.main-content {
    padding: 2rem 0;
}

.content-section {
    margin-bottom: 3rem;
}

.content-card {
    background: white;
    padding: 2.5rem;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    border: 1px solid #f0f0f0;
}

.content-card h2 {
    color: #f17732;
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.content-card h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(135deg, #f17732, #03c0b4);
    border-radius: 2px;
}

.content-card h3 {
    color: #03c0b4;
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.lead {
    font-size: 1.2rem;
    font-weight: 500;
    color: #555;
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

/* Type Cards */
.glaucoma-types {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.type-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    border-left: 4px solid #f17732;
    transition: all 0.3s ease;
}

.type-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-left-color: #03c0b4;
}

.type-card h3 i {
    color: #f17732;
    margin-right: 0.5rem;
}

.type-card ul {
    list-style: none;
    padding-left: 0;
}

.type-card li {
    padding: 0.3rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.type-card li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #03c0b4;
    font-weight: bold;
}

/* Risk Factors Grid */
.risk-factors {
    margin-top: 2rem;
}

.risk-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
}

.risk-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.risk-item:hover {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
    transform: translateX(5px);
}

.risk-item i {
    color: #f17732;
    font-size: 1.2rem;
    min-width: 20px;
}

/* Symptoms Grid */
.symptoms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.symptom-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.symptom-item:hover {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
    transform: translateY(-3px);
}

.symptom-item i {
    color: #03c0b4;
    font-size: 1.5rem;
    min-width: 24px;
}

/* Warning Box */
.warning-box {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
    border: 2px solid #f17732;
    border-radius: 12px;
    padding: 1.5rem;
    margin: 2rem 0;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.warning-box i {
    color: #f17732;
    font-size: 1.5rem;
    margin-top: 0.2rem;
}

/* Diagnostic Tests */
.diagnostic-tests {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.test-card {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.test-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    border-color: #03c0b4;
}

.test-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #f17732, #03c0b4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
}

.test-icon i {
    color: white;
    font-size: 1.5rem;
}

.test-card h3 {
    color: #333;
    margin-bottom: 1rem;
    justify-content: center;
}

.test-card ul {
    list-style: none;
    text-align: left;
}

.test-card li {
    padding: 0.3rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.test-card li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #03c0b4;
    font-weight: bold;
}

.test-note {
    background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
    padding: 1.5rem;
    border-radius: 12px;
    margin-top: 2rem;
    border-left: 4px solid #03c0b4;
    font-style: italic;
}

/* Treatment Options */
.treatment-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.treatment-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 2px solid #f0f0f0;
}

.treatment-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    border-color: #f17732;
}

.treatment-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #f17732, #03c0b4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.treatment-icon i {
    color: white;
    font-size: 1.8rem;
}

.treatment-note {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
    padding: 1.5rem;
    border-radius: 12px;
    margin-top: 2rem;
    border-left: 4px solid #f17732;
    font-weight: 500;
}

/* Features Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.feature-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s ease;
    border: 2px solid #f0f0f0;
    position: relative;
    overflow: hidden;
}

.feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, #f17732, #03c0b4);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.feature-card:hover::before {
    transform: scaleX(1);
}

.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    border-color: #03c0b4;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #f17732, #03c0b4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.feature-icon i {
    color: white;
    font-size: 2rem;
}

.feature-card h3 {
    color: #333;
    margin-bottom: 1rem;
    justify-content: center;
}

/* Tips Grid */
.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.tip-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.tip-item:hover {
    background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
    transform: translateX(5px);
}

.tip-item i {
    color: #03c0b4;
    font-size: 1.3rem;
    min-width: 24px;
}

/* Contact Section */
.contact-section {
    margin-top: 4rem;
}

.contact-card {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.05), rgba(3, 192, 180, 0.05));
    border: 2px solid #f17732;
    text-align: center;
}

.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin: 3rem 0;
}

.contact-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.contact-item i {
    font-size: 2rem;
    color: #f17732;
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
    padding: 1rem;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-item h3 {
    color: #333;
    margin-bottom: 0.5rem;
    justify-content: center;
}

.contact-item a {
    color: #f17732;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.2rem;
}

.contact-item a:hover {
    color: #03c0b4;
}

.cta-buttons {
    margin: 2rem 0;
}

.hospital-tagline {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 2px solid #f17732;
}

.hospital-tagline h3 {
    color: #f17732;
    margin-bottom: 1rem;
    justify-content: center;
}

/* Footer */
.footer {
    background: linear-gradient(135deg, #333 0%, #555 100%);
    color: white;
    padding: 3rem 0 1rem;
    margin-top: 4rem;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-info h3 {
    color: #f17732;
    margin-bottom: 1rem;
}

.footer-contact h4 {
    color: #03c0b4;
    margin-bottom: 1rem;
}

.footer-contact p {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
}

.footer-bottom {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid #666;
    opacity: 0.8;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 0 15px;
    }
    
    .header-content {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    
    .hero-content h1 {
        font-size: 2.2rem;
    }
    
    .hero-content h2 {
        font-size: 1.4rem;
    }
    
    .hero-cta {
        flex-direction: column;
        align-items: center;
    }
    
    .nav-list {
        gap: 1rem;
        padding: 0.5rem 0;
    }
    
    .nav-list a {
        padding: 0.4rem 0.8rem;
        font-size: 0.9rem;
    }
    
    .content-card {
        padding: 1.5rem;
    }
    
    .content-card h2 {
        font-size: 1.8rem;
    }
    
    .glaucoma-types,
    .diagnostic-tests,
    .treatment-options,
    .features-grid {
        grid-template-columns: 1fr;
    }
    
    .risk-grid,
    .symptoms-grid,
    .tips-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-info-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .hero-content h1 {
        font-size: 1.8rem;
    }
    
    .hero-content h2 {
        font-size: 1.2rem;
    }
    
    .content-card h2 {
        font-size: 1.6rem;
    }
    
    .contact-info-grid {
        grid-template-columns: 1fr;
    }
    
    .type-card,
    .test-card,
    .treatment-card,
    .feature-card {
        padding: 1.5rem;
    }
    
    .test-icon,
    .treatment-icon,
    .feature-icon {
        width: 50px;
        height: 50px;
    }
    
    .test-icon i,
    .treatment-icon i,
    .feature-icon i {
        font-size: 1.2rem;
    }
}

/* Print Styles */
@media print {
    .header,
    .nav-menu,
    .hero,
    .footer {
        display: none;
    }
    
    .content-card {
        box-shadow: none;
        border: 1px solid #ddd;
        page-break-inside: avoid;
    }
    
    .content-section {
        page-break-before: auto;
    }
}

/* Accessibility Improvements */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Focus Styles for Better Accessibility */
.btn:focus,
.nav-list a:focus {
    outline: 2px solid #f17732;
    outline-offset: 2px;
}

/* High Contrast Mode Support */
@media (prefers-contrast: high) {
    .content-card {
        border: 2px solid #333;
    }
    
    .type-card,
    .test-card,
    .treatment-card,
    .feature-card {
        border: 1px solid #666;
    }
}

</style>
</head>
<body>
 

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 style=" color :white;">Eyesight Operation in mansa</h1>
                <h2 style=" color :white;">BRAR EYE Hospital</h2>
                <p style=" color :white;">Over 21 years of dedicated eye care service with more than 1.3 lakh successfully treated patients. We combine compassion, innovation, and expertise to offer the most reliable and modern solutions to vision problems.</p>
                <div class="hero-cta">
                    <a href="tel:7218272182" class="btn btn-primary">
                        <i class="fas fa-phone"></i>
                        Call Now: 72182-72182
                    </a>
                    <a href="#contact" class="btn btn-secondary">Book Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Menu -->
    <nav class="nav-menu">
        <div class="container">
            <ul class="nav-list">
                <li><a href="#about-hospital">About Hospital</a></li>
                <li><a href="#why-choose-us">Why Choose Us</a></li>
                <li><a href="#vision-problems">Vision Problems</a></li>
                <li><a href="#operation-types">Operation Types</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Introduction -->
            <section class="intro-section">
                <div class="content-card">
                    <p class="lead">If you're searching for eyesight operation in mansa, look no further than BRAR EYE Hospital. With more than 21 years of dedicated eye care service and over 1.3 lakh successfully treated patients, we are proud to be a trusted name in eye health.</p>
                    <p>We combine compassion, innovation, and expertise to offer the most reliable and modern solutions to vision problems.</p>
                </div>
            </section>

            <!-- About Hospital Section -->
            <section id="about-hospital" class="content-section">
                <div class="content-card">
                    <h2>About BRAR EYE Hospital</h2>
                    <p>BRAR EYE Hospital, located in the heart of mansa, has been a pillar of excellence in eye care since its inception. Our mission has always been to provide world-class eye care using the latest technologies while maintaining a patient-friendly approach.</p>
                    <p>We understand how precious your vision is. That's why we offer a wide range of surgical and non-surgical eye treatments designed to restore and protect your eyesight.</p>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section id="why-choose-us" class="content-section">
                <div class="content-card">
                    <h2>Why Choose BRAR EYE Hospital for Eyesight Operation in mansa?</h2>
                    <p>Choosing the right hospital for an eyesight operation in mansa is a crucial decision. Here's why BRAR EYE Hospital stands out:</p>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3>21+ Years of Experience</h3>
                            <p>For over two decades, BRAR EYE Hospital has been delivering top-notch eye care services in mansa and surrounding areas. Our rich experience ensures accurate diagnosis and successful treatment.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>1.3+ Lakh Happy Patients</h3>
                            <p>We've successfully treated over 1.3 lakh patients. Each story is a testament to our dedication, care, and medical excellence.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-glasses"></i>
                            </div>
                            <h3>Freedom from Spectacles</h3>
                            <p>Many patients walk out of BRAR EYE Hospital enjoying freedom from spectacles after their eyesight operations. Whether it's LASIK, SMILE Pro, or Cataract Surgery, we aim to improve your vision.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3>State-of-the-Art Technology</h3>
                            <p>We use only the most advanced and latest machines for eyesight operations including bladeless LASIK, SMILE Pro, FEMTO Laser Cataract Surgery, and more.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Highly Qualified Eye Surgeons</h3>
                            <p>Our team of experienced and skilled ophthalmologists ensures your eye surgery is safe, effective, and painless. Our surgeons are supported by a compassionate medical team.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                            <h3>Affordable Eye Care</h3>
                            <p>We offer cost-effective eyesight operations with flexible payment options and complete transparency, making quality eye care accessible to everyone.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Vision Problems Section -->
            <section id="vision-problems" class="content-section">
                <div class="content-card">
                    <h2>Understanding Eyesight: A Vital Sense</h2>
                    <p>Eyesight is one of the most important senses. It allows you to perceive the world around you, recognize faces, read, drive, and enjoy the beauty of nature. Your eyes work in harmony with your brain to process visual information. However, due to aging, genetics, environmental factors, or prolonged screen exposure, your vision may begin to deteriorate.</p>
                    
                    <h3>Common Vision Problems Include:</h3>
                    <div class="vision-problems-grid">
                        <div class="problem-item">
                            <i class="fas fa-eye"></i>
                            <span>Myopia (Nearsightedness)</span>
                        </div>
                        <div class="problem-item">
                            <i class="fas fa-eye"></i>
                            <span>Hyperopia (Farsightedness)</span>
                        </div>
                        <div class="problem-item">
                            <i class="fas fa-eye"></i>
                            <span>Astigmatism</span>
                        </div>
                        <div class="problem-item">
                            <i class="fas fa-eye"></i>
                            <span>Presbyopia</span>
                        </div>
                        <div class="problem-item">
                            <i class="fas fa-eye"></i>
                            <span>Cataracts</span>
                        </div>
                    </div>
                    
                    <div class="warning-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p><strong>Important:</strong> Ignoring vision problems may lead to permanent damage. This is why early diagnosis and timely treatment — such as an eyesight operation — is crucial for preserving your vision.</p>
                    </div>
                </div>
            </section>

            <!-- Operation Types Section -->
            <section id="operation-types" class="content-section">
                <div class="content-card">
                    <h2>Types of Eyesight Operations Available</h2>
                    <p>At BRAR EYE Hospital, we offer a variety of eyesight operations in mansa tailored to each patient's specific condition:</p>
                    
                    <div class="surgery-types">
                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-laser-pointer"></i>
                            </div>
                            <h3>LASIK Surgery</h3>
                            <p>LASIK is a popular vision correction procedure that reshapes the cornea to correct nearsightedness, farsightedness, and astigmatism. It offers fast recovery and long-lasting results. Most patients achieve 6/6 or near-perfect vision after LASIK.</p>
                            <div class="surgery-features">
                                <span class="feature-tag">Fast Recovery</span>
                                <span class="feature-tag">6/6 Vision</span>
                                <span class="feature-tag">Bladeless</span>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>SMILE Pro Eye Surgery</h3>
                            <p>SMILE Pro is the most advanced and minimally invasive laser surgery for vision correction. It's bladeless, painless, and ensures a quick recovery time. It's ideal for active individuals and those looking for a flapless laser solution.</p>
                            <div class="surgery-features">
                                <span class="feature-tag">Most Advanced</span>
                                <span class="feature-tag">Painless</span>
                                <span class="feature-tag">Flapless</span>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-circle"></i>
                            </div>
                            <h3>Cataract Surgery</h3>
                            <p>We offer both traditional and femto-laser-assisted cataract surgeries. Our high-quality intraocular lenses (IOLs) help patients regain sharp and clear vision. Cataract surgery is one of the safest and most common eyesight operations performed worldwide.</p>
                            <div class="surgery-features">
                                <span class="feature-tag">Safe</span>
                                <span class="feature-tag">Clear Vision</span>
                                <span class="feature-tag">IOLs Available</span>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3>ICL Surgery</h3>
                            <p>For patients who are not suitable for LASIK, Implantable Collamer Lens (ICL) surgery is a great alternative. It provides high-definition vision correction and is ideal for people with thin corneas or high power.</p>
                            <div class="surgery-features">
                                <span class="feature-tag">LASIK Alternative</span>
                                <span class="feature-tag">High Definition</span>
                                <span class="feature-tag">High Power Correction</span>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Keratoconus Treatment</h3>
                            <p>We provide Corneal Cross-Linking and other advanced treatments for patients with keratoconus, helping to preserve and improve their vision.</p>
                            <div class="surgery-features">
                                <span class="feature-tag">Cross-Linking</span>
                                <span class="feature-tag">Vision Preservation</span>
                                <span class="feature-tag">Advanced Treatment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Importance Section -->
            <section class="content-section">
                <div class="content-card">
                    <h2>Importance of Timely Eyesight Operations</h2>
                    <div class="importance-grid">
                        <div class="importance-card negative">
                            <div class="importance-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <h3>Delaying Operation Can Lead To:</h3>
                            <ul>
                                <li>Worsening of vision problems</li>
                                <li>Difficulty in reading, driving, or performing daily tasks</li>
                                <li>Eye strain and headaches</li>
                                <li>Increased dependency on glasses</li>
                            </ul>
                        </div>

                        <div class="importance-card positive">
                            <div class="importance-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3>Timely Operation Benefits:</h3>
                            <ul>
                                <li>A new outlook on life — quite literally</li>
                                <li>Improved vision and confidence</li>
                                <li>Greater independence and activity</li>
                                <li>Better quality of life</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits Section -->
            <section id="benefits" class="content-section">
                <div class="content-card">
                    <h2>Benefits of Getting an Eyesight Operation</h2>
                    <p>Here are some advantages of undergoing an eyesight operation in mansa at BRAR EYE Hospital:</p>
                    
                    <div class="benefits-grid">
                        <div class="benefit-item">
                            <i class="fas fa-eye"></i>
                            <span>Clearer and sharper vision</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-glasses"></i>
                            <span>No need for spectacles or contact lenses</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-smile"></i>
                            <span>Increased confidence and better quality of life</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-clock"></i>
                            <span>Safe and quick recovery</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-rupee-sign"></i>
                            <span>Affordable and transparent pricing</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-chart-line"></i>
                            <span>Better academic and professional performance</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-brain"></i>
                            <span>Enhanced focus and reduced eye fatigue</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- What to Expect Section -->
            <section class="content-section">
                <div class="content-card">
                    <h2>What to Expect Before and After Your Eyesight Operation</h2>
                    
                    <div class="expect-grid">
                        <div class="expect-card">
                            <div class="expect-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h3>Pre-Operation</h3>
                            <ul>
                                <li>Detailed eye check-up with diagnostic imaging</li>
                                <li>Counselling by our eye care experts to choose the most suitable procedure</li>
                                <li>Explanation of risks, benefits, and recovery expectations</li>
                            </ul>
                        </div>

                        <div class="expect-card">
                            <div class="expect-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Post-Operation</h3>
                            <ul>
                                <li>Minimal downtime</li>
                                <li>Medications and eye drops to support healing</li>
                                <li>Protective glasses and instructions for aftercare</li>
                                <li>Regular follow-ups to monitor recovery</li>
                            </ul>
                        </div>
                    </div>
                    
                    <p class="care-note"><strong>Our Commitment:</strong> Our team will be with you every step of the way to ensure comfort, safety, and satisfaction.</p>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="content-section">
                <div class="content-card">
                    <h2>Patient Testimonials</h2>
                    
                    <div class="testimonials-grid">
                        <div class="testimonial-card">
                            <div class="testimonial-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p>"I got my LASIK done at BRAR EYE Hospital and now I see the world more clearly. No more specs!"</p>
                            <div class="testimonial-author">
                                <strong>Ranjeet K.</strong>
                                <span>mansa</span>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="testimonial-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p>"After cataract surgery at BRAR EYE Hospital, my father is now able to read and watch TV again without any difficulty."</p>
                            <div class="testimonial-author">
                                <strong>Meena S.</strong>
                                <span>Faridkot</span>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="testimonial-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p>"Highly experienced doctors and advanced facilities. My eyesight operation in mansa was smooth and painless."</p>
                            <div class="testimonial-author">
                                <strong>Harpreet D.</strong>
                                <span>Muktsar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="content-section contact-section">
                <div class="content-card contact-card">
                    <h2>How to Book Your Appointment</h2>
                    <p>Booking your eyesight operation in mansa with BRAR EYE Hospital is simple:</p>
                    
                    <div class="contact-info-grid">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <h3>Call Us</h3>
                            <a href="tel:7218272182">72182-72182</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Visit Us</h3>
                            <p>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-calendar-alt"></i>
                            <h3>Experience</h3>
                            <p>21+ Years</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-users"></i>
                            <h3>Patients Treated</h3>
                            <p>1.3+ Lakh</p>
                        </div>
                    </div>
                    
                    <div class="cta-buttons">
                        <a href="tel:7218272182" class="btn btn-primary btn-large">
                            <i class="fas fa-phone"></i>
                            Call Now: 72182-72182
                        </a>
                    </div>
                    
                    <div class="hospital-tagline">
                        <h3>BRAR EYE Hospital - Advanced Eye Care, Trusted by Thousands</h3>
                        <p>We believe that everyone deserves clear vision. That's why we offer cost-effective eyesight operations with flexible payment options and complete transparency.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add active class to navigation items on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-list a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    <style>
        /* Additional styles specific to this page */
        .vision-problems-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .problem-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .problem-item:hover {
            background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
            transform: translateX(5px);
        }

        .problem-item i {
            color: #f17732;
            font-size: 1.2rem;
            min-width: 20px;
        }

        .surgery-features {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .feature-tag {
            background: linear-gradient(135deg, #f17732, #03c0b4);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .importance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .importance-card {
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
        }

        .importance-card.negative {
            background: linear-gradient(135deg, rgba(220, 53, 69, 0.1), rgba(255, 193, 7, 0.1));
            border: 2px solid #dc3545;
        }

        .importance-card.positive {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1), rgba(3, 192, 180, 0.1));
            border: 2px solid #28a745;
        }

        .importance-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .importance-card.negative .importance-icon {
            background: #dc3545;
        }

        .importance-card.positive .importance-icon {
            background: #28a745;
        }

        .importance-icon i {
            color: white;
            font-size: 1.5rem;
        }

        .importance-card h3 {
            color: #333;
            margin-bottom: 1rem;
            justify-content: center;
        }

        .importance-card ul {
            list-style: none;
            text-align: left;
        }

        .importance-card li {
            padding: 0.3rem 0;
            position: relative;
            padding-left: 1.5rem;
        }

        .importance-card.negative li::before {
            content: '⚠';
            position: absolute;
            left: 0;
            color: #dc3545;
            font-weight: bold;
        }

        .importance-card.positive li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .benefit-item:hover {
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
            transform: translateY(-3px);
        }

        .benefit-item i {
            color: #03c0b4;
            font-size: 1.3rem;
            min-width: 24px;
        }

        .expect-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .expect-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 2px solid #f0f0f0;
        }

        .expect-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            border-color: #f17732;
        }

        .expect-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #f17732, #03c0b4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .expect-icon i {
            color: white;
            font-size: 1.8rem;
        }

        .care-note {
            background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
            padding: 1.5rem;
            border-radius: 12px;
            margin-top: 2rem;
            border-left: 4px solid #f17732;
            font-style: italic;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .testimonial-card {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            text-align: left;
            position: relative;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .testimonial-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #f17732, #03c0b4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .testimonial-icon i {
            color: white;
            font-size: 1rem;
        }

        .testimonial-card p {
            margin-bottom: 1.5rem;
            font-style: italic;
            line-height: 1.6;
        }

        .testimonial-author {
            border-top: 1px solid #ddd;
            padding-top: 1rem;
        }

        .testimonial-author strong {
            color: #f17732;
            display: block;
            margin-bottom: 0.25rem;
        }

        .testimonial-author span {
            color: #666;
            font-size: 0.9rem;
        }

        .reasons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .reason-card {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            border-left: 4px solid #f17732;
            transition: all 0.3s ease;
        }

        .reason-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-left-color: #03c0b4;
        }

        .reason-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #f17732, #03c0b4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .reason-icon i {
            color: white;
            font-size: 1.5rem;
        }

        .reason-card h3 {
            color: #03c0b4;
            margin-bottom: 1rem;
            justify-content: flex-start;
        }

        .reason-card ul {
            list-style: none;
            padding-left: 0;
        }

        .reason-card li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
            line-height: 1.5;
        }

        .reason-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #03c0b4;
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .vision-problems-grid,
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            
            .importance-grid,
            .expect-grid,
            .testimonials-grid,
            .reasons-grid {
                grid-template-columns: 1fr;
            }
            
            .surgery-features {
                justify-content: center;
            }
        }
    </style>
</body>
</html>

<?php include 'footer.php'; ?>