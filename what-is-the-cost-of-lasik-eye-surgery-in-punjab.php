<?php
$pageTitle = "What is the Cost of LASIK Eye Surgery in Bathinda?";
$pageDescription = "What is the Cost of LASIK Eye Surgery in bathinda? Learn expert insights, procedures, and costs at BRAR EYE Hospital, Punjab.";
$pageKeywords = "lasik eye surgery cost in bathinda,affordable lasik surgery in bathinda,vision correction surgery cost bathinda";
include 'header.php';
?>

<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f8fafb;
        color: #24292f;
        line-height: 1.6;
        margin: 0; padding: 0;
    }
    .container { max-width: 1160px; margin: auto; padding: 0 18px; }
    .hero-section {
        background: linear-gradient(110deg, #f0f7fa 60%, #eaf6ff 100%);
        padding: 56px 0 36px 0;
        box-shadow: 0 4px 24px rgba(105, 170, 225, 0.04);
    }
    .hero-grid { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
    .hero-content { max-width: 530px; }
    .badge { background: #0d8fdd; color: #fff; border-radius: 16px; padding: 3px 16px; font-size: .90rem; font-weight: 600; display: inline-block; margin-bottom: 12px; }
    .hero-title { font-size: 2.3rem; font-weight: 700; color: #1565c0; margin-bottom: 10px; }
    .hero-subtitle { color: #4682b4; font-size: 1.125rem; margin-bottom: 24px; }
    .hero-buttons .btn { margin-right: 16px; margin-bottom: 10px; }
    .btn { background: #1976d2; border: none; border-radius: 6px; color: #fff; font-weight: 600; padding: 12px 30px; text-decoration: none; transition: filter 0.2s; font-size:1rem;}
    .btn:hover { filter: brightness(0.93); }
    .btn-outline { background: #fff; color: #1976d2; border: 2px solid #1976d2;}
    .hero-image .image-container { border-radius: 18px; background: #cbe6ffb0; padding: 18px; }
    .main-image { width: 320px; border-radius: 12px; }
    h2.section-title { font-size: 1.9rem; color: #174299; font-weight: bold; margin: 0 0 18px }
    .content-wrapper { margin: 38px 0; }
    .intro-text p { font-size: 1.12rem; margin-bottom: 14px; }
    .stats-grid { display: flex; gap: 18px; flex-wrap: wrap; margin-top:22px; }
    .stat-card { background: #fff; border-radius:14px; box-shadow: 0 4px 20px rgba(73, 168, 217, 0.05); padding: 24px 20px; flex: 1 1 170px; text-align:center;}
    .stat-card svg { width: 38px; height: 38px; color: #1976d2; margin-bottom: 8px; }
    .stat-card h3 { font-size: 1.2rem; margin: 10px 0 6px; }
    .stat-card p { font-size: 1rem; margin: 0; }
    .cost-section .cost-factors { display: flex; gap: 20px; margin-bottom: 22px; flex-wrap: wrap;}
    .factor-card { background: #f5fafc; border-radius:12px; padding: 18px 16px; flex: 1 1 170px; min-width:168px;}
    .factor-card h4{ font-size:1.1rem;margin-bottom:4px;}
    .lasik-types{ display: flex; gap: 20px; flex-wrap: wrap; margin-top:18px; }
    .lasik-card { background: #fff; border-radius: 14px; box-shadow: 0 4px 20px rgba(73, 168, 217, 0.07); padding: 20px 18px; flex: 1 1 220px;}
    .featured{ border:2px solid #0d8fdd;}
    .card-header{margin-bottom:8px;}
    .badge-secondary{background:#bdbdbd;color:#333;}
    .badge-primary{background:#1565c0;color:#fff;}
    .badge-outline{ border:1px solid #1976d2; color:#1976d2; background:#fff;}
    .card-title-row{ display:flex; align-items: center; gap: 10px;}
    .card-subtitle{ font-size:.93rem; color:#789;}
    .card-content{margin-top:6px;}
    .card-section{margin-bottom:10px;}
    .card-section h5{ font-size: .97rem; color: #1976d2; margin: 0 0 4px;}
    .feature-list{padding-left:0;list-style:none;}
    .feature-list li{margin-bottom:5px;}
    .checkmark{color:#12bb7c;font-weight:900;margin-right:5px;}
    .cost-cta{margin:28px 0 0;}
    .technology-section .technology-grid{display:flex;gap:36px;flex-wrap:wrap;}
    .technology-content{flex:1 1 340px;}
    .advantage-list{margin-top:14px;}
    .advantage-item{display:flex;align-items:flex-start;gap:10px;margin-bottom:18px;}
    .advantage-icon{width:36px;height:36px;color:#1976d2;}
    .testimonials{flex:1 1 300px;display:flex;flex-direction:column;gap:18px;}
    .testimonial-card{background:#fff;border-radius:11px;box-shadow:0 4px 20px rgba(95,168,217,.05);padding:18px 20px;}
    .testimonial-header{display:flex;align-items:flex-start;gap:12px;}
    .testimonial-avatar svg{width:32px;height:32px;color:#0d8fdd;}
    blockquote{font-size:1.03rem;color:#235b8f;margin:0 0 8px 0;}
    cite{font-size:.93rem;color:#227;}
    .process-section{background:#f0f7fa;padding:36px 0;}
    .process-list{display:flex;gap:24px;flex-wrap:wrap;margin-top:14px;}
    .process-step{background:#fff;border-radius:12px;box-shadow:0 2px 14px rgba(73,168,217,0.07);padding:16px 16px;flex:1 1 160px;min-width:185px;}
    .process-step h4{margin-top:0;font-size:1.08rem;color:#174299;}
    .faq-section{max-width:700px;margin:46px auto 0 auto;}
    .faq-list{margin:0;padding:0;list-style:none;}
    .faq-item{background:#fff;border-radius:8px;padding:16px 18px;box-shadow:0 2px 14px rgba(140,168,217,0.06);margin-bottom:16px;}
    .before-after-section{background:#eaf6ff;padding:32px 0;}
    .ba-cases{display:flex;gap:24px;flex-wrap:wrap;justify-content:center;}
    .ba-case{background:#fff;border-radius:13px;box-shadow:0 2px 14px rgba(140,168,217,0.08);padding:18px 22px;flex:1 1 220px;min-width:200px;}
    .ba-case h5{margin:0 0 4px;color:#1976d2;}
    .cta-section{margin:42px 0;text-align:center;}
    @media(max-width:950px){.hero-grid,.stats-grid,.technology-grid,.lasik-types,.process-list,.ba-cases {flex-direction: column;gap:16px;}}
    </style>
</head>
<body>

<!-- Hero Section -->
<section id="intro" class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="badge">Complete LASIK Guide</span>
                <h1 class="hero-title">What is the Cost of LASIK Eye Surgery in Punjab?</h1>
                <p class="hero-subtitle">Your Complete Guide to Modern LASIK at BRAR EYE Hospital, Bathinda</p>
                <div class="hero-buttons">
                  
                    <a href="/contact-brar-eye-hospital-bathinda.php" class="btn btn-outline">Book Appoitment</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-container">
                    <img src="./assets/images/service/lasik.webp" alt="LASIK Eye Surgery Procedure" class="main-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction & Stats -->
<section class="intro-section">
    <div class="container">
        <div class="content-wrapper">
            <h2 class="section-title">Freedom From Glasses, Tailored to You</h2>
            <div class="intro-text">
                <p>If you dream of waking up with clear vision—no glasses, no contact lenses—LASIK eye surgery could be the life-changing solution you've been searching for. At BRAR EYE Hospital in Bathinda, Punjab, we bring top-tier laser vision correction using the most advanced technologies to patients from all over the region.</p>
                <p>LASIK (Laser-Assisted in Situ Keratomileusis) is a quick, minimally invasive procedure designed to permanently correct refractive errors such as myopia (nearsightedness), hyperopia (farsightedness), and astigmatism. Using an advanced laser, your eye’s surface is gently reshaped for clearer, sharper vision—often with results visible in just a day or two. Modern LASIK at BRAR EYE Hospital also means:</p>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                    </svg>
                    <h3>98% Success Rate</h3>
                    <p>Achieve 20/20 or better vision</p>
                </div>
                <div class="stat-card">
                    <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12,6 12,12 16,14"/>
                    </svg>
                    <h3>Quick Recovery</h3>
                    <p>Back to work in 24-48 hours</p>
                </div>
                <div class="stat-card">
                    <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12,22s8-4 8-10V5l-8-3-8,3v7c0,6 8,10 8,10z"/>
                    </svg>
                    <h3>Advanced Technology</h3>
                    <p>Latest laser equipment</p>
                </div>
                <div class="stat-card">
                    <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                    <h3>5000+ Procedures</h3>
                    <p>15+ years of expertise</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost Section -->
<section id="cost" class="cost-section">
    <div class="container">
        <div class="content-wrapper">
            <h2 class="section-title">LASIK Surgery Cost in Punjab: What to Expect</h2>
            <h3>Why Pricing Varies</h3>
            <div class="cost-factors">
                <div class="factor-card">
                    <h4>Technology Used</h4>
                    <p>Standard LASIK vs. advanced blade-free or touchless lasers</p>
                </div>
                <div class="factor-card">
                    <h4>Eye Health</h4>
                    <p>Your prescription and custom treatment requirements</p>
                </div>
                <div class="factor-card">
                    <h4>Comprehensive Care</h4>
                    <p>Pre- and post-operative services included</p>
                </div>
            </div>
            <h3>Types of LASIK & What's Included</h3>
            <div class="lasik-types">
                <div class="lasik-card">
                    <div class="card-header">
                        <div class="card-title-row">
                            <h4>Standard LASIK</h4>
                            <span class="badge badge-secondary">Basic</span>
                        </div>
                        <p class="card-subtitle">Blade Microkeratome, Excimer Laser</p>
                    </div>
                    <div class="card-content">
                        <div class="card-section">
                            <h5>Who It's For:</h5>
                            <p>Younger adults, routine vision errors</p>
                        </div>
                        <div class="card-section">
                            <h5>What's Included:</h5>
                            <ul class="feature-list">
                                <li><span class="checkmark">✓</span>Pre-op examination</li>
                                <li><span class="checkmark">✓</span>Standard laser surgery</li>
                                <li><span class="checkmark">✓</span>3 follow-up visits</li>
                                <li><span class="checkmark">✓</span>All medications & aftercare</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lasik-card featured">
                    <div class="card-header">
                        <div class="card-title-row">
                            <h4>Advanced LASIK</h4>
                            <span class="badge badge-primary">Popular</span>
                        </div>
                        <p class="card-subtitle">Femtosecond Laser, Contoura Vision, Customized Mapping</p>
                    </div>
                    <div class="card-content">
                        <div class="card-section">
                            <h5>Who It's For:</h5>
                            <p>Thin corneas, complex cases, high power</p>
                        </div>
                        <div class="card-section">
                            <h5>What's Included:</h5>
                            <ul class="feature-list">
                                <li><span class="checkmark">✓</span>Digital scans</li>
                                <li><span class="checkmark">✓</span>100% blade-free</li>
                                <li><span class="checkmark">✓</span>6-month aftercare</li>
                                <li><span class="checkmark">✓</span>Enhancement assurance</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lasik-card">
                    <div class="card-header">
                        <div class="card-title-row">
                            <h4>Premium LASIK</h4>
                            <span class="badge badge-outline">Premium</span>
                        </div>
                        <p class="card-subtitle">Touchless Trans-PRK/SmartSurf, SMILE, 3D digital scan</p>
                    </div>
                    <div class="card-content">
                        <div class="card-section">
                            <h5>Who It's For:</h5>
                            <p>Athletes, professionals, highest comfort</p>
                        </div>
                        <div class="card-section">
                            <h5>What's Included:</h5>
                            <ul class="feature-list">
                                <li><span class="checkmark">✓</span>Full screening</li>
                                <li><span class="checkmark">✓</span>Custom corneal smoothing</li>
                                <li><span class="checkmark">✓</span>Lifetime aftercare</li>
                                <li><span class="checkmark">✓</span>VIP support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cost-cta">
                <p>Contact BRAR EYE Hospital directly for your free, obligation-free LASIK cost consultation and personalized quote.</p>
                <a href="#contact" class="btn btn-primary">Get Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Technology & Testimonials -->
<section id="technology" class="technology-section">
    <div class="container">
        <div class="content-wrapper">
            <h2 class="section-title">Why Choose BRAR EYE Hospital for Your LASIK in Punjab?</h2>
            <div class="technology-grid">
                <div class="technology-content">
                    <h3>Our Edge in Eye Care</h3>
                    <div class="advantage-list">
                        <div class="advantage-item">
                            <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <div>
                                <h4>15+ Years of Expertise</h4>
                                <p>Over 5,000 successful LASIK procedures with proven results</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                            <div>
                                <h4>Bespoke Care</h4>
                                <p>Every patient receives a thoroughly personalized plan</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12,22s8-4 8-10V5l-8-3-8,3v7c0,6 8,10 8,10z"/>
                            </svg>
                            <div>
                                <h4>Cutting-edge Technology</h4>
                                <p>Contoura Vision, SMILE, SmartSurf, and many more</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <svg class="advantage-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12,6 12,12 16,14"/>
                            </svg>
                            <div>
                                <h4>Rapid Recovery</h4>
                                <p>Most patients return to work within 24–48 hours</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                            </div>
                            <div>
                                <blockquote>"My Contoura Vision LASIK surgery was a life-changer. The procedure was quick, painless, and my vision cleared within a day—couldn't believe I was reading signs across the road without glasses!"</blockquote>
                                <cite>— Rajesh Sharma, Bathinda</cite>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/>
                                </svg>
                            </div>
                            <div>
                                <blockquote>"Woke up next morning with 6/6 vision. The process was worry-free, and staff guided me from start to finish. Punjab's top recommendation for the latest laser treatment."</blockquote>
                                <cite>— Priya Kaur, Ludhiana</cite>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="process-section">
    <div class="container">
        <div class="content-wrapper">
            <h2 class="section-title">LASIK Surgery Step-by-Step: What Happens?</h2>
            <div class="process-list">
                <div class="process-step">
                    <h4>1. Pre-Operative Assessment</h4>
                    <p>Detailed scans: corneal thickness, topography, wavefront analysis, and retina health for your custom LASIK plan.</p>
                </div>
                <div class="process-step">
                    <h4>2. Pre-Surgery Preparation</h4>
                    <p>Numbing drops for comfort. Eyes prepared and all data loaded in the advanced laser system.</p>
                </div>
                <div class="process-step">
                    <h4>3. Laser Procedure</h4>
                    <p>Corneal flap is created safely (bladeless/microkeratome); vision corrected precisely by advanced laser.</p>
                </div>
                <div class="process-step">
                    <h4>4. Post-Operative Care</h4>
                    <p>Brief rest, then head home. Most see dramatic improvements within hours; daily routines in 1-2 days.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="faq-section">
    <h2 class="section-title">Common Questions About LASIK Surgery Costs</h2>
    <ul class="faq-list">
        <li class="faq-item">
            <strong>Is LASIK a permanent solution?</strong><br>
            Yes, for most people, LASIK provides permanent vision correction. Regular annual eye exams help maintain optimal health.
        </li>
        <li class="faq-item">
            <strong>Are EMI or insurance options available?</strong><br>
            Absolutely. We offer convenient payment plans and accept qualifying insurance for eligible candidates.
        </li>
        <li class="faq-item">
            <strong>What if I have very high power or thin corneas?</strong><br>
            Advanced LASIK options like SMILE or Touchless LASIK are specially designed for complex prescriptions. Our surgeons will guide you to the safest option.
        </li>
        <li class="faq-item">
            <strong>Why do costs differ between hospitals?</strong><br>
            Differences typically come down to technology, surgeon experience, aftercare, and transparency. At BRAR EYE Hospital, it’s world-class results with no surprise fees.
        </li>
    </ul>
</section>

<!-- Before & After Section -->
<section class="before-after-section">
    <div class="container">
        <h2 class="section-title">Before & After: Real Patient Transformations</h2>
        <div class="ba-cases">
            <div class="ba-case">
                <h5>Young Professional</h5>
                <p>From -6.0D (glasses dependent) to 20/20 in 24 hours with no pain using SmartSurf/Touchless LASIK.</p>
            </div>
            <div class="ba-case">
                <h5>Night Driver (IT Pro)</h5>
                <p>Eliminated glare and astigmatism for clear night vision with Contoura Vision LASIK.</p>
            </div>
            <div class="ba-case">
                <h5>Teacher</h5>
                <p>High power improved to 20/25, could finally teach without glasses post-CustomEyes laser.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action Section -->
<section id="contact" class="cta-section">
    <div class="container">
        <h2 class="section-title">Ready for Your Vision Transformation?</h2>
        <p>Book your free consultation at BRAR EYE Hospital for a personalized LASIK cost estimate, eligibility check, and honest answers from our experts.<br>Your clearer tomorrow awaits!</p>
        <a href="tel:+917218272182" class="btn btn-primary">Call Now</a>
        <a href="/contact-brar-eye-hospital-bathinda.php" class="btn btn-outline">Contact Us</a>
    </div>
</section>
<?php include 'footer.php'; ?>
