<?php
// index.php

$pageTitle = "Best Eye Hospital in Bathinda | Brar Eye Hospital – SMILE Pro, LASIK & Cataract Experts";
$pageDescription = "Brar Eye Hospital is Bathinda's #1 Eye Superspeciality Hospital with 21+ years of expertise. Advanced SMILE Pro, LASIK, Cataract, Glaucoma, Retina & Cornea treatments. NABH Accredited. Book appointment: +91 72182-72182.";
$pageKeywords = "best eye hospital Bathinda, eye hospital near me Bathinda, eye surgeon Bathinda, SMILE Pro LASIK Bathinda, cataract surgery Bathinda, glaucoma treatment Bathinda, retina specialist Bathinda, eye specialist Punjab, eye doctor Bathinda, NABH eye hospital Punjab";

include('server.php');
include('header.php');
?>

<!-- banner-section with video background -->
<section class="banner-section p_relative">
  <!-- Background Video -->
  <style>
  .bg-video {
    position: fixed;  /* ya absolute depending on your layout */
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    z-index: -1;
  }

  /* Mobile devices */
  @media (max-width: 767px) {
    .bg-video {
      height: auto;
      min-height: 100vh;
      width: 100vw;
      object-fit: cover;
    }
  }

  /* Tablet devices */
  @media (min-width: 768px) and (max-width: 1024px) {
    .bg-video {
      height: 100vh;
      width: 100vw;
      object-fit: cover;
    }
  }
</style>

<video autoplay muted loop playsinline class="bg-video">
  <source src="assets/images/background/23.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


  <!-- Overlay (optional for dark effect) -->
  <div class="video-overlay"></div>

  <!-- Carousel Content -->
  <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
    <!-- Slide 1 -->
    <div class="slide-item p_relative">
      <div class="auto-container">
        <div class="banner-content p_relative d_block">
          <div class="content-box p_relative d_block z_5">
          <h1 style="color: #fff;"> Brar Eye Hospital – Eye Superspeciality in Punjab</h1>
          <h2 style="color: #fff;" class="p_relative d_block fs_70 lh_80 fw_bold">
           Brar Eye Hospital for Every Generation
          </h2>
          <p style="color: #fff;" class="p_relative d_block fs_18">
            At Brar Eye Hospital,<br> we offer cutting-edge eye treatments
            <br> with compassion, precision, and <br> a patient-first approach in Bathinda and KotKapura.
          </p>
            <!--<div class="btn-box">-->
            <!--  <a href="contact-brar-eye-hospital-bathinda.php" class="theme-btn btn-one">Contact Now</a>-->
            <!--</div>-->
            <ul class="icon-list clearfix">
              <li><i class="icon-8"></i></li>
              <li><i class="icon-9"></i></li>
              <li><i class="icon-10"></i></li>
              <li><i class="icon-11"></i></li>
            </ul>
          </div>
          <div class="image-box">
            <figure class="image">
              <img src="assets/images/banner/a1].webp" alt="Brareye Hospital Eye Care">
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide-item p_relative">
      <div class="auto-container">
        <div class="banner-content p_relative d_block">
          <div class="content-box p_relative d_block z_5">
          <h3 style="color: #fff;">State-of-the-Art Facilities</h3>
<h2 style="color: #fff;" class="p_relative d_block fs_70 lh_80 fw_bold">
  Modern Eye Surgeries & Laser Treatments
</h2>
<p style="color: #fff;" class="p_relative d_block fs_18">
  From cataract surgery to LASIK, Brar Eye Hospital combines
  technology with expertise to restore <br>your vision safely and effectively.
</p>

            <!--<div class="btn-box">-->
            <!--  <a href="contact-brar-eye-hospital-bathinda.php" class="theme-btn btn-one">Book an Appointment</a>-->
            <!--</div>-->
            <ul class="icon-list clearfix">
              <li><i class="icon-8"></i></li>
              <li><i class="icon-9"></i></li>
              <li><i class="icon-10"></i></li>
              <li><i class="icon-11"></i></li>
            </ul>
          </div>
          <div class="image-box style-two" style="margin-left:100px; bottom:-100px;'>
            <figure class="image" >
            <img src="assets/images/banner/1b.webp" alt="Eye Surgery at Brareye Hospital">

            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide-item p_relative">
      <div class="auto-container">
        <div class="banner-content p_relative d_block">
          <div class="content-box p_relative d_block z_5">
          <h3 style="color: #fff;">Serving North India, based in Punjab</h3>
<h2 style="color: #fff;" class="p_relative d_block fs_70 lh_80 fw_bold">
  Your Vision, Our Mission
</h2>
<p style="color: #fff;" class="p_relative d_block fs_18">
  We are committed to delivering excellence in eye care with
  skilled doctors, advanced tools, <br>and a caring environment across both our locations.
</p>

            <!--<div class="btn-box">-->
            <!--  <a href="contact-brar-eye-hospital-bathinda.php" class="theme-btn btn-one">Visit Us Today</a>-->
            <!--</div>-->
            <ul class="icon-list clearfix">
              <li><i class="icon-8"></i></li>
              <li><i class="icon-9"></i></li>
              <li><i class="icon-10"></i></li>
              <li><i class="icon-11"></i></li>
            </ul>
          </div>
          <div class="image-box style-three">
          <figure class="image" style=" margin-bottom: -166px;">
  <img loading="lazy" src="assets/images/banner/C.webp" alt="Brareye Hospital Kot Kapura">
</figure>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->


<!-- banner-section end -->

<style>
@media (max-width: 768px) {
  .banner-section {
    min-height: 100vh;
    padding-top: 80px;
    padding-bottom: 80px;
  }

  .banner-content {
    flex-direction: column;
    text-align: center;
    padding: 20px;
  }

  .banner-content .content-box,
  .banner-content .image-box {
    width: 100%;
    flex: 1 1 100%;
  }

  .banner-content .image-box img {
    max-width: 90%;
    height: auto;
    margin: 20px auto 0;
  }

  .fs_70 {
    font-size: 28px !important;
  }

  .lh_80 {
    line-height: 38px !important;
  }

  .fs_18 {
    font-size: 16px !important;
  }

  .theme-btn.btn-one {
    padding: 10px 22px;
    font-size: 14px;
  }

  .icon-list {
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
  }

  .video-overlay {
    background: rgba(0, 0, 0, 0.6); /* darken more for mobile text readability */
  }
}

.google-map-section {
  position: relative;
  padding: 50px 0;
}

.google-map-section .map-inner iframe {
  width: 100%;
  max-width: 100%;
  height: 500px;
  border: none;
  display: block;
}

/* Responsive layout for content */
@media (max-width: 768px) {
  .google-map-section {
    padding: 30px 15px;
  }

  .google-map-section .content-inner {
    padding-top: 30px;
  }

  .google-map-section .content-box {
    text-align: center;
  }

  .google-map-section .title h3,
  .google-map-section .contact-info h3 {
    font-size: 22px;
  }

  .google-map-section .schedule-list li,
  .google-map-section .info-list li {
    font-size: 16px;
    line-height: 1.6;
  }

  .google-map-section .info-list li a {
    display: inline-block;
    word-break: break-word;
  }
}




  .row.clearfix {
    display: flex;
    flex-wrap: wrap;
    gap: 0px;
  }

  .feature-block {
    display: flex;
    flex: 1;
    flex-wrap: wrap;
    gap: 20px;
    width: 100%;
  }

  .feature-block-one {
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 300px;
    width: 100%;
  }

  .feature-block-one .inner-box {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 20px;
    height: 100%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
  }

  .feature-block-one .inner-box:hover {
    transform: translateY(-5px);
  }

  .feature-block-one h3 {
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: 1.5rem;
  }

  .feature-block-one p {
    margin-top: auto;
    font-size: 1rem;
    line-height: 1.6;
  }

  /* Banner section */
  .banner-section {
    position: relative;
    overflow: hidden;
  }

  .bg-video {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
    z-index: 0;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1;
  }

  .banner-carousel,
  .banner-content,
  .slide-item {
    position: relative;
    z-index: 2;
  }

  /* Responsive styles */
  @media (max-width: 768px) {
    .feature-block {
      flex-direction: column;
    }

    .feature-block-one {
      width: 100%;
    }

    .feature-block-one h3 {
      font-size: 1.3rem;
    }

    .feature-block-one p {
      font-size: 0.95rem;
    }

    .feature-block-one .inner-box {
      padding: 15px;
    }
  }

  @media (max-width: 480px) {
    .feature-block-one h3 {
      font-size: 1.1rem;
    }

    .feature-block-one p {
      font-size: 0.9rem;
    }

    .feature-block-one .inner-box {
      padding: 12px;
    }
  }
</style>


<!-- <section class="feature-section p_relative"> -->
<!--    <div class="auto-container">-->
<!--        <div class="inner-container p_relative d_block">-->
<!--            <div class="shape-layer" style="background-image: url(assets/images/shape/shape-17.webp);"></div>-->
<!--            <div class="title-box p_relative d_block centred">-->
<!--                <h2>Why Choose Brar Eye Hospital</h2>-->
<!--                <p>Trusted leaders in advanced and compassionate eye care for over two decades.</p>-->
<!--            </div>-->
<!--            <div class="row clearfix"> -->

