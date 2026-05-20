<?php
// best-eye-hospital-moga.php

$pageTitle = "Best cornea specialist in Moga | Eye Health Excellence Since 2001";
$pageDescription = "Trust Brar Eye Hospital for Best cornea specialist in Moga. From diagnostics to advanced surgical care, experience one-stop solutions for all vision problems.";
$pageKeywords = "corneal transplant in moga, keratoconus in moga, dry eye care in moga, corneal infections in moga";

include('header.php');
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
    <link rel="stylesheet" href="assets/cornea-styles.css">
    
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
        "description": "Leading cornea specialist in moga with expert corneal care services",
        "url": "<?php echo $canonicalUrl; ?>",
        "telephone": "72182-72182",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "moga",
            "addressRegion": "moga",
            "addressCountry": "IN"
        },
        "medicalSpecialty": [
            "Ophthalmology",
            "Corneal Surgery",
            "Refractive Surgery"
        ],
        "serviceType": [
            "Corneal Transplant",
            "LASIK Surgery",
            "Keratoconus Treatment",
            "Corneal Cross-Linking"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "130000"
        }
    }
    </script>

    <style>
        /* Cornea Specialist Page Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: #333;
    overflow-x: hidden;
}

.cornea-page-container {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
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
    background: linear-gradient(135deg, #f17732 0%, #e6692e 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(241, 119, 50, 0.3);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(241, 119, 50, 0.4);
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
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="%23e2e8f0" opacity="0.5"/><circle cx="20" cy="20" r="1" fill="%23cbd5e0" opacity="0.7"/><circle cx="80" cy="30" r="1.5" fill="%23a0aec0" opacity="0.6"/></svg>') repeat;
    opacity: 0.1;
    z-index: 1;
}

.hero-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
    color: #1a202c;
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
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

section.animate-in {
    opacity: 1;
    transform: translateY(0);
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

/* About Cornea Section */
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
    color: #e53e3e;
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

/* Transplant Section */
.transplant-section {
    background: white;
}

.section-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.transplant-types {
    margin-top: 2rem;
}

