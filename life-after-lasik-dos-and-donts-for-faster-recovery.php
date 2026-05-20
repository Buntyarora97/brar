<?php
// eye-care-blog-bathinda.php

$pageTitle = "Life After LASIK: Recovery Tips, Precautions & Do’s and Don’ts – Brar Eye Hospital";
$pageDescription = "Discover essential LASIK recovery tips, do’s and don’ts, sleeping positions, and screen usage for faster healing. Learn from experts at Brar Eye Hospital, Bathinda.";
$pageKeywords = "LASIK recovery tips, do’s and don’ts after LASIK, LASIK eye surgery in Bathinda, LASIK precautions, LASIK healing time, Brar Eye Hospital LASIK";

include('header.php');
?>



<style>
    /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #03c0b4;
    --secondary-color: #f17732;
    --dark-color: #333333;
    --light-color: #ffffff;
    --gray-light: #f8f9fa;
    --gray-medium: #6c757d;
    --gradient-primary: linear-gradient(135deg, #03c0b4 0%, #02a399 100%);
    --gradient-secondary: linear-gradient(135deg, #f17732 0%, #e6641a 100%);
    --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.1);
    --shadow-medium: 0 8px 15px rgba(0, 0, 0, 0.1);
    --shadow-heavy: 0 15px 35px rgba(0, 0, 0, 0.15);
    --border-radius: 8px;
    --border-radius-lg: 16px;
    --transition: all 0.3s ease;
}




/* Hero Section */
.hero {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 120px 0 80px;
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    background: linear-gradient(45deg, #ffffff, #e0f7fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.2rem;
    line-height: 1.7;
    margin-bottom: 2rem;
    opacity: 0.95;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn {
    padding: 14px 28px;
    font-size: 1rem;
    font-weight: 600;
    border: none;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: var(--transition);
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.btn-primary {
    background: var(--secondary-color);
    color: var(--light-color);
    box-shadow: var(--shadow-medium);
}

.btn-primary:hover {
    background: #e6641a;
    transform: translateY(-2px);
    box-shadow: var(--shadow-heavy);
}

.btn-secondary {
    background: transparent;
    color: var(--light-color);
    border: 2px solid var(--light-color);
}

.btn-secondary:hover {
    background: var(--light-color);
    color: var(--primary-color);
}

.btn-large {
    padding: 18px 36px;
    font-size: 1.1rem;
}

.hero-img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-heavy);
}

/* Introduction */
.intro {
    padding: 80px 0;
    background: var(--gray-light);
}

.intro-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.intro-text {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    color: var(--gray-medium);
}

/* Section Styles */
.what-is-lasik,
.why-recovery,
.timeline-section,
.dos-donts,
.special-care,
.side-effects,
.recovery-tips,
.why-choose,
.final-thoughts {
    padding: 80px 0;
}

.what-is-lasik {
    background: var(--light-color);
}

.why-recovery {
    background: var(--gray-light);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 3rem;
    color: var(--dark-color);
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 2px;
}

.section-intro {
    font-size: 1.2rem;
    text-align: center;
    margin-bottom: 3rem;
    color: var(--gray-medium);
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* Content Grid */
.content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.content-text h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin: 2rem 0 1rem;
}

.feature-list,
.benefit-list {
    list-style: none;
    margin: 1.5rem 0;
}

.feature-list li,
.benefit-list li {
    padding: 0.5rem 0;
    font-size: 1.1rem;
}

.feature-list li strong {
    color: var(--secondary-color);
}

.section-img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-medium);
}

/* Benefits Grid */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.benefit-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-card h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Timeline */
.timeline-section {
    background: var(--light-color);
}

.timeline {
    max-width: 800px;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    gap: 2rem;
    margin-bottom: 3rem;
    cursor: pointer;
    transition: var(--transition);
}

.timeline-item:hover {
    transform: translateX(10px);
}

.timeline-item.active .timeline-marker {
    background: var(--gradient-primary);
    color: var(--light-color);
    box-shadow: var(--shadow-medium);
}

.timeline-marker {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: var(--gray-light);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    transition: var(--transition);
}

.timeline-content {
    flex: 1;
    padding: 1rem 0;
}

.timeline-content h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.timeline-content ul {
    list-style: none;
}

.timeline-content li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.timeline-content li::before {
    content: '•';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* Do's and Don'ts */
.dos-donts {
    background: var(--gray-light);
}

.dos-donts-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}

.dos-title {
    font-size: 2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 2rem;
    text-align: center;
}

.donts-title {
    font-size: 2rem;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 2rem;
    text-align: center;
}

.do-item,
.dont-item {
    background: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-bottom: 1.5rem;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.do-item {
    border-left: 4px solid var(--primary-color);
}

.dont-item {
    border-left: 4px solid var(--secondary-color);
}

.do-item:hover,
.dont-item:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
}

.do-item h4,
.dont-item h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.do-item h4 {
    color: var(--primary-color);
}

.dont-item h4 {
    color: var(--secondary-color);
}

/* Special Care */
.special-care {
    background: var(--light-color);
}

.care-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 3rem;
}

.care-item {
    background: var(--gray-light);
    padding: 2.5rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
}

.care-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
}

.care-item h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.care-item ul {
    list-style: none;
    text-align: left;
    max-width: 400px;
    margin: 0 auto;
}

.care-item li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.care-item li::before {
    content: '✓';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* Side Effects */
.side-effects {
    background: var(--gray-light);
}

.side-effects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.side-effect-item {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius);
    text-align: center;
    box-shadow: var(--shadow-light);
}