<!-- Cataract Surgery -->
<!--                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">-->
<!--                    <div class="feature-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">-->
<!--                        <div class="inner-box p_relative d_block">-->
<!--                            <div class="icon-box p_relative d_block"><svg width="48" height="48" fill="none" viewBox="0 0 48 48">-->
<!--  <ellipse cx="24" cy="24" rx="16" ry="10" stroke="#0099A8" stroke-width="2"/>-->
<!--  <circle cx="24" cy="24" r="5" stroke="#0099A8" stroke-width="2"/>-->
<!--  <path d="M32 35L40 43" stroke="#0099A8" stroke-width="2" stroke-linecap="round"/>-->
<!--  <rect x="38" y="37" width="6" height="3" rx="1.5" transform="rotate(45 38 37)" fill="#0099A8"/>-->
<!--</svg></div>-->
<!--                            <h3>Cataract Surgery</h3>-->
<!--                            <p>We specialize in advanced <strong>phacoemulsification</strong> and premium <strong>intraocular lens implantation</strong>, ensuring clear, safe, and quick vision recovery after <strong>cataract removal</strong>.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!-- LASIK & SMILE Pro -->
<!--                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">-->
<!--                    <div class="feature-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">-->
<!--                        <div class="inner-box p_relative d_block">-->
<!--                            <div class="icon-box p_relative d_block"><svg width="48" height="48" fill="none" viewBox="0 0 48 48">-->
<!--  <ellipse cx="24" cy="24" rx="16" ry="10" stroke="#E96A00" stroke-width="2"/>-->
<!--  <circle cx="24" cy="24" r="5" stroke="#E96A00" stroke-width="2"/>-->
<!--  <line x1="24" y1="24" x2="42" y2="10" stroke="#E96A00" stroke-width="2" stroke-dasharray="3,3"/>-->
<!--  <circle cx="42" cy="10" r="2" fill="#E96A00"/>-->
<!--</svg></div>-->
<!--                            <h3>Advanced LASIK & SMILE Pro</h3>-->
<!--                            <p>Our <strong>bladeless</strong> and <strong>flapless laser vision correction</strong> ensures precision, comfort, and fast recovery—helping you see clearly without <strong>glasses or contact lenses</strong>.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!-- Retina & Glaucoma Care -->
<!--                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">-->
<!--                    <div class="feature-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">-->
<!--                        <div class="inner-box p_relative d_block">-->
<!--                            <div class="icon-box p_relative d_block"><svg width="48" height="48" fill="none" viewBox="0 0 48 48">-->
<!--  <ellipse cx="24" cy="24" rx="16" ry="10" stroke="#3168FF" stroke-width="2"/>-->
<!--  <circle cx="24" cy="24" r="5" stroke="#3168FF" stroke-width="2"/>-->
<!--  <path d="M24 24 Q28 18, 34 24" stroke="#3168FF" stroke-width="2" fill="none"/>-->
<!--  <path d="M24 24 Q20 30, 14 24" stroke="#3168FF" stroke-width="2" fill="none"/>-->
<!--</svg></div>-->
<!--                            <h3>Retina & Glaucoma Services</h3>-->
<!--                            <p>Comprehensive <strong>diagnosis and laser-based treatment</strong> for <strong>retinal disorders</strong> and <strong>glaucoma</strong> to prevent vision loss and maintain long-term eye health.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!-- Pediatric Care -->
<!--<div class="col-lg-3 col-md-6 col-sm-12 feature-block">-->
<!--  <div class="feature-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">-->
<!--    <div class="inner-box p_relative d_block">-->
<!--      <div class="icon-box p_relative d_block">-->
<!-- Child Eye Icon -->
<!--        <svg width="48" height="48" fill="none" viewBox="0 0 48 48">-->
<!--          <ellipse cx="24" cy="26" rx="14" ry="8" stroke="#4CAF70" stroke-width="2"/>-->
<!--          <circle cx="24" cy="27" r="4" stroke="#4CAF70" stroke-width="2"/>-->
<!--          <circle cx="16" cy="18" r="3.5" stroke="#4CAF70" stroke-width="2"/>-->
<!--          <circle cx="32" cy="18" r="3.5" stroke="#4CAF70" stroke-width="2"/>-->
<!--        </svg>-->
<!--      </div>-->
<!--      <h3>Pediatric Care</h3>-->
<!--      <p>From <strong>children's eye issues</strong> like <strong>squint</strong> and <strong>lazy eye (amblyopia)</strong>, our specialists provide gentle, child-focused ophthalmic expertise.</p>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- Trauma Care -->
<!--<div class="col-lg-3 col-md-6 col-sm-12 feature-block">-->
<!--  <div class="feature-block-one wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">-->
<!--    <div class="inner-box p_relative d_block">-->
<!--      <div class="icon-box p_relative d_block">-->
<!-- Eye with Shield Icon -->
<!-- Eye with Emergency Flash -->
<!--<svg width="48" height="48" fill="none" viewBox="0 0 48 48">-->
<!--  <ellipse cx="24" cy="27" rx="14" ry="8" stroke="#4CAF70" stroke-width="2"/>-->
<!--  <circle cx="24" cy="27" r="4" stroke="#4CAF70" stroke-width="2"/>-->
<!-- Flash/Emergency Bolt -->
<!--  <polygon points="32,15 30,21 34,21 28,29 30,23 26,23" fill="#FF5252"/>-->
<!--</svg>-->

<!--      </div>-->
<!--      <h3>Trauma Care</h3>-->
<!--      <p>From emergency trauma cases to critical vision preservation, our expert team ensures the highest level of urgent eye care when it matters most.</p>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->


<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</section>



<section class="service-section p_relative bg-color-1">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-4.webp);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-5.webp);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Our Services</span>
            <h2>A Global Leader in Treatment <br />of Eye Diseases</h2>
        </div>
        <div class="tabs-box">
            <div class="tab-btn-box p_relative d_block mb_70 centred">
               <ul class="tab-btns tab-buttons clearfix">

    <!-- 1. Cataract -->
    <li class="tab-btn active-btn" data-tab="#tab-1">
        <div class="icon-box"><i class="fas fa-eye"></i></div>
        <h4>Cataract</h4>
    </li>

    <!-- 2. Refractive -->
    <li class="tab-btn" data-tab="#tab-2">
        <div class="icon-box"><i class="fas fa-eye-slash"></i></div>
        <h4>Refractive Surgery</h4>
    </li>

    <!-- 3. Retina -->
    <li class="tab-btn" data-tab="#tab-3">
        <div class="icon-box"><i class="fas fa-low-vision"></i></div>
        <h4>Vitreo-Retina Services</h4>
    </li>

    <!-- 4. Uvea -->
    <li class="tab-btn" data-tab="#tab-4">
        <div class="icon-box"><i class="fas fa-eye"></i></div>
        <h4>Uvea Services</h4>
    </li>

    <!-- 5. Glaucoma -->
    <li class="tab-btn" data-tab="#tab-5">
        <div class="icon-box"><i class="fas fa-eye-dropper"></i></div>
        <h4>Glaucoma Services</h4>
    </li>

    <!-- 6. Cornea -->
    <li class="tab-btn" data-tab="#tab-6">
        <div class="icon-box"><i class="fas fa-circle"></i></div>
        <h4>Cornea Services</h4>
    </li>

    <!-- 7. Pediatric -->
    <li class="tab-btn" data-tab="#tab-7">
        <div class="icon-box"><i class="fas fa-child"></i></div>
        <h4>Pediatric Eye Care</h4>
    </li>

    <!-- 8. Squint -->
    <li class="tab-btn" data-tab="#tab-8">
        <div class="icon-box"><i class="fas fa-eye"></i></div>
        <h4>Squint (Strabismus)</h4>
    </li>

    <!-- 9. Oculoplasty -->
    <li class="tab-btn" data-tab="#tab-9">
        <div class="icon-box"><i class="fas fa-user-md"></i></div>
        <h4>Oculoplasty, Reconstructive & Cosmetic Eye Surgery</h4>
    </li>

    <!-- 10. Neuro -->
    <li class="tab-btn" data-tab="#tab-10">
        <div class="icon-box"><i class="fas fa-brain"></i></div>
        <h4>Neuro-Ophthalmology</h4>
    </li>

</ul>

            </div>
            
            
        
            <div class="tabs-content">
               <!-- Cataract -->
<div class="tab active-tab" id="tab-1">
  <div class="inner-box">
    <div class="row clearfix">
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div class="content_block_two">
          <div class="content-box">
            <div class="text">
              <h3>Cataract</h3>
              <p>
                At Brar Eye Hospital, we provide world-class cataract care using advanced
                <a href="cataract-surgery-bathinda.php" style="color: #03c0b4;">Phacoemulsification (stitchless)</a>
                and
                <a href="cataract-surgery-bathinda.php" style="color: #03c0b4;">Micro-Incision Cataract Surgery (MICS)</a>
                techniques for faster recovery and sharper vision.
              </p>
              <p>
                Our team uses the AMO Whitestar Signature Pro system — one of the world’s best phaco machines —
                ensuring minimal trauma, high precision, and exceptional safety.
              </p>
              <p>
                We offer a complete range of premium
                <a href="cataract-surgery-bathinda.php" style="color: #03c0b4;">Intraocular Lenses (IOLs)</a>
                to match individual visual needs, including aspheric, toric, and multifocal lenses for clearer,
                spectacle-free vision.
              </p>
            </div>

            <h4>Our Cataract Services Include:</h4>
            <br>
            <ul class="list-style-one clearfix">
              <li>Phacoemulsification (No-Stitch Surgery)</li>
              <li>Laser-Assisted Cataract Surgery</li>
              <li>Premium IOL Implants (Aspheric / Toric / Multifocal)</li>
              <li>Pediatric & Complicated Cataract Management</li>
              <li>Accurate IOL Power Calculation with IOL Master & Immersion Biometry</li>
              <li>Post-Operative Vision Optimization with Topcon AutoRefractometer</li>
            </ul>

            <p>
              Experience precision, safety, and faster visual recovery — only at Brar Eye Hospital.
            </p>
            <a href="cataract-surgery-bathinda.php" class="service-btn">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 image-column">
        <div class="image_block_two">
          <div class="image-box p_relative d_block">
            <figure class="image p_relative d_block">
              <img loading="lazy" src="assets/images/service/contaract surgery.avif" alt="Cataract Treatment">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



               <!-- Refractive Surgery -->
<div class="tab" id="tab-2">
    <div class="inner-box">
        <div class="row clearfix">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">

                        <div class="text">
                            <h3>Refractive Surgery</h3>
                            <p>
                                At Brar Eye Hospital, we offer the most advanced range of vision correction procedures 
                                to help you enjoy life without glasses or contact lenses. Our expert surgeons use 
                                cutting-edge laser technology to ensure precision, safety, and faster recovery.
                            </p>

                            <h4>Our Advanced Vision Correction Options:</h4>
                        </div>

                        <ul class="list-style-one clearfix">
                            <li>
                                <a href="laser-vision-correction-bathinda.php" style="color: #1abc9c;">SMILE PRO:</a>
                                The latest, bladeless laser vision correction with faster recovery, no flap, 
                                and minimal dryness.
                            </li>

                            <li>
                                <a href="laser-vision-correction-bathinda.php" style="color: #3498db;">
                                    Contoura Vision LASIK:
                                </a>
                                Personalized laser treatment that maps every curve of your cornea 
                                for HD-quality vision.
                            </li>

                            <li>
                                <a href="eye-surgery-vision-correction-bathinda.php" style="color: #e67e22;">
                                    Intralase LASIK (Blade-Free):
                                </a>
                                100% laser-based technique for precise flap creation and superior safety.
                            </li>

                            <li>
                                <a href="laser-vision-correction-bathinda.php" style="color: #9b59b6;">
                                    Conventional LASIK:
                                </a>
                                Proven and effective laser vision correction for myopia, hyperopia, and astigmatism.
                            </li>

                            <li>
                                <a href="eye-surgery-vision-correction-bathinda.php" style="color: #e74c3c;">
                                    ICL (Implantable Collamer Lens):
                                </a>
                                Ideal for patients unsuitable for LASIK; a biocompatible lens implanted 
                                inside the eye for clear, sharp vision.
                            </li>

                            <li style="color: #2ecc71;">
                                C3R (Corneal Collagen Cross-Linking): Strengthens and stabilizes the cornea 
                                in keratoconus patients to prevent further vision deterioration.
                            </li>
                        </ul>

                        <p>
                            Experience modern laser technology and a personalized approach for visual freedom — 
                            only at Brar Eye Hospital.
                        </p>

                        <a href="eye-surgery-vision-correction-bathinda.php" class="service-btn">Read More</a>

                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box p_relative d_block">
                        <figure class="image p_relative d_block">
                            <img loading="lazy" src="assets/images/service/Refrective surgery.avif" alt="Refractive Surgery">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




             <!-- Retina -->
