<?php
$pageTitle = "Insurance & Empanelments | Brar Eye Hospital Bathinda – CGHS, ECHS, Ayushman Bharat";
$pageDescription = "Brar Eye Hospital Bathinda is empanelled with CGHS, ECHS, Ayushman Bharat (PMJAY) and major insurance companies. Get cashless eye treatment in Punjab.";
$pageKeywords = "eye hospital empanelments Bathinda, CGHS eye hospital Punjab, ECHS eye treatment Bathinda, Ayushman Bharat eye hospital, cashless eye surgery Bathinda, insurance eye hospital Punjab";
include('header.php');
?>
<!-- ===== Empanelments Page Title (Animated & Responsive) ===== -->
<section class="empanel-page-title" aria-label="Empanelments hero">
  <!-- Decorative Background layer (replace URL inside CSS if needed) -->
  <div class="empanel-bg" role="img" aria-hidden="true"></div>

  <div class="empanel-inner">
    <div class="empanel-content">
      <h1 class="empanel-heading" style="color:white;">Empanelments</h1>

      <nav class="empanel-breadcrumb" aria-label="Breadcrumb">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li aria-current="page">Empanelments</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<!-- ===== Styles (paste into your stylesheet or keep inline) ===== -->
<style>
:root{
  --empanel-height: 300px;
  --empanel-bg: url('assets/images/background/5 copy.webp'); /* <-- replace this path with your real image */
  --accent-teal: #03c0b4;
  --muted: #98a3a6;
  --text-white: #ffffff;
  --ff: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Section wrapper */
.empanel-page-title{
  position: relative;
  width: 100%;
  height: var(--empanel-height);
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  box-sizing: border-box;
  font-family: var(--ff);
}

/* Background image + overlay */
.empanel-bg{
  position: absolute;
  inset: 0;
  background-image: linear-gradient(180deg, rgba(3,192,180,0.12), rgba(8,24,40,0.45)), var(--empanel-bg);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  filter: brightness(0.6);
  transform-origin: center;
  transition: transform 1.2s ease;
  z-index: 0;
}

/* subtle parallax/zoom on hover for desktop */
@media (hover: hover) and (pointer: fine) {
  .empanel-page-title:hover .empanel-bg { transform: scale(1.03); }
}

/* Inner container */
.empanel-inner{
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Content box */
.empanel-content{
  text-align: center;
  color: var(--text-white);
  display: inline-block;
  padding: 8px 14px;
  animation: empanelFadeIn 900ms ease both;
}

/* Heading */
.empanel-heading{
  margin: 0;
  font-size: clamp(1.6rem, 4.6vw, 2.6rem);
  font-weight: 700;
  letter-spacing: 0.6px;
  text-transform: uppercase;
  text-shadow: 0 6px 22px rgba(0,0,0,0.45);
  transform-origin: center;
  animation: empanelSlideDown 900ms cubic-bezier(.2,.9,.2,1) both;
}

/* Breadcrumb */
.empanel-breadcrumb{ margin-top: 10px; display: flex; justify-content: center; }
.empanel-breadcrumb ol{ list-style: none; padding: 0; margin: 0; display: inline-flex; gap: 10px; align-items:center; font-weight:600; color:var(--text-white); }
.empanel-breadcrumb a{ color: var(--accent-teal); text-decoration: none; transition: color .18s ease; }
.empanel-breadcrumb a:hover{ color: #f17732; text-decoration: underline; }

/* small separator style */
.empanel-breadcrumb li + li::before{ content: "⟋"; color: rgba(255,255,255,0.6); font-weight:700; margin-right:6px; }

/* Animations */
@keyframes empanelFadeIn {
  from { opacity: 0; transform: translateY(6px); }
  to   { opacity: 1; transform: translateY(0); }
}
@keyframes empanelSlideDown {
  from { opacity: 0; transform: translateY(-18px) scale(0.99); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}

/* Responsive adjustments */
@media (max-width: 992px){
  :root { --empanel-height: 260px; }
  .empanel-heading{ font-size: clamp(1.4rem, 5.2vw, 2.2rem); }
}
@media (max-width: 768px){
  :root { --empanel-height: 220px; }
  .empanel-heading{ font-size: 1.4rem; }
  .empanel-breadcrumb ol{ gap: 6px; font-size: 0.95rem; flex-direction: column; align-items:center; }
  .empanel-breadcrumb li + li::before{ display: none; } /* hide separator on narrow screens */
}
@media (max-width: 420px){
  :root { --empanel-height: 180px; }
  .empanel-heading{ font-size: 1.05rem; letter-spacing: 0.4px; }
  .empanel-inner{ padding: 0 12px; }
  .empanel-content{ padding: 6px 8px; }
}
</style>


<style>
    .empanelment-item {
        width: 48%;
        margin-bottom: 25px;
        padding: 20px;
        background-color: white;
        border-left: 4px solid #03c0b4;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateY(20px);
        display: flex;
        align-items: center;
    }

    .empanelment-item.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .empanelment-item:nth-child(odd) {
        animation-delay: 0.1s;
    }

    .empanelment-item:nth-child(even) {
        animation-delay: 0.2s;
    }

    .empanelment-item:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        border-left-width: 6px;
    }

    /* Section Entrance Animation */
    .section-entrance {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .section-entrance.active {
        opacity: 1;
        transform: translateY(0);
    }

    .empanelment-item h3 {
        margin-top: 0;
        color: #03c0b4;
        font-size: 1.2rem;
        position: relative;
        display: inline-block;
    }

    .empanelment-item h3::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #f17732;
        transition: width 0.3s ease;
    }

    .empanelment-item:hover h3::after {
        width: 100%;
    }

    .empanelment-item p {
        margin-bottom: 0;
        color: #666;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .empanelment-item:hover p {
        color: #444;
        transform: translateX(5px);
    }

    .empanelment-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
    }

    .logo-container {
        width: 70px;
        height: 70px;
        min-width: 70px;
        margin-right: 15px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 3px 5px rgba(0,0,0,0.1);
    }

    .logo-container img {
        max-width: 85%;
        max-height: 85%;
        object-fit: contain;
    }

    .empanelment-text {
        flex: 1;
    }

    /* Additional styling for section entrance (already defined above) */
    @media (max-width: 768px) {
        .empanelment-item {
            width: 100%;
        }
    }
</style>
<br> <br>
<!-- Government Health Schemes -->
<section class="section-padding section-entrance" id="govt-schemes" data-aos="fade-up">
    <div class="auto-container">
        <div class="section-title text-center mb-5">
            <h2>Government Health Schemes</h2>
        </div>

        <div class="empanelment-list">
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/1.webp" alt="ECHS Logo">
                </div>
                <div class="empanelment-text">
                    <h3>(ECHS) Ex-Servicemen Contributory Health Scheme</h3>
                    <p>Govt. Health Scheme. For more details, visit our <a href="brar-eye-hospital-branches-bathinda-kotkapura.php" style="color: #03c0b4;">partner</a> page or check the <a href="contact-brar-eye-hospital-bathinda.php" style="color: #03c0b4;">insurance</a> page.</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/2.webp" alt="FCI Logo">
                </div>
                <div class="empanelment-text">
                    <h3>(FCI) Food Corporation of India</h3>
                    <p>Govt. Health Scheme. For more details, visit our <a href="brar-eye-hospital-branches-bathinda-kotkapura.php" style="color: #03c0b4;">partner</a> page or check the <a href="contact-brar-eye-hospital-bathinda.php" style="color: #03c0b4;">insurance</a> page.</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/3.webp" alt="Ayushman Bharat Logo">
                </div>
                <div class="empanelment-text">
                    <h3>(AB-SSBY) Ayushman Bharat Sarbat Sehat Bima Yojana</h3>
                    <p>Govt. Health Scheme. For more details, visit our <a href="brar-eye-hospital-branches-bathinda-kotkapura.php" style="color: #03c0b4;">partner</a> page or check the <a href="contact-brar-eye-hospital-bathinda.php" style="color: #03c0b4;">insurance</a> page.</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/4.webp" alt="Northern Railway Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Northern Railway</h3>
                    <p>Govt. Health Scheme. For more details, visit our <a href="brar-eye-hospital-branches-bathinda-kotkapura.php" style="color: #03c0b4;">partner</a> page or check the <a href="contact-brar-eye-hospital-bathinda.php" style="color: #03c0b4;">insurance</a> page.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- General Health Insurance Companies -->
<section class="section-padding section-entrance" id="insurance-companies" style="background-color: #f8f8f8;" data-aos="fade-up">
    <div class="auto-container">
        <div class="section-title text-center mb-5">
            <h2>General Health Insurance Companies</h2>
        </div>

        <div class="empanelment-list">
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/5.webp" alt="HDFC ERGO Logo">
                </div>
                <div class="empanelment-text">
                    <h3>HDFC ERGO General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/6.webp" alt="IFFCO-TOKIO Logo">
                </div>
                <div class="empanelment-text">
                    <h3>IFFCO-TOKIO General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/7.webp" alt="ICICI Lombard Logo">
                </div>
                <div class="empanelment-text">
                    <h3>ICICI Lombard General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/8.webp" alt="Reliance Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Reliance General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/9.webp" alt="Max Bupa Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Max Bupa Health Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/10.webp" alt="Universal Sompo Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Universal Sompo General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/11.webp" alt="Aditya Birla Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Aditya Birla Health Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/12.webp" alt="TATA AIG Logo">
                </div>
                <div class="empanelment-text">
                    <h3>TATA AIG General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/13.webp" alt="Star Health Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Star Healthcare Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/14.webp" alt="Kotak Mahindra Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Kotak Mahindra General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/15.webp" alt="Liberty Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Liberty General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/16.webp" alt="Bridges Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Bridges Health Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/17.webp" alt="Focus Health Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Focus Health Insurance TPA Pvt. Ltd.</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/18.webp" alt="Chola MS Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Chola MS General Insurance Company Limited</h3>
                    <p>General Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/19.webp" alt="Manipal Cigna Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Manipal Cigna Health Insurance Company Limited</h3>
                    <p>Health Insurance Company</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/20.webp" alt="Religare Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Religare Health Insurance Company Limited</h3>
                    <p>Health Insurance Company</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Third Party Administrators -->
<section class="section-padding section-entrance" id="tpa" data-aos="fade-up">
    <div class="auto-container">
        <div class="section-title text-center mb-5">
            <h2>Third Party Administrators (TPA)</h2>
        </div>

        <div class="empanelment-list">
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/21.webp" alt="DHS Logo">
                </div>
                <div class="empanelment-text">
                    <h3>(DHS) Dedicated Healthcare Services TPA (India) Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/22.webp" alt="Medi Assist Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Medi Assist Insurance TPA Private Limited</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/23.webp" alt="Park Mediclaim Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Park Mediclaim TPA Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/24.webp" alt="E-Meditek Logo">
                </div>
                <div class="empanelment-text">
                    <h3>E-Meditek (TPA) Services Limited</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/25.webp" alt="Raksha Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Raksha TPA Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/26.webp" alt="Prim India Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Prim India Healthcare Solutions Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/27.webp" alt="Spurthi Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Spurthi Meditech (TPA) Solution Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/28.webp" alt="I-Care Logo">
                </div>
                <div class="empanelment-text">
                    <h3>I-Care Health Management & TPA Services Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/29.webp" alt="Alankit Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Alankit Healthcare TPA Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/30.webp" alt="Genins Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Genins India TPA Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/31.webp" alt="Medsave Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Medsave India TPA</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/32.webp" alt="Family Health Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Family Health Plant TPA Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/33.webp" alt="Paramount Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Paramount Health Services (TPA) Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/34.webp" alt="Good Health Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Good Health TPA Services</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/35.webp" alt="Vipul MedCorp Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Vipul MedCorp Insurance TPA Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
            <div class="empanelment-item animate__animated">
                <div class="logo-container">
                    <img src="assets/images/logo/36.webp" alt="Ericson Logo">
                </div>
                <div class="empanelment-text">
                    <h3>Ericson TPA Healthcare Pvt. Ltd.</h3>
                    <p>TPA</p>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- contact-info-section end -->

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
                        <h2>Schedule a Consultation</h2>
                        
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
    document.addEventListener('DOMContentLoaded', function() {
        // Animation for empanelment items
        const empanelmentItems = document.querySelectorAll('.empanelment-item');
        const sectionEntrance = document.querySelectorAll('.section-entrance');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    // If this is a section, animate its empanelment items
                    if (entry.target.classList.contains('section-entrance')) {
                        const items = entry.target.querySelectorAll('.empanelment-item');
                        items.forEach((item, index) => {
                            setTimeout(() => {
                                item.classList.add('animate');
                            }, index * 100);
                        });
                    }
                }
            });
        }, {
            threshold: 0.1
        });
        
        sectionEntrance.forEach(section => {
            observer.observe(section);
        });
    });
</script>

<?php include 'footer.php'; ?>