<?php
$pageTitle = "Child Eye Specialist in Tarn Taran | Paediatric Ophthalmologist – Brar Eye Hospital";
$pageDescription = "Best child eye specialist in Tarn Taran at Brar Eye Hospital. Expert paediatric eye care for children from Tarn Taran – squint, lazy eye, myopia management and paediatric cataract.";
$pageKeywords = "child eye specialist Tarn Taran, paediatric eye doctor Tarn Taran, children eye care Tarn Taran, kids eye specialist Tarn Taran, lazy eye treatment Tarn Taran";
include('header.php');
?>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    
    <!-- Font Awesome -->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* CSS Variables */
        :root {
            --primary-color: #f17732;
            --secondary-color: #ff8a50;
            --accent-color: #03c0b4;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --light-bg: #f8fafc;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(241, 119, 50, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .nav-link.active {
            color: var(--primary-color) !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        /* Buttons */
        .btn {
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            box-shadow: var(--shadow);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(241, 119, 50, 0.1), rgba(3, 192, 180, 0.1));
            padding: 120px 0 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23f17732" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%2303c0b4" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
            opacity: 0.5;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            margin: 2rem 0;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow);
            flex: 1;
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-item h3 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            color: var(--text-light);
            margin: 0;
        }

        .hero-buttons {
            margin-top: 3rem;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .hero-buttons .btn {
            margin: 0.5rem;
        }

        /* Floating Cards */
        .floating-card {
            position: absolute;
            background: var(--white);
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: var(--shadow-lg);
            animation: float 6s ease-in-out infinite;
        }

        .floating-card i {
            font-size: 2rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .floating-card h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .floating-card p {
            font-size: 0.9rem;
            color: var(--text-light);
            margin: 0;
        }

        .card-1 {
            top: 20%;
            right: 10%;
            animation-delay: 0s;
        }

        .card-2 {
            bottom: 20%;
            right: 15%;
            animation-delay: 3s;
        }

        /* Sections */
        section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 3rem;
        }

        /* Service Cards */
        .service-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(241, 119, 50, 0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-color);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .service-icon i {
            font-size: 2rem;
            color: var(--white);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .service-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .service-benefits {
            list-style: none;
            padding: 0;
        }

        .service-benefits li {
            padding: 0.5rem 0;
            color: var(--text-light);
            display: flex;
            align-items: center;
        }

        .service-benefits li i {
            color: var(--accent-color);
            margin-right: 0.8rem;
            font-size: 0.9rem;
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

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Scroll Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 1rem;
            }
            
            .floating-card {
                display: none;
            }
            
            .hero-buttons .btn {
                display: block;
                margin: 0.5rem 0;
            }
        }

        /* Age Group Cards */
        .age-group {
            background: var(--white);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .age-group:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-lg);
        }

        .age-group h4 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Warning Signs */
        .warning-signs {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
        }

        .warning-signs ul {
            list-style: none;
            padding: 0;
            columns: 2;
            column-gap: 2rem;
        }

        .warning-signs li {
            padding: 0.5rem 0;
            display: flex;
            align-items: center;
            break-inside: avoid;
        }

        .warning-signs li i {
            color: var(--primary-color);
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: var(--white);
            padding: 60px 0 20px 0;
        }

        .footer h5 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .footer a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-color);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: var(--white);
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
   

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Child Eye Specialist in tarn-taran</h1>
                        <p class="hero-subtitle">
                            Trusted pediatric eye care at BRAR EYE Hospital. Expert treatment for squint, lazy eye, and all childhood vision problems with 21+ years of experience.
                        </p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <h3>21+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3>1.3L+</h3>
                                <p>Patients Treated</p>
                            </div>
                            <div class="stat-item">
                                <h3>100%</h3>
                                <p>Child-Friendly Care</p>
                            </div>
                        </div>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-primary btn-lg">Book Child Consultation</a>
                            <a href="tel:72182-72182" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-phone"></i> 72182-72182
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image position-relative">
                        <img src="images\6.webp" alt="Child Eye Specialist in tarn-taran" class="img-fluid mb-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Pediatric Specialist -->
    <section class="animate-on-scroll">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose a Pediatric Eye Specialist?</h2>
                <p class="section-subtitle">Children's eyes are still developing and require specialized care from trained pediatric ophthalmologists</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h3>Developing Vision Systems</h3>
                        <p>Children's eyes are still developing, making them vulnerable to vision problems that may not be immediately obvious.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Early Detection</h3>
                        <p>Many childhood eye conditions, if left untreated, can lead to permanent vision loss. Early detection is crucial.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3>Communication Challenges</h3>
                        <p>Children may not be able to express or recognize when something is wrong with their vision.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Specialized Training</h3>
                        <p>Pediatric ophthalmologists are specially trained to identify and treat childhood eye conditions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Common Conditions -->
    <section class="animate-on-scroll" style="background: var(--light-bg);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Common Pediatric Eye Conditions We Treat</h2>
                <p class="section-subtitle">Comprehensive treatment for all childhood vision problems</p>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <img src="images/8.webp" alt="Common Pediatric Eye Conditions" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Squint (Strabismus)</h3>
                        <p>Misalignment of the eyes where one eye may turn inward or outward.</p>
                        <ul class="service-benefits">
                            <li><i class="fas fa-check"></i> Can lead to lazy eye if untreated</li>
                            <li><i class="fas fa-check"></i> Surgical and non-surgical options</li>
                            <li><i class="fas fa-check"></i> High success rate with early treatment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-eye-slash"></i>
                        </div>
                        <h3>Lazy Eye (Amblyopia)</h3>
                        <p>A condition where one eye doesn't develop proper vision.</p>
                        <ul class="service-benefits">
                            <li><i class="fas fa-check"></i> Treatable with eye patches</li>
                            <li><i class="fas fa-check"></i> Vision therapy programs</li>
                            <li><i class="fas fa-check"></i> Corrective lenses when needed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-eyelid"></i>
                        </div>
                        <h3>Drooping Eyelids (Ptosis)</h3>
                        <p>Can obstruct vision and hinder proper eye development.</p>
                        <ul class="service-benefits">
                            <li><i class="fas fa-check"></i> May require surgical correction</li>
                            <li><i class="fas fa-check"></i> Prevents vision obstruction</li>
                            <li><i class="fas fa-check"></i> Improves eye development</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-glasses"></i>
                        </div>
                        <h3>Refractive Errors</h3>
                        <p>Myopia (nearsightedness), hyperopia (farsightedness), and astigmatism.</p>
                        <ul class="service-benefits">
                            <li><i class="fas fa-check"></i> Corrected with glasses</li>
                            <li><i class="fas fa-check"></i> Contact lenses for older children</li>
                            <li><i class="fas fa-check"></i> Vision correction techniques</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Congenital Cataract & Glaucoma</h3>
                        <p>Serious conditions that need early diagnosis and intervention.</p>
                        <ul class="service-benefits">
                            <li><i class="fas fa-check"></i> Emergency surgical care</li>
                            <li><i class="fas fa-check"></i> Advanced surgical techniques</li>
                            <li><i class="fas fa-check"></i> Long-term follow-up care</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-baby-carriage"></i>
                        </div>
                        <h3>Retinopathy of Prematurity (ROP)</h3>
                        <p>Common in premature infants requiring timely screening and treatment.</p>
                        <ul class="service-benefits">
                            <li><i class="fas fa-check"></i> Regular screening protocols</li>
                            <li><i class="fas fa-check"></i> Laser treatment when needed</li>
                            <li><i class="fas fa-check"></i> Prevents blindness</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Age-Wise Screening -->
    <section class="animate-on-scroll">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Age-Wise Eye Screening Recommendations</h2>
                <p class="section-subtitle">Regular screenings at the right age ensure healthy vision development</p>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-10">
                        <img src="images\7.webp" alt="Age-Wise Eye Screening Timeline" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="age-group">
                        <h4><i class="fas fa-baby"></i> Newborns (0-6 months)</h4>
                        <p>Basic eye screening to detect congenital issues like cataract or glaucoma.</p>
                    </div>
                    <div class="age-group">
                        <h4><i class="fas fa-child"></i> Infants (6-12 months)</h4>
                        <p>Vision development check during routine pediatric visits.</p>
                    </div>
                    <div class="age-group">
                        <h4><i class="fas fa-walking"></i> Toddlers (1-3 years)</h4>
                        <p>Early detection of refractive errors or squint through comprehensive eye exams.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="age-group">
                        <h4><i class="fas fa-toys"></i> Preschoolers (3-5 years)</h4>
                        <p>Eye alignment and depth perception checks to support learning and development.</p>
                    </div>
                    <div class="age-group">
                        <h4><i class="fas fa-school"></i> School-Aged Children (5+ years)</h4>
                        <p>Regular screenings for vision clarity, eye strain, and focusing issues.</p>
                    </div>
                    <div class="warning-signs">
                        <h4><i class="fas fa-exclamation-triangle"></i> Warning Signs Your Child May Need an Eye Exam</h4>
                        <ul>
                            <li><i class="fas fa-tv"></i> Sitting too close to the TV</li>
                            <li><i class="fas fa-book"></i> Holding books too close</li>
                            <li><i class="fas fa-eye"></i> Frequent eye rubbing or blinking</li>
                            <li><i class="fas fa-head-side-cough"></i> Tilting head to see better</li>
                            <li><i class="fas fa-brain"></i> Complaining of headaches</li>
                            <li><i class="fas fa-graduation-cap"></i> Poor school performance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="animate-on-scroll" style="background: var(--light-bg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Book Your Child's Eye Consultation</h2>
                    <p class="section-subtitle">Your child's eye health is too important to wait. Schedule an appointment today.</p>
                    
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-10">
                            <img src="images/9.webp" alt="Child-Friendly Eye Care Environment" class="img-fluid">
                        </div>
                    </div>
                    
                    <div class="contact-info"> 
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="service-card text-center">
                                    <div class="service-icon mx-auto">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <h4>Call Us</h4>
                                    <p><a href="tel:72182-72182" class="btn btn-primary">72182-72182</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="service-card text-center">
                                    <div class="service-icon mx-auto">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <h4>Visit Us</h4>
                                    <p>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="service-card text-center">
                                    <div class="service-icon mx-auto">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <h4>Working Hours</h4>
                                    <p>Mon-Sat: 9AM-6PM<br>Sun: 10AM-4PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <h3>What Sets BRAR EYE Hospital Apart</h3>
                        <div class="row mt-4">
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-award fa-3x mb-3" style="color: var(--primary-color);"></i>
                                    <h5>21+ Years Experience</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-users fa-3x mb-3" style="color: var(--primary-color);"></i>
                                    <h5>1.3L+ Patients</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-microscope fa-3x mb-3" style="color: var(--primary-color);"></i>
                                    <h5>Advanced Technology</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <i class="fas fa-heart fa-3x mb-3" style="color: var(--primary-color);"></i>
                                    <h5>Child-Friendly Care</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
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

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Active navigation link
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= sectionTop - 200) {
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