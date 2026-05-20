<?php
// SEO and Meta Information
$pageTitle = "Best Eye Hospital in Abohar | Brar Eye Hospital";
$pageDescription = "Looking for the best eye hospital in Abohar? Brar Eye Hospital offers advanced eye care, experienced eye specialists, and trusted treatments for cataract, LASIK, retina & more.";
$pageKeywords = "best eye hospital in Abohar, eye specialist in Abohar, eye care services Abohar, laser eye surgery Abohar, cataract surgery Abohar, specs removal Abohar";
$canonicalUrl = "https://brareye.com/best-eye-hospital-in-abohar.php";
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:site_name" content="BRAR EYE Hospital">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="assets/hospital-styles.css">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Hospital",
        "name": "BRAR EYE Hospital",
        "description": "Best eye hospital in abohar with comprehensive eye care services",
        "url": "<?php echo $canonicalUrl; ?>",
        "telephone": "72182-72182",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "abohar",
            "addressRegion": "Punjab",
            "addressCountry": "IN"
        },
        "medicalSpecialty": [
            "Ophthalmology",
            "Eye Surgery",
            "Retinal Diseases",
            "Pediatric Ophthalmology"
        ],
        "serviceType": [
            "SMILE Pro Surgery",
            "Cataract Surgery",
            "Retina Surgery",
            "Glaucoma Treatment",
            "Emergency Eye Care"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "140000"
        }
    }
    </script>
</head>
<body>

