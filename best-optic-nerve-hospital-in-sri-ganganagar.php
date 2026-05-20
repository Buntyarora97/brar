
<?php
$pageTitle = "Best optic nerve hospital in Sri Ganganagar – Brar Eye Hospital’s Expertise";
$pageDescription = "Best optic nerve hospital in Sri Ganganagar now made accessible with Brar Eye Hospital's 21+ years of experience, trusted by 1.3L+ patients and backed by cutting-edge laser & diagnostic technology.";
$pageKeywords = "neuro-ophthalmologist in sri ganganagar, optic neuritis treatment in sri ganganagar, eye nerve specialist in sri ganganagar, optic nerve treatment in sri ganganagar";

include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #ff8a50;
            --accent-color: #03c0b4;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --gradient: linear-gradient(135deg, var(--accent-color), var(--secondary-color));
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--white);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.3;
        }

        .text-accent {
            color: var(--accent-color) !important;
        }

        .text-secondary {
            color: var(--secondary-color) !important;
        }

        .btn-primary {
            background: var(--gradient);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            transform: translateY(0);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
        }

        .btn-outline-primary {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Navigation */
        .custom-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--text-dark) !important;
        }

        .brand-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            margin: 0 10px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--accent-color) !important;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.05), rgba(255, 138, 80, 0.05));
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        .stat-box {
            text-align: center;
            padding: 20px;
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            transform: translateY(0);
        }

        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .stat-box h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        /* Floating Cards */
        .hero-image {
            position: relative;
            height: 500px;
        }

        .floating-card {
            position: absolute;
            background: var(--white);
            padding: 20px 25px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 15px;
            animation: float 6s ease-in-out infinite;
            transition: all 0.3s ease;
        }

        .floating-card:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-hover);
        }

        .floating-card i {
            font-size: 1.5rem;
        }

        .card-1 {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .card-2 {
            top: 50%;
            right: 10%;
            animation-delay: 2s;
        }

        .card-3 {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* 3D Service Boxes */
        .service-box-3d {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.4s ease;
            transform: translateZ(0);
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .service-box-3d::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            opacity: 0.05;
            transition: all 0.4s ease;
        }

        .service-box-3d:hover::before {
            left: 0;
        }

        .service-box-3d:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: all 0.3s ease;
        }

        .service-icon i {
            font-size: 2rem;
            color: var(--white);
        }

        .service-box-3d:hover .service-icon {
            transform: scale(1.1) rotateY(360deg);
        }

        .service-box-3d h4 {
            font-size: 1.25rem;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .service-box-3d p {
            color: var(--text-light);
            margin-bottom: 20px;
        }

        /* Section Titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 3rem;
        }

        /* Tech Cards */
        .tech-card {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .tech-card .tech-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(255, 138, 80, 0.1));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .tech-card .tech-icon i {
            font-size: 2rem;
        }

        .tech-card h4 {
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        /* Story Cards */
        .story-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .story-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .story-icon {
            margin-bottom: 20px;
        }

        .story-icon i {
            font-size: 2rem;
            opacity: 0.3;
        }

        .story-card p {
            font-style: italic;
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .story-author {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        /* Condition Boxes */
        .condition-box {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            transform: translateY(0);
            height: 100%;
        }

        .condition-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .condition-box h4 {
            color: var(--accent-color);
            margin-bottom: 15px;
        }

        /* Contact Form */
        .contact-form-wrapper {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .contact-form .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .contact-form .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(3, 192, 180, 0.25);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 20px;
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(255, 138, 80, 0.1));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .contact-icon i {
            font-size: 1.2rem;
        }

        .contact-details h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient);
            color: var(--white);
            padding: 80px 0;
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: var(--white);
            padding: 50px 0 30px;
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        /* Optic Nerve Visual Diagram */
        .nerve-diagram {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            position: relative;
        }

        .nerve-path {
            flex-grow: 1;
            height: 4px;
            background: var(--gradient);
            margin: 0 20px;
            border-radius: 2px;
            position: relative;
        }

        .nerve-path::after {
            content: '→';
            position: absolute;
            right: -10px;
            top: -15px;
            font-size: 1.5rem;
            color: var(--accent-color);
        }

        .eye-icon, .brain-icon {
            text-align: center;
            padding: 20px;
            background: linear-gradient(135deg, rgba(3, 192, 180, 0.1), rgba(255, 138, 80, 0.1));
            border-radius: 15px;
        }

        .eye-icon i, .brain-icon i {
            font-size: 3rem;
            display: block;
            margin-bottom: 10px;
        }

        .eye-icon span, .brain-icon span {
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .nerve-diagram {
                flex-direction: column;
                text-align: center;
            }
            
            .nerve-path {
                width: 4px;
                height: 40px;
                margin: 20px 0;
            }
            
            .nerve-path::after {
                content: '↓';
                right: -15px;
                top: auto;
                bottom: -10px;
            }
            
            .hero-image {
                height: 300px;
                margin-top: 30px;
            }
            
            .floating-card {
                position: relative;
                margin-bottom: 20px;
            }
            
            .card-1, .card-2, .card-3 {
                position: relative;
                top: auto;
                left: auto;
                right: auto;
                bottom: auto;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--gradient);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-3px);
            color: white;
        }
    </style>
</head>
<body>
    

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Best <span class="text-accent">Optic Nerve</span> Hospital in <span class="text-secondary">Sri Ganganagar</span>
                        </h1>
                        <p class="hero-subtitle">Over 21+ years of trusted eye care with 1.3+ lakh successful treatments. We are the beacon of hope for patients suffering from various eye problems, including complex optic nerve issues.</p>
                        
                        <div class="hero-stats row mt-4">
                            <div class="col-sm-4 mb-3">
                                <div class="stat-box">
                                    <h3 class="text-accent">21+</h3>
                                    <p class="mb-0">Years Experience</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="stat-box">
                                    <h3 class="text-secondary">1.3 Lakh+</h3>
                                    <p class="mb-0">Patients Treated</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="stat-box">
                                    <h3 class="text-accent">100%</h3>
                                    <p class="mb-0">Success Rate</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="hero-buttons mt-4">
                            <a href="tel:72182-72182" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-phone me-2"></i>
                                Book Appointment
                            </a>
                            <a href="#services" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-eye me-2"></i>
                                Our Services
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="floating-card card-1">
                            <i class="fas fa-eye text-accent"></i>
                            <span>Advanced Diagnostics</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="fas fa-user-md text-secondary"></i>
                            <span>Expert Doctors</span>
                        </div>
                        <div class="floating-card card-3">
                            <i class="fas fa-award text-accent"></i>
                            <span>Best Treatment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">About <span class="text-accent">BRAR EYE Hospital</span></h2>
                <p class="section-subtitle">Trusted eye care for over 21+ years with a legacy of excellence and innovation</p>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4">
                    <div class="optic-nerve-content">
                        <h3 class="text-secondary mb-4">What Is The Optic Nerve?</h3>
                        <p class="lead">The optic nerve plays a crucial role in vision. It is responsible for carrying signals from the eye to the brain.</p>
                        <p>Damage to the optic nerve can lead to partial or total vision loss, which is often irreversible. Conditions like glaucoma, optic neuritis, ischemic optic neuropathy, and trauma can severely affect the optic nerve.</p>
                        <p>Because optic nerve damage can often go unnoticed in the early stages, routine eye checkups are vital. Early diagnosis and prompt treatment are key to managing these problems effectively.</p>
                        <div class="highlight-box mt-4 p-4 bg-light rounded">
                            <h4 class="text-accent mb-3">Why Choose Us for Optic Nerve Care?</h4>
                            <p class="mb-0">At BRAR EYE Hospital, we specialize in the diagnosis and treatment of optic nerve disorders, making us the best optic nerve hospital in Sri Ganganagar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="optic-nerve-visual">
                        <div class="nerve-diagram">
                            <div class="eye-icon">
                                <i class="fas fa-eye text-accent"></i>
                                <span>Eye</span>
                            </div>
                            <div class="nerve-path"></div>
                            <div class="brain-icon">
                                <i class="fas fa-brain text-secondary"></i>
                                <span>Brain</span>
                            </div>
                        </div>
                        <p class="text-center mt-3 text-muted">Optic nerve carries visual signals from eye to brain</p>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="lead">BRAR EYE Hospital has been at the forefront of eye care in Sri Ganganagar and nearby regions for more than 21+ years. Our long-standing commitment to delivering high-quality treatments has earned us the trust of lakhs of patients.</p>
                    <p>With over 1.3+ lakh successful patient treatments, BRAR EYE Hospital has established itself as the best optic nerve hospital in Sri Ganganagar. We focus not just on treating eye diseases but also on improving the overall vision and quality of life for our patients.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Experienced Eye Specialists</h4>
                        <p>Our doctors have vast experience in treating optic nerve diseases. Their knowledge and dedication ensure accurate diagnosis and the best possible care with passion for innovation, precision, and compassion.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h4>Advanced Technology</h4>
                        <p>We are equipped with the latest and most advanced technologies for eye diagnostics and surgery. This allows us to detect even the slightest changes in the optic nerve and offer precise treatments.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Comprehensive Care</h4>
                        <p>From early diagnosis to complete post-operative support, we provide a full spectrum of care for all types of optic nerve conditions. Our services support long-term visual health.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our <span class="text-accent">Services</span></h2>
                <p class="section-subtitle">Comprehensive eye care with advanced technology and expert specialists</p>
            </div>
            
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4>Optic Nerve Treatment</h4>
                        <p>Specialized treatment for optic nerve disorders including glaucoma, optic neuritis, and ischemic optic neuropathy.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-search-plus"></i>
                        </div>
                        <h4>Glaucoma Treatment</h4>
                        <p>Comprehensive glaucoma care with medical, laser, and surgical treatments for all stages.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-eye-dropper"></i>
                        </div>
                        <h4>Cataract Surgery</h4>
                        <p>Advanced cataract surgery with latest technology and premium intraocular lenses.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-glasses"></i>
                        </div>
                        <h4>LASIK & SMILE Pro</h4>
                        <p>Freedom from specs with advanced refractive surgery procedures and cutting-edge refractive surgery suite.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-circle-dot"></i>
                        </div>
                        <h4>Retina Treatment</h4>
                        <p>Complete retina and vitreous treatment for diabetic retinopathy and other conditions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <h4>Pediatric Eye Care</h4>
                        <p>Specialized eye care for children including amblyopia and squint treatment.</p>
                    </div>
                </div>
            </div>

            <!-- Conditions Treated -->
            <div class="text-center mb-5">
                <h2 class="section-title">Common <span class="text-accent">Conditions</span> We Treat</h2>
                <p class="section-subtitle">Specialized treatment for various optic nerve and eye disorders</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="condition-box">
                        <h4>Glaucoma</h4>
                        <p>A group of eye conditions that damage the optic nerve, often due to high eye pressure. We offer medical, laser, and surgical treatments for all stages of glaucoma.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="condition-box">
                        <h4>Optic Neuritis</h4>
                        <p>Inflammation of the optic nerve that can cause sudden vision loss. Often associated with autoimmune conditions, it requires prompt diagnosis.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="condition-box">
                        <h4>Ischemic Optic Neuropathy</h4>
                        <p>Occurs when blood flow to the optic nerve is blocked. This condition often affects older adults and may be associated with vascular diseases.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="condition-box">
                        <h4>Optic Nerve Compression</h4>
                        <p>Caused by tumors or swelling that press on the nerve. We coordinate with neuro-ophthalmology specialists for such complex cases.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="condition-box">
                        <h4>Traumatic Optic Neuropathy</h4>
                        <p>Resulting from injury to the eye or head. Rapid treatment can help preserve remaining vision.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="condition-box">
                        <h4>Diabetic Retinopathy</h4>
                        <p>Diabetes-related eye complications affecting the retina. Early detection and treatment are crucial.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Advanced <span class="text-secondary">Diagnostic Technology</span></h2>
                <p class="section-subtitle">Our team conducts detailed investigations using state-of-the-art equipment</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-eye text-accent"></i>
                        </div>
                        <h4>OCT Scan</h4>
                        <p>High-resolution cross-sectional images of the retina and optic nerve for precise diagnosis.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-camera text-secondary"></i>
                        </div>
                        <h4>Fundus Camera</h4>
                        <p>Advanced imaging of the interior surface of the eye for detailed examination.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-chart-line text-accent"></i>
                        </div>
                        <h4>Visual Field Analyzer</h4>
                        <p>Detect blind spots and vision field loss with precision testing equipment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-tachometer-alt text-secondary"></i>
                        </div>
                        <h4>Non-contact Tonometer</h4>
                        <p>Painless eye pressure measurement for glaucoma screening and monitoring.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-microscope text-accent"></i>
                        </div>
                        <h4>Operating Microscopes</h4>
                        <p>High-resolution microscopes to assist during delicate surgical procedures.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-heartbeat text-secondary"></i>
                        </div>
                        <h4>Complete Eye Care</h4>
                        <p>These technologies allow us to visualize the optic nerve and detect changes at the earliest stage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Stories -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Real Stories, <span class="text-accent">Real Results</span></h2>
                <p class="section-subtitle">Thousands of patients have regained their vision and confidence</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="story-card">
                        <div class="story-icon">
                            <i class="fas fa-quote-left text-accent"></i>
                        </div>
                        <p>"Timely diagnosis and proper treatment at BRAR EYE Hospital saved my sight. The doctors' expertise in optic nerve disorders is exceptional."</p>
                        <div class="story-author">
                            <strong>- Patient with Glaucoma</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="story-card">
                        <div class="story-icon">
                            <i class="fas fa-quote-left text-secondary"></i>
                        </div>
                        <p>"Whether it's a child with sudden vision loss or an elderly patient, they treat each case with the same level of care and commitment."</p>
                        <div class="story-author">
                            <strong>- Family Member</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="story-card">
                        <div class="story-icon">
                            <i class="fas fa-quote-left text-accent"></i>
                        </div>
                        <p>"We feel honored to be part of their journey toward better vision. The hospital truly cares about complete visual health."</p>
                        <div class="story-author">
                            <strong>- Satisfied Patient</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our <span class="text-accent">Expert Doctors</span></h2>
                <p class="section-subtitle">Meet our team of qualified ophthalmologists who specialize in different branches of eye care</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Dr. Brar</h4>
                        <p class="text-accent">Optic Nerve Specialist</p>
                        <p class="text-secondary">20+ Years Experience</p>
                        <p>Leading expert in optic nerve disorders and glaucoma treatment. MS Ophthalmology, Fellowship in Glaucoma.</p>
                        <small class="text-muted">Specialized in handling complex cases with confidence and continuous education in latest advancements.</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Dr. Singh</h4>
                        <p class="text-accent">Retina Specialist</p>
                        <p class="text-secondary">15+ Years Experience</p>
                        <p>Specialist in retinal diseases and vitreoretinal surgery. MS Ophthalmology, Fellowship in Vitreoretinal Surgery.</p>
                        <small class="text-muted">Specialized in handling complex cases with confidence and continuous education in latest advancements.</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box-3d">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Dr. Kaur</h4>
                        <p class="text-accent">Pediatric Ophthalmologist</p>
                        <p class="text-secondary">12+ Years Experience</p>
                        <p>Expert in children's eye care and squint surgery. MS Ophthalmology, Fellowship in Pediatric Ophthalmology.</p>
                        <small class="text-muted">Specialized in handling complex cases with confidence and continuous education in latest advancements.</small>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="lead">Our doctors regularly attend national and international eye conferences to stay updated with the latest advancements in eye care. Continuous education and clinical excellence are key priorities at our hospital.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    
   <!-- contact-style-two -->
    <section class="contact-style-two p_relative">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-55.webp);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-56.webp);"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 big-column offset-lg-2">
                    <div class="form-inner">
                        <h2>Book an Appointment</h2>
                        
                        <?php if(isset($_GET['success']) && $_GET['success'] == '1'): ?>
                        <div class="alert alert-success" style="background-color: #dff0d8; color: #3c763d; padding: 15px; margin-bottom: 20px; border: 1px solid #d6e9c6; border-radius: 4px;">
                            Your message has been sent successfully. We will contact you shortly.
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($_GET['error']) && $_GET['error'] == '1'): ?>
                        <div class="alert alert-danger" style="background-color: #f2dede; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid #ebccd1; border-radius: 4px;">
                            There was an error sending your message. Please try again later.
                        </div>
                        <?php endif; ?>
                        
                        <form method="post" action="final-contact-form-solution.php" id="contact-form"> 
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 centred">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->  

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-3">Ready to Experience the Best Eye Care?</h2>
                    <p class="text-white mb-0">Book your appointment today and take the first step towards better vision. At BRAR EYE Hospital, the patient always comes first. Our goal is not just to treat your eyes but to take care of your complete visual health.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:72182-72182" class="btn btn-light btn-lg">
                        <i class="fas fa-phone me-2"></i>
                        Call 72182-72182
                    </a>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Back to Top Button -->
    <a href="#home" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Main JavaScript for the website
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all functions
            initNavbar();
            initScrollAnimations();
            initSmoothScrolling();
            initContactForm();
            initHoverEffects();
            initCounterAnimation();
            initBackToTop();
        });

        // Navbar functionality
        function initNavbar() {
            const navbar = document.querySelector('.custom-navbar');
            const navLinks = document.querySelectorAll('.nav-link');
            
            // Change navbar background on scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                } else {
                    navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                }
            });
            
            // Active nav link highlighting
            window.addEventListener('scroll', function() {
                let current = '';
                const sections = document.querySelectorAll('section[id]');
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= sectionTop - 200) {
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
        }

        // Scroll animations
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe elements for animation
            const animatedElements = document.querySelectorAll(
                '.service-box-3d, .tech-card, .condition-box, .story-card, .contact-info-item'
            );
            
            animatedElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = `all 0.6s ease ${index * 0.1}s`;
                observer.observe(el);
            });
        }

        // Smooth scrolling for anchor links
        function initSmoothScrolling() {
            const links = document.querySelectorAll('a[href^="#"]');
            
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        const headerOffset = 80;
                        const elementPosition = targetElement.offsetTop;
                        const offsetPosition = elementPosition - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Contact form functionality
        function initContactForm() {
            const contactForm = document.querySelector('.contact-form');
            
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form data
                    const formData = new FormData(this);
                    const name = formData.get('name');
                    const phone = formData.get('phone');
                    
                    if (name && phone) {
                        // Show success message
                        alert('Thank you for your inquiry! We will contact you soon at ' + phone);
                        this.reset();
                    } else {
                        alert('Please fill in all required fields.');
                    }
                });
                
                // Phone number formatting
                const phoneInput = document.getElementById('phone');
                if (phoneInput) {
                    phoneInput.addEventListener('input', function() {
                        let value = this.value.replace(/\D/g, '');
                        if (value.length >= 10) {
                            value = value.substring(0, 10);
                            value = value.replace(/(\d{5})(\d{5})/, '$1-$2');
                        }
                        this.value = value;
                    });
                }
            }
        }

        // Enhanced hover effects
        function initHoverEffects() {
            // 3D hover effects for service boxes
            const serviceBoxes = document.querySelectorAll('.service-box-3d');
            
            serviceBoxes.forEach(box => {
                box.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) rotateX(5deg) rotateY(5deg)';
                });
                
                box.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
                });
                
                // Add mouse move effect for more dynamic 3D
                box.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;
                    
                    this.style.transform = `translateY(-10px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });
            });
        }

        // Counter animation for statistics
        function initCounterAnimation() {
            const counters = document.querySelectorAll('.stat-box h3');
            
            const animateCounter = (counter) => {
                const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                const increment = target / 100;
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        const originalText = counter.textContent;
                        const suffix = originalText.replace(/[\d,]+/, '');
                        counter.textContent = target.toLocaleString() + suffix;
                        clearInterval(timer);
                    } else {
                        const originalText = counter.textContent;
                        const suffix = originalText.replace(/[\d,]+/, '');
                        counter.textContent = Math.floor(current).toLocaleString() + suffix;
                    }
                }, 20);
            };
            
            // Intersection Observer for counter animation
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            counters.forEach(counter => {
                counterObserver.observe(counter);
            });
        }

        // Back to top button
        function initBackToTop() {
            const backToTopButton = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });
        }

        // Add parallax effect to floating cards
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.floating-card');
            
            parallax.forEach(card => {
                const speed = 0.2;
                const yPos = -(scrolled * speed);
                card.style.transform += ` translateY(${yPos}px)`;
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>

<?php include 'footer.php'; ?>