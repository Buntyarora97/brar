<?php
$pageTitle = "Oculoplastic surgery in Jalalabad | Expert Eyelid, Tear Duct & Eye Plastic Surgery Specialists";
$pageDescription = "Advanced oculoplastic surgery in jalalabad for eyelid, tear duct, and orbital disorders. Expert care with modern technology.";
$pageKeywords = "oculoplastic surgery jalalabad, eyelid surgery jalalabad, ptosis correction jalalabad, orbital surgery jalalabad, tear duct surgery jalalabad, cosmetic eye surgery jalalabad";
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
                <h1 style="color:white;">Oculoplastic Surgery in jalalabad</h1>
                <h2 style="color:white;">Expert Care at BRAR EYE Hospital</h2>
                <p style="color:white;">Expert oculoplastic surgery with advanced technology and highly trained specialists. Over 21 years of experience with more than 1.3 lakh patients successfully treated.</p>
                <div class="hero-cta">
                    <a href="tel:7218272182" class="btn btn-primary">
                        <i class="fas fa-phone"></i>
                        Call Now: 72182-72182
                    </a>
                    <a href="#contact" class="btn btn-secondary">Book Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Menu -->
    <nav class="nav-menu">
        <div class="container">
            <ul class="nav-list">
                <li><a href="#what-is-oculoplastic">What is Oculoplastic Surgery</a></li>
                <li><a href="#why-choose">Why Choose</a></li>
                <li><a href="#surgery-types">Surgery Types</a></li>
                <li><a href="#non-surgical">Non-Surgical</a></li>
                <li><a href="#why-us">Why Choose Us</a></li>
                <li><a href="#safety">Safety</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Introduction -->
            <section class="intro-section">
                <div class="content-card">
                    <p class="lead">If you're looking for expert oculoplastic surgery in jalalabad, BRAR EYE Hospital is your trusted destination. With over 21 years of experience and more than 1.3 lakh patients successfully treated, our hospital is committed to delivering excellence in eye care.</p>
                    <p>Equipped with the most advanced technology and led by highly trained eye specialists, BRAR EYE Hospital offers comprehensive oculoplastic treatments to help patients regain normal eye function, facial aesthetics, and freedom from specs.</p>
                </div>
            </section>

            <!-- What is Oculoplastic Surgery Section -->
            <section id="what-is-oculoplastic" class="content-section">
                <div class="content-card">
                    <h2>What is Oculoplastic Surgery?</h2>
                    <p>Oculoplastic surgery is a specialized branch of ophthalmology that focuses on the structures around the eyes, including the eyelids, tear ducts, orbit (bony socket of the eye), and parts of the face. It combines techniques from both ophthalmology and plastic surgery to treat medical conditions, correct injuries, and enhance cosmetic appearance.</p>
                    <p>This type of surgery is carried out by oculoplastic surgeons—specialists trained in both eye care and cosmetic facial surgery. Whether it's for health-related concerns or aesthetic improvements, oculoplastic surgery offers long-term and effective solutions.</p>
                </div>
            </section>

            <!-- Why Choose Oculoplastic Surgery Section -->
            <section id="why-choose" class="content-section">
                <div class="content-card">
                    <h2>Why People Choose Oculoplastic Surgery</h2>
                    <p>There are many reasons why people choose to undergo oculoplastic surgery:</p>
                    
                    <div class="reasons-grid">
                        <div class="reason-card">
                            <div class="reason-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h3>Cosmetic Reasons</h3>
                            <ul>
                                <li><strong>Eyelid Rejuvenation:</strong> Through blepharoplasty, patients achieve a youthful, refreshed look</li>
                                <li><strong>Dark Circles and Eye Bags:</strong> Remove or reduce under-eye bags and dark circles</li>
                                <li><strong>Brow and Forehead Lifts:</strong> Correct drooping eyebrows, making upper eyelids appear lighter</li>
                                <li><strong>Facial Asymmetry:</strong> Correct conditions like Bell's palsy through customized techniques</li>
                            </ul>
                        </div>

                        <div class="reason-card">
                            <div class="reason-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3>Medical Conditions</h3>
                            <ul>
                                <li><strong>Ptosis:</strong> Drooping of the upper eyelid that may block vision</li>
                                <li><strong>Entropion:</strong> When the eyelid turns inward, causing lashes to rub against the eye</li>
                                <li><strong>Ectropion:</strong> When the eyelid turns outward, exposing the inner eye surface</li>
                                <li><strong>Watery Eyes:</strong> Caused by blocked tear ducts that can be corrected surgically</li>
                                <li><strong>Orbital Tumors:</strong> Tumors around the eye socket affecting vision and eye movement</li>
                                <li><strong>Facial Nerve Palsy:</strong> Results in poor eyelid closure, leading to irritation and dryness</li>
                                <li><strong>Thyroid Eye Disease:</strong> Causes bulging eyes and double vision</li>
                            </ul>
                        </div>

                        <div class="reason-card">
                            <div class="reason-icon">
                                <i class="fas fa-band-aid"></i>
                            </div>
                            <h3>Traumatic Injuries</h3>
                            <ul>
                                <li><strong>Eyelid Lacerations:</strong> Cuts or wounds that require precise reconstruction</li>
                                <li><strong>Orbital Fractures:</strong> Breaks in the bones surrounding the eyes</li>
                                <li><strong>Tear Duct Injuries:</strong> Can lead to excessive tearing and infection</li>
                                <li><strong>Eyebrow and Forehead Injuries:</strong> Restored through reconstructive procedures</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Types of Surgery Section -->
            <section id="surgery-types" class="content-section">
                <div class="content-card">
                    <h2>Types of Oculoplastic Surgeries We Offer</h2>
                    <p>At BRAR EYE Hospital, we offer a complete range of oculoplastic procedures using cutting-edge technology:</p>
                    
                    <div class="surgery-types">
                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>Blepharoplasty (Eyelid Surgery)</h3>
                            <p>Removes excess skin and fat from the upper and/or lower eyelids to improve both appearance and vision.</p>
                            <div class="surgery-details">
                                <h4>Who is it for?</h4>
                                <ul>
                                    <li>People with droopy, puffy eyelids</li>
                                    <li>Individuals experiencing vision obstruction due to eyelid sagging</li>
                                </ul>
                                <h4>Procedure & Recovery:</h4>
                                <ul>
                                    <li>Performed under local anesthesia</li>
                                    <li>Outpatient procedure</li>
                                    <li>Recovery time: 1–2 weeks</li>
                                    <li>Results visible within a few weeks</li>
                                </ul>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-arrow-up"></i>
                            </div>
                            <h3>Ptosis Repair</h3>
                            <p>Corrects drooping eyelids by tightening the muscles responsible for lifting the eyelid.</p>
                            <div class="surgery-details">
                                <h4>Best for:</h4>
                                <ul>
                                    <li>Individuals suffering from eye strain, fatigue, or vision issues due to drooping lids</li>
                                </ul>
                                <h4>Procedure & Recovery:</h4>
                                <ul>
                                    <li>Usually completed in under an hour</li>
                                    <li>Local or general anesthesia</li>
                                    <li>Mild swelling or bruising may occur</li>
                                </ul>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-redo"></i>
                            </div>
                            <h3>Entropion Repair</h3>
                            <p>Restores the inward-turned eyelid to its natural position, preventing lashes from irritating the eye.</p>
                            <div class="surgery-details">
                                <h4>Symptoms Addressed:</h4>
                                <ul>
                                    <li>Eye redness, irritation, corneal damage</li>
                                </ul>
                                <h4>Recovery:</h4>
                                <ul>
                                    <li>Minimal downtime</li>
                                    <li>Discomfort managed with cold compresses</li>
                                </ul>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-undo"></i>
                            </div>
                            <h3>Ectropion Repair</h3>
                            <p>Repositions outward-turned eyelids, which helps prevent eye dryness and infection.</p>
                            <div class="surgery-details">
                                <h4>Who Needs This?</h4>
                                <ul>
                                    <li>Mostly seen in older adults</li>
                                    <li>Those experiencing excessive tearing or dry eyes</li>
                                </ul>
                                <h4>Recovery Timeline:</h4>
                                <ul>
                                    <li>Most people return to normal activities in a few days</li>
                                </ul>
                            </div>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <h3>Tear Duct Surgery</h3>
                            <p>Surgical procedure to open or reconstruct blocked tear ducts, which can eliminate persistent watery eyes.</p>
                        </div>

                        <div class="surgery-card">
                            <div class="surgery-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h3>Orbital Fracture Repair & Tumor Removal</h3>
                            <p>Advanced oculoplastic techniques are used to repair trauma or remove tumors around the eye socket, restoring function and appearance.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Non-Surgical Treatments Section -->
            <section id="non-surgical" class="content-section">
                <div class="content-card">
                    <h2>Non-Surgical Oculoplastic Treatments</h2>
                    <p>In addition to surgical procedures, BRAR EYE Hospital also provides non-surgical options to treat cosmetic concerns around the eyes.</p>
                    
                    <div class="non-surgical-grid">
                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-syringe"></i>
                            </div>
                            <h3>Botox Injections</h3>
                            <ul>
                                <li>Smooth out fine lines and crow's feet</li>
                                <li>Quick and minimally invasive</li>
                            </ul>
                        </div>

                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-fill-drip"></i>
                            </div>
                            <h3>Dermal Fillers</h3>
                            <ul>
                                <li>Add volume to hollow areas around the eyes</li>
                                <li>Improve dark circles and under-eye hollows</li>
                            </ul>
                        </div>

                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-laser-pointer"></i>
                            </div>
                            <h3>Laser Therapy</h3>
                            <ul>
                                <li>Treats wrinkles, pigmentation, and spider veins</li>
                                <li>Stimulates collagen production for skin tightening</li>
                            </ul>
                        </div>

                        <div class="treatment-card">
                            <div class="treatment-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3>Chemical Peels</h3>
                            <ul>
                                <li>Removes damaged top layers of skin</li>
                                <li>Reveals smoother, younger-looking skin underneath</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section id="why-us" class="content-section">
                <div class="content-card">
                    <h2>Why Choose BRAR EYE Hospital for Oculoplastic Surgery in jalalabad?</h2>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3>21+ Years of Trusted Eye Care</h3>
                            <p>Established and reputed in the region for over two decades with a proven track record.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>1.3+ Lakh Happy Patients</h3>
                            <p>Proven track record of successful treatments with thousands of satisfied patients.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3>Advanced Technology</h3>
                            <p>We use world-class diagnostic and surgical tools to ensure precision and best outcomes.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-glasses"></i>
                            </div>
                            <h3>Freedom from Specs</h3>
                            <p>Many of our patients regain clear vision without needing glasses after surgery.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <h3>Personalized Treatment Plans</h3>
                            <p>Each patient receives a customized approach tailored to their specific needs and condition.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Expert Team</h3>
                            <p>Our oculoplastic surgeons are trained in the latest surgical and non-surgical techniques.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Safety Section -->
            <section id="safety" class="content-section">
                <div class="content-card">
                    <h2>Is Oculoplastic Surgery Safe?</h2>
                    <p>Yes, oculoplastic surgery is generally safe when performed by experienced and qualified professionals. As with any medical procedure, there are some risks, such as swelling, bruising, or temporary discomfort, but these are usually mild and manageable.</p>
                    
                    <div class="safety-info">
                        <div class="safety-point">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <h4>Patient Safety Priority</h4>
                                <p>At BRAR EYE Hospital, patient safety and comfort are our top priorities.</p>
                            </div>
                        </div>
                        <div class="safety-point">
                            <i class="fas fa-user-md"></i>
                            <div>
                                <h4>Qualified Professionals</h4>
                                <p>All procedures are performed by experienced and certified oculoplastic surgeons.</p>
                            </div>
                        </div>
                        <div class="safety-point">
                            <i class="fas fa-clipboard-check"></i>
                            <div>
                                <h4>Comprehensive Care</h4>
                                <p>Complete pre and post-operative care to ensure optimal results and recovery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="content-section contact-section">
                <div class="content-card contact-card">
                    <h2>Book Your Consultation Today</h2>
                    <p>If you're experiencing eyelid issues, excessive tearing, or are interested in rejuvenating your appearance, our expert team is here to help. Contact BRAR EYE Hospital for the most advanced and patient-focused oculoplastic surgery in jalalabad.</p>
                    
                    <div class="contact-info-grid">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <h3>Call Us</h3>
                            <a href="tel:7218272182">72182-72182</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Location</h3>
                            <p>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
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
                        <p>Let BRAR EYE Hospital restore your vision, confidence, and comfort—one treatment at a time.</p>
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
</body>
</html>

<?php include 'footer.php'; ?>