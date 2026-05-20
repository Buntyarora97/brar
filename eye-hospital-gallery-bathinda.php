<?php
$pageTitle = "Photo Gallery | Brar Eye Hospital Bathinda – State-of-the-Art Eye Care Facilities";
$pageDescription = "Explore photos of Brar Eye Hospital's advanced facilities, SMILE Pro equipment, operation theatres and patient care at our Bathinda and Kotkapura branches.";
$pageKeywords = "Brar Eye Hospital gallery, eye hospital photos Bathinda, eye care facility photos Punjab, SMILE Pro machine Bathinda, hospital facilities Bathinda";
include('header.php');
?>

<!-- ===== Gallery Page Title (Brar Theme) ===== -->
<section class="gallery-page-title">
  <!-- Background layer -->
  <div class="gallery-bg"></div>

  <!-- Content -->
  <div class="gallery-container">
    <div class="gallery-content">
      <h1 class="gallery-heading">Photo Gallery</h1>
      <ul class="gallery-breadcrumb" aria-label="Breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li aria-hidden="true">/</li>
        <li>Gallery</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== Styles ===== -->
<style>
/* Theme variables — adjust if needed */
:root {
  --brar-teal: #1dd2c3;
  --brar-orange: #f17732;
  --brar-dark: #0f3a55;
  --gallery-height: 300px;
  --container-max: 1140px;
  --ff: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Section wrapper */
.gallery-page-title {
  position: relative;
  width: 100%;
  height: var(--gallery-height);
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  box-sizing: border-box;
  font-family: var(--ff);
}

/* Background image layer (change URL below if needed) */
.gallery-bg {
  position: absolute;
  inset: 0;
  background-image: linear-gradient(rgba(8,28,38,0.38), rgba(8,28,38,0.38)), url('assets/images/background/4.webp');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  filter: none;
  z-index: 1;
  transform-origin: center;
  transition: transform 1.2s ease;
}

/* subtle zoom on hover (desktop only) */
@media (hover: hover) and (pointer: fine) {
  .gallery-page-title:hover .gallery-bg { transform: scale(1.04); }
}

/* inner container */
.gallery-container {
  position: relative;
  z-index: 2;
  max-width: var(--container-max);
  margin: 0 auto;
  padding: 0 20px;
  width: 100%;
}

/* content */
.gallery-content {
  color: #ffffff;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
}

/* heading */
.gallery-heading {
  margin: 0;
  color: #ffffff;
  font-size: clamp(1.6rem, 3.6vw, 2.6rem);
  font-weight: 700;
  letter-spacing: 0.6px;
  text-transform: uppercase;
  text-shadow: 0 6px 20px rgba(0,0,0,0.45);
  line-height: 1.05;
}

/* breadcrumb */
.gallery-breadcrumb {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-flex;
  gap: 10px;
  align-items: center;
  justify-content: center;
  color: rgba(255,255,255,0.95);
  font-weight: 600;
  font-size: 1rem;
}

/* breadcrumb link */
.gallery-breadcrumb a {
  color: var(--brar-teal);
  text-decoration: none;
  transition: color .24s ease, text-shadow .24s ease;
}

.gallery-breadcrumb a:hover {
  color: var(--brar-orange);
  text-shadow: 0 0 6px rgba(241,119,50,0.5);
}

/* small screens: reduce height, stack breadcrumb */
@media (max-width: 992px) {
  .gallery-page-title { height: 260px; }
  .gallery-heading { font-size: clamp(1.45rem, 4.2vw, 2.2rem); }
}

@media (max-width: 768px) {
  .gallery-page-title { height: 220px; padding: 0 14px; }
  .gallery-heading { font-size: 1.25rem; }
  .gallery-breadcrumb {
    flex-direction: column;
    gap: 4px;
    font-size: 0.95rem;
  }
  .gallery-breadcrumb li[aria-hidden="true"] { display: none; } /* hide slash on tiny screens */
}

@media (max-width: 420px) {
  .gallery-page-title { height: 180px; }
  .gallery-heading { font-size: 1.05rem; }
}
</style>



<style>
/* Breadcrumb Styles */
.bread-crumb li,
.bread-crumb li a {
    color: white;
}

/* Gallery Section Styles */
.gallery-section {
    padding: 60px 0;
    background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%);
}

.gallery-section h2 {
    text-align: center;
    font-size: 42px;
    margin-bottom: 15px;
    color: #333;
    font-weight: 700;
}

.gallery-subtitle {
    text-align: center;
    font-size: 18px;
    color: #666;
    margin-bottom: 40px;
}

