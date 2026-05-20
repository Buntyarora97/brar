<?php
// lasik-surgery-punjab.php

$pageTitle = "LASIK Laser Eye Surgery in Punjab | Advanced Vision Care";
$pageDescription = "Looking for LASIK laser eye surgery in Punjab? Get advanced vision correction treatment with expert eye specialists and modern laser technology.";
$pageKeywords = "LASIK surgery Punjab, laser eye surgery Punjab, vision correction Punjab, LASIK treatment Punjab";

include('header.php');
?>

<style>
/* Punjab LASIK Page Styles */
.punjab-lasik-hero {
    background: linear-gradient(135deg, #1dd2c3 0%, #15a396 100%);
    color: #fff;
    padding: 80px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.punjab-lasik-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='40' fill='none' stroke='rgba(255,255,255,0.1)' stroke-width='2'/%3E%3C/svg%3E") repeat;
    background-size: 100px;
    opacity: 0.3;
}

.punjab-lasik-hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}

.punjab-lasik-hero h1 {
    font-size: 2.8rem;
    margin-bottom: 20px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.punjab-lasik-hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.95;
}

.punjab-lasik-btn {
    display: inline-block;
    background-color: #f17732;
    color: #fff;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(241, 119, 50, 0.4);
}

.punjab-lasik-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(241, 119, 50, 0.6);
    background-color: #e56a2a;
}

.punjab-lasik-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.punjab-lasik-section {
    padding: 60px 0;
}

.punjab-lasik-title {
    color: #1dd2c3;
    font-size: 2.2rem;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
    padding-bottom: 15px;
}

.punjab-lasik-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background-color: #f17732;
    border-radius: 2px;
}

.punjab-lasik-intro-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
    margin-top: 40px;
}

.punjab-lasik-text p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 20px;
}