.transplant-list {
    margin-top: 1.5rem;
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

.transplant-item p {
    color: #4a5568;
    margin: 0;
}

.transplant-reasons h3 {
    margin-bottom: 1.5rem;
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

.safety-note i {
    color: #38a169;
}

/* Warning Signs Section */
.warning-signs-section {
    background: #fefcfc;
}

.symptoms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.symptom-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.symptom-card.urgent {
    border-top: 4px solid #e53e3e;
}

.symptom-card.moderate {
    border-top: 4px solid #ed8936;
}

.symptom-card.mild {
    border-top: 4px solid #03c0b4;
}

.symptom-card i {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.symptom-card.urgent i { color: #e53e3e; }
.symptom-card.moderate i { color: #ed8936; }
.symptom-card.mild i { color: #03c0b4; }

.symptom-card h3 {
    margin-bottom: 20px;
}

.symptom-card ul {
    list-style: none;
    text-align: left;
}

.symptom-card li {
    padding: 5px 0;
    color: #4a5568;
}

.warning-note {
    background: #fed7d7;
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #e53e3e;
    text-align: center;
}

.warning-note i {
    color: #e53e3e;
    margin-right: 8px;
}

/* Technology Section */
.technology-section {
    background: #1a202c;
    color: white;
}

.technology-section .section-header h2,
.technology-section .section-header .section-subtitle {
    color: white;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
}

.tech-item {
    text-align: center;
    padding: 30px 20px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.tech-item:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.tech-item i {
    font-size: 2.5rem;
    color: #03c0b4;
    margin-bottom: 20px;
}

.tech-item h3 {
    color: white;
    margin-bottom: 10px;
}

.tech-item p {
    color: #a0aec0;
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
    transition: all 0.3s ease;
}

.option-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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
    position: relative;
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

/* Why Choose Section */
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
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
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

.benefit-item h3 {
    margin-bottom: 10px;
    color: #1a202c;
}

.benefit-item p {
    color: #4a5568;
    margin: 0;
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
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.testimonial-content {
    margin-bottom: 20px;
}

.testimonial-content p {
    font-style: italic;
    color: #4a5568;
    line-height: 1.6;
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
    .hero-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .content-grid,
    .section-content,
    .cta-content {
        grid-template-columns: 1fr;
        gap: 40px;
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
    
    .hero-section {
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
    .symptoms-grid,
    .tech-grid,
    .benefits-grid,
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .correction-options {
        grid-template-columns: 1fr;
    }
    
    .contact-methods {
        gap: 15px;
    }
    
    .contact-method {
        padd    ing: 15px;
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

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Focus styles for accessibility */
.btn:focus,
.contact-method:focus {
    outline: 2px solid #03c0b4;
    outline-offset: 2px;
}

/* Print styles */
@media print {
    .hero-section,
    .cta-section {
        background: white !important;
        color: black !important;
    }
    
    .btn,
    .contact-method {
        border: 1px solid #333 !important;
        color: #333 !important;
        background: white !important;
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
                    <h1 class="hero-title">Best Cornea Specialist in moga</h1>
                    <p class="hero-subtitle">Expert Corneal Care with 21+ Years of Excellence</p>
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
                            <i class="fas fa-award"></i>
                            <span class="stat-number">Expert</span>
                            <span class="stat-label">Corneal Care</span>
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

    <!-- About Cornea Section -->
    <section class="about-cornea-section">
        <div class="container">
            <div class="section-header">
                <h2>Understanding the Cornea</h2>
                <p class="section-subtitle">The Foundation of Clear Vision</p>
            </div>
            <div class="content-grid">
                <div class="content-text">
                    <p>The cornea is the transparent, dome-shaped surface that covers the front of your eye. It plays a critical role in focusing the light that enters the eye, allowing us to see clearly. It works in coordination with the lens to focus incoming light onto the retina. A healthy cornea is essential for good vision.</p>
                    
                    <div class="cornea-causes">
                        <h3>Common Causes of Corneal Issues:</h3>
                        <ul class="medical-list">
                            <li><i class="fas fa-virus"></i> Infections (bacterial, viral, or fungal)</li>
                            <li><i class="fas fa-exclamation-triangle"></i> Injuries or trauma</li>
                            <li><i class="fas fa-dna"></i> Congenital disorders</li>
                            <li><i class="fas fa-microscope"></i> Genetic conditions like keratoconus</li>
                            <li><i class="fas fa-surgical-scalpel"></i> Post-surgical complications</li>
                        </ul>
                    </div>
                </div>
                <div class="eye-anatomy">
                    <div class="anatomy-diagram">
                        <h4>How the Eye Works</h4>
                        <ul class="anatomy-list">
                            <li><strong>Cornea:</strong> Gathers and focuses light</li>
                            <li><strong>Pupil:</strong> Controls light amount entering</li>
                            <li><strong>Iris:</strong> Adjusts pupil size</li>
                            <li><strong>Lens:</strong> Fine-tunes the focus</li>
                            <li><strong>Retina:</strong> Captures light signals</li>
                            <li><strong>Vitreous Gel:</strong> Gives eye its shape</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Cornea Specialist Services</h2>
                <p class="section-subtitle">Comprehensive Diagnostic, Medical & Surgical Solutions</p>
            </div>
            
            <div class="services-grid">
                <!-- Service Card 1 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Slit-Lamp Examination</h3>
                    <p>Detailed magnified examination of the cornea and anterior parts to detect surface abnormalities, ulcers, and infections.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Corneal Topography</h3>
                    <p>Advanced 3D mapping of cornea's surface curvature, essential for diagnosing keratoconus and planning surgeries.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Tear Film Assessment</h3>
                    <p>Comprehensive evaluation of tear quality and quantity to treat dry eye conditions effectively.</p>
                </div>

                <!-- Service Card 4 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Specular Microscopy</h3>
                    <p>Visualization of corneal endothelial layer, crucial for evaluating corneal health before surgeries.</p>
                </div>

                <!-- Service Card 5 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Corneal Cross-Linking (C3R)</h3>
                    <p>Non-invasive procedure for keratoconus patients to strengthen cornea and halt disease progression.</p>
                </div>

                <!-- Service Card 6 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Corneal Transplantation</h3>
                    <p>Various transplant types including PK, DALK, DSEK/DMEK using high-quality donor corneas.</p>
                </div>

                <!-- Service Card 7 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laser-pointer"></i>
                    </div>
                    <h3>LASIK & SMILE Surgery</h3>
                    <p>Precise, blade-free vision correction procedures for refractive errors with quick recovery.</p>
                </div>

                <!-- Service Card 8 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-contact-lens"></i>
                    </div>
                    <h3>Specialty Contact Lenses</h3>
                    <p>Custom-made scleral or RGP lenses for irregular corneas and post-surgery complications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Corneal Transplant Section -->
    <section class="transplant-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>Corneal Transplantation</h2>
                    <p class="lead">A corneal transplant replaces damaged or diseased cornea with healthy donor tissue to restore vision, reduce pain, and improve appearance.</p>
                    
                    <div class="transplant-types">
                        <h3>Types of Corneal Transplants:</h3>
                        <div class="transplant-list">
                            <div class="transplant-item">
                                <h4>Penetrating Keratoplasty (PK)</h4>
                                <p>Complete replacement of entire corneal thickness</p>
                            </div>
                            <div class="transplant-item">
                                <h4>DALK (Deep Anterior Lamellar Keratoplasty)</h4>
                                <p>Preserves healthy inner corneal layers</p>
                            </div>
                            <div class="transplant-item">
                                <h4>DSEK / DMEK</h4>
                                <p>Selective replacement of damaged endothelial layers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="transplant-reasons">
                        <h3>When Transplants Are Necessary:</h3>
                        <ul class="reason-list">
                            <li><i class="fas fa-check-circle"></i> Severe corneal scarring</li>
                            <li><i class="fas fa-check-circle"></i> Advanced keratoconus</li>
                            <li><i class="fas fa-check-circle"></i> Fuchs' endothelial dystrophy</li>
                            <li><i class="fas fa-check-circle"></i> Failed previous corneal surgeries</li>
                        </ul>
                    </div>
                    
                    <div class="safety-note">
                        <h4><i class="fas fa-shield-alt"></i> Safety First</h4>
                        <p>All donor tissue undergoes strict medical testing to rule out infections and communicable diseases like HIV, hepatitis, or syphilis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Warning Signs Section -->
    <section class="warning-signs-section">
        <div class="container">
            <div class="section-header">
                <h2>When to See a Cornea Specialist</h2>
                <p class="section-subtitle">Don't Ignore These Warning Signs</p>
            </div>
            
            <div class="symptoms-grid">
                <div class="symptom-card urgent">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h3>Urgent Symptoms</h3>
                    <ul>
                        <li>Sudden vision loss</li>
                        <li>Severe eye pain</li>
                        <li>Chemical injury to eye</li>
                    </ul>
                </div>
                
                <div class="symptom-card moderate">
                    <i class="fas fa-eye"></i>
                    <h3>Vision Changes</h3>
                    <ul>
                        <li>Blurry or distorted vision</li>
                        <li>Sensitivity to light</li>
                        <li>Foreign body sensation</li>
                    </ul>
                </div>
                
                <div class="symptom-card mild">
                    <i class="fas fa-tired"></i>
                    <h3>Discomfort Signs</h3>
                    <ul>
                        <li>Redness and itching</li>
                        <li>Burning sensation</li>
                        <li>Eye discomfort</li>
                    </ul>
                </div>
            </div>
            
            <div class="warning-note">
                <p><i class="fas fa-info-circle"></i> <strong>Important:</strong> Ignoring these symptoms may lead to permanent vision loss or spread of infection. Early treatment makes a significant difference.</p>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header">
                <h2>Advanced Technology</h2>
                <p class="section-subtitle">World-Class Equipment for Precise Diagnosis & Treatment</p>
            </div>
            
            <div class="tech-grid">
                <div class="tech-item">
                    <i class="fas fa-microscope"></i>
                    <h3>Pentacam & Orbscan Topographers</h3>
                    <p>Advanced corneal mapping technology</p>
                </div>
                <div class="tech-item">
                    <i class="fas fa-eye"></i>
                    <h3>Anterior Segment OCT</h3>
                    <p>High-resolution optical coherence tomography</p>
                </div>
                <div class="tech-item">
                    <i class="fas fa-search"></i>
                    <h3>Specular Microscopes</h3>
                    <p>Detailed corneal cell analysis</p>
                </div>
                <div class="tech-item">
                    <i class="fas fa-laser-pointer"></i>
                    <h3>Femtosecond Laser</h3>
                    <p>Precision SMILE and LASIK surgeries</p>
                </div>
                <div class="tech-item">
                    <i class="fas fa-hospital"></i>
                    <h3>Sterile Operation Theatres</h3>
                    <p>HEPA filtered modular OTs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Correction Section -->
    <section class="vision-correction-section">
        <div class="container">
            <div class="section-header">
                <h2>Live Glass-Free with Advanced Vision Correction</h2>
                <p class="section-subtitle">Say Goodbye to Glasses & Contact Lenses</p>
            </div>
            
            <div class="correction-options">
                <div class="option-card">
                    <div class="option-header">
                        <i class="fas fa-eye-dropper"></i>
                        <h3>LASIK Surgery</h3>
                    </div>
                    <div class="option-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Reshapes cornea using laser</li>
                            <li><i class="fas fa-check"></i> Quick 10-15 minutes per eye</li>
                            <li><i class="fas fa-check"></i> Safe & widely performed</li>
                            <li><i class="fas fa-check"></i> Rapid recovery</li>
                        </ul>
                    </div>
                </div>
                
                <div class="option-card featured">
                    <div class="option-header">
                        <i class="fas fa-smile"></i>
                        <h3>SMILE Pro Surgery</h3>
                        <span class="featured-badge">Advanced</span>
                    </div>
                    <div class="option-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Minimally invasive procedure</li>
                            <li><i class="fas fa-check"></i> No flap creation required</li>
                            <li><i class="fas fa-check"></i> Faster healing process</li>
                            <li><i class="fas fa-check"></i> Reduced post-op dryness</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header">
                <h2>Why BRAR EYE Hospital is the Best Choice</h2>
                <p class="section-subtitle">Excellence in Every Aspect of Eye Care</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>21+ Years Experience</h3>
                    <p>Consistent care and expertise</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>1.3+ Lakh Patients</h3>
                    <p>Satisfied and trust our services</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Expert Specialists</h3>
                    <p>Experienced cornea specialists</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Advanced Infrastructure</h3>
                    <p>In-house diagnostic & surgical facilities</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Eye Bank Association</h3>
                    <p>Access to quality donor tissue</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Transparent Pricing</h3>
                    <p>Affordable and honest costs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>What Our Patients Say</h2>
                <p class="section-subtitle">Real Stories of Restored Vision</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"After years of struggling with keratoconus, I underwent corneal cross-linking at BRAR EYE Hospital. The results were better than expected. Their facilities and doctors are top-class."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Rajdeep Singh</h4>
                            <span>moga</span>
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
                        <p>"A traumatic eye injury left my vision impaired. The doctors suggested a corneal transplant. Today, I can read, write, and drive without difficulty. Forever thankful!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Meena Devi</h4>
                            <span>Faridkot</span>
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
                        <p>"Tired of glasses, I chose SMILE surgery at BRAR EYE Hospital. The experience was smooth and painless. I'm thrilled with the results!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Amanpreet Kaur</h4>
                            <span>moga</span>
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

    <!-- Call to Action Section -->
    <section class="cta-section" id="book-appointment">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2>Book Your Appointment Today</h2>
                    <p>Don't delay your corneal treatment. Early intervention can make all the difference in preserving and restoring your vision.</p>
                    <div class="cta-benefits">
                        <div class="benefit"><i class="fas fa-check"></i> Expert consultation</div>
                        <div class="benefit"><i class="fas fa-check"></i> Advanced diagnostics</div>
                        <div class="benefit"><i class="fas fa-check"></i> Personalized treatment</div>
                    </div>
                </div>
                <div class="cta-actions">
                    <div class="contact-methods">
                        <a href="tel:7218272182" class="contact-method primary">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Call Now</strong>
                                <span>72182-72182</span>
                            </div>
                        </a>
                        <a href="contact-brar-eye-hospital-moga.php" class="contact-method">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <strong>Book Online</strong>
                                <span>Schedule Appointment</span>
                            </div>
                        </a>
                        <a href="#" class="contact-method">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Visit Us</strong>
                                <span>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JavaScript for Enhanced Functionality -->
<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Phone number tracking
document.querySelectorAll('a[href^="tel:"]').forEach(phone => {
    phone.addEventListener('click', function() {
        // Analytics tracking can be added here
        console.log('Phone number clicked: ' + this.href);
    });
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
        }
    });
}, observerOptions);

// Observe sections for animation
document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});
</script>

</body>
</html>
<?php include 'footer.php'; ?>