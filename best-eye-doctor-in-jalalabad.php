    <?php


$pageTitle = "Best Eye Doctor in Jalalabad | Top Ophthalmologist – Brar Eye Hospital";
$pageDescription = "Looking for the best eye doctor in Jalalabad? Visit Brar Eye Hospital – trusted by patients from Jalalabad and across Punjab. Expert ophthalmologists for all eye problems.";
$pageKeywords = "best eye doctor Jalalabad, eye specialist Jalalabad, ophthalmologist Jalalabad, eye hospital near Jalalabad, eye checkup Jalalabad";

include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        :root {
            --primary-orange: #f17732;
            --primary-teal: #03c0b4;
            --dark-blue: #1a1a2e;
            --light-gray: #f8f9fa;
            --white: #ffffff;
            --shadow-light: rgba(0, 0, 0, 0.1);
            --shadow-medium: rgba(0, 0, 0, 0.2);
            --shadow-heavy: rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* 3D Header with Parallax */
        .header {
            background: linear-gradient(135deg, var(--primary-orange), var(--primary-teal));
            color: white;
            padding: 4rem 0;
            position: relative;
            transform-style: preserve-3d;
            perspective: 1000px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(255,255,255,0.15) 0%, transparent 60%),
                        radial-gradient(circle at 60% 40%, rgba(255,255,255,0.08) 0%, transparent 40%);
            animation: float 8s ease-in-out infinite;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
            transform: translateZ(50px);
            animation: slideInUp 1s ease-out;
        }

        .logo-3d {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 
                0 0 20px rgba(255, 255, 255, 0.6),
                0 8px 20px rgba(0, 0, 0, 0.4),
                0 15px 35px rgba(0, 0, 0, 0.3);
            transform: rotateX(10deg) rotateY(-5deg);
            transition: transform 0.3s ease;
        }

        .logo-3d:hover {
            transform: rotateX(0deg) rotateY(0deg) scale(1.05);
        }

        .hero-subtitle {
            font-size: 2rem;
            margin-bottom: 1rem;
            opacity: 0.95;
            animation: fadeIn 1.5s ease-out;
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.15);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            transform: translateZ(30px) rotateX(5deg);
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(15px);
        }

        .stat-card:hover {
            transform: translateZ(50px) rotateX(0deg) scale(1.08);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            padding: 1rem 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transform: translateY(-100%);
            animation: slideDown 1s ease-out 0.5s forwards;
            box-shadow: 0 3px 25px rgba(0, 0, 0, 0.15);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .nav-logo {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-orange);
            text-decoration: none;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a:hover {
            color: var(--primary-teal);
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-orange), var(--primary-teal));
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* 3D Section Cards */
        .section {
            padding: 6rem 0;
            position: relative;
        }

        .section:nth-child(even) {
            background: var(--light-gray);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark-blue);
            transform: translateZ(30px);
            animation: fadeInUp 1s ease-out;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .service-card {
            background: var(--white);
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 
                0 15px 35px rgba(0, 0, 0, 0.12),
                0 5px 15px rgba(0, 0, 0, 0.08);
            transform: translateZ(0) rotateX(5deg);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-orange), var(--primary-teal));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .service-card:hover {
            transform: translateZ(25px) rotateX(0deg) translateY(-15px);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.18),
                0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, var(--primary-orange), var(--primary-teal));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            transform: rotateY(0deg);
            transition: transform 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .service-card:hover .service-icon {
            transform: rotateY(180deg) scale(1.1);
        }

        .service-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark-blue);
            text-align: center;
            font-weight: bold;
        }

        .service-description {
            color: #666;
            line-height: 1.7;
            text-align: center;
            font-size: 1rem;
        }

        .service-list {
            list-style: none;
            margin-top: 1.5rem;
        }

        .service-list li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 2rem;
            color: #555;
        }

        .service-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary-teal);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Why Choose Us Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: var(--white);
            padding: 3rem;
            border-radius: 20px;
            text-align: center;
            transform: perspective(1000px) rotateY(0deg);
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: linear-gradient(135deg, var(--primary-orange), var(--primary-teal));
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.5s ease;
            z-index: 0;
        }

        .feature-card:hover::before {
            width: 400%;
            height: 400%;
        }

        .feature-card:hover {
            transform: perspective(1000px) rotateY(8deg) translateY(-8px);
            color: white;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }

        .feature-card > * {
            position: relative;
            z-index: 1;
        }

        .feature-number {
            font-size: 4rem;
            font-weight: bold;
            color: var(--primary-teal);
            margin-bottom: 1.5rem;
            transition: color 0.3s ease;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover .feature-number {
            color: white;
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .feature-description {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Contact Form */
        .contact-section {
            background: linear-gradient(135deg, var(--primary-orange), var(--primary-teal));
            color: white;
        }

        .contact-form {
            background: var(--white);
            padding: 4rem;
            border-radius: 25px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 15px 30px rgba(0, 0, 0, 0.1);
            transform: perspective(1000px) rotateX(5deg);
            transition: transform 0.3s ease;
            max-width: 900px;
            margin: 0 auto;
            color: #333;
        }

        .contact-form:hover {
            transform: perspective(1000px) rotateX(0deg);
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: bold;
            color: var(--dark-blue);
            font-size: 1.1rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1.2rem;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--light-gray);
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-teal);
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(3, 192, 180, 0.2);
        }

        .btn-3d {
            background: linear-gradient(135deg, var(--primary-orange), var(--primary-teal));
            color: white;
            padding: 1.2rem 3rem;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transform: translateZ(0);
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            font-family: inherit;
        }

        .btn-3d:hover {
            transform: translateZ(10px) translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .btn-3d:active {
            transform: translateZ(5px) translateY(-2px);
        }

        .cta-button {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 1rem 2.5rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
            margin-top: 2rem;
        }

        .cta-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Message Styles */
        .message {
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 12px;
            text-align: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .message.success {
            background: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
        }

        .message.error {
            background: #f8d7da;
            color: #721c24;
            border: 2px solid #f5c6cb;
        }

        /* Footer */
        .footer {
            background: var(--dark-blue);
            color: white;
            padding: 4rem 0 2rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .contact-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            transform: translateZ(0);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-item:hover {
            transform: translateZ(10px) translateY(-8px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .contact-item h4 {
            color: var(--primary-orange);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .contact-item p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                transform: translateY(100px) translateZ(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0) translateZ(50px);
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(1deg);
            }
            66% {
                transform: translateY(-10px) rotate(-1deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                padding: 0 1rem;
            }
            
            .logo-3d {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.5rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .contact-form {
                padding: 2rem;
                margin: 0 1rem;
            }
        }

        /* Additional 3D Effects */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .parallax-bg {
            position: relative;
            overflow: hidden;
        }

        .parallax-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.03) 50%, transparent 70%);
            transform: translateX(-100%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }
    </style>
</head>
<body>
   

    <!-- Header -->
    <header class="header" id="home">
        <div class="header-content">
            <h1 class="logo-3d" style="color:white;">BRAR EYE Hospital</h1>
            <p class="hero-subtitle" style="color:white;">Best Eye Doctor in jalalabad</p>
            <p class="hero-description" style="color:white;">
                Your search ends here! With a legacy of over 21 years, BRAR EYE Hospital has become a trusted name in eye care across Punjab. 
                We are dedicated to helping people achieve freedom from specs through advanced laser and surgical procedures.
            </p>
            <a href="#contact" class="cta-button">Book Your Appointment</a>
            
            <div class="stats-container">
                <div class="stat-card">
                    <span class="stat-number">21+</span>
                    <span class="stat-text">Years of Excellence</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">1.3L+</span>
                    <span class="stat-text">Happy Patients</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-text">Advanced Technology</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Why Choose Us Section -->
    <section class="section parallax-bg" id="why-choose">
        <div class="container">
            <h2 class="section-title">Why Choose BRAR EYE Hospital?</h2>
            <p class="section-subtitle">
                Known for our commitment to quality, patient satisfaction, and use of advanced technology, 
                we have successfully treated more than 1.3 lakh patients.
            </p>
            
            <div class="features-grid">
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">1</div>
                    <h3 class="feature-title">Over 21 Years of Excellence</h3>
                    <p class="feature-description">
                        For more than two decades, BRAR EYE Hospital has provided expert eye care services in jalalabad. 
                        Our experienced team of ophthalmologists and eye surgeons ensures each patient receives the best possible treatment.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">2</div>
                    <h3 class="feature-title">1.3 Lakh+ Happy Patients</h3>
                    <p class="feature-description">
                        Our hospital has successfully treated more than 1.3 lakh patients across various eye conditions. 
                        This speaks volumes about the trust patients have in our treatment and the expertise of our doctors.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">3</div>
                    <h3 class="feature-title">Freedom from Specs</h3>
                    <p class="feature-description">
                        We offer advanced vision correction procedures, including LASIK, SMILE Pro, and Contoura Vision, 
                        to help patients enjoy a life free from spectacles and contact lenses.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">4</div>
                    <h3 class="feature-title">Latest Eye Care Technology</h3>
                    <p class="feature-description">
                        BRAR EYE Hospital is equipped with state-of-the-art equipment for diagnosis and treatment. 
                        From robotic laser cataract surgery to blade-free LASIK and retina care, we use globally accepted technologies.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">5</div>
                    <h3 class="feature-title">Trusted Team of Eye Specialists</h3>
                    <p class="feature-description">
                        Our team includes some of the most experienced and well-trained eye doctors in jalalabad. 
                        Whether you need a routine eye check-up or advanced surgery, we ensure that you are in the best hands.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <h2 class="section-title">Our Comprehensive Services</h2>
            <p class="section-subtitle">
                At BRAR EYE Hospital, we offer a wide range of services under one roof. 
                Here's an overview of our core specialties with the latest technology and expert care.
            </p>
            
            <div class="services-grid">
                <div class="service-card scroll-reveal">
                    <div class="service-icon">👁️</div>
                    <h3 class="service-title">Cataract Surgery</h3>
                    <p class="service-description">
                        We specialize in painless, blade-free, robotic cataract surgeries using the latest femtosecond laser technology. 
                        Premium intraocular lenses (IOLs) are offered to improve vision quality after surgery.
                    </p>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">⚡</div>
                    <h3 class="service-title">LASIK & Vision Correction</h3>
                    <p class="service-description">We offer various advanced vision correction options:</p>
                    <ul class="service-list">
                        <li>Blade-free LASIK Surgery</li>
                        <li>Contoura Vision – Customized laser treatment for sharper vision</li>
                        <li>SMILE Pro Surgery – The most advanced flapless laser vision correction</li>
                        <li>SILK Surgery – Smooth Incision Lenticule Keratomileusis</li>
                    </ul>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">🔍</div>
                    <h3 class="service-title">Glaucoma Treatment</h3>
                    <p class="service-description">
                        We provide comprehensive diagnosis and management of glaucoma. Our treatment options include 
                        medications, laser therapy, and advanced surgical solutions to prevent optic nerve damage and preserve vision.
                    </p>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">🎯</div>
                    <h3 class="service-title">Retina Services</h3>
                    <p class="service-description">We provide treatment for a wide range of retina conditions:</p>
                    <ul class="service-list">
                        <li>Diabetic Retinopathy</li>
                        <li>Macular Degeneration</li>
                        <li>Retinal Detachment</li>
                        <li>Vitreous Hemorrhage</li>
                    </ul>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">👶</div>
                    <h3 class="service-title">Paediatric Eye Care</h3>
                    <p class="service-description">Eye problems in children require early diagnosis and treatment. We manage:</p>
                    <ul class="service-list">
                        <li>Pediatric Cataracts</li>
                        <li>Squint (Strabismus)</li>
                        <li>Lazy Eye (Amblyopia)</li>
                        <li>Pediatric Glaucoma</li>
                    </ul>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">🌟</div>
                    <h3 class="service-title">Cornea Services</h3>
                    <p class="service-description">BRAR EYE Hospital has a full-fledged cornea unit offering diagnosis and treatment for:</p>
                    <ul class="service-list">
                        <li>Corneal Ulcers</li>
                        <li>Keratoconus</li>
                        <li>Pterygium</li>
                        <li>Dry Eye Syndrome</li>
                        <li>Advanced corneal transplants (DALK, DMEK)</li>
                    </ul>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">✨</div>
                    <h3 class="service-title">Oculoplasty & Cosmetic Surgery</h3>
                    <p class="service-description">We offer reconstructive and aesthetic treatments around the eyes:</p>
                    <ul class="service-list">
                        <li>Eyelid surgery (ptosis, entropion, ectropion)</li>
                        <li>Tear duct (DCR) surgery</li>
                        <li>Orbital tumors</li>
                        <li>Eye socket reconstruction</li>
                        <li>Cosmetic procedures and Botox around eyes</li>
                    </ul>
                </div>
                
                <div class="service-card scroll-reveal">
                    <div class="service-icon">📋</div>
                    <h3 class="service-title">Eye Check-up Packages</h3>
                    <p class="service-description">We offer customized eye check-up packages suitable for:</p>
                    <ul class="service-list">
                        <li>School children (vision screening, squint check)</li>
                        <li>Working professionals (digital eye strain)</li>
                        <li>Senior citizens (cataract and glaucoma screening)</li>
                        <li>Diabetics & Hypertensive patients (retina check-ups)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Care Section -->
    <section class="section parallax-bg">
        <div class="container">
            <h2 class="section-title">Personalized Patient Care</h2>
            <p class="section-subtitle">
                Our approach is patient-centric. From the first consultation to post-operative care, 
                we prioritize your comfort and recovery.
            </p>
            
            <div class="features-grid">
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">🩺</div>
                    <h3 class="feature-title">Detailed Pre-Surgery Counselling</h3>
                    <p class="feature-description">
                        We believe every patient deserves time, clarity, and the best treatment options. 
                        Our transparent communication ensures you understand every step of your treatment journey.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">📋</div>
                    <h3 class="feature-title">Clear Post-Operative Instructions</h3>
                    <p class="feature-description">
                        Detailed instructions for post-operative care ensure smooth recovery and optimal results 
                        from your treatment.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">🔄</div>
                    <h3 class="feature-title">Regular Follow-ups</h3>
                    <p class="feature-description">
                        Continuous monitoring through regular follow-ups ensures your recovery is on track 
                        and any concerns are addressed promptly.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">📄</div>
                    <h3 class="feature-title">Insurance Assistance</h3>
                    <p class="feature-description">
                        Our team provides assistance with insurance paperwork to make your treatment 
                        as hassle-free as possible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">What Our Patients Say</h2>
            <p class="section-subtitle">
                Patients from jalalabad and nearby regions trust BRAR EYE Hospital for its integrity, 
                professional staff, and outstanding surgical outcomes.
            </p>
            
            <div class="features-grid">
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">⚡</div>
                    <h3 class="feature-title">Painless & Fast Surgeries</h3>
                    <p class="feature-description">
                        Our advanced surgical techniques ensure minimal discomfort and quick recovery times.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">💰</div>
                    <h3 class="feature-title">Affordable Pricing</h3>
                    <p class="feature-description">
                        Transparent pricing with no hidden costs, making quality eye care accessible to everyone.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">👨‍⚕️</div>
                    <h3 class="feature-title">Personalized Consultation</h3>
                    <p class="feature-description">
                        Every patient receives a customized consultation and surgery plan tailored to their specific needs.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">🏥</div>
                    <h3 class="feature-title">Clean & Well-Equipped Facility</h3>
                    <p class="feature-description">
                        Hygienic environment with state-of-the-art equipment ensuring the highest standards of care.
                    </p>
                </div>
                
                <div class="feature-card scroll-reveal">
                    <div class="feature-number">👥</div>
                    <h3 class="feature-title">Friendly & Professional Staff</h3>
                    <p class="feature-description">
                        Our cooperative and well-informed staff ensure a comfortable experience throughout your visit.
                    </p>
                </div>
            </div>
        </div>
    </section>

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

    <script>
        // 3D scroll reveal animations
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.scroll-reveal');
            
            reveals.forEach(reveal => {
                const windowHeight = window.innerHeight;
                const elementTop = reveal.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add('revealed');
                }
            });
        }

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

        // Add scroll event listeners
        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);

        // Enhanced 3D effects on mouse movement
        document.addEventListener('mousemove', (e) => {
            const cards = document.querySelectorAll('.service-card, .feature-card');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                const cardX = rect.left + rect.width / 2;
                const cardY = rect.top + rect.height / 2;
                
                const distanceX = (e.clientX - cardX) / rect.width;
                const distanceY = (e.clientY - cardY) / rect.height;
                
                if (Math.abs(distanceX) < 0.5 && Math.abs(distanceY) < 0.5) {
                    const rotateX = distanceY * 10;
                    const rotateY = distanceX * 10;
                    
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(20px)`;
                } else {
                    card.style.transform = '';
                }
            });
        });

        // Parallax effect for header background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const header = document.querySelector('.header::before');
            if (header) {
                header.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Form validation and enhancement
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
                
                if (!name || !email || !phone) {
                    e.preventDefault();
                    alert('Please fill in all required fields.');
                    return false;
                }
                
                // Add loading state to button
                const button = form.querySelector('.btn-3d');
                button.textContent = 'Sending...';
                button.disabled = true;
            });
        }

        // Mobile navigation toggle (for future enhancement)
        function toggleMobileNav() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        // Initialize animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in animation to sections
            const sections = document.querySelectorAll('.section');
            sections.forEach((section, index) => {
                section.style.animationDelay = `${index * 0.2}s`;
            });
            
            // Trigger initial scroll reveal
            revealOnScroll();
        });
    </script>
</body>
</html>

<?php include 'footer.php'; ?>