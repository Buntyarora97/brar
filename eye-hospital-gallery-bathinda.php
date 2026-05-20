<?php
$pageTitle = "Photo Gallery - Brar Eye Hospital";
$pageDescription = "Explore our photo gallery showcasing our facilities, equipment, and patient care.";
$pageKeywords = "eye hospital gallery, hospital photos, lasik surgery cost, eyesight operation";
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
      <!-- Surgical Images (Examinations & Procedures) -->
      <div class="image-item surgical" style="animation-delay: 0.05s;">
        <img data-src="attached_assets/1_1761672408057.webp" alt="Eye examination procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.1s;">
        <img data-src="attached_assets/2_1761672408060.webp" alt="Patient consultation" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.15s;">
        <img data-src="attached_assets/3_1761672408061.webp" alt="Eye testing procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.2s;">
        <img data-src="attached_assets/5_1761672408064.webp" alt="Slit lamp examination" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.25s;">
        <img data-src="attached_assets/6_1761672408064.webp" alt="Eye examination with equipment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.3s;">
        <img data-src="attached_assets/7_1761672408065.webp" alt="Patient examination session" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.35s;">
        <img data-src="attached_assets/9_1761672408066.webp" alt="Professional eye care" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.4s;">
        <img data-src="attached_assets/10_1761672408066.webp" alt="Detailed eye examination" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.45s;">
        <img data-src="attached_assets/11_1761672408067.webp" alt="Patient care procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.5s;">
        <img data-src="attached_assets/12_1761672408068.webp" alt="Eye health assessment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.55s;">
        <img data-src="attached_assets/13_1761672408068.webp" alt="Comprehensive eye exam" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.6s;">
        <img data-src="attached_assets/14_1761672408068.webp" alt="Vision testing" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.65s;">
        <img data-src="attached_assets/15_1761672408069.webp" alt="Eye care consultation" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.7s;">
        <img data-src="attached_assets/16_1761672408069.webp" alt="Medical examination" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.75s;">
        <img data-src="attached_assets/17_1761672408069.webp" alt="Patient treatment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.8s;">
        <img data-src="attached_assets/18_1761672408070.webp" alt="Eye surgery preparation" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.85s;">
        <img data-src="attached_assets/19_1761672408070.webp" alt="Surgical procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.9s;">
        <img data-src="attached_assets/20_1761672408071.webp" alt="Operating room setup" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 0.95s;">
        <img data-src="attached_assets/21_1761672761444.webp" alt="Advanced eye surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1s;">
        <img data-src="attached_assets/22_1761672761444.webp" alt="Microscopic surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.05s;">
        <img data-src="attached_assets/23_1761672761445.webp" alt="Precision eye surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.1s;">
        <img data-src="attached_assets/24_1761672761446.webp" alt="Surgical team in action" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.15s;">
        <img data-src="attached_assets/25_1761672761446.webp" alt="Eye operation procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.2s;">
        <img data-src="attached_assets/26_1761672761447.webp" alt="Advanced surgical technique" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.25s;">
        <img data-src="attached_assets/27_1761672761448.webp" alt="Professional surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.3s;">
        <img data-src="attached_assets/28_1761672761448.webp" alt="Cataract surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.35s;">
        <img data-src="attached_assets/29_1761672761449.webp" alt="Eye care surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.4s;">
        <img data-src="attached_assets/30_1761672761449.webp" alt="Surgical excellence" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.45s;">
        <img data-src="attached_assets/49_1761672979803.webp" alt="Microscope surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item surgical" style="animation-delay: 1.5s;">
        <img data-src="attached_assets/50_1761672979804.webp" alt="Patient examination" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>

      <!-- Smile-Pro Images -->
      <div class="image-item smilepro" style="animation-delay: 0.05s;">
        <img data-src="attached_assets/31_1761672761450.webp" alt="Smile Pro technology" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.1s;">
        <img data-src="attached_assets/32_1761672761451.webp" alt="Advanced Smile Pro procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.15s;">
        <img data-src="attached_assets/33_1761672761452.webp" alt="Smile Pro laser treatment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.2s;">
        <img data-src="attached_assets/34_1761672761452.webp" alt="Vision correction surgery" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item smilepro" style="animation-delay: 0.25s;">
        <img data-src="attached_assets/35_1761672761453.webp" alt="LASIK procedure" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>

      <!-- Hospital Facilities -->
      <div class="image-item hospital" style="animation-delay: 0.05s;">
        <img data-src="attached_assets/36_1761672761453.webp" alt="Hospital reception area" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.1s;">
        <img data-src="attached_assets/37_1761672761454.webp" alt="Waiting room" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.15s;">
        <img data-src="attached_assets/38_1761672761454.webp" alt="Optical shop" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.2s;">
        <img data-src="attached_assets/39_1761672761455.webp" alt="Hospital interior" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.25s;">
        <img data-src="attached_assets/40_1761672761456.webp" alt="Consultation area" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.3s;">
        <img data-src="attached_assets/41_1761672979798.webp" alt="Hospital facilities" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.35s;">
        <img data-src="attached_assets/42_1761672979799.webp" alt="Patient comfort area" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item hospital" style="animation-delay: 0.4s;">
        <img data-src="attached_assets/WhatsApp-Image-2025-10-28-at-16.34_1761672979804.webp" alt="Brar Eye Hospital building" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>

      <!-- Equipment & Staff -->
      <div class="image-item equipment" style="animation-delay: 0.05s;">
        <img data-src="attached_assets/4_1761672408062.webp" alt="Medical staff" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.1s;">
        <img data-src="attached_assets/43_1761672979800.webp" alt="ZEISS equipment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.15s;">
        <img data-src="attached_assets/44_1761672979801.webp" alt="Advanced diagnostic equipment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.2s;">
        <img data-src="attached_assets/45_1761672979801.webp" alt="Surgical instruments" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.25s;">
        <img data-src="attached_assets/46_1761672979802.webp" alt="Modern eye care equipment" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.3s;">
        <img data-src="attached_assets/47_1761672979802.webp" alt="Medical technology" class="lazy">
        <div class="image-overlay">Click to view</div>
      </div>
      <div class="image-item equipment" style="animation-delay: 0.35s;">
        <img data-src="attached_assets/48_1761672979803.webp" alt="State-of-the-art equipment" class="lazy">
        <div class="image-overlay">Click to view</div>
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
    <img id="lightboxImage" src="" alt="Lightbox Image">
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
