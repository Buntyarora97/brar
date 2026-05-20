<?php
$pageTitle = "Patient Testimonials | Brar Eye Hospital Bathinda – Real Reviews & Success Stories";
$pageDescription = "Read real patient reviews and success stories from Brar Eye Hospital Bathinda. Thousands of successful LASIK, SMILE Pro, cataract and glaucoma surgeries with 21+ years of trust.";
$pageKeywords = "Brar Eye Hospital reviews, eye hospital patient testimonials Bathinda, LASIK surgery review Bathinda, cataract surgery testimonial Punjab, best eye hospital reviews";
include('header.php');
?>
<!-- 🌟 Testimonial Banner Section -->
<section class="testimonial-banner">
  <!-- Overlay for readability -->
  <div class="testimonial-overlay"></div>

  <!-- Content Container -->
  <div class="testimonial-container">
    <h1 class="testimonial-heading">Patient Testimonials</h1>
    <ul class="testimonial-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>/</li>
      <li>Patient Testimonials</li>
    </ul>
  </div>
</section>

<!-- ✅ CSS -->
<style>
/* 🌐 Main Section */
.testimonial-banner {
  position: relative;
  width: 100%;
  background-image: url('assets/images/background/petient testimonial.webp');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: #fff;
  text-align: center;
  padding: 100px 20px;
  overflow: hidden;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* 🔳 Overlay Layer */
/*.testimonial-overlay {*/
/*  position: absolute;*/
/*  top: 0; left: 0; right: 0; bottom: 0;*/
/*  background: rgba(0, 0, 0, 0.45);*/
/*  z-index: 1;*/
/*}*/

/* 📦 Container */
.testimonial-container {
  position: relative;
  z-index: 2;
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 12px;
}

/* 🏷️ Heading */
.testimonial-heading {
  color: #ffffff;
  font-size: clamp(1.8rem, 4vw, 3rem);
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  letter-spacing: 1px;
}

/* 🧭 Breadcrumb */
.testimonial-breadcrumb {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: #ffffff;
  font-size: 1rem;
  font-weight: 500;
}

.testimonial-breadcrumb li {
  color: #ffffff;
}

.testimonial-breadcrumb li a {
  color: #f5f5f5;
  text-decoration: underline;
  transition: color 0.3s ease;
}

.testimonial-breadcrumb li a:hover {
  color: #1dd2c3;
}

/* 📱 Responsive Design */

/* Tablets */
@media (max-width: 768px) {
  .testimonial-banner {
    padding: 80px 20px !important;
  }
  .testimonial-heading {
    font-size: 2rem !important;
    line-height: 1.3;
  }
  .testimonial-breadcrumb {
    font-size: 0.95rem !important;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
  }
}

/* Mobile */
@media (max-width: 480px) {
  .testimonial-banner {
    padding: 60px 15px !important;
  }
  .testimonial-heading {
    font-size: 1.6rem !important;
  }
  .testimonial-breadcrumb {
    font-size: 0.9rem !important;
    gap: 5px;
  }
}
</style>



<!-- All Testimonials Section -->
<section class="all-testimonials-section">
    <div class="auto-container">
    <div class="sec-title mb-70">
        <h6 class="theme-color">What Our Patients Say</h6>
        <br><br>
        <h2>Patient Success Stories</h2>
        <br>
        <div class="text">
            <p>Discover how Brar Eye Hospital has helped improve the vision and lives of countless <a href="eye-care-services-bathinda.php" style="color: #03c0b4;">patients</a> with our comprehensive <a href="cataract-surgery-bathinda.php" style="color: #03c0b4;">eye care</a> services. Read more <a href="eye-hospital-gallery-bathinda.php" style="color: #03c0b4;">patient stories</a> and browse <a href="laser-vision-correction-bathinda.php" style="color: #03c0b4;">eye care reviews</a> to hear about real experiences.</p>
        </div>
    </div>

    <!-- ✅ YouTube Shorts -->
    <div class="video-testimonials-container mb-70">
        <div class="sec-title mb-50">
            <h3>Video Testimonials</h3>
        </div>
        <div class="row clearfix">
            <?php
            $shorts = [
                'o57gyNpCw8o',
                'ug3A84fWO1k',
                'bxnkhnZjxOU',
                'i8Le7hO4czA',
                'v8BD4N1yCRk',
                'Gq26cnCrW6A'
            ];
            foreach ($shorts as $short) {
                echo '
                <div class="col-lg-4 col-md-6 col-sm-12 testimonial-video-block">
                    <div class="testimonial-video-content">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/' . $short . '" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</div>


        
                 <!-- Written Testimonials -->
        <section>
    

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
    

        .reviews-section {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 60px;
            gap: 30px;
            animation: fadeInDown 0.8s ease-out;
        }

        .header-left {
            flex: 1;
        }

        .header-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .google-icon {
            width: 50px;
            height: 50px;
        }

        .section-header h1 {
            font-size: 3rem;
            color: #1a1a1a;
            font-weight: 700;
        }

        .section-header p {
            font-size: 1.25rem;
            color: #666;
            margin-left: 65px;
        }

        .rating-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 30px 40px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
            animation: scaleIn 0.6s ease-out 0.2s both;
            flex-shrink: 0;
        }

        .rating-display {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .rating-number {
            font-size: 3.5rem;
            font-weight: 700;
            color: #1a1a1a;
        }

        .stars {
            display: flex;
            gap: 4px;
        }

        .star {
            width: 24px;
            height: 24px;
            fill: #fbbf24;
            color: #fbbf24;
        }

        .rating-info {
            font-size: 0.875rem;
            color: #666;
        }

        .slider-container {
            margin: 60px 0;
            position: relative;
            padding: 0 60px;
        }

        .swiper {
            width: 100%;
            padding: 20px 0 60px 0;
        }

        .swiper-slide {
            height: auto;
        }

        .review-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transform-style: preserve-3d;
        }

        .review-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 0.8);
        }

        .review-header {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f17732, #2563eb);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.125rem;
            border: 3px solid rgba(59, 130, 246, 0.2);
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .review-info {
            flex: 1;
        }

        .reviewer-name {
            font-weight: 600;
            font-size: 1.125rem;
            color: #1a1a1a;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .badge {
            background: #f17732;
            color: white;
            font-size: 0.75rem;
            padding: 3px 10px;
            border-radius: 6px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .review-meta {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .review-stars {
            display: flex;
            gap: 3px;
        }

        .review-star {
            width: 18px;
            height: 18px;
            fill: #fbbf24;
            color: #fbbf24;
        }

        .review-date {
            font-size: 0.875rem;
            color: #666;
        }

        .review-text {
            color: #374151;
            line-height: 1.7;
            font-size: 0.9375rem;
            margin-bottom: 15px;
        }

        .read-more {
            color: #f17732;
            font-size: 0.875rem;
            font-weight: 600;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            color: #2563eb;
            text-decoration: underline;
        }

        /* Swiper Navigation Buttons */
        .swiper-button-next,
        .swiper-button-prev {
            background: rgba(255, 255, 255, 0.9);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
            color: #f17732;
            font-weight: 900;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: #f17732;
            transform: scale(1.1);
        }

        .swiper-button-next:hover:after,
        .swiper-button-prev:hover:after {
            color: white;
        }

        /* Swiper Pagination */
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #cbd5e1;
            opacity: 1;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background: #f17732;
            width: 32px;
            border-radius: 6px;
        }

        .cta-section {
            text-align: center;
            animation: fadeInUp 0.6s ease-out 0.5s both;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #f17732;
            color: white;
            padding: 16px 32px;
            border: none;
            border-radius: 12px;
            font-size: 1.0625rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .cta-button:hover {
            background: #2563eb;
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(59, 130, 246, 0.4);
        }

        .cta-text {
            margin-top: 15px;
            font-size: 0.9375rem;
            color: #666;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 968px) {
            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .rating-box {
                align-self: center;
            }
        }

        @media (max-width: 768px) {
            .section-header h1 {
                font-size: 2rem;
            }

            .google-icon {
                width: 40px;
                height: 40px;
            }

            .section-header p {
                font-size: 1rem;
                margin-left: 55px;
            }

            .rating-number {
                font-size: 2.5rem;
            }

            .slider-container {
                padding: 0 20px;
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 40px;
                height: 40px;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 16px;
            }

            .review-card {
                padding: 20px;
            }

            .rating-box {
                padding: 20px 30px;
            }
        }
    </style>

    <?php
    // Reviews Data Array
    $reviews = [
        [
            'name' => 'Sandeep Kaur Sandhu',
            'initials' => 'SK',
            'rating' => 5,
            'date' => '',
            'review_short' => 'Brar Eye Hospital Bathinda exceeded my expectations. The retina specialists were thorough, caring, and incredibly skilled. Dr. Anand Singh G took the time to explain everything...',
            'review_full' => 'Brar Eye Hospital Bathinda exceeded my expectations in every way. The retina specialists were thorough, caring, and incredibly skilled. The retina specialists Dr. Anand Singh G took the time to explain everything, put me at ease, and delivered outstanding results. A truly wonderful experience! I\'m thrilled with the outcome and would recommend them. Staff was very helpful throughout eye treatment.',
            'badge' => 'NEW'
        ],
        [
            'name' => 'Sandeep Singh',
            'initials' => 'SS',
            'rating' => 5,
            'date' => '',
            'review_short' => 'Best service at Brar Eyes Hospital. Thanks to Dr. Ajay Kapoor for excellent child check-up and retina suggestions. Highly recommended for child specialist care.',
            'review_full' => 'Rop check up done my child. Best all service brar eye hospital services. Thanks to Dr. Ajay Kapoor retina sergerm for better suggestion for my child check up. Thanks to Dr. Ajay Kapoor and all staff. Best for child specialist child hospital Brar eye hospital.',
            'badge' => 'NEW'
        ],
        [
            'name' => 'Arshdeep Brar',
            'initials' => 'AB',
            'rating' => 5,
            'date' => '',
            'review_short' => 'Truly excellent eye hospital! My SMILE Pro Vision Correction Surgery was incredibly smooth and painless. Dr. M.S. Brar explained everything clearly with patience...',
            'review_full' => 'A truly excellent eye hospital! My experience at Brar Eye Hospital was outstanding from start to finish. All the doctors and staff were very kind, professional, and helpful throughout the entire process. However, Dr. P.S. Brar, Dr. M.S. Brar, and Lovepreet Madam went above and beyond in making me feel comfortable and confident before and after my surgery. I recently had my SMILE Pro Vision Correction Surgery, and the whole procedure was incredibly smooth and painless. Dr. M.S. Brar explained every step clearly, answered all my questions with patience, and made sure I felt completely at ease. The post-surgery care and follow-up were also excellent — I could see results almost immediately! I\'m truly grateful for their care and expertise. If anyone is considering eye treatment or surgery, I would highly recommend Brar Eye Hospital without a second thought.',
            'badge' => 'NEW'
        ],
        [
            'name' => 'Iqbal Singh',
            'initials' => 'IS',
            'rating' => 5,
            'date' => '',
            'review_short' => 'Great experience at Brar Eye Hospital, Bathinda. Well-equipped with modern facilities and professional staff. Dr. P.S. Brar is highly knowledgeable and experienced...',
            'review_full' => 'I had a great experience at Brar Eye Hospital, Bathinda. The hospital is well-equipped with modern facilities, and the entire staff is professional and courteous. Dr. P.S. Brar is highly knowledgeable and experienced—his clear communication and patient-first approach gave me a lot of confidence during my treatment. Special thanks to Ranjodh Singh, who was extremely helpful, polite, and ensured a smooth process from start to finish. Highly recommended for anyone seeking trusted and quality eye care.',
            'badge' => ''
        ]
    ];

    // Overall Rating
    $overall_rating = 4.9;
    $total_reviews = 1907;
    ?>

    <div class="reviews-section">
        <!-- Header Section with Rating Box on Right -->
        <div class="section-header">
            <div class="header-left">
                <div class="header-title">
                    <svg class="google-icon" viewBox="0 0 48 48">
                        <path fill="#4285F4" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                        <path fill="#34A853" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                        <path fill="#EA4335" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                    </svg>
                    <h1>Google Reviews</h1>
                </div>
                <p>What Our Patients Say</p>
            </div>

            <div class="rating-box">
                <div class="rating-display">
                    <div class="rating-number"><?php echo $overall_rating; ?></div>
                    <div>
                        <div class="stars">
                            <?php for($i = 0; $i < 5; $i++): ?>
                                <svg class="star" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <div class="rating-info">out of 5</div>
                    </div>
                </div>
                <p class="rating-info">Based on <?php echo $total_reviews; ?>+ verified reviews</p>
            </div>
        </div>

        <!-- Slider Section -->
        <div class="slider-container">
            <div class="swiper reviewsSwiper">
                <div class="swiper-wrapper">
                    <?php foreach($reviews as $index => $review): ?>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-header">
                                    <div class="avatar"><?php echo $review['initials']; ?></div>
                                    <div class="review-info">
                                        <div class="reviewer-name">
                                            <?php echo $review['name']; ?>
                                            <?php if(!empty($review['badge'])): ?>
                                                <span class="badge"><?php echo $review['badge']; ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="review-meta">
                                            <div class="review-stars">
                                                <?php for($i = 0; $i < $review['rating']; $i++): ?>
                                                    <svg class="review-star" viewBox="0 0 24 24">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                <?php endfor; ?>
                                            </div>
                                            <span class="review-date"><?php echo $review['date']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p class="review-text" id="review-text-<?php echo $index; ?>">
                                    <?php echo $review['review_short']; ?>
                                </p>
                                <?php if($review['review_short'] !== $review['review_full']): ?>
                                    <button class="read-more" onclick="toggleReview(<?php echo $index; ?>)">
                                        Read more
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

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


<!-- booking-form-section -->
<br>
    

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
                    <h2>Book an Appointment</h2>

                    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                        <div class="alert alert-success" style="background-color: #dff0d8; color: #3c763d; padding: 15px; margin-bottom: 20px; border: 1px solid #d6e9c6; border-radius: 4px;">
                            Your message has been sent successfully. We will contact you shortly.
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['error']) && $_GET['error'] == '1'): ?>
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
<style>
    <style>
    /* CONTACT STYLE TWO FORM */
    .contact-style-two {
        position: relative;
        background: #f8fafb;
        padding: 70px 0;
        border-radius: 18px;
        box-shadow: 0 12px 36px rgba(3, 192, 180, 0.08);
        overflow: hidden;
    }

    .contact-style-two .pattern-layer .pattern-1,
    .contact-style-two .pattern-layer .pattern-2 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        opacity: 0.46;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        pointer-events: none;
    }

    .contact-style-two .auto-container {
        position: relative;
        z-index: 2;
    }

    .contact-style-two .form-inner {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 36px rgba(3, 192, 180, 0.10);
        padding: 38px 32px 32px 32px;
    }

    .contact-style-two .form-inner h2 {
        font-size: 2.1rem;
        color: #03c0b4;
        text-align: center;
        font-weight: 700;
        margin-bottom: 18px;
        letter-spacing: 1px;
    }

    .contact-style-two .alert {
        font-size: 1rem;
        margin-bottom: 20px;
        border-radius: 6px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 2px 8px rgba(3, 192, 180, 0.05);
    }

    #contact-form .form-group {
        margin-bottom: 20px;
    }

    #contact-form input,
    #contact-form textarea {
        width: 100%;
        padding: 12px 14px;
        font-size: 1rem;
        border-radius: 7px;
        border: 1px solid #e0e7ef;
        background: #f7fcfd;
        color: #222;
        transition: border-color 0.2s;
        font-family: inherit;
    }

    #contact-form input:focus,
    #contact-form textarea:focus {
        border-color: #03c0b4;
        outline: none;
        background: #fff;
    }

    #contact-form textarea {
        min-height: 120px;
        resize: vertical;
    }

    .theme-btn.btn-one {
        background: #03c0b4;
        color: #fff;
        border: none;
        border-radius: 7px;
        padding: 14px 38px;
        font-size: 1.08rem;
        font-weight: 600;
        box-shadow: 0 4px 18px rgba(3, 192, 180, 0.16);
        cursor: pointer;
        transition: background 0.24s, box-shadow 0.24s;
    }

    .theme-btn.btn-one:hover {
        background: #fd7e14;
        box-shadow: 0 6px 20px rgba(253, 126, 20, 0.10);
    }

    @media (max-width: 991px) {
        .contact-style-two .form-inner {
            padding: 28px 10px 24px 10px;
        }

        .contact-style-two {
            padding: 35px 0;
            border-radius: 12px;
        }
    }
