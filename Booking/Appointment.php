	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book Your Appointment | Brar Eye Hospital Bathinda</title>
<meta name="description" content="Schedule your eye check-up with Brar Eye Hospital. Book your appointment online for advanced eye care, expert doctors, and world-class facilities.">
<meta name="keywords" content="Brar Eye Hospital Bathinda, Eye Hospital Bathinda, Eye Specialist Bathinda, Best Eye Doctor Bathinda, Cataract Surgery Bathinda, Refractive Surgery Bathinda, Retina Treatment Bathinda, Glaucoma Specialist Bathinda, Cornea & Eye Bank Bathinda, Child Eye Care Bathinda, Squint Treatment Bathinda, Oculoplasty Bathinda, Neuro-Ophthalmology Bathinda, Eye Checkup Bathinda, Book Eye Appointment Bathinda">

    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
   
  <style> /* Custom CSS for Brar Eye Hospital Landing Page */
:root {
    --primary-color: #f17732;
    --secondary-color: #03c0b4;
    --success-color: #28a745;
    --warning-color: #f17732;
    --danger-color: #dc3545;
    --light-color: #f8f9fa;
    --dark-color: #343a40;
    --font-primary: 'Inter', sans-serif;
    --font-secondary: 'Poppins', sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--font-primary);
    line-height: 1.6;
    overflow-x: hidden;
}

html {
    scroll-behavior: smooth;
}

.navbar {
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
}

.navbar-brand {
    font-family: var(--font-secondary);
    font-size: 1.5rem;
    color: var(--primary-color) !important;
}

.navbar-brand img {
    max-height: 60px;
}

.nav-link {
    font-weight: 500;
    transition: color 0.3s ease;
    color: var(--dark-color) !important;
    font-size: 1rem;
    padding: 0.5rem 1rem;
}

.nav-link:hover {
    color: var(--primary-color) !important;
}

/* Responsive Design */

@media (max-width: 991.98px) {
    .navbar-brand {
        font-size: 1.2rem;
    }

    .navbar-toggler {
        font-size: 1rem;
    }

    .navbar-collapse {
        background: white;
        padding: 1rem;
    }

    .nav-link {
        display: block;
        width: 100%;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid #eee;
    }
}

@media (max-width: 575.98px) {
    .navbar-brand img {
        max-height: 45px;
    }

    .nav-link {
        font-size: 0.95rem;
    }

    .container {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
}


/* Hero Section */
.hero-section {
    height: 100vh;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('https://pixabay.com/get/g302514b4241c3906438c767a062968d3ac2db455f8a01bf1aa97a2f7136285886c9c37b9b851c979f374518635607d172f8382f84746f47c2f139b829083f0be_1280.webp') center/cover;
    opacity: 0.1;
    z-index: -1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(241,119,50,0.9) 0%, rgba(3,192,180,0.8) 100%);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    font-family: var(--font-secondary);
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    animation: fadeInUp 1s ease-out;
}

.nabh-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.nabh-logo {
    width: auto;
    height: 120px;
}

.hero-buttons .btn {
    border-radius: 50px;
    font-family: var(--font-secondary);
    transform: translateY(0);
    transition: all 0.3s ease;
}

.hero-buttons .btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* Floating Stats */
.floating-stats {
    position: absolute;
    bottom: 30px;
    left: 0;
    right: 0;
    z-index: 3;
}

.stat-item {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.2);
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-10px);
    background: rgba(255,255,255,0.25);
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #f17732;
    font-family: var(--font-secondary);
}

.stat-label {
    font-size: 0.9rem;
    color: white;
    font-weight: 500;
}

/* Mission Section */
.feature-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.mission-image-container {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
}

.mission-image-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(241,119,50,0.3), rgba(3,192,180,0.3));
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.mission-image-container:hover::before {
    opacity: 1;
}

/* Carousel */
.carousel-image {
    height: 800px;
    object-fit: cover;
}

.carousel-caption {
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    border-radius: 0 0 15px 15px;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px;
}

/* Testimonial Marquee */
.testimonial-marquee {
    overflow: hidden;
    position: relative;
}

.marquee-content {
    display: flex;
    gap: 30px;
    animation: marquee 30s linear infinite;
    width: max-content;
}

.testimonial-card {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 25px;
    min-width: 350px;
    border: 1px solid rgba(255,255,255,0.2);
    transition: transform 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-10px);
}

.stars {
    font-size: 0.9rem;
}

.patient-info {
    border-top: 1px solid rgba(255,255,255,0.2);
    padding-top: 15px;
}

@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* Service Cards */
.service-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid #f0f0f0;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.service-icon {
    width: 80px;
    height: 80px;
    background:#03c0b4;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: white;
}

.service-title {
    color: var(--primary-color);
    font-family: var(--font-secondary);
    font-weight: 600;
    margin-bottom: 15px;
}

.text-primary {
    color: var(--primary-color) !important;
}

.service-description {
    color: #666;
    margin-bottom: 20px;
}

.service-features {
    list-style: none;
    padding: 0;
}

.service-features li {
    padding: 5px 0;
    color: #888;
    position: relative;
    padding-left: 20px;
}

.service-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--success-color);
    font-weight: bold;
}

/* Patient Images */
.patient-image-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.patient-image-card:hover {
    transform: scale(1.05);
}

.patient-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    padding: 20px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.patient-image-card:hover .patient-overlay {
    transform: translateY(0);
}

/* Location Cards */
.location-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border-left: 4px solid var(--primary-color);
}

.location-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.location-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #f0f0f0;
}

.location-title {
    color: var(--primary-color);
    font-family: var(--font-secondary);
    font-weight: 600;
    margin: 0;
}

.bg-primary {
    background-color: var(--primary-color) !important;
}

.location-detail {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    color: #666;
}

.location-features {
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #f0f0f0;
}

/* Contact Form */
.appointment-form {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 30px;
    border: 1px solid rgba(255,255,255,0.2);
}

.form-control, .form-select {
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    background: rgba(255,255,255,0.1);
    color: white;
    backdrop-filter: blur(5px);
}

.form-control::placeholder {
    color: rgba(255,255,255,0.7);
}