<div class="tab" id="tab-3">
    <div class="inner-box">
        <div class="row clearfix">

            <!-- LEFT -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">
                        
                        <div class="text">
                            <h3>Vitreo-Retina Services</h3>

                            <p>
                                Retina and vitreous problems can cause sudden or silent vision loss. 
                                Our Retina Specialists provide advanced diagnosis and treatment for all retinal diseases.
                            </p>

                            <h4>What We Treat:</h4>
                            <ul class="list-style-one clearfix">
                                <li>Diabetic Retinopathy</li>
                                <li>Hypertensive Retinopathy</li>
                                <li>Age-Related Macular Degeneration (AMD)</li>
                                <li>Retinal Detachment</li>
                                <li>Trauma-Related Retinal Injuries</li>
                                <li>Pediatric Retina & ROP Screening</li>
                            </ul>

                            <h4>Retina Tests:</h4>
                            <ul class="list-style-one clearfix">
                                <li>B-Scan</li>
                                <li>OCT Scan</li>
                                <li>FFA (Angiography)</li>
                                <li>Indirect Ophthalmoscopy</li>
                            </ul>

                            <h4>Treatments:</h4>
                            <ul class="list-style-one clearfix">
                                <li>Laser Treatment</li>
                                <li>Intravitreal Injections</li>
                                <li>Vitrectomy Surgery (23G/25G)</li>
                                <li>Management of Cataract-Related Complications</li>
                            </ul>

                            <p>
                                Early diagnosis and timely treatment can save vision.
                            </p>

                            <a href="retina-uvea-treatment-bathinda.php" class="service-btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- IMAGE -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box p_relative d_block">
                        <figure class="image p_relative d_block">
                            <img loading="lazy" src="assets/images/service/Retina-Update.webp" alt="Retina Services">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Uvea -->
<div class="tab" id="tab-4">
    <div class="inner-box">
        <div class="row clearfix">

            <!-- LEFT -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">
                        
                        <div class="text">
                            <h3>Uvea Services</h3>

                            <p>
                                The uvea includes the iris, ciliary body, and choroid. 
                                Inflammation of these structures is called Uveitis and can damage vision quickly if untreated.
                            </p>

                            <h4>Symptoms of Uveitis:</h4>
                            <ul class="list-style-one clearfix">
                                <li>Eye Pain & Redness</li>
                                <li>Light Sensitivity</li>
                                <li>Floaters (black moving spots)</li>
                                <li>Blurred Vision</li>
                            </ul>

                            <h4>Causes:</h4>
                            <ul class="list-style-one clearfix">
                                <li>Infections</li>
                                <li>Autoimmune Diseases</li>
                                <li>Eye Injury</li>
                                <li>Systemic Illness</li>
                            </ul>

                            <h4>Treatment Includes:</h4>
                            <ul class="list-style-one clearfix">
                                <li>Steroid & Dilating Eye Drops</li>
                                <li>Oral Medicines</li>
                                <li>Injections (if required)</li>
                                <li>Immunosuppressive Therapy for chronic cases</li>
                            </ul>

                            <p>
                                Early diagnosis is critical — untreated uveitis can cause permanent vision loss.
                            </p>

                            <a href="retina-uvea-treatment-bathinda.php" class="service-btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- IMAGE -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box p_relative d_block">
                        <figure class="image p_relative d_block">
                            <img loading="lazy" src="assets/images/service/Retina-Update.webp" alt="Uvea Services">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



                <!-- Glaucoma -->
                <div class="tab" id="tab-4">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_two">
                                    <div class="content-box">
                                        <div class="text">
                                            <h3>Glaucoma Services</h3>
                                            <p>
                                                At Brar Eye Hospital, we provide comprehensive care for Glaucoma, one of the leading causes of preventable blindness. With early diagnosis and regular follow-up, vision loss can be controlled and stabilized.
                                            </p>

                                            <h4>About Glaucoma:</h4>
                                            <p>
                                                Glaucoma damages the optic nerve, often due to increased eye pressure. It develops silently — without pain or noticeable symptoms — and can lead to irreversible vision loss if left untreated. Early detection and continuous monitoring are vital for protecting vision.
                                            </p>

                                            <h4>Our Diagnostic Excellence:</h4>
                                            <p>
                                                We are equipped with the latest technology for accurate diagnosis and long-term management of glaucoma, ensuring effective pressure control and patient safety.
                                            </p>

                                            <ul class="list-style-one clearfix">
                                                <li>Applanation & Non-Contact Tonometers – Precise eye pressure measurement</li>
                                                <li>Humphrey Field Analyzer (Zeiss) – Comprehensive visual field testing</li>
                                                <li>GDXVCC & OCT – Detailed optic nerve and nerve fiber layer analysis</li>
                                                <li>Perimetry and Pachymetry for corneal thickness evaluation</li>
                                                <li>Digital Fundus Documentation for regular follow-up</li>
                                            </ul>

                                            <p>
                                                Brar Eye Hospital offers personalized glaucoma management including medical therapy, laser procedures, and advanced surgical options such as Minimally Invasive Glaucoma Surgery (MIGS) for maximum vision preservation.
                                            </p>

                                            <a href="glaucoma-treatment-bathinda.php" class="service-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image_block_two">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <img loading="lazy" src="assets/images/service/glaucoma.avif" alt="Glaucoma Services">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Cornea & Eye Bank -->
                <div class="tab" id="tab-5">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_two">
                                    <div class="content-box">
                                        <div class="text">
                                            <h3>Cornea Services</h3>
                                            <p>
                                                At Brar Eye Hospital, we offer advanced medical and surgical care for all corneal and ocular surface diseases, ensuring clear vision and healthy eyes.
                                            </p>

                                            <h4>About the Cornea:</h4>
                                            <p>
                                                The cornea is the transparent, dome-shaped front layer of the eye that provides two-thirds of its focusing power. Its clarity and smooth surface are essential for sharp vision.
                                            </p>

                                            <h4>Conditions We Treat:</h4>
                                            <ul class="list-style-one clearfix">
                                                <li>Corneal Infections & Injuries</li>
                                                <li>Dry Eye & Allergic Eye Diseases</li>
                                                <li>Keratoconus & Other Ectatic Disorders</li>
                                                <li>Pterygium & Corneal Dystrophies</li>
                                                <li>Ocular Surface Disorders & Conjunctivitis</li>
                                                <li>Refractive Errors (Myopia, Hypermetropia, Astigmatism)</li>
                                            </ul>

                                            <h4>Surgical Procedures:</h4>
                                            <ul class="list-style-one clearfix">
                                                <li>Corneal Transplant (PK, DSAEK, Lamellar Keratoplasty)</li>
                                                <li>Keratoprosthesis (Artificial Cornea)</li>
                                                <li>Amniotic Membrane & Limbal Transplants</li>
                                                <li>Scleral Grafting & Tissue Adhesive Repair</li>
                                            </ul>

                                            <h4>Diagnostic & Supportive Facilities:</h4>
                                            <ul class="list-style-one clearfix">
                                                <li>Pachymetry – Corneal thickness measurement</li>
                                                <li>Corneal Topography – Corneal surface mapping</li>
                                                <li>Aberrometry – Optical error analysis</li>
                                                <li>Specialized Contact Lens Fitting</li>
                                            </ul>

                                            <p>
                                                Brar Eye Hospital — Complete care for your cornea, restoring clarity and vision with precision.
                                            </p>

                                            <a href="cornea-treatment-eye-bank-bathinda.php" class="service-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image_block_two">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <img loading="lazy" src="assets/images/service/Cornea-Update.webp" alt="Cornea Services">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



               <!-- Pediatric Eye Care -->
<div class="tab" id="tab-6">
    <div class="inner-box">
        <div class="row clearfix">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">

                        <div class="text">
                            <h3>Pediatric Eye Care</h3>

                            <p>
                                Children often do not complain about poor vision. 
                                Early eye checkups are important to detect problems like refractive errors, lazy eye, injuries, and allergies.
                            </p>

                            <h4>When Should a Child Get an Eye Checkup?</h4>
                            <ul class="list-style-one clearfix">
                                <li>Crossed / misaligned eyes</li>
                                <li>Holding objects too close</li>
                                <li>Difficulty seeing the school blackboard</li>
                                <li>Blurry or unclear vision</li>
                                <li>Itching or burning in eyes</li>
                                <li>Family history of glasses</li>
                            </ul>

                            <p>
                                Regular checkups are advised between ages 7–16 even if the child seems normal.
                            </p>

                            <h4>Common Eye Problems in Children</h4>
                            <ul class="list-style-one clearfix">
                                <li>Refractive errors</li>
                                <li>Lazy eye (Amblyopia)</li>
                                <li>Eye injuries</li>
                                <li>Watering or allergies</li>
                                <li>Squint</li>
                            </ul>

                            <h4>Treatment Options</h4>
                            <ul class="list-style-one clearfix">
                                <li>Spectacles (most effective & safest)</li>
                                <li>Contact lenses after age 12–13</li>
                                <li>LASIK after 18 years (when power is stable)</li>
                            </ul>

                            <p>
                                Early treatment ensures healthy vision and normal eye development.
                            </p>

                            <a href="child-eye-care-squint-treatment-bathinda.php" class="service-btn">Read More</a>

                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box p_relative d_block">
                        <figure class="image p_relative d_block">
                            <img loading="lazy" src="assets/images/service/child eyecare.avif" alt="Pediatric Eye Care">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Squint -->
