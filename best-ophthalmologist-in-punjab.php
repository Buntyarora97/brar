<?php
// SEO and Meta Information
$pageTitle = "Best ophthalmologist in Punjab – Trusted Eye Care with Modern Technology";
$pageDescription = "Your destination for Best ophthalmologist in Punjab – Brar Eye Hospital combines technology with trust to provide safe, accurate, and affordable treatments.";
$pageKeywords = "eye surgeon in punjab, MD ophthalmology in punjab, ocular care expert in punjab, eye treatment doctor in punjab";
$canonicalUrl = "https://brareye.com/best-ophthalmologist-in-punjab.php";

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
    <link rel="stylesheet" href="assets/ophthalmologist-styles.css">
    
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
        "description": "Best ophthalmologist in punjab with comprehensive eye care services",
        "url": "<?php echo $canonicalUrl; ?>",
        "telephone": "72182-72182",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "punjab",
            "addressRegion": "Punjab",
            "addressCountry": "IN"
        },
        "medicalSpecialty": [
            "Ophthalmology",
            "LASIK Surgery",
            "Cataract Surgery",
            "Glaucoma Treatment",
            "Retinal Diseases"
        ],
        "serviceType": [
            "Eye Examination",
            "LASIK Surgery",
            "SMILE Pro Surgery",
            "Cataract Surgery",
            "Glaucoma Treatment",
            "Diabetic Eye Care"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "130000"
        }
    }
    </script>
    <style>
        /* Ophthalmologist Page Styles */
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