.form-control:focus, .form-select:focus {
    background: rgba(255,255,255,0.2);
    border-color: var(--warning-color);
    box-shadow: 0 0 0 0.2rem rgba(255,193,7,0.25);
    color: white;
}

.form-select option {
    background: var(--primary-color);
    color: white;
}

/* Contact Info */
.contact-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.15);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    backdrop-filter: blur(10px);
}

/* Floating Action Buttons */
.floating-action-btn {
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.floating-action-btn .btn {
    width: 60px;
    height: 60px;
    font-size: 1.5rem;
    animation: pulse 2s infinite;
    display: flex;
    align-items: center;
    justify-content: center;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Animations */
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

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section {
        height: 100vh;
        text-align: center;
    }
    
    .display-3 {
        font-size: 2.5rem;
    }
    
    .display-4 {
        font-size: 2rem;
    }
    
    .display-5 {
        font-size: 1.8rem;
    }
    
    .lead {
        font-size: 1.1rem;
    }
    
    .hero-buttons {
        flex-direction: column;
        gap: 15px;
    }
    
    .hero-buttons .btn {
        width: 100%;
        max-width: 300px;
    }
    
    .floating-stats {
        bottom: 20px;
    }
    
    .stat-item {
        margin-bottom: 15px;
        padding: 15px;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
    
    .carousel-image {
        height: 250px;
    }
    
    .testimonial-card {
        min-width: 280px;
        padding: 20px;
    }
    
    .service-card {
        margin-bottom: 20px;
        padding: 25px;
    }
    
    .appointment-form {
        padding: 25px;
    }
    
    .floating-action-btn {
        right: 15px;
        bottom: 15px;
    }
    
    .floating-action-btn .btn {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
    
    .nabh-logo {
        width: 50px;
        height: 50px;
    }
    
    .marquee-content {
        animation-duration: 25s;
    }
}

@media (max-width: 576px) {
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .hero-section {
        padding-top: 80px;
    }
    
    .floating-stats .row > div {
        margin-bottom: 10px;
    }
    
    .location-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .appointment-form {
        padding: 20px 15px;
    }
    
    .testimonial-card {
        min-width: 250px;
        padding: 15px;
    }
}

/* Dark mode support for form elements */
@media (prefers-color-scheme: dark) {
    .form-control, .form-select {
        background: rgba(255,255,255,0.05);
        border-color: rgba(255,255,255,0.2);
    }
}

/* Print styles */
@media print {
    .floating-action-btn,
    .navbar,
    .carousel-control-prev,
    .carousel-control-next {
        display: none !important;
    }
}

/* High contrast mode support */
@media (prefers-contrast: high) {
    .hero-section {
        background: #000;
        color: #fff;
    }
    
    .service-card {
        border: 2px solid #000;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
    
    .marquee-content {
        animation: none;
        justify-content: center;
    }
}


.carousel-video {
  width: 100%;
  height: 500px;
  object-fit: cover;
}

@media (max-width: 768px) {
  .carousel-video {
    height: 250px;
  }
}

@media (max-width: 576px) {
  .hero-title {
    font-size: 2.2rem;
  }

  .hero-buttons .btn {
    font-size: 1rem;
    padding: 12px 16px;
  }

  .stat-number {
    font-size: 1.5rem;
  }
}
/* Reset & root variables remain the same */

/* Navbar base */
.navbar {
    width: 85%;  /* Full width */
    position: fixed; /* Sticky navbar at top */
    top: 0;
    left: 0;
    right: 0;
    z-index: 1050;
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Brand */
.navbar-brand {
    font-family: var(--font-secondary);
    font-size: 1.5rem;
    color: var(--primary-color) !important;
    display: flex;
    align-items: center;
}

.navbar-brand img {
    max-height: 60px;
    margin-right: 10px;
}

/* Nav links container */
.navbar-collapse {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-grow: 1;
}

/* Nav links */
.nav-link {
    font-weight: 500;
    color: var(--dark-color) !important;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    transition: color 0.3s ease;
    text-align: center;
}

.nav-link:hover {
    color: var(--primary-color) !important;
}

/* Toggler Button */
.navbar-toggler {
    display: none;
    background: var(--primary-color);
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    color: white;
    font-size: 1.2rem;
    cursor: pointer;
}

/* Responsive Breakpoints */

/* Tablet and smaller */
@media (max-width: 991.98px) {
    .navbar-brand {
        font-size: 1.3rem;
    }

    .navbar-toggler {
        display: block;  /* Show hamburger */
    }

    .navbar-collapse {
        position: fixed;
        top: 60px;  /* Height of navbar */
        left: 0;
        right: 0;
        background: white;
        flex-direction: column;
        padding: 1rem 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        z-index: 1049;
    }

    /* When navbar is expanded, add a class like .show to navbar-collapse */
    .navbar-collapse.show {
        max-height: 300px; /* Enough height to show all menu items */
    }

    .nav-link {
        display: block;
        width: 100%;
        padding: 0.75rem 1.5rem;
        border-bottom: 1px solid #eee;
        font-size: 1rem;
    }
}

/* Mobile small */
@media (max-width: 575.98px) {
    .navbar-brand img {
        max-height: 45px;
    }

    .nav-link {
        font-size: 0.95rem;
    }

    .navbar {
        padding: 0.5rem 0.5rem;
    }
    
    .navbar-collapse {
        max-height: 0;
        overflow: hidden;
    }
    
    .navbar-collapse.show {
        max-height: 400px;
    }
}

<style>
  @media (max-width: 991.98px) {
    #navbarNav {
      text-align: center;
    }
    #navbarNav .navbar-nav {
      flex-direction: column;
      align-items: center;
      width: 80%;
      gap: 0.5rem;
    }
  }
</style>


</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17006369601">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17006369601');
</script>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow" style="width: 100%;">
  <div class="container" style="max-width: 100%; padding-left: 15px; padding-right: 15px; box-sizing: border-box;">
    <a class="navbar-brand fw-bold text-primary" href="#home" style="display: flex; align-items: center; font-size: 1.25rem;">
      <img src="logo1.webp" alt="Brar Eye Hospital" style="max-width: 100%; height: auto; max-height: 60px; margin-right: 0.5rem;" />
      BRAR EYE HOSPITAL
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border: none; padding: 0.25rem 0.5rem;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav text-center" style="flex-wrap: wrap;">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#locations">Locations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<!-- Hero Section -->
<section id="home" class="hero-section position-relative d-flex align-items-center justify-content-center min-vh-100">
  <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index: 1;"></div>
  <div class="container position-relative z-2 py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center text-white">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">

          <!-- NABH Badge -->
          <div class="nabh-badge mb-4 d-inline-flex align-items-center flex-wrap justify-content-center gap-3" data-aos="zoom-in" data-aos-delay="200">
            <img src="nabh.webp" alt="NABH Accredited" class="nabh-logo img-fluid" style="max-height: 100px;">
            <span class="badge bg-success fs-6">NABH Accredited</span>
          </div>

          <!-- New Heading -->
          <h1 class="fw-bold mb-3 hero-title display-4 display-md-3 display-lg-2">
            Book Your Appointment<br>
            <span class="text-warning">Brar Eye Hospital</span>
          </h1>

          <!-- New Subheading -->
          <p class="lead mb-3 fs-4">
            Advanced Eye Care | Experienced Doctors | 25 Years of Excellencee
          </p>

          <!-- New Description -->
          <p class="fs-6 fs-md-5 text-light opacity-90 mb-4 px-3 px-md-5">
            North India's First NABH Accredited Eye Hospital.<br>
            Cataract, LASIK, Retina, Glaucoma, Children’s Eye Care & more.<br>
            Trusted by 5,000+ patients for clear vision and compassionate treatment.
          </p>

          <!-- Action Buttons (unchanged) -->
          <div class="hero-buttons d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
            <a href="#contact" class="btn btn-warning btn-lg fw-semibold px-4 py-3 w-100 w-md-auto">
              <i class="fas fa-calendar-alt me-2"></i>Book Appointment
            </a>
            <a href="tel:+917218272182" class="btn btn-outline-light btn-lg fw-semibold px-4 py-3 w-100 w-md-auto">
              <i class="fas fa-phone me-2"></i>Call Now
            </a>
            <a href="https://wa.me/917218272182?text=Hi,%20I%20want%20to%20book%20an%20appointment%20for%20eye%20checkup" class="btn btn-success btn-lg fw-semibold px-4 py-3 w-100 w-md-auto">
              <i class="fab fa-whatsapp me-2"></i>WhatsApp
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- Floating Stats Section -->
<div class="floating-stats bg-white py-4 position-relative z-3">
  <div class="container">
    <div class="row text-center">
      <div class="col-6 col-md-3 mb-3" data-aos="fade-up" data-aos-delay="400">
        <div class="stat-item">
          <div class="stat-number fs-3 fw-bold">5000+</div>
          <div class="stat-label text-dark">Happy Patients</div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3" data-aos="fade-up" data-aos-delay="500">
        <div class="stat-item">
          <div class="stat-number fs-3 fw-bold">25+</div>
          <div class="stat-label text-dark">Years Experience</div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3" data-aos="fade-up" data-aos-delay="600">
        <div class="stat-item">
          <div class="stat-number fs-3 fw-bold">100%</div>
          <div class="stat-label text-dark">Patient Satisfaction</div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3" data-aos="fade-up" data-aos-delay="700">
        <div class="stat-item">
          <div class="stat-number fs-3 fw-bold">50+</div>
          <div class="stat-label text-dark">Expert Staff</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Why Choose Brar Eye Hospital Section -->
<section id="why-brar" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text & Features -->
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="display-4 fw-bold text-primary mb-4">Why Choose Brar Eye Hospital?</h2>
        <p class="lead text-muted mb-4">
          Trusted by thousands for expert eye care and advanced technology. We help you achieve clearer vision with personalized treatment and compassionate support.
        </p>
        <div class="mission-features">
          <div class="feature-item d-flex align-items-center mb-3">
            <div class="feature-icon bg-primary rounded-circle me-3">
              <i class="fas fa-eye text-white"></i>
            </div>
            <div>
              <h5 class="mb-1">Advanced Diagnostics</h5>
              <p class="text-muted mb-0">State-of-the-art equipment for accurate and early detection</p>
            </div>
          </div>
          <div class="feature-item d-flex align-items-center mb-3">
            <div class="feature-icon bg-success rounded-circle me-3">
              <i class="fas fa-user-md text-white"></i>
            </div>
            <div>
              <h5 class="mb-1">Experienced Specialists</h5>
              <p class="text-muted mb-0">Highly qualified surgeons & doctors for all age groups</p>
            </div>
          </div>
          <div class="feature-item d-flex align-items-center mb-3">
            <div class="feature-icon bg-warning rounded-circle me-3">
              <i class="fas fa-award text-white"></i>
            </div>
            <div>
              <h5 class="mb-1">NABH Accredited</h5>
              <p class="text-muted mb-0">First NABH-accredited eye hospital in North India for quality & safety</p>
            </div>
          </div>
          <div class="feature-item d-flex align-items-center mb-3">
            <div class="feature-icon bg-info rounded-circle me-3">
              <i class="fas fa-hospital text-white"></i>
            </div>
            <div>
              <h5 class="mb-1">Complete Eye Solutions</h5>
              <p class="text-muted mb-0">Cataract, LASIK, Retina, Glaucoma, Pediatrics and more—all under one roof</p>
            </div>
          </div>
          <div class="feature-item d-flex align-items-center mb-3">
            <div class="feature-icon bg-danger rounded-circle me-3">
              <i class="fas fa-hands-helping text-white"></i>
            </div>
            <div>
              <h5 class="mb-1">Compassionate Care</h5>
              <p class="text-muted mb-0">Personalized attention from our caring hospital team</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Image -->
      <div class="col-lg-6" data-aos="fade-left">
        <div class="mission-image-container">
          <img src="1.webp" alt="Advanced Eye Care Equipment" class="img-fluid rounded-3 shadow-lg">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold text-primary">Our World-Class Facilities<br>ਸਾਡੀਆਂ ਵਿਸ਼ਵ-ਪੱਧਰੀ ਸੁਵਿਧਾਵਾਂ</h2>
      <p class="lead text-muted">Experience the best in eye care with our modern infrastructure<br>ਆਧੁਨਿਕ ਢਾਂਚੇ ਨਾਲ ਸਭ ਤੋਂ ਵਧੀਆ ਆਖਾਂ ਦੀ ਦੇਖਭਾਲ ਦਾ ਅਨੁਭਵ ਕਰੋ</p>
    </div>

    <div id="facilityCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
      <div class="carousel-inner rounded-3 shadow-lg">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <video class="d-block w-100 carousel-video" autoplay muted loop playsinline>
            <source src="../assets/images/background/23.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5 class="fw-bold">BRAR EYE Hospital, Bathinda<br>ਬਰਾਰ ਆਈ ਹਸਪਤਾਲ, ਬਠਿੰਡਾ</h5>
            <p>State-of-the-art eye care services in Bathinda<br>ਬਠਿੰਡਾ ਵਿੱਚ ਆਧੁਨਿਕ ਆਖਾਂ ਦੀ ਦੇਖਭਾਲ ਸੇਵਾਵਾਂ</p> -->
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <video class="d-block w-100 carousel-video" autoplay muted loop playsinline>
            <source src="BRAR EYE VIDEO.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5 class="fw-bold">BRAR EYE Hospital, Kotkapura<br>ਬਰਾਰ ਆਈ ਹਸਪਤਾਲ, ਕੋਟਕਪੂਰਾ</h5>
            <p>Providing comprehensive eye care since 1998<br>1998 ਤੋਂ ਵਿਸ਼ਤ੍ਰਿਤ ਆਖਾਂ ਦੀ ਦੇਖਭਾਲ</p> -->
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#facilityCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#facilityCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </div>
</section>
<!-- Testimonials Section -->
<section class="py-5 bg-primary text-white">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-5 fw-bold">What Our Patients Say</h2>
      <p class="lead opacity-90">Real stories from people who achieved clear vision and confidence</p>
    </div>

    <div class="testimonial-marquee">
      <div class="marquee-content d-flex flex-wrap gap-4 justify-content-center">
        <!-- Testimonial 1 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"Amazing experience! Got perfect vision after cataract surgery. Dr. Brar and team are excellent!"</p>
          <strong>Manjit Singh</strong><br><small class="text-muted">Bhatinda</small>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"LASIK surgery changed my life. No more glasses! Highly recommend BRAR EYE Hospital."</p>
          <strong>Preet Kaur</strong><br><small class="text-muted">Kotkapura</small>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"Professional staff, modern equipment, and excellent results. Best eye hospital in Punjab!"</p>
          <strong>Simranjeet Kaur</strong><br><small class="text-muted">Faridkot</small>
        </div>

        <!-- Testimonial 4 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"My mother's glaucoma treatment was handled with great care and expertise. Grateful for the kind doctors and prompt service!"</p>
          <strong>Rahul Sharma</strong><br><small class="text-muted">Muktsar</small>
        </div>

        <!-- Testimonial 5 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"My child had squint surgery at Brar Eye Hospital. The pediatric team’s approach was caring and friendly. Highly satisfied!"</p>
          <strong>Kavita Mehra</strong><br><small class="text-muted">Barnala</small>
        </div>

        <!-- Testimonial 6 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"I visited for a routine eye checkup and contact lens fitting. The process was smooth and the team ensured perfect comfort."</p>
          <strong>Amanpreet Singh</strong><br><small class="text-muted">Mansa</small>
        </div>

        <!-- Testimonial 7 -->
        <div class="testimonial-card p-4 bg-white text-dark rounded shadow" style="width: 300px;">
          <div class="stars mb-2">
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p>"State-of-the-art facilities! I regained vision after retina treatment. Thank you Dr. Brar and the entire staff."</p>
          <strong>Sheetal Kumar</strong><br><small class="text-muted">Bathinda</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
  <div class="container">
    <div class="text-center mb-3" data-aos="fade-up">
      <h2 class="display-5 fw-bold text-primary">Our Specialized Services</h2>
      <p class="lead text-muted">Comprehensive eye care solutions for all your vision needs</p>
    </div>

    <!-- Highlighted Lasik Laser Pricing -->
    <div style="background-color: #f17732; color: white; font-weight: bold; font-size: 1.2rem; padding: 12px 20px; border-radius: 8px; max-width: 400px; margin: 0 auto 30px auto; text-align: center;">
      Lasik Laser Starting at Rs. 18,000/- Per Eye
    </div>

    <div class="row g-4">
      <!-- Cataract Surgery -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card h-100">
          <div class="service-icon"><i class="fas fa-eye"></i></div>
          <h4 class="service-title">Cataract Surgery</h4>
          <p class="service-description">Advanced phacoemulsification with premium IOL implants for crystal clear vision.</p>
          <ul style="padding-left: 0; list-style: none;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Micro-incision surgery</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Same-day discharge</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Premium lens options</li>
          </ul>
        </div>
      </div>

      <!-- SMILE Pro -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
        <div class="service-card h-100" style="border: 3px solid #f17732; background-color: #fff3e0;">
          <div class="service-icon" style="color: #f17732;"><i class="fas fa-smile"></i></div>
          <h4 class="service-title" style="color: #f17732; font-weight: 700;">SMILE Pro</h4>
          <p class="service-description" style="font-weight: 600;">Advanced cosmetic dental and eye care solutions to keep your smile bright and confident.</p>
          <ul style="padding-left: 0; list-style: none; font-weight: 600;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Smile enhancement</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Professional whitening</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Personalized care</li>
          </ul>
        </div>
      </div>

      <!-- LASIK Surgery -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card h-100">
          <div class="service-icon"><i class="fas fa-laser-pointer"></i></div>
          <h4 class="service-title">LASIK Surgery</h4>
          <p class="service-description">Bladeless LASIK for permanent freedom from glasses and contact lenses.</p>
          <ul style="padding-left: 0; list-style: none;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Bladeless technology</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Quick recovery</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Lifetime warranty</li>
          </ul>
        </div>
      </div>

      <!-- Glaucoma Treatment -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card h-100">
          <div class="service-icon"><i class="fas fa-compress-alt"></i></div>
          <h4 class="service-title">Glaucoma Treatment</h4>
          <p class="service-description">Early detection and advanced treatment to prevent vision loss from glaucoma.</p>
          <ul style="padding-left: 0; list-style: none;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Regular monitoring</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Medical & surgical options</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Pressure control</li>
          </ul>
        </div>
      </div>

      <!-- Retina Care -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-card h-100">
          <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
          <h4 class="service-title">Retina Care</h4>
          <p class="service-description">Specialized treatment for diabetic retinopathy and other retinal conditions.</p>
          <ul style="padding-left: 0; list-style: none;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Anti-VEGF injections</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Laser treatment</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Vitrectomy surgery</li>
          </ul>
        </div>
      </div>

      <!-- Pediatric Eye Care -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-card h-100">
          <div class="service-icon"><i class="fas fa-child"></i></div>
          <h4 class="service-title">Pediatric Eye Care</h4>
          <p class="service-description">Specialized eye care for children including squint correction and amblyopia treatment.</p>
          <ul style="padding-left: 0; list-style: none;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Child-friendly approach</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Squint surgery</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Vision therapy</li>
          </ul>
        </div>
      </div>

      <!-- Contact Lenses -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-card h-100">
          <div class="service-icon"><i class="fas fa-glasses"></i></div>
          <h4 class="service-title">Contact Lenses</h4>
          <p class="service-description">Premium contact lenses fitting and comprehensive eye examinations.</p>
          <ul style="padding-left: 0; list-style: none;">
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> All lens types</li>
            <li style="position: relative; padding-left: 1.4em; margin-bottom: 8px;"><span style="position: absolute; left: 0;">✅</span> Proper fitting</li>
            <li style="position: relative; padding-left: 1.4em;"><span style="position: absolute; left: 0;">✅</span> Care training</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>




    <!-- Our Expert Doctors Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-primary">Our Expert Doctors</h2>
            <p class="lead text-muted">Meet our team of experienced eye specialists dedicated to your vision</p>
        </div>

        <div class="row g-4">
            <!-- Doctor 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 text-center">
                    <img src="123.webp" alt="Dr. P.S. Brar" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. P.S. Brar</h4>
                    <p class="service-description text-primary fw-semibold">Medical Director & Chief Eye Surgeon</p>
                    <ul class="service-features">
                        <li>25+ Years Experience</li>
                        <li>Advanced Cataract Surgery</li>
                        <li>NABH Certified Hospital Leader</li>
                    </ul>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 text-center">
                    <img src="1234.webp" alt="Dr. M.S. Brar" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. M.S. Brar</h4>
                    <p class="service-description text-primary fw-semibold">Cataract & Paediatric Surgeon</p>
                    <ul class="service-features">
                        <li>Pediatric Eye Specialist</li>
                        <li>Advanced Cataract Techniques</li>
                        <li>Child-Friendly Approach</li>
                    </ul>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100 text-center">
                    <img src="12345.webp" alt="Dr. Sunny Goyal" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. Sunny Goyal</h4>
                    <p class="service-description text-primary fw-semibold">Cataract & Glaucoma Surgeon</p>
                    <ul class="service-features">
                        <li>Glaucoma Specialist</li>
                        <li>Laser Surgery Expert</li>
                        <li>Pressure Management</li>
                    </ul>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card h-100 text-center">
                    <img src="team-51.webp  " alt="Dr. Aazambir Singh Brar" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. Aazambir Singh Brar</h4>
                    <p class="service-description text-primary fw-semibold">Cataract, Refractive & Vitreo-Retina Surgeon</p>
                    <ul class="service-features">
                        <li>LASIK & Refractive Surgery</li>
                        <li>Retinal Specialist</li>
                        <li>Advanced Vitrectomy</li>
                    </ul>
                </div>
            </div>

            <!-- Doctor 5 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card h-100 text-center">
                    <img src="52.webp" alt="Dr. Jatinder Kumar Gupta" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. Jatinder Kumar Gupta</h4>
                    <p class="service-description text-primary fw-semibold">Senior Consultant Ophthalmologist</p>
                    <ul class="service-features">
                        <li>General Ophthalmology</li>
                        <li>Comprehensive Eye Care</li>
                        <li>Vision Correction</li>
                    </ul>
                </div>
            </div>

            <!-- Doctor 6 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card h-100 text-center">
                    <img src="53.webp" alt="Dr. B. Ravinder Naik" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. B. Ravinder Naik</h4>
                    <p class="service-description text-primary fw-semibold">Cataract, Strabismus & Pediatric Ophthalmology Consultant</p>
                    <ul class="service-features">
                        <li>Squint Correction</li>
                        <li>Pediatric Specialist</li>
                        <li>Amblyopia Treatment</li>
                    </ul>
                </div>
            </div>

            <!-- Doctor 7 -->
            <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-delay="700">
                <div class="service-card h-100 text-center">
                    <img src="55.webp" alt="Dr. Anand Singh Brar" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">
                    <h4 class="service-title">Dr. Anand Singh Brar</h4>
                    <p class="service-description text-primary fw-semibold">Vitreo-Retina Consultant</p>
                    <ul class="service-features">
                        <li>Diabetic Retinopathy</li>
                        <li>Macular Degeneration</li>
                        <li>Anti-VEGF Injections</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Happy Patients Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-primary">Happy Patients, Perfect Vision</h2>
            <p class="lead text-muted">See the joy of clear vision in our patients' faces</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="patient-image-card">
                    <img src="1.webp" 
                         alt="Happy Patient" class="img-fluid rounded-3">
                    <div class="patient-overlay">
                        <h5 class="text-white fw-bold">Perfect Vision Achieved</h5>
                        <p class="text-white-50">Post-LASIK Surgery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="patient-image-card">
                    <img src="cataract.webp" 
                         alt="Happy Patient" class="img-fluid rounded-3">
                    <div class="patient-overlay">
                        <h5 class="text-white fw-bold">Cataract Surgery Success</h5>
                        <p class="text-white-50">Crystal Clear Vision</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="patient-image-card">
                    <img src="3.webp" 
                         alt="Happy Patient" class="img-fluid rounded-3">
                    <div class="patient-overlay">
                        <h5 class="text-white fw-bold">Retina Treatment</h5>
                        <p class="text-white-50">Vision Restored</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="patient-image-card">
                    <img src="2.webp" 
                         alt="Happy Patient" class="img-fluid rounded-3">
                    <div class="patient-overlay">
                        <h5 class="text-white fw-bold">Glaucoma Treatment</h5>
                        <p class="text-white-50">Pressure Controlled</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Video Embeds Section -->
<div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; padding: 20px; background: #f9f9f9;">

  <!-- Informational Video: Overview of Brar Eye Hospital -->
<div style="text-align: center; flex: 1 1 300px; max-width: 500px;">
  <div style="position: relative; width: 100%; padding-bottom: 120%; height: 0;">
    <iframe 
      src="https://www.instagram.com/reel/DNhfQmCqLNO/embed" 
      frameborder="0" 
      scrolling="no" 
      allowtransparency="true" 
      allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
    ></iframe>
  </div>
  <p style="margin-top: 10px; font-weight: bold; color: #f17732; font-size: 1.1rem;">
    Overview of Brar Eye Hospital
  </p>
</div>

  <!-- Smile Pro Promotional Video -->
  <div style="text-align: center; flex: 1 1 300px; max-width: 500px;">
    <div style="position: relative; width: 100%; padding-bottom: 120%; height: 0;">
      <iframe 
        src="https://www.instagram.com/reel/DJjAEW7vQ2V/embed" 
        frameborder="0" 
        scrolling="no" 
        allowtransparency="true" 
        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
      ></iframe>
    </div>
    <p style="margin-top: 10px; font-weight: bold; color: #f17732; font-size: 1.1rem;">
      Smile Pro
    </p>
  </div>

</div>



<section>
  <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; padding: 20px; background: #f9f9f9;">

    <!-- Video 1: Am I a good candidate for LASIK? -->
    <div style="text-align: center; flex: 1 1 300px; max-width: 500px;">
      <div style="position: relative; width: 100%; padding-bottom: 120%; height: 0;">
        <iframe 
          src="https://www.instagram.com/p/DLR0YmbNT4T/embed" 
          frameborder="0" 
          scrolling="no" 
          allowtransparency="true" 
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
        ></iframe>
      </div>
      <p style="margin-top: 10px; font-weight: bold; color: #f17732; font-size: 1.1rem;">
        Am I a good candidate for LASIK?
      </p>
    </div>

    <!-- Video 2: Only 8 seconds can change your life! -->
    <div style="text-align: center; flex: 1 1 300px; max-width: 500px;">
      <div style="position: relative; width: 100%; padding-bottom: 120%; height: 0;">
        <iframe 
          src="https://www.instagram.com/p/DKjsgWhyQTM/embed" 
          frameborder="0" 
          scrolling="no" 
          allowtransparency="true" 
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
        ></iframe>
      </div>
      <p style="margin-top: 10px; font-weight: bold; color: #f17732; font-size: 1.1rem;">
        Only 8 seconds can change your life!
      </p>
    </div>

  </div>
</section>



<section>
  <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; padding: 20px; background: #f9f9f9;">

    <!-- Video 3: All Eye Surgeries on EMI -->
    <div style="text-align: center; flex: 1 1 300px; max-width: 500px;">
      <div style="position: relative; width: 100%; padding-bottom: 120%; height: 0;">
        <iframe 
          src="https://www.instagram.com/p/DMSGF03JzAY/embed" 
          frameborder="0" 
          scrolling="no" 
          allowtransparency="true" 
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
        ></iframe>
      </div>
      <p style="margin-top: 10px; font-weight: bold; color: #f17732; font-size: 1.1rem;">
        All Eye Surgeries on EMI
      </p>
    </div>

    <!-- Video 4: Think Cataract Is Only for Old Age? -->
    <div style="text-align: center; flex: 1 1 300px; max-width: 500px;">
      <div style="position: relative; width: 100%; padding-bottom: 120%; height: 0;">
        <iframe 
          src="https://www.instagram.com/p/DM2JPpJOUcA/embed" 
          frameborder="0" 
          scrolling="no" 
          allowtransparency="true" 
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
        ></iframe>
      </div>
      <p style="margin-top: 10px; font-weight: bold; color: #f17732; font-size: 1.1rem;">
        Think Cataract Is Only for Old Age?
      </p>
    </div>

  </div>
</section>



    <!-- Locations Section -->
    <section id="locations" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary">Our Locations</h2>
                <p class="lead text-muted">Serving patients across Punjab with multiple convenient locations</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="location-card h-100">
                        <div class="location-header">
                            <h4 class="location-title">Bathinda (Main Branch)</h4>
                            <span class="badge bg-primary">Headquarters</span>
                        </div>
                        <div class="location-content">
                            <div class="location-detail">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <span>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</span>
                            </div>
                            <div class="location-detail">
                                <i class="fas fa-phone text-primary me-2"></i>
                                <span>+91 7218272182</span>
                            </div>
                            <div class="location-detail">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <span>brareyehospitals@gmail.com</span>
                            </div>
                            <div class="location-detail">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <span>8:00 AM - 5:00 PM</span>
                            </div>
                            <div class="location-features">
                                <span class="badge bg-success me-1 mb-2">NABH Accredited</span>
                                <span class="badge bg-info me-1 mb-2">Full Services</span>
                                <span class="badge bg-warning me-1 mb-2">Emergency Care</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="location-card h-100">
                        <div class="location-header">
                            <h4 class="location-title">Kotkapura Branch</h4>
                            <span class="badge bg-success">Active</span>
                        </div>
                        <div class="location-content">
                            <div class="location-detail">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <span>Faridkot Rd, near Petrol Pump, KotKapura, Punjab 151204</span>
                            </div>
                            <div class="location-detail">
                                <i class="fas fa-phone text-primary me-2"></i>
                                <span>+91 7218272182</span>
                            </div>
                            <div class="location-detail">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <span>brareyehospitals@gmail.com</span>
                            </div>
                            <div class="location-detail">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <span>8:00 AM - 5:00 PM</span>
                            </div>
                            <div class="location-features">
                                <span class="badge bg-info me-1 mb-2">OPD Services</span>
                                <span class="badge bg-warning me-1 mb-2">Minor Surgeries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Contact Section -->
<section id="contact" class="py-5 bg-primary text-white">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Content -->
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <h2 class="display-5 fw-bold mb-4">Ready for Perfect Vision?</h2>
        <p class="lead mb-4">Join thousands of satisfied patients who achieved 6/6 vision with us. Book your consultation today!</p>

        <div class="contact-info">
          <div class="contact-item d-flex align-items-center mb-3">
            <div class="contact-icon me-3"><i class="fas fa-phone"></i></div>
            <div>
              <h5 class="mb-1">Call Us Now</h5>
              <p class="mb-0 opacity-90">+91 7218272182</p>
            </div>
          </div>
          <div class="contact-item d-flex align-items-center mb-3">
            <div class="contact-icon me-3"><i class="fas fa-envelope"></i></div>
            <div>
              <h5 class="mb-1">Email Us</h5>
              <p class="mb-0 opacity-90">brareyehospitals@gmail.com</p>
            </div>
          </div>
          <div class="contact-item d-flex align-items-center mb-3">
            <div class="contact-icon me-3"><i class="fab fa-whatsapp"></i></div>
            <div>
              <h5 class="mb-1">WhatsApp Us</h5>
              <p class="mb-0 opacity-90">+91 7218272182</p>
            </div>
          </div>
          <div class="contact-item d-flex align-items-center mb-4">
            <div class="contact-icon me-3"><i class="fas fa-clock"></i></div>
            <div>
              <h5 class="mb-1">Available</h5>
              <p class="mb-0 opacity-90">8:00 AM - 5:00 PM</p>
            </div>
          </div>
        </div>

        <div class="emergency-cta mt-3">
          <a href="tel:+91917218172182" class="btn btn-warning btn-lg px-4 py-3 me-3 fw-semibold">
            <i class="fas fa-phone me-2"></i>Emergency Call
          </a>
          <a href="https://wa.me/917218172182" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold">
            <i class="fab fa-whatsapp me-2"></i>WhatsApp
          </a>
        </div>
      </div>

        
    <!-- Right Form -->
    <div class="col-lg-6" data-aos="fade-left">

    <style>
        input::placeholder,
        textarea::placeholder {
        color: #f17732 !important;
        opacity: 1;
        }
    </style>

    <div class="form-inner bg-white p-4 rounded-4 shadow" style="min-height: 100%; color: #f17732;">
        <h2 class="mb-4" style="color: #f17732;">Book an Appointment</h2>

        <?php if(isset($_GET['success']) && $_GET['success'] == '1'): ?>
        <div class="alert alert-success" style="color: #3c763d;">
            Your message has been sent successfully. We will contact you shortly.
        </div>
        <?php endif; ?>

        <?php if(isset($_GET['error']) && $_GET['error'] == '1'): ?>
        <div class="alert alert-danger" style="color: #a94442;">
            There was an error sending your message. Please try again later.
        </div>
        <?php endif; ?>

        <form method="post" action="../final-contact-form-solution.php" id="contact-form">

        <div class="row g-3">
            <div class="col-md-6">
            <input type="text" name="username" class="form-control" placeholder="Your Name" required
                style="border: 1px solid #f17732; color: #f17732;">
            </div>
            <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required
                style="border: 1px solid #f17732; color: #f17732;">
            </div>
            <div class="col-md-6">
            <input type="text" name="phone" class="form-control" placeholder="Phone" required
                style="border: 1px solid #f17732; color: #f17732;">
            </div>
            <div class="col-md-6">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required
                style="border: 1px solid #f17732; color: #f17732;">
            </div>
            <div class="col-12">
            <textarea name="message" class="form-control" rows="4" placeholder="Message" required
                style="border: 1px solid #f17732; color: #f17732;"></textarea>
            </div>
            <div class="col-12 text-center mt-3">
            <button class="btn btn-warning btn-lg px-5 fw-semibold" type="submit" name="submit-form"
                style="background-color: #f17732; border: none;">Submit Now</button>
            </div>
        </div>
        </form>
    </div>
    </div>






    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-eye me-2 text-primary fs-4"></i>
                        <span class="fw-bold text-primary">BRAR EYE Hospital</span>
                        <span class="badge bg-success ms-2">NABH Accredited</span>  
                    </div>
                    <p class="text-muted mt-2 mb-0">Mission 6/6 - Perfect Vision for Everyone</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="https://www.facebook.com/brareyehospitals" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/brareyehospital/" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCZYhxYnJ5HiVy0GLffaDM-g" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                        <!-- <a href="#" class="text-white"><i class="fab fa-twitter"></i></a> -->
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col-12 text-center"  style="color:white;">
                    <p class="text-muted mb-0" style="color:white;">
                        &copy; 2024 BRAR EYE Hospital. All rights reserved. | 
                        First NABH Accredited Eye Hospital of North India
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div class="floating-action-btn">
        <a href="https://wa.me/917218272182?text=Hi,%20I%20want%20to%20book%20an%20appointment%20for%20eye%20checkup" class="btn btn-success rounded-circle shadow-lg mb-2" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+917218272182" class="btn btn-warning rounded-circle shadow-lg">
            <i class="fas fa-phone"></i>
        </a>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="{{ url_for('static', filename='js/main.js') }}"></script>
  <script>// Main JavaScript for BRAR EYE Hospital Landing Page

// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
});

// Smooth scrolling for navigation links
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

// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.backdropFilter = 'blur(10px)';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 1)';
        navbar.style.backdropFilter = 'none';
    }
});