<div class="tab" id="tab-10">
    <div class="inner-box">
        <div class="row clearfix">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box">

                        <div class="text">
                            <h3>Squint (Strabismus)</h3>

                            <p>
                                Squint is a condition where both eyes do not point in the same direction. 
                                It affects 2–4% of children and may also appear in adults.
                            </p>

                            <h4>Causes of Squint</h4>
                            <ul class="list-style-one clearfix">
                                <li>Weak or imbalanced eye muscles</li>
                                <li>Abnormal nerve signals to eye muscles</li>
                                <li>Poor or blurred vision</li>
                                <li>Hereditary factors</li>
                                <li>Cataract or other eye diseases</li>
                            </ul>

                            <h4>Symptoms</h4>
                            <ul class="list-style-one clearfix">
                                <li>Eyes not aligned</li>
                                <li>Closing one eye in sunlight</li>
                                <li>Head tilting to see clearly</li>
                                <li>Poor depth perception</li>
                            </ul>

                            <h4>Treatment</h4>
                            <p>
                                Children do NOT outgrow squint — it requires proper evaluation.
                            </p>

                            <ul class="list-style-one clearfix">
                                <li><strong>Glasses:</strong> If caused by refractive errors</li>
                                <li><strong>Eye exercises:</strong> To improve muscle balance</li>
                                <li><strong>Squint Surgery:</strong> Corrects eye alignment; 
                                    quick recovery, minimal hospital stay</li>
                            </ul>

                            <p>
                                After complete eye testing, our specialists recommend optical, medical, or surgical treatment depending on the type of squint.
                            </p>

                            <a href="child-eye-care-squint-treatment-bathinda.php" class="service-btn">Read More</a>

                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box p_relative d_block">
                        <figure class="image p_relative d_block">
                            <img loading="lazy" src="assets/images/service/child eyecare.avif" alt="Squint Treatment">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




                <!-- Oculoplasty -->
                <div class="tab" id="tab-7">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_two">
                                    <div class="content-box">
                                        <div class="text">
                                            <h3>Oculoplasty, Reconstructive & Cosmetic Eye Surgery</h3>
                                            <p>
                                                At Brar Eye Hospital, our Oculoplasty Department specializes in both functional and aesthetic eye surgeries, restoring appearance, comfort, and confidence with precision and care.
                                            </p>

                                            <h4>Our Expertise Includes:</h4>
                                            <ul class="list-style-one clearfix">
                                                <li><strong>Reconstructive Eye Surgery:</strong> Correction of deformities caused by injury, tumors, birth defects, or previous surgeries.</li>
                                                <li><strong>Cosmetic Eye Surgery:</strong> Eyelid reshaping (Blepharoplasty), removal of under-eye bags, and correction of droopy eyelids for a refreshed, youthful look.</li>
                                                <li><strong>Botox & Filler Injections:</strong> Non-surgical treatments to reduce wrinkles, lift eyebrows, and enhance facial contours with natural-looking results.</li>
                                                <li><strong>Lacrimal (Tear Duct) Surgery:</strong> Treatment for watering eyes caused by blocked tear passages.</li>
                                                <li><strong>Orbital Surgery:</strong> Surgical care for fractures, tumors, or infections around the eye and orbit.</li>
                                            </ul>

                                            <p>
                                                At Brar Eye Hospital, we combine advanced technology with specialist expertise to ensure both functional restoration and cosmetic enhancement, tailored to each patient’s needs.
                                            </p>

                                            <p>
                                                Brar Eye Hospital — Where precision meets aesthetics in eye care.
                                            </p>

                                            <a href="oculoplastic-surgery-bathinda.php" class="service-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image_block_two">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <img loading="lazy" src="assets/images/service/oculoplasty.avif" alt="Oculoplasty, Reconstructive & Cosmetic Eye Surgery">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Neuro-Ophthalmology -->
                <div class="tab" id="tab-8">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_two">
                                    <div class="content-box">
                                        <div class="text">
                                            <h3>Neuro-Ophthalmology</h3>
                                            <p>
                                                The Neuro-Ophthalmology Department at Brar Eye Hospital deals with vision problems related to the brain, optic nerve, and the eye–brain connection.
                                            </p>

                                            <h4>Our Expertise Includes:</h4>
                                            <ul class="list-style-one clearfix">
                                                <li>Optic Nerve Disorders – Inflammation, swelling, or damage affecting vision</li>
                                                <li>Sudden or Unexplained Vision Loss</li>
                                                <li>Double Vision & Eye Movement Problems</li>
                                                <li>Visual Field Defects caused by stroke or brain injury</li>
                                                <li>Pupil Abnormalities & Eyelid Drooping (Ptosis)</li>
                                            </ul>

                                            <p>
                                                Our specialists use advanced imaging and diagnostic tools to identify and treat complex neurological causes of vision problems, ensuring accurate diagnosis and effective management.
                                            </p>

                                            <p>
                                                Brar Eye Hospital — Where the eyes and brain connect for better vision.
                                            </p>

                                            <a href="best-optic-nerve-doctor-bathinda.php" class="service-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image_block_two">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <img loading="lazy" src="assets/images/service/neuro-ophthalmology.avif" alt="Neuro-Ophthalmology Services">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>

<!-- Full-Width Image Banner -->
<div class="emi-image-banner">
    <img loading="lazy" src="emi-banner.webp" alt="EMI Banner" />
</div>

<style>
    .emi-image-banner img {
        width: 100%;
        height: auto;
        display: block;
    }
</style>
<br><br>









<!-- contact-style-two -->
<!--<section class="contact-style-two p_relative">-->
<!--    <div class="pattern-layer">-->
<!--        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-55.webp);"></div>-->
<!--        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-56.webp);"></div>-->
<!--    </div>-->
<!--    <div class="auto-container">-->
<!--        <div class="row clearfix">-->
<!--            <div class="col-lg-8 col-md-12 col-sm-12 big-column offset-lg-2">-->
<!--                <div class="form-inner">-->
<!--                    <h2>Book an Appointment</h2>-->

<!--                    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>-->
<!--                        <div class="alert alert-success" style="background-color: #dff0d8; color: #3c763d; padding: 15px; margin-bottom: 20px; border: 1px solid #d6e9c6; border-radius: 4px;">-->
<!--                            Your message has been sent successfully. We will contact you shortly.-->
<!--                        </div>-->
<!--                    <?php endif; ?>-->

<!--                    <?php if (isset($_GET['error']) && $_GET['error'] == '1'): ?>-->
<!--                        <div class="alert alert-danger" style="background-color: #f2dede; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid #ebccd1; border-radius: 4px;">-->
<!--                            There was an error sending your message. Please try again later.-->
<!--                        </div>-->
<!--                    <?php endif; ?>-->

<!--                    <form method="post" action="final-contact-form-solution.php" id="contact-form">-->
<!--                        <div class="row clearfix">-->
<!--                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
<!--                                <input type="text" name="username" placeholder="Your Name" required>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
<!--                                <input type="email" name="email" placeholder="Your Email" required>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
<!--                                <input type="text" name="phone" placeholder="Phone" required>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">-->
<!--                                <input type="text" name="subject" placeholder="Subject" required>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">-->
<!--                                <textarea name="message" placeholder="Message" required></textarea>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 centred">-->
<!--                                <button class="theme-btn btn-one" type="submit" name="submit-form">Submit Now</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- contact-style-two end -->
<!-- contact-style-two end -->
<!-- booking-form-section end -->
<!--<style>-->
<!--    /* CONTACT STYLE TWO FORM */-->
<!--    .contact-style-two {-->
<!--        position: relative;-->
<!--        background: #f8fafb;-->
<!--        padding: 70px 0;-->
<!--        border-radius: 18px;-->
<!--        box-shadow: 0 12px 36px rgba(3, 192, 180, 0.08);-->
<!--        overflow: hidden;-->
<!--    }-->

<!--    .contact-style-two .pattern-layer .pattern-1,-->
<!--    .contact-style-two .pattern-layer .pattern-2 {-->
<!--        position: absolute;-->
<!--        top: 0;-->
<!--        left: 0;-->
<!--        right: 0;-->
<!--        bottom: 0;-->
<!--        z-index: 1;-->
<!--        opacity: 0.46;-->
<!--        background-repeat: no-repeat;-->
<!--        background-position: center;-->
<!--        background-size: contain;-->
<!--        pointer-events: none;-->
<!--    }-->

<!--    .contact-style-two .auto-container {-->
<!--        position: relative;-->
<!--        z-index: 2;-->
<!--    }-->

<!--    .contact-style-two .form-inner {-->
<!--        background: #fff;-->
<!--        border-radius: 15px;-->
<!--        box-shadow: 0 8px 36px rgba(3, 192, 180, 0.10);-->
<!--        padding: 38px 32px 32px 32px;-->
<!--    }-->

<!--    .contact-style-two .form-inner h2 {-->
<!--        font-size: 2.1rem;-->
<!--        color: #03c0b4;-->
<!--        text-align: center;-->
<!--        font-weight: 700;-->
<!--        margin-bottom: 18px;-->
<!--        letter-spacing: 1px;-->
<!--    }-->

<!--    .contact-style-two .alert {-->
<!--        font-size: 1rem;-->
<!--        margin-bottom: 20px;-->
<!--        border-radius: 6px;-->
<!--        border: 1px solid #e0e0e0;-->
<!--        box-shadow: 0 2px 8px rgba(3, 192, 180, 0.05);-->
<!--    }-->

<!--    #contact-form .form-group {-->
<!--        margin-bottom: 20px;-->
<!--    }-->

<!--    #contact-form input,-->
<!--    #contact-form textarea {-->
<!--        width: 100%;-->
<!--        padding: 12px 14px;-->
<!--        font-size: 1rem;-->
<!--        border-radius: 7px;-->
<!--        border: 1px solid #e0e7ef;-->
<!--        background: #f7fcfd;-->
<!--        color: #222;-->
<!--        transition: border-color 0.2s;-->
<!--        font-family: inherit;-->
<!--    }-->

<!--    #contact-form input:focus,-->
<!--    #contact-form textarea:focus {-->
<!--        border-color: #03c0b4;-->
<!--        outline: none;-->
<!--        background: #fff;-->
<!--    }-->

<!--    #contact-form textarea {-->
<!--        min-height: 120px;-->
<!--        resize: vertical;-->
<!--    }-->

<!--    .theme-btn.btn-one {-->
<!--        background: #03c0b4;-->
<!--        color: #fff;-->
<!--        border: none;-->
<!--        border-radius: 7px;-->
<!--        padding: 14px 38px;-->
<!--        font-size: 1.08rem;-->
<!--        font-weight: 600;-->
<!--        box-shadow: 0 4px 18px rgba(3, 192, 180, 0.16);-->
<!--        cursor: pointer;-->
<!--        transition: background 0.24s, box-shadow 0.24s;-->
<!--    }-->

<!--    .theme-btn.btn-one:hover {-->
<!--        background: #fd7e14;-->
<!--        box-shadow: 0 6px 20px rgba(253, 126, 20, 0.10);-->
<!--    }-->

<!--    @media (max-width: 991px) {-->
<!--        .contact-style-two .form-inner {-->
<!--            padding: 28px 10px 24px 10px;-->
<!--        }-->

<!--        .contact-style-two {-->
<!--            padding: 35px 0;-->
<!--            border-radius: 12px;-->
<!--        }-->
<!--    }-->
<!--</style>-->

<!-- ADD THIS IN HEAD if not already present -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-p1Cm..." crossorigin="anonymous" referrerpolicy="no-referrer" />




<!-- ===== Animated Awards / Achievements Section (updated background + colors) ===== -->
<section class="award-achievements-section">
  <div class="wrap">
    <div class="left-card">
      <div class="image-card">
        <!-- Replace with your PNG path -->
        <img loading="lazy" src="/assets/images/achievement.webp" alt="Award presentation" class="award-img" />
        <div class="caption">
          <p style="color:white; margin:0; font-size:15px; line-height:1.4;">
            The IIRSI Gold Medal is awarded to <strong>Dr. P. S. Brar</strong> for his outstanding
            contribution in the field of Ophthalmology presented by <em>Mrs. Sheela Dixit</em>.
          </p>
          <a href="best-eye-hospital-bathinda.php" class="btn-cta">Learn More <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>

    <div class="right-list">
      <h3 class="eyebrow">Achievements</h3>
      <h2 class="title">We Did <span>First</span></h2>

      <ul class="achievements">
        <li><i class="fa-solid fa-square-check"></i> First NABH Accredited Eye Hospital of North India</li>
        <li><i class="fa-solid fa-square-check"></i> First hospital in area offering sutureless phaco emulsion</li>
        <li><i class="fa-solid fa-square-check"></i> First Eye Hospital in Malwa to start LASIK LASER for removal of glasses</li>
        <li><i class="fa-solid fa-square-check"></i> First Eye Hospital in Punjab to start Contoura Vision (Topography-Guided LASIK)</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== Styles (paste into your stylesheet or inside <style> for quick testing) ===== -->
