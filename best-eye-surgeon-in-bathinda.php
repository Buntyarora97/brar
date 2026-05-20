<?php
// SEO and Meta Information
$pageTitle = "Get Treated by Experts for Best eye surgeon in Bathinda";
$pageDescription = "Best eye surgeon in Bathinda now made accessible with Brar Eye Hospital's 21+ years of experience, trusted by 1.3L+ patients and backed by cutting-edge laser & diagnostic technology.";
$pageKeywords = "retina surgeon in bathinda, cataract surgeon in bathinda, cornea surgeon in bathinda, smile eye surgeon in bathinda";
$canonicalUrl = "https://brareye.com/best-eye-surgeon-in-bathinda.php";

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
    <link rel="stylesheet" href="assets/surgeon-styles.css">
    
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
        "description": "Best eye surgeon in bathinda with expert surgical eye care",
        "url": "<?php echo $canonicalUrl; ?>",
        "telephone": "72182-72182",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "bathinda",
            "addressRegion": "Punjab",
            "addressCountry": "IN"
        },
        "medicalSpecialty": [
            "Eye Surgery",
            "Cataract Surgery",
            "LASIK Surgery",
            "Retinal Surgery",
            "Corneal Surgery"
        ],
        "serviceType": [
            "Cataract Surgery",
            "SMILE Pro Surgery",
            "LASIK Surgery",
            "Retinal Surgery",
            "Corneal Surgery",
            "Pediatric Eye Surgery"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "130000"
        }
    }
    </script>

    <style>
        /* Eye Surgeon Page Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', 'Arial', 'Helvetica', sans-serif;
    line-height: 1.6;
    color: #333;
    background: #fff;
}

.surgeon-page-container {
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

.surgeon-icon {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 20px 40px rgba(3, 192, 180, 0.3);
}

.surgeon-icon i {
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

/* Why Best Section */
.why-best-section {
    background: white;
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.why-card {
    background: #f7fafc;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 4px solid #f17732;
}

.why-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    background: white;
}

.why-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.why-icon i {
    font-size: 1.5rem;
    color: white;
}

.why-card h3 {
    margin-bottom: 15px;
    color: #1a202c;
}

.why-card p {
    color: #4a5568;
    line-height: 1.6;
    margin-bottom: 20px;
}

.feature-list {
    list-style: none;
}

.feature-list li {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 4px 0;
    color: #4a5568;
    font-size: 0.9rem;
}

.feature-list i {
    color: #38a169;
    font-size: 0.8rem;
}

/* Excellence Section */
.excellence-section {
    background: #f7fafc;
}

.section-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.surgeon-qualities {
    margin-top: 2rem;
}

.quality-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px 0;
    border-bottom: 1px solid #e2e8f0;
}

.quality-item:last-child {
    border-bottom: none;
}

.quality-item i {
    color: #03c0b4;
    font-size: 1.5rem;
    margin-top: 5px;
    min-width: 25px;
}

.quality-item h4 {
    margin-bottom: 5px;
    color: #1a202c;
}

.quality-item p {
    margin: 0;
    color: #4a5568;
}

.experience-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border-left: 4px solid #f17732;
}

.experience-card h3 {
    margin-bottom: 20px;
    color: #1a202c;
}

.experience-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
    background: #f7fafc;
    padding: 20px;
    border-radius: 8px;
}

.stat {
    text-align: center;
}

.stat .number {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: #f17732;
}

.stat .label {
    font-size: 0.875rem;
    color: #718096;
}

.experience-card p {
    color: #4a5568;
    margin: 0;
}

/* Surgeries Section */
.surgeries-section {
    background: white;
}

.surgeries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.surgery-card {
    background: #f7fafc;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 4px solid #f17732;
    position: relative;
}

.surgery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    background: white;
}

.surgery-card.featured {
    border: 2px solid #f17732;
    background: white;
}

.featured-badge {
    position: absolute;
    top: -10px;
    right: 15px;
    background: #f17732;
    color: white;
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
}

.surgery-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.surgery-icon i {
    font-size: 1.5rem;
    color: white;
}

.surgery-card h3 {
    margin-bottom: 15px;
    color: #1a202c;
}

.surgery-card p {
    color: #4a5568;
    line-height: 1.6;
    margin-bottom: 20px;
}

.surgery-features {
    list-style: none;
}

