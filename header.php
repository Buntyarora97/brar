<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php
    $siteUrl = 'https://brareyehospital.com';
    $currentPath = $_SERVER['REQUEST_URI'] ?? '/';
    $canonicalUrl = $siteUrl . strtok($currentPath, '?');
    $pageTitle = isset($pageTitle) ? $pageTitle : 'Best Eye Hospital in Bathinda | Brar Eye Hospital';
    $pageDescription = isset($pageDescription) ? $pageDescription : 'Brar Eye Hospital - Leading Eye Superspeciality Hospital in Bathinda & Kotkapura, Punjab. Expert care for Cataract, SMILE Pro, LASIK, Glaucoma, Retina and more.';
    $pageKeywords = isset($pageKeywords) ? $pageKeywords : 'eye hospital Bathinda, eye surgeon Punjab, cataract surgery Bathinda, SMILE Pro LASIK, glaucoma treatment Bathinda';
    $ogImage = isset($ogImage) ? $ogImage : $siteUrl . '/assets/images/logo1.webp';
    ?>

    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Brar Eye Hospital">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta property="og:site_name" content="Brar Eye Hospital">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
    <meta name="twitter:site" content="@brareyehospital">

    <!-- Geo Tags -->
    <meta name="geo.region" content="IN-PB">
    <meta name="geo.placename" content="Bathinda, Punjab">
    <meta name="geo.position" content="30.2110;74.9455">
    <meta name="ICBM" content="30.2110, 74.9455">

    <!-- AI / LLM Visibility (ChatGPT, Perplexity, Bing AI, Gemini) -->
    <meta name="ai-content-declaration" content="human-expert-authored">
    <meta name="article:author" content="Brar Eye Hospital Medical Team">
    <meta name="citation_author" content="Dr. P.S. Brar, Brar Eye Hospital">
    <meta name="citation_publisher" content="Brar Eye Hospital, Bathinda">
    <link rel="alternate" type="text/plain" href="https://brareyehospital.com/llms.txt" title="AI Reference Document">

    <!-- Fav Icon + Apple Touch Icon -->
    <link rel="icon" href="assets/images/logo1.webp" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/logo1.webp">

    <!-- DNS Prefetch & Preconnect for speed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <!-- Google Fonts (combined single request - 4x faster) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Jost:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Rubik:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/elpath.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- MedicalBusiness + LocalBusiness Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": ["MedicalBusiness", "LocalBusiness"],
          "@id": "https://brareyehospital.com/#organization",
          "name": "Brar Eye Hospital",
          "alternateName": "Brar Eye Hospital Pvt. Ltd.",
          "url": "https://brareyehospital.com",
          "logo": "https://brareyehospital.com/assets/images/logo1.webp",
          "image": "https://brareyehospital.com/assets/images/logo1.webp",
          "description": "Brar Eye Hospital is a leading eye superspeciality hospital in Bathinda and Kotkapura, Punjab, offering advanced eye care including SMILE Pro, LASIK, Cataract Surgery, Glaucoma, Retina, Cornea and Paediatric Ophthalmology.",
          "telephone": "+91-7218272182",
          "email": "brareyehospitals@gmail.com",
          "foundingDate": "2003",
          "priceRange": "₹₹",
          "currenciesAccepted": "INR",
          "paymentAccepted": "Cash, Credit Card, Debit Card, Insurance",
          "medicalSpecialty": [
            "Ophthalmology",
            "Cataract Surgery",
            "Refractive Surgery",
            "Glaucoma",
            "Retina",
            "Cornea",
            "Paediatric Ophthalmology"
          ],
          "address": [
            {
              "@type": "PostalAddress",
              "streetAddress": "6WJP+3W4, Rose Garden Chowk",
              "addressLocality": "Bathinda",
              "addressRegion": "Punjab",
              "postalCode": "151001",
              "addressCountry": "IN"
            }
          ],
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 30.2110,
            "longitude": 74.9455
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
              "opens": "08:00",
              "closes": "17:00"
            }
          ],
          "sameAs": [
            "https://www.facebook.com/brareyehospitals",
            "https://www.instagram.com/brareyehospital/",
            "https://in.linkedin.com/company/brar-eye-hospital-pvt-ltd",
            "https://www.youtube.com/channel/UCZYhxYnJ5HiVy0GLffaDM-g"
          ],
          "hasMap": "https://maps.google.com/?q=Brar+Eye+Hospital+Bathinda",
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1847",
            "bestRating": "5",
            "worstRating": "1"
          },
          "isAcceptingNewPatients": true,
          "availableService": [
            {"@type": "MedicalProcedure", "name": "SMILE Pro Laser Vision Correction"},
            {"@type": "MedicalProcedure", "name": "LASIK Surgery"},
            {"@type": "MedicalProcedure", "name": "Cataract Surgery"},
            {"@type": "MedicalProcedure", "name": "Glaucoma Treatment"},
            {"@type": "MedicalProcedure", "name": "Retina Surgery"},
            {"@type": "MedicalProcedure", "name": "Cornea Transplant"},
            {"@type": "MedicalProcedure", "name": "Paediatric Eye Care"},
            {"@type": "MedicalProcedure", "name": "Squint Surgery"},
            {"@type": "MedicalProcedure", "name": "Oculoplastic Surgery"}
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://brareyehospital.com/#website",
          "url": "https://brareyehospital.com",
          "name": "Brar Eye Hospital",
          "description": "Official website of Brar Eye Hospital, Bathinda, Punjab",
          "publisher": {"@id": "https://brareyehospital.com/#organization"},
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://brareyehospital.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      ]
    }
    </script>

    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17006369601"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-17006369601');
    </script>
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-17006369601/nHi1CMLU6_QaEMG2oq0_', 'value': 1.0, 'currency': 'INR'});
    </script>
    <script>
        function gtag_report_conversion(url) {
            var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } };
            gtag('event', 'conversion', {'send_to': 'AW-17006369601/E9aWCOG6xrQbEMG2oq0_', 'value': 1.0, 'currency': 'INR', 'event_callback': callback});
            return false;
        }
    </script>

    <meta name="google-site-verification" content="fI7vpI11Lin1Blet1SZeHuu8UqZDa8_DghuBPmFx9L4" />

    <!-- Font Awesome (local only - removed CDN duplicate) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<!-- page wrapper -->

