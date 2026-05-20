<?php
// lasik-surgery-bathinda.php

$pageTitle = "LASIK Laser Eye Surgery in Bathinda | Remove Glasses Safely";
$pageDescription = "Get advanced LASIK laser eye surgery in Bathinda to remove glasses permanently. Safe, quick recovery, and expert eye specialists for clear vision.";
$pageKeywords = "LASIK surgery Bathinda, laser eye surgery Bathinda, remove glasses permanently, vision correction Bathinda";

include('header.php');
?>

<style>
/* LASIK Page Specific Styles */
.lasik-hero-section {
    background: linear-gradient(135deg, #1dd2c3 0%, #15a396 100%);
    color: #ffffff;
    padding: 80px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.lasik-hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/></svg>') repeat;
    background-size: 100px;
    opacity: 0.3;
}

.lasik-hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}

.lasik-hero-content h1 {
    font-size: 2.8rem;
    margin-bottom: 20px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.lasik-hero-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.95;
}

.lasik-cta-button {
    display: inline-block;
    background-color: #f17732;
    color: #ffffff;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(241, 119, 50, 0.4);
}

.lasik-cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(241, 119, 50, 0.6);
    background-color: #e56a2a;
}

.lasik-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.lasik-section {
    padding: 60px 0;
}

.lasik-section-title {
    color: #1dd2c3;
    font-size: 2.2rem;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
    padding-bottom: 15px;
}

.lasik-section-title::after {
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

.lasik-intro-section {
    background-color: #ffffff;
}

.lasik-intro-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
    margin-top: 40px;
}

.lasik-intro-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
}

.lasik-intro-text p {
    margin-bottom: 20px;
}

.lasik-intro-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.lasik-intro-image img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.lasik-intro-image:hover img {
    transform: scale(1.05);
}

.lasik-image-badge {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: #f17732;
    color: #ffffff;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 0.9rem;
}

.lasik-what-section {
    background-color: #f8f9fa;
}

.lasik-content-box {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-top: 30px;
    border-left: 5px solid #1dd2c3;
}

.lasik-content-box h3 {
    color: #1dd2c3;
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.lasik-conditions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 30px;
}

.lasik-condition-card {
    background: linear-gradient(135deg, #1dd2c3 0%, #17b8a8 100%);
    color: #ffffff;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    transition: transform 0.3s ease;
}

.lasik-condition-card:hover {
    transform: translateY(-5px);
}

.lasik-condition-card h4 {
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.lasik-vision-problems {
    background-color: #ffffff;
}

.lasik-problems-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.lasik-problem-card {
    background: linear-gradient(135deg, rgba(29, 210, 195, 0.1) 0%, rgba(241, 119, 50, 0.1) 100%);
    padding: 35px;
    border-radius: 20px;
    border: 2px solid #1dd2c3;
    transition: all 0.3s ease;
}

.lasik-problem-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.lasik-problem-card h3 {
    color: #1dd2c3;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.lasik-benefits-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.lasik-benefits-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.lasik-benefit-card {
    background-color: #ffffff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #f17732;
    transition: all 0.3s ease;
}

.lasik-benefit-card:hover {
    transform: translateX(10px);
}

.lasik-benefit-card h3 {
    color: #f17732;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.lasik-eligibility-section {
    background-color: #f8f9fa;
}

.lasik-eligibility-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    margin-top: 40px;
    align-items: center;
}

.lasik-criteria-list {
    list-style: none;
}

.lasik-criteria-list li {
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.1rem;
}

.lasik-criteria-list li::before {
    content: '✓';
    width: 30px;
    height: 30px;
    background-color: #1dd2c3;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}

.lasik-eligibility-image {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.lasik-eligibility-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lasik-procedure-section {
    background-color: #ffffff;
}

.lasik-steps-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-top: 40px;
}

.lasik-step-card {
    background-color: #f8f9fa;
    padding: 30px 20px;
    border-radius: 15px;
    text-align: center;
    position: relative;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.lasik-step-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(241, 119, 50, 0.2);
}

.lasik-step-number {
    width: 50px;
    height: 50px;
    background-color: #f17732;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 20px;
}

.lasik-step-card h3 {
    color: #f17732;
    font-size: 1rem;
    margin-bottom: 10px;
}

.lasik-step-card p {
    font-size: 0.9rem;
    color: #6c757d;
    line-height: 1.5;
}

.lasik-recovery-section {
    background-color: #f8f9fa;
}

.lasik-recovery-content {
    max-width: 900px;
    margin: 40px auto 0;
}

.lasik-symptoms-box {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    border-left: 5px solid #f17732;
}

.lasik-symptoms-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-top: 20px;
    list-style: none;
}

.lasik-symptoms-list li {
    padding: 10px 0;
    padding-left: 25px;
    position: relative;
    color: #444;
}

.lasik-symptoms-list li::before {
    content: '•';
    color: #f17732;
    font-size: 1.5rem;
    position: absolute;
    left: 0;
    top: -5px;
}

.lasik-precautions-box {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #1dd2c3;
}

.lasik-precautions-list {
    list-style: none;
    margin-top: 20px;
}

.lasik-precautions-list li {
    padding: 12px 0;
    padding-left: 30px;
    position: relative;
    color: #444;
}

.lasik-precautions-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #1dd2c3;
    font-weight: bold;
    font-size: 1.2rem;
}