.punjab-lasik-img-wrap {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.punjab-lasik-img-wrap img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.punjab-lasik-img-wrap:hover img {
    transform: scale(1.05);
}

.punjab-lasik-badge {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: #f17732;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 0.9rem;
}

.punjab-lasik-box {
    background-color: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-top: 30px;
    border-left: 5px solid #1dd2c3;
}

.punjab-lasik-box h3 {
    color: #1dd2c3;
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.punjab-lasik-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 30px;
}

.punjab-lasik-card {
    background: linear-gradient(135deg, #1dd2c3 0%, #17b8a8 100%);
    color: #fff;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    transition: transform 0.3s ease;
}

.punjab-lasik-card:hover {
    transform: translateY(-5px);
}

.punjab-lasik-card h4 {
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.punjab-lasik-white {
    background-color: #fff;
}

.punjab-lasik-light {
    background-color: #f8f9fa;
}

.punjab-lasik-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.punjab-lasik-problem-card {
    background: linear-gradient(135deg, rgba(29, 210, 195, 0.1) 0%, rgba(241, 119, 50, 0.1) 100%);
    padding: 35px;
    border-radius: 20px;
    border: 2px solid #1dd2c3;
    transition: all 0.3s ease;
}

.punjab-lasik-problem-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.punjab-lasik-problem-card h3 {
    color: #1dd2c3;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.punjab-lasik-benefit-card {
    background-color: #fff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #f17732;
    transition: all 0.3s ease;
}

.punjab-lasik-benefit-card:hover {
    transform: translateX(10px);
}

.punjab-lasik-benefit-card h3 {
    color: #f17732;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.punjab-lasik-list {
    list-style: none;
}

.punjab-lasik-list li {
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.1rem;
}

.punjab-lasik-list li::before {
    content: '✓';
    width: 30px;
    height: 30px;
    background-color: #1dd2c3;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}

.punjab-lasik-img {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.punjab-lasik-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.punjab-lasik-steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-top: 40px;
}

.punjab-lasik-step {
    background-color: #f8f9fa;
    padding: 30px 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.punjab-lasik-step:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(241, 119, 50, 0.2);
}

.punjab-lasik-step-num {
    width: 50px;
    height: 50px;
    background-color: #f17732;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 20px;
}

.punjab-lasik-step h3 {
    color: #f17732;
    font-size: 1rem;
    margin-bottom: 10px;
}

.punjab-lasik-step p {
    font-size: 0.9rem;
    color: #6c757d;
    line-height: 1.5;
}

.punjab-lasik-symptoms {
    background-color: #fff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    border-left: 5px solid #f17732;
}

.punjab-lasik-precautions {
    background-color: #fff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #1dd2c3;
}

.punjab-lasik-dot-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-top: 20px;
    list-style: none;
}

.punjab-lasik-dot-list li {
    padding: 10px 0;
    padding-left: 25px;
    position: relative;
    color: #444;
}

.punjab-lasik-dot-list li::before {
    content: '•';
    color: #f17732;
    font-size: 1.5rem;
    position: absolute;
    left: 0;
    top: -5px;
}

.punjab-lasik-check-list {
    list-style: none;
    margin-top: 20px;
}

.punjab-lasik-check-list li {
    padding: 12px 0;
    padding-left: 30px;
    position: relative;
    color: #444;
}

.punjab-lasik-check-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #1dd2c3;
    font-weight: bold;
    font-size: 1.2rem;
}

.punjab-lasik-cost {
    background: linear-gradient(135deg, #1dd2c3 0%, #15a396 100%);
    color: #fff;
    text-align: center;
}

.punjab-lasik-cost .punjab-lasik-title {
    color: #fff;
}

.punjab-lasik-cost .punjab-lasik-title::after {
    background-color: #fff;
}

.punjab-lasik-price {
    font-size: 3rem;
    font-weight: 700;
    margin: 30px 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

.punjab-lasik-factors {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 40px;
    text-align: left;
}

.punjab-lasik-factor {
    background-color: rgba(255,255,255,0.2);
    padding: 25px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
}

.punjab-lasik-factor h4 {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.punjab-lasik-type-card {
    background-color: #f8f9fa;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-top: 4px solid #1dd2c3;
    transition: all 0.3s ease;
}

.punjab-lasik-type-card:hover {
    transform: translateY(-10px);
}

.punjab-lasik-type-card.featured {
    border-top-color: #f17732;
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1) 0%, rgba(255,255,255,0.9) 100%);
}

.punjab-lasik-type-card h3 {
    color: #1dd2c3;
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.punjab-lasik-type-card.featured h3 {
    color: #f17732;
}

.punjab-lasik-why-card {
    background-color: #fff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #f17732;
    transition: all 0.3s ease;
}

.punjab-lasik-why-card:hover {
    transform: translateX(10px);
}

.punjab-lasik-why-card h3 {
    color: #f17732;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.punjab-lasik-faq-wrap {
    max-width: 900px;
    margin: 40px auto 0;
}

.punjab-lasik-faq {
    background-color: #fff;
    margin-bottom: 20px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.punjab-lasik-faq-q {
    padding: 25px 30px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    font-size: 1.1rem;
    color: #1a1a1a;
    transition: all 0.3s ease;
}

.punjab-lasik-faq-q:hover {
    color: #1dd2c3;
}

.punjab-lasik-faq-q::after {
    content: '+';
    font-size: 1.5rem;
    color: #f17732;
    transition: transform 0.3s ease;
}

.punjab-lasik-faq.active .punjab-lasik-faq-q::after {
    transform: rotate(45deg);
}

.punjab-lasik-faq-a {
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
    color: #6c757d;
}

.punjab-lasik-faq.active .punjab-lasik-faq-a {
    padding: 0 30px 25px;
    max-height: 200px;
}

.punjab-lasik-cta {
    background: linear-gradient(135deg, #f17732 0%, #d65f20 100%);
    color: #fff;
    text-align: center;
    padding: 80px 20px;
}

.punjab-lasik-cta h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.punjab-lasik-cta p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.punjab-lasik-btn-white {
    display: inline-block;
    background-color: #fff;
    color: #f17732;
    padding: 18px 50px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.punjab-lasik-btn-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.punjab-lasik-contact-info {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin-top: 40px;
    flex-wrap: wrap;
}

.punjab-lasik-contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.2rem;
}

.punjab-lasik-icon {
    width: 50px;
    height: 50px;
    background-color: #1dd2c3;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
}

.punjab-lasik-contact-item a {
    color: #1a1a1a;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.punjab-lasik-contact-item a:hover {
    color: #1dd2c3;
}

@media (max-width: 968px) {
    .punjab-lasik-intro-wrap,
    .punjab-lasik-eligibility-wrap {
        grid-template-columns: 1fr;
    }
    
    .punjab-lasik-grid-3,
    .punjab-lasik-grid-2,
    .punjab-lasik-factors {
        grid-template-columns: 1fr;
    }
    
    .punjab-lasik-steps {
        grid-template-columns: repeat(3, 1fr);
    }
    
    .punjab-lasik-dot-list {
        grid-template-columns: 1fr;
    }
    
    .punjab-lasik-hero h1 {
        font-size: 2rem;
    }
}

@media (max-width: 600px) {
    .punjab-lasik-steps {
        grid-template-columns: 1fr;
    }
    
    .punjab-lasik-hero h1 {
        font-size: 1.8rem;
    }
    
    .punjab-lasik-title {
        font-size: 1.8rem;
    }
    
    .punjab-lasik-price {
        font-size: 2rem;
    }
}

html {
    scroll-behavior: smooth;
}
</style>

<!-- Hero Section -->
<section class="punjab-lasik-hero">
    <div class="punjab-lasik-hero-content">
        <h1>LASIK Laser Eye Surgery in Punjab</h1>
        <p>Advanced laser technology to remove glasses permanently. Safe, quick recovery, and expert eye specialists for clear vision across Punjab.</p>
        <a href="#contact" class="punjab-lasik-btn">Book Free Consultation</a>
    </div>
</section>

<!-- Introduction Section -->
<section class="punjab-lasik-section punjab-lasik-white">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Freedom From Glasses</h2>
        <div class="punjab-lasik-intro-wrap">
            <div class="punjab-lasik-text">
                <p>Clear vision is essential for performing everyday activities comfortably. However, many people across Punjab suffer from refractive vision problems and rely on glasses or contact lenses for years. <strong>LASIK laser eye surgery in Punjab</strong> offers a modern and effective solution to correct vision permanently.</p>
                
                <p>LASIK is one of the most widely performed vision correction procedures worldwide. With the help of advanced laser technology, eye specialists reshape the cornea to improve the way light focuses on the retina.</p>
                
                <p>Patients who undergo <strong>LASIK surgery in Punjab</strong> often experience significant improvement in their vision within a short period of time. The procedure is quick, minimally invasive, and allows patients to return to normal activities within a few days.</p>
                
                <p>If you want to reduce or eliminate your dependence on glasses or contact lenses, <strong>LASIK surgery</strong> can be a reliable option for achieving long-term visual clarity.</p>
            </div>
            <div class="punjab-lasik-img-wrap">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&h=600&fit=crop" alt="LASIK Eye Surgery Punjab">
                <div class="punjab-lasik-badge">Quick 15 Min Procedure</div>
            </div>
        </div>
    </div>
</section>

<!-- What is LASIK Section -->
<section class="punjab-lasik-section punjab-lasik-light">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">What is LASIK Laser Eye Surgery?</h2>
        <div class="punjab-lasik-box">
            <h3>Modern Vision Correction Technology</h3>
            <p style="margin-bottom: 20px; color: #444; line-height: 1.8;">LASIK stands for <strong>Laser-Assisted In Situ Keratomileusis</strong>, a modern laser-based surgical procedure used to correct refractive vision problems.</p>
            
            <p style="margin-bottom: 20px; color: #444; line-height: 1.8;">The surgery works by reshaping the cornea so that light entering the eye focuses correctly on the retina. This helps improve vision and reduce dependence on glasses or contact lenses.</p>
            
            <p style="color: #444; line-height: 1.8;">The entire procedure usually takes <strong>10 to 15 minutes</strong>, and most patients experience noticeable vision improvement within 24 hours after surgery.</p>
        </div>

        <p style="text-align: center; margin: 30px 0; color: #444; font-size: 1.1rem; font-weight: 600;">LASIK is commonly used to treat:</p>

        <div class="punjab-lasik-grid-3">
            <div class="punjab-lasik-card">
                <h4>Myopia</h4>
                <p>Near-sightedness</p>
            </div>
            <div class="punjab-lasik-card">
                <h4>Hyperopia</h4>
                <p>Far-sightedness</p>
            </div>
            <div class="punjab-lasik-card">
                <h4>Astigmatism</h4>
                <p>Irregular cornea shape</p>
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">Modern laser technologies make LASIK one of the most <strong>accurate and safest</strong> vision correction procedures available today.</p>
    </div>
</section>

<!-- Vision Problems Section -->
<section class="punjab-lasik-section punjab-lasik-white">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Vision Problems Treated With LASIK</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">LASIK surgery is recommended for people who suffer from refractive vision problems.</p>

        <div class="punjab-lasik-grid-3">
            <div class="punjab-lasik-problem-card">
                <h3>Myopia (Near-Sightedness)</h3>
                <p style="color: #444; line-height: 1.8;">Myopia makes distant objects appear blurry. LASIK reshapes the cornea to improve distance vision.</p>
            </div>

            <div class="punjab-lasik-problem-card">
                <h3>Hyperopia (Far-Sightedness)</h3>
                <p style="color: #444; line-height: 1.8;">People with hyperopia struggle to see nearby objects clearly. LASIK surgery corrects the corneal shape to improve focus.</p>
            </div>

            <div class="punjab-lasik-problem-card">
                <h3>Astigmatism</h3>
                <p style="color: #444; line-height: 1.8;">Astigmatism occurs when the cornea has an irregular shape. LASIK smooths the cornea to improve visual clarity.</p>
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">People experiencing these conditions can benefit from <strong>laser eye surgery in Punjab</strong> after a detailed eye examination.</p>
    </div>
</section>

<!-- Benefits Section -->
<section class="punjab-lasik-section" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Benefits of LASIK Eye Surgery</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">LASIK surgery has become extremely popular because of its numerous benefits.</p>

        <div class="punjab-lasik-grid-2">
            <div class="punjab-lasik-benefit-card">
                <h3>Freedom From Glasses</h3>
                <p style="color: #444; line-height: 1.8;">One of the biggest advantages of LASIK surgery is the ability to reduce or eliminate dependence on glasses or contact lenses. Many patients achieve <strong>20/20 vision</strong> or better after the procedure.</p>
            </div>

            <div class="punjab-lasik-benefit-card">
                <h3>Quick and Painless Procedure</h3>
                <p style="color: #444; line-height: 1.8;">The surgery is very quick and usually takes <strong>less than 15 minutes</strong> for both eyes. Local anesthetic eye drops are used to ensure the procedure remains comfortable.</p>
            </div>

            <div class="punjab-lasik-benefit-card">
                <h3>Fast Recovery</h3>
                <p style="color: #444; line-height: 1.8;">Most patients notice improved vision within <strong>24 hours</strong> and can resume daily activities within 1–2 days.</p>
            </div>

            <div class="punjab-lasik-benefit-card">
                <h3>Long-Term Results & Improved Quality of Life</h3>
                <p style="color: #444; line-height: 1.8;">LASIK offers long-lasting vision correction, allowing patients to enjoy clear vision for many years. Patients often report improved confidence and convenience for activities such as <strong>driving, sports, reading, and traveling</strong>.</p>
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">However, vision problems caused by aging may require different treatments. Patients with age-related vision problems may also benefit from advanced <strong>cataract surgery treatments</strong> available at our eye hospital.</p>
    </div>
</section>

<!-- Eligibility Section -->
<section class="punjab-lasik-section punjab-lasik-light">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Who is Eligible for LASIK Surgery?</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">Not everyone is suitable for LASIK surgery. A detailed eye examination is necessary to determine eligibility.</p>

        <div class="punjab-lasik-eligibility-wrap">
            <div>
                <p style="margin-bottom: 20px; color: #444; font-size: 1.1rem;">Generally, ideal candidates for <strong>LASIK laser eye surgery in Punjab</strong> meet the following criteria:</p>
                <ul class="punjab-lasik-list">
                    <li>Age above 18 years</li>
                    <li>Stable eye power for at least one year</li>
                    <li>Healthy cornea</li>
                    <li>No severe eye diseases</li>
                    <li>Not pregnant or breastfeeding</li>
                </ul>

                <p style="margin-top: 30px; color: #444; font-size: 1.1rem;">Eye specialists perform several diagnostic tests before recommending <strong>LASIK treatment</strong>. These tests evaluate:</p>
                <ul class="punjab-lasik-list" style="margin-top: 15px;">
                    <li>Corneal thickness</li>
                    <li>Eye power</li>
                    <li>Corneal curvature</li>
                    <li>Overall eye health</li>
                </ul>

                <p style="margin-top: 30px; color: #444; font-size: 1.1rem;">If LASIK is not suitable, doctors may suggest alternative procedures such as <strong>SMILE eye surgery</strong> or <strong>PRK vision correction</strong>.</p>
            </div>

            <div class="punjab-lasik-img">
                <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=800&h=600&fit=crop" alt="LASIK Eligibility Check Punjab">
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">If you are unsure about your eye health, it is recommended to schedule a <strong>comprehensive eye checkup in Punjab</strong> before considering LASIK surgery.</p>
    </div>
</section>

<!-- Procedure Section -->
<section class="punjab-lasik-section punjab-lasik-white">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">LASIK Surgery Procedure – Step by Step</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">Understanding the LASIK procedure helps patients feel more confident about the treatment.</p>

        <div class="punjab-lasik-steps">
            <div class="punjab-lasik-step">
                <div class="punjab-lasik-step-num">1</div>
                <h3>Pre-LASIK Evaluation</h3>
                <p>Detailed eye examination to measure corneal thickness, eye power, corneal mapping, pupil size, and tear film quality.</p>
            </div>

            <div class="punjab-lasik-step">
                <div class="punjab-lasik-step-num">2</div>
                <h3>Eye Preparation</h3>
                <p>Numbing eye drops are used to ensure comfort. Patients remain awake but do not feel pain.</p>
            </div>

            <div class="punjab-lasik-step">
                <div class="punjab-lasik-step-num">3</div>
                <h3>Corneal Flap Creation</h3>
                <p>A thin flap is created on the surface of the cornea using advanced laser technology.</p>
            </div>

            <div class="punjab-lasik-step">
                <div class="punjab-lasik-step-num">4</div>
                <h3>Laser Vision Correction</h3>
                <p>A highly precise excimer laser reshapes the cornea according to the patient's eye power.</p>
            </div>

            <div class="punjab-lasik-step">
                <div class="punjab-lasik-step-num">5</div>
                <h3>Flap Repositioning</h3>
                <p>The flap is placed back in its original position. It heals naturally without stitches.</p>
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">The entire LASIK procedure is <strong>quick, precise, and highly effective</strong>.</p>
    </div>
</section>

<!-- Recovery Section -->
<section class="punjab-lasik-section punjab-lasik-light">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Recovery After LASIK Surgery</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">Recovery from LASIK surgery is generally smooth and fast.</p>

        <div style="max-width: 900px; margin: 40px auto 0;">
            <div class="punjab-lasik-symptoms">
                <h3 style="color: #f17732; margin-bottom: 15px;">Temporary Symptoms (24-48 hours)</h3>
                <p style="color: #444; margin-bottom: 15px;">Patients may experience:</p>
                <ul class="punjab-lasik-dot-list">
                    <li>Mild irritation</li>
                    <li>Watery eyes</li>
                    <li>Sensitivity to light</li>
                    <li>Slight blurred vision</li>
                </ul>
                <p style="color: #444; margin-top: 15px;">These symptoms usually improve within <strong>24 to 48 hours</strong>.</p>
            </div>

            <div class="punjab-lasik-precautions">
                <h3 style="color: #1dd2c3; margin-bottom: 15px;">Doctor Recommendations</h3>
                <ul class="punjab-lasik-check-list">
                    <li>Avoid rubbing your eyes</li>
                    <li>Use prescribed eye drops regularly</li>
                    <li>Avoid swimming for a few weeks</li>
                    <li>Wear protective glasses if advised</li>
                    <li>Attend follow-up checkups</li>
                </ul>
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">Most patients <strong>return to work within 1–2 days</strong> after LASIK surgery.</p>
    </div>
</section>

<!-- Cost Section -->
<section class="punjab-lasik-section punjab-lasik-cost">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">LASIK Surgery Cost in Punjab</h2>
        <p style="margin-bottom: 30px;">The cost of <strong>LASIK surgery in Punjab</strong> may vary depending on several factors.</p>

        <div class="punjab-lasik-factors">
            <div class="punjab-lasik-factor">
                <h4>Technology Used</h4>
                <p>Advanced laser systems vs standard equipment</p>
            </div>
            <div class="punjab-lasik-factor">
                <h4>Surgeon's Experience</h4>
                <p>Expert specialists with proven track records</p>
            </div>
            <div class="punjab-lasik-factor">
                <h4>Hospital Facilities</h4>
                <p>Modern infrastructure and safety standards</p>
            </div>
            <div class="punjab-lasik-factor">
                <h4>Type of LASIK Treatment</h4>
                <p>Traditional, Femto LASIK, or Contoura Vision</p>
            </div>
        </div>

        <div class="punjab-lasik-price">₹25,000 - ₹80,000</div>
        <p style="font-size: 1.2rem; margin-bottom: 40px;">for both eyes</p>

        <p style="font-size: 1.1rem;">Advanced procedures such as <strong>Femto LASIK</strong> or <strong>Contoura Vision</strong> may cost slightly higher due to improved accuracy and technology.</p>
        <p style="font-size: 1.1rem; margin-top: 20px;">Consulting an <strong>experienced eye specialist</strong> is the best way to understand the exact cost and suitable treatment options.</p>
    </div>
</section>

<!-- Types Section -->
<section class="punjab-lasik-section punjab-lasik-white">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Types of LASIK Surgery Available</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">Modern eye hospitals offer different types of LASIK procedures.</p>

        <div class="punjab-lasik-grid-2">
            <div class="punjab-lasik-type-card">
                <h3>Traditional LASIK</h3>
                <p style="color: #444; line-height: 1.8;">This is the most commonly performed LASIK procedure used to correct refractive errors. It uses a microkeratome blade to create the corneal flap.</p>
            </div>

            <div class="punjab-lasik-type-card featured">
                <h3>Femto LASIK (Blade-Free)</h3>
                <p style="color: #444; line-height: 1.8;">Femto LASIK uses a <strong>femtosecond laser</strong> to create the corneal flap instead of a blade. It improves safety and precision, making it a popular choice.</p>
            </div>

            <div class="punjab-lasik-type-card featured">
                <h3>Contoura Vision LASIK</h3>
                <p style="color: #444; line-height: 1.8;">Contoura Vision is one of the <strong>most advanced LASIK technologies</strong> that provides highly personalized vision correction. It maps the cornea in great detail, helping achieve better visual clarity.</p>
            </div>

            <div class="punjab-lasik-type-card">
                <h3>SMILE Eye Surgery</h3>
                <p style="color: #444; line-height: 1.8;">SMILE is another advanced laser vision correction technique that involves a <strong>smaller incision</strong> and faster healing. Doctors recommend the most suitable procedure based on the patient's eye condition.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="punjab-lasik-section" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Why Choose a Trusted Eye Hospital for LASIK in Punjab?</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">Choosing the right hospital is essential for achieving safe and effective results.</p>

        <div class="punjab-lasik-grid-2">
            <div class="punjab-lasik-why-card">
                <h3>Experienced Eye Surgeons</h3>
                <p>Our team includes highly skilled ophthalmologists with extensive experience in refractive surgeries and laser vision correction.</p>
            </div>
            <div class="punjab-lasik-why-card">
                <h3>Advanced Laser Technology</h3>
                <p>We use the latest laser systems and modern diagnostic equipment to ensure precise and safe treatment.</p>
            </div>
            <div class="punjab-lasik-why-card">
                <h3>Personalized Treatment Plans</h3>
                <p>Every patient receives a customized treatment plan based on their unique eye condition and vision needs.</p>
            </div>
            <div class="punjab-lasik-why-card">
                <h3>High Safety Standards</h3>
                <p>Our hospital follows strict safety protocols and maintains the highest standards of patient care.</p>
            </div>
        </div>

        <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">Patients should always choose a hospital with a strong reputation in <strong>laser eye surgery and vision correction treatments</strong>.</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="punjab-lasik-section punjab-lasik-light">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">FAQs About LASIK Surgery</h2>

        <div class="punjab-lasik-faq-wrap">
            <div class="punjab-lasik-faq">
                <div class="punjab-lasik-faq-q">Is LASIK surgery safe?</div>
                <div class="punjab-lasik-faq-a">
                    <p>Yes, LASIK is considered one of the safest and most successful vision correction procedures when performed by experienced eye surgeons.</p>
                </div>
            </div>

            <div class="punjab-lasik-faq">
                <div class="punjab-lasik-faq-q">How long does LASIK surgery take?</div>
                <div class="punjab-lasik-faq-a">
                    <p>The entire procedure usually takes 10–15 minutes for both eyes.</p>
                </div>
            </div>

            <div class="punjab-lasik-faq">
                <div class="punjab-lasik-faq-q">Is LASIK surgery painful?</div>
                <div class="punjab-lasik-faq-a">
                    <p>No. Numbing eye drops are used during the procedure, so patients do not feel pain.</p>
                </div>
            </div>

            <div class="punjab-lasik-faq">
                <div class="punjab-lasik-faq-q">How soon can I see clearly after LASIK?</div>
                <div class="punjab-lasik-faq-a">
                    <p>Most patients notice improved vision within 24 hours after surgery.</p>
                </div>
            </div>

            <div class="punjab-lasik-faq">
                <div class="punjab-lasik-faq-q">Can LASIK permanently remove glasses?</div>
                <div class="punjab-lasik-faq-a">
                    <p>In many cases, LASIK significantly reduces or completely eliminates the need for glasses.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="punjab-lasik-cta" id="contact">
    <div class="punjab-lasik-container">
        <h2>Book Your LASIK Consultation in Punjab</h2>
        <p>If you want to enjoy clear vision without glasses or contact lenses, LASIK laser eye surgery in Punjab could be the ideal solution. Consult an experienced eye specialist today to determine whether LASIK is suitable for your eyes.</p>
        <a href="tel:+917218272182" class="punjab-lasik-btn-white">Call Now: +91 72182-72182</a>
    </div>
</section>

<!-- Contact Section -->
<section class="punjab-lasik-section punjab-lasik-light">
    <div class="punjab-lasik-container">
        <h2 class="punjab-lasik-title">Contact Us</h2>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">Ready to transform your vision? Get in touch with us today.</p>

        <div class="punjab-lasik-contact-info">
            <div class="punjab-lasik-contact-item">
                <div class="punjab-lasik-icon">📞</div>
                <a href="tel:+917218272182">+91 72182-72182</a>
            </div>
            <div class="punjab-lasik-contact-item">
                <div class="punjab-lasik-icon">🌐</div>
                <a href="https://www.brareyehospital.com/" target="_blank">brareyehospital.com</a>
            </div>
        </div>
    </div>
</section>

<!-- Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Brar Eye Hospital",
  "url": "https://www.brareyehospital.com",
  "logo": "https://www.brareyehospital.com/logo.png",
  "image": "https://www.brareyehospital.com/hospital.jpg",
  "description": "Brar Eye Hospital provides advanced eye care treatments including LASIK, SMILE Pro surgery, cataract surgery and complete ophthalmology services in Punjab.",
  "telephone": "+91 7218272182",
  "email": "brareyehospitals@gmail.com",
  "priceRange": "$$",
  
  "sameAs": [
    "https://www.facebook.com/",
    "https://www.instagram.com/"
  ],

  "address": [
    {
      "@type": "PostalAddress",
      "streetAddress": "Near Rose Garden Chowk, GT Road",
      "addressLocality": "Bathinda",
      "addressRegion": "Punjab",
      "postalCode": "151001",
      "addressCountry": "IN"
    },
    {
      "@type": "PostalAddress",
      "streetAddress": "Faridkot Rd",
      "addressLocality": "Kotkapura",
      "addressRegion": "Punjab",
      "postalCode": "151204",
      "addressCountry": "IN"
    }
  ],

  "geo": [
    {
      "@type": "GeoCoordinates",
      "latitude": "30.2110",
      "longitude": "74.9455"
    },
    {
      "@type": "GeoCoordinates",
      "latitude": "30.5810",
      "longitude": "74.8190"
    }
  ],

  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },

  "areaServed": [
    {
      "@type": "State",
      "name": "Punjab"
    },
    {
      "@type": "City",
      "name": "Bathinda"
    },
    {
      "@type": "City",
      "name": "Kotkapura"
    },
    {
      "@type": "Country",
      "name": "India"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is LASIK surgery safe?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, LASIK is considered one of the safest and most successful vision correction procedures when performed by experienced eye surgeons."
      }
    },
    {
      "@type": "Question",
      "name": "How long does LASIK surgery take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The entire procedure usually takes 10–15 minutes for both eyes."
      }
    },
    {
      "@type": "Question",
      "name": "Is LASIK surgery painful?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Numbing eye drops are used during the procedure, so patients do not feel pain."
      }
    },
    {
      "@type": "Question",
      "name": "How soon can I see clearly after LASIK?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most patients notice improved vision within 24 hours after surgery."
      }
    },
    {
      "@type": "Question",
      "name": "Can LASIK permanently remove glasses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In many cases, LASIK significantly reduces or completely eliminates the need for glasses."
      }
    }
  ]
}
</script>

<script>
// FAQ Accordion
    document.querySelectorAll('.punjab-lasik-faq-q').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            const isActive = item.classList.contains('active');
            
            // Close all items
            document.querySelectorAll('.punjab-lasik-faq').forEach(faq => {
                faq.classList.remove('active');
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Smooth scroll for anchor links
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
</script>

<?php include('footer.php'); ?>