</style>
</style>

                <!-- Add more testimonials same way... -->
                <!-- You can paste your other 5 written testimonials here -->

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<!-- ✅ COMBINED CSS -->
<style>
/* Page Title Section */
.page-title-section {
    background: url('assets/images/background/page-title.webp') no-repeat center center;
    background-size: cover;
    padding: 100px 0;
    text-align: center;
    color: #fff;
    position: relative;
}
.page-title-section h1 {
    font-size: 42px;
    margin-bottom: 15px;
    font-weight: 700;
    margin-left: -850px;
}
/*.page-title-section li {*/
/*    margin-left: -390px;*/
/*}*/
.bread-crumb {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}
.bread-crumb li a {
    color: #f17732;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-left: -850px;
}
.bread-crumb li a:hover {
    text-decoration: underline;
}
.bread-crumb li:not(:last-child)::after {
    content: '/';
    margin-left: 10px;
    color: #f17732;
}

/* Section Styling */
.all-testimonials-section {
    padding: 80px 0;
}
.sec-title {
    text-align: center;
    margin-bottom: 50px;
}
.sec-title h6 {
    color: #03c0b4;
    font-weight: 600;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
}
.sec-title h2 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
    margin-bottom: 15px;
}
.sec-title h3 {
    font-size: 28px;
    font-weight: 600;
    color: #222;
    margin-bottom: 15px;
}
.sec-title .text p {
    max-width: 700px;
    margin: 0 auto;
    color: #555;
    line-height: 1.6;
}