.lasik-cost-section {
    background: linear-gradient(135deg, #1dd2c3 0%, #15a396 100%);
    color: #ffffff;
    text-align: center;
}

.lasik-cost-section .lasik-section-title {
    color: #ffffff;
}

.lasik-cost-section .lasik-section-title::after {
    background-color: #ffffff;
}

.lasik-cost-range {
    font-size: 3rem;
    font-weight: 700;
    margin: 30px 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

.lasik-cost-factors {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 40px;
    text-align: left;
}

.lasik-factor-card {
    background-color: rgba(255,255,255,0.2);
    padding: 25px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
}

.lasik-factor-card h4 {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.lasik-types-section {
    background-color: #ffffff;
}

.lasik-types-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.lasik-type-card {
    background-color: #f8f9fa;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-top: 4px solid #1dd2c3;
    transition: all 0.3s ease;
}

.lasik-type-card:hover {
    transform: translateY(-10px);
}

.lasik-type-card.featured {
    border-top-color: #f17732;
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1) 0%, rgba(255,255,255,0.9) 100%);
}

.lasik-type-card h3 {
    color: #1dd2c3;
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.lasik-type-card.featured h3 {
    color: #f17732;
}

.lasik-why-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.lasik-why-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.lasik-why-card {
    background-color: #ffffff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #f17732;
    transition: all 0.3s ease;
}

.lasik-why-card:hover {
    transform: translateX(10px);
}

.lasik-why-card h3 {
    color: #f17732;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.lasik-faq-section {
    background-color: #f8f9fa;
}

.lasik-faq-container {
    max-width: 900px;
    margin: 40px auto 0;
}

.lasik-faq-item {
    background-color: #ffffff;
    margin-bottom: 20px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.lasik-faq-question {
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

.lasik-faq-question:hover {
    color: #1dd2c3;
}

.lasik-faq-question::after {
    content: '+';
    font-size: 1.5rem;
    color: #f17732;
    transition: transform 0.3s ease;
}

.lasik-faq-item.active .lasik-faq-question::after {
    transform: rotate(45deg);
}

.lasik-faq-answer {
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
    color: #6c757d;
}

.lasik-faq-item.active .lasik-faq-answer {
    padding: 0 30px 25px;
    max-height: 200px;
}

.lasik-cta-section {
    background: linear-gradient(135deg, #f17732 0%, #d65f20 100%);
    color: #ffffff;
    text-align: center;
    padding: 80px 20px;
}

.lasik-cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.lasik-cta-section p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.lasik-cta-button-white {
    display: inline-block;
    background-color: #ffffff;
    color: #f17732;
    padding: 18px 50px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.lasik-cta-button-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.lasik-contact-section {
    background-color: #f8f9fa;
    text-align: center;
}

.lasik-contact-info {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin-top: 40px;
    flex-wrap: wrap;
}

.lasik-contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.2rem;
}

.lasik-contact-icon {
    width: 50px;
    height: 50px;
    background-color: #1dd2c3;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
}

.lasik-contact-item a {
    color: #1a1a1a;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.lasik-contact-item a:hover {
    color: #1dd2c3;
}

@media (max-width: 968px) {
    .lasik-intro-content,
    .lasik-eligibility-content {
        grid-template-columns: 1fr;
    }

    .lasik-conditions-grid,
    .lasik-problems-grid,
    .lasik-benefits-grid,
    .lasik-types-grid,
    .lasik-why-grid,
    .lasik-cost-factors {
        grid-template-columns: 1fr;
    }

    .lasik-steps-container {
        grid-template-columns: repeat(3, 1fr);
    }

    .lasik-symptoms-list {
        grid-template-columns: 1fr;
    }

    .lasik-hero-content h1 {
        font-size: 2rem;
    }
}

@media (max-width: 600px) {
    .lasik-steps-container {
        grid-template-columns: 1fr;
    }

    .lasik-hero-content h1 {
        font-size: 1.8rem;
    }

    .lasik-section-title {
        font-size: 1.8rem;
    }

    .lasik-cost-range {
        font-size: 2rem;
    }
}

html {
    scroll-behavior: smooth;
}

.lasik-fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

.lasik-fade-in.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
    
    <!-- Hero Section -->
    <section class="lasik-hero-section">
        <div class="lasik-hero-content">
            <h1>LASIK Laser Eye Surgery in Bathinda</h1>
            <p style="color:white;">Advanced laser technology to remove glasses permanently. Safe, quick recovery, and expert eye specialists for clear vision in Bathinda.</p>
            <a href="#contact" class="lasik-cta-button">Book Free Consultation</a>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="lasik-section lasik-intro-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Freedom From Glasses</h2>
            <div class="lasik-intro-content">
                <div class="lasik-intro-text">
                    <p>Clear vision is essential for everyday life. However, many people struggle with blurry vision due to refractive errors and depend on glasses or contact lenses for years. <strong>LASIK laser eye surgery in Bathinda</strong> offers a safe, advanced, and effective solution to correct vision permanently.</p>
                    
                    <p>LASIK is one of the most popular vision correction procedures worldwide. With modern laser technology and experienced eye specialists, patients can achieve clear vision without the constant need for spectacles or lenses.</p>
                    
                    <p>Many reputed eye hospitals in Bathinda now provide advanced <strong>LASIK treatment</strong> using highly precise laser systems. The procedure is quick, painless, and allows patients to return to their normal routine within a short period.</p>
                    
                    <p>If you are tired of wearing glasses every day or facing discomfort with contact lenses, <strong>LASIK surgery</strong> could be the perfect solution to restore clear and natural vision.</p>
                </div>
                <div class="lasik-intro-image">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&h=600&fit=crop" alt="LASIK Eye Surgery Bathinda">
                    <div class="lasik-image-badge">Quick 15 Min Procedure</div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is LASIK Section -->
    <section class="lasik-section lasik-what-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">What is LASIK Laser Eye Surgery?</h2>
            <div class="lasik-content-box">
                <h3>Modern Vision Correction Technology</h3>
                <p style="margin-bottom: 20px; color: #444; line-height: 1.8;">LASIK stands for <strong>Laser-Assisted In Situ Keratomileusis</strong>, a modern laser-based surgical procedure used to correct refractive vision problems.</p>
                
                <p style="margin-bottom: 20px; color: #444; line-height: 1.8;">The surgery works by reshaping the cornea so that light entering the eye focuses correctly on the retina. This helps improve vision and reduce dependence on glasses or contact lenses.</p>
                
                <p style="color: #444; line-height: 1.8;">The entire procedure usually takes <strong>10 to 15 minutes</strong>, and most patients experience noticeable vision improvement within 24 hours after surgery.</p>
            </div>

            <p style="text-align: center; margin: 30px 0; color: #444; font-size: 1.1rem; font-weight: 600;">LASIK is commonly used to treat:</p>

            <div class="lasik-conditions-grid">
                <div class="lasik-condition-card">
                    <h4>Myopia</h4>
                    <p>Near-sightedness</p>
                </div>
                <div class="lasik-condition-card">
                    <h4>Hyperopia</h4>
                    <p>Far-sightedness</p>
                </div>
                <div class="lasik-condition-card">
                    <h4>Astigmatism</h4>
                    <p>Irregular cornea shape</p>
                </div>
            </div>

            <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">Modern laser technologies make LASIK one of the most <strong>accurate and safest</strong> vision correction procedures available today.</p>
        </div>
    </section>

    <!-- Vision Problems Section -->
    <section class="lasik-section lasik-vision-problems">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Common Vision Problems Treated With LASIK</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Many people in Bathinda suffer from refractive errors that affect daily life. LASIK surgery helps correct these problems effectively.</p>

            <div class="lasik-problems-grid">
                <div class="lasik-problem-card">
                    <h3>Myopia (Near-Sightedness)</h3>
                    <p style="color: #444; line-height: 1.8;">Myopia makes distant objects appear blurry while nearby objects remain clear. It occurs when the cornea is too curved or the eyeball is longer than normal.</p>
                    <p style="color: #1dd2c3; font-weight: 600; margin-top: 15px;">LASIK reshapes the cornea so light focuses correctly on the retina, improving distance vision.</p>
                </div>

                <div class="lasik-problem-card">
                    <h3>Hyperopia (Far-Sightedness)</h3>
                    <p style="color: #444; line-height: 1.8;">People with hyperopia can see distant objects clearly but struggle with nearby tasks such as reading.</p>
                    <p style="color: #f17732; font-weight: 600; margin-top: 15px;">LASIK surgery corrects the cornea's shape to allow better focusing for close objects.</p>
                </div>

                <div class="lasik-problem-card">
                    <h3>Astigmatism</h3>
                    <p style="color: #444; line-height: 1.8;">Astigmatism occurs when the cornea has an irregular shape, causing blurred or distorted vision at all distances.</p>
                    <p style="color: #1dd2c3; font-weight: 600; margin-top: 15px;">LASIK smooths the cornea to improve visual clarity and focus.</p>
                </div>
            </div>

            <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">Patients experiencing these problems can benefit greatly from <strong>laser eye surgery in Bathinda</strong> after a detailed eye examination.</p>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="lasik-section lasik-benefits-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Benefits of LASIK Eye Surgery</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">LASIK surgery has become extremely popular because of its numerous benefits.</p>

            <div class="lasik-benefits-grid">
                <div class="lasik-benefit-card">
                    <h3>Freedom From Glasses</h3>
                    <p style="color: #444; line-height: 1.8;">One of the biggest advantages of LASIK surgery is the ability to reduce or eliminate dependence on glasses or contact lenses. Many patients achieve <strong>20/20 vision</strong> or better after the procedure.</p>
                </div>

                <div class="lasik-benefit-card">
                    <h3>Quick and Painless Procedure</h3>
                    <p style="color: #444; line-height: 1.8;">The surgery is very quick and usually takes <strong>less than 15 minutes</strong> for both eyes. Local anesthetic eye drops are used to ensure the procedure remains comfortable.</p>
                </div>

                <div class="lasik-benefit-card">
                    <h3>Fast Recovery</h3>
                    <p style="color: #444; line-height: 1.8;">Most patients notice improved vision within <strong>24 hours</strong> and can resume daily activities within 1–2 days.</p>
                </div>

                <div class="lasik-benefit-card">
                    <h3>Long-Term Results & Improved Quality of Life</h3>
                    <p style="color: #444; line-height: 1.8;">LASIK offers long-lasting vision correction, allowing patients to enjoy clear vision for many years. Patients often report improved confidence and convenience for activities such as <strong>driving, sports, reading, and traveling</strong>.</p>
                </div>
            </div>

            <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">However, vision problems caused by aging may require different treatments. Patients with age-related vision problems may also benefit from advanced <strong>cataract surgery treatments</strong> available at our eye hospital.</p>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section class="lasik-section lasik-eligibility-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Who is Eligible for LASIK Surgery?</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Not everyone is suitable for LASIK surgery. A detailed eye examination is necessary to determine eligibility.</p>

            <div class="lasik-eligibility-content">
                <div>
                    <p style="margin-bottom: 20px; color: #444; font-size: 1.1rem;">Generally, ideal candidates for <strong>LASIK laser eye surgery in Bathinda</strong> meet the following criteria:</p>
                    <ul class="lasik-criteria-list">
                        <li>Age above 18 years</li>
                        <li>Stable eye power for at least one year</li>
                        <li>Healthy cornea</li>
                        <li>No severe eye diseases</li>
                        <li>Not pregnant or breastfeeding</li>
                    </ul>

                    <p style="margin-top: 30px; color: #444; font-size: 1.1rem;">Eye specialists perform several diagnostic tests before recommending <strong>LASIK treatment</strong>. These tests evaluate:</p>
                    <ul class="lasik-criteria-list" style="margin-top: 15px;">
                        <li>Corneal thickness</li>
                        <li>Eye power</li>
                        <li>Corneal curvature</li>
                        <li>Overall eye health</li>
                    </ul>

                    <p style="margin-top: 30px; color: #444; font-size: 1.1rem;">If LASIK is not suitable, doctors may suggest alternative procedures such as <strong>SMILE eye surgery</strong> or <strong>PRK vision correction</strong>.</p>
                </div>

                <div class="lasik-eligibility-image">
                    <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=800&h=600&fit=crop" alt="LASIK Eligibility Check Bathinda">
                </div>
            </div>

            <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">If you are unsure about your eye health, it is recommended to schedule a <strong>comprehensive eye checkup in Bathinda</strong> before considering LASIK surgery.</p>
        </div>
    </section>

    <!-- Procedure Section -->
    <section class="lasik-section lasik-procedure-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">LASIK Surgery Procedure – Step by Step</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Understanding the LASIK procedure helps patients feel more confident about the treatment.</p>

            <div class="lasik-steps-container">
                <div class="lasik-step-card">
                    <div class="lasik-step-number">1</div>
                    <h3>Pre-LASIK Evaluation</h3>
                    <p>Detailed eye examination to measure corneal thickness, eye power, corneal mapping, pupil size, and tear film quality.</p>
                </div>

                <div class="lasik-step-card">
                    <div class="lasik-step-number">2</div>
                    <h3>Eye Preparation</h3>
                    <p>Numbing eye drops are used to ensure comfort. Patients remain awake but do not feel pain.</p>
                </div>

                <div class="lasik-step-card">
                    <div class="lasik-step-number">3</div>
                    <h3>Corneal Flap Creation</h3>
                    <p>A thin flap is created on the surface of the cornea using advanced laser technology.</p>
                </div>

                <div class="lasik-step-card">
                    <div class="lasik-step-number">4</div>
                    <h3>Laser Vision Correction</h3>
                    <p>A highly precise excimer laser reshapes the cornea according to the patient's eye power.</p>
                </div>

                <div class="lasik-step-card">
                    <div class="lasik-step-number">5</div>
                    <h3>Flap Repositioning</h3>
                    <p>The flap is placed back in its original position. It heals naturally without stitches.</p>
                </div>
            </div>

            <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">The entire LASIK procedure is <strong>quick, precise, and highly effective</strong>.</p>
        </div>
    </section>

    <!-- Recovery Section -->
    <section class="lasik-section lasik-recovery-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Recovery After LASIK Surgery</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Recovery from LASIK surgery is generally smooth and fast.</p>

            <div class="lasik-recovery-content">
                <div class="lasik-symptoms-box">
                    <h3 style="color: #f17732; margin-bottom: 15px;">Temporary Symptoms (24-48 hours)</h3>
                    <p style="color: #444; margin-bottom: 15px;">Patients may experience:</p>
                    <ul class="lasik-symptoms-list">
                        <li>Mild irritation</li>
                        <li>Watery eyes</li>
                        <li>Sensitivity to light</li>
                        <li>Slight blurred vision</li>
                    </ul>
                    <p style="color: #444; margin-top: 15px;">These symptoms usually improve within <strong>24 to 48 hours</strong>.</p>
                </div>

                <div class="lasik-precautions-box">
                    <h3 style="color: #1dd2c3; margin-bottom: 15px;">Doctor Recommendations</h3>
                    <ul class="lasik-precautions-list">
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
    <section class="lasik-section lasik-cost-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">LASIK Surgery Cost in Bathinda</h2>
            <p style="margin-bottom: 30px;">The cost of <strong>LASIK surgery in Bathinda</strong> may vary depending on several factors.</p>

            <div class="lasik-cost-factors">
                <div class="lasik-factor-card">
                    <h4>Technology Used</h4>
                    <p>Advanced laser systems vs standard equipment</p>
                </div>
                <div class="lasik-factor-card">
                    <h4>Surgeon's Experience</h4>
                    <p>Expert specialists with proven track records</p>
                </div>
                <div class="lasik-factor-card">
                    <h4>Hospital Facilities</h4>
                    <p>Modern infrastructure and safety standards</p>
                </div>
                <div class="lasik-factor-card">
                    <h4>Type of LASIK Treatment</h4>
                    <p>Traditional, Femto LASIK, or Contoura Vision</p>
                </div>
            </div>

            <div class="lasik-cost-range">₹25,000 - ₹80,000</div>
            <p style="font-size: 1.2rem; margin-bottom: 40px;">for both eyes</p>

            <p style="font-size: 1.1rem;">Advanced procedures such as <strong>Femto LASIK</strong> or <strong>Contoura Vision</strong> may cost slightly higher due to improved accuracy and technology.</p>
            <p style="font-size: 1.1rem; margin-top: 20px;">Consulting an <strong>experienced eye specialist</strong> is the best way to understand the exact cost and suitable treatment options.</p>
        </div>
    </section>

    <!-- Types Section -->
    <section class="lasik-section lasik-types-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Types of LASIK Surgery Available</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Modern eye hospitals offer different types of LASIK procedures.</p>

            <div class="lasik-types-grid">
                <div class="lasik-type-card">
                    <h3>Traditional LASIK</h3>
                    <p style="color: #444; line-height: 1.8;">This is the most commonly performed LASIK procedure used to correct refractive errors. It uses a microkeratome blade to create the corneal flap.</p>
                </div>

                <div class="lasik-type-card featured">
                    <h3>Femto LASIK (Blade-Free)</h3>
                    <p style="color: #444; line-height: 1.8;">Femto LASIK uses a <strong>femtosecond laser</strong> to create the corneal flap instead of a blade. It improves safety and precision, making it a popular choice.</p>
                </div>

                <div class="lasik-type-card featured">
                    <h3>Contoura Vision LASIK</h3>
                    <p style="color: #444; line-height: 1.8;">Contoura Vision is one of the <strong>most advanced LASIK technologies</strong> that provides highly personalized vision correction. It maps the cornea in great detail, helping achieve better visual clarity.</p>
                </div>

                <div class="lasik-type-card">
                    <h3>SMILE Eye Surgery</h3>
                    <p style="color: #444; line-height: 1.8;">SMILE is another advanced laser vision correction technique that involves a <strong>smaller incision</strong> and faster healing. Doctors recommend the most suitable procedure based on the patient's eye condition.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="lasik-section lasik-why-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Why Choose a Trusted Eye Hospital for LASIK in Bathinda?</h2>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Choosing the right hospital is essential for achieving safe and effective results.</p>

            <div class="lasik-why-grid">
                <div class="lasik-why-card">
                    <h3>Experienced Eye Surgeons</h3>
                    <p>Our team includes highly skilled ophthalmologists with extensive experience in refractive surgeries and laser vision correction.</p>
                </div>
                <div class="lasik-why-card">
                    <h3>Advanced Laser Technology</h3>
                    <p>We use the latest laser systems and modern diagnostic equipment to ensure precise and safe treatment.</p>
                </div>
                <div class="lasik-why-card">
                    <h3>Personalized Treatment Plans</h3>
                    <p>Every patient receives a customized treatment plan based on their unique eye condition and vision needs.</p>
                </div>
                <div class="lasik-why-card">
                    <h3>High Safety Standards</h3>
                    <p>Our hospital follows strict safety protocols and maintains the highest standards of patient care.</p>
                </div>
            </div>

            <p style="text-align: center; margin-top: 40px; color: #444; font-size: 1.1rem;">Patients should always choose a hospital with a strong reputation in <strong>laser eye surgery and vision correction treatments</strong>.</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="lasik-section lasik-faq-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">FAQs About LASIK Surgery</h2>

            <div class="lasik-faq-container">
                <div class="lasik-faq-item">
                    <div class="lasik-faq-question">Is LASIK surgery safe?</div>
                    <div class="lasik-faq-answer">
                        <p>Yes, LASIK is considered one of the safest and most successful vision correction procedures when performed by experienced eye surgeons.</p>
                    </div>
                </div>

                <div class="lasik-faq-item">
                    <div class="lasik-faq-question">How long does LASIK surgery take?</div>
                    <div class="lasik-faq-answer">
                        <p>The entire procedure usually takes 10–15 minutes for both eyes.</p>
                    </div>
                </div>

                <div class="lasik-faq-item">
                    <div class="lasik-faq-question">Is LASIK surgery painful?</div>
                    <div class="lasik-faq-answer">
                        <p>No. Numbing eye drops are used during the procedure, so patients do not feel pain.</p>
                    </div>
                </div>

                <div class="lasik-faq-item">
                    <div class="lasik-faq-question">How soon can I see clearly after LASIK?</div>
                    <div class="lasik-faq-answer">
                        <p>Most patients notice improved vision within 24 hours after surgery.</p>
                    </div>
                </div>

                <div class="lasik-faq-item">
                    <div class="lasik-faq-question">Can LASIK permanently remove glasses?</div>
                    <div class="lasik-faq-answer">
                        <p>In many cases, LASIK significantly reduces or completely eliminates the need for glasses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="lasik-cta-section" id="contact">
        <div class="lasik-container">
            <h2>Book Your LASIK Consultation in Bathinda</h2>
            <p>If you want to enjoy clear vision without glasses or contact lenses, LASIK laser eye surgery in Bathinda could be the ideal solution. Consult an experienced eye specialist today to determine whether LASIK is suitable for your eyes.</p>
            <a href="tel:+917218272182" class="lasik-cta-button-white">Call Now: +91 72182-72182</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="lasik-section lasik-contact-section">
        <div class="lasik-container">
            <h2 class="lasik-section-title">Contact Us</h2>
            <p style="text-align: center; color: #666; margin-bottom: 30px;">Ready to transform your vision? Get in touch with us today.</p>

            <div class="lasik-contact-info">
                <div class="lasik-contact-item">
                    <div class="lasik-contact-icon">📞</div>
                    <a href="tel:+917218272182">+91 72182-72182</a>
                </div>
                <div class="lasik-contact-item">
                    <div class="lasik-contact-icon">🌐</div>
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
      "description": "Brar Eye Hospital provides advanced eye care treatments including LASIK, SMILE Pro surgery, cataract surgery and complete ophthalmology services in Bathinda and KotKapura.",
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
          "addressLocality": "KotKapura",
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
          "@type": "City",
          "name": "Bathinda"
        },
        {
          "@type": "City",
          "name": "KotKapura"
        },
        {
          "@type": "State",
          "name": "Punjab"
        },
        {
          "@type": "Country",
          "name": "India"
        }
      ]
    }
    </script>

    <!-- FAQ Schema -->
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
        document.querySelectorAll('.lasik-faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const isActive = item.classList.contains('active');
                
                // Close all items
                document.querySelectorAll('.lasik-faq-item').forEach(faq => {
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

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.lasik-section').forEach(section => {
            section.classList.add('lasik-fade-in');
            observer.observe(section);
        });
    </script>

<?php include('footer.php'); ?>