<style>
:root{
  --brand-1: #1dd2c3;
  --brand-2: #f17732;
  --bg-light-1: #f3fbfa;
  --bg-light-2: #ffffff;
  --panel: rgba(11,18,32,0.06);
}

/* Section layout */
.award-achievements-section{
  padding: 56px 20px;
  background: linear-gradient(180deg, var(--bg-light-1) 0%, var(--bg-light-2) 100%);
  font-family: "Segoe UI", Roboto, Arial, sans-serif;
  color: #0b1220; /* default text color - dark for readability */
}

/* center container */
.award-achievements-section .wrap{
  max-width: 1180px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 36px;
  align-items: center;
}

/* LEFT card (image) */
.left-card .image-card{
  background: linear-gradient(180deg, rgba(13,41,56,0.03), rgba(0,0,0,0.02));
  border-radius: 22px;
  padding: 20px;
  box-shadow: 0 18px 40px rgba(0,0,0,0.08);
  position: relative;
  overflow: visible;
  transition: transform 450ms cubic-bezier(.2,.9,.3,1), box-shadow 300ms;
}

/* floating / tilt */
.left-card .image-card:hover{
  transform: translateY(-8px) rotateX(1.2deg) rotateY(-2deg);
  box-shadow: 0 28px 60px rgba(0,0,0,0.14);
}

/* image */
.award-img{
  width: 100%;
  display: block;
  border-radius: 16px;
  object-fit: cover;
  max-height: 520px;
  transition: transform 600ms ease, filter 400ms ease;
  background: #fff;
}

/* subtle parallax on hover */
.left-card .image-card:hover .award-img{
  transform: scale(1.03) translateY(-6px);
  filter: saturate(1.02);
}

/* caption box overlay placed slightly overlapping bottom of image */
.caption{
  position: absolute;
  left: 24px;
  right: 24px;
  bottom: -48px; /* overlaps below image for floating caption look */
  background: linear-gradient(180deg, rgba(10,30,40,0.9), rgba(10,20,30,0.92));
  color: #fff;
  padding: 18px 22px;
  border-radius: 12px;
  box-shadow: 0 12px 30px rgba(0,0,0,0.28);
  text-align: center;
  transform: translateY(12px);
  opacity: 0;
  animation: captionIn 700ms forwards 300ms cubic-bezier(.2,.9,.3,1);
}

/* ensure caption visible on small screens (move inside image) */
@media (max-width: 600px){
  .caption{ position: absolute; bottom: 18px; left: 18px; right: 18px; opacity: 1; transform:none; }
}

/* CTA button in caption */
.caption .btn-cta{
  display: inline-block;
  margin-top: 12px;
  background: linear-gradient(90deg, var(--brand-1), var(--brand-2));
  color: #fff;
  padding: 10px 20px;
  border-radius: 10px;
  font-weight: 600;
  text-decoration: none;
  box-shadow: 0 8px 22px rgba(27,37,46,0.18);
  transition: transform 220ms ease, box-shadow 220ms ease, filter 220ms;
}
.caption .btn-cta i{ margin-left: 8px; }

/* CTA hover */
.caption .btn-cta:hover{
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(23,33,42,0.28);
}

/* right list - headings */
.right-list .eyebrow{
  font-size: 15px;
  color: #444;
  margin: 0 0 8px 0;
  letter-spacing: 0.6px;
  text-transform: uppercase;
}
.right-list .title{
  font-size: 36px;
  margin: 0 0 18px 0;
  font-weight: 700;
  display:flex;
  align-items:center;
  gap:12px;
  color: #0b1220;
}
.right-list .title span{
  color: var(--brand-2);
  padding-left:12px;
  border-left:6px solid rgba(0,0,0,0.06);
  padding-left:12px;
}

/* achievements list */
.achievements{
  list-style: none;
  padding: 0;
  margin: 18px 0 0 0;
  display: grid;
  gap: 16px;
}
.achievements li{
  font-size: 18px;
  line-height: 1.45;
  display: flex;
  align-items: flex-start;
  gap: 12px;
  color: #0b1220; /* readable dark text */
  opacity: 0;
  transform: translateY(10px);
  animation: itemIn 600ms forwards;
}

/* staggered animation delays */
.achievements li:nth-child(1){ animation-delay: 0.15s; }
.achievements li:nth-child(2){ animation-delay: 0.28s; }
.achievements li:nth-child(3){ animation-delay: 0.42s; }
.achievements li:nth-child(4){ animation-delay: 0.56s; }

/* check icon style */
.achievements li i{
  font-size: 20px;
  color: #fff;
  background: linear-gradient(90deg, var(--brand-1), var(--brand-2));
  padding: 8px;
  border-radius: 6px;
  box-shadow: 0 8px 18px rgba(25,25,25,0.08);
}

/* responsive layout */
@media (max-width: 980px){
  .award-achievements-section .wrap{ grid-template-columns: 1fr; gap: 28px; padding: 36px 16px; }
  .caption{ left: 18px; right: 18px; bottom: 18px; }
  .right-list .title{ font-size: 28px; }
}