/* Video Testimonials */
.video-testimonials-container {
    margin-bottom: 70px;
}
.testimonial-video-block {
    margin-bottom: 30px;
}
.testimonial-video-content {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}
.testimonial-video-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.video-container {
    position: relative;
    padding-bottom: 177.78%; /* Changed from 56.25% to 177.78% to fit vertical Shorts (9:16 ratio) */
    height: 0;
    overflow: hidden;
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

/* Written Testimonials */
.testimonial-block {
    margin-bottom: 30px;
}
.testimonial-content {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    height: 100%;
    transition: all 0.3s ease;
}
.testimonial-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.inner-box {
    padding: 30px;
    position: relative;
}
.light-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    opacity: 0.1;
}
.light-icon img {
    width: 40px;
}
.rating {
    display: flex;
    gap: 5px;
    margin-bottom: 15px;
    list-style: none;
    padding: 0;
}
.rating li {
    color: #ffc107;
}
.testimonial-content p {
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 15px;
}
.testimonial-content h4 {
    font-size: 18px;
    margin: 0 0 5px 0;
    color: #f17732;
    font-weight: 600;
}
.testimonial-content .designation {
    font-size: 14px;
    color: #777;
    display: block;
}

/* Responsive */
@media (max-width: 991px) {
    .page-title-section h1 { font-size: 36px; }
    .sec-title h2 { font-size: 30px; }
    .sec-title h3 { font-size: 24px; }
}
@media (max-width: 767px) {
    .page-title-section { padding: 80px 0; }
    .page-title-section h1 { font-size: 28px; }
    .sec-title h2 { font-size: 26px; }
    .sec-title h3 { font-size: 22px; }
    .inner-box { padding: 20px; }
}
@media (max-width: 575px) {
    .page-title-section { padding: 60px 0; }
}
</style>
