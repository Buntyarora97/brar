
    <?php


    $pageTitle = "Laser eye surgery in Tarn-Taran | Safe & Advanced LASIK, SMILE & Vision Correction Procedures";
    $pageDescription = "Get clear vision with safe and advanced laser eye surgery in Tarn-Taran. Trusted specialists for LASIK and SMILE procedures.";
    $pageKeywords = "laser eye surgery Tarn-Taran, LASIK Tarn-Taran, SMILE surgery Tarn-Taran, advanced laser eye care Tarn-Taran, vision correction Tarn-Taran, bladeless LASIK Tarn-Taran";

    include('header.php');
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
    
        <style>
            /* Custom CSS for Laser Eye Surgery Website */
    :root {
        --primary-color: #f17732;
        --secondary-color: #03c0b4;
        --dark-color: #2c3e50;
        --light-gray: #f8f9fa;
        --medium-gray: #6c757d;
        --border-radius: 1rem;
        --box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        --box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        color: var(--dark-color);
    }

    /* Custom Bootstrap Color Overrides */
    .text-primary {
        color: var(--primary-color) !important;
    }

    .text-secondary {
        color: var(--secondary-color) !important;
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e56a2a;
        border-color: #e56a2a;
        transform: translateY(-2px);
    }

    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-outline-primary:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    /* Navigation */
    .navbar {
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        padding: 1rem 0;
    }

    .navbar-brand {
        font-size: 1.5rem;
        color: var(--dark-color) !important;
    }

    .nav-link {
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: var(--primary-color) !important;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        position: relative;
        overflow: hidden;
        padding-top: 80px;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        right: -50%;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, transparent 0%, rgba(241, 119, 50, 0.05) 50%, transparent 100%);
        transform: rotate(-15deg);
        z-index: 1;
    }

    .hero-section .container {
        position: relative;
        z-index: 2;
    }

    .hero-image img {
        transition: transform 0.3s ease;
    }

    .hero-image:hover img {
        transform: scale(1.05);
    }

    .hero-stats {
        background: rgba(255, 255, 255, 0.8);
        border-radius: var(--border-radius);
        padding: 1rem;
        backdrop-filter: blur(10px);
    }

    .stat-item h3 {
        font-size: 2rem;
        margin-bottom: 0.25rem;
    }

    .hero-decoration {
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 200px;
        height: 200px;
        background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
        border-radius: 50%;
        opacity: 0.1;
        z-index: 1;
    }

    /* Icon Circles */
    .icon-circle {
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .icon-circle i {
        font-size: 2rem;
        color: white;
    }

    /* Service Cards */
    .service-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--box-shadow-lg);
    }

    .service-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .service-icon i {
        font-size: 1.5rem;
        color: white;
    }

    /* Condition Cards */
    .condition-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .condition-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--box-shadow-lg);
    }

    /* Benefits Section */
    .benefit-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .benefit-icon i {
        color: white;
        font-size: 1.25rem;
    }

    /* Procedure Steps */
    .procedure-step {
        position: relative;
    }

    .step-number {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.25rem;
        margin: 0 auto;
    }

    .step-icon {
        width: 60px;
        height: 60px;
        background: rgba(241, 119, 50, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .step-icon i {
        font-size: 1.5rem;
    }

    /* Eligibility Items */
    .eligibility-item {
        transition: transform 0.3s ease;
    }

    .eligibility-item:hover {
        transform: translateX(5px);
    }

    /* Testimonials */
    .testimonial-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--box-shadow-lg);
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--secondary-color);
    }

    .stars i {
        font-size: 1rem;
    }

    /* Recovery Stages */
    .recovery-stage {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .recovery-stage:hover {
        transform: translateY(-5px);
        box-shadow: var(--box-shadow-lg);
    }

    .recovery-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .recovery-icon i {
        font-size: 1.5rem;
        color: white;
    }

    /* Contact Section */
    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .contact-icon i {
        color: white;
        font-size: 1.25rem;
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Section Spacing */
    section {
        scroll-margin-top: 80px;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-on-scroll {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-section {
            text-align: center;
        }
        
        .display-4 {
            font-size: 2rem;
        }
        
        .display-5 {
            font-size: 1.75rem;
        }
        
        .hero-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .hero-buttons .btn {
            width: 100%;
        }
        
        .contact-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .contact-buttons .btn {
            width: 100%;
        }
    }

    /* Loading Animation */
    .loading {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease;
    }

    .loading.loaded {
        opacity: 1;
        transform: translateY(0);
    }

    /* Custom Utilities */
    .rounded-4 {
        border-radius: var(--border-radius) !important;
    }

    .shadow-soft {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05) !important;
    }

    /* Background Gradients */
    .bg-gradient-primary {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
    }

    .bg-gradient-light {
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
    }

    /* Button Enhancements */
    .btn {
        border-radius: 50px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-lg {
        padding: 1rem 2.5rem;
        font-size: 1.125rem;
    }

    /* Footer */
    footer {
        background: linear-gradient(135deg, var(--dark-color) 0%, #1a252f 100%);
    }

    footer .social-links a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        transition: all 0.3s ease;
    }

    footer .social-links a:hover {
        background: var(--primary-color);
        transform: translateY(-2px);
    }

    /* Print Styles */
    @media print {
        .navbar,
        .hero-buttons,
        .contact-buttons,
        footer {
            display: none !important;
        }
        
        body {
            font-size: 12pt;
            line-height: 1.4;
        }
        
        h1, h2, h3, h4, h5, h6 {
            color: black !important;
        }
    }

        </style>
    </head>
    <body>
    

        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">
                            Freedom from Glasses with 
                            <span class="text-primary">Laser Eye Surgery</span> 
                            in tarn-taran
                        </h1>
                        <p class="lead mb-4 text-muted">
                            Experience life-changing vision correction at Brar Eye Hospital. With 21+ years of excellence and 1.3 lakh+ successful treatments, we offer state-of-the-art laser vision correction solutions.
                        </p>
                        <div class="hero-stats mb-4">
                            <div class="row g-3">
                                <div class="col-4">
                                    <div class="stat-item text-center">
                                        <h3 class="text-primary fw-bold">21+</h3>
                                        <small class="text-muted">Years Experience</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item text-center">
                                        <h3 class="text-primary fw-bold">1.3L+</h3>
                                        <small class="text-muted">Happy Patients</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item text-center">
                                        <h3 class="text-primary fw-bold">100%</h3>
                                        <small class="text-muted">Success Rate</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-calendar-check me-2"></i>
                                Book Free Consultation
                            </a>
                            <a href="tel:72182-72182" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-phone me-2"></i>
                                Call Now
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="hero-image">
        <img src="images/2.webp" style="width: 100%; height: auto;">
    </div>

                    </div>
                </div>
            </div>
            <div class="hero-decoration"></div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">What is Laser Eye Surgery?</h2>
                        <p class="lead text-muted mb-5">
                            Laser eye surgery, also known as refractive surgery, is a medical procedure that corrects common vision problems such as nearsightedness (myopia), farsightedness (hyperopia), and astigmatism. This surgery reshapes the cornea so that light entering the eye focuses properly on the retina, resulting in sharper, clearer vision without needing glasses or contact lenses.
                        </p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="condition-card text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="icon-circle mb-3">
                                <i class="fas fa-eye text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Nearsightedness</h5>
                            <p class="text-muted">Corrects difficulty seeing distant objects clearly</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="condition-card text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="icon-circle mb-3">
                                <i class="fas fa-low-vision text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Farsightedness</h5>
                            <p class="text-muted">Fixes problems with seeing close objects clearly</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="condition-card text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="icon-circle mb-3">
                                <i class="fas fa-glasses text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Astigmatism</h5>
                            <p class="text-muted">Corrects irregular corneal shape causing blurred vision</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">Advanced Laser Eye Surgery Procedures</h2>
                        <p class="lead text-muted">
                            At Brar Eye Hospital, we provide a range of advanced refractive procedures tailored to individual needs using the latest German technology.
                        </p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                            <div class="service-icon mb-3">
                                <i class="fas fa-laser-pointer text-primary"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Contoura Vision LASIK</h4>
                            <p class="text-muted mb-3">
                                A topography-guided LASIK procedure that offers personalized vision correction. It treats corneal irregularities and improves overall visual quality.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i>Personalized treatment</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>Superior visual quality</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>Treats irregularities</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                            <div class="service-icon mb-3">
                                <i class="fas fa-cut text-primary"></i>
                            </div>
                            <h4 class="fw-bold mb-3">SMILE Pro</h4>
                            <p class="text-muted mb-3">
                                A flapless, minimally invasive procedure that is gentle on the eyes and offers a faster recovery. Especially effective for treating myopia and astigmatism.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i>Flapless procedure</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>Faster recovery</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>Minimal invasive</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                            <div class="service-icon mb-3">
                                <i class="fas fa-eye-dropper text-primary"></i>
                            </div>
                            <h4 class="fw-bold mb-3">PRK (Photorefractive Keratectomy)</h4>
                            <p class="text-muted mb-3">
                                Ideal for patients with thinner corneas. This surface procedure does not require a flap and offers excellent visual outcomes.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i>For thin corneas</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>No flap required</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>Excellent outcomes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                            <div class="service-icon mb-3">
                                <i class="fas fa-exchange-alt text-primary"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Refractive Lens Exchange (RLE)</h4>
                            <p class="text-muted mb-3">
                                For patients above 40 years or those with high refractive errors, we offer lens replacement surgery with artificial intraocular lens.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i>For 40+ patients</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>High refractive errors</li>
                                <li><i class="fas fa-check text-secondary me-2"></i>Lens replacement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section id="benefits" class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold mb-4">Benefits of Laser Eye Surgery</h2>
                        <div class="benefits-list">
                            <div class="benefit-item d-flex align-items-start mb-4">
                                <div class="benefit-icon me-3">
                                    <i class="fas fa-glasses text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Freedom from Glasses</h5>
                                    <p class="text-muted mb-0">Say goodbye to glasses and contact lenses forever</p>
                                </div>
                            </div>
                            <div class="benefit-item d-flex align-items-start mb-4">
                                <div class="benefit-icon me-3">
                                    <i class="fas fa-heart text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Improved Quality of Life</h5>
                                    <p class="text-muted mb-0">Enhanced confidence and lifestyle freedom</p>
                                </div>
                            </div>
                            <div class="benefit-item d-flex align-items-start mb-4">
                                <div class="benefit-icon me-3">
                                    <i class="fas fa-clock text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Quick Recovery</h5>
                                    <p class="text-muted mb-0">Return to routine within 24-48 hours</p>
                                </div>
                            </div>
                            <div class="benefit-item d-flex align-items-start mb-4">
                                <div class="benefit-icon me-3">
                                    <i class="fas fa-dollar-sign text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Cost-Effective</h5>
                                    <p class="text-muted mb-0">Long-term savings compared to glasses and contacts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="benefits-image">
        <img 
            src="images/5.webp" 
            alt="Happy Patient Without Glasses" 
            style="width: 100%; height: auto; border-radius: 1rem; box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);"
        >
    </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Procedure Section -->
        <section id="procedure" class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">The Laser Eye Surgery Procedure</h2>
                        <p class="lead text-muted">A simple, quick, and painless procedure that takes just a few minutes</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="procedure-step text-center">
                            <div class="step-number mb-3">1</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-search text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Pre-surgery Examination</h5>
                            <p class="text-muted small">Comprehensive checkup including corneal mapping and retinal evaluation</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="procedure-step text-center">
                            <div class="step-number mb-3">2</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-eye-dropper text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Anaesthetic Drops</h5>
                            <p class="text-muted small">No injections needed, just comfortable eye drops</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="procedure-step text-center">
                            <div class="step-number mb-3">3</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-laser-pointer text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Corneal Reshaping</h5>
                            <p class="text-muted small">Using advanced femtosecond or excimer lasers</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="procedure-step text-center">
                            <div class="step-number mb-3">4</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-check-circle text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Immediate Results</h5>
                            <p class="text-muted small">Most patients notice better vision within a few hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Eligibility Section -->
        <section id="eligibility" class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="text-center mb-5">
                            <h2 class="display-5 fw-bold mb-4">Are You Eligible for Laser Eye Surgery?</h2>
                            <p class="lead text-muted">Check if you meet the criteria for life-changing vision correction</p>
                        </div>
                        <div class="eligibility-checklist">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="eligibility-item d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                                        <i class="fas fa-check-circle text-secondary me-3"></i>
                                        <span>Be 18 years or older</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="eligibility-item d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                                        <i class="fas fa-check-circle text-secondary me-3"></i>
                                        <span>Stable eye prescription for 1+ year</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="eligibility-item d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                                        <i class="fas fa-check-circle text-secondary me-3"></i>
                                        <span>Not pregnant or breastfeeding</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="eligibility-item d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                                        <i class="fas fa-check-circle text-secondary me-3"></i>
                                        <span>No active eye infections</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="eligibility-item d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                                        <i class="fas fa-check-circle text-secondary me-3"></i>
                                        <span>Suitable corneal thickness</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="eligibility-item d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                                        <i class="fas fa-check-circle text-secondary me-3"></i>
                                        <span>No severe dry eyes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <p class="text-muted mb-4">Our expert team will conduct a thorough eye evaluation to determine your eligibility.</p>
                            <a href="#contact" class="btn btn-primary btn-lg">Get Free Evaluation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">What Our Patients Say</h2>
                        <p class="lead text-muted">Thousands of patients have chosen Brar Eye Hospital for clear vision</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="testimonial-card bg-white p-4 rounded-4 shadow-sm h-100">
                            <div class="testimonial-content mb-4">
                                <div class="stars mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="text-muted">
                                    "I was dependent on glasses for 15 years. After SMILE Pro at Brar Eye Hospital, I can now see clearly without specs. It's like a dream come true!"
                                </p>
                            </div>
                            <div class="testimonial-author d-flex align-items-center">
                                <img src="images\8.webp" alt="Gurpreet" class="testimonial-avatar me-3">
                                <div>
                                    <h6 class="fw-bold mb-0">Gurpreet</h6>
                                    <small class="text-muted">tarn-taran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-card bg-white p-4 rounded-4 shadow-sm h-100">
                            <div class="testimonial-content mb-4">
                                <div class="stars mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="text-muted">
                                    "Highly skilled doctors, world-class facilities, and personalized care. I am so happy I chose Brar Eye Hospital for my LASIK surgery."
                                </p>
                            </div>
                            <div class="testimonial-author d-flex align-items-center">
                                <img src="images\6.webp" alt="Ravinder" class="testimonial-avatar me-3">
                                <div>
                                    <h6 class="fw-bold mb-0">Ravinder</h6>
                                    <small class="text-muted">Faridkot</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recovery Timeline Section -->
        <section id="recovery" class="py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">Recovery Timeline</h2>
                        <p class="lead text-muted">What to expect during your healing journey</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="recovery-stage text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="recovery-icon mb-3">
                                <i class="fas fa-clock text-primary"></i>
                            </div>
                            <h5 class="fw-bold">First 24 Hours</h5>
                            <p class="text-muted small">Rest your eyes, use prescribed drops, avoid screens</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="recovery-stage text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="recovery-icon mb-3">
                                <i class="fas fa-calendar-week text-primary"></i>
                            </div>
                            <h5 class="fw-bold">1 Week</h5>
                            <p class="text-muted small">Avoid swimming, dust exposure, and eye rubbing</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="recovery-stage text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="recovery-icon mb-3">
                                <i class="fas fa-calendar-alt text-primary"></i>
                            </div>
                            <h5 class="fw-bold">1 Month</h5>
                            <p class="text-muted small">Resume full activities including workouts and travel</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="recovery-stage text-center p-4 bg-white rounded-4 shadow-sm h-100">
                            <div class="recovery-icon mb-3">
                                <i class="fas fa-check-circle text-primary"></i>
                            </div>
                            <h5 class="fw-bold">3-6 Months</h5>
                            <p class="text-muted small">Complete healing and stabilization</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <h2 class="display-5 fw-bold mb-4">Book Your Free Eye Evaluation Today</h2>
                        <p class="lead text-muted">Ready to experience freedom from glasses? Take the first step towards clear, confident vision.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <h4 class="fw-bold mb-4">Get in Touch</h4>
                            <div class="contact-item d-flex align-items-center mb-4">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">Address</h6>
                                    <p class="text-muted mb-0">Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</p>
                                </div>
                            </div>
                            <div class="contact-item d-flex align-items-center mb-4">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">Phone</h6>
                                    <p class="text-muted mb-0">
                                        <a href="tel:72182-72182" class="text-decoration-none">72182-72182</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item d-flex align-items-center mb-4">
                                <div class="contact-icon me-3">
                                    <i class="fas fa-clock text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">Hours</h6>
                                    <p class="text-muted mb-0">Mon-Sat: 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                            <div class="contact-buttons mt-4">
                                <a href="tel:72182-72182" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-phone me-2"></i>
                                    Call Now
                                </a>
                                <a href="https://wa.me/917218272182" class="btn btn-outline-primary btn-lg">
        <i class="fas fa-whatsapp me-2"></i>
        WhatsApp
    </a>

                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>

        

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS -->
        <script src="script.js"></script>
        <script>
            // Custom JavaScript for Laser Eye Surgery Website

    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all components
        initSmoothScrolling();
        initNavbarEffects();
        initAnimations();
        initLoadingAnimations();
        initContactForm();
        
        console.log('Laser Eye Surgery Website Initialized');
    });

    // Smooth scrolling for navigation links
    function initSmoothScrolling() {
        const navLinks = document.querySelectorAll('a[href^="#"]');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 80; // Account for fixed navbar
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                }
            });
        });
    }

    // Navbar scroll effects
    function initNavbarEffects() {
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.style.backgroundColor = '';
                navbar.style.backdropFilter = '';
            }
        });
        
        // Active navigation highlighting
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
        
        window.addEventListener('scroll', function() {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.scrollY >= sectionTop) {
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
    }

    // Scroll animations
    function initAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-on-scroll');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        const animateElements = document.querySelectorAll(
            '.service-card, .condition-card, .benefit-item, .procedure-step, .testimonial-card, .recovery-stage'
        );
        
        animateElements.forEach(el => {
            observer.observe(el);
        });
    }

    // Loading animations
    function initLoadingAnimations() {
        const loadingElements = document.querySelectorAll('.loading');
        
        setTimeout(() => {
            loadingElements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('loaded');
                }, index * 100);
            });
        }, 500);
    }

    // Contact form handling
    function initContactForm() {
        // Phone number formatting
        const phoneLinks = document.querySelectorAll('a[href^="tel:"]');
        phoneLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Track phone call clicks
                console.log('Phone call initiated:', this.href);
                
                // Optional: Add analytics tracking here
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'phone_call', {
                        'event_category': 'Contact',
                        'event_label': 'Header Phone'
                    });
                }
            });
        });
        
        // WhatsApp integration
        const whatsappLinks = document.querySelectorAll('a[href*="whatsapp"]');
        whatsappLinks.forEach(link => {
            if (!link.href.includes('wa.me')) {
                // Generate WhatsApp link with predefined message
                const phoneNumber = '917218272182'; // Remove dashes and add country code
                const message = encodeURIComponent('Hi, I would like to book a free eye evaluation for laser surgery at Brar Eye Hospital.');
                link.href = `https://wa.me/${phoneNumber}?text=${message}`;
                link.target = '_blank';
            }
        });
    }

    // Utility functions
    function scrollToSection(sectionId) {
        const section = document.querySelector(sectionId);
        if (section) {
            const offsetTop = section.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    }

    // Service card interactions
    document.addEventListener('DOMContentLoaded', function() {
        const serviceCards = document.querySelectorAll('.service-card');
        
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });

    // Testimonial interactions
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        
        testimonialCards.forEach((card, index) => {
            // Add stagger animation delay
            card.style.animationDelay = `${index * 0.2}s`;
            
            // Add hover effects
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
                this.style.boxShadow = '0 1rem 3rem rgba(0, 0, 0, 0.175)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '';
            });
        });
    });

    // Button click effects
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.btn');
        
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.5);
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    });

    // Add ripple animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .btn {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);

    // Lazy loading for images
    document.addEventListener('DOMContentLoaded', function() {
        const images = document.querySelectorAll('img[src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => {
            img.classList.add('loading');
            imageObserver.observe(img);
        });
    });

    // Performance optimization
    window.addEventListener('load', function() {
        // Remove loading states
        document.body.classList.add('loaded');
        
        // Preload critical images
        const criticalImages = [
            'https://pixabay.com/get/g31d85f9af8419d9c2a8bbd3c76983ded5dcff964ccb9aaf1cd8007394199418668e86f4aa2bb18966edfa37704474d443c2cacf8a7707d614c88ffcc76eb80b6_1280.webp',
            'https://pixabay.com/get/gcd25310cb45acf225b801769923a6af40fb12fe37d1859df71c54e10028b951a69bd5135d5543b834a27522a81a82fb53ee88b88cc46376480e840f520720547_1280.webp'
        ];
        
        criticalImages.forEach(src => {
            const img = new Image();
            img.src = src;
        });
    });

    // Error handling
    window.addEventListener('error', function(e) {
        console.error('Website error:', e.error);
    });

    // Accessibility improvements
    document.addEventListener('DOMContentLoaded', function() {
        // Add keyboard navigation support
        const focusableElements = document.querySelectorAll(
            'a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])'
        );
        
        focusableElements.forEach(element => {
            element.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    if (this.tagName === 'A' || this.tagName === 'BUTTON') {
                        this.click();
                    }
                }
            });
        });
        
        // Add focus indicators
        focusableElements.forEach(element => {
            element.addEventListener('focus', function() {
                this.style.outline = '2px solid #f17732';
                this.style.outlineOffset = '2px';
            });
            
            element.addEventListener('blur', function() {
                this.style.outline = '';
                this.style.outlineOffset = '';
            });
        });
    });

    // Mobile optimization
    if (window.matchMedia('(max-width: 768px)').matches) {
        // Optimize for mobile devices
        document.addEventListener('touchstart', function() {}, true);
        
        // Reduce animation complexity on mobile
        const style = document.createElement('style');
        style.textContent = `
            @media (max-width: 768px) {
                * {
                    animation-duration: 0.3s !important;
                    transition-duration: 0.3s !important;
                }
            }
        `;
        document.head.appendChild(style);
    }

        </script>
    </body>
    </html>

    <?php include 'footer.php'; ?>