/* Filter Buttons */
.filters {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 15px;
    padding: 0 20px;
}

.filter-btn {
    background-color: #1dd2c3;
    color: white;
    padding: 12px 30px;
    border: 2px solid transparent;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border-radius: 50px;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(29, 210, 195, 0.3);
}

.filter-btn:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: #f17732;
    transition: width 0.6s, height 0.6s, top 0.6s, left 0.6s;
    transform: translate(-50%, -50%);
    z-index: 0;
}

.filter-btn:hover:before,
.filter-btn.active:before {
    width: 300px;
    height: 300px;
}

.filter-btn span {
    position: relative;
    z-index: 1;
}

.filter-btn.active,
.filter-btn:hover {
    border-color: #f17732;
    box-shadow: 0 6px 25px rgba(241, 119, 50, 0.4);
    transform: translateY(-2px);
}

/* Image Gallery Grid */
.image-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 25px;
    padding: 0 20px;
    max-width: 1400px;
    margin: 0 auto;
}

.image-item {
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    transform: scale(0.8) translateY(30px);
    animation: fadeInUp 0.6s ease forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.image-item.filtering {
    animation: filterOut 0.4s ease forwards;
}

@keyframes filterOut {
    from {
        opacity: 1;
        transform: scale(1);
    }
    to {
        opacity: 0;
        transform: scale(0.8);
    }
}

.image-item.filtering.show {
    animation: filterIn 0.5s ease forwards;
}

@keyframes filterIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.image-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    display: block;
}

.image-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(241, 119, 50, 0.3);
}

.image-item:hover img {
    transform: scale(1.15);
}

.image-item::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(29, 210, 195, 0.7) 0%, rgba(241, 119, 50, 0.7) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
}

.image-item:hover::after {
    opacity: 1;
}

.image-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 16px;
    font-weight: 600;
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: 2;
    text-align: center;
    pointer-events: none;
}

.image-item:hover .image-overlay {
    opacity: 1;
}

/* Lightbox Modal */
.lightbox {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.95);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.lightbox.active {
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeIn 0.3s ease forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

.lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
    animation: zoomIn 0.3s ease;
}

@keyframes zoomIn {
    from {
        transform: scale(0.8);
    }
    to {
        transform: scale(1);
    }
}

.lightbox-content img {
    width: 100%;
    height: auto;
    max-height: 85vh;
    object-fit: contain;
    border-radius: 10px;
    box-shadow: 0 0 50px rgba(29, 210, 195, 0.5);
}

.close-lightbox {
    position: absolute;
    top: -50px;
    right: 0;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #1dd2c3, #f17732);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
}

.close-lightbox:hover {
    transform: rotate(90deg) scale(1.1);
    box-shadow: 0 0 20px rgba(241, 119, 50, 0.8);
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    font-size: 50px;
    cursor: pointer;
    padding: 20px;
    background: rgba(29, 210, 195, 0.7);
    border-radius: 50%;
    transition: all 0.3s ease;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    user-select: none;
}

.lightbox-nav:hover {
    background: rgba(241, 119, 50, 0.9);
    transform: translateY(-50%) scale(1.1);
}

.lightbox-prev {
    left: 30px;
}

.lightbox-next {
    right: 30px;
}