.surgery-features li {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 4px 0;
    color: #4a5568;
    font-size: 0.9rem;
}

.surgery-features i {
    color: #38a169;
    font-size: 0.8rem;
}

/* Stories Section */
.stories-section {
    background: #f7fafc;
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.story-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.story-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.story-content {
    margin-bottom: 20px;
}

.story-content p {
    font-style: italic;
    color: #4a5568;
    line-height: 1.6;
    position: relative;
    padding-left: 20px;
}

.story-content p::before {
    content: '"';
    position: absolute;
    left: 0;
    top: -5px;
    font-size: 2rem;
    color: #f17732;
    line-height: 1;
}

.story-author {
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

/* Choose Us Section */
.choose-us-section {
    background: white;
}

.reasons-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 40px;
}

.reason-card {
    background: #f7fafc;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 4px solid #f17732;
}

.reason-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    background: white;
}

.reason-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.reason-icon i {
    font-size: 1.5rem;
    color: white;
}

.reason-card h3 {
    margin-bottom: 10px;
    color: #1a202c;
}

.reason-card p {
    color: #4a5568;
    margin: 0;
}

.trust-statement {
    text-align: center;
    padding: 30px;
    background: #e6fffa;
    border-radius: 12px;
    border-left: 4px solid #38a169;
}

.trust-statement p {
    margin: 0;
    font-size: 1.1rem;
    color: #1a202c;
    font-weight: 500;
}

/* Technology Section */
.technology-section {
    background: #f7fafc;
}

.tech-features {
    margin-top: 2rem;
}

.tech-feature {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 15px;
    border-left: 4px solid #f17732;
}

.tech-feature h4 {
    color: #1a202c;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.tech-feature h4 i {
    color: #03c0b4;
}

.tech-feature p {
    color: #4a5568;
    margin: 0;
}

.surgical-standards {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.surgical-standards h3 {
    margin-bottom: 20px;
    color: #1a202c;
}

.standards-list {
    margin-bottom: 20px;
}

.standard-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid #e2e8f0;
}

.standard-item:last-child {
    border-bottom: none;
}

.standard-item i {
    color: #03c0b4;
    font-size: 1.25rem;
    min-width: 20px;
}

