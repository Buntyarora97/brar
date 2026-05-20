<?php
// SEO and Meta Information
$pageTitle = "Cataract Surgery in Dabwali | Experience Clarity with Us";
$pageDescription = "Brar Eye Hospital offers the best care for Cataract Surgery in Dabwali using world-class machines, advanced surgical techniques & experienced eye specialists.";
$pageKeywords = "phacoemulsification in dabwali, intraocular lens implant in dabwali, blurry vision treatment in dabwali, cloudy lens surgery in dabwali";
$canonicalUrl = "https://brareye.com/cataract-surgery-in-dabwali.php";
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
    <link rel="stylesheet" href="assets/cataract-styles.css">
    
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
        "description": "Leading cataract surgery specialist in dabwali with advanced eye care services",
        "url": "<?php echo $canonicalUrl; ?>",
        "telephone": "72182-72182",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "dabwali",
            "addressRegion": "Punjab",
            "addressCountry": "IN"
        },
        "medicalSpecialty": [
            "Ophthalmology",
            "Cataract Surgery",
            "Intraocular Lens Implantation"
        ],
        "serviceType": [
            "Cataract Surgery",
            "Phacoemulsification",
            "Multifocal IOL Surgery",
            "Laser Cataract Surgery"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "130000"
        }
    }
    </script>
    <STYLE>
        /* Cataract Surgery Page Styles */
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