// Counter animation for stats
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;

    counters.forEach(counter => {
        const animate = () => {
            const value = counter.getAttribute('data-target') || counter.innerText.replace(/[^0-9]/g, '');
            const data = +counter.innerText.replace(/[^0-9]/g, '');
            const time = value / speed;
            
            if (data < value) {
                counter.innerText = Math.ceil(data + time) + (counter.innerText.includes('+') ? '+' : '') + (counter.innerText.includes('%') ? '%' : '');
                setTimeout(animate, 1);
            } else {
                counter.innerText = value + (counter.innerText.includes('+') ? '+' : '') + (counter.innerText.includes('%') ? '%' : '');
            }
        }
        animate();
    });
}

// Trigger counter animation when stats section is visible
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe the stats section
const statsSection = document.querySelector('.floating-stats');
if (statsSection) {
    observer.observe(statsSection);
}

// Form submission handling
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    const formObject = {};
    formData.forEach((value, key) => {
        formObject[key] = value;
    });
    
    // Show loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Booking...';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual API call)
    setTimeout(() => {
        // Show success message
        showNotification('Thank you! Your appointment request has been submitted. We will call you back within 30 minutes.', 'success');
        
        // Reset form
        this.reset();
        
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Track conversion for Facebook Pixel (if available)
        if (typeof fbq !== 'undefined') {
            fbq('track', 'Lead', {
                content_name: 'Appointment Booking',
                content_category: 'Healthcare',
                value: 1,
                currency: 'INR'
            });
        }
        
        // Track conversion for Google Analytics (if available)
        if (typeof gtag !== 'undefined') {
            gtag('event', 'conversion', {
                'send_to': 'AW-CONVERSION_ID/CONVERSION_LABEL',
                'value': 1.0,
                'currency': 'INR'
            });
        }
        
    }, 2000);
});

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type === 'success' ? 'success' : 'info'} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; max-width: 400px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 5000);
}

