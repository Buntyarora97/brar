<?php
// best-eye-hospital-bathinda.php

$pageTitle = "About Brar Eye Hospital Bathinda | 21 Years of Trusted Eye Care in Punjab";
$pageDescription = "Brar Eye Hospital Bathinda - NABH Accredited eye superspeciality hospital with 21+ years of legacy. Led by Dr. P.S. Brar, serving 1 lakh+ patients annually with world-class technology in Punjab.";
$pageKeywords = "about Brar Eye Hospital, best eye hospital Bathinda, NABH accredited eye hospital Punjab, Dr PS Brar eye surgeon, top eye care centre Bathinda, eye hospital Kotkapura, multispeciality eye hospital Punjab";

include('header.php');
?>
<style>
    .hospital-about-section .image-box img {
  max-height: 400px;
  object-fit: cover;
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.hospital-about-section .content-box ul li {
  padding-left: 1.2rem;
  position: relative;
  margin-bottom: 0.5rem;
  font-weight: 500;
}

.hospital-about-section .content-box ul li::before {
  content: "✔️";
  position: absolute;
  left: 0;
  color: green;
}

    .about-section {
        background-color: #f9f9f9;
    }

    .about-section .content-box {
        padding-left: 20px;
    }

    .about-section h2 {
        font-size: 28px;
        color: #333;
    }

    .about-section p {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    .service-block {
        margin-top: 30px;
        /* Adjust as needed */
        display: flex;
    }

    .service-block-one .inner-box {
        flex: 1;
        display: flex;
        flex-direction: column;
        height: 100%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        /* Optional: subtle box shadow */
        padding-bottom: 20px;
        /* Optional: inner spacing */
    }

    .service-block-one .lower-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>
<!-- Responsive Banner — paste this in place of your existing banner -->
<section class="new-banner-section">
  <div class="background-layer" aria-hidden="true"></div>
  <div class="container">
    <div class="content">
      <h1 style="color:white;">Best Eye Hospital in Punjab</h1>
      <ul class="breadcrumb" aria-label="breadcrumb">
        <li><a href="index.php">Home</a><span>/</span></li>
        <li aria-current="page">About Us</li>
      </ul>
    </div>
  </div>
</section>

<style>
/* ===== Responsive Banner Section ===== */
.new-banner-section {
  position: relative;
  overflow: hidden;
  color: #fff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  /* Height is responsive: larger on wide screens, smaller on mobile */
  min-height: 380px;
  display: flex;
  align-items: center;
}

/* Background image layer (keeps image on right) */
.new-banner-section .background-layer {
  position: absolute;
  inset: 0;
  background-image: url('assets/images/background/banner.webp');
  background-repeat: no-repeat;
  background-size: cover;
  /* Keep the important image area to the right so content can sit left */
  background-position: right center;

  z-index: 1;
  transition: transform 0.6s ease;
}

/* Container centers content and keeps it left-aligned on wide screens */
.new-banner-section .container {
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1200px; /* fits typical site width */
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  align-items: center;
}

/* Content block - aligned left and restricted width so image shows on right */
.new-banner-section .content {
  max-width: 620px; /* controls text width */
  text-align: left;
  padding: 18px 0;
}

/* Headline: responsive size using clamp */
.new-banner-section .content h1 {
  margin: 0 0 16px;
  font-weight: 700;
  color: #1dd2c3; /* your accent color */
  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
  line-height: 1.05;
  font-size: clamp(1.6rem, 3.2vw + 0.6rem, 3.2rem);
}

/* Breadcrumb styling */
.new-banner-section .breadcrumb {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-flex;
  gap: 8px;
  align-items: center;
  font-weight: 500;
  color: #f17732;
  font-size: 0.98rem;
  text-shadow: 0 0 3px rgba(0,0,0,0.45);
}

.new-banner-section .breadcrumb li {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.new-banner-section .breadcrumb li a {
  color: #f17732;
  text-decoration: none;
  transition: color .2s ease;
}

.new-banner-section .breadcrumb li a:hover {
  color: #cc6a28;
  text-decoration: underline;
}

.new-banner-section .breadcrumb li span {
  color: #f17732;
  opacity: 0.9;
}

/* Small visual tweak so text is more readable on very wide screens */
@media (min-width: 1400px) {
  .new-banner-section {
    min-height: 460px;
  }
  .new-banner-section .content { max-width: 720px; }
}

/* Tablet adjustments */
@media (max-width: 1024px) {
  .new-banner-section {
    min-height: 360px;
  }
  .new-banner-section .background-layer {
    background-position: right 30% center;
  }
  .new-banner-section .content { max-width: 560px; }
}

/* Mobile: stack content and ensure readable layout
   - Center the content, background centers so it doesn't cut important right-side element
*/
@media (max-width: 768px) {
  .new-banner-section {
    align-items: center;
    min-height: 300px;
    padding: 24px 0;
  }

  /* On small screens, center background slightly so the image (eye) still partly visible
     but doesn't overpower text */
  .new-banner-section .background-layer {
    background-position: center top;
    filter: brightness(0.45);
  }

  .new-banner-section .container {
    padding: 0 16px;
    justify-content: center;
  }

  .new-banner-section .content {
    max-width: 100%;
    text-align: center; /* center on mobile for better balance */
    padding: 8px 0;
  }

  .new-banner-section .breadcrumb {
    justify-content: center;
    gap: 6px;
  }
}

/* Extra small phones */
@media (max-width: 420px) {
  .new-banner-section { min-height: 260px; }
  .new-banner-section .content h1 { font-size: 1.4rem; }
}

/* Optional subtle parallax-like zoom on hover for desktop (non-intrusive) */
@media (hover: hover) and (pointer: fine) {
  .new-banner-section:hover .background-layer {
    transform: scale(1.02);
  }
}

/* Accessibility: ensure breadcrumb focus visible */
.new-banner-section .breadcrumb li a:focus {
  outline: 3px solid rgba(29,210,195,0.18);
  outline-offset: 4px;
}
</style>


<br><br>

<!-- Brar Eye Hospital — Content + Branch Sections -->
<style>
  /* ====== Shared layout & typography ====== */
  .brar-wrapper {
    max-width: 100%;
    margin: 40px auto;
    padding: 0 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #243044;
  }

  .brar-intro {
    background: #ffffff;
    padding: 28px 30px;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(34,50,80,0.06);
    line-height: 1.8;
    font-size: 1rem;
    color: #222;
  }

  .brar-intro p {
    margin-bottom: 1rem;
  }

  /* Features list */
  .brar-features {
    margin-top: 18px;
    padding: 18px;
    background: linear-gradient(180deg, #fbfdff 0%, #f6fbff 100%);
    border-left: 4px solid #1dd2c3;
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(29,210,195,0.03);
  }

  .brar-features h4 {
    margin: 0 0 10px;
    color: #1b3b55;
    font-size: 1.05rem;
  }

  .brar-features ul {
    margin: 0;
    padding-left: 1.1rem;
    list-style-type: disc;
    color: #333;
  }

  /* ====== Branch sections (two-column) ====== */
  .branch-section {
    display: flex;
    gap: 36px;
    align-items: stretch;
    margin-top: 36px;
    margin-bottom: 36px;
    flex-wrap: wrap;
  }

  .branch-image,
  .branch-content {
    flex: 1 1 45%;
    min-width: 280px;
    box-sizing: border-box;
  }

  .branch-image img {
    width: 100%;
    height: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 12px;
    display: block;
    box-shadow: 0 14px 36px rgba(37,53,77,0.08);
    transition: transform .45s ease, box-shadow .45s ease;
  }

  .branch-image img:hover {
    transform: translateY(-6px) scale(1.01);
    box-shadow: 0 22px 48px rgba(37,53,77,0.12);
  }

  .branch-content h3 {
    color: #1dd2c3;
    margin-top: 6px;
    margin-bottom: 14px;
    font-size: 1.25rem;
    font-weight: 700;
  }

  .branch-content p {
    margin-bottom: 12px;
    font-size: 1rem;
    color: #333;
    line-height: 1.7;
  }

  /* Small callout / stat */
  .stat {
    display: inline-block;
    background: #f7fbfd;
    color: #1b3b55;
    padding: 8px 12px;
    border-radius: 999px;
    font-weight: 600;
    margin-top: 8px;
    box-shadow: 0 6px 18px rgba(29,210,195,0.03);
  }

  /* ====== Accessibility & small screens ====== */
  @media (max-width: 880px) {
    .branch-image, .branch-content {
      flex: 1 1 100%;
    }
    .branch-image img { max-height: 360px; }
    .brar-wrapper { padding: 0 16px; }
  }

  @media (max-width: 480px) {
    .brar-intro { padding: 20px; font-size: 0.98rem; }
    .branch-image img { max-height: 260px; border-radius: 10px; }
    .branch-content h3 { font-size: 1.05rem; }
  }

  /* small typographic helpers for lists */
  .muted {
    color: #6b7a86;
    font-size: 0.98rem;
  }
</style>

<div class="brar-wrapper">

  <!-- ====== Brar Intro (original content kept exactly) ====== -->
<div class="brar-intro">
  <p>Brar Eye Hospital is a super-specialty eye hospital providing preventive & curative services in various disciplines of ophthalmology in an ambient, easily approachable and spacious and ergonomically designed premises. The hospital is equipped with the latest technology and equipment that is operated by a team of highly qualified and dedicated eye care professionals.</p>

  <p>Brar Eye Hospital started its journey as a small eye clinic in 1998 (Kotkapura) on the path to comprehensive & quality care and today it has grown to a full fledged tertiary care ophthalmic surgical center. The branch of Brar Eye Hospital also opened in Bathinda City on 26th January 2014.</p>

  <p><strong>1st NABH Accredited Eye Hospital of North India.</strong></p>

  <p>It is located on National Highway- 15, Faridkot road, Kotkapura, the geographical centre of south Punjab. Brar Eye Hospital is equipped with high end infrastructure & systems and was the first centre to provide phaco-emulsification services for the removal of cataract and IOL implantation in the entire south Punjab and adjoining parts of Haryana & Rajasthan. The hospital has state of the art Vitreo-Retina Department performing all types of complex Retina surgeries. The hospital handles the entire range of eye ailments and performs all types of eye surgeries in its well equipped ultra modern operation theatre complex which is fitted with laminar air flow and hepafilters.</p>

  <p>The motto of the hospital is to provide latest and the best in eye care to the people of the area at an affordable cost at their doorstep.</p>

  <p>Brar Eye Hospital is the leader in eye care in the Malwa Region of Punjab (South Punjab). Started in 1998 with a simple motto of providing best eye care services to the people at their doorstep. Today we draw patients not only from South Punjab but also from rest of Punjab and adjoining areas of Haryana and Rajasthan. Kotkapura branch started from a covered area of 2000 sq. feet, today the hospital is housed in 21000 sq. feet building and still has ample free space (more than 40000 sq. feet) for future expansion. Bathinda branch started from covered area 24000 sq. feet. Right from the beginning we have tried to plan ahead. We were the first hospital of our area to offer cataract surgery using sutureless phaco  emulsification system.</p>

  <p>Brar Eye Hospital has medical professionals whose skills, ethics and integrity are respected by patients far & wide. Brar Eye Hospital conducts regular free eye camps wherein the needy get their cataract surgeries with IOL implantations done with stitchless phacoemulsification, completely free.</p>

  <!-- ====== IMAGES INSERTED HERE (no extra text added) ====== -->
  <div class="brar-image-row" aria-hidden="false">
    <img src="assets/images/Kotkapura.webp" alt="Brar Eye Hospital Kotkapura" class="brar-img brar-img-left">
    <img src="assets/images/b2.webp" alt="Brar Eye Hospital Bathinda" class="brar-img brar-img-right">
  </div>

  <div class="brar-features" aria-label="Main features of the hospital">
    <h4>Main features of the Hospital</h4>
    <ul>
      <li>First NABH Accredited eye hospital of North India (Kotkapura Branch).</li>
      <li>First NABH Accredited eye hospital in Bathinda (Bathinda Branch).</li>
      <li>First hospital of our area to offer cataract surgery using sutureless phaco emulsification system.</li>
      <li>First Eye Hospital in Malwa to start LASIK LASER for removal of glasses.</li>
      <li>First Eye Hospital in Malwa to start Femtosecond Laser (Blade free LASIK)</li>
      <li>First Eye Hospital in Punjab to start Contoura VisionLASIK LASER</li>
      <li>First Eye Hospital in Malwa to start “Implantable Contact Lenses (ICL)”</li>
      <li>First Hospital in Malwa to start complete VITREO RETINA CENTRE for treatment of all types of diseases of vitreous, retina and uvea. This includes advanced digital FUNDUS FLUORESCEIN ANGIOGRAPHY, GREEN LASER, O.C.T. (all by Zeiss-Germany) and latest VITRECTOMY system.</li>
      <li>First and the only centre of South Punjab to do ROP screening and treatment with Laser Indirect Ophthalmoscope by highly experienced and trained Retinal Specialist.</li>
      <li>The hospital caters to all sub specialties of ophthalmology i.e. Cataract & Refractive surgery, Vitreo Retina, Glaucoma, Cornea, Oculoplasty, Pediatric ophthalmology and General & Medical Ophthalmology.</li>
      <li>More than 1,30,000/- Cataract Surgeries Performed SUCCESSFULLY.</li>
      <li>More than 25,000/- Lasik Surgeries Performed SUCCESSFULLY.</li>
      <li>We are performing More than 30 major Vitreo-Retinal Surgical procedures every month.</li>
      <li>Only Hospital in South Punjab, Having Govt. Accredited EYE BANK and doing Cornea Transplantation Surgery.</li>
      <li>Fully Computerized Patient Record.</li>
      <li>Highest Quality of Complete Eye Care Services</li>
      <li>Multiple O.T. to perform Super-specialty surgeries with all time Anaesthetic support.</li>
    </ul>
  </div>
</div>

<!-- ====== Styles & animation (paste into your CSS or inside a <style> block) ====== -->
<style>
/* Image row (keeps content same, only adds images with animation) */
.brar-image-row {
  display: flex;
  gap: 20px;
  margin: 26px 0;
  align-items: stretch;
  justify-content: center;
  max-width: 1140px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 10px;
}

/* Image common */
.brar-img {
  width: 50%;
  height: 360px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 12px 36px rgba(20,35,60,0.08);
  transition: transform 0.6s cubic-bezier(.2,.9,.2,1), box-shadow 0.4s ease, filter 0.4s ease;
  opacity: 0;
  transform: translateY(18px) scale(0.995);
  animation: brarImageIn 0.9s forwards cubic-bezier(.2,.9,.2,1);
}

/* staggered delays for nicer entrance */
.brar-img-left { animation-delay: 0.12s; }
.brar-img-right { animation-delay: 0.28s; }

.brar-img:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 28px 70px rgba(20,35,60,0.14);
  filter: saturate(1.03);
}

/* subtle floating animation on larger screens */
@media (min-width: 992px) {
  .brar-img-left { animation: brarImageIn 0.9s forwards cubic-bezier(.2,.9,.2,1); }
  .brar-img-right { animation: brarImageIn 0.9s forwards cubic-bezier(.2,.9,.2,1); }
}

/* animation keyframes */
@keyframes brarImageIn {
  to { opacity: 1; transform: translateY(0) scale(1); }
}

/* responsive: stack on small screens */
@media (max-width: 880px) {
  .brar-image-row { flex-direction: column; gap: 16px; }
  .brar-img { width: 100%; height: 300px; border-radius: 10px; }
}

@media (max-width: 480px) {
  .brar-img { height: 220px; }
}

/* keep rest of your typography untouched; small helper for accessibility */
.brar-image-row img[alt] { outline: none; }
</style>


  <!-- Branch: Kotkapura (image left, content right) -->
  <section class="branch-section" aria-label="Kotkapura branch">
    <div class="branch-image" aria-hidden="true">
      <img loading="lazy" src="assets/images/Kotkapura.webp" alt="Brar Eye Hospital Kotkapura Branch">
    </div>

    <div class="branch-content">
      <h3>30 Years of Excellence in Eye Care at Kotkapura</h3>
      <p>
        Brar Eye Hospital embarked on its journey in <strong>1998</strong> at Kotkapura, South Punjab, with the clear vision of delivering 
        <strong>comprehensive, affordable, and advanced eye care</strong> services at the doorstep of the community. Over the last three decades, 
        the hospital has expanded vastly — now housed in a sprawling 21,000 sq. feet ultra-modern facility, equipped with cutting-edge technology 
        including <strong>phaco-emulsification</strong> for cataract removal and premier <strong>IOL implantation</strong>.
      </p>
      <p>
        As the 1st NABH Accredited Eye Hospital in North India, Brar Eye Hospital Kotkapura leads the region with specialized departments such as the 
        state-of-the-art <strong>Vitreo-Retina Centre</strong> offering complex retinal surgeries, and innovations like sutureless cataract surgery. Our expert team delivers 
        <strong>super-specialty care</strong> through ultra-modern operating theatres featuring laminar airflow and HEPA filters.
      </p>
      <p>
        Discover advanced treatments here with seamless patient experiences, supported by a fully computerized record system and multiple OT rooms 
        ensuring continuous surgical support.
      </p>
      <div class="stat">Kotkapura Branch</div>
    </div>
  </section>

  <!-- Branch: Bathinda (content left, image right) -->
  <section class="branch-section" aria-label="Bathinda branch">
    <div class="branch-content">
      <h3>Expanding Vision: Brar Eye Hospital Bathinda</h3>
      <p>
        Established in <strong>2014</strong> in Bathinda, our branch extends the promise of <strong>high-quality eye care services</strong> to a broader community across Punjab, Haryana, and Rajasthan. 
        The Bathinda center boasts 24,000 sq. feet of advanced facilities, including the latest <strong>LASIK LASER technology</strong> and the pioneering 
        <strong>Contoura Vision LASIK system</strong>, making it a leading eye care destination in Malwa.
      </p>
      <p>
        Our offerings also include <strong>Femtosecond Laser (blade-free LASIK)</strong> and <strong>Implantable Contact Lenses (ICL)</strong> — improving vision correction with the highest precision and safety standards. 
        The hospital is the first in Malwa to launch a <strong>complete Vitreo Retina Centre</strong>, equipped with advanced diagnostics like digital Fundus Fluorescein Angiography and OCT by Zeiss-Germany.
      </p>
      <p>
        We also take pride in being the only South Punjab center with a <strong>government-accredited Eye Bank</strong> performing cornea transplantation surgeries, backed by a highly trained team of specialists providing compassionate care.
      </p>
      <div class="stat">Bathinda Branch</div>
    </div>

    <div class="branch-image" aria-hidden="true">
      <img loading="lazy" src="assets/images/b2.webp" alt="Brar Eye Hospital Bathinda Branch">
    </div>
  </section>

</div>  


<!-- booking-form-section (Styled for Brar Eye Hospital) -->
<section class="contact-style-two p_relative brar-booking-section">
  <div class="pattern-layer">
    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-55.webp);"></div>
    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-56.webp);"></div>
  </div>

  <div class="auto-container">
    <div class="row clearfix">
      <div class="col-lg-8 col-md-12 col-sm-12 big-column offset-lg-2">
        <div class="form-inner brar-form-card">

          <!-- Updated Heading for Brar Eye Hospital -->
          <h2 class="brar-form-heading">Reserve Your Appointment — <span>Brar Eye Hospital</span></h2>
          <p class="brar-form-sub">Book a specialist consultation quickly. We will contact you to confirm date & time.</p>

          <?php if(isset($_GET['success']) && $_GET['success'] == '1'): ?>
          <div class="brar-alert brar-alert-success">
              Your message has been sent successfully. We will contact you shortly.
          </div>
          <?php endif; ?>

          <?php if(isset($_GET['error']) && $_GET['error'] == '1'): ?>
          <div class="brar-alert brar-alert-error">
              There was an error sending your message. Please try again later.
          </div>
          <?php endif; ?>

          <form method="post" action="final-contact-form-solution.php" id="contact-form" class="brar-form">
            <div class="row clearfix">

              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label class="sr-only" for="username">Your Name</label>
                <input id="username" type="text" name="username" placeholder="Your Name" required>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label class="sr-only" for="email">Your Email</label>
                <input id="email" type="email" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label class="sr-only" for="phone">Phone</label>
                <input id="phone" type="text" name="phone" placeholder="Phone" required>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label class="sr-only" for="subject">Subject</label>
                <input id="subject" type="text" name="subject" placeholder="Subject (e.g. Cataract Consultation)" required>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <label class="sr-only" for="message">Message</label>
                <textarea id="message" name="message" placeholder="Message (optional details)" rows="5"></textarea>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 centred">
                <button class="theme-btn btn-one brar-submit" type="submit" name="submit-form" aria-label="Book Appointment">Book Appointment</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Styling for Brar Booking Form -->
<style>
/* Container & card */
.brar-booking-section {
  padding: 70px 0;
  position: relative;
  background: linear-gradient(180deg, #fbfdff 0%, #f7fbff 100%);
  overflow: hidden;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.brar-form-card {
  background: #ffffff;
  padding: 28px;
  border-radius: 14px;
  box-shadow: 0 18px 50px rgba(18,40,70,0.08);
  border: 1px solid rgba(29,210,195,0.06);
}

/* Heading */
.brar-form-heading {
  font-size: 1.6rem;
  margin: 0 0 6px;
  color: #0f3a55;
  font-weight: 800;
  letter-spacing: 0.4px;
}

.brar-form-heading span {
  color: #1dd2c3;
  font-weight: 700;
}

/* sub text */
.brar-form-sub {
  color: #516370;
  margin-bottom: 18px;
  font-size: 0.98rem;
}

/* Alerts */
.brar-alert {
  padding: 12px 14px;
  border-radius: 8px;
  margin-bottom: 16px;
  font-weight: 600;
  box-shadow: none;
}
.brar-alert-success {
  background-color: #e6fbef;
  color: #166c3b;
  border: 1px solid rgba(22,108,59,0.12);
}
.brar-alert-error {
  background-color: #fff4f4;
  color: #8a1f1f;
  border: 1px solid rgba(138,31,31,0.08);
}

/* Form fields */
.brar-form .form-group {
  margin-bottom: 14px;
}

.brar-form input[type="text"],
.brar-form input[type="email"],
.brar-form textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid #e6eef2;
  border-radius: 10px;
  background: #fbfeff;
  font-size: 0.98rem;
  color: #2b3b45;
  transition: box-shadow .22s ease, border-color .22s ease, transform .12s ease;
  box-shadow: 0 6px 18px rgba(31,69,91,0.03) inset;
}

.brar-form input:focus,
.brar-form textarea:focus {
  outline: none;
  border-color: rgba(29,210,195,0.9);
  box-shadow: 0 6px 18px rgba(29,210,195,0.06);
  transform: translateY(-1px);
}

/* Placeholder color */
.brar-form input::placeholder,
.brar-form textarea::placeholder {
  color: #7b8a93;
}

/* Submit button */
.brar-submit {
  background: linear-gradient(90deg, #1dd2c3 0%, #13a08a 100%);
  color: #fff;
  padding: 12px 28px;
  border-radius: 12px;
  border: none;
  font-weight: 700;
  font-size: 1rem;
  cursor: pointer;
  box-shadow: 0 12px 28px rgba(18,90,80,0.16);
  transition: transform .18s ease, box-shadow .18s ease;
  display: inline-block;
}

.brar-submit:hover,
.brar-submit:focus {
  transform: translateY(-4px);
  box-shadow: 0 20px 46px rgba(18,90,80,0.18);
}

/* small screen tweaks */
@media (max-width: 992px) {
  .brar-form-card { padding: 22px; }
  .brar-form-heading { font-size: 1.45rem; }
}

/* Mobile */
@media (max-width: 480px) {
  .brar-booking-section { padding: 36px 0; }
  .brar-form-card { padding: 16px; border-radius: 10px; }
  .brar-form-heading { font-size: 1.2rem; }
  .brar-submit { width: 100%; padding: 12px; }
}

/* Accessibility helpers */
.sr-only {
  position: absolute !important;
  height: 1px; width: 1px;
  overflow: hidden;
  clip: rect(1px, 1px, 1px, 1px);
  white-space: nowrap;
}
</style>





 <style>
    /* About Section - Updated Styles */

    .section-123 {
      position: relative;
      padding-top: 100px;
      padding-bottom: 100px;
      background: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      overflow: hidden;
    }

    .container-123 {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
    }

    .image-box-123 {
      flex: 1 1 45%;
      text-align: center;
      perspective: 1200px;
    }

    .image-box-123 img {
      width: 60%;
      max-height: 500px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(3, 192, 180, 0.7);
      transition: transform 0.6s ease;
      transform-style: preserve-3d;
      cursor: pointer;
    }

    .image-box-123 img:hover {
      transform: rotateY(15deg) rotateX(10deg) scale(1.05);
    }

    .image-box-123 h4 {
      margin-top: 15px;
      color: #03c0b4;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.25);
    }

    .image-box-123 p {
      margin-top: 6px;
      font-style: italic;
      color: #fd7e14;
      font-weight: 600;
    }

    .content-box-123 {
      flex: 1 1 50%;
      animation: fadeInUp 1.2s ease forwards;
      opacity: 0;
      transform: translateY(25px);
    }

    .content-box-123 h2 {
      color: #03c0b4;
      font-size: 2.6rem;
      margin-bottom: 20px;
      text-shadow: 1px 1px 3px rgba(253, 126, 20, 0.7);
    }

    .content-box-123 p {
      font-size: 1.1rem;
      line-height: 1.7;
      margin-bottom: 16px;
      color: #444;
    }

    p.extra-text-123 {
      max-width: 1140px;
      margin: 30px auto 0 auto;
      font-size: 1rem;
      color: #fd7e14;
      font-weight: 600;
      line-height: 1.6;
      animation: fadeIn 2s ease forwards;
      opacity: 0;
      padding: 0 20px;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    /* Responsive for mobile */
    @media (max-width: 767px) {
      .container-123 {
        flex-direction: column;
      }
      .image-box-123, .content-box-123 {
        flex: 1 1 100%;
      }
      .image-box-123 img {
        max-height: 400px;
      }
      .content-box-123 h2 {
        font-size: 2rem;
      }
    }
  </style>

   <section class="section-123">
    <div class="container-123">
      <div class="image-box-123 text-center mb-4 mb-lg-0">
        <img loading="lazy" src="assets/images/team/ps brar.webp" alt="doctors team" class="img-fluid rounded shadow" />
        <h4>Dr P.S Brar</h4>
        <p>Medical Director cum Chief Eye Surgeon</p>
      </div>
      <div class="content-box-123">
        <h2 style="color:#fd7e14">Dear Friends,</h2>
        <p>
          I welcome you all to take a pleasant viewing of our Interactive Web Site. We are committed to serve each and every one who walks into <strong>Brar Eye Hospital</strong> to the best of our abilities, in a dedicated and professional manner and with a humane touch.
        </p>
        <p>
          Now no one needs to go to a metropolis or to a far-off city for quality eye care, as we provide latest, state-of-the-art, world-class facilities at doorstep, at an affordable cost. This was duly authenticated in 2011 when BEH became the first hospital in the entire North India to be accredited by <strong>National Accreditation Board for Hospitals and Healthcare Providers (NABH)</strong> [a wing of Quality Council of India (QCI) – an autonomous organ of Govt. of India] for its quality, transparency, and safety to patients in providing international level eye care services.
        </p>
        <p>
          I attribute the credit for the tremendous trust of the people that BEH has won, to our team. For they have always shared responsibilities equally, served the patients with empathy, celebrated every achievement, and extended a firm helping hand at all times. In fact, they are the people who have made crossing hurdles seem effortless for BEH.
        </p>
      </div>
    </div>
    <p class="extra-text-123">
      Together, I’m certain, we can make BEH the best eye care provider in India. We Serve with Smile and Sincerity. I hope that by going through the various sections of our website, most of your queries and apprehensions about eye care in general and that provided at our hospital have been resolved. However, if you still feel the need, you can talk to us or write an e-mail. It is my humble request to all our patrons to provide us with your feedback, as that helps us to serve you better.
    </p>
  </section>

<style>
body {
  background: linear-gradient(135deg, #eef5f7 0%, #f7fafc 100%);
  min-height: 100vh;
}
.custom-funfact-section {
  padding: 70px 0 90px 0;
  background: linear-gradient(120deg, #f17732 0%, #1dd2c3 100%);
}
.container-wrapper {
  display: flex;
  flex-wrap: nowrap;
  justify-content: center;
  gap: 35px;
  max-width: 1400px;
  margin: 0 auto;
}
.counter-box {
  background: #fff;
  border-radius: 24px;
  box-shadow: 0 12px 32px rgba(0,0,0,0.14);
  width: 250px;
  padding: 44px 28px 35px 28px;
  text-align: center;
  transition: transform 0.18s cubic-bezier(.35,1.25,.6,1), box-shadow 0.18s;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.count-number {
  font-size: 46px;
  font-weight: 700;
  margin-bottom: 13px;
  letter-spacing: 1px;
}
.counter-box strong { font-weight: bold; color: inherit; }
.counter-box p {
  font-size: 17px;
  color: #555;
  line-height: 1.38;
  margin: 0;
  font-weight: 500;
  letter-spacing: .1px;
}
@media(max-width: 950px) {
  .container-wrapper {
    flex-wrap: wrap;
    gap: 25px;
  }
  .counter-box {
    width: 45vw;
    min-width: 220px;
  }
}
@media(max-width: 600px) {
  .container-wrapper {
    flex-direction: column;
    gap: 16px;
  }
  .counter-box {
    width: 90vw;
    min-width: 0;
    padding: 28px 13px 20px 13px;
  }
}
</style>

<!-- ===== Brar Eye — Achievements (Theme-matched) ===== -->
<section class="brar-stats-theme" aria-label="Key achievements - Brar Eye">
  <div class="brar-stats-wrapper">
    <h2 class="brar-stats-title">Our Milestones & Achievements</h2>

    <div class="brar-stats-grid">
      <div class="stat-card">
        <div class="stat-value"><span class="count" data-target="1" data-unit="none" data-compact="1st">0</span></div>
        <div class="stat-label">NABH accredited<br>Hospital in North India</div>
      </div>

      <div class="stat-card">
        <div class="stat-value"><span class="count" data-target="1" data-unit="none" data-compact="1st">0</span></div>
        <div class="stat-label">Hospital to have <strong>SMILE Pro</strong> in<br>North India (Malwa Region & South Punjab)</div>
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












<!-- team-style-two end -->


<?php include 'footer.php'; ?>