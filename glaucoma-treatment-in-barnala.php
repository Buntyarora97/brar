<?php
$pageTitle = "Glaucoma Treatment in Barnala | Eye Pressure Specialist – Brar Eye Hospital";
$pageDescription = "Expert glaucoma treatment in Barnala at Brar Eye Hospital. Advanced eye pressure management and glaucoma surgery for patients from Barnala and surrounding areas in Punjab.";
$pageKeywords = "glaucoma treatment Barnala, eye pressure Barnala, glaucoma specialist near Barnala, glaucoma surgery Barnala, eye doctor Barnala";
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
                <h1 style=" color :white;">Glaucoma Treatment in barnala</h1>
                <h2 style=" color :white;">Advanced Care at BRAR EYE Hospital</h2>
                <p style=" color :white;">Expert glaucoma care with advanced technology, skilled professionals, and compassionate service. Over 21 years of experience with more than 1.3 lakh patients treated successfully.</p>
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
                <li><a href="#what-is-glaucoma">What is Glaucoma</a></li>
                <li><a href="#types">Types</a></li>
                <li><a href="#symptoms">Symptoms</a></li>
                <li><a href="#diagnosis">Diagnosis</a></li>
                <li><a href="#treatment">Treatment</a></li>
                <li><a href="#why-choose-us">Why Choose Us</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Introduction -->
            <section class="intro-section">
                <div class="content-card">
                    <p class="lead">Glaucoma is one of the leading causes of irreversible blindness in the world. At BRAR EYE Hospital, barnala, we understand the seriousness of this condition and offer expert glaucoma care with advanced technology, skilled professionals, and compassionate service.</p>
                    <p>Our hospital is equipped with the most modern diagnostic and surgical technologies, ensuring accurate diagnosis and effective treatment tailored to each individual. We aim to preserve and protect your vision, even in the face of this silent and progressive eye disease.</p>
                </div>
            </section>

            <!-- What is Glaucoma Section -->
            <section id="what-is-glaucoma" class="content-section">
                <div class="content-card">
                    <h2>What is Glaucoma?</h2>
                    <p>Glaucoma is a progressive eye disease where high pressure within the eye damages the optic nerve. This nerve is essential as it transmits visual information from the eye to the brain. If untreated, glaucoma can lead to permanent vision loss and even blindness.</p>
                    <p>Normally, eye pressure ranges between 11 to 21 mm Hg. The pressure is maintained by a fluid called aqueous humour. When this fluid doesn't drain properly, it builds up and increases intraocular pressure (IOP), damaging the optic nerve over time. Glaucoma develops slowly and painlessly, and in most cases, symptoms appear only in the later stages—when vision loss has already begun.</p>
                </div>
            </section>

            <!-- Types of Glaucoma Section -->
            <section id="types" class="content-section">
                <div class="content-card">
                    <h2>Types of Glaucoma</h2>
                    <p>Understanding the type of glaucoma is important for effective treatment. The main types include:</p>
                    
                    <div class="glaucoma-types">
                        <div class="type-card">
                            <h3><i class="fas fa-eye"></i> Open-Angle Glaucoma</h3>
                            <ul>
                                <li>Most common type</li>
                                <li>Occurs when drainage canals get clogged over time</li>
                                <li>Develops slowly with no early symptoms</li>
                                <li>Can cause gradual loss of side vision</li>
                                <li>Requires regular eye check-ups to detect early changes</li>
                            </ul>
                        </div>

                        <div class="type-card">
                            <h3><i class="fas fa-exclamation-triangle"></i> Angle-Closure Glaucoma (Closed-Angle)</h3>
                            <ul>
                                <li>Sudden onset and considered an emergency</li>
                                <li>Narrow angle between iris and cornea blocks fluid drainage</li>
                                <li>Symptoms include eye pain, headaches, nausea, and blurred vision</li>
                                <li>Can lead to sudden blindness if not treated immediately</li>
                            </ul>
                        </div>

                        <div class="type-card">
                            <h3><i class="fas fa-chart-line"></i> Normal-Tension Glaucoma</h3>
                            <ul>
                                <li>Optic nerve damage occurs despite normal eye pressure</li>
                                <li>Common in people of Asian descent</li>
                                <li>May be associated with poor blood flow to the optic nerve</li>
                                <li>Requires regular monitoring with advanced imaging techniques</li>
                            </ul>
                        </div>

                        <div class="type-card">
                            <h3><i class="fas fa-baby"></i> Congenital Glaucoma</h3>
                            <ul>
                                <li>Present at birth or early childhood</li>
                                <li>Caused by improper development of drainage canals</li>
                                <li>Symptoms include cloudy eyes, light sensitivity, and tearing</li>
                                <li>Requires early diagnosis and surgical intervention for best outcomes</li>
                            </ul>
                        </div>

                        <div class="type-card">
                            <h3><i class="fas fa-link"></i> Secondary Glaucoma</h3>
                            <ul>
                                <li>Caused by other eye conditions like uveitis, injury, surgery, or diabetes</li>
                                <li>Can also occur due to steroid use or cataracts</li>
                                <li>Management includes treating the underlying condition along with IOP control</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Risk Factors Section -->
            <section class="content-section">
                <div class="content-card">
                    <h2>Causes and Risk Factors</h2>
                    <p>While glaucoma can occur without a clear cause, certain factors increase the risk:</p>
                    <div class="risk-factors">
                        <div class="risk-grid">
                            <div class="risk-item"><i class="fas fa-users"></i> Family history of glaucoma</div>
                            <div class="risk-item"><i class="fas fa-calendar-alt"></i> Age above 40 years</div>
                            <div class="risk-item"><i class="fas fa-heartbeat"></i> Diabetes or Hypertension</div>
                            <div class="risk-item"><i class="fas fa-pills"></i> Prolonged use of steroids</div>
                            <div class="risk-item"><i class="fas fa-glasses"></i> Nearsightedness or Farsightedness</div>
                            <div class="risk-item"><i class="fas fa-band-aid"></i> Previous eye injuries or surgeries</div>
                            <div class="risk-item"><i class="fas fa-thermometer"></i> Thyroid disorders</div>
                            <div class="risk-item"><i class="fas fa-eye-slash"></i> Other eye diseases</div>
                        </div>
                    </div>
                    <p>Glaucoma is more common in people with certain genetic backgrounds and medical histories. Therefore, individuals in high-risk groups should undergo comprehensive eye examinations at least once a year.</p>
                </div>
            </section>

            <!-- Symptoms Section -->
            <section id="symptoms" class="content-section">
                <div class="content-card">
                    <h2>Symptoms of Glaucoma</h2>
                    <p>In its early stages, glaucoma may not show noticeable symptoms. However, some warning signs include:</p>
                    <div class="symptoms-grid">
                        <div class="symptom-item">
                            <i class="fas fa-eye-low-vision"></i>
                            <span>Gradual loss of peripheral (side) vision</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-cloud"></i>
                            <span>Blurred or hazy vision</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-circle"></i>
                            <span>Colored halos around lights</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-head-side-cough"></i>
                            <span>Headaches, especially around the eyes</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-eye"></i>
                            <span>Eye pain, redness, or discomfort</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-moon"></i>
                            <span>Difficulty seeing in dim light or at night</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-dizzy"></i>
                            <span>Nausea and vomiting (in acute glaucoma)</span>
                        </div>
                    </div>
                    <div class="warning-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p><strong>Important:</strong> Since symptoms often go unnoticed until significant damage has occurred, early diagnosis through regular screening is vital.</p>
                    </div>
                </div>
            </section>

            <!-- Diagnosis Section -->
            <section id="diagnosis" class="content-section">
                <div class="content-card">
                    <h2>How Glaucoma is Diagnosed at BRAR EYE Hospital</h2>
                    <p>A simple pressure test isn't enough to detect glaucoma. At BRAR EYE Hospital, we use a complete set of modern diagnostic tests:</p>
                    
                    <div class="diagnostic-tests">
                        <div class="test-card">
                            <div class="test-icon">
                                <i class="fas fa-compress-arrows-alt"></i>
                            </div>
                            <h3>Applanation Tonometry</h3>
                            <ul>
                                <li>Measures the intraocular pressure with high accuracy</li>
                                <li>Considered the gold standard in IOP testing</li>
                            </ul>
                        </div>

                        <div class="test-card">
                            <div class="test-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3>Ophthalmoscopy</h3>
                            <ul>
                                <li>Evaluates the optic nerve for signs of damage</li>
                                <li>Helps detect early nerve fiber loss</li>
                            </ul>
                        </div>

                        <div class="test-card">
                            <div class="test-icon">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <h3>Gonioscopy</h3>
                            <ul>
                                <li>Examines the angle between the iris and cornea</li>
                                <li>Essential for identifying narrow or closed angles</li>
                            </ul>
                        </div>

                        <div class="test-card">
                            <div class="test-icon">
                                <i class="fas fa-map"></i>
                            </div>
                            <h3>Perimetry (Visual Field Test)</h3>
                            <ul>
                                <li>Detects areas of vision loss using a computerised test</li>
                                <li>Creates a visual map of the peripheral vision</li>
                                <li>Helps track disease progression</li>
                            </ul>
                        </div>

                        <div class="test-card">
                            <div class="test-icon">
                                <i class="fas fa-cube"></i>
                            </div>
                            <h3>Optical Coherence Tomography (OCT)</h3>
                            <ul>
                                <li>Measures the thickness of the retinal nerve fiber layer</li>
                                <li>Tracks even minute changes in the optic nerve</li>
                                <li>Offers 3D cross-sectional imaging of the retina</li>
                            </ul>
                        </div>

                        <div class="test-card">
                            <div class="test-icon">
                                <i class="fas fa-ruler"></i>
                            </div>
                            <h3>Pachymetry</h3>
                            <ul>
                                <li>Measures corneal thickness</li>
                                <li>Important for accurate IOP readings</li>
                                <li>Helps customise treatment plan</li>
                            </ul>
                        </div>
                </div>
                    
                    <p class="test-note">All these tests are painless and performed using the latest equipment at BRAR EYE Hospital. We ensure a thorough evaluation to catch glaucoma in its earliest stages.</p>
                </div>
            </section>

            <!-- Treatment Section -->
            <section id="treatment" class="content-section">
                <div class="content-card">
                    <h2>Glaucoma Treatment in barnala at BRAR EYE Hospital</h2>
                    <p>At BRAR EYE Hospital, our glaucoma treatment in barnala is tailored to each patient's condition and needs. While glaucoma cannot be cured, our goal is to manage the disease, prevent progression, and preserve vision.</p>
                    
                    <div class="treatment-options">
                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-eye-dropper"></i>
                            </div>
                            <h3>Medications</h3>
                            <ul>
                                <li>Eye drops are the first line of treatment</li>
                                <li>Help reduce eye pressure by decreasing fluid production or increasing drainage</li>
                                <li>Need to be used consistently, often lifelong</li>
                                <li>We guide patients carefully on dosage, application technique, and schedule adherence</li>
                            </ul>
                        </div>

                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-laser-pointer"></i>
                            </div>
                            <h3>Laser Therapy</h3>
                            <ul>
                                <li>Laser trabeculoplasty improves drainage in open-angle glaucoma</li>
                                <li>Laser peripheral iridotomy is used in angle-closure glaucoma</li>
                                <li>Quick, painless, and done in OPD settings</li>
                                <li>In many cases, reduces or eliminates the need for eye drops</li>
                            </ul>
                        </div>

                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Surgical Treatment</h3>
                            <ul>
                                <li>Recommended when medications or lasers don't control pressure</li>
                                <li>Options include trabeculectomy, glaucoma drainage devices, or MIGS</li>
                                <li>Performed by our expert eye surgeons using advanced technology</li>
                                <li>Offers long-term control in severe or complex cases</li>
                            </ul>
                        </div>
                    </div>
                    
                    <p class="treatment-note">Our treatment plans are always patient-centric, designed for optimal long-term vision protection.</p>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section id="why-choose-us" class="content-section">
                <div class="content-card">
                    <h2>Why Choose BRAR EYE Hospital for Glaucoma Treatment in barnala?</h2>
                    <p>BRAR EYE Hospital is a trusted name in eye care with a legacy of over 21 years. Here's why thousands of patients prefer us:</p>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3>21+ Years of Excellence</h3>
                            <p>Our experienced team of eye specialists and surgeons have treated more than 1.3 lakh patients successfully.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3>Advanced Technology</h3>
                            <p>We use the latest diagnostic tools like OCT, perimetry, pachymetry, and fundus imaging, along with modern surgical systems.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <h3>Personalized Care</h3>
                            <p>Every patient receives customised treatment based on the stage and type of glaucoma. We educate patients and families about their condition.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-glasses"></i>
                            </div>
                            <h3>Freedom from Specs</h3>
                            <p>Along with glaucoma treatment, we offer vision correction options like SMILE Pro and LASIK, helping patients live spectacle-free lives.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3>Easily Accessible</h3>
                            <p>Conveniently located in barnala, easily reachable for patients from barnala, Faridkot, Muktsar, and nearby towns.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Trusted by the Community</h3>
                            <p>We're known for ethical practices, transparent care, and compassionate service. Our patient testimonials speak for our commitment.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Living with Glaucoma Section -->
            <section class="content-section">
                <div class="content-card">
                    <h2>Living with Glaucoma</h2>
                    <p>While glaucoma requires lifelong management, early detection and proper treatment can significantly slow its progression. Follow these tips:</p>
                    <div class="tips-grid">
                        <div class="tip-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Get regular eye check-ups, especially after 40 years of age</span>
                        </div>
                        <div class="tip-item">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Follow your treatment plan strictly</span>
                        </div>
                        <div class="tip-item">
                            <i class="fas fa-comment-medical"></i>
                            <span>Inform your doctor about any changes in vision</span>
                        </div>
                        <div class="tip-item">
                            <i class="fas fa-heart"></i>
                            <span>Maintain a healthy lifestyle to manage diabetes and hypertension</span>
                        </div>
                        <div class="tip-item">
                            <i class="fas fa-clock"></i>
                            <span>Avoid skipping medications or follow-ups</span>
                        </div>
                        <div class="tip-item">
                            <i class="fas fa-lightbulb"></i>
                            <span>Use proper lighting while reading or working</span>
                        </div>
                    </div>
                    <p><strong>Remember:</strong> Educating yourself and staying committed to follow-up care is key to protecting your vision.</p>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="contact-section">
                <div class="content-card contact-card">
                    <h2>Book Your Appointment Today</h2>
                    <p>Don't let glaucoma steal your sight silently. If you or a loved one is at risk, book your consultation with our glaucoma specialists today.</p>
                    
                    <div class="contact-info-grid">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h3>Call Now</h3>
                                <a href="tel:7218272182">72182-72182</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>Location</h3>
                                <p>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Experience</h3>
                                <p>21+ Years</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h3>Patients Treated</h3>
                                <p>1.3+ Lakh</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="tel:7218272182" class="btn btn-primary btn-large">
                            <i class="fas fa-phone"></i>
                            Call Now: 72182-72182
                        </a>
                    </div>

                    <div class="hospital-tagline">
                        <h3>BRAR EYE Hospital – Advanced Eye Care, Trusted by Thousands.</h3>
                        <p>We are your reliable partner in preserving your precious vision.</p>
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
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-list a');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
<?php include 'footer.php'; ?>