/* Loading Animation */
.loading-spinner {
    border: 4px solid rgba(29, 210, 195, 0.3);
    border-top: 4px solid #f17732;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    margin: 50px auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Image Counter */
.image-counter {
    text-align: center;
    margin-top: 40px;
    font-size: 18px;
    color: #666;
    font-weight: 600;
}

.counter-highlight {
    color: #f17732;
    font-size: 24px;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .image-gallery {
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .gallery-section h2 {
        font-size: 32px;
    }
    
    .filters {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 10px 20px;
        font-size: 14px;
    }
    
    .image-gallery {
        grid-template-columns: 1fr;
        gap: 20px;
        padding: 0 15px;
    }
    
    .image-item {
        height: 250px;
    }
    
    .lightbox-nav {
        width: 50px;
        height: 50px;
        font-size: 35px;
    }
    
    .lightbox-prev {
        left: 10px;
    }
    
    .lightbox-next {
        right: 10px;
    }
    
    .close-lightbox {
        top: -45px;
        width: 45px;
        height: 45px;
        font-size: 35px;
    }
}

@media (max-width: 480px) {
    .gallery-section h2 {
        font-size: 28px;
    }
    
    .filter-btn {
        padding: 8px 16px;
        font-size: 13px;
    }
    
    .image-item {
        height: 220px;
    }
}
</style>
<!-- Gallery Section (All photos permanently shown) -->
<section class="gallery-section">
  <div class="auto-container">
    <h2>Our Photo Gallery</h2>
    <p class="gallery-subtitle">Explore our state-of-the-art facilities and patient care excellence</p>

    <!-- Image Gallery -->
    <div class="image-gallery">
      <!-- Surgical / Examination Images -->
      <div class="image-item surgical" style="animation-delay: 0.05s;">
        <img src="assets/images/gallery1/1.webp" alt="Eye examination procedure at Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">Eye Examination</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.1s;">
        <img src="assets/images/gallery1/2.webp" alt="Patient consultation Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">Patient Consultation</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.15s;">
        <img src="assets/images/gallery1/3.webp" alt="Eye testing procedure" loading="lazy">
        <div class="image-overlay">Eye Testing</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.2s;">
        <img src="assets/images/gallery1/4.webp" alt="Slit lamp examination" loading="lazy">
        <div class="image-overlay">Slit Lamp Exam</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.25s;">
        <img src="assets/images/gallery1/5.webp" alt="Eye examination with advanced equipment" loading="lazy">
        <div class="image-overlay">Advanced Equipment</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.3s;">
        <img src="assets/images/gallery1/6.webp" alt="Patient examination session" loading="lazy">
        <div class="image-overlay">Patient Care</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.35s;">
        <img src="assets/images/gallery1/7.webp" alt="Professional eye care at Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">Professional Eye Care</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.4s;">
        <img src="assets/images/gallery1/9.webp" alt="Detailed eye examination" loading="lazy">
        <div class="image-overlay">Eye Examination</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.45s;">
        <img src="assets/images/gallery1/10.webp" alt="Patient care and treatment" loading="lazy">
        <div class="image-overlay">Patient Treatment</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.5s;">
        <img src="assets/images/gallery1/11.webp" alt="Eye health assessment Bathinda" loading="lazy">
        <div class="image-overlay">Health Assessment</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.55s;">
        <img src="assets/images/gallery1/13.webp" alt="Comprehensive eye exam Punjab" loading="lazy">
        <div class="image-overlay">Comprehensive Exam</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.6s;">
        <img src="assets/images/gallery1/15.webp" alt="Vision care at Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">Vision Care</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.65s;">
        <img src="assets/images/gallery1/16.webp" alt="Medical eye examination" loading="lazy">
        <div class="image-overlay">Medical Examination</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.7s;">
        <img src="assets/images/gallery1/17.webp" alt="Patient eye treatment" loading="lazy">
        <div class="image-overlay">Patient Treatment</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.75s;">
        <img src="assets/images/gallery1/18.webp" alt="Eye surgery preparation Bathinda" loading="lazy">
        <div class="image-overlay">Surgery Preparation</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.8s;">
        <img src="assets/images/sections/Professional_eye_examination_scene_eec40d0a.webp" alt="Professional eye examination" loading="lazy">
        <div class="image-overlay">Eye Examination</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.85s;">
        <img src="assets/images/sections/Happy_patient_post-surgery_success_4c72b404.webp" alt="Happy patient after eye surgery" loading="lazy">
        <div class="image-overlay">Successful Outcome</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.9s;">
        <img src="assets/images/sections/Advanced_laser_eye_surgery_equipment_3754f4b3.webp" alt="Advanced laser eye surgery equipment" loading="lazy">
        <div class="image-overlay">Laser Equipment</div>
      </div>

      <!-- SMILE Pro Images -->
      <div class="image-item smilepro" style="animation-delay: 0.05s;">
        <img src="assets/images/smile-pro/smile-pro-main.webp" alt="SMILE Pro technology at Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">SMILE Pro Technology</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.1s;">
        <img src="assets/images/smile-pro/smile-pro-procedure.webp" alt="SMILE Pro laser procedure" loading="lazy">
        <div class="image-overlay">SMILE Pro Procedure</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.15s;">
        <img src="assets/images/smile-pro/smile-pro-technology.webp" alt="ZEISS SMILE Pro machine" loading="lazy">
        <div class="image-overlay">ZEISS Technology</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.2s;">
        <img src="assets/images/smile-pro/smile-pro-results.webp" alt="SMILE Pro vision correction results" loading="lazy">
        <div class="image-overlay">Excellent Results</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.25s;">
        <img src="assets/images/smile-pro/smile-pro-recovery.webp" alt="SMILE Pro fast recovery" loading="lazy">
        <div class="image-overlay">Fast Recovery</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.3s;">
        <img src="assets/images/sections/SMILE_Pro_minimal_incision_procedure_f70224ec.webp" alt="SMILE Pro minimal incision procedure" loading="lazy">
        <div class="image-overlay">Minimal Incision</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.35s;">
        <img src="assets/images/sections/LASIK_surgery_procedure_illustration_c871a6da.webp" alt="LASIK surgery procedure" loading="lazy">
        <div class="image-overlay">LASIK Procedure</div>
      </div>

      <!-- Hospital Facilities -->
      <div class="image-item hospital" style="animation-delay: 0.05s;">
        <img src="assets/images/hospital.webp" alt="Brar Eye Hospital building Bathinda" loading="lazy">
        <div class="image-overlay">Our Hospital</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.1s;">
        <img src="assets/images/bhatinda.webp" alt="Brar Eye Hospital Bathinda branch" loading="lazy">
        <div class="image-overlay">Bathinda Branch</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.15s;">
        <img src="assets/images/Kotkapura.webp" alt="Brar Eye Hospital Kotkapura branch" loading="lazy">
        <div class="image-overlay">Kotkapura Branch</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.2s;">
        <img src="assets/images/service/cataract-detail.webp" alt="Cataract surgery at Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">Cataract Surgery</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.25s;">
        <img src="assets/images/service/alcon-centurion.webp" alt="ALCON Centurion cataract machine" loading="lazy">
        <div class="image-overlay">ALCON Centurion</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.3s;">
        <img src="assets/images/service/contaract-surgery-illustration.webp" alt="Modern cataract surgery" loading="lazy">
        <div class="image-overlay">Modern Surgery</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.35s;">
        <img src="assets/images/service/Eye-Cataract.webp" alt="Eye cataract treatment Punjab" loading="lazy">
        <div class="image-overlay">Cataract Treatment</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.4s;">
        <img src="assets/images/service/cataract-after.webp" alt="Clear vision after cataract surgery" loading="lazy">
        <div class="image-overlay">Clear Vision Restored</div>
      </div>

      <!-- Equipment & Specialist Care -->
      <div class="image-item equipment" style="animation-delay: 0.05s;">
        <img src="assets/images/glaucoma/glaucoma-main.webp" alt="Glaucoma diagnosis and treatment" loading="lazy">
        <div class="image-overlay">Glaucoma Care</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.1s;">
        <img src="assets/images/glaucoma/eye-pressure-check.webp" alt="IOP eye pressure check" loading="lazy">
        <div class="image-overlay">IOP Pressure Check</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.15s;">
        <img src="assets/images/glaucoma/rnfl-test.webp" alt="RNFL glaucoma test" loading="lazy">
        <div class="image-overlay">RNFL Analysis</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.2s;">
        <img src="assets/images/retina/retina-specialist.webp" alt="Retina specialist at Brar Eye Hospital" loading="lazy">
        <div class="image-overlay">Retina Specialist</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.25s;">
        <img src="assets/images/retina/diabetic-retinopathy.webp" alt="Diabetic retinopathy treatment" loading="lazy">
        <div class="image-overlay">Diabetic Retinopathy</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.3s;">
        <img src="assets/images/sections/Corneal_topography_mapping_visualization_1b038d03.webp" alt="Corneal topography mapping" loading="lazy">
        <div class="image-overlay">Corneal Topography</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.35s;">
        <img src="assets/images/sections/Child-friendly_pediatric_eye_care_c1135587.webp" alt="Paediatric eye care for children" loading="lazy">
        <div class="image-overlay">Paediatric Eye Care</div>
      </div>
    </div>
  </div>
</section>
<!-- End Gallery Section -->

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox" aria-hidden="true">
  <button class="close-lightbox" id="closeLightbox" aria-label="Close">&times;</button>
  <button class="lightbox-nav lightbox-prev" id="prevImage" aria-label="Previous">&#10094;</button>
  <div class="lightbox-content" role="dialog" aria-modal="true">
    <img loading="lazy" id="lightboxImage" src="" alt="Lightbox Image">
  </div>
  <button class="lightbox-nav lightbox-next" id="nextImage" aria-label="Next">&#10095;</button>
</div>

<!-- ===== Minimal CSS (paste into your stylesheet or keep here) ===== -->
<style>
.gallery-section { padding: 40px 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
.gallery-section .auto-container { max-width: 1200px; margin: 0 auto; padding: 0 18px; }
.gallery-section h2 { font-size: 1.9rem; margin-bottom: 6px; color: #0f3a55; }
.gallery-subtitle { color: #576a70; margin-bottom: 18px; }

/* Grid */
.image-gallery {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 14px;
  align-items: stretch;
}

/* Item */
.image-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  background: #fff;
  min-height: 120px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: zoom-in;
  transition: transform .25s ease, box-shadow .25s ease;
  box-shadow: 0 6px 20px rgba(10,20,30,0.04);
}
.image-item img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .6s ease; }
.image-item:hover { transform: translateY(-6px); box-shadow: 0 20px 46px rgba(10,20,30,0.08); }
.image-item:hover img { transform: scale(1.06); }

/* overlay */
.image-overlay {
  position: absolute;
  bottom: 8px;
  left: 8px;
  right: 8px;
  text-align: center;
  padding: 8px 10px;
  color: #fff;
  background: linear-gradient(90deg, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
  font-weight: 600;
  border-radius: 8px;
  opacity: 0;
  transform: translateY(6px);
  transition: all .28s ease;
}
.image-item:hover .image-overlay { opacity: 1; transform: translateY(0); }

/* Lightbox */
.lightbox {
  position: fixed;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.85);
  z-index: 9999;
}
.lightbox.active { display: flex; }
.lightbox-content img { max-width: 92vw; max-height: 86vh; border-radius: 6px; box-shadow: 0 24px 80px rgba(0,0,0,0.6); }

/* nav buttons */
.lightbox-nav, .close-lightbox {
  position: absolute;
  background: rgba(255,255,255,0.06);
  color: #fff;
  border: none;
  font-size: 2rem;
  padding: 8px 14px;
  border-radius: 6px;
  cursor: pointer;
}
.close-lightbox { top: 18px; right: 18px; font-size: 2.2rem; background: transparent; }
.lightbox-prev { left: 28px; }
.lightbox-next { right: 28px; }

/* responsive */
@media (max-width: 1100px) { .image-gallery { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 760px) { .image-gallery { grid-template-columns: repeat(2, 1fr); } .gallery-section { padding: 28px 0; } }
@media (max-width: 420px) { .image-gallery { grid-template-columns: 1fr; } .image-overlay { font-size: 0.95rem; } .lightbox-nav { display:none; } .close-lightbox { top: 10px; right: 10px; } }
</style>

<!-- ===== JS: lazy load + lightbox (copy-paste) ===== -->
<script>
// Lazy Loading Images
document.addEventListener('DOMContentLoaded', function() {
  const lazyImages = document.querySelectorAll('img.lazy');

  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          img.classList.remove('lazy');
          observer.unobserve(img);
        }
      });
    }, { rootMargin: '120px' });

    lazyImages.forEach(img => imageObserver.observe(img));
  } else {
    // fallback: load all images
    lazyImages.forEach(img => {
      img.src = img.dataset.src;
      img.classList.remove('lazy');
    });
  }
});