// Phone number formatting
document.querySelectorAll('input[type="tel"]').forEach(input => {
    input.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 10) {
            value = value.slice(0, 10);
        }
        e.target.value = value;
    });
});

// Carousel auto-play control
const carousel = document.getElementById('facilityCarousel');
if (carousel) {
    const carouselInstance = new bootstrap.Carousel(carousel, {
        interval: 4000,
        ride: 'carousel'
    });
    
    // Pause on hover
    carousel.addEventListener('mouseenter', () => {
        carouselInstance.pause();
    });
    
    carousel.addEventListener('mouseleave', () => {
        carouselInstance.cycle();
    });
}

// Testimonial marquee pause on hover
const marqueeContent = document.querySelector('.marquee-content');
if (marqueeContent) {
    marqueeContent.addEventListener('mouseenter', () => {
        marqueeContent.style.animationPlayState = 'paused';
    });
    
    marqueeContent.addEventListener('mouseleave', () => {
        marqueeContent.style.animationPlayState = 'running';
    });
}

// Lazy loading for images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                observer.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Service worker registration for PWA functionality
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

// Click tracking for buttons
document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function() {
        const buttonText = this.textContent.trim();
        const buttonType = this.className;
        
        // Track button clicks
        if (typeof gtag !== 'undefined') {
            gtag('event', 'click', {
                'event_category': 'Button',
                'event_label': buttonText,
                'button_type': buttonType
            });
        }
    });
});