/* animations */
@keyframes captionIn {
  to { transform: translateY(0); opacity: 1; }
}
@keyframes itemIn {
  to { transform: translateY(0); opacity: 1; }
}
</style>
<!-- Google reCAPTCHA Script (ADD ONCE ON PAGE) -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section id="brar-contact-section"
style="
max-width:900px;
margin:40px auto;
border-radius:16px;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
box-shadow:0 15px 35px rgba(0,0,0,0.1);
background:#fff;
color:#333;
overflow:hidden;
border:1px solid #eee;
">

  <div style="display:flex; align-items:stretch; flex-wrap:wrap;">

    <div style="flex:1; min-width:300px; padding:40px;">

      <h2 style="
      text-align:left;
      font-size:26px;
      margin-bottom:25px;
      font-weight:700;
      color:#333;
      border-left:5px solid #1dd2c3;
      padding-left:15px;">
        Book an Appointment
      </h2>

      <form action="/contact_section/form-process.php"
            method="POST"
            style="display:flex; flex-direction:column; gap:18px;">

        <!-- Honeypot -->
        <div style="display:none;">
          <input type="text" name="website_url" value="">
        </div>

        <!-- Name & Mobile -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <input type="text" name="name" placeholder="Full Name" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
            
            <input type="text" name="mobile" placeholder="Mobile Number" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
        </div>

        <!-- Email & Age -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <input type="email" name="email" placeholder="Email Address" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
            
            <input type="number" name="age" placeholder="Age" required
            style="width:100px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
        </div>

        <!-- Doctor & Branch -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">

            <select name="doctor" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">

                <option value="" disabled selected>Choose Doctor</option>

                <option value="Dr. P.S. Brar">Dr. P.S. Brar – Medical Director & Chief Eye Surgeon</option>
                <option value="Dr. M.S. Brar">Dr. M.S. Brar – Senior Cataract & Paediatric Surgeon</option>
                <option value="Dr. J.K. Gupta">Dr. J.K. Gupta – Senior Consultant Ophthalmologist</option>
                <option value="Dr. Sunny Goyal">Dr. Sunny Goyal – Cataract & Glaucoma Surgeon</option>
                <option value="Dr. Anand Singh Brar">Dr. Anand Singh Brar – Vitreo-Retina Consultant</option>
                <option value="Dr. B. Ravinder Naik">Dr. B. Ravinder Naik – Cataract, Strabismus & Pediatric Ophthalmology Consultant</option>
                <option value="Dr. Aazambir Singh Brar">Dr. Aazambir Singh Brar – Cataract, Refractive & Vitreo-Retina Surgeon</option>

            </select>

            <select name="branch" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">

                <option value="" disabled selected>Select Branch</option>
                <option value="Kotkapura">Kotkapura</option>
                <option value="Bathinda">Bathinda</option>

            </select>

        </div>

        <!-- Description -->
        <textarea name="description" rows="3"
        placeholder="Briefly describe your eye concern..."
        required
        style="padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; resize:none; outline:none;"></textarea>

        <!-- RECAPTCHA -->
        <div style="transform:scale(0.9); transform-origin:0 0;">
            <div class="g-recaptcha" data-sitekey="6Lcr63AsAAAAAFh4z7-avvXy9-Zi7PnJuFM40IG6"></div>
        </div>

        <!-- Button -->
        <button type="submit"
        style="
        padding:15px;
        background:linear-gradient(to right,#1dd2c3,#18b3a5);
        color:#ffffff;
        border:none;
        border-radius:8px;
        font-size:16px;
        font-weight:600;
        cursor:pointer;
        box-shadow:0 8px 20px rgba(29,210,195,0.3);
        text-transform:uppercase;
        letter-spacing:1px;">
          Confirm Appointment
        </button>

      </form>

    </div>

  </div>

</section>

<!-- about-section -->
<section class="about-section" style="position: relative; overflow: hidden;">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Left: Image + Mission and Vision -->
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_one" style="text-align: center;">
                    <div class="image-box" style="margin: 0 auto; position: relative;">
                        <div class="shape" style="background-image: url(assets/images/shape/shape-1.webp);"></div>
                        <figure class="image">
                            <img loading="lazy" src="assets/images/1 copy (2) (1).webp" alt="Eye surgeon in Bathinda" style="max-width: 100%; border-radius: 10px;">
                        </figure>
                        <div class="text p_absolute r_0 b_0" style="right: 20px; bottom: 10px; text-align: right;">
                            <h2 style="font-size: 48px; margin: 0;">30+</h2>
                            <h4 style="font-size: 18px; color: #333; font-weight: 600;">Years of Excellence<br>in Eye Care</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: About Content -->
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box ml_30">
                        <div class="sec-title left p_relative d_block mb_25">
                            <span class="sub-title">About Us</span>
                            <h2>Trusted Eye Care Destination in Punjab</h2>
                        </div>

                        <div class="text p_relative d_block">
                            <p>
                                Brar Eye Hospital is a super-specialty eye hospital providing preventive and curative eye care across all ophthalmic subspecialties in hygienic, ergonomic, and patient-focused premises. The hospital is equipped with advanced technology operated by experienced and dedicated eye care professionals.
                            </p>
                            <p>
                                Founded in 1996, <span style="color:#03c0b4; font-weight:600;">Brar Eye Hospital, Kotkapura</span> began as a small clinic and evolved into a leading tertiary care surgical center. The network expanded with <span style="color:#03c0b4; font-weight:600;">Brar Eye Hospital, Bathinda</span>, inaugurated on 26th January 2014, extending advanced eye care to South Punjab.
                            </p>
                            <p>
                                We are proud to be the <span style="color:#03c0b4; font-weight:600;">First NABH Accredited Eye Hospital of North India</span> and the <span style="color:#03c0b4; font-weight:600;">First NABH Accredited Eye Hospital in Bathinda</span>. Strategically located on National Highway-15, Kotkapura, the hospital pioneered sutureless phacoemulsification cataract surgery, LASIK, Femtosecond Laser, and Contoura Vision in the Malwa region.
                            </p>
                            <p>
                                Together, both hospitals perform thousands of successful cataract, LASIK, corneal, and retinal surgeries each year and manage one of the region’s only Government Accredited Eye Banks. Brar Eye Hospital stands as a trusted name in Punjab for its compassionate care, modern infrastructure, and medical excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<hr>
<!-- about-section end -->
<style>
    .tab-btns {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tab-btn {
        background: #f1f1f1;
        border-radius: 20px;
        padding: 20px;
        width: 180px;
        text-align: center;
        cursor: pointer;
        transition: 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .tab-btn .icon-box {
        margin-bottom: 10px;
    }

    .tab-btn .icon-box img {
        width: 40px;
        height: 40px;
    }

    .tab-btn h4 {
        margin: 0;
        font-size: 18px;
        color: #000;
    }

    .tab-btn:hover,
    .tab-btn.active-btn {
        background-color: #00c4cc;
        color: #fff;
    }

    .tab-btn.active-btn h4 {
        color: #fff;
    }

    .tab-btn.active-btn .icon-box img {
        filter: brightness(0) invert(1);
    }

    .service-btn {
        display: inline-block;
        padding: 12px 30px;
        background-color: #00c4cc;
        color: #fff;
        border-radius: 30px;
        font-weight: 600;
        margin-top: 20px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .service-btn:hover {
        background-color: #009ba1;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 196, 204, 0.3);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .tab-btn {
            width: 150px;
            padding: 16px;
        }

        .tab-btn h4 {
            font-size: 16px;
        }

        .tab-btn .icon-box img {
            width: 35px;
            height: 35px;
        }

        .service-btn {
            padding: 10px 24px;
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .tab-btn {
            width: 100%;
            max-width: 300px;
        }

        .tab-btn h4 {
            font-size: 15px;
        }

        .tab-btn .icon-box img {
            width: 30px;
            height: 30px;
        }

        .service-btn {
            width: 100%;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }
    }
</style>

<section class="mission-vision-section">
  <div class="mv-flex-wrap">

    <!-- LEFT SIDE IMAGE -->
    <div class="mv-image left-image">
      <img loading="lazy" src="assets/images/bhatinda.webp" alt="Left Mission Vision Illustration">
    </div>

    <!-- CENTER: Mission + Vision -->
    <div class="mv-boxes">
      <div class="mv-single-box mission-box">
        <h3>Our Mission</h3>
        <p>
          We shall achieve this by building trust in us<br>
          through our transparent, dedicated and safe<br>
          medical practices.
        </p>
      </div>

      <div class="mv-single-box vision-box">
        <h3>Our Vision</h3>
        <p>
          To become the most preferred eye care hospital<br>
          and centre of excellence, providing eye care<br>
          services with passion, zeal and patient centric approach.
        </p>
      </div>
    </div>

    <!-- RIGHT SIDE IMAGE -->
    <div class="mv-image right-image">
      <img loading="lazy" src="assets/images/Kotkapura.webp" alt="Right Mission Vision Illustration">
    </div>

  </div>
</section>

<style>
/* Section base */
.mission-vision-section {
  margin-top: 60px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Flex wrapper (left image, center boxes, right image) */
.mv-flex-wrap {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  width: 100%;
  max-width: 1200px;
  flex-wrap: wrap;
}

/* Center Boxes */
.mv-boxes {
  display: flex;
  flex-direction: column;
  gap: 24px;
  justify-content: center;
  align-items: center;
  flex: 1 1 40%;
  min-width: 300px;
}

/* Individual Box */
.mv-single-box {
  background-color: #f8f9fa;
  border-radius: 10px;
  padding: 26px 34px;
  min-height: 170px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  box-sizing: border-box;
  font-size: 1.1rem;
  width: 100%;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 6px 22px rgba(0, 0, 0, 0.05);
}

.mv-single-box:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}

/* Colored accents */
.mission-box {
  border-left: 5px solid #03c0b4;
}
.vision-box {
  border-left: 5px solid #f47c20;
}

.mv-single-box h3 {
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 1.4rem;
}
.mv-single-box.mission-box h3 {
  color: #03c0b4;
}
.mv-single-box.vision-box h3 {
  color: #f47c20;
}

/* Images */
.mv-image {
  display: flex;
  align-items: center;
  justify-content: center;
  flex: 1 1 25%;
  min-width: 250px;
}
.mv-image img {
  width: 320px;
  height: 320px;
  object-fit: cover;
  border-radius: 14px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease;
}
.mv-image img:hover {
  transform: scale(1.04);
}

/* Responsive layout */
@media (max-width: 1024px) {
  .mv-flex-wrap {
    gap: 30px;
  }
  .mv-image img {
    width: 280px;
    height: 280px;
  }
}

@media (max-width: 900px) {
  .mv-flex-wrap {
    flex-direction: column;
    align-items: center;
    gap: 24px;
  }

  .mv-boxes {
    flex: 1 1 100%;
    order: 2;
  }

  .mv-image {
    flex: 1 1 100%;
    order: 1;
  }

  .mv-image img {
    width: 260px;
    height: 260px;
  }
}

@media (max-width: 480px) {
  .mv-single-box {
    padding: 20px;
    font-size: 1rem;
  }
  .mv-single-box h3 {
    font-size: 1.2rem;
  }
  .mv-image img {
    width: 220px;
    height: 220px;
  }
}
</style>





<br><br>
<hr>
<!-- ===== Brar Eye — Achievements (Theme-matched) ===== -->
<section class="brar-stats-theme" aria-label="Key achievements - Brar Eye">
  <div class="brar-stats-wrapper">
    <h2 class="brar-stats-title">Our Milestones & Achievements</h2>

    <div class="brar-stats-grid">
      <div class="stat-card">
        <div class="stat-value"><span class="count" data-target="1" data-unit="none" data-compact="1st">0</span></div>
        <div class="stat-label">NABH accredited<br>Hospital of North India</div>
      </div>

    <div class="stat-card">
    <div class="stat-value">
        <span class="count" data-target="1" data-unit="none" data-compact="1st">0</span>
    </div>

    <div class="stat-label">
        <strong>1st AND ONLY IN</strong><br>
        <span style="color:#1dd2c3; font-weight:700;">
            MALWA | HARYANA | RAJ. | J & K | HP
        </span>
     
      
    </div>
</div>


      <div class="stat-card">
        <div class="stat-value"><span class="count" data-target="500000" data-unit="number" data-compact="5 Lakh+">0</span></div>
        <div class="stat-label">Surgeries done</div>
      </div>

      <div class="stat-card">
        <div class="stat-value"><span class="count" data-target="2000000" data-unit="number" data-compact="20 Lakh+">0</span></div>
        <div class="stat-label">Patients served in last 30 years</div>
      </div>

      <div class="stat-card">
        <div class="stat-value"><span class="count" data-target="50000" data-unit="number" data-compact="50K+">0</span></div>
        <div class="stat-label">Refractive procedures done</div>
      </div>
    </div>
  </div>
</section>

<style>
/* Theme variables (change here if needed) */
:root {
  --brar-orange: #f17732;
  --brar-turquoise: #1dd2c3;
  --brar-dark: #0f3a55;
  --brar-muted: #596b75;
  --container-max: 1200px;
}

/* Section wrapper (light bg to sit under white header) */
.brar-stats-theme {
  width: 100%;
  padding: 48px 16px 80px; /* slightly more bottom spacing */
  background: #fbfdff; /* very light tint */
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* inner container */
.brar-stats-wrapper {
  max-width: var(--container-max);
  margin: 0 auto;
  padding: 6px 18px;
  text-align: center;
}

/* Title */
.brar-stats-title {
  color: var(--brar-dark);
  font-size: clamp(1.2rem, 2.4vw, 1.6rem);
  font-weight: 700;
  margin: 6px 0 22px;
  letter-spacing: 0.4px;
}

/* Grid: 5 across on wide screens */
.brar-stats-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 18px;
  align-items: stretch;
}

/* Card style matching header: clean white card with small orange accent */
.stat-card {
  background: #ffffff;
  border-radius: 12px;
  padding: 20px 14px;
  min-height: 140px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 24px rgba(16,34,44,0.06);
  border: 1px solid rgba(15,58,85,0.04);
  transition: transform .28s ease, box-shadow .28s ease;
}

/* subtle hover on desktop */
@media (hover: hover) and (pointer: fine) {
  .stat-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 48px rgba(16,34,44,0.10);
  }
}

/* Number styling - turquoise big number */
.stat-value .count {
  display: inline-block;
  font-weight: 800;
  color: var(--brar-turquoise);
  font-size: clamp(1.4rem, 3.2vw, 2.4rem);
  line-height: 1;
  margin-bottom: 6px;
  text-shadow: 0 2px 6px rgba(29,210,195,0.08);
}

/* Label text */
.stat-label {
  color: var(--brar-muted);
  font-weight: 600;
  font-size: 0.95rem;
  line-height: 1.45;
}

/* RESPONSIVE GRID */
@media (max-width: 1100px) {
  .brar-stats-grid { grid-template-columns: repeat(3, 1fr); }
}

@media (max-width: 720px) {
  .brar-stats-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
  .stat-card { min-height: 120px; padding: 16px 12px; }
  .stat-value .count { font-size: clamp(1.2rem, 5vw, 1.9rem); }
  .brar-stats-title { margin-bottom: 16px; }
}

@media (max-width: 420px) {
  .brar-stats-grid { grid-template-columns: 1fr; }
  .stat-card { padding: 12px; min-height: 100px; }
  .brar-stats-theme { padding-top: 30px; padding-bottom: 40px; }
}

/* Accessibility focus */
.stat-card:focus-within { outline: 3px solid rgba(29,210,195,0.12); outline-offset: 6px; }
</style>

<script>
/* Counter logic (theme-matched) */
(function() {
  function formatNumber(n) {
    return n.toLocaleString(); // standard formatting (500,000)
  }

  function animateTo(targetNum, element, duration = 1400) {
    let start = 0;
    const startTime = performance.now();
    function step(now) {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(progress * (targetNum - start) + start);
      element.textContent = formatNumber(value);
      if (progress < 1) {
        requestAnimationFrame(step);
      }
    }
    requestAnimationFrame(step);
  }

  function runCounter(el) {
    if (el.dataset.__ran) return;
    el.dataset.__ran = '1';

    const targetAttr = el.getAttribute('data-target') || '0';
    const compact = el.getAttribute('data-compact') || '';
    const unit = el.getAttribute('data-unit') || 'number';
    const targetNum = parseInt(targetAttr, 10) || 0;

    if (unit === 'none') {
      animateTo(targetNum, el, 600);
      setTimeout(function() {
        el.textContent = compact;
        el.setAttribute('aria-label', compact);
      }, 750);
      return;
    }

    animateTo(targetNum, el, 1400);
    setTimeout(function() {
      if (compact) {
        el.textContent = compact;
        el.setAttribute('aria-label', compact);
      }
    }, 1500 + Math.min(600, Math.round(targetNum / 500)));
  }

  // IntersectionObserver to start when visible
  const observer = new IntersectionObserver(function(entries, obs) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.count').forEach(runCounter);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.25 });

  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.stat-card').forEach(function(card) {
      observer.observe(card);
    });
    if (!('IntersectionObserver' in window)) {
      document.querySelectorAll('.count').forEach(function(el){ runCounter(el); });
    }
  });
})();
</script>
<hr>


