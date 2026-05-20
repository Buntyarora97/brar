
<?php
$pageTitle = "Cataract Surgery Cost in Malout | Affordable Cataract Surgery – Brar Eye Hospital";
$pageDescription = "Know the cataract surgery cost in Malout. Get affordable phacoemulsification and premium IOL implants at Brar Eye Hospital. NABH accredited. Serving Malout & nearby areas in Punjab.";
$pageKeywords = "cataract surgery cost Malout, cataract operation cost Malout, cataract surgery Malout, eye surgery Malout, cataract surgeon near Malout";
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


<STYle>
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

</STYle>

</head>
<body>
   

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 style=" color:white;">Cataract Surgery Cost in malout</h1>
                <h2 style=" color:white;">A Complete Guide by BRAR EYE Hospital</h2>
                <p style=" color:white;">Over 21 years of experience with the latest technology ensuring high-quality eye care. More than 1.3 lakh satisfied patients trust us for cataract surgery and comprehensive eye treatment.</p>
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
                <li><a href="#what-is-cataract">What is Cataract Surgery</a></li>
                <li><a href="#importance">Why Important</a></li>
                <li><a href="#cost-factors">Cost Factors</a></li>
                <li><a href="#pre-surgery">Pre-Surgery Guide</a></li>
                <li><a href="#recovery">Recovery</a></li>
                <li><a href="#why-choose-us">Why Choose Us</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Introduction -->
            <section class="intro-section">
                <div class="content-card">
                    <p class="lead">Cataracts are a common eye condition that affects millions of people, especially as they age. The good news is that cataract surgery is a safe, effective, and highly successful treatment that can restore clear vision.</p>
                    <p>At BRAR EYE Hospital, we combine over 21 years of experience with the latest technology to ensure high-quality eye care for every patient. In this article, we'll walk you through everything you need to know about cataract surgery – from what it is, to the cost factors, types of lenses, surgery techniques, recovery process, and why BRAR EYE Hospital is your best choice.</p>
                </div>
            </section>

            <!-- What is Cataract Surgery Section -->
            <section id="what-is-cataract" class="content-section">
                <div class="content-card">
                    <h2>What is Cataract Surgery?</h2>
                    <div class="analogy-section">
                        <div class="analogy-content">
                            <div class="analogy-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="analogy-text">
                                <p><strong>Think of your eye like a camera.</strong> Over time, the natural lens inside the eye can become cloudy. This cloudiness is called a cataract, and it blocks light from entering the eye properly, leading to blurred or dim vision.</p>
                            </div>
                        </div>
                    </div>
                    <p>Cataract surgery is a procedure where the cloudy lens is removed and replaced with a clear artificial lens called an intraocular lens (IOL). It is typically performed under local anesthesia and takes about 15–30 minutes. Most patients go home the same day.</p>
                    
                    <div class="surgery-facts">
                        <div class="fact-item">
                            <i class="fas fa-clock"></i>
                            <span>15-30 minutes procedure</span>
                        </div>
                        <div class="fact-item">
                            <i class="fas fa-home"></i>
                            <span>Same day discharge</span>
                        </div>
                        <div class="fact-item">
                            <i class="fas fa-syringe"></i>
                            <span>Local anesthesia</span>
                        </div>
                        <div class="fact-item">
                            <i class="fas fa-eye"></i>
                            <span>Clear artificial lens (IOL)</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Important Section -->
            <section id="importance" class="content-section">
                <div class="content-card">
                    <h2>Why is Cataract Surgery Important?</h2>
                    <p>If left untreated, cataracts can cause severe vision loss and may even lead to permanent blindness. Some of the common symptoms include:</p>
                    
                    <div class="symptoms-grid">
                        <div class="symptom-item">
                            <i class="fas fa-eye-slash"></i>
                            <span>Blurred vision</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-moon"></i>
                            <span>Difficulty seeing at night</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-circle"></i>
                            <span>Seeing halos around lights</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-palette"></i>
                            <span>Faded colors</span>
                        </div>
                        <div class="symptom-item">
                            <i class="fas fa-glasses"></i>
                            <span>Frequent changes in eyeglass prescription</span>
                        </div>
                    </div>
                    
                    <div class="benefits-box">
                        <h3><i class="fas fa-check-circle"></i> Benefits of Cataract Surgery:</h3>
                        <ul>
                            <li>Restores clear vision</li>
                            <li>Improves quality of life</li>
                            <li>Gives freedom from dependency on glasses in many cases</li>
                            <li>Prevents progression to blindness</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Cost Factors Section -->
            <section id="cost-factors" class="content-section">
                <div class="content-card">
                    <h2>Cataract Surgery Cost in malout</h2>
                    <p>The cost of cataract surgery in malout depends on several factors:</p>
                    
                    <div class="cost-overview">
                        <div class="cost-item">
                            <i class="fas fa-tools"></i>
                            <span>Type of surgery (standard or advanced techniques)</span>
                        </div>
                        <div class="cost-item">
                            <i class="fas fa-eye"></i>
                            <span>Type of intraocular lens (monofocal, multifocal, toric, etc.)</span>
                        </div>
                        <div class="cost-item">
                            <i class="fas fa-gem"></i>
                            <span>Quality and origin of the lens (Indian or imported)</span>
                        </div>
                        <div class="cost-item">
                            <i class="fas fa-hospital"></i>
                            <span>Hospital's infrastructure and technology used</span>
                        </div>
                    </div>
                    
                    <div class="transparency-box">
                        <h3><i class="fas fa-handshake"></i> Our Commitment</h3>
                        <p>At BRAR EYE Hospital, we maintain full transparency in pricing and offer customized packages to suit different needs and budgets.</p>
                        <p><strong>For accurate pricing and consultation, call us at <a href="tel:7218272182">72182-72182</a>.</strong></p>
                    </div>

                    <h3>Factors That Influence Cataract Surgery Cost</h3>
                    
                    <div class="factors-grid">
                        <div class="factor-card">
                            <div class="factor-icon">
                                <i class="fas fa-cut"></i>
                            </div>
                            <h4>1. Type of Surgical Technique</h4>
                            <div class="technique-options">
                                <div class="technique-item">
                                    <strong>Phacoemulsification:</strong>
                                    <p>Uses ultrasound waves to break the cataract. Most common and cost-effective.</p>
                                </div>
                                <div class="technique-item">
                                    <strong>Micro-Incision Cataract Surgery (MICS):</strong>
                                    <p>Uses a smaller incision, faster recovery, slightly higher cost.</p>
                                </div>
                                <div class="technique-item">
                                    <strong>Femtosecond Laser-Assisted Surgery:</strong>
                                    <p>Advanced bladeless procedure, offers precise results, but is premium priced.</p>
                                </div>
                            </div>
                        </div>

                        <div class="factor-card">
                            <div class="factor-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4>2. Type of Intraocular Lens (IOL)</h4>
                            <div class="lens-options">
                                <div class="lens-item">
                                    <div class="lens-type">
                                        <strong>Monofocal Lens</strong>
                                        <span class="price-tag affordable">Most Affordable</span>
                                    </div>
                                    <p>Corrects vision at one distance.</p>
                                </div>
                                <div class="lens-item">
                                    <div class="lens-type">
                                        <strong>Multifocal Lens</strong>
                                        <span class="price-tag moderate">Moderate Cost</span>
                                    </div>
                                    <p>Corrects near and far vision. Reduces the need for glasses.</p>
                                </div>
                                <div class="lens-item">
                                    <div class="lens-type">
                                        <strong>Toric Lens</strong>
                                        <span class="price-tag moderate">Moderate Cost</span>
                                    </div>
                                    <p>Corrects astigmatism along with cataracts.</p>
                                </div>
                                <div class="lens-item">
                                    <div class="lens-type">
                                        <strong>Trifocal Lens</strong>
                                        <span class="price-tag premium">Premium Option</span>
                                    </div>
                                    <p>Offers vision correction at all distances.</p>
                                </div>
                            </div>
                        </div>

                        <div class="factor-card">
                            <div class="factor-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h4>3. Lens Quality and Origin</h4>
                            <div class="quality-comparison">
                                <div class="quality-item">
                                    <h5>Indian Lenses</h5>
                                    <ul>
                                        <li>More affordable</li>
                                        <li>Good quality standards</li>
                                        <li>Cost-effective option</li>
                                    </ul>
                                </div>
                                <div class="quality-item">
                                    <h5>Imported/Branded Lenses</h5>
                                    <ul>
                                        <li>Alcon, Zeiss brands</li>
                                        <li>Enhanced vision outcomes</li>
                                        <li>Premium pricing</li>
                                    </ul>
                                </div>
                                <div class="quality-item">
                                    <h5>Material Type</h5>
                                    <ul>
                                        <li>Hydrophilic: More affordable</li>
                                        <li>Hydrophobic: More durable and safer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="factor-card">
                            <div class="factor-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h4>4. Hospital Infrastructure</h4>
                            <p>A well-equipped eye hospital like BRAR EYE Hospital, with the latest diagnostic tools and robotic systems, offers more precision and comfort, slightly impacting the cost.</p>
                            <div class="infrastructure-features">
                                <span class="feature-badge">Latest Diagnostic Tools</span>
                                <span class="feature-badge">Robotic Systems</span>
                                <span class="feature-badge">Advanced Technology</span>
                                <span class="feature-badge">Precision Surgery</span>
                            </div>
                        </div>

                        <div class="factor-card">
                            <div class="factor-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h4>5. Surgeon's Experience</h4>
                            <p>Experienced eye surgeons, like those at BRAR EYE Hospital, ensure successful outcomes and safety, justifying the value in pricing.</p>
                            <div class="surgeon-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-award"></i>
                                    <span>21+ Years Experience</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-users"></i>
                                    <span>1.3+ Lakh Patients</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Successful Outcomes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pre-Surgery Section -->
            <section id="pre-surgery" class="content-section">
                <div class="content-card">
                    <h2>Pre-Surgery Do's and Don'ts</h2>
                    
                    <div class="dos-donts-grid">
                        <div class="dos-card">
                            <div class="dos-header">
                                <i class="fas fa-check-circle"></i>
                                <h3>Do's</h3>
                            </div>
                            <ul>
                                <li>Get a thorough eye examination and screening before surgery</li>
                                <li>Choose your lens type after discussing with the surgeon</li>
                                <li>Wear comfortable clothes on the day of surgery</li>
                                <li>Arrange someone to take you home post-surgery</li>
                            </ul>
                        </div>

                        <div class="donts-card">
                            <div class="donts-header">
                                <i class="fas fa-times-circle"></i>
                                <h3>Don'ts</h3>
                            </div>
                            <ul>
                                <li>Avoid eating or drinking 6–8 hours before the surgery</li>
                                <li>Do not wear eye makeup, perfumes, or creams on your face</li>
                                <li>Avoid stress and get good rest the night before</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recovery Section -->
            <section id="recovery" class="content-section">
                <div class="content-card">
                    <h2>Recovery and Aftercare</h2>
                    <p>Recovery after cataract surgery is usually quick. Most people return to normal activities within a few days. Here are a few tips:</p>
                    
                    <div class="recovery-timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-eye-dropper"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Daily Care</h4>
                                <p>Use prescribed eye drops regularly</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-hand-paper"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Immediate Precautions</h4>
                                <p>Avoid touching or rubbing your eyes</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-glasses"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Protection</h4>
                                <p>Wear protective glasses if advised</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-swimming-pool"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Activity Restrictions</h4>
                                <p>Avoid swimming, heavy lifting, or dusty environments for a few weeks</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Follow-up</h4>
                                <p>Attend follow-up visits as scheduled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Insurance Section -->
            <section class="content-section">
                <div class="content-card">
                    <h2>Is Cataract Surgery Covered by Insurance?</h2>
                    <div class="insurance-info">
                        <div class="insurance-card">
                            <div class="insurance-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="insurance-content">
                                <h3>Coverage Available</h3>
                                <p>Yes, cataract surgery is covered under many private health insurance policies and government schemes.</p>
                            </div>
                        </div>
                        <div class="insurance-card">
                            <div class="insurance-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="insurance-content">
                                <h3>Our Support</h3>
                                <p>At BRAR EYE Hospital, we assist you in understanding your insurance benefits and help with cashless treatment where applicable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section id="why-choose-us" class="content-section">
                <div class="content-card">
                    <h2>Why Choose BRAR EYE Hospital for Cataract Surgery in malout?</h2>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3>21+ Years Experience</h3>
                            <p>Over two decades of trusted service in eye care with proven expertise.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>1.3+ Lakh Patients</h3>
                            <p>More than 1.3 lakh patients treated successfully with excellent outcomes.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-glasses"></i>
                            </div>
                            <h3>Freedom from Specs</h3>
                            <p>Many patients achieve freedom from spectacles post-surgery with advanced lens options.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3>Cutting-edge Technology</h3>
                            <p>Use of cutting-edge technology including bladeless surgery options for precision.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <h3>Personalized Consultations</h3>
                            <p>Personalized consultations and honest guidance tailored to your specific needs.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                            <h3>Transparent Pricing</h3>
                            <p>Transparent pricing and support with insurance/EMI options to make care accessible.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Dedicated Care</h3>
                            <p>Friendly, experienced staff and dedicated postoperative care for complete recovery.</p>
                        </div>

                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3>Accessible Care</h3>
                            <p>We believe quality eye care should be accessible, affordable, and safe for everyone.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="content-section contact-section">
                <div class="content-card contact-card">
                    <h2>Book Your Cataract Consultation Today</h2>
                    <p>If you or your loved one is suffering from cloudy vision or other signs of cataracts, don't delay treatment. Early diagnosis and timely surgery can restore vision and improve life quality significantly.</p>
                    
                    <div class="contact-info-grid">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <h3>Call Now</h3>
                            <a href="tel:7218272182">72182-72182</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Location</h3>
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
                        <p>Contact BRAR EYE Hospital today to schedule your consultation or to know more about cataract surgery cost in malout.</p>
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
        /* Additional styles specific to cataract surgery page */
        .analogy-section {
            background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            border-left: 4px solid #f17732;
        }

        .analogy-content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .analogy-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #f17732, #03c0b4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .analogy-icon i {
            color: white;
            font-size: 2rem;
        }

        .surgery-facts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .fact-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .fact-item:hover {
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
            transform: translateX(5px);
        }

        .fact-item i {
            color: #03c0b4;
            font-size: 1.2rem;
            min-width: 20px;
        }

        .benefits-box {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1), rgba(3, 192, 180, 0.1));
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            border-left: 4px solid #28a745;
        }

        .benefits-box h3 {
            color: #28a745;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .benefits-box ul {
            list-style: none;
            padding-left: 0;
        }

        .benefits-box li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
        }

        .benefits-box li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        .cost-overview {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .cost-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .cost-item:hover {
            background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
            transform: translateY(-3px);
        }

        .cost-item i {
            color: #f17732;
            font-size: 1.3rem;
            min-width: 24px;
        }

        .transparency-box {
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            border: 2px solid #03c0b4;
            text-align: center;
        }

        .transparency-box h3 {
            color: #03c0b4;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .transparency-box a {
            color: #f17732;
            text-decoration: none;
            font-weight: 600;
        }

        .transparency-box a:hover {
            color: #03c0b4;
        }

        .factors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .factor-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 2px solid #f0f0f0;
        }

        .factor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            border-color: #f17732;
        }

        .factor-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #f17732, #03c0b4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .factor-icon i {
            color: white;
            font-size: 1.8rem;
        }

        .factor-card h4 {
            color: #333;
            margin-bottom: 1rem;
        }

        .technique-options,
        .lens-options {
            margin-top: 1rem;
        }

        .technique-item,
        .lens-item {
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 3px solid #03c0b4;
        }

        .lens-type {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .price-tag {
            padding: 0.2rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .price-tag.affordable {
            background: #28a745;
            color: white;
        }

        .price-tag.moderate {
            background: #ffc107;
            color: #333;
        }

        .price-tag.premium {
            background: #f17732;
            color: white;
        }

        .quality-comparison {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .quality-item {
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .quality-item h5 {
            color: #f17732;
            margin-bottom: 0.5rem;
        }

        .quality-item ul {
            list-style: none;
            padding-left: 0;
        }

        .quality-item li {
            padding: 0.2rem 0;
            position: relative;
            padding-left: 1rem;
            font-size: 0.9rem;
        }

        .quality-item li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #03c0b4;
        }

        .infrastructure-features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .feature-badge {
            background: linear-gradient(135deg, #03c0b4, #f17732);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .surgeon-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1rem;
            background: #f8f9fa;
            border-radius: 25px;
            border: 2px solid #03c0b4;
        }

        .highlight-item i {
            color: #f17732;
        }

        .dos-donts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .dos-card,
        .donts-card {
            padding: 2rem;
            border-radius: 15px;
        }

        .dos-card {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.1), rgba(3, 192, 180, 0.1));
            border: 2px solid #28a745;
        }

        .donts-card {
            background: linear-gradient(135deg, rgba(220, 53, 69, 0.1), rgba(255, 193, 7, 0.1));
            border: 2px solid #dc3545;
        }

        .dos-header,
        .donts-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .dos-header i {
            color: #28a745;
            font-size: 2rem;
        }

        .donts-header i {
            color: #dc3545;
            font-size: 2rem;
        }

        .dos-header h3,
        .donts-header h3 {
            margin: 0;
            color: #333;
        }

        .dos-card ul,
        .donts-card ul {
            list-style: none;
            padding-left: 0;
        }

        .dos-card li,
        .donts-card li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
            line-height: 1.5;
        }

        .dos-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }

        .donts-card li::before {
            content: '✗';
            position: absolute;
            left: 0;
            color: #dc3545;
            font-weight: bold;
        }

        .recovery-timeline {
            margin: 2rem 0;
        }

        .timeline-item {
            display: flex;
            align-items: center;
            gap: 2rem;
            padding: 1.5rem;
            margin-bottom: 1rem;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .timeline-item:hover {
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
            transform: translateX(10px);
        }

        .timeline-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #f17732, #03c0b4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .timeline-icon i {
            color: white;
            font-size: 1.5rem;
        }

        .timeline-content h4 {
            color: #f17732;
            margin-bottom: 0.5rem;
        }

        .insurance-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .insurance-card {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .insurance-card:hover {
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(241, 119, 50, 0.1));
            transform: translateY(-5px);
        }

        .insurance-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #03c0b4, #f17732);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .insurance-icon i {
            color: white;
            font-size: 1.8rem;
        }

        .insurance-content h3 {
            color: #03c0b4;
            margin-bottom: 0.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .analogy-content {
                flex-direction: column;
                text-align: center;
            }

            .surgery-facts,
            .cost-overview {
                grid-template-columns: 1fr;
            }

            .factors-grid,
            .dos-donts-grid,
            .insurance-info {
                grid-template-columns: 1fr;
            }

            .quality-comparison {
                grid-template-columns: 1fr;
            }

            .timeline-item {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .lens-type {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }

            .surgeon-highlights {
                justify-content: center;
            }
        }
    </style>
</body>
</html>

<?php include 'footer.php'; ?>