<body>
 <div class="boxed_wrapper">
    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <!-- <div class="preloader-close"></div> -->
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;">

          <!-- Logo -->
<div class="eye-video-container" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: center;">
  <div class="eye-circle-wrapper">
    <img src="assets/images/logo1.webp" alt="Brar Eye Hospital" class="eye-circle-video" style="background:#fff;" />
  </div>
</div>

<style>
  @keyframes preloaderFadeOut {
    0%   { opacity: 1; visibility: visible; }
    85%  { opacity: 1; visibility: visible; }
    100% { opacity: 0; visibility: hidden; }
  }
  .loader-wrap {
    animation: preloaderFadeOut 2s ease forwards !important;
  }

  .eye-circle-wrapper {
    width: 200px;
    height: 200px;
    border-radius: 60%;
    padding: 5px;
    background-color: #f17732;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .eye-circle-video {
    width: 190px;
    height: 190px;
    border-radius: 50%;
    object-fit: cover;
  }

  .header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    color: white;
    gap: 20px;
  }

  .header-container a {
    color: white;
    text-decoration: none;
  }

  .left-column,
  .right-column {
    display: flex;
    gap: 30px;
    font-size: 14px;
    flex-wrap: wrap;
  }

  .center-column h1 {
    margin: 0;
    font-size: 22px;
    font-weight: bold;
    color: #f17732;
    text-align: center;
    white-space: nowrap;
  }

  .social-links {
    display: flex;
    list-style: none;
    gap: 10px;
    margin: 0;
    padding: 0;
  }

  @media (max-width: 768px) {
    .header-container {
      flex-direction: column;
      text-align: center;
      gap: 10px;
    }

    .left-column,
    .right-column {
      justify-content: center;
      gap: 10px;
    }

    .left-column div,
    .right-column .schedule {
      font-size: 13px;
    }

    .center-column h1 {
      font-size: 18px;
    }

    .social-links {
      justify-content: center;
    }

    .eye-circle-wrapper {
      width: 160px;
      height: 160px;
    }

    .eye-circle-video {
      width: 180px;
      height: 180px;
    }
  }

  #collect-chat-launcher { display: none !important; }

  .floating-buttons {
    position: fixed;
    right: 20px;
    bottom: 120px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .float-btn {
    background-color: #25d366;
    color: white;
    border-radius: 50px;
    padding: 10px 16px;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
    cursor: pointer;
    transition: all 0.3s ease;
    width: max-content;
  }

  .float-btn:hover {
    filter: brightness(85%);
    transform: translateY(-2px);
  }

  .whatsapp-btn { background-color: #25d366; }
  .call-btn { background-color: #007bff; }
  .email-btn { background-color: #ff5722; }
  .collectchat-btn { background-color: #0066ff; }

  .float-btn img {
    width: 20px;
    height: 20px;
  }

  @media (max-width: 480px) {
    .float-label { display: none; }
    .floating-buttons { bottom: 100px; }
    .float-btn {
      padding: 12px;
      font-size: 12px;
    }
  }

  .outer-box {
    position: relative;
    margin-top: -55px;
  }

  .header-top {
    background-color: #333;
    color: #fff;
    font-size: 14px;
    padding: 10px 0;
    position: relative;
    z-index: 999;
  }

  .header-top .auto-container {
    max-width: 1800px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .header-top .top-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .header-top .left-column .info {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
  }

  .header-top .left-column .info li {
    display: flex;
    align-items: center;
  }

  .header-top .left-column .info li i {
    margin-right: 6px;
    font-size: 16px;
    color: #fff;
  }

  .header-top .left-column .info li a {
    color: #fff;
    text-decoration: none;
  }

  .header-top .right-column {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
  }

  .header-top .schedule {
    display: flex;
    align-items: center;
    font-weight: 500;
  }

  .header-top .schedule i {
    margin-right: 6px;
    font-size: 16px;
    color: #fff;
  }

  .header-top .social-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 10px;
  }

  .header-top .social-links li a {
    color: #fff;
    font-size: 14px;
    transition: 0.3s;
  }

  .header-top .social-links li a:hover {
    color: #f17732;
  }

  .icon-1::before {
    content: "\f0e0";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
  }

  .icon-3::before {
    content: "\f095";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
  }

  .icon-4::before {
    content: "\f017";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
  }

  @media (max-width: 768px) {
    .header-top .top-inner {
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
    }

    .header-top .left-column .info {
      flex-direction: column;
      gap: 8px;
    }

    .header-top .right-column {
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
    }

    .header-top .schedule {
      font-size: 13px;
    }
  }

  .floating-buttons {
    position: fixed;
    bottom: 30%;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    z-index: 1000;
  }

  .float-btn {
    /* background-color: #25D366; */
    color: white;
    border-radius: 50%;
    padding: 15px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    overflow: visible;
  }

  .float-label {
    position: absolute;
    right: 70px;
    background-color: #333;
    color: #fff;
    padding: 6px 12px;
    font-size: 14px;
    white-space: nowrap;
    border-radius: 4px;
    opacity: 0;
    transition: opacity 0.3s ease, right 0.3s ease;
    pointer-events: none;
  }

  .float-btn:hover .float-label {
    opacity: 1;
    right: 80px;
  }

  .header-lower {
    background-color: #ffffff;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    height: auto;
    max-width: 100%;
  }

  .header-lower .outer-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .logo-box {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
  }

  .logo-box .logo img {
    max-height: 135px;
    width: auto;
    transition: transform 0.3s ease;
    margin-bottom: 30px;
  }

  .logo-box .logo img:hover {
    transform: scale(1.05);
  }

  .nav-right .btn-box .theme-btn {
    background-color: #03c0b4;
    color: #fff;
    padding: 10px 25px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    transition: background-color 0.3s ease;
  }

  .nav-right .btn-box .theme-btn:hover {
    background-color: #f17732;
    color: #fff;
  }

  .sticky-header .logo img {
    max-width: 150px;
    height: auto;
    margin-bottom: 50px;
  }

  @media (max-width: 768px) {
    .sticky-header .logo img {
      max-width: 120px;
    }

    .header-lower .outer-box {
      flex-direction: column;
      gap: 15px;
    }

    .logo-box .logo img {
      margin-bottom: 10px;
    }
  }
  /* Base responsiveness */
.header-lower .outer-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
    align-items: center;
}

.logo-title-nabh {
  display: flex;
  align-items: flex-end;
  flex-wrap: wrap;
}   

@media (max-width: 768px) {
  .logo-box {
    display: flex;
    justify-content: center;
    width: 100%;
  }

  .logo-box img {
    height: 150px !important;
  }

  .logo-box .logo img {
    max-height: 135px;
    width: auto;
    transition: transform 0.3s ease;
    margin-bottom: 0px;
  }

  .logo-title-nabh {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .logo-title-nabh > div {
    margin-left: 0 !important;
    gap: 0;
  }

  .hospital-name h1 {
    font-size: 28px !important;
    margin: 10px 0 10px 0 !important;
  }

  .nabh-logo img {
    height: 40px !important;
    margin-bottom: 10px !important;
  }

  .nav-right {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 20px !important;
  }

  .btn-box a {
    font-size: 16px;
    padding: 10px 20px;
  }
}

</style>






                    <!-- 🔵 Loading Text -->
                    <div class="txt-loading" style="font-size: 32px; font-weight: bold; color: #333;">
                        <span data-text-preloader="B" class="letters-loading">B</span>
                        <span data-text-preloader="r" class="letters-loading">r</span>
                        <span data-text-preloader="a" class="letters-loading">a</span>
                        <span data-text-preloader="r" class="letters-loading">r</span>
                        <span data-text-preloader=" " class="letters-loading">&nbsp;</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="y" class="letters-loading">y</span>
                        <span data-text-preloader="e" class="letters-loading">e</span>
                        <span data-text-preloader=" " class="letters-loading">&nbsp;</span>
                        <span data-text-preloader="H" class="letters-loading">H</span>
                        <span data-text-preloader="o" class="letters-loading">o</span>
                        <span data-text-preloader="s" class="letters-loading">s</span>
                        <span data-text-preloader="p" class="letters-loading">p</span>
                        <span data-text-preloader="i" class="letters-loading">i</span>
                        <span data-text-preloader="t" class="letters-loading">t</span>
                        <span data-text-preloader="a" class="letters-loading">a</span>
                        <span data-text-preloader="l" class="letters-loading">l</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.php"><img src="assets/images/brar eyes logo an.mp4" alt="logo"></a>
                    </figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                
            </div>
        </div>

<!-- main header -->
<header class="main-header">
  <div class="header-top" style="background:#333; padding:8px 0;">
    <div class="auto-container header-container">

      <!-- LEFT: EMAIL + PHONE (VERTICAL) -->
      <div class="left-column left-block">
        <div><i class="fas fa-envelope"></i> Email: 
          <a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a>
        </div>
        <div><i class="fas fa-phone-alt"></i> Call: 
          <a href="tel:+917218272182">+91 72182-72182</a>
        </div>
      </div>

      <!-- CENTER: SOCIAL LINKS -->
      <div class="center-column center-block">
        <ul class="social-links">
          <li><a href="https://www.facebook.com/brareyehospitals" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/brareyehospital/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://in.linkedin.com/company/brar-eye-hospital-pvt-ltd" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCZYhxYnJ5HiVy0GLffaDM-g" target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>

      <!-- RIGHT: TIMINGS (VERTICAL) -->
      <div class="right-column right-block">
        <div class="schedule-item">
          <i class="fas fa-map-marker-alt"></i>
          <strong>Kotkapura:</strong> Mon–Sat 08:00AM–04:00PM
        </div>
        <div class="schedule-item">
          <i class="fas fa-map-marker-alt"></i>
          <strong>Bathinda:</strong> Mon–Sat 08:00AM–05:00PM
        </div>
      </div>

    </div>
  </div>
</header>

<style>
/* Main container */
.header-top .header-container {
  max-width: 1300px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  padding: 0 15px;
  font-family: 'Inter', sans-serif;
}

/* LEFT - Vertical email + call */
.left-block {
  display: flex;
  flex-direction: column;
  gap: 4px;
  font-size: 14px;
}
.left-block i {
  margin-right: 6px;
  color: #1dd2c3;
}
.left-block a { color: #fff; text-decoration: none; }

/* CENTER - Social icons */
.center-block {
  display: flex;
  justify-content: center;
  flex: 1;
}
.social-links {
  display: flex;
  gap: 14px;
  list-style: none;
  padding: 0;
  margin: 0;
}
.social-links li a {
  color: #fff;
  font-size: 15px;
  transition: .2s;
}
.social-links li a:hover {
  color: #1dd2c3;
}

/* RIGHT - Vertical timings */
.right-block {
  display: flex;
  flex-direction: column;
  gap: 4px;
  font-size: 14px;
}
.right-block i {
  margin-right: 6px;
  color: #1dd2c3;
}
.right-block strong {
  color: #fff;
  font-weight: 700;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .header-top .header-container {
    flex-direction: column;
    gap: 10px;
    text-align: center;
  }
  .center-block { justify-content: center; width: 100%; }
  .left-block, .right-block { align-items: center; }
}
</style>







<!-- Responsive Styles -->

<div class="brareye123-header">
  <div class="brareye123-inner">

    <!-- Logo -->
    <div class="brareye123-logo">
      <a href="index.php">
        <img src="assets/images/logo1.webp" alt="Brar Eye Hospital Logo" />
      </a>
    </div>

    <!-- Hospital Name -->
    <div class="brareye123-title">
      BRAR EYE HOSPITAL
    </div>

    <!-- Right: Button + NABH -->
    <div class="brareye123-right">
      <a href="contact-brar-eye-hospital-bathinda.php" class="brareye123-btn">Book An Appointment</a>
      <div class="brareye123-nabh">
        <img src="assets/images/nabh-logo.webp" alt="NABH Accredited" />
      </div>
    </div>

  </div>
</div>

<style>
/* MAIN HEADER */
.brareye123-header {
  width: 100%;
  background: #ffffff !important;
  border-bottom: 2px solid #e8e8e8 !important;
  padding: 8px 20px;
  box-sizing: border-box;
  position: relative;
  z-index: 10;
}

.brareye123-inner {
  max-width: 1400px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  gap: 18px;
}

/* LOGO */
.brareye123-logo img {
  height: 80px;
  width: 80px;
  object-fit: contain;
  display: block;
  border-radius: 50%;
  background: #fff;
}

/* TITLE */
.brareye123-title {
  font-family: 'Inter', Arial, Helvetica, sans-serif;
  color: #f17732;
  font-size: 42px;
  font-weight: 900;
  letter-spacing: 1.5px;
  white-space: nowrap;
  flex: 1 1 auto;
  line-height: 1;
}

/* RIGHT SIDE */
.brareye123-right {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-shrink: 0;
}

.brareye123-btn {
  background: #1dd2c3;
  color: #fff !important;
  padding: 13px 24px;
  border-radius: 8px;
  text-decoration: none !important;
  font-weight: 700;
  font-size: 16px;
  letter-spacing: 0.3px;
  white-space: nowrap;
  transition: background 0.2s;
  font-family: 'Inter', sans-serif;
}
.brareye123-btn:hover {
  background: #f17732;
  color: #fff !important;
}

.brareye123-nabh img {
  height: 72px;
  width: auto;
  display: block;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .brareye123-title { font-size: 30px; }
  .brareye123-logo img { height: 64px; width: 64px; }
  .brareye123-nabh img { height: 54px; }
  .brareye123-btn { font-size: 14px; padding: 10px 16px; }
}

@media (max-width: 640px) {
  .brareye123-inner { flex-wrap: wrap; justify-content: center; text-align: center; }
  .brareye123-title { font-size: 24px; letter-spacing: 1px; width: 100%; text-align: center; }
  .brareye123-right { justify-content: center; }
}
</style>


            <div class="header-buttom">
                <div class="auto-container">
                    <div class="top-inner">
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>



                            
                            <nav class="main-menu navbar-expand-md navbar-light" style=" justify-content:center; align-items:center;">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php" style="font-size:16px;">Home</a></li>
                                        <li class="dropdown"><a href="best-eye-hospital-bathinda.php" style="font-size:16px;">About Us</a>
                                            <ul>
                                            <li><a href="best-eye-hospital-bathinda.php" style="font-size:16px;">Overview</a></li>
                                           
                                                 <li><a href="brar-eye-hospital-branches-bathinda-kotkapura.php" style="font-size:16px;">Branches</a></li>
                                                <!-- <li><a href="portfolio.php" style="font-size:22px;">Gallery</a></li> -->
                                              
                                                <!-- <li><a href="careers-brar-eye-hospital-bathinda.php" style="font-size:22px;">Career</a></li> -->
                                                <li><a href="our-eye-specialists-bathinda.php" style="font-size:16px;"> Our Team</a></li>
                                         
                                             </ul>
                                        </li> 
                                      <li class="dropdown">
    <!--<a href="eye-care-services-bathinda.php" style="font-size:22px;">Our Services</a>--><a href="#" style="font-size:17px;">Our Services</a>
    <ul>
        <li>
            <a href="cataract-surgery-bathinda.php" style="font-size:16px;">Cataract</a>
        </li>
        <li class="dropdown">
            <a href="#" style="font-size:16px;">Refractive Surgery</a>
            <ul class="dropdown-left">
                <li><a href="laser-vision-correction-bathinda.php" style="font-size:16px;">Smile Pro</a></li>
                <li><a href="contoura-vision-bathinda.php" style="font-size:16px;">Contoura Vision</a></li>
                <li><a href="intralace-bathinda.php" style="font-size:16px;">Intralace</a></li>
                <li><a href="lasik-bathinda.php" style="font-size:16px;">Lasik</a></li>
                <li><a href="icl-bathinda.php" style="font-size:16px;">ICL</a></li>
                <li><a href="c3r-bathinda.php" style="font-size:16px;">C3R</a></li>
            </ul>
        </li>
        <li>
            <a href="retina.php" style="font-size:17px;">Retina</a>
        </li>
         <li>
            <a href="uvea.php" style="font-size:17px;">Uvea</a>
        </li>
        <li>
            <a href="glaucoma-treatment-bathinda.php" style="font-size:17px;">Glaucoma</a>
        </li>
        <li>
            <a href="cornea.php" style="font-size:17px;">Cornea & Eye Bank</a>
        </li>



        <li>
            <a href="pediatric.php" style="font-size:17px;">pediatric</a>
        </li>

      <li>
            <a href="squint.php" style="font-size:17px;">Squint</a>
        </li>


       <li class="dropdown">
    <a href="#" style="font-size:17px;">Oculoplasty</a>
    <ul class="dropdown-right">
        <li><a href="reconstructive-surgery.php" style="font-size:16px;">Reconstructive Surgery</a></li>
        <li><a href="cosmetic.php" style="font-size:20px;">Cosmetic Surgery</a></li>
        <li><a href="botox&filler-injections.php" style="font-size:16px;">Botox & Filler Injections</a></li>
    </ul>
</li>

        <!--<li>-->
        <!--    <a href="best-optic-nerve-doctor-bathinda.php" style="font-size:16px;">Neuro-Ophthalmology</a>-->
             
        <!--</li>-->
    </ul>
</li>
<style>
  ul.dropdown-left {
    position: absolute;
    top: 0;
    left: -220px; /* Adjust as needed to fit your design */
    display: none;
    min-width: 200px;
    background: #fff;
    z-index: 100;
}

li.dropdown:hover > ul.dropdown-left {
    display: block;
}

</style>
                                        <li>
                                            <a href="laser-vision-correction-bathinda.php" style="font-size: 19px; font-weight: bold; color: color_black; border-radius: 5px; text-decoration: none; background-color: transparent;" onmouseover="this.style.color='black';" onmouseout="this.style.color='black'; this.style.backgroundColor='transparent'">
                                                SMILE Pro
                                            </a>
                                        </li>
                                        <li><a href="patient-testimonials-bathinda.php" style="font-size:17px;">Testimonials</a></li>
                                        <li><a href="eye-hospital-gallery-bathinda.php" style="font-size:17px;">Gallery</a></li>
                                        <li class="dropdown">
    <a href="#" style="font-size:16px;"> Advice & Tips</a>
    <ul class="dropdown-right">
        <li><a href="eye-doctor-videos-bathinda.php" style="font-size:17px;">Doctor Talks</a></li>
        <li><a href="know-your-diseases.php" style="font-size:17px;">Know your Diseases</a></li>
    </ul>
</li>
                                        
                                         <li><a href="empanelments-insurance-eye-hospital-bathinda.php" style="font-size:17px;">Empanelments</a></li> 
                                        <li><a href="careers-brar-eye-hospital-bathinda.php" style="font-size:17px;">Careers</a></li>
                                         <li><a href="eye-care-blog-bathinda.php" style="font-size:17px;">Blog</a></li>
                                        
                                        <li><a href="contact-brar-eye-hospital-bathinda.php" style="font-size:17px;">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="header-bottum">
                    <div class="auto-container">
                        <div class="top-inner">
                            <div class="logo-box">
                                <figure class="logo"><a href="/"><img src="assets/images/logo1.webp" alt="logo"></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auto-container">

                    <div class="outer-box">
                        <!-- <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="assets/images/logo.webp" alt=""></a></figure>
                        </div> -->

                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="assets/images/logo1.webp" alt="logo" ></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <ul class="menu-outer" style="list-style: none; padding-left: 0; margin: 0;">
  <li style="margin-bottom: 15px;">
    <a href="index.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">Home</a>
  </li>
  <li style="margin-bottom: 15px;">
    <a href="best-eye-hospital-bathinda.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">About</a>
  </li>
  <li style="margin-bottom: 15px;">
    <a href="eye-care-services-bathinda.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">Our Services</a>
  </li>
  <li style="margin-bottom: 15px;">
    <a href="laser-vision-correction-bathinda.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">SMILE Pro</a>
  </li>
  <li style="margin-bottom: 15px;">
    <a href="patient-testimonials-bathinda.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">Testimonials</a>
  </li>
  <li style="margin-bottom: 15px;">
    <a href="eye-hospital-gallery-bathinda.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">Gallery</a>
  </li>
  <li style="margin-bottom: 15px;">
    <a href="contact-brar-eye-hospital-bathinda.php" style="color: #f17732; text-decoration: none; font-weight: 600; font-size: 18px;">Contact</a>
  </li>
</ul>

                </div>
            </nav>
        </div><!-- End Mobile Menu --><!-- Floating Contact Buttons -->

     <div class="floating-buttons">
  <a href="https://wa.me/917218272182" class="float-btn whatsapp-btn" target="_blank" title="Chat with us on WhatsApp">
      <span class="float-label">WhatsApp</span>
      <img src="https://img.icons8.com/ios-filled/30/ffffff/whatsapp--v1.webp" alt="WhatsApp" />
  </a>
  <a href="tel:7218272182" class="float-btn call-btn" title="Call Us Now">
      <span class="float-label">Call</span>
      <img src="https://img.icons8.com/ios-filled/30/ffffff/phone.webp" alt="Call" />
  </a>
  <a href="mailto:brareyehospitals@gmail.com?subject=Appointment%20Request&body=Hello,%20I%20would%20like%20to%20book%20an%20appointment." 
     class="float-btn email-btn" 
     title="Send us an Email">
    <span class="float-label">Email</span>
    <img src="https://img.icons8.com/ios-filled/30/ffffff/new-post.webp" alt="Email" />
  </a>
</div>
<script>(function(w, d) { w.CollectId = "68307ae4fa2dcaf335f3cd07"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>