<!-- chooseus-section -->
<section class="chooseus-section p_relative">
    <div class="bg-layer" style="background-image: url(assets/images/background/cover-pic-11.webp); width: 100%;
    height:90%;
    "></div>

    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-6 content-column">
                <div class="content_block_three">
                    <div class="content-box ml_30">
                        <div class="sec-title left mb_25">
                            <span class="sub-title">Why Choose Us</span>
                            <h2>Trusted Eye Care Since 1996</h2>
                        </div>
                        <div class="text">
                            <p>Brar Eye Hospital is a super-specialty eye hospital in Punjab, known for its commitment to advanced vision care, cutting-edge technology, and highly experienced eye specialists. We ensure compassionate care and outstanding outcomes.</p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item p_relative d_block">
                                        <h4>Experienced Eye Specialists</h4>
                                        <p>Our doctors are leaders in their fields, offering expert care in <a href="cataract-surgery-bathinda.php" style="color: #03c0b4;">Cataract Surgery</a>
                                            , <a href="retina-uvea-treatment-bathinda.php" style="color: #03c0b4;">Retina</a>
                                            , <a href="glaucoma-treatment-bathinda.php" style="color: #03c0b4;">Glaucoma</a>, <a href="laser-vision-correction-bathinda.php" style="color: #03c0b4;">Smile-Pro</a>, and more.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item p_relative d_block">
                                        <h4>Advanced Technology</h4>
                                        <p>We use the latest diagnostic and surgical equipment to provide accurate and safe treatments.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item p_relative d_block">
                                        <h4>High Surgery Success Rate</h4>
                                        <p>Over 5 lakh + surgeries performed with excellent patient outcomes and satisfaction.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item p_relative d_block">
                                        <h4>NABH Accredited Facility</h4>
                                        <p>We are proud to be the first NABH accredited eye hospital in North India, ensuring high standards of quality and safety.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text mt_20">
                            <p>With branches in Kotkapura and Bathinda, we are dedicated to bringing world-class eye care to Punjab and neighboring regions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<br><br><br>


<!-- ===== Image Carousel (right-to-left, clickable lightbox) ===== -->
<!-- Swiper CSS (already in your head earlier - kept here for safety) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
/* Carousel image styles */
.reviews-image-swiper {
  width: 100%;
  padding: 24px 20px 40px;
  box-sizing: border-box;
}
.reviews-image-swiper .swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
}
.review-image-card {
  width: 100%;
  max-width: 360px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(11,18,32,0.12);
  transition: transform .28s ease, box-shadow .28s ease;
  background: #fff;
  cursor: zoom-in;
}
.review-image-card img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
  vertical-align: middle;
}

/* hover zoom */
.review-image-card:hover {
  transform: translateY(-6px) scale(1.02);
  box-shadow: 0 20px 40px rgba(11,18,32,0.16);
}

/* Swiper navigation override */
.swiper-button-next, .swiper-button-prev {
  color: #f17732;
  width: 48px;
  height: 48px;
  background: rgba(255,255,255,0.95);
  border-radius: 50%;
  box-shadow: 0 8px 18px rgba(0,0,0,0.12);
}
.swiper-button-next:after, .swiper-button-prev:after {
  font-size: 18px;
  font-weight: 700;
}

/* Pagination bullets */
.swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background: #cbd5e1;
}
.swiper-pagination-bullet-active {
  background: #f17732;
  width: 28px;
  border-radius: 6px;
}

/* Lightbox (simple) */
.lightbox {
  position: fixed;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  background: rgba(0,0,0,0.85);
}
.lightbox img {
  max-width: 92%;
  max-height: 92%;
  border-radius: 8px;
  box-shadow: 0 18px 48px rgba(0,0,0,0.6);
}
.lightbox .close-btn {
  position: absolute;
  top: 22px;
  right: 24px;
  color: #fff;
  background: rgba(255,255,255,0.06);
  border-radius: 6px;
  padding: 8px 10px;
  cursor: pointer;
  font-size: 18px;
  border: none;
}
@media (max-width: 768px) {
  .review-image-card { max-width: 90%; }
}
</style>

<?php
// --------------- Replace these with your actual image filenames ---------------
$review_images = [
  '/assets/images/reviews/1 (1).webp',
  '/assets/images/reviews/2.webp',
  '/assets/images/reviews/3.webp',
  '/assets/images/reviews/4.webp',
  '/assets/images/reviews/5.webp',
  '/assets/images/reviews/6.webp',
  '/assets/images/reviews/7.webp',
  '/assets/images/reviews/8.webp',
  '/assets/images/reviews/9.webp',
  '/assets/images/reviews/10.webp',
];
// If you have fewer than 10, remove extras or add more to the array.
?>

<div class="reviews-image-swiper">
  <div class="swiper imageSwiper">
    <div class="swiper-wrapper">
      <?php foreach ($review_images as $img_path): 
          // optional: check file exists, fallback to placeholder
          $img_url = file_exists(__DIR__ . $img_path) ? $img_path : '/assets/images/placeholder.webp';
      ?>
        <div class="swiper-slide">
          <div class="review-image-card" onclick="openLightbox('<?php echo htmlspecialchars($img_url); ?>')">
            <img loading="lazy" src="<?php echo htmlspecialchars($img_url); ?>" alt="Google review screenshot" loading="lazy">
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Lightbox markup -->
<div id="simpleLightbox" class="lightbox" onclick="closeLightbox()">
  <button class="close-btn" aria-label="Close" onclick="closeLightbox(); event.stopPropagation();">✕</button>
  <img loading="lazy" id="lightboxImg" src="" alt="">
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // init Swiper -> autoplay right-to-left via reverseDirection: true
  const imageSwiper = new Swiper('.imageSwiper', {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: true,
    centeredSlides: false,
    speed: 900,
    // autoplay to go right-to-left (reverseDirection: true)
    autoplay: {
      delay: 2200,
      disableOnInteraction: false,
      reverseDirection: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 12 },
      600: { slidesPerView: 2, spaceBetween: 16 },
      992: { slidesPerView: 3, spaceBetween: 24 }
    }
  });

  // Simple lightbox functions
  function openLightbox(src) {
    const lb = document.getElementById('simpleLightbox');
    const img = document.getElementById('lightboxImg');
    img.src = src;
    lb.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // prevent background scroll
  }
  function closeLightbox() {
    const lb = document.getElementById('simpleLightbox');
    const img = document.getElementById('lightboxImg');
    lb.style.display = 'none';
    img.src = '';
    document.body.style.overflow = '';
  }

  // Optional: close on ESC
  document.addEventListener('keydown', function(e){
    if (e.key === 'Escape') closeLightbox();
  });
</script>

        <!-- CTA Section -->
        <div class="cta-section">
            <a href="https://www.google.com/search?sca_esv=6d9773df8986f1e8&rlz=1C1CHBD_enIN1152IN1152&biw=1397&bih=655&sxsrf=AE3TifMVrO4yq16qVGrwN7knplzTI7VadA:1761633655410&si=AMgyJEtREmoPL4P1I5IDCfuA8gybfVI2d5Uj7QMwYCZHKDZ-E6c9Cj5usUlxUvP5qHNAPd7fN8w3h4r-xNrhDTwWpc3zkel19JL-TyABH7QiiDzgFqQPjVaQPphoIGLJ2pLlr2ZtaJzDc496h-mX9zHtyp7l9AKCog%3D%3D&q=Brar+Eye+Hospital+Reviews&sa=X&ved=2ahUKEwisgYXipMaQAxVf4zgGHRiLG6IQ0bkNegQIKxAE&cshid=1761633660945537" target="_blank" class="cta-button">
                View All Reviews on Google
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                    <polyline points="15 3 21 3 21 9"></polyline>
                    <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
            </a>
            <p class="cta-text">Read all <?php echo $total_reviews; ?>+ authentic patient testimonials</p>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Reviews Data for JavaScript
        const reviewsData = <?php echo json_encode($reviews); ?>;

        // Initialize Swiper
        const swiper = new Swiper('.reviewsSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            effect: 'slide',
            speed: 800,
        });

        // Toggle Read More/Less
        function toggleReview(index) {
            const textElement = document.getElementById('review-text-' + index);
            const button = event.target;
            const review = reviewsData[index];

            if (textElement.textContent.trim() === review.review_short) {
                textElement.textContent = review.review_full;
                button.textContent = 'Show less';
            } else {
                textElement.textContent = review.review_short;
                button.textContent = 'Read more';
            }
        }
    </script>
</section>




<!-- contact-section end -->
<style>
    .video-inner {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        overflow: hidden;
        border-radius: 20px;
        background-color: #000;
    }

    .video-inner video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: none;
    }
</style>


<!-- team-section -->
<section class="team-section p_relative">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-9.webp);"></div>
    <div class="auto-container">
        <div class="sec-title p_relative left mb_50">
            <span class="sub-title">Ophthalmologist</span>
            <h2>The Most Qualified Skillful & <br />Professional Staff</h2>
            <a href="our-eye-specialists-bathinda.php" class="theme-btn btn-two">View All Team</a>
        </div>
        <div class="row clearfix" style="gap: 40px 0;">

            <!-- 1 Dr. P.S. Brar -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/123.webp" alt="Dr. P.S. Brar"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-ps-brar.php" style="color:black; text-decoration:underline;">Dr. P.S. Brar</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Medical Director & Chief Eye Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>

 <!-- 2 Dr. Sunny Goyal -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/12345.webp" alt="Dr. Sunny Goyal"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-sunny-goyal.php" style="color:black; text-decoration:underline;">Dr. Sunny Goyal</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Cataract & Glaucoma Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 3 Dr. M.S. Brar -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/1234.webp" alt="Dr. M.S. Brar"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-ms-brar.php" style="color:black; text-decoration:underline;">Dr. M.S. Brar</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Senior Cataract & Paediatric Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>

<!-- 4  Dr. Anand Singh Brar -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/55.webp" alt="Dr. Anand Singh Brar"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-anand-singh-brar.php" style="color:black; text-decoration:underline;">Dr. Anand Singh Brar</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Vitreo-Retina Consultant</span>
                        </div>
                    </div>
                </div>
            </div>
            
              <!-- 5 Dr. Aazambir Singh Brar -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/team-51.webp" alt="Dr. Aazambir Singh Brar"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-aazambir-singh-brar.php" style="color:black; text-decoration:underline;">Dr. Aazambir Singh Brar</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Cataract, Refractive & Vitreo-Retina Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 6 Dr. B. Ravinder Naik -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/53.webp" alt="Dr. B. Ravinder Naik"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-b-ravinder-naik.php" style="color:black; text-decoration:underline;">Dr. B. Ravinder Naik</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Cataract, Strabismus & Pediatric Ophthalmology Consultant</span>
                        </div>
                    </div>
                </div>
            </div>

           <!--7 Dr. Raman Mittal -->