// Phone and WhatsApp click tracking
document.querySelectorAll('a[href^="tel:"], a[href^="https://wa.me/"]').forEach(link => {
    link.addEventListener('click', function() {
        const type = this.href.includes('tel:') ? 'Phone Call' : 'WhatsApp';
        
        if (typeof gtag !== 'undefined') {
            gtag('event', 'contact', {
                'event_category': 'Contact',
                'event_label': type,
                'transport_type': 'beacon'
            });
        }
        
        if (typeof fbq !== 'undefined') {
            fbq('track', 'Contact', {
                content_name: type
            });
        }
    });
});

// Scroll progress indicator
function updateScrollProgress() {
    const scrollTop = window.pageYOffset;
    const docHeight = document.body.offsetHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;
    
    let progressBar = document.getElementById('scroll-progress');
    if (!progressBar) {
        progressBar = document.createElement('div');
        progressBar.id = 'scroll-progress';
        progressBar.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #f17732, #03c0b4);
            z-index: 9999;
            transition: width 0.1s ease;
        `;
        document.body.appendChild(progressBar);
    }
    
    progressBar.style.width = scrollPercent + '%';
}

window.addEventListener('scroll', updateScrollProgress);

// Emergency contact sticky notification
function showEmergencyContact() {
    if (window.innerWidth <= 768 && !sessionStorage.getItem('emergency-shown')) {
        setTimeout(() => {
            const emergency = document.createElement('div');
            emergency.className = 'alert alert-warning alert-dismissible fade show position-fixed';
            emergency.style.cssText = 'bottom: 100px; left: 15px; right: 15px; z-index: 1000;';
            emergency.innerHTML = `
                <strong>Emergency?</strong> Call us 24/7 at 
                <a href="tel:+917218272182" class="alert-link">+91 7218272182</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(emergency);
            sessionStorage.setItem('emergency-shown', 'true');
            
            setTimeout(() => {
                if (emergency.parentNode) {
                    emergency.parentNode.removeChild(emergency);
                }
            }, 8000);
        }, 3000);
    }
}