.ophthalmologist-page-container {
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

/* About Section */
.about-section {
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
    color: #03c0b4;
    font-size: 1rem;
    min-width: 20px;
}

.tech-diagram {
    background: #f7fafc;
    padding: 30px;
    border-radius: 12px;
    border-left: 4px solid #03c0b4;
}

.tech-list {
    list-style: none;
    margin-top: 1rem;
}

.tech-list li {
    padding: 8px 0;
    color: #4a5568;
}

.tech-list strong {
    color: #1a202c;
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
    position: relative;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.service-card.featured {
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
    margin-bottom: 20px;
}

.service-features {
    list-style: none;
}

.service-features li {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 4px 0;
    color: #4a5568;
    font-size: 0.9rem;
}

.service-features i {
    color: #38a169;
    font-size: 0.8rem;
}

/* Technology Section */
.technology-section {
    background: white;
}

.section-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.equipment-list {
    margin-top: 2rem;
}

.equipment-item {
    background: #f7fafc;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 15px;
    border-left: 4px solid #f17732;
}

.equipment-item h4 {
    color: #1a202c;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.equipment-item h4 i {
    color: #03c0b4;
}

.equipment-item p {
    color: #4a5568;
    margin: 0;
}

.surgical-procedures h3 {
    margin-bottom: 1.5rem;
}

.surgery-list {
    list-style: none;
    margin-bottom: 2rem;
}

.surgery-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 0;
    color: #4a5568;
}

.surgery-list i {
    color: #03c0b4;
    min-width: 20px;
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

/* Tips Section */
.tips-section {
    background: white;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.tip-card {
    background: #f7fafc;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border-top: 4px solid #f17732;
}

.tip-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.tip-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #03c0b4 0%, #02a397 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.tip-icon i {
    font-size: 1.5rem;
    color: white;
}

.tip-card h3 {
    margin-bottom: 10px;
    color: #1a202c;
}

.tip-card p {
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
    
    .services-grid,
    .tips-grid,
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
    
    .service-card,
    .tip-card,
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

/* Loading states */
.service-card,
.testimonial-card,
.benefit-item,
.tip-card {
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
    </style>
</head>
<body>

<!-- Main Content Container -->
<div class="ophthalmologist-page-container">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Best Ophthalmologist in punjab</h1>
                    <p class="hero-subtitle">Expert Eye Care with Advanced Technology & Compassionate Service</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <span class="stat-number">1.3+ Lakh</span>
                            <span class="stat-label">Patients Treated</span>
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
                        <i class="fas fa-user-md"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Ophthalmologist Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-header">
                <h2>Who is an Ophthalmologist?</h2>
                <p class="section-subtitle">Medical Doctors Specialized in Complete Eye Care</p>
            </div>
            <div class="content-grid">
                <div class="content-text">
                    <p>An ophthalmologist is a medical doctor (MD or MBBS with specialization) who is trained to diagnose, treat, and manage all eye-related conditions. Unlike optometrists or opticians, ophthalmologists can perform eye surgeries, prescribe medication, and handle complex diseases of the eye.</p>
                    
                    <p>At BRAR EYE Hospital, our ophthalmologists treat conditions related to systemic diseases like diabetes, hypertension, and thyroid disorders, ensuring comprehensive care for your vision and overall health.</p>
                    
                    <div class="services-overview">
                        <h3>Our Ophthalmologists Provide:</h3>
                        <ul class="medical-list">
                            <li><i class="fas fa-stethoscope"></i> Comprehensive eye examinations</li>
                            <li><i class="fas fa-diagnoses"></i> Diagnosis and treatment of eye diseases</li>
                            <li><i class="fas fa-cut"></i> Microsurgeries and laser procedures</li>
                            <li><i class="fas fa-pills"></i> Prescription of corrective lenses or medications</li>
                            <li><i class="fas fa-chart-line"></i> Monitoring of chronic conditions</li>
                            <li><i class="fas fa-baby"></i> Pediatric and geriatric eye care</li>
                        </ul>
                    </div>
                </div>
                <div class="technology-overview">
                    <div class="tech-diagram">
                        <h4>Advanced Diagnostic Technology</h4>
                        <ul class="tech-list">
                            <li><strong>OCT:</strong> Optical Coherence Tomography for detailed retinal imaging</li>
                            <li><strong>Visual Field Analysis:</strong> Comprehensive glaucoma screening</li>
                            <li><strong>Corneal Topography:</strong> Precise corneal mapping</li>
                            <li><strong>Retinal Imaging:</strong> High-resolution fundus photography</li>
                            <li><strong>LASIK Technology:</strong> Advanced laser vision correction</li>
                        </ul>
                        <div style="margin-top: 20px; padding: 15px; background: #e6fffa; border-radius: 8px; border-left: 4px solid #38a169;">
                            <p style="margin: 0; color: #4a5568; font-weight: 500;"><i class="fas fa-shield-alt" style="color: #38a169; margin-right: 8px;"></i>Early detection and accurate treatment with cutting-edge equipment!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive Eye Care Services</h2>
                <p class="section-subtitle">All Eye Treatments Under One Roof</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card featured">
                    <div class="featured-badge">Most Popular</div>
                    <div class="service-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>LASIK & SMILE Pro</h3>
                    <p>Advanced laser vision correction surgeries for spectacle removal. We offer the latest SMILE Pro technology for precise and safe refractive surgery.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Freedom from glasses</li>
                        <li><i class="fas fa-check"></i> Quick recovery</li>
                        <li><i class="fas fa-check"></i> Latest technology</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Cataract Surgery</h3>
                    <p>State-of-the-art phacoemulsification cataract surgery with premium IOL options to match your lifestyle and visual needs.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Advanced phaco surgery</li>
                        <li><i class="fas fa-check"></i> Premium IOL options</li>
                        <li><i class="fas fa-check"></i> Same day procedure</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-pressure-gauge"></i>
                    </div>
                    <h3>Glaucoma Management</h3>
                    <p>Comprehensive glaucoma diagnosis and treatment using advanced tonometry, OCT, and visual field analysis for early detection.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Early detection</li>
                        <li><i class="fas fa-check"></i> Advanced monitoring</li>
                        <li><i class="fas fa-check"></i> Surgical options</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Retina & Macula</h3>
                    <p>Specialized treatment for diabetic retinopathy, AMD, and retinal diseases using OCT, FFA, and targeted laser treatments.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Diabetic care</li>
                        <li><i class="fas fa-check"></i> Advanced imaging</li>
                        <li><i class="fas fa-check"></i> Laser treatments</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Pediatric Eye Care</h3>
                    <p>Specialized care for children's vision problems including squint correction, congenital diseases, and early intervention programs.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Squint correction</li>
                        <li><i class="fas fa-check"></i> Child-friendly care</li>
                        <li><i class="fas fa-check"></i> Early detection</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Dry Eye Treatment</h3>
                    <p>Advanced diagnosis and treatment for dry eye syndrome and allergies providing long-term relief from burning and irritation.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Advanced diagnostics</li>
                        <li><i class="fas fa-check"></i> Long-term relief</li>
                        <li><i class="fas fa-check"></i> Personalized care</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>Advanced Technology & Equipment</h2>
                    <p class="lead">We are equipped with the latest ophthalmic equipment to ensure accurate diagnosis and safe treatments for all eye conditions.</p>
                    
                    <div class="equipment-list">
                        <div class="equipment-item">
                            <h4><i class="fas fa-microscope"></i> Optical Coherence Tomography (OCT)</h4>
                            <p>High-resolution cross-sectional imaging of the retina and optic nerve</p>
                        </div>
                        <div class="equipment-item">
                            <h4><i class="fas fa-chart-area"></i> Visual Field Analyzer</h4>
                            <p>Comprehensive peripheral vision testing for glaucoma detection</p>
                        </div>
                        <div class="equipment-item">
                            <h4><i class="fas fa-map"></i> Corneal Topography</h4>
                            <p>Precise mapping of corneal surface for LASIK and contact lens fitting</p>
                        </div>
                        <div class="equipment-item">
                            <h4><i class="fas fa-laser-pointer"></i> Zeiss SMILE Pro Laser</h4>
                            <p>Latest laser technology for minimally invasive vision correction</p>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="surgical-procedures">
                        <h3>Surgical Procedures We Perform</h3>
                        <ul class="surgery-list">
                            <li><i class="fas fa-cut"></i> Complex cataract surgeries</li>
                            <li><i class="fas fa-leaf"></i> Pterygium excision</li>
                            <li><i class="fas fa-bandage"></i> Amniotic membrane grafting</li>
                            <li><i class="fas fa-tools"></i> Dacryocystorhinostomy (DCR)</li>
                            <li><i class="fas fa-pressure-gauge"></i> Trabeculectomy for glaucoma</li>
                            <li><i class="fas fa-eye-slash"></i> Ptosis correction</li>
                            <li><i class="fas fa-baby"></i> Pediatric cataract surgery</li>
                            <li><i class="fas fa-cog"></i> Ocular implants</li>
                        </ul>
                    </div>
                    
                    <div class="safety-note">
                        <h4><i class="fas fa-shield-alt"></i> Safety & Precision</h4>
                        <p>All procedures are performed using microsurgical techniques with the highest safety standards and precision equipment.</p>
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
                <p class="section-subtitle">Your Trusted Partner in Complete Eye Care</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>21+ Years Excellence</h3>
                    <p>Over two decades of dedicated service in advanced eye care with proven track record</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>1.3+ Lakh Patients</h3>
                    <p>Successfully treated over 130,000 patients with excellent outcomes and satisfaction</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Advanced Equipment</h3>
                    <p>State-of-the-art diagnostic and surgical equipment for accurate treatment</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-glasses"></i>
                    </div>
                    <h3>Freedom from Specs</h3>
                    <p>Modern laser vision correction with LASIK and SMILE Pro technology</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Comprehensive Care</h3>
                    <p>Complete eye care services under one roof with expert ophthalmologists</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Patient-Centric</h3>
                    <p>Compassionate and personalized care with transparent pricing and ethical practices</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eye Health Tips Section -->
    <section class="tips-section">
        <div class="container">
            <div class="section-header">
                <h2>Tips to Maintain Eye Health</h2>
                <p class="section-subtitle">Expert Recommendations from Our Ophthalmologists</p>
            </div>
            
            <div class="tips-grid">
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Regular Check-ups</h3>
                    <p>Get comprehensive eye examinations every year, especially after age 40</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-sunglasses"></i>
                    </div>
                    <h3>UV Protection</h3>
                    <p>Protect your eyes from harmful UV rays by wearing quality sunglasses</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Screen Breaks</h3>
                    <p>Take regular breaks from screens to avoid digital eye strain and fatigue</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-carrot"></i>
                    </div>
                    <h3>Healthy Diet</h3>
                    <p>Maintain a balanced diet rich in Vitamin A, omega-3 fatty acids, and antioxidants</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Manage Health</h3>
                    <p>Control systemic conditions like diabetes and hypertension that affect vision</p>
                </div>
                
                <div class="tip-card">
                    <div class="tip-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Proper Medication</h3>
                    <p>Use prescribed eye drops as directed and avoid self-medication</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>Patient Success Stories</h2>
                <p class="section-subtitle">Real Experiences from Our Satisfied Patients</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>I got my SMILE Pro surgery done at BRAR EYE Hospital, and I can now see clearly without glasses. The doctors and staff were extremely supportive. Highly recommended!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Manpreet Singh</h4>
                            <span>SMILE Pro Patient, punjab</span>
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
                        <p>My father underwent cataract surgery here. The procedure was quick and painless, and his vision improved significantly. Best ophthalmologist in punjab without a doubt.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Simran Kaur</h4>
                            <span>Family of Patient, punjab</span>
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
                        <p>I visited BRAR EYE Hospital for a glaucoma check-up. The diagnosis and treatment were done using advanced equipment. Very satisfied with the comprehensive service and care.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Harjeet Singh</h4>
                            <span>Glaucoma Patient, Faridkot</span>
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
                    <h2>Experience World-Class Eye Care</h2>
                    <p>Choose the best ophthalmologist in punjab for comprehensive eye care. From routine check-ups to advanced surgeries, we provide personalized treatment with cutting-edge technology.</p>
                    <div class="cta-benefits">
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>21+ years of trusted expertise</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Advanced diagnostic and surgical equipment</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive care under one roof</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Patient-centric approach with compassionate care</span>
                        </div>
                    </div>
                </div>
                <div class="contact-methods">
                    <a href="tel:7218272182" class="contact-method primary">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Call for Appointment</strong>
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
                            <strong>Comprehensive Eye Exam</strong>
                            <span>Book your consultation today</span>
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