// Lightbox Functionality
(function() {
  const images = Array.from(document.querySelectorAll('.image-item'));
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.getElementById('lightboxImage');
  const closeLightbox = document.getElementById('closeLightbox');
  const prevBtn = document.getElementById('prevImage');
  const nextBtn = document.getElementById('nextImage');

  let currentIndex = 0;

  function openLightbox(index) {
    currentIndex = index;
    const img = images[currentIndex].querySelector('img');
    const src = img.src || img.dataset.src;
    lightboxImage.src = src;
    lightbox.classList.add('active');
    lightbox.setAttribute('aria-hidden','false');
    document.body.style.overflow = 'hidden';
  }

  function close() {
    lightbox.classList.remove('active');
    lightbox.setAttribute('aria-hidden','true');
    document.body.style.overflow = '';
  }

  function showNext() {
    currentIndex = (currentIndex + 1) % images.length;
    openLightbox(currentIndex);
  }
  function showPrev() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    openLightbox(currentIndex);
  }

  images.forEach((item, index) => {
    item.addEventListener('click', () => openLightbox(index));
  });

  closeLightbox.addEventListener('click', close);
  nextBtn.addEventListener('click', (e)=>{ e.stopPropagation(); showNext(); });
  prevBtn.addEventListener('click', (e)=>{ e.stopPropagation(); showPrev(); });

  // backdrop click closes
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) close();
  });

  // keyboard nav
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    if (e.key === 'Escape') close();
    if (e.key === 'ArrowRight') showNext();
    if (e.key === 'ArrowLeft') showPrev();
  });
})();
</script>


<?php include 'footer.php'; ?>