// Show emergency contact on mobile after 3 seconds
setTimeout(showEmergencyContact, 3000);

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Close any open modals or overlays
        const activeModal = document.querySelector('.modal.show');
        if (activeModal) {
            bootstrap.Modal.getInstance(activeModal).hide();
        }
    }
});

// Focus management for accessibility
document.querySelectorAll('.btn, a').forEach(element => {
    element.addEventListener('focus', function() {
        this.style.outline = '2px solid #ffc107';
        this.style.outlineOffset = '2px';
    });
    
    element.addEventListener('blur', function() {
        this.style.outline = 'none';
    });
});

// Performance optimization - defer non-critical CSS
function loadDeferredStyles() {
    const addStylesNode = document.getElementById('deferred-styles');
    if (addStylesNode) {
        const replacement = document.createElement('div');
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);
    }
}

const loadDeferredStylesHandler = function() {
    window.removeEventListener('load', loadDeferredStylesHandler);
    loadDeferredStyles();
};

window.addEventListener('load', loadDeferredStylesHandler);

// Page visibility API for analytics
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        // Page is hidden
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_view_end', {
                'event_category': 'Engagement',
                'event_label': 'Page Hidden'
            });
        }
    } else {
        // Page is visible
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_view_start', {
                'event_category': 'Engagement',
                'event_label': 'Page Visible'
            });
        }
    }
});

console.log('Brar Eye Hospital - Mission 6/6 Landing Page Loaded Successfully! 🚀');
 </script>
</body>
</html>