.standard-item span {
    color: #4a5568;
    font-weight: 500;
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

.safety-note p {
    color: #4a5568;
    margin: 0;
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
    margin-bottom: 25px;
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

.trust-message {
    background: rgba(255, 255, 255, 0.05);
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #f17732;
}

.trust-message p {
    margin: 0;
    color: #fbb6ce;
    font-size: 1.1rem;
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
    .section-content,
    .cta-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .hero-stats {
        justify-content: center;
    }
    
    .experience-stats {
        flex-direction: column;
        gap: 15px;
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
    
    .why-grid,
    .surgeries-grid,
    .stories-grid,
    .reasons-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-methods {
        gap: 15px;
    }
    
    .contact-method {
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 1.875rem;
    }
    
    h2 {
        font-size: 1.75rem;
    }
    
    .why-card,
    .surgery-card,
    .story-card,
    .reason-card {
        padding: 20px;
    }
    
    .surgeon-icon {
        width: 150px;
        height: 150px;
    }
    
    .surgeon-icon i {
        font-size: 3rem;
    }
}

/* Focus styles for accessibility */
.btn:focus,
.contact-method:focus {
    outline: 2px solid #03c0b4;
    outline-offset: 2px;
}

/* Loading animations */
.why-card,
.surgery-card,
.story-card,
.reason-card {
    opacity: 1;
    animation: fadeInUp 0.6s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
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
<div class="surgeon-page-container">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Best Eye Surgeon in bathinda</h1>
                    <p class="hero-subtitle">Trusted Expertise at BRAR EYE Hospital</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <i class="fas fa-user-md"></i>
                            <span class="stat-number">Expert</span>
                            <span class="stat-label">Surgeons</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="stat-number">21+ Years</span>
                            <span class="stat-label">Surgical Excellence</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-trophy"></i>
                            <span class="stat-number">1.3+ Lakh</span>
                            <span class="stat-label">Successful Treatments</span>
                        </div>
                    </div>
                    <div class="hero-cta">
                        <a href="tel:7218272182" class="btn btn-primary">
                            <i class="fas fa-phone"></i> Call Now: 72182-72182
                        </a>
                        <a href="tel:7218272182" class="btn btn-secondary">Book Consultation</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="surgeon-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Best Section -->
    <section class="why-best-section">
        <div class="container">
            <div class="section-header">
                <h2>Why BRAR EYE Hospital is Known for the Best Eye Surgeons</h2>
                <p class="section-subtitle">Excellence in Surgical Eye Care with Precision & Compassion</p>
            </div>
            
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Highly Experienced Surgeons</h3>
                    <p>Expert eye surgeons with decades of surgical experience, deep medical knowledge, and compassionate approach. Trusted by thousands across Punjab with steady hands and precision techniques.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Extensively trained in complex surgeries</li>
                        <li><i class="fas fa-check"></i> LASIK and SMILE Pro specialists</li>
                        <li><i class="fas fa-check"></i> Excellent visual outcomes</li>
                    </ul>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>Latest surgical techniques with state-of-the-art tools like SMILE Pro laser systems, phaco machines, and topography-guided LASIK platforms for world-class surgical care.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Advanced imaging systems</li>
                        <li><i class="fas fa-check"></i> Computerized surgical systems</li>
                        <li><i class="fas fa-check"></i> Results impossible with older methods</li>
                    </ul>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Personalized Surgery Plans</h3>
                    <p>Each patient is unique. Our surgeons carefully evaluate each case using advanced diagnostic tools before recommending customized surgical plans for best results.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Detailed pre-surgical assessments</li>
                        <li><i class="fas fa-check"></i> Tailored recovery plans</li>
                        <li><i class="fas fa-check"></i> Complete clarity before procedure</li>
                    </ul>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Clean Surgical Environment</h3>
                    <p>International standard sterilization and surgical protocols. Fully equipped operation theatres with highly trained nursing and OT teams for smooth, stress-free surgeries.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> International sterilization standards</li>
                        <li><i class="fas fa-check"></i> Regularly monitored OT</li>
                        <li><i class="fas fa-check"></i> Professional care teams</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Surgeon Excellence Section -->
    <section class="excellence-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>The Best Eye Surgeon in bathinda</h2>
                    <p class="lead">Our leading surgeons at BRAR EYE Hospital have earned a reputation for exceptional surgical outcomes and patient care across Punjab.</p>
                    
                    <div class="surgeon-qualities">
                        <div class="quality-item">
                            <i class="fas fa-chart-line"></i>
                            <div>
                                <h4>High Surgical Success Rates</h4>
                                <p>Proven track record with excellent outcomes in all types of eye surgeries</p>
                            </div>
                        </div>
                        
                        <div class="quality-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Minimal Recovery Time</h4>
                                <p>Advanced techniques ensuring faster healing and quick return to normal activities</p>
                            </div>
                        </div>
                        
                        <div class="quality-item">
                            <i class="fas fa-laser-pointer"></i>
                            <div>
                                <h4>Advanced Laser Techniques</h4>
                                <p>Latest laser technology for precise, safe, and effective surgical procedures</p>
                            </div>
                        </div>
                        
                        <div class="quality-item">
                            <i class="fas fa-heart"></i>
                            <div>
                                <h4>Gentle & Empathetic Care</h4>
                                <p>Compassionate approach with complete support from consultation to recovery</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-right">
                    <div class="experience-card">
                        <h3>Why Patients Choose Our Surgeons</h3>
                        <div class="experience-stats">
                            <div class="stat">
                                <span class="number">21+</span>
                                <span class="label">Years Legacy</span>
                            </div>
                            <div class="stat">
                                <span class="number">1.3+</span>
                                <span class="label">Lakh Patients</span>
                            </div>
                            <div class="stat">
                                <span class="number">99%</span>
                                <span class="label">Success Rate</span>
                            </div>
                        </div>
                        <p>Many patients from across Punjab visit BRAR EYE Hospital specifically for our surgeons' expertise. From initial consultation to successful surgery and follow-up care, their experience is consistently smooth and reassuring.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Surgeries Section -->
    <section class="surgeries-section">
        <div class="container">
            <div class="section-header">
                <h2>Advanced Eye Surgeries by Expert Surgeons</h2>
                <p class="section-subtitle">Comprehensive Surgical Solutions for All Eye Conditions</p>
            </div>
            
            <div class="surgeries-grid">
                <div class="surgery-card featured">
                    <div class="featured-badge">Most Advanced</div>
                    <div class="surgery-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Refractive Surgeries</h3>
                    <p>Free yourself from glasses with SMILE Pro and LASIK surgeries by highly experienced laser eye surgeons. Bladeless technology for high accuracy corneal reshaping.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> SMILE Pro & LASIK</li>
                        <li><i class="fas fa-check"></i> Corrects all refractive errors</li>
                        <li><i class="fas fa-check"></i> Bladeless technology</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Cataract Surgery</h3>
                    <p>Blade-free phaco and micro-incision cataract surgeries with premium IOLs. Fast recovery and excellent visual outcomes using ultrasonic phacoemulsification.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Blade-free phaco surgery</li>
                        <li><i class="fas fa-check"></i> Premium IOL options</li>
                        <li><i class="fas fa-check"></i> Minutes to complete</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-circle"></i>
                    </div>
                    <h3>Corneal Surgery</h3>
                    <p>Advanced treatments for keratoconus, corneal ulcers, and scars. Corneal transplant surgeries by experienced specialists for restored clarity and comfort.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Keratoconus treatment</li>
                        <li><i class="fas fa-check"></i> Corneal transplants</li>
                        <li><i class="fas fa-check"></i> Ulcer management</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Retinal Surgery</h3>
                    <p>Treatment for retinal detachment, diabetic retinopathy, macular degeneration with high-end vitrectomy systems and precision-guided lasers.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Retinal detachment repair</li>
                        <li><i class="fas fa-check"></i> Diabetic retinopathy care</li>
                        <li><i class="fas fa-check"></i> Vitrectomy systems</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Pediatric Eye Surgeries</h3>
                    <p>Children's eye problems require extra care. Our pediatric surgeons treat squints, lazy eye, congenital cataracts with gentle, child-friendly methods.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Squint correction</li>
                        <li><i class="fas fa-check"></i> Congenital cataracts</li>
                        <li><i class="fas fa-check"></i> Child-friendly approach</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Specialized Procedures</h3>
                    <p>Complete range of eye surgeries including glaucoma surgery, oculoplasty, pterygium removal, and emergency surgical interventions under one roof.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Glaucoma surgery</li>
                        <li><i class="fas fa-check"></i> Oculoplasty procedures</li>
                        <li><i class="fas fa-check"></i> Emergency surgeries</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Stories Section -->
    <section class="stories-section">
        <div class="container">
            <div class="section-header">
                <h2>Patient Stories - Surgical Excellence That Speaks</h2>
                <p class="section-subtitle">Real Experiences from Our Successful Surgeries</p>
            </div>
            
            <div class="stories-grid">
                <div class="story-card">
                    <div class="story-content">
                        <p>I was very nervous before my cataract surgery, but the eye surgeon at BRAR EYE Hospital made me feel completely safe. The surgery was quick and painless. I can see clearly now.</p>
                    </div>
                    <div class="story-author">
                        <div class="author-info">
                            <h4>Manjeet Kaur</h4>
                            <span>Cataract Surgery Patient</span>
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
                
                <div class="story-card">
                    <div class="story-content">
                        <p>One of the best decisions of my life was getting LASIK done by Brar's eye surgeon. I've said goodbye to specs after 15 years! The procedure was comfortable and results are amazing.</p>
                    </div>
                    <div class="story-author">
                        <div class="author-info">
                            <h4>Rajesh Kumar</h4>
                            <span>LASIK Surgery Patient</span>
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
                
                <div class="story-card">
                    <div class="story-content">
                        <p>My father's retinal surgery was performed by their top eye surgeon. The care was top-notch, and his vision has significantly improved. We're grateful for the excellent treatment.</p>
                    </div>
                    <div class="story-author">
                        <div class="author-info">
                            <h4>Harpreet Singh</h4>
                            <span>Family of Retinal Patient</span>
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
                
                <div class="story-card">
                    <div class="story-content">
                        <p>The eye surgeon not only treated my glaucoma but also helped me understand the condition fully. I now feel confident about my eye health and regular follow-ups.</p>
                    </div>
                    <div class="story-author">
                        <div class="author-info">
                            <h4>Sukhwinder Kaur</h4>
                            <span>Glaucoma Surgery Patient</span>
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

    <!-- Choose Us Section -->
    <section class="choose-us-section">
        <div class="container">
            <div class="section-header">
                <h2>Why bathinda Chooses BRAR EYE Hospital</h2>
                <p class="section-subtitle">Proven Excellence in Surgical Eye Care</p>
            </div>
            
            <div class="reasons-grid">
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3>21+ Years Legacy</h3>
                    <p>Over two decades of excellence in eye surgeries with consistent quality and innovation</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>1.3+ Lakh Happy Patients</h3>
                    <p>Successfully treated patients across Punjab with proven surgical outcomes</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Skilled Eye Surgeons</h3>
                    <p>Dedicated and highly qualified surgeons with specialized expertise in all eye conditions</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Latest Technologies</h3>
                    <p>SMILE Pro, bladeless cataract surgery, and advanced surgical equipment</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Safe Surgical Environment</h3>
                    <p>Clean, comfortable, and internationally compliant surgical facilities</p>
                </div>
                
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <h3>Complete Surgery Range</h3>
                    <p>Full spectrum of eye surgeries from minor procedures to complex operations</p>
                </div>
            </div>
            
            <div class="trust-statement">
                <p class="lead">Whether it's a minor procedure or a complex surgery, patients trust us because of our proven outcomes and highly qualified surgical team.</p>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>Advanced Surgical Technology</h2>
                    <p class="lead">Our surgeons utilize cutting-edge technology and equipment to deliver world-class surgical outcomes with maximum safety and precision.</p>
                    
                    <div class="tech-features">
                        <div class="tech-feature">
                            <h4><i class="fas fa-laser-pointer"></i> SMILE Pro Laser Systems</h4>
                            <p>Latest ZEISS technology for bladeless, flapless vision correction</p>
                        </div>
                        
                        <div class="tech-feature">
                            <h4><i class="fas fa-eye-dropper"></i> Phaco Machines</h4>
                            <p>Advanced ultrasonic phacoemulsification for cataract removal</p>
                        </div>
                        
                        <div class="tech-feature">
                            <h4><i class="fas fa-map"></i> Topography-Guided LASIK</h4>
                            <p>Precise corneal mapping for customized vision correction</p>
                        </div>
                        
                        <div class="tech-feature">
                            <h4><i class="fas fa-microscope"></i> High-End Vitrectomy Systems</h4>
                            <p>Advanced equipment for delicate retinal surgeries</p>
                        </div>
                    </div>
                </div>
                
                <div class="content-right">
                    <div class="surgical-standards">
                        <h3>Surgical Standards</h3>
                        <div class="standards-list">
                            <div class="standard-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>International Sterilization Protocols</span>
                            </div>
                            <div class="standard-item">
                                <i class="fas fa-heartbeat"></i>
                                <span>Patient Safety Monitoring</span>
                            </div>
                            <div class="standard-item">
                                <i class="fas fa-user-nurse"></i>
                                <span>Trained Surgical Teams</span>
                            </div>
                            <div class="standard-item">
                                <i class="fas fa-certificate"></i>
                                <span>Quality Assurance Systems</span>
                            </div>
                        </div>
                        
                        <div class="safety-note">
                            <h4><i class="fas fa-check-circle"></i> Safety First</h4>
                            <p>Every surgery follows strict safety protocols with continuous monitoring and post-operative care to ensure optimal outcomes.</p>
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
                    <h2>Don't Delay When It Comes to Your Vision</h2>
                    <p>Meet the best eye surgeon in bathinda at BRAR EYE Hospital and get the right advice and care from day one. Whether it's blurry vision, discomfort, or a known diagnosis - our surgeons are here to help.</p>
                    <div class="cta-benefits">
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Expert surgical consultation</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Advanced surgical techniques</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Personalized treatment plans</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Complete post-operative care</span>
                        </div>
                    </div>
                    <div class="trust-message">
                        <p><strong>At BRAR EYE Hospital, your eyes are our responsibility.</strong></p>
                    </div>
                </div>
                <div class="contact-methods">
                    <a href="tel:7218272182" class="contact-method primary">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Schedule Consultation</strong>
                            <span>72182-72182</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Visit Our Hospital</strong>
                            <span>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-eye"></i>
                        <div>
                            <strong>Surgical Consultation</strong>
                            <span>Get expert advice today</span>
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