.side-effect-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.side-effect-item h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--dark-color);
}

.side-effects-note {
    text-align: center;
    font-size: 1.2rem;
    color: var(--primary-color);
    font-weight: 600;
}

/* Recovery Tips */
.recovery-tips {
    background: var(--light-color);
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.tip-card {
    background: var(--gradient-secondary);
    color: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.tip-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-heavy);
}

.tip-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.tip-card h4 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

/* Why Choose */
.why-choose {
    background: var(--gray-light);
}

.choose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.choose-item {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.choose-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.choose-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.choose-item h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.hospital-message {
    text-align: center;
    font-size: 1.3rem;
    color: var(--secondary-color);
    font-weight: 600;
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
}

/* Final Thoughts */
.final-thoughts {
    background: var(--gradient-primary);
    color: var(--light-color);
}

.final-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.final-thoughts p {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 2rem;
    opacity: 0.95;
}

.cta-section {
    margin-top: 3rem;
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}


/* Responsive Design */
@media (max-width: 768px) {
    .hamburger {
        display: flex;
    }
    
    .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--light-color);
        flex-direction: column;
        padding: 1rem;
        box-shadow: var(--shadow-medium);
    }
    
    .nav-menu.active {
        display: flex;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .content-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .dos-donts-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .care-grid {
        grid-template-columns: 1fr;
    }
    
    .timeline-item {
        flex-direction: column;
        text-align: center;
    }
    
    .cta-section {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .hero {
        padding: 100px 0 60px;
    }
    
    .what-is-lasik,
    .why-recovery,
    .timeline-section,
    .dos-donts,
    .special-care,
    .side-effects,
    .recovery-tips,
    .why-choose,
    .final-thoughts {
        padding: 60px 0;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Loading Animation */
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

.fade-in {
    animation: fadeInUp 0.6s ease-out;
}

/* Interactive Elements */
.interactive {
    cursor: pointer;
    transition: var(--transition);
}

.interactive:hover {
    transform: scale(1.05);
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--gray-light);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-color);
}
</style>
   <main>
        <!-- Hero Section -->
<section class="hero" style="background:#2a3f92; padding:60px 0; color:#fff;">
    <div class="container">
        <div class="hero-content" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:30px;">
            
            <!-- Left Text -->
            <div class="hero-text" style="flex:1; min-width:320px;">
                <h1 class="hero-title" style="font-size:36px; margin-bottom:15px;">
                    Life After LASIK: Do's and Don'ts for Faster Recovery
                </h1>
                <p class="hero-subtitle" style="font-size:18px; line-height:1.7; margin-bottom:25px; color:white;">
                    LASIK eye surgery has transformed the lives of millions worldwide, giving them the gift of clear vision without the hassle of glasses and contact lenses. 
                    At <strong>Brar Eye Hospital, Bathinda</strong>, we specialize in advanced vision correction procedures that combine safety, precision, and comfort.
                </p>

                <!-- Hero Buttons -->
                <div class="hero-buttons" style="display:flex; flex-wrap:wrap; gap:15px;">
                    
                    <!-- Recovery Guide -->
                    <a href="#recovery" 
                       style="background:#ff6b00; color:#fff; padding:14px 26px; border-radius:8px; font-size:18px; font-weight:bold; text-decoration:none;">
                       Recovery Guide
                    </a>

                    <!-- Book Consultation -->
                    <a href="contact-brar-eye-hospital-bathinda.php" 
                       style="background:#25d366; color:#fff; padding:14px 26px; border-radius:8px; font-size:18px; font-weight:bold; text-decoration:none;">
                       Book Consultation
                    </a>

                    <!-- Call Now -->
                    <a href="tel:7218272182" 
                       style="background:#e63946; color:#fff; padding:14px 26px; border-radius:8px; font-size:18px; font-weight:bold; text-decoration:none;">
                       Call Now
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="hero-image" style="flex:1; min-width:320px; text-align:center;">
                <img src="blogs images/lasik-hero.webp" alt="LASIK Eye Surgery" 
                     class="hero-img" style="max-width:100%; height:auto; border-radius:12px;">
            </div>
        </div>
    </div>
</section>

        <!-- Introduction -->
        <section class="intro" id="overview">
            <div class="container">
                <div class="intro-content">
                    <p class="intro-text">However, achieving perfect eyesight is not just about the surgery itself. The recovery phase plays an equally important role in ensuring long-lasting results. How you care for your eyes after LASIK can make the difference between a smooth recovery and unnecessary complications.</p>
                    <p class="intro-text">This detailed guide will walk you through the do's and don'ts after LASIK, covering recovery tips, sleeping positions, screen usage, and lifestyle adjustments. Whether you are preparing for LASIK or have just undergone the procedure, this guide will give you everything you need to know for a healthy and stress-free recovery.</p>
                </div>
            </div>
        </section>

        <!-- What is LASIK -->
        <section class="what-is-lasik">
            <div class="container">
                <div class="section-content">
                    <h2 class="section-title">What is LASIK Eye Surgery?</h2>
                    <div class="content-grid">
                        <div class="content-text">
                            <p>LASIK (Laser-Assisted In Situ Keratomileusis) is one of the most popular procedures for permanent vision correction. It works by reshaping the cornea with a precision laser, allowing light to focus correctly on the retina.</p>
                            
                            <h3>It effectively treats refractive errors such as:</h3>
                            <ul class="feature-list">
                                <li><strong>Myopia (Nearsightedness):</strong> Difficulty seeing distant objects.</li>
                                <li><strong>Hyperopia (Farsightedness):</strong> Difficulty seeing nearby objects.</li>
                                <li><strong>Astigmatism:</strong> Blurred or distorted vision due to irregular corneal shape.</li>
                            </ul>
                            
                            <p>At Brar Eye Hospital, we use cutting-edge laser technology that ensures:</p>
                            <ul class="benefit-list">
                                <li>High safety standards</li>
                                <li>Minimal discomfort</li>
                                <li>Quick healing</li>
                                <li>Excellent visual outcomes (many patients achieve 6/6 vision within weeks)</li>
                            </ul>
                        </div>
                        <div class="content-image">
                            <img src="blogs images\lasik-procedure.webp" alt="LASIK Procedure" class="section-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Recovery Matters -->
        <section class="why-recovery">
            <div class="container">
                <h2 class="section-title">Why Recovery Matters After LASIK</h2>
                <p class="section-intro">LASIK is quick (just 10–15 minutes per eye) and virtually painless, but the healing process requires discipline. Ignoring aftercare can cause issues like infections, dry eyes, or delayed vision clarity.</p>
                
                <div class="recovery-benefits">
                    <h3>Proper recovery ensures:</h3>
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon"></div>
                            <h4>Faster Healing</h4>
                            <p>Fewer complications and smoother recovery process</p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon"></div>
                            <h4>Reduced Irritation</h4>
                            <p>Less dryness and eye discomfort</p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon"></div>
                            <h4>Clearer Vision</h4>
                            <p>More stable and precise visual outcomes</p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon"></div>
                            <h4>Long-lasting Results</h4>
                            <p>Improved quality of life for years to come</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recovery Timeline -->
        <section class="timeline-section" id="recovery">
            <div class="container">
                <h2 class="section-title">LASIK Recovery Timeline – What to Expect</h2>
                <div class="timeline">
                    <div class="timeline-item active" onclick="showTimelineContent(0)">
                        <div class="timeline-marker">
                            <div class="timeline-icon"></div>
                        </div>
                        <div class="timeline-content">
                            <h3>First 24 Hours</h3>
                            <ul>
                                <li>Blurry or hazy vision is normal.</li>
                                <li>Mild irritation, dryness, or watery eyes may occur.</li>
                                <li>Rest and avoid touching or rubbing your eyes.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item" onclick="showTimelineContent(1)">
                        <div class="timeline-marker">
                            <div class="timeline-icon"></div>
                        </div>
                        <div class="timeline-content">
                            <h3>First Week</h3>
                            <ul>
                                <li>Vision becomes clearer and more stable.</li>
                                <li>Attend your first follow-up at Brar Eye Hospital.</li>
                                <li>Avoid swimming, gym workouts, eye makeup, and dusty environments.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item" onclick="showTimelineContent(2)">
                        <div class="timeline-marker">
                            <div class="timeline-icon"></div>
                        </div>
                        <div class="timeline-content">
                            <h3>First Month</h3>
                            <ul>
                                <li>Most patients report significant improvement in vision.</li>
                                <li>Dryness and light sensitivity decrease with regular eye drops.</li>
                                <li>Outdoor sunglasses are recommended for UV protection.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item" onclick="showTimelineContent(3)">
                        <div class="timeline-marker">
                            <div class="timeline-icon"></div>
                        </div>
                        <div class="timeline-content">
                            <h3>Three to Six Months</h3>
                            <ul>
                                <li>Vision stabilizes fully, including night vision.</li>
                                <li>Glare, halos, or mild dryness gradually disappear.</li>
                                <li>You enjoy the complete benefits of LASIK.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Do's and Don'ts -->
        <section class="dos-donts" id="dos-donts">
            <div class="container">
                <h2 class="section-title">Do's and Don'ts After LASIK Surgery</h2>
                <div class="dos-donts-grid">
                    <!-- Do's Section -->
                    <div class="dos-section">
                        <h3 class="dos-title">Do's After LASIK Surgery</h3>
                        <div class="dos-list">
                            <div class="do-item">
                                <h4>1. Follow Doctor's Instructions</h4>
                                <p>Every patient's eyes heal differently. Stick to the care plan your doctor provides.</p>
                            </div>
                            <div class="do-item">
                                <h4>2. Use Prescribed Eye Drops</h4>
                                <p>Artificial tears and medicated drops prevent infection, reduce irritation, and speed up healing.</p>
                            </div>
                            <div class="do-item">
                                <h4>3. Rest Your Eyes Often</h4>
                                <p>Especially in the first 48 hours. Limit reading, phone, and TV usage.</p>
                            </div>
                            <div class="do-item">
                                <h4>4. Wear Protective Eye Shields</h4>
                                <p>Especially while sleeping to prevent accidental rubbing.</p>
                            </div>
                            <div class="do-item">
                                <h4>5. Stay Hydrated & Eat Healthy</h4>
                                <p>Plenty of water + foods rich in Vitamin A (carrots, spinach), Vitamin C (oranges), and Omega-3 (flaxseeds, walnuts) = faster recovery.</p>
                            </div>
                            <div class="do-item">
                                <h4>6. Wear Sunglasses Outdoors</h4>
                                <p>Protect your eyes from UV rays, wind, and dust.</p>
                            </div>
                            <div class="do-item">
                                <h4>7. Attend All Follow-Up Appointments</h4>
                                <p>Regular checkups at Brar Eye Hospital help track your healing progress.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Don'ts Section -->
                    <div class="donts-section">
                        <h3 class="donts-title">Don'ts After LASIK Surgery</h3>
                        <div class="donts-list">
                            <div class="dont-item">
                                <h4>1. Don't Rub Your Eyes</h4>
                                <p>This is the biggest risk—it can disturb the corneal flap.</p>
                            </div>
                            <div class="dont-item">
                                <h4>2. Don't Skip Medications</h4>
                                <p>Missing drops increases the risk of dryness or infection.</p>
                            </div>
                            <div class="dont-item">
                                <h4>3. Don't Let Water Enter Your Eyes</h4>
                                <p>Avoid swimming, hot tubs, and direct shower spray for at least 2 weeks.</p>
                            </div>
                            <div class="dont-item">
                                <h4>4. Don't Use Eye Makeup or Creams</h4>
                                <p>For at least 7–10 days to avoid infections.</p>
                            </div>
                            <div class="dont-item">
                                <h4>5. Don't Drive Immediately</h4>
                                <p>Wait until your doctor confirms your vision is stable enough.</p>
                            </div>
                            <div class="dont-item">
                                <h4>6. Don't Overexert Yourself</h4>
                                <p>Avoid heavy workouts, contact sports, or bending forward too much for 2–4 weeks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Care Sections -->
        <section class="special-care">
            <div class="container">
                <div class="care-grid">
                    <div class="care-item">
                        <div class="care-icon"></div>
                        <h3>Best Sleeping Positions After LASIK</h3>
                        <ul>
                            <li><strong>On Your Back:</strong> Safest option, reduces the chance of touching your eyes.</li>
                            <li><strong>With Eye Shields:</strong> Recommended for the first week.</li>
                            <li><strong>Avoid Sleeping Face Down:</strong> It can pressurize and damage the healing cornea.</li>
                        </ul>
                    </div>
                    
                    <div class="care-item">
                        <div class="care-icon"></div>
                        <h3>Screen Usage After LASIK</h3>
                        <p>Screens are a part of everyday life, but after LASIK they should be used wisely:</p>
                        <ul>
                            <li>Limit screen time in the first week.</li>
                            <li>Follow the 20-20-20 Rule: Every 20 minutes, look at something 20 feet away for 20 seconds.</li>
                            <li>Ensure good lighting while using devices.</li>
                            <li>Blink frequently to avoid dryness.</li>
                            <li>Use lubricating drops if your eyes feel strained.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Side Effects -->
        <section class="side-effects">
            <div class="container">
                <h2 class="section-title">Common Side Effects After LASIK</h2>
                <p class="section-intro">These are usually temporary:</p>
                <div class="side-effects-grid">
                    <div class="side-effect-item">
                        <div class="side-effect-icon"></div>
                        <h4>Mild Dryness or Itching</h4>
                    </div>
                    <div class="side-effect-item">
                        <div class="side-effect-icon"></div>
                        <h4>Glare or Halos Around Lights</h4>
                    </div>
                    <div class="side-effect-item">
                        <div class="side-effect-icon"></div>
                        <h4>Sensitivity to Bright Light</h4>
                    </div>
                    <div class="side-effect-item">
                        <div class="side-effect-icon"></div>
                        <h4>Fluctuating Vision</h4>
                    </div>
                </div>
                <div class="side-effects-note">
                    <p><strong>Most resolve within weeks.</strong> If symptoms worsen, visit Brar Eye Hospital immediately.</p>
                </div>
            </div>
        </section>

        <!-- Recovery Tips -->
        <section class="recovery-tips" id="tips">
            <div class="container">
                <h2 class="section-title">Tips for Faster LASIK Recovery</h2>
                <div class="tips-grid">
                    <div class="tip-card">
                        <div class="tip-icon"></div>
                        <h4>Avoid Smoking & Alcohol</h4>
                        <p style="color:white;">They slow down healing</p>
                    </div>
                    <div class="tip-card">
                        <div class="tip-icon"></div>
                        <h4>Nutrient-Rich Diet</h4>
                        <p style="color:white;">For optimal eye health</p>
                    </div>
                    <div class="tip-card">
                        <div class="tip-icon"></div>
                        <h4>Avoid Dusty Areas</h4>
                        <p style="color:white;">Stay away from smoky or polluted environments</p>
                    </div>
                    <div class="tip-card">
                        <div class="tip-icon"></div>
                        <h4>Stay Patient</h4>
                        <p style="color:white;">Vision may take weeks to fully stabilize</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Brar Eye Hospital -->
        <section class="why-choose" id="contact">
            <div class="container">
                <h2 class="section-title">Why Choose Brar Eye Hospital for LASIK in Bathinda?</h2>
                <div class="choose-grid">
                    <div class="choose-item">
                        <div class="choose-icon"></div>
                        <h4>World-class Technology</h4>
                        <p>Latest femtosecond laser platforms</p>
                    </div>
                    <div class="choose-item">
                        <div class="choose-icon"></div>
                        <h4>Experienced Surgeons</h4>
                        <p>Thousands of successful procedures</p>
                    </div>
                    <div class="choose-item">
                        <div class="choose-icon"></div>
                        <h4>Personalized Care</h4>
                        <p>Tailored to your unique eyes</p>
                    </div>
                    <div class="choose-item">
                        <div class="choose-icon"></div>
                        <h4>Comprehensive Aftercare</h4>
                        <p>Complete support for safe recovery</p>
                    </div>
                </div>
                <div class="hospital-message">
                    <p><strong>At Brar Eye Hospital, we don't just improve vision—we help patients embrace life with new clarity and confidence.</strong></p>
                </div>
            </div>
        </section>

        <!-- Final Thoughts -->
<section class="final-thoughts" style="background:#f9fbff; padding:50px 0;">
    <div class="container" style="text-align:center;





You said:
complete code please 



2/2

ChatGPT said:
Bilkul 👍 main tumhe same code (icons/emoji hata ke) clean version deta hoon. Tum ise directly use kar sakte ho.

html
Copy code
<main>
        <!-- Hero Section -->
<section class="hero" style="background:#2a3f92; padding:60px 0; color:#fff;">
    <div class="container">
        <div class="hero-content" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:30px;">
            
            <!-- Left Text -->
            <div class="hero-text" style="flex:1; min-width:320px;">
                <h1 class="hero-title" style="font-size:36px; margin-bottom:15px;">
                    Life After LASIK: Do's and Don'ts for Faster Recovery
                </h1>
                <p class="hero-subtitle" style="font-size:18px; line-height:1.7; margin-bottom:25px; color:white;">
                    LASIK eye surgery has transformed the lives of millions worldwide, giving them the gift of clear vision without the hassle of glasses and contact lenses. 
                    At <strong>Brar Eye Hospital, Bathinda</strong>, we specialize in advanced vision correction procedures that combine safety, precision, and comfort.
                </p>

                <!-- Hero Buttons -->
                <div class="hero-buttons" style="display:flex; flex-wrap:wrap; gap:15px;">
                    
                    <!-- Recovery Guide -->
                    <a href="#recovery" 
                       style="background:#ff6b00; color:#fff; padding:14px 26px; border-radius:8px; font-size:18px; font-weight:bold; text-decoration:none;">
                       Recovery Guide
                    </a>

                    <!-- Book Consultation -->
                    <a href="contact-brar-eye-hospital-bathinda.php" 
                       style="background:#25d366; color:#fff; padding:14px 26px; border-radius:8px; font-size:18px; font-weight:bold; text-decoration:none;">
                       Book Consultation
                    </a>

                    <!-- Call Now -->
                    <a href="tel:7218272182" 
                       style="background:#e63946; color:#fff; padding:14px 26px; border-radius:8px; font-size:18px; font-weight:bold; text-decoration:none;">
                       Call Now
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="hero-image" style="flex:1; min-width:320px; text-align:center;">
                <img src="blogs images/lasik-hero.webp" alt="LASIK Eye Surgery" 
                     class="hero-img" style="max-width:100%; height:auto; border-radius:12px;">
            </div>
        </div>
    </div>
</section>

        <!-- Introduction -->
        <section class="intro" id="overview">
            <div class="container">
                <div class="intro-content">
                    <p class="intro-text">However, achieving perfect eyesight is not just about the surgery itself. The recovery phase plays an equally important role in ensuring long-lasting results. How you care for your eyes after LASIK can make the difference between a smooth recovery and unnecessary complications.</p>
                    <p class="intro-text">This detailed guide will walk you through the do's and don'ts after LASIK, covering recovery tips, sleeping positions, screen usage, and lifestyle adjustments. Whether you are preparing for LASIK or have just undergone the procedure, this guide will give you everything you need to know for a healthy and stress-free recovery.</p>
                </div>
            </div>
        </section>

        <!-- What is LASIK -->
        <section class="what-is-lasik">
            <div class="container">
                <div class="section-content">
                    <h2 class="section-title">What is LASIK Eye Surgery?</h2>
                    <div class="content-grid">
                        <div class="content-text">
                            <p>LASIK (Laser-Assisted In Situ Keratomileusis) is one of the most popular procedures for permanent vision correction. It works by reshaping the cornea with a precision laser, allowing light to focus correctly on the retina.</p>
                            
                            <h3>It effectively treats refractive errors such as:</h3>
                            <ul class="feature-list">
                                <li><strong>Myopia (Nearsightedness):</strong> Difficulty seeing distant objects.</li>
                                <li><strong>Hyperopia (Farsightedness):</strong> Difficulty seeing nearby objects.</li>
                                <li><strong>Astigmatism:</strong> Blurred or distorted vision due to irregular corneal shape.</li>
                            </ul>
                            
                            <p>At Brar Eye Hospital, we use cutting-edge laser technology that ensures:</p>
                            <ul class="benefit-list">
                                <li>High safety standards</li>
                                <li>Minimal discomfort</li>
                                <li>Quick healing</li>
                                <li>Excellent visual outcomes (many patients achieve 6/6 vision within weeks)</li>
                            </ul>
                        </div>
                        <div class="content-image">
                            <img src="blogs images\lasik-procedure.webp" alt="LASIK Procedure" class="section-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Recovery Matters -->
        <section class="why-recovery">
            <div class="container">
                <h2 class="section-title">Why Recovery Matters After LASIK</h2>
                <p class="section-intro">LASIK is quick (just 10–15 minutes per eye) and virtually painless, but the healing process requires discipline. Ignoring aftercare can cause issues like infections, dry eyes, or delayed vision clarity.</p>
                
                <div class="recovery-benefits">
                    <h3>Proper recovery ensures:</h3>
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <h4>Faster Healing</h4>
                            <p>Fewer complications and smoother recovery process</p>
                        </div>
                        <div class="benefit-card">
                            <h4>Reduced Irritation</h4>
                            <p>Less dryness and eye discomfort</p>
                        </div>
                        <div class="benefit-card">
                            <h4>Clearer Vision</h4>
                            <p>More stable and precise visual outcomes</p>
                        </div>
                        <div class="benefit-card">
                            <h4>Long-lasting Results</h4>
                            <p>Improved quality of life for years to come</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recovery Timeline -->
        <section class="timeline-section" id="recovery">
            <div class="container">
                <h2 class="section-title">LASIK Recovery Timeline – What to Expect</h2>
                <div class="timeline">
                    <div class="timeline-item active" onclick="showTimelineContent(0)">
                        <div class="timeline-marker">
                        </div>
                        <div class="timeline-content">
                            <h3>First 24 Hours</h3>
                            <ul>
                                <li>Blurry or hazy vision is normal.</li>
                                <li>Mild irritation, dryness, or watery eyes may occur.</li>
                                <li>Rest and avoid touching or rubbing your eyes.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item" onclick="showTimelineContent(1)">
                        <div class="timeline-marker">
                        </div>
                        <div class="timeline-content">
                            <h3>First Week</h3>
                            <ul>
                                <li>Vision becomes clearer and more stable.</li>
                                <li>Attend your first follow-up at Brar Eye Hospital.</li>
                                <li>Avoid swimming, gym workouts, eye makeup, and dusty environments.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item" onclick="showTimelineContent(2)">
                        <div class="timeline-marker">
                        </div>
                        <div class="timeline-content">
                            <h3>First Month</h3>
                            <ul>
                                <li>Most patients report significant improvement in vision.</li>
                                <li>Dryness and light sensitivity decrease with regular eye drops.</li>
                                <li>Outdoor sunglasses are recommended for UV protection.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="timeline-item" onclick="showTimelineContent(3)">
                        <div class="timeline-marker">
                        </div>
                        <div class="timeline-content">
                            <h3>Three to Six Months</h3>
                            <ul>
                                <li>Vision stabilizes fully, including night vision.</li>
                                <li>Glare, halos, or mild dryness gradually disappear.</li>
                                <li>You enjoy the complete benefits of LASIK.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Do's and Don'ts -->
        <section class="dos-donts" id="dos-donts">
            <div class="container">
                <h2 class="section-title">Do's and Don'ts After LASIK Surgery</h2>
                <div class="dos-donts-grid">
                    <!-- Do's Section -->
                    <div class="dos-section">
                        <h3 class="dos-title">Do's After LASIK Surgery</h3>
                        <div class="dos-list">
                            <div class="do-item">
                                <h4>1. Follow Doctor's Instructions</h4>
                                <p>Every patient's eyes heal differently. Stick to the care plan your doctor provides.</p>
                            </div>
                            <div class="do-item">
                                <h4>2. Use Prescribed Eye Drops</h4>
                                <p>Artificial tears and medicated drops prevent infection, reduce irritation, and speed up healing.</p>
                            </div>
                            <div class="do-item">
                                <h4>3. Rest Your Eyes Often</h4>
                                <p>Especially in the first 48 hours. Limit reading, phone, and TV usage.</p>
                            </div>
                            <div class="do-item">
                                <h4>4. Wear Protective Eye Shields</h4>
                                <p>Especially while sleeping to prevent accidental rubbing.</p>
                            </div>
                            <div class="do-item">
                                <h4>5. Stay Hydrated & Eat Healthy</h4>
                                <p>Plenty of water + foods rich in Vitamin A (carrots, spinach), Vitamin C (oranges), and Omega-3 (flaxseeds, walnuts) = faster recovery.</p>
                            </div>
                            <div class="do-item">
                                <h4>6. Wear Sunglasses Outdoors</h4>
                                <p>Protect your eyes from UV rays, wind, and dust.</p>
                            </div>
                            <div class="do-item">
                                <h4>7. Attend All Follow-Up Appointments</h4>
                                <p>Regular checkups at Brar Eye Hospital help track your healing progress.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Don'ts Section -->
                    <div class="donts-section">
                        <h3 class="donts-title">Don'ts After LASIK Surgery</h3>
                        <div class="donts-list">
                            <div class="dont-item">
                                <h4>1. Don't Rub Your Eyes</h4>
                                <p>This is the biggest risk—it can disturb the corneal flap.</p>
                            </div>
                            <div class="dont-item">
                                <h4>2. Don't Skip Medications</h4>
                                <p>Missing drops increases the risk of dryness or infection.</p>
                            </div>
                            <div class="dont-item">
                                <h4>3. Don't Let Water Enter Your Eyes</h4>
                                <p>Avoid swimming, hot tubs, and direct shower spray for at least 2 weeks.</p>
                            </div>
                            <div class="dont-item">
                                <h4>4. Don't Use Eye Makeup or Creams</h4>
                                <p>For at least 7–10 days to avoid infections.</p>
                            </div>
                            <div class="dont-item">
                                <h4>5. Don't Drive Immediately</h4>
                                <p>Wait until your doctor confirms your vision is stable enough.</p>
                            </div>
                            <div class="dont-item">
                                <h4>6. Don't Overexert Yourself</h4>
                                <p>Avoid heavy workouts, contact sports, or bending forward too much for 2–4 weeks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Care Sections -->
        <section class="special-care">
            <div class="container">
                <div class="care-grid">
                    <div class="care-item">
                        <h3>Best Sleeping Positions After LASIK</h3>
                        <ul>
                            <li><strong>On Your Back:</strong> Safest option, reduces the chance of touching your eyes.</li>
                            <li><strong>With Eye Shields:</strong> Recommended for the first week.</li>
                            <li><strong>Avoid Sleeping Face Down:</strong> It can pressurize and damage the healing cornea.</li>
                        </ul>
                    </div>
                    
                    <div class="care-item">
                        <h3>Screen Usage After LASIK</h3>
                        <p>Screens are a part of everyday life, but after LASIK they should be used wisely:</p>
                        <ul>
                            <li>Limit screen time in the first week.</li>
                            <li>Follow the 20-20-20 Rule: Every 20 minutes, look at something 20 feet away for 20 seconds.</li>
                            <li>Ensure good lighting while using devices.</li>
                            <li>Blink frequently to avoid dryness.</li>
                            <li>Use lubricating drops if your eyes feel strained.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Side Effects -->
        <section class="side-effects">
            <div class="container">
                <h2 class="section-title">Common Side Effects After LASIK</h2>
                <p class="section-intro">These are usually temporary:</p>
                <div class="side-effects-grid">
                    <div class="side-effect-item">
                        <h4>Mild Dryness or Itching</h4>
                    </div>
                    <div class="side-effect-item">
                        <h4>Glare or Halos Around Lights</h4>
                    </div>
                    <div class="side-effect-item">
                        <h4>Sensitivity to Bright Light</h4>
                    </div>
                    <div class="side-effect-item">
                        <h4>Fluctuating Vision</h4>
                    </div>
                </div>
                <div class="side-effects-note">
                    <p><strong>Most resolve within weeks.</strong> If symptoms worsen, visit Brar Eye Hospital immediately.</p>
                </div>
            </div>
        </section>

        <!-- Recovery Tips -->
        <section class="recovery-tips" id="tips">
            <div class="container">
                <h2 class="section-title">Tips for Faster LASIK Recovery</h2>
                <div class="tips-grid">
                    <div class="tip-card">
                        <h4>Avoid Smoking & Alcohol</h4>
                        <p style="color:white;">They slow down healing</p>
                    </div>
                    <div class="tip-card">
                        <h4>Nutrient-Rich Diet</h4>
                        <p style="color:white;">For optimal eye health</p>
                    </div>
                    <div class="tip-card">
                        <h4>Avoid Dusty Areas</h4>
                        <p style="color:white;">Stay away from smoky or polluted environments</p>
                    </div>
                    <div class="tip-card">
                        <h4>Stay Patient</h4>
                        <p style="color:white;">Vision may take weeks to fully stabilize</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Brar Eye Hospital -->
        <section class="why-choose" id="contact">
            <div class="container">
                <h2 class="section-title">Why Choose Brar Eye Hospital for LASIK in Bathinda?</h2>
                <div class="choose-grid">
                    <div class="choose-item">
                        <h4>World-class Technology</h4>
                        <p>Latest femtosecond laser platforms</p>
                    </div>
                    <div class="choose-item">
                        <h4>Experienced Surgeons</h4>
                        <p>Thousands of successful procedures</p>
                    </div>
                    <div class="choose-item">
                        <h4>Personalized Care</h4>
                        <p>Tailored to your unique eyes</p>
                    </div>
                    <div class="choose-item">
                        <h4>Comprehensive Aftercare</h4>
                        <p>Complete support for safe recovery</p>
                    </div>
                </div>
                <div class="hospital-message">
                    <p><strong>At Brar Eye Hospital, we don't just improve vision—we help patients embrace life with new clarity and confidence.</strong></p>
                </div>
            </div>
        </section>


        <!-- Final Thoughts -->
<section class="final-thoughts" style="background:#f9fbff; padding:50px 0;">
    <div class="container" style="text-align:center; max-width:800px; margin:auto;">
        <h2 class="section-title" style="color:#2a3f92; font-size:28px; margin-bottom:20px;">Final Thoughts</h2>
        <div class="final-content" style="font-size:18px; line-height:1.7; color:#333;">
            <p>Life after LASIK is brighter, sharper, and more convenient. But the journey to crystal-clear vision doesn't end in the operating room—it continues in the way you care for your eyes during recovery. By following these simple do's and don'ts, adopting safe sleeping habits, and controlling screen time, you can ensure smooth healing and long-term results.</p>
            
            <p>If you're considering LASIK or have questions about recovery, visit <strong>Brar Eye Hospital, Bathinda</strong>—where advanced technology meets compassionate care.</p>
            
            <div class="cta-section" style="margin-top:25px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <!-- Contact Form Button -->
                <a href="contact-brar-eye-hospital-bathinda.php" class="btn btn-primary btn-large" 
                   style="background:#2a3f92; color:#fff; padding:14px 28px; border-radius:8px; text-decoration:none; font-size:18px; font-weight:bold;">
                   Schedule Consultation
                </a>
                
                <!-- Call Now Button -->
                <a href="tel:7218272182" class="btn btn-secondary btn-large" 
                   style="background:#ff6b00; color:#fff; padding:14px 28px; border-radius:8px; text-decoration:none; font-size:18px; font-weight:bold;">
                   Call Now: 72182-72182
                </a>
            </div>
        </div>  
    </div>
</section>

    </main>

    

    <script>
        // LASIK Recovery Guide JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on nav links
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
    }
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80; // Account for fixed header
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Header background change on scroll
    const header = document.querySelector('.header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = '#ffffff';
            header.style.backdropFilter = 'none';
        }
    });
    
    // Timeline interaction
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            timelineItems.forEach(timelineItem => {
                timelineItem.classList.remove('active');
            });
            // Add active class to clicked item
            this.classList.add('active');
            
            // Add animation effect
            this.style.transform = 'translateX(15px)';
            setTimeout(() => {
                this.style.transform = 'translateX(10px)';
            }, 200);
        });
    });
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.benefit-card, .do-item, .dont-item, .tip-card, .choose-item, .care-item, .side-effect-item');
    animateElements.forEach(el => {
        observer.observe(el);
    });
    
    // Counter animation for stats
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            element.textContent = Math.floor(start);
            
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            }
        }, 16);
    }
    
    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero');
        if (hero) {
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        }
    });
    
    // Form validation and interaction
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success message
            const successMessage = document.createElement('div');
            successMessage.className = 'success-message';
            successMessage.innerHTML = `
                <div style="background: #03c0b4; color: white; padding: 1rem; border-radius: 8px; margin: 1rem 0; text-align: center;">
                    ✅ Thank you! We'll contact you soon to schedule your consultation.
                </div>
            `;
            
            form.appendChild(successMessage);
            form.reset();
            
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        });
    });
    
    // Interactive tooltips for recovery tips
    const tipCards = document.querySelectorAll('.tip-card');
    tipCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.2)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-5px) scale(1)';
            this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.15)';
        });
    });
    
    // Progress indicator
    function updateProgressIndicator() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        
        let progressBar = document.getElementById('progressBar');
        if (!progressBar) {
            progressBar = document.createElement('div');
            progressBar.id = 'progressBar';
            progressBar.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 4px;
                background: linear-gradient(90deg, #03c0b4, #f17732);
                z-index: 9999;
                transition: width 0.3s ease;
            `;
            document.body.appendChild(progressBar);
        }
        
        progressBar.style.width = scrolled + '%';
    }
    
    window.addEventListener('scroll', updateProgressIndicator);
    
    // Dark/Light mode toggle
    function createThemeToggle() {
        const toggleButton = document.createElement('button');
        toggleButton.innerHTML = '🌙';
        toggleButton.style.cssText = `
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: none;
            background: #03c0b4;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            transition: all 0.3s ease;
        `;
        
        toggleButton.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            this.innerHTML = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
        });
        
        toggleButton.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.boxShadow = '0 6px 16px rgba(0, 0, 0, 0.2)';
        });
        
        toggleButton.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        });
        
        document.body.appendChild(toggleButton);
    }
    
    createThemeToggle();
    
    // Add CSS for dark mode
    const darkModeStyles = `
        .dark-mode {
            --dark-color: #f8f9fa;
            --light-color: #1a1a1a;
            --gray-light: #2d2d2d;
            --gray-medium: #cccccc;
        }
        
        .dark-mode .header {
            background: rgba(26, 26, 26, 0.95) !important;
            color: #f8f9fa;
        }
        
        .dark-mode .nav-menu a {
            color: #f8f9fa;
        }
        
        .dark-mode .benefit-card,
        .dark-mode .do-item,
        .dark-mode .dont-item,
        .dark-mode .choose-item,
        .dark-mode .side-effect-item {
            background: #2d2d2d;
            color: #f8f9fa;
        }
    `;
    
    const styleSheet = document.createElement('style');
    styleSheet.textContent = darkModeStyles;
    document.head.appendChild(styleSheet);
});

// Utility functions
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        const offsetTop = element.offsetTop - 80;
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}

function showTimelineContent(index) {
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, i) => {
        if (i === index) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

function contactHospital() {
    // Simulate contact form modal or redirect
    const modal = document.createElement('div');
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000;
    `;
    
    modal.innerHTML = `
        <div style="background: white; padding: 3rem; border-radius: 16px; max-width: 500px; width: 90%; text-align: center;">
            <h3 style="color: #03c0b4; margin-bottom: 1.5rem;">Schedule Your Consultation</h3>
            <form id="consultationForm">
                <div style="margin-bottom: 1rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Name:</label>
                    <input type="text" required style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                </div>
                <div style="margin-bottom: 1rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Phone:</label>
                    <input type="tel" required style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                </div>
                <div style="margin-bottom: 1rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email:</label>
                    <input type="email" required style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                </div>
                <div style="margin-bottom: 2rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message:</label>
                    <textarea rows="3" style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem; resize: vertical;"></textarea>
                </div>
                <div style="display: flex; gap: 1rem; justify-content: center;">
                    <button type="submit" style="background: #03c0b4; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; cursor: pointer; font-weight: 600;">Send Message</button>
                    <button type="button" onclick="this.closest('.modal').remove()" style="background: #f17732; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; cursor: pointer; font-weight: 600;">Close</button>
                </div>
            </form>
        </div>
    `;
    
    modal.className = 'modal';
    document.body.appendChild(modal);
    
    // Handle form submission
    const form = modal.querySelector('#consultationForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! We will contact you within 24 hours to schedule your consultation.');
        modal.remove();
    });
    
    // Close on backdrop click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

function callHospital() {
    // Simulate phone call action
    const phoneNumber = '+91-1234-567890'; // Replace with actual number
    if (confirm(`Call Brar Eye Hospital at ${phoneNumber}?`)) {
        window.location.href = `tel:${phoneNumber}`;
    }
}
    </script>

<?php include 'footer.php'; ?>