<!-- Main Content Container -->
<div class="hospital-page-container">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Best Eye Hospital in abohar</h1>
                    <p class="hero-subtitle">Where Compassion Meets Cutting-Edge Technology</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <span class="stat-number">1.4+ Lakh</span>
                            <span class="stat-label">Patients Treated</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="stat-number">21+ Years</span>
                            <span class="stat-label">Visionary Leadership</span>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-award"></i>
                            <span class="stat-number">SMILE Pro</span>
                            <span class="stat-label">8-Second Surgery</span>
                        </div>
                    </div>
                    <div class="hero-cta">
                        <a href="tel:7218272182" class="btn btn-primary">
                            <i class="fas fa-phone"></i> Call Now: 72182-72182
                        </a>
                        <a href="tel:7218272182" class="btn btn-secondary">Book Appointment</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hospital-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Section -->
    <section class="journey-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Journey: 21+ Years of Visionary Leadership</h2>
                <p class="section-subtitle">Transforming Lives with Advanced Eye Care</p>
            </div>
            <div class="content-grid">
                <div class="content-text">
                    <p>Founded with the mission to provide quality eye care that is both affordable and advanced, BRAR EYE Hospital has grown into the Best Eye Hospital in abohar, transforming lives with improved vision and personalized care.</p>
                    
                    <p>From routine eye checkups to complex retina surgeries, we bring specialized treatments to every patient with empathy and expertise. With over two decades of experience, our skilled ophthalmologists and surgeons have consistently delivered outstanding results.</p>
                    
                    <div class="hospital-mission">
                        <h3>Our Mission & Values:</h3>
                        <ul class="mission-list">
                            <li><i class="fas fa-heart"></i> Quality eye care accessible to all</i>
                            <li><i class="fas fa-user-friends"></i> Patient-first approach with empathy</li>
                            <li><i class="fas fa-cogs"></i> Advanced technology and techniques</li>
                            <li><i class="fas fa-graduation-cap"></i> Skilled and experienced surgeons</li>
                            <li><i class="fas fa-shield-alt"></i> Setting new standards in eye health</li>
                        </ul>
                    </div>
                </div>
                <div class="journey-highlights">
                    <div class="highlights-diagram">
                        <h4>Why We're the Best</h4>
                        <ul class="highlights-list">
                            <li><strong>Trusted Legacy:</strong> Over 1.4 lakh patients treated successfully</li>
                            <li><strong>Advanced Technology:</strong> SMILE Pro by ZEISS - 8-second specs removal</li>
                            <li><strong>Comprehensive Care:</strong> All eye treatments under one roof</li>
                            <li><strong>Expert Team:</strong> Highly qualified ophthalmologists</li>
                            <li><strong>Patient-Centric:</strong> Personalized care and transparent pricing</li>
                        </ul>
                        <div style="margin-top: 20px; padding: 15px; background: #e6fffa; border-radius: 8px; border-left: 4px solid #38a169;">
                            <p style="margin: 0; color: #4a5568; font-weight: 500;"><i class="fas fa-trophy" style="color: #38a169; margin-right: 8px;"></i>Leading the field of ophthalmology in Punjab!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SMILE Pro Section -->
    <section class="smile-pro-section">
        <div class="container">
            <div class="section-header">
                <h2>SMILE Pro by ZEISS: 8-Second Specs Removal</h2>
                <p class="section-subtitle">Advanced Bladeless & Flapless Laser Eye Surgery</p>
            </div>
            
            <div class="smile-content">
                <div class="smile-text">
                    <p class="lead">We are proud to be one of the few centers in North India offering SMILE Pro Laser Eye Surgery by ZEISS. This revolutionary procedure takes only 8 seconds and offers a painless, precise, and permanent solution to spectacle dependency.</p>
                    
                    <div class="smile-features">
                        <h3>SMILE Pro Advantages:</h3>
                        <div class="features-grid">
                            <div class="feature-item">
                                <i class="fas fa-cut"></i>
                                <h4>Flapless & Bladeless</h4>
                                <p>No flap creation, minimally invasive procedure</p>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock"></i>
                                <h4>8-Second Surgery</h4>
                                <p>World's fastest laser vision correction</p>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-heart"></i>
                                <h4>Pain-Free</h4>
                                <p>Comfortable procedure with quick recovery</p>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-crosshairs"></i>
                                <h4>Highly Precise</h4>
                                <p>ZEISS Visumax 800 precision technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="smile-cta">
                    <div class="cta-box">
                        <h3>Dream of a Spectacle-Free Life?</h3>
                        <p>SMILE Pro surgery at the Best Eye Hospital in abohar is your answer for permanent freedom from glasses.</p>
                        <a href="tel:7218272182" class="btn btn-primary">
                            <i class="fas fa-eye"></i> Book SMILE Pro Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive Eye Care Services</h2>
                <p class="section-subtitle">Complete Spectrum of Ophthalmic Services Under One Roof</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card featured">
                    <div class="featured-badge">Most Advanced</div>
                    <div class="service-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Refractive Surgery</h3>
                    <p>SMILE Pro, Contoura Vision, LASIK for permanent spectacle removal with latest technology.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Cataract Surgery</h3>
                    <p>Phacoemulsification and laser-assisted cataract surgery with premium IOL options.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Glaucoma Care</h3>
                    <p>Complete diagnosis and management of glaucoma with advanced monitoring systems.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Retina & Vitreous</h3>
                    <p>Advanced retinal surgery and diabetic retinopathy treatment with modern techniques.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Pediatric Eye Care</h3>
                    <p>Specialized care for children including squint correction and congenital disorders.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Corneal Transplants</h3>
                    <p>DALK and DSAEK surgeries for corneal disorders and keratoconus management.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Oculoplasty</h3>
                    <p>Cosmetic and reconstructive eye surgery including ptosis and facial aesthetics.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Neuro-Ophthalmology</h3>
                    <p>Specialized treatment for neurological eye conditions and optic nerve disorders.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Emergency Eye Care</h3>
                    <p>24x7 emergency services for eye injuries, chemical burns, and sudden vision loss.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="container">
            <div class="section-content">
                <div class="content-left">
                    <h2>Advanced Facilities & Technology</h2>
                    <p class="lead">We continually invest in upgrading our infrastructure to ensure our patients receive the best care possible with cutting-edge technology.</p>
                    
                    <div class="facility-list">
                        <div class="facility-item">
                            <h4><i class="fas fa-hospital"></i> Modular Operation Theatres</h4>
                            <p>State-of-the-art sterile surgical environment for all procedures</p>
                        </div>
                        <div class="facility-item">
                            <h4><i class="fas fa-microscope"></i> Advanced OCT & Fundus Imaging</h4>
                            <p>High-resolution imaging for precise diagnosis and treatment planning</p>
                        </div>
                        <div class="facility-item">
                            <h4><i class="fas fa-chart-area"></i> Visual Field Analyzers</h4>
                            <p>Comprehensive peripheral vision testing and glaucoma monitoring</p>
                        </div>
                        <div class="facility-item">
                            <h4><i class="fas fa-cogs"></i> ZEISS and Alcon Machines</h4>
                            <p>Premium equipment from world's leading ophthalmic manufacturers</p>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="technology-showcase">
                        <h3>Our Technological Prowess</h3>
                        <div class="tech-grid">
                            <div class="tech-item">
                                <i class="fas fa-laser-pointer"></i>
                                <span>ZEISS Visumax 800</span>
                            </div>
                            <div class="tech-item">
                                <i class="fas fa-eye"></i>
                                <span>OCT Imaging</span>
                            </div>
                            <div class="tech-item">
                                <i class="fas fa-heartbeat"></i>
                                <span>Fundus Angiography</span>
                            </div>
                            <div class="tech-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Sterile Environment</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="quality-note">
                        <h4><i class="fas fa-certificate"></i> Quality Standards</h4>
                        <p>We follow NABH-like quality protocols and maintain the highest sterilization standards for patient safety.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialized Care Section -->
    <section class="specialized-care-section">
        <div class="container">
            <div class="section-header">
                <h2>Specialized Care Programs</h2>
                <p class="section-subtitle">Targeted Care for Different Age Groups and Conditions</p>
            </div>
            
            <div class="care-programs">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <h3>Senior Citizen Care</h3>
                    <ul class="program-features">
                        <li><i class="fas fa-calendar-check"></i> Priority appointments</li>
                        <li><i class="fas fa-eye-dropper"></i> Premium IOL cataract surgeries</li>
                        <li><i class="fas fa-stethoscope"></i> Regular eye checkup packages</li>
                        <li><i class="fas fa-home"></i> Home visit consultations</li>
                    </ul>
                    <p>Special care for elderly patients with dignity, comfort, and convenience.</p>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Pediatric Eye Care</h3>
                    <ul class="program-features">
                        <li><i class="fas fa-adjust"></i> Squint correction surgery</li>
                        <li><i class="fas fa-eye-slash"></i> Congenital cataract surgery</li>
                        <li><i class="fas fa-pressure-gauge"></i> Pediatric glaucoma management</li>
                        <li><i class="fas fa-chart-line"></i> Visual development assessment</li>
                    </ul>
                    <p>Specialized attention for children's delicate vision needs with child-friendly care.</p>
                </div>

                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Diabetic Eye Care</h3>
                    <ul class="program-features">
                        <li><i class="fas fa-camera"></i> Fundus fluorescein angiography</li>
                        <li><i class="fas fa-syringe"></i> Intravitreal injections</li>
                        <li><i class="fas fa-laser-pointer"></i> Laser photocoagulation</li>
                        <li><i class="fas fa-cut"></i> Vitrectomy surgery</li>
                    </ul>
                    <p>Comprehensive diabetic retinopathy care to prevent vision-threatening complications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Care Section -->
    <section class="emergency-section">
        <div class="container">
            <div class="emergency-content">
                <div class="emergency-text">
                    <h2>24x7 Emergency Eye Care</h2>
                    <p>Eye emergencies can happen anytime. We offer round-the-clock emergency support with responsive team and rapid treatment protocols.</p>
                    
                    <div class="emergency-services">
                        <h3>Emergency Services Include:</h3>
                        <div class="emergency-grid">
                            <div class="emergency-item">
                                <i class="fas fa-band-aid"></i>
                                <span>Eye Injuries</span>
                            </div>
                            <div class="emergency-item">
                                <i class="fas fa-flask"></i>
                                <span>Chemical Burns</span>
                            </div>
                            <div class="emergency-item">
                                <i class="fas fa-eye-slash"></i>
                                <span>Sudden Vision Loss</span>
                            </div>
                            <div class="emergency-item">
                                <i class="fas fa-tools"></i>
                                <span>Foreign Body Removal</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="emergency-contact">
                    <div class="contact-box">
                        <h3><i class="fas fa-phone-alt"></i> Emergency Helpline</h3>
                        <p class="emergency-number">72182-72182</p>
                        <p>Available 24 hours for vision-threatening emergencies</p>
                        <a href="tel:7218272182" class="btn btn-emergency">
                            <i class="fas fa-ambulance"></i> Call Emergency
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Accessibility Section -->
    <section class="location-section">
        <div class="container">
            <div class="section-header">
                <h2>Convenient Location & Accessibility</h2>
                <p class="section-subtitle">Easily Accessible from Neighboring Areas</p>
            </div>
            
            <div class="location-content">
                <div class="location-info">
                    <h3>Located in the Heart of abohar</h3>
                    <p>Our hospital is easily accessible from neighboring areas including Faridkot, Muktsar, Jaitu, and Moga. We welcome both walk-ins and scheduled appointments.</p>
                    
                    <div class="facilities-list">
                        <h4>Hospital Facilities:</h4>
                        <ul class="amenities-list">
                            <li><i class="fas fa-couch"></i> Spacious waiting lounge</li>
                            <li><i class="fas fa-pills"></i> In-house pharmacy</li>
                            <li><i class="fas fa-glasses"></i> Complete optical services</li>
                            <li><i class="fas fa-car"></i> Ample parking availability</li>
                            <li><i class="fas fa-wheelchair"></i> Wheelchair accessibility</li>
                            <li><i class="fas fa-wifi"></i> Free Wi-Fi for patients</li>
                        </ul>
                    </div>
                </div>
                
                <div class="timing-info">
                    <div class="timing-card">
                        <h3><i class="fas fa-clock"></i> Hospital Timings</h3>
                        <div class="timing-details">
                            <div class="timing-item">
                                <span class="day">Monday - Saturday</span>
                                <span class="time">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="timing-item">
                                <span class="day">Sunday</span>
                                <span class="time">Emergency Only</span>
                            </div>
                            <div class="timing-item emergency-timing">
                                <span class="day">Emergency Care</span>
                                <span class="time">24x7 Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2>What Our Patients Say</h2>
                <p class="section-subtitle">Real Stories from Satisfied Patients</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>I underwent SMILE Pro surgery at BRAR EYE Hospital. The entire process was quick, painless, and life-changing. I'm so glad I chose the Best Eye Hospital in abohar for my treatment.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Simran</h4>
                            <span>Age 26, SMILE Pro Patient, abohar</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>My mother had her cataract surgery here. The care and professionalism were unmatched. The doctors explained everything clearly and the results exceeded our expectations. Highly recommended.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Baldev Singh</h4>
                            <span>Age 62, Family of Patient, Faridkot</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>Emergency care at midnight for my eye injury was exceptional. The 24x7 service and immediate treatment saved my vision. Truly the best eye hospital in the region with dedicated staff.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Harpreet Kaur</h4>
                            <span>Emergency Patient, Muktsar</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p class="section-subtitle">Common Questions About Our Services</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h4>What makes BRAR EYE Hospital the Best Eye Hospital in abohar?</h4>
                    <p>Our 21+ years of experience, advanced ZEISS SMILE Pro technology, expert doctors, comprehensive services, and patient-first approach make us the top choice for eye care.</p>
                </div>
                
                <div class="faq-item">
                    <h4>How much does SMILE Pro surgery cost?</h4>
                    <p>Costs vary based on eye condition and specific requirements. Please book a consultation for exact pricing. We offer easy EMI options for your convenience.</p>
                </div>
                
                <div class="faq-item">
                    <h4>Are emergency eye services available 24x7?</h4>
                    <p>Yes, our emergency care unit is functional round-the-clock for any vision-threatening conditions including injuries, burns, and sudden vision loss.</p>
                </div>
                
                <div class="faq-item">
                    <h4>Do you provide pediatric eye care?</h4>
                    <p>Yes, we offer complete child eye care services including squint correction, lazy eye treatment, congenital disorders, and visual development assessment.</p>
                </div>
                
                <div class="faq-item">
                    <h4>How do I book an appointment?</h4>
                    <p>Call us at 72182-72182 during clinic hours (9 AM - 6 PM, Mon-Sat) or walk in for immediate consultation. Online booking will be available soon.</p>
                </div>
                
                <div class="faq-item">
                    <h4>What services are available for senior citizens?</h4>
                    <p>We offer priority appointments, premium IOL cataract surgeries, regular checkup packages, and home visit consultations for elderly patients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2>Experience the Future of Eye Care</h2>
                    <p>Choose the Best Eye Hospital in abohar for comprehensive eye care. From advanced SMILE Pro surgery to emergency care, we provide world-class treatment with compassionate service.</p>
                    <div class="cta-benefits">
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>21+ years of trusted expertise</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Advanced ZEISS SMILE Pro technology</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive services under one roof</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check"></i>
                            <span>24x7 emergency care available</span>
                        </div>
                    </div>
                </div>
                <div class="contact-methods">
                    <a href="tel:7218272182" class="contact-method primary">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Book Your Appointment</strong>
                            <span>72182-72182</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Visit Our Hospital</strong>
                            <span>Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</span>
                        </div>
                    </a>
                    <a href="tel:7218272182" class="contact-method">
                        <i class="fas fa-ambulance"></i>
                        <div>
                            <strong>Emergency Care</strong>
                            <span>24x7 Available</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>

<?php include 'footer.php'; ?>