.cataract-page-container {
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

/* About Cataract Section */
.about-cataract-section {
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
    min-width: 20px;
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

/* Surgery Section */
.surgery-section {
    background: #f7fafc;
}

.surgery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.surgery-card {
    background: white;
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
}

.surgery-card.featured {
    border: 2px solid #f17732;
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

/* IOL Section */
.iol-section {
    background: white;
}

.section-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.iol-types {
    margin-top: 2rem;
}

.iol-list {
    margin-top: 1.5rem;
}

.iol-item {
    background: #f7fafc;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 15px;
    border-left: 4px solid #f17732;
}

.iol-item h4 {
    color: #1a202c;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.iol-item h4 i {
    color: #03c0b4;
}

.iol-item p {
    color: #4a5568;
    margin: 0;
}

.process-steps h3 {
    margin-bottom: 1.5rem;
}

.step-list {
    list-style: none;
    margin-bottom: 2rem;
}

.step-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 0;
    color: #4a5568;
}

.step-list i {
    color: #03c0b4;
    min-width: 20px;
}

.recovery-note {
    background: #e6fffa;
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #38a169;
}

.recovery-note h4 {
    color: #1a202c;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.recovery-note i {
    color: #38a169;
}

/* Causes Section */
.causes-section {
    background: #f7fafc;
}

.causes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.cause-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 4px solid #f17732;
}

.cause-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.cause-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.cause-icon i {
    font-size: 1.5rem;
    color: white;
}

.cause-card h3 {
    margin-bottom: 10px;
    color: #1a202c;
}

.cause-card p {
    color: #4a5568;
    margin: 0;
}

/* Prevention Section */
.prevention-section {
    background: white;
}

.prevention-content {
    text-align: center;
}

.prevention-text {
    margin-bottom: 40px;
}

.prevention-text p {
    font-size: 1.1rem;
    color: #4a5568;
    max-width: 800px;
    margin: 0 auto;
}

.prevention-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.prevention-item {
    text-align: center;
    padding: 30px 20px;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
}

.prevention-item:hover {
    background: #f7fafc;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

.prevention-item i {
    font-size: 2.5rem;
    color: #03c0b4;
    margin-bottom: 20px;
}

.prevention-item h4 {
    margin-bottom: 10px;
    color: #1a202c;
}

.prevention-item p {
    color: #4a5568;
    margin: 0;
}

/* Why Choose Section */
.why-choose-section {
    background: #f7fafc;
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
    background: white;
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
    background: white;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.testimonial-card {
    background: #f7fafc;
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
    
    .surgery-grid,
    .causes-grid,
    .prevention-grid,
    .benefits-grid,
    .testimonials-grid {
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
    
    .surgery-card,
    .cause-card,
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
    </STYLE>
</head>
<body>

<!-- Main Content Container -->
<div class="cataract-page-container">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Cataract Surgery in dabwali</h1>
                    <p class="hero-subtitle">Restore Clear Vision with Advanced Eye Care</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <span class="stat-number">1.3+ Lakh</span>
                            <span class="stat-label">Successful Surgeries</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="stat-number">21+ Years</span>
                            <span class="stat-label">Experience</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-eye"></i>
                            <span class="stat-number">Advanced</span>
                            <span class="stat-label">Technology</span>
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
                    <div class="medical-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Understanding Cataract Section -->
    <section class="about-cataract-section">
        <div class="container">
            <div class="section-header">
                <h2>Understanding Cataract</h2>
                <p class="section-subtitle">Clouding of the Eye's Natural Lens</p>
            </div>
            <div class="content-grid">
                <div class="content-text">
                    <p>Cataract is the clouding of the eye's natural lens, which lies behind the iris and the pupil. This cloudiness prevents light from passing through the lens and focusing properly on the retina, resulting in blurred or dull vision.</p>
                    
                    <p>Over time, this can worsen, interfering with daily activities like reading, driving, or even recognizing faces. While aging is the most common cause, several factors may contribute to cataract development.</p>
                    
                    <div class="cataract-causes">
                        <h3>Common Symptoms of Cataract:</h3>
                        <ul class="medical-list">
                            <li><i class="fas fa-eye-slash"></i> Blurred or cloudy vision</li>
                            <li><i class="fas fa-moon"></i> Difficulty seeing at night</li>
                            <li><i class="fas fa-sun"></i> Sensitivity to light and glare</li>
                            <li><i class="fas fa-palette"></i> Faded colors</li>
                            <li><i class="fas fa-images"></i> Double vision in one eye</li>
                            <li><i class="fas fa-glasses"></i> Frequent prescription changes</li>
                            <li><i class="fas fa-circle-notch"></i> Seeing halos around lights</li>
                            <li><i class="fas fa-search-minus"></i> Increased nearsightedness</li>
                        </ul>
                    </div>
                </div>
                <div class="eye-anatomy">
                    <div class="anatomy-diagram">
                        <h4>Types of Cataract</h4>
                        <ul class="anatomy-list">
                            <li><strong>Age-Related:</strong> Most common type due to natural aging</li>
                            <li><strong>Congenital:</strong> Present at birth or early childhood</li>
                            <li><strong>Secondary:</strong> Caused by diabetes or medications</li>
                            <li><strong>Traumatic:</strong> Results from eye injury</li>
                        </ul>
                        <div style="margin-top: 20px; padding: 15px; background: #fed7d7; border-radius: 8px; border-left: 4px solid #e53e3e;">
                            <p style="margin: 0; color: #4a5568; font-weight: 500;"><i class="fas fa-exclamation-triangle" style="color: #e53e3e; margin-right: 8px;"></i>Early detection and proper care can preserve your vision!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Surgery Types Section -->
    <section class="surgery-section">
        <div class="container">
            <div class="section-header">
                <h2>Advanced Cataract Surgery Techniques</h2>
                <p class="section-subtitle">Modern No-Stitch, No-Injection Procedures</p>
            </div>
            
            <div class="surgery-grid">
                <div class="surgery-card featured">
                    <div class="featured-badge">Most Popular</div>
                    <div class="surgery-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Phacoemulsification (Phaco)</h3>
                    <p>No-stitch, no-injection technique with 2.2-3mm incision. Cloudy lens is emulsified using ultrasound and removed safely.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Minimal incision</li>
                        <li><i class="fas fa-check"></i> Quick recovery</li>
                        <li><i class="fas fa-check"></i> Same day discharge</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>MICS Surgery</h3>
                    <p>Micro-Incision Cataract Surgery with even smaller incisions for faster healing and improved outcomes.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Ultra-small incision</li>
                        <li><i class="fas fa-check"></i> Faster healing</li>
                        <li><i class="fas fa-check"></i> Better outcomes</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-laser-pointer"></i>
                    </div>
                    <h3>FLACS (Laser Surgery)</h3>
                    <p>Femto LASER-Assisted Cataract Surgery - bladeless technique using precision laser technology.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> Bladeless procedure</li>
                        <li><i class="fas fa-check"></i> Improved safety</li>
                        <li><i class="fas fa-check"></i> Enhanced accuracy</li>
                    </ul>
                </div>

                <div class="surgery-card">
                    <div class="surgery-icon">
                        <i class="fas fa-scalpel-path"></i>
                    </div>
                    <h3>SICS Surgery</h3>
                    <p>Small Incision Cataract Surgery for complex cases with hard lenses. Slightly larger incision but no stitches required.</p>
                    <ul class="surgery-features">
                        <li><i class="fas fa-check"></i> For complex cases</li>
                        <li><i class="fas fa-check"></i> No stitches needed</li>
                        <li><i class="fas fa-check"></i> Proven technique</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- IOL Section -->
    <section class="iol-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>Freedom from Spectacles</h2>
                    <p class="lead">Advanced Intraocular Lenses (IOLs) can significantly reduce or eliminate your dependence on spectacles after cataract surgery.</p>
                    
                    <div class="iol-types">
                        <h3>Types of IOLs Available:</h3>
                        <div class="iol-list">
                            <div class="iol-item">
                                <h4><i class="fas fa-dot-circle"></i> Monofocal IOLs</h4>
                                <p>Focused for distance vision - excellent clarity for far objects</p>
                            </div>
                            <div class="iol-item">
                                <h4><i class="fas fa-layer-group"></i> Multifocal IOLs</h4>
                                <p>Provide both distance and near vision - reduce dependence on glasses</p>
                            </div>
                            <div class="iol-item">
                                <h4><i class="fas fa-expand-arrows-alt"></i> EDOF IOLs</h4>
                                <p>Extended Depth of Focus - better clarity for intermediate tasks like computers and mobile phones</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="process-steps">
                        <h3>Before Surgery Preparation</h3>
                        <ul class="step-list">
                            <li><i class="fas fa-microscope"></i> Eye biometry and keratometry</li>
                            <li><i class="fas fa-heartbeat"></i> Blood pressure and sugar check</li>
                            <li><i class="fas fa-heart"></i> ECG and general health check</li>
                            <li><i class="fas fa-eye"></i> Visual acuity testing</li>
                            <li><i class="fas fa-pressure-gauge"></i> Eye pressure measurement</li>
                        </ul>
                    </div>
                    
                    <div class="recovery-note">
                        <h4><i class="fas fa-clock"></i> Quick Recovery</h4>
                        <p>Most patients go home the same day and experience improved vision within 24-48 hours. Normal activities can be resumed within days to weeks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section -->
    <section class="causes-section">
        <div class="container">
            <div class="section-header">
                <h2>What Causes Cataract?</h2>
                <p class="section-subtitle">Understanding Risk Factors and Prevention</p>
            </div>
            
            <div class="causes-grid">
                <div class="cause-card">
                    <div class="cause-icon">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <h3>Aging</h3>
                    <p>Most common cause - natural aging process affects lens proteins</p>
                </div>
                
                <div class="cause-card">
                    <div class="cause-icon">
                        <i class="fas fa-dna"></i>
                    </div>
                    <h3>Family History</h3>
                    <p>Hereditary factors and genetic predisposition</p>
                </div>
                
                <div class="cause-card">
                    <div class="cause-icon">
                        <i class="fas fa-candy-cane"></i>
                    </div>
                    <h3>Diabetes</h3>
                    <p>Systemic diseases affecting eye health</p>
                </div>
                
                <div class="cause-card">
                    <div class="cause-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h3>UV Exposure</h3>
                    <p>Prolonged exposure to harmful UV rays</p>
                </div>
                
                <div class="cause-card">
                    <div class="cause-icon">
                        <i class="fas fa-smoking"></i>
                    </div>
                    <h3>Smoking</h3>
                    <p>Tobacco and alcohol consumption increase risk</p>
                </div>
                
                <div class="cause-card">
                    <div class="cause-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>Medications</h3>
                    <p>Long-term steroid use and certain medications</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Prevention Section -->
    <section class="prevention-section">
        <div class="container">
            <div class="section-header">
                <h2>Preventing Cataracts</h2>
                <p class="section-subtitle">Lifestyle Changes to Delay Onset</p>
            </div>
            
            <div class="prevention-content">
                <div class="prevention-text">
                    <p>While cataracts due to aging cannot be fully prevented, these lifestyle choices may delay their onset and protect your vision:</p>
                </div>
                
                <div class="prevention-grid">
                    <div class="prevention-item">
                        <i class="fas fa-calendar-check"></i>
                        <h4>Regular Eye Exams</h4>
                        <p>Especially after age 50 for early detection</p>
                    </div>
                    
                    <div class="prevention-item">
                        <i class="fas fa-sunglasses"></i>
                        <h4>UV Protection</h4>
                        <p>Wear UV-protective sunglasses outdoors</p>
                    </div>
                    
                    <div class="prevention-item">
                        <i class="fas fa-heartbeat"></i>
                        <h4>Manage Health</h4>
                        <p>Control diabetes and blood pressure</p>
                    </div>
                    
                    <div class="prevention-item">
                        <i class="fas fa-apple-alt"></i>
                        <h4>Healthy Diet</h4>
                        <p>Foods rich in antioxidants and vitamins</p>
                    </div>
                    
                    <div class="prevention-item">
                        <i class="fas fa-ban"></i>
                        <h4>Avoid Smoking</h4>
                        <p>Quit smoking and limit alcohol consumption</p>
                    </div>
                    
                    <div class="prevention-item">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Eye Protection</h4>
                        <p>Protect eyes from injury and trauma</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose BRAR EYE Hospital?</h2>
                <p class="section-subtitle">Your Trusted Partner in Clear Vision</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>21+ Years Experience</h3>
                    <p>Over two decades of trusted eye care with proven results</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>1.3+ Lakh Patients</h3>
                    <p>Successfully treated over 130,000 patients across Punjab</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>State-of-Art Facility</h3>
                    <p>Modern operation theatres with advanced equipment</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Expert Surgeons</h3>
                    <p>Experienced and compassionate ophthalmologists</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>Phaco, MICS, FLACS, and latest IOL options</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-glasses"></i>
                    </div>
                    <h3>Freedom from Specs</h3>
                    <p>Customized visual solutions for your lifestyle needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>Patient Success Stories</h2>
                <p class="section-subtitle">Real Experiences from Our Patients</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>I was struggling with blurry vision for months. Dr. Brar performed my cataract surgery using advanced phaco technique. Now I can see clearly without glasses! The entire team was very caring and professional.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Gurpreet Singh</h4>
                            <span>Age 65, dabwali</span>
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
                        <p>My mother had severe cataract in both eyes. The multifocal IOL surgery at Punjab BRAR EYE Hospital was life-changing. She can now read, watch TV, and do daily activities without any glasses. Highly recommended!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Jasbir Kaur</h4>
                            <span>Daughter of patient, dabwali</span>
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
                        <p>I was afraid of cataract surgery, but the team at BRAR EYE Hospital made me feel comfortable. The laser surgery was painless and I was home the same day. My vision is crystal clear now!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Amarjit Singh</h4>
                            <span>Age 58, Faridkot</span> 
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
                    <h2>Don't Let Cataracts Blur Your Vision</h2>
                    <p>Early diagnosis and timely treatment can preserve your vision and improve your quality of life. Experience the freedom of clear vision with our advanced cataract surgery techniques.</p>
                    <div class="cta-benefits">
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Same day surgery and discharge</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>No-stitch, no-injection procedures</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Advanced IOL options available</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>21+ years of trusted expertise</span>
                        </div>
                    </div>
                </div>
                <div class="contact-methods">
                    <a href="tel:7218272182" class="contact-method primary">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Call for Consultation</strong>
                            <span>72182-72182</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Visit Our Hospital</strong>
                            <span>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, dabwali</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-calendar-check"></i>
                        <div>
                            <strong>Book Your Surgery</strong>
                            <span>Restore clear vision today</span>
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