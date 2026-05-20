<?php
$pageTitle = "Know Your Diseases - Brar Eye Hospital";
$pageDescription = "Learn about common eye diseases, symptoms, and preventive measures from Brar Eye Hospital experts.";
$pageKeywords = "eye diseases, symptoms, eye disease treatment, eye care";
include('header.php');
?>

<!-- 🌟 Know Your Diseases – Page Title Section -->
<section class="disease-page-title">
  <div class="disease-bg-layer"></div>

  <div class="disease-container">
    <div class="disease-content">
      <h1>Know Your Diseases</h1>
      <ul class="disease-breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>/</li>
        <li>Know Your Diseases</li>
      </ul>
    </div>
  </div>
</section>

<!-- 💅 CSS Styling -->
<style>
:root {
  --brar-teal: #03c0b4;
  --brar-orange: #f17732;
  --overlay: rgba(0, 0, 0, 0.55);
  --white: #ffffff;
  --font: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* 🌐 Section Wrapper */
.disease-page-title {
  position: relative;
  width: 100%;
  height: 320px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  font-family: var(--font);
  text-align: center;
  color: var(--white);
}

/* 🖼️ Background Layer */
.disease-bg-layer {
  position: absolute;
  inset: 0;
  background-image: linear-gradient(var(--overlay), var(--overlay)),
    url('assets/images/background/6 (2).webp');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  transform: scale(1);
  transition: transform 1.5s ease;
  z-index: 1;
}

.disease-page-title:hover .disease-bg-layer {
  transform: scale(1.05);
}

/* 📦 Content Container */
.disease-container {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1100px;
  padding: 0 20px;
  animation: fadeInUp 1.3s ease both;
}

/* 🏷️ Title */
.disease-content h1 {
  font-size: clamp(1.8rem, 5vw, 3rem);
  font-weight: 700;
  color: var(--brar-teal);
  text-transform: uppercase;
  margin-bottom: 10px;
  text-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
  animation: slideDown 1s ease both;
}

/* 🧭 Breadcrumb */
.disease-breadcrumb {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-size: 1.05rem;
  font-weight: 500;
  color: var(--white);
  animation: fadeIn 1.5s ease both;
}

.disease-breadcrumb li {
  color: var(--white);
}

.disease-breadcrumb a {
  color: var(--brar-teal);
  text-decoration: none;
  transition: color 0.3s ease;
}

.disease-breadcrumb a:hover {
  color: var(--brar-orange);
}

/* ✨ Animations */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(25px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes slideDown {
  from { opacity: 0; transform: translateY(-15px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

/* 📱 Responsive */
@media (max-width: 991px) {
  .disease-page-title { height: 260px; }
  .disease-content h1 { font-size: 2.2rem; }
}

@media (max-width: 576px) {
  .disease-page-title { height: 200px; padding: 50px 10px; }
  .disease-content h1 { font-size: 1.6rem; }
  .disease-breadcrumb {
    flex-direction: column;
    font-size: 0.9rem;
    gap: 4px;
  }
}
</style>


<!-- Diseases Section -->
<section class="diseases-section py-5">
    <div class="auto-container">
        <div class="sec-title text-center mb-5">
            <h2>Learn About Common Eye Diseases</h2>
            <p>Understand symptoms, treatments, and preventive tips to maintain healthy vision.</p>
        </div>

        <div class="row">
            <!-- Diabetic Retinopathy -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-container" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/pF3hrb1CYjE" 
                        title="Diabetic Retinopathy - Dr. Kaur" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-3">Diabetic Retinopathy - Dr. Kaur</h4>
            </div>

            <!-- Age-Related Macular Degeneration -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-container" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/EhuqyDMoX90" 
                        title="Age-Related Macular Degeneration - Dr. Gill" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-3">Age-Related Macular Degeneration - Dr. Gill</h4>
            </div>

            <!-- Cataract & Glaucoma Overview -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-container" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/ZQGbl-UPKeU" 
                        title="Pediatric Eye Care - Dr. Brar" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-3">Pediatric Eye Care - Dr. Brar</h4>
            </div>

            <!-- Coronavirus and Eye Care -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-container" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/MMXdmrjC5xs" 
                        title="Corona Virus Precautions - Dr. P.S. Brar" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-3">Corona Virus Precautions - Dr. P.S. Brar</h4>
            </div>

            <!-- Computer Vision Syndrome -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-container" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/KC-21ehx_iU" 
                        title="Computer Vision Syndrome - Dr. Kapoor" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-3">Computer Vision Syndrome - Dr. Kapoor</h4>
            </div>

            <!-- Eye Care Tips -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="video-container" style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <iframe width="100%" height="220" src="https://www.youtube.com/embed/fI8pCGtNUeg" 
                        title="Eye Care Tips - Dr. P.S. Brar" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                <h4 class="mt-3">Eye Care Tips for All Ages - Dr. P.S. Brar</h4>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