<div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
    <div class="team-block-one wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
        <div class="inner-box p_relative d_block pr_55">
            <figure class="image-box p_relative d_block">
                <img loading="lazy" src="assets/images/team/imgi_5_dr-raman.webp" alt="Dr. Raman Mittal">
            </figure>
            <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                <h3 class="d_block lh_30 mb_3">
                    <a href="dr-raman-mittal.php" style="color:black; text-decoration:underline;">
                        Dr. Raman Mittal
                    </a>
                </h3>
                <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">
                    Oculoplastic, Orbital Disease & Ocular Oncology Surgeon
                </span>
            </div>
        </div>
    </div>
</div>

           <!--8-->
           
           
           <!--9-->
           <!-- Dr. Rabia Saif -->
<div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
    <div class="team-block-one wow fadeInUp animated" data-wow-delay="1000ms" data-wow-duration="1500ms">
        <div class="inner-box p_relative d_block pr_55">
            <figure class="image-box p_relative d_block">
                <img loading="lazy" src="assets/images/team/kushdeep.webp" alt="Dr. Rabia Saif">
            </figure>
            <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                <h3 class="d_block lh_30 mb_3">
                    <a href="dr-rabia-saif.php" style="color:black; text-decoration:underline;">
                        Dr. Rabia Saif
                    </a>
                </h3>
                <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">
                    Consultant Ophthalmologist
                </span>
            </div>
        </div>
    </div>
</div>


            

          

           

            <!-- 10 Dr. M.L. Kapoor -->
            <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pr_55">
                        <figure class="image-box p_relative d_block"><img loading="lazy" src="assets/images/team/sample-2.webp" alt="Dr. M.L. Kapoor"></figure>
                        <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                            <h3 class="d_block lh_30 mb_3">
                                <a href="dr-ml-kapoor.php" style="color:black; text-decoration:underline;">Dr. M.L. Kapoor</a>
                            </h3>
                            <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Consultant Anaesthetist</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <style>
        /* Remove all hover effects for team member blocks */
        .team-block-one:hover,
        .team-block-one .inner-box:hover,
        .team-block-one .image-box:hover,
        .team-block-one .lower-content:hover {
            /* Cancel any hover transitions or effects */
            box-shadow: none !important;
            transform: none !important;
            filter: none !important;
            background: inherit !important;
        }

        /* Remove animation classes if you want no fade/slide... */
        .team-block-one,
        .team-block-one .inner-box {
            transition: none !important;
            animation: none !important;
        }

        /* If images zoom or have brightness change on hover, stop it */
        .team-block-one .image-box img:hover {
            filter: none !important;
            transform: none !important;
        }
    </style>

    <!--11-->
    <!-- Dr. T.K. Goyal -->
<div class="col-lg-4 col-md-6 col-sm-12 team-block" style="margin-bottom:40px;">
    <div class="team-block-one wow fadeInUp animated" data-wow-delay="1100ms" data-wow-duration="1500ms">
        <div class="inner-box p_relative d_block pr_55">
            <figure class="image-box p_relative d_block">
                <img loading="lazy" src="assets/images/team/image-tk-goyal.webp" alt="Dr. T.K. Goyal">
            </figure>
            <div class="lower-content p_absolute r_0 b_45 b_shadow_6 z_1 tran_5">
                <h3 class="d_block lh_30 mb_3">
                    <a href="dr-tk-goyal.php" style="color:black; text-decoration:underline;">
                        Dr. T.K. Goyal
                    </a>
                </h3>
                <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">
                    Consultant Anaesthetist
                </span>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    

</section>
<!-- team-section end -->




<!-- project-section -->
<section class="project-section p_relative">
    <div class="outer-container">
        <div class="project-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\18.webp" alt="Gallery Photo 1"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\18.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 1</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\17.webp" alt="Gallery Photo 2"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\17.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 2</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\16.webp" alt="Gallery Photo 3"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\16.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 3</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\15.webp" alt="Gallery Photo 4"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\15.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 4</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\10.webp" alt="Gallery Photo 5"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\10.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 5</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\13.webp" alt="Gallery Photo 6"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\13.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 6</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\9.webp" alt="Gallery Photo 7"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\9.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 7</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img loading="lazy" src="assets\images\gallery1\11.webp" alt="Gallery Photo 8"></figure>
                    <div class="view-btn"><a href="assets\images\gallery1\11.webp" class="lightbox-image" data-fancybox="gallery"><i class="icon-33"></i></a></div>
                    <div class="text">
                        <h3><a href="index.php">Gallery 8</a></h3>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-section end -->


<!-- news-section -->
<!-- <section class="news-section p_relative">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Articles</span>
            <h2>Resources to Keep You Informed <br />with Our Blog</h2>
        </div>
        <div class="row clearfix">

        Glaucoma Article -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img loading="lazy" src="assets/images/news/glaucoma.webp" alt="">
                            <a href="glaucoma-treatment-bathinda.php"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="category"><a href="blog-details.php">Glaucoma</a></div>
                                <h3><a href="glaucoma-treatment-bathinda.php">How do Inherited Retinal Diseases Happen?</a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-34"></i>25 ਮਈ, 2025</li>
                                    <li><i class="icon-35"></i><a href="glaucoma-treatment-bathinda.php">Dr. Kumar</a></li>
                                    <li>ਤਾਜ਼ਾ ਸਮੀਖਿਆ: 25 ਮਈ, 2025</li>
                                </ul>
                                <p>Comprehensive diagnostics (HVFA, RNFL) and advanced surgical options like MIGS & TRAB to preserve your vision from the silent thief of sight.</p>
                                <div class="link"><a href="glaucoma-treatment-bathinda.php">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  -->

<!-- Cataract Article -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img loading="lazy" src="assets/images/news/cataract.webp" alt="">
                            <a href="cataract-surgery-bathinda.php"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="category"><a href="cataract-surgery-bathinda.php">Cataract-Before</a></div>
                                <h3><a href="blog-details.php">Prepare to Speak with Your Eye Specialist.</a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-34"></i>09 Oct, 2023</li>
                                    <li><i class="icon-35"></i><a href="cataract-surgery-bathinda.php">Dr. Meena Sharma</a></li>
                                    <li>ਤਾਜ਼ਾ ਸਮੀਖਿਆ: 25 ਮਈ, 2025</li>
                                </ul>
                                <p>Specialized care for amblyopia, squint, pediatric cataracts & glaucoma in a kid-friendly setting designed for young patients.</p>
                                <div class="link"><a href="cataract-surgery-bathinda.php">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

<!-- Oculoplastic Article -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img loading="lazy" src="assets/images/news/Oculoplastic Surgery.webp" alt=""><a href="Oculoplastics.php"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="category"><a href="Oculoplastics.php">Oculoplastic</a></div>
                                <h3><a href="blog-details.php">Some Eye Problems are Minor and don't...</a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-34"></i>08 Oct, 2024</li>
                                    <li><i class="icon-35"></i><a href="Oculoplastics.php">Dr. Amanpreet Kaur</a></li>
                                    <li>ਤਾਜ਼ਾ ਸਮੀਖਿਆ: 25 ਮਈ, 2025</li>
                                </ul>
                                <p>Oculoplastic surgery is a specialized field of ophthalmology focused on the structures around the eye including eyelids, tear ducts, and facial areas.</p>
                                <div class="link"><a href="Oculoplastics.php">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- news-section end -->

<!-- dual-location-map-section -->

<section class="dual-location-section">

    <!-- ⭐ SECTION HEADING ADDED ⭐ -->
    <div class="location-heading">
        <span class="sub">Our Locations</span>
        <h2>Visit Any of Our Branches</h2>
    </div>

    <div class="location-container">

        <!-- Bathinda Branch -->
        <div class="branch-card">
            <div class="branch-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.238928659031!2d74.93471457655697!3d30.23026230974101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732eec4237631%3A0xa4771d2f5dd99402!2sBrar%20Eye%20Hospital!5e0!3m2!1sen!2sin!4v1747139055406!5m2!1sen!2sin" width="100%" height="260" frameborder="0" style="border-radius:14px;" allowfullscreen loading="lazy"></iframe>
            </div>
            <div class="branch-info">
                <h3>Bathinda Branch</h3>
                <p><strong>Address:</strong> Near Rose Garden Chowk, GT Road, Bathinda – 151001</p>
                <p><strong>Working Hours:</strong> Mon-Sat, 8:00AM - 5:00PM</p>
                <p><strong>Email:</strong> <a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a></p>
                <p><strong>Call:</strong> <a href="tel:+917218272182">7218272182</a></p>
            </div>
        </div>

        <!-- Kotkapura Branch -->
        <div class="branch-card">
            <div class="branch-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3446.409637206096!2d74.83559207655706!3d30.581569831363314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39173be2b84f7fd3%3A0xc7d44bed1da9a7a1!2sKotkapura%2C%20Punjab%20151204!5e0!3m2!1sen!2sin!4v1747139915397!5m2!1sen!2sin" width="100%" height="260" frameborder="0" style="border-radius:14px;" allowfullscreen loading="lazy"></iframe>
            </div>
            <div class="branch-info">
                <h3>Kotkapura Branch</h3>
                <p><strong>Address:</strong> Faridkot Rd, KotKapura, Punjab 151204</p>
                <p><strong>Working Hours:</strong> Mon-Sat, 8:00AM - 4:00PM</p>
                <p><strong>Email:</strong> <a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a></p>
                <p><strong>Call:</strong> <a href="tel:+917218272182">7218272182</a></p>
            </div>
        </div>

    </div>
</section>

<style>
    .dual-location-section {
        width: 100%;
        padding: 50px 0;
        background: #f9fafb;
    }

    /* ⭐ New Heading Styling ⭐ */
    .location-heading {
        text-align: center;
        margin-bottom: 40px;
    }

    .location-heading .sub {
        color: #ee6c1b;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: inline-block;
        margin-bottom: 8px;
    }

    .location-heading h2 {
        font-size: 32px;
        font-weight: 800;
        color: #0b2d60;
        margin: 0;
    }

    .location-container {
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .branch-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 18px rgba(60, 80, 160, 0.08);
        padding: 32px 28px;
        width: 100%;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        margin-bottom: 30px;
        transition: box-shadow 0.2s;
    }

    .branch-card:hover {
        box-shadow: 0 10px 32px rgba(60, 80, 160, 0.12);
    }

    .branch-info h3 {
        color: #2257b8;
        font-size: 23px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .branch-info p {
        font-size: 16px;
        color: #2d313a;
        margin-bottom: 7px;
    }

    .branch-info a {
        color: #ee6c1b;
        text-decoration: none;
        font-weight: 600;
    }

    @media (max-width: 900px) {
        .location-heading h2 {
            font-size: 26px;
        }

        .location-container {
            flex-direction: column;
            gap: 24px;
        }

        .branch-card {
            max-width: 96vw;
            padding: 24px 10px;
        }

        .branch-map iframe {
            height: 200px;
        }
    }
</style>









<!-- google-map-section end -->
<?php include 'footer.php'; ?>