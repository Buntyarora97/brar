<?php
// eye-care-blog-bathinda.php - Unified Eye Care Blog Listing
$pageTitle = "Eye Care Blog | Brar Eye Hospital Bathinda – LASIK, Cataract & SMILE Pro Tips";
$pageDescription = "Read expert blogs from Brar Eye Hospital, Bathinda on LASIK, SMILE Pro, cataract surgery, glaucoma care, squint correction & advanced eye treatments. Stay informed and protect your vision.";
$pageKeywords = "eye care blog Bathinda, LASIK surgery Bathinda, cataract treatment Bathinda, vision correction Punjab, SMILE Pro blog, eye health tips Punjab";
$canonicalUrl = "https://www.brareyehospital.com/eye-care-blog-bathinda.php";

include('header.php');

/* ----------- Master Blog List (sorted newest first) ----------- */
$blogs = [
    /* ===== March 2026 – NEW ARTICLES ===== */
    [
        "title" => "SMILE Pro vs LASIK: Which Vision Correction Surgery Is Better?",
        "url"   => "smile-pro-vs-lasik-vision-correction.php",
        "image" => "https://images.unsplash.com/photo-1551601651-2a8555f1a136?auto=format&fit=crop&w=900&q=80",
        "date"  => "March 25, 2026",
        "category" => "SMILE Pro vs LASIK",
        "desc"  => "Confused between SMILE Pro and LASIK? Compare the techniques, recovery, safety and cost so you can pick the right laser vision correction for your eyes."
    ],
    [
        "title" => "SMILE Pro Eye Surgery Cost in India (2026): Complete Patient Guide",
        "url"   => "smile-pro-eye-surgery-cost-india-2026.php",
        "image" => "https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=900&q=80",
        "date"  => "March 18, 2026",
        "category" => "SMILE Pro Surgery",
        "desc"  => "How much does SMILE Pro eye surgery cost in India in 2026? Understand the price range, what affects it, recovery time and how to choose the right hospital."
    ],
    [
        "title" => "Contact Lenses vs Glasses: Which Is Better for Your Eyes?",
        "url"   => "contact-lenses-vs-glasses-which-is-better.php",
        "image" => "https://images.unsplash.com/photo-1591076482161-42ce6da69f67?auto=format&fit=crop&w=900&q=80",
        "date"  => "March 12, 2026",
        "category" => "Vision Correction",
        "desc"  => "Should you choose contact lenses or eyeglasses? Compare comfort, vision quality, safety, cost and lifestyle to pick the best option for your eye health."
    ],
    [
        "title" => "How to Protect Your Eyes from Mobile & Screen Damage",
        "url"   => "protect-eyes-from-mobile-screen-damage.php",
        "image" => "https://images.unsplash.com/photo-1517059224940-d4af9eec41b7?auto=format&fit=crop&w=900&q=80",
        "date"  => "March 5, 2026",
        "category" => "Digital Eye Care",
        "desc"  => "Learn proven ways to protect your eyes from mobile and screen damage. Reduce digital eye strain, dryness, headaches and long-term vision problems."
    ],

    /* ===== February 2026 ===== */
    [
        "title" => "What Is Cataract Surgery? Procedure, Benefits & Recovery",
        "url"   => "cataract-surgery-procedure-benefits-recovery.php",
        "image" => "https://www.brareyehospital.com/assets/images/service/contaract%20surgery.avif",
        "date"  => "February 28, 2026",
        "category" => "Cataract Surgery",
        "desc"  => "A complete patient guide explaining how modern surgery restores vision clarity, its safety, and the step-by-step procedure at Brar Eye Hospital."
    ],
    [
        "title" => "Laser vs Traditional Cataract Surgery: Which Option Is Better?",
        "url"   => "laser-vs-traditional-cataract-surgery.php",
        "image" => "https://www.brareyehospital.com/assets/images/service/Refrective%20surgery.avif",
        "date"  => "February 25, 2026",
        "category" => "Comparison",
        "desc"  => "Compare the precision and technology behind laser-assisted versus manual cataract surgery to make an informed choice for your vision restoration."
    ],
    [
        "title" => "Cataract Surgery Recovery Timeline: What to Expect",
        "url"   => "cataract-surgery-recovery-timeline.php",
        "image" => "https://www.brareyehospital.com/assets/images/banner/a1].webp",
        "date"  => "February 20, 2026",
        "category" => "Recovery Guide",
        "desc"  => "Track your healing progress from the first 24 hours to full recovery, including expert tips for returning to work and daily activities safely."
    ],
    [
        "title" => "Common Eye Problems in Children and Their Warning Signs",
        "url"   => "common-eye-problems-in-children.php",
        "image" => "https://www.brareyehospital.com/assets/images/service/child%20eyecare.avif",
        "date"  => "February 15, 2026",
        "category" => "Pediatric Care",
        "desc"  => "Identify symptoms like refractive errors and lazy eye early to protect your child's visual development and long-term academic success."
    ],

    /* ===== January 2026 ===== */
    [
        "title" => "Cataract Surgery 2026: Recovery, Benefits, and What to Expect",
        "url"   => "cataract-surgery.php",
        "image" => "attached_assets/generated_images/indian_patient_recovering_from_cataract_surgery.webp",
        "date"  => "January 25, 2026",
        "category" => "Cataract Surgery",
        "desc"  => "Learn everything about cataract surgery, including the different types, recovery, and long-term benefits."
    ],
    [
        "title" => "Bags Under Eyes: Causes, Treatments, and Prevention Tips",
        "url"   => "bags-under-eyes.php",
        "image" => "attached_assets/generated_images/indian_person_applying_cold_compress_for_eye_bags.webp",
        "date"  => "January 18, 2026",
        "category" => "Eye Care",
        "desc"  => "Discover the common causes of bags under your eyes and learn effective ways to reduce them."
    ],
    [
        "title" => "How Your Overall Health Directly Impacts Your Eye Health",
        "url"   => "overall-health.php",
        "image" => "attached_assets/generated_images/indian_family_healthy_vision_concept.webp",
        "date"  => "January 12, 2026",
        "category" => "Eye Health",
        "desc"  => "Discover the connection between lifestyle, chronic conditions, and eye health, and tips to protect your vision naturally."
    ],
    [
        "title" => "Prevent Permanent Vision Loss with Advanced Eye Screenings",
        "url"   => "prevent-permanent-vision-loss.php",
        "image" => "attached_assets/generated_images/indian_patient_undergoing_eye_exam.webp",
        "date"  => "January 5, 2026",
        "category" => "Eye Screening",
        "desc"  => "Learn how advanced eye screenings can detect vision problems early and prevent permanent vision loss."
    ],

    /* ===== December 2025 ===== */
    [
        "title" => "Winter Dry Eye Syndrome — Why Your Eyes Burn in Cold Weather",
        "url"   => "winter-dry-eye-syndrome-treatment.php",
        "image" => "blogs%20images/winter-dry-eye.webp",
        "date"  => "December 26, 2025",
        "category" => "Eye Health",
        "desc"  => "Punjab winters are pleasant, but they often come with dry, itchy or burning eyes. Learn how to prevent and treat Winter Dry Eye Syndrome."
    ],
    [
        "title" => "Childhood Myopia — Prevention, Control & When to Consider Surgery",
        "url"   => "childhood-myopia-prevention-control-surgery.php",
        "image" => "blogs%20images/childhood-myopia.webp",
        "date"  => "December 19, 2025",
        "category" => "Pediatric Eye Care",
        "desc"  => "Childhood myopia (nearsightedness) is one of the fastest-growing eye problems in India — especially in Punjab. Early screening can help."
    ],
    [
        "title" => "Digital Eye Strain in Kids — How Online Classes & Mobile Use Affect Children's Eyesight",
        "url"   => "digital-eye-strain-kids-screen-time.php",
        "image" => "blogs%20images/digital-eye-strain-kids.webp",
        "date"  => "December 12, 2025",
        "category" => "Pediatric Eye Care",
        "desc"  => "Today's children grow up surrounded by screens — mobiles, tablets, smart TVs, online classes, video games and digital learning apps."
    ],
    [
        "title" => "How Air Pollution & Punjab's Climate Affect Eye Health",
        "url"   => "air-pollution-punjab-climate-eye-health.php",
        "image" => "blogs%20images/air-pollution-eye-health.webp",
        "date"  => "December 5, 2025",
        "category" => "Eye Health",
        "desc"  => "Punjab is known for vibrant seasons — but behind the beauty lies changing air quality, dust exposure, crop residue smoke and rising pollution levels."
    ],

    /* ===== November 2025 ===== */
    [
        "title" => "Latest Retinal Treatments & Laser Therapy",
        "url"   => "latest-retinal-treatments.php",
        "image" => "/images/retinal_imaging_scan_fd89cf79.webp",
        "date"  => "November 28, 2025",
        "category" => "Retina Care",
        "desc"  => "Explore the newest advances in retinal care — from injections to laser treatments — at Brar Eye Hospital."
    ],
    [
        "title" => "Common Eye Specialist Questions Answered",
        "url"   => "eye-specialist-questions.php",
        "image" => "/images/professional_ophthal_ffb1e663.webp",
        "date"  => "November 22, 2025",
        "category" => "Patient FAQs",
        "desc"  => "Find answers to the most common questions patients ask eye doctors — straight from the experts at Brar Eye Hospital."
    ],
    [
        "title" => "Laser Eye Surgery Guide & Recovery Tips",
        "url"   => "laser-eye-surgery-guide.php",
        "image" => "/images/modern_laser_eye_sur_e95d49d4.webp",
        "date"  => "November 18, 2025",
        "category" => "Surgery & Recovery",
        "desc"  => "A complete guide to laser eye surgery — from procedure steps to recovery advice by Brar Eye Hospital experts."
    ],
    [
        "title" => "Computer Vision Syndrome: Causes & Prevention Tips",
        "url"   => "computer-vision-syndrome.php",
        "image" => "/images/person_working_on_co_effd6e82.webp",
        "date"  => "November 12, 2025",
        "category" => "Digital Eye Strain",
        "desc"  => "Learn what Computer Vision Syndrome is, its symptoms, and simple ways to protect your eyes from digital strain."
    ],
    [
        "title" => "10 Everyday Habits That Can Damage Your Eyes",
        "url"   => "eye-damaging-habits.php",
        "image" => "/images/eye_health_protection_habits.webp",
        "date"  => "November 5, 2025",
        "category" => "Eye Health",
        "desc"  => "Discover daily habits that harm your eyes and learn expert tips from Brar Eye Hospital to keep your vision safe and healthy."
    ],

    /* ===== October 2025 ===== */
    [
        "title" => "Latest Eye Care Technology at Brar Eye Hospital",
        "url"   => "latest-eye-care-technology-bathinda.php",
        "image" => "blogs%20images/17.webp",
        "date"  => "October 30, 2025",
        "category" => "Eye Care Technology",
        "desc"  => "Explore advanced eye care technology at Brar Eye Hospital in Bathinda & Kotkapura, offering modern solutions for better vision."
    ],
    [
        "title" => "Why Regular Eye Check-Ups Are Important for Clear Vision at Any Age",
        "url"   => "importance-regular-eye-checkups.php",
        "image" => "blogs%20images/18.webp",
        "date"  => "October 22, 2025",
        "category" => "Eye Health",
        "desc"  => "Find out why regular eye check-ups are essential at all ages. Visit Brar Eye Hospital in Bathinda & Kotkapura for expert eye care."
    ],
    [
        "title" => "Dry Eyes: Causes, Home Remedies, and When to See a Doctor",
        "url"   => "dry-eyes-causes-remedies-treatment.php",
        "image" => "blogs%20images/19.webp",
        "date"  => "October 15, 2025",
        "category" => "Eye Care",
        "desc"  => "Understand the causes of dry eyes, effective home remedies, and when to consult an eye doctor."
    ],
    [
        "title" => "Diabetic Eye Disease: Early Signs, Risks, and Treatments You Should Know",
        "url"   => "diabetic-eye-disease-signs-treatment.php",
        "image" => "blogs%20images/20.webp",
        "date"  => "October 8, 2025",
        "category" => "Diabetic Eye Care",
        "desc"  => "Learn about diabetic eye disease, its early signs, risks, and treatments. Brar Eye Hospital offers advanced care in Bathinda & Kotkapura."
    ],
    [
        "title" => "Top 10 Common Eye Problems and How to Prevent Them",
        "url"   => "common-eye-problems-prevention.php",
        "image" => "blogs%20images/21.webp",
        "date"  => "October 3, 2025",
        "category" => "Eye Health",
        "desc"  => "Discover the most common eye problems, their symptoms, and prevention tips."
    ],

    /* ===== September 2025 ===== */
    [
        "title" => "Life After LASIK: Do's and Don'ts for Faster Recovery",
        "url"   => "life-after-lasik-dos-and-donts-for-faster-recovery.php",
        "image" => "blogs%20images/lasik-hero.webp",
        "date"  => "September 29, 2025",
        "category" => "LASIK Recovery",
        "desc"  => "Discover the essential dos and don'ts after LASIK surgery to ensure faster and safe recovery."
    ],
    [
        "title" => "Cataract Surgery in Bathinda – Latest Technology & Recovery Guide",
        "url"   => "cataract-surgery-in-bathinda-latest-technology-complete-recovery-guide.php",
        "image" => "blogs%20images/cataract-hero.webp",
        "date"  => "September 24, 2025",
        "category" => "Cataract Surgery",
        "desc"  => "Learn about advanced cataract surgery techniques, latest technology, and complete recovery process in Bathinda."
    ],
    [
        "title" => "Why Regular Eye Check-ups Are Essential After 40",
        "url"   => "why-regular-eye-check-ups-are-essential-after-40.php",
        "image" => "blogs%20images/eye-checkup-hero.webp",
        "date"  => "September 22, 2025",
        "category" => "Eye Health",
        "desc"  => "Understand the importance of regular eye check-ups after 40 to prevent vision problems and eye diseases."
    ],
    [
        "title" => "Children's Eye Health: Early Signs Parents Should Never Ignore",
        "url"   => "childrens-eye-health-early-signs-parents-should-never-ignore.php",
        "image" => "blogs%20images/children-eye-health-hero.webp",
        "date"  => "September 18, 2025",
        "category" => "Children Eye Care",
        "desc"  => "Find out the early signs of eye problems in children and why timely treatment is important for healthy vision."
    ],
    [
        "title" => "Contact Lenses vs LASIK vs SMILE Pro – Which is Right for You?",
        "url"   => "contact-lenses-vs-lasik-vs-smile-pro-which-is-right-for-you.php",
        "image" => "blogs%20images/vision-correction-hero.webp",
        "date"  => "September 10, 2025",
        "category" => "Vision Correction",
        "desc"  => "Compare contact lenses, LASIK, and SMILE Pro surgery to choose the best option for your lifestyle and vision needs."
    ],
    [
        "title" => "Preventing Digital Eye Strain: Tips for Students & IT Professionals",
        "url"   => "preventing-digital-eye-strain-tips-for-students-it-professionals.php",
        "image" => "blogs%20images/digital-eye-strain-hero.webp",
        "date"  => "September 2, 2025",
        "category" => "Digital Eye Care",
        "desc"  => "Explore expert tips to prevent digital eye strain caused by excessive screen time in students and IT professionals."
    ],

    /* ===== June 2025 (LASIK / SMILE Pro / Squint / Hospital series) ===== */
    [
        "title" => "What is the Cost of LASIK Eye Surgery in Punjab?",
        "url"   => "what-is-the-cost-of-lasik-eye-surgery-in-punjab.php",
        "image" => "assets/images/blogs%20city%20images/What%20is%20the%20Cost%20of%20LASIK%20Eye%20Surgery%20in%20Punjab.webp",
        "date"  => "June 24, 2025",
        "category" => "LASIK Surgery",
        "desc"  => "Learn expert insights, procedures, and transparent pricing for LASIK surgery at BRAR EYE Hospital, Punjab."
    ],
    [
        "title" => "Which Eye Surgery is Best for Vision Correction in India?",
        "url"   => "which-eye-surgery-is-best-for-vision-correction-in-Punjab.php",
        "image" => "assets/images/blog/Vision%20Correction.webp",
        "date"  => "June 23, 2025",
        "category" => "Vision Correction",
        "desc"  => "Compare LASIK, SMILE Pro, and Contoura Vision surgeries. Find the best vision correction option for your needs."
    ],
    [
        "title" => "What Does 6/6 Eyesight Mean and How to Achieve It?",
        "url"   => "what-does-6-6-eyesight-mean-and-how-to-achieve-it.php",
        "image" => "assets/images/blog/Vision%20Health.webp",
        "date"  => "June 18, 2025",
        "category" => "Vision Health",
        "desc"  => "Understand 6/6 vision standards and learn how LASIK surgery can help achieve perfect eyesight."
    ],
    [
        "title" => "Is LASIK Eye Surgery 100% Successful for Everyone?",
        "url"   => "is-lasik-eye-surgery-100-successful-for-everyone.php",
        "image" => "assets/images/blog/success%20%20rate.webp",
        "date"  => "June 17, 2025",
        "category" => "Success Rates",
        "desc"  => "Realistic expectations about LASIK success rates, factors affecting outcomes, and patient selection criteria."
    ],
    [
        "title" => "What is the Best Treatment for Glaucoma in India?",
        "url"   => "what-is-the-best-treatment-for-glaucoma-in-Punjab.php",
        "image" => "assets/images/blog/What%20is%20the%20Best%20Treatment%20for%20Glaucoma%20in%20Indi.webp",
        "date"  => "June 16, 2025",
        "category" => "Glaucoma",
        "desc"  => "Comprehensive glaucoma treatment options including medications, laser therapy, and surgical interventions."
    ],
    [
        "title" => "What is Smile Pro Eye Surgery and How Does it Work?",
        "url"   => "what-is-smile-pro-eye-surgery-and-how-does-it-work.php",
        "image" => "assets/images/service/smile-pro.webp",
        "date"  => "June 12, 2025",
        "category" => "Smile Pro Surgery",
        "desc"  => "Learn everything about Smile Pro eye surgery, its procedure, and benefits over traditional LASIK surgery."
    ],
    [
        "title" => "Is Smile Pro Eye Surgery Better Than LASIK in India?",
        "url"   => "is-smile-pro-eye-surgery-better-than-lasik-in-Punjab.php",
        "image" => "assets/images/service/lasik.webp",
        "date"  => "June 11, 2025",
        "category" => "Smile Pro vs LASIK",
        "desc"  => "Compare Smile Pro with LASIK surgery, exploring their differences in effectiveness, recovery time, and safety."
    ],
    [
        "title" => "What is the Success Rate of Smile Pro Eye Surgery?",
        "url"   => "what-is-the-success-rate-of-smile-pro-eye-surgery.php",
        "image" => "assets/images/blog/success%20%20rate.webp",
        "date"  => "June 10, 2025",
        "category" => "Success Rate",
        "desc"  => "Discover the success rate of Smile Pro eye surgery and learn about its effectiveness and long-term outcomes."
    ],
    [
        "title" => "Smile Pro vs LASIK vs Contoura Vision - Which is Best in 2025?",
        "url"   => "smile-pro-vs-lasik-vs-contoura-vision-which-is-best-in-2025.php",
        "image" => "assets/images/service/smile-pro.webp",
        "date"  => "June 9, 2025",
        "category" => "Comparison",
        "desc"  => "In-depth comparison of Smile Pro, LASIK, and Contoura Vision surgeries. Understand which option is best for your eyes in 2025."
    ],
    [
        "title" => "What is the Best Age to Get Smile Pro Eye Surgery?",
        "url"   => "what-is-the-best-age-to-get-smile-pro-eye-surgery.php",
        "image" => "assets/images/service/cloudy%20vission.webp",
        "date"  => "June 8, 2025",
        "category" => "Smile Pro Age",
        "desc"  => "Find out the ideal age for Smile Pro eye surgery and how age factors into the suitability and success of the procedure."
    ],
    [
        "title" => "Can a Squint Eye Be Corrected Permanently Without Glasses?",
        "url"   => "can-a-squint-eye-be-corrected-permanently-without-glasses.php",
        "image" => "assets/images/squit/Squint%20Treatment.webp",
        "date"  => "June 7, 2025",
        "category" => "Squint Eye",
        "desc"  => "Explore the different methods available for permanently correcting squint eyes without the need for glasses."
    ],
    [
        "title" => "Is Squint Eye Surgery 100% Successful for Adults and Kids?",
        "url"   => "is-squint-eye-surgery-100-successful-for-adults-and-kids.php",
        "image" => "assets/images/squit/squint-eye-1.webp",
        "date"  => "June 6, 2025",
        "category" => "Squint Surgery",
        "desc"  => "Find out the success rate of squint eye surgery for both adults and children, and how the procedure works."
    ],
    [
        "title" => "What is the Best Age for Squint Eye Surgery in Children?",
        "url"   => "what-is-the-best-age-for-squint-eye-surgery-in-children.php",
        "image" => "assets/images/squit/squint-treatment.webp",
        "date"  => "June 5, 2025",
        "category" => "Squint Surgery Age",
        "desc"  => "Understand the ideal age for squint eye surgery in children and the factors that contribute to a successful outcome."
    ],
    [
        "title" => "What is Contoura Vision Laser Eye Surgery?",
        "url"   => "what-is-contoura-vision-laser-eye-surgery.php",
        "image" => "assets/images/service/child%20eyecare.avif",
        "date"  => "June 4, 2025",
        "category" => "Contoura Vision",
        "desc"  => "Discover the advanced technology of Contoura Vision laser eye surgery and how it offers superior results compared to traditional LASIK."
    ],
    [
        "title" => "Which is the Number One Hospital in Punjab for Eye Treatments?",
        "url"   => "which-is-the-number-one-hospital-in-punjab-for-eye-treatments.php",
        "image" => "assets/images/hospital.webp",
        "date"  => "June 3, 2025",
        "category" => "Eye Treatments",
        "desc"  => "Find out why Brar Eye Hospital is considered the number one destination for eye treatments in Punjab."
    ],
    [
        "title" => "Which is the Best Eye Hospital in Punjab for LASIK and Retina?",
        "url"   => "which-is-the-best-eye-hospital-in-punjab-for-lasik-and-retina.php",
        "image" => "assets/images/retina/retina-specialist.webp",
        "date"  => "June 2, 2025",
        "category" => "LASIK & Retina",
        "desc"  => "Learn why Brar Eye Hospital stands out as the leading hospital for LASIK and retina treatments in Punjab."
    ],
    [
        "title" => "Top Eye Hospital in Bathinda for LASIK, Glaucoma, and Retina",
        "url"   => "top-eye-hospital-in-bathinda-for-lasik-glaucoma-and-retina.php",
        "image" => "assets/images/bhatinda.webp",
        "date"  => "June 1, 2025",
        "category" => "Bathinda Eye Care",
        "desc"  => "Explore the leading eye care hospital in Bathinda, specializing in LASIK, glaucoma treatment, and retina care."
    ],
    [
        "title" => "Best Eye Hospital in Kotkapura for Cataract, LASIK, and Child Eye Care",
        "url"   => "best-eye-hospital-in-kotkapura-for-cataract-lasik-and-child-eye-care.php",
        "image" => "assets/images/Kotkapura.webp",
        "date"  => "May 31, 2025",
        "category" => "Kotkapura Eye Care",
        "desc"  => "Find out why Brar Eye Hospital in Kotkapura is the go-to destination for cataract surgery, LASIK, and specialized child eye care."
    ],
];
?>

<style>
/* =================== Brar Eye Blog Listing — Unified Design =================== */
:root {
    --brar-teal: #1dd2c3;
    --brar-teal-dark: #18b3a5;
    --brar-orange: #f17732;
    --brar-orange-dark: #d96420;
    --brar-navy: #0f3a55;
    --brar-navy-light: #1b5273;
    --brar-bg: #f4f9fb;
    --brar-card: #ffffff;
    --brar-text: #2b3a44;
    --brar-muted: #5e7282;
    --brar-border: #e6eef2;
    --shadow-sm: 0 4px 14px rgba(15, 58, 85, 0.06);
    --shadow-md: 0 14px 35px rgba(15, 58, 85, 0.10);
    --shadow-lg: 0 25px 55px rgba(15, 58, 85, 0.16);
}

.blog-listing-wrapper { background: var(--brar-bg); font-family: 'Poppins', sans-serif; color: var(--brar-text); }

/* ===== Hero / Page Title ===== */
.blog-page-hero {
    position: relative;
    background: linear-gradient(135deg, rgba(15,58,85,0.92) 0%, rgba(24,179,165,0.85) 100%),
                url('https://images.unsplash.com/photo-1551601651-2a8555f1a136?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
    color: #fff;
    padding: 110px 20px 90px;
    text-align: center;
    overflow: hidden;
}
.blog-page-hero::before {
    content: ""; position: absolute; inset: 0;
    background: radial-gradient(ellipse at top, rgba(241,119,50,.18), transparent 60%);
    pointer-events: none;
}
.blog-page-hero .hero-inner { position: relative; max-width: 900px; margin: 0 auto; z-index: 2; }
.blog-page-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.2rem, 5vw, 3.5rem);
    font-weight: 800;
    color: #fff;
    margin-bottom: 18px;
    line-height: 1.15;
    text-shadow: 0 4px 18px rgba(0,0,0,.3);
}
.blog-page-hero h1 span { color: var(--brar-teal); }
.blog-page-hero .lead { font-size: 1.15rem; opacity: .95; max-width: 720px; margin: 0 auto 25px; }
.blog-page-hero .crumb {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255,255,255,.12); backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,.2);
    padding: 10px 22px; border-radius: 50px;
    font-size: 14px; font-weight: 500;
}
.blog-page-hero .crumb a { color: var(--brar-teal); transition: color .25s; }
.blog-page-hero .crumb a:hover { color: #fff; }
.blog-page-hero .crumb i { font-size: 10px; opacity: .7; }

/* ===== Stats Strip ===== */
.blog-stats {
    max-width: 1200px;
    margin: -40px auto 0;
    background: #fff;
    border-radius: 18px;
    box-shadow: var(--shadow-md);
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    overflow: hidden;
    position: relative;
    z-index: 5;
}
.blog-stats .stat {
    text-align: center; padding: 25px 15px;
    border-right: 1px solid var(--brar-border);
}
.blog-stats .stat:last-child { border-right: none; }
.blog-stats .stat i { font-size: 22px; color: var(--brar-teal-dark); margin-bottom: 8px; }
.blog-stats .stat strong { display: block; font-size: 22px; color: var(--brar-navy); font-weight: 700; }
.blog-stats .stat span { font-size: 13px; color: var(--brar-muted); }
@media (max-width: 700px) {
    .blog-stats { grid-template-columns: repeat(2, 1fr); }
    .blog-stats .stat { border-bottom: 1px solid var(--brar-border); }
    .blog-stats .stat:nth-child(2) { border-right: none; }
}

/* ===== Main Grid ===== */
.blog-main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 70px 20px 60px;
}
.section-heading {
    text-align: center; margin-bottom: 50px;
}
.section-heading .eyebrow {
    display: inline-block;
    background: rgba(29,210,195,.12);
    color: var(--brar-teal-dark);
    padding: 6px 18px; border-radius: 30px;
    font-size: 12px; font-weight: 700;
    text-transform: uppercase; letter-spacing: 1px;
    margin-bottom: 14px;
}
.section-heading h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.8rem, 3.5vw, 2.4rem);
    color: var(--brar-navy); font-weight: 700; margin-bottom: 10px;
}
.section-heading p { color: var(--brar-muted); max-width: 640px; margin: 0 auto; font-size: 15px; }

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));
    gap: 32px;
}

/* ===== Unified Blog Card ===== */
.bro-card {
    background: var(--brar-card);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--brar-border);
    display: flex; flex-direction: column;
    transition: all .4s cubic-bezier(.165,.84,.44,1);
    position: relative;
}
.bro-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
    border-color: var(--brar-teal);
}
.bro-card .img-wrap {
    position: relative; height: 220px; overflow: hidden; background: #e6eef2;
}
.bro-card .img-wrap img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .8s ease;
}
.bro-card:hover .img-wrap img { transform: scale(1.08); }
.bro-card .img-wrap::after {
    content: ""; position: absolute; inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(15,58,85,.4) 100%);
    opacity: 0; transition: opacity .3s;
}
.bro-card:hover .img-wrap::after { opacity: 1; }

.bro-card .badge {
    position: absolute; top: 16px; left: 16px;
    background: var(--brar-orange); color: #fff;
    padding: 6px 14px; border-radius: 30px;
    font-size: 11px; font-weight: 700;
    text-transform: uppercase; letter-spacing: .5px;
    box-shadow: 0 6px 14px rgba(241,119,50,.4);
    z-index: 2;
}

.bro-card .body {
    padding: 26px 24px 28px;
    flex-grow: 1; display: flex; flex-direction: column;
}
.bro-card .meta {
    display: flex; align-items: center; gap: 16px;
    font-size: 12px; color: var(--brar-muted);
    margin-bottom: 14px; flex-wrap: wrap;
}
.bro-card .meta span { display: inline-flex; align-items: center; gap: 6px; }
.bro-card .meta i { color: var(--brar-teal-dark); }

.bro-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.22rem; line-height: 1.35;
    color: var(--brar-navy); font-weight: 700;
    margin-bottom: 14px;
}
.bro-card h3 a { color: inherit; transition: color .25s; }
.bro-card h3 a:hover { color: var(--brar-teal-dark); }

.bro-card p {
    font-size: 14px; color: var(--brar-muted);
    line-height: 1.65; margin-bottom: 22px;
    display: -webkit-box; -webkit-line-clamp: 3;
    -webkit-box-orient: vertical; overflow: hidden;
}

.bro-card .read-more {
    margin-top: auto;
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--brar-navy); font-weight: 700; font-size: 14px;
    padding: 10px 0; border-top: 1px dashed var(--brar-border);
    transition: all .25s;
}
.bro-card .read-more i {
    width: 28px; height: 28px; border-radius: 50%;
    background: var(--brar-teal); color: #fff;
    display: inline-flex; align-items: center; justify-content: center;
    font-size: 11px; transition: all .25s;
}
.bro-card .read-more:hover { color: var(--brar-orange); }
.bro-card .read-more:hover i { background: var(--brar-orange); transform: translateX(4px); }

/* ===== Pagination ===== */
.bro-pagination {
    display: flex; justify-content: center; gap: 10px;
    margin-top: 60px; flex-wrap: wrap;
}
.bro-pagination a {
    width: 46px; height: 46px;
    display: inline-flex; align-items: center; justify-content: center;
    border-radius: 12px; background: #fff;
    border: 1px solid var(--brar-border);
    color: var(--brar-navy); font-weight: 700;
    transition: all .25s;
}
.bro-pagination a:hover, .bro-pagination a.active {
    background: var(--brar-teal); color: #fff; border-color: var(--brar-teal);
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(29,210,195,.35);
}

/* ===== CTA Strip ===== */
.bro-cta-strip {
    background: linear-gradient(135deg, var(--brar-navy) 0%, var(--brar-teal-dark) 100%);
    color: #fff; padding: 50px 30px; border-radius: 22px;
    margin: 50px auto 0; max-width: 1200px;
    display: flex; align-items: center; justify-content: space-between;
    flex-wrap: wrap; gap: 20px;
    box-shadow: var(--shadow-md);
}
.bro-cta-strip h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem; margin-bottom: 6px;
}
.bro-cta-strip p { opacity: .9; font-size: 14px; }
.bro-cta-strip .cta-btn {
    background: var(--brar-orange); color: #fff;
    padding: 15px 32px; border-radius: 50px;
    font-weight: 700; font-size: 14px;
    display: inline-flex; align-items: center; gap: 8px;
    transition: all .3s;
    box-shadow: 0 8px 20px rgba(241,119,50,.4);
}
.bro-cta-strip .cta-btn:hover { background: var(--brar-orange-dark); transform: translateY(-3px); color: #fff; }

/* ===== Keyword Section ===== */
.keyword-section {
    background: #fff; padding: 60px 20px;
    border-top: 1px solid var(--brar-border);
}
.keyword-section .container {
    max-width: 1200px; margin: 0 auto;
}
.keyword-section h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem; color: var(--brar-navy);
    text-align: center; margin-bottom: 30px;
}
.keyword-grid {
    display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;
}
.keyword-grid a {
    flex: 0 1 auto;
    padding: 10px 20px;
    background: #fff;
    border: 1px solid var(--brar-border);
    border-left: 3px solid var(--brar-teal);
    border-radius: 8px;
    color: var(--brar-navy);
    font-size: 13px; font-weight: 500;
    transition: all .25s;
}
.keyword-grid a:hover {
    background: var(--brar-teal); color: #fff;
    border-color: var(--brar-teal);
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .blog-page-hero { padding: 80px 20px 70px; }
    .blog-grid { grid-template-columns: 1fr; gap: 24px; }
    .bro-cta-strip { flex-direction: column; text-align: center; padding: 35px 25px; }
    .blog-main { padding: 50px 16px; }
}
</style>

<div class="blog-listing-wrapper">

    <!-- Hero -->
    <section class="blog-page-hero">
        <div class="hero-inner">
            <h1>Eye Care <span>Insights & Articles</span></h1>
            <p class="lead">Expert guides on LASIK, SMILE Pro, cataract surgery, glaucoma, pediatric care and digital eye health from Brar Eye Hospital, Punjab.</p>
            <div class="crumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Eye Care Blog</span>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="blog-stats">
        <div class="stat"><i class="fas fa-newspaper"></i><strong><?php echo count($blogs); ?>+</strong><span>Expert Articles</span></div>
        <div class="stat"><i class="fas fa-user-md"></i><strong>15+</strong><span>Specialist Doctors</span></div>
        <div class="stat"><i class="fas fa-eye"></i><strong>50K+</strong><span>Patients Served</span></div>
        <div class="stat"><i class="fas fa-star"></i><strong>4.9/5</strong><span>Patient Rating</span></div>
    </div>

    <!-- Blog Grid -->
    <main class="blog-main">

        <div class="section-heading">
            <span class="eyebrow">Latest from our experts</span>
            <h2>Read, Learn & Protect Your Vision</h2>
            <p>Trusted, doctor-reviewed articles to help you understand eye health, surgical options and daily care for clearer vision.</p>
        </div>

        <div class="blog-grid">
            <?php foreach ($blogs as $blog): ?>
                <article class="bro-card">
                    <div class="img-wrap">
                        <img src="<?php echo $blog['image']; ?>"
                             alt="<?php echo htmlspecialchars($blog['title']); ?>"
                             loading="lazy"
                             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1559757175-08f2e09ce8d8?auto=format&fit=crop&w=900&q=80';">
                        <span class="badge"><?php echo $blog['category']; ?></span>
                    </div>
                    <div class="body">
                        <div class="meta">
                            <span><i class="far fa-calendar-alt"></i> <?php echo $blog['date']; ?></span>
                            <span><i class="far fa-user"></i> Brar Eye Hospital</span>
                        </div>
                        <h3><a href="<?php echo $blog['url']; ?>"><?php echo $blog['title']; ?></a></h3>
                        <p><?php echo $blog['desc']; ?></p>
                        <a href="<?php echo $blog['url']; ?>" class="read-more">
                            Read Full Article <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="bro-pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </div>

        <!-- CTA -->
        <div class="bro-cta-strip">
            <div>
                <h3>Need Personalized Eye Care Advice?</h3>
                <p>Book a consultation with our experienced eye specialists at Brar Eye Hospital, Bathinda.</p>
            </div>
            <a href="tel:+919876543210" class="cta-btn">
                <i class="fas fa-phone-alt"></i> Book Appointment
            </a>
        </div>
    </main>

    <!-- Keyword Section -->
    <section class="keyword-section">
        <div class="container">
            <h3>Find Eye Care Specialists Near You</h3>
            <div class="keyword-grid">
                <a href="https://brareyehospital.com/best-eye-hospital-in-bathinda.php">Best Eye Hospital In Bathinda</a>
                <a href="https://brareyehospital.com/cataract-surgery-in-bathinda.php">Cataract Surgery In Bathinda</a>
                <a href="https://brareyehospital.com/laser-eye-surgery-in-bathinda.php">Laser Eye Surgery In Bathinda</a>
                <a href="https://brareyehospital.com/glaucoma-treatment-in-bathinda.php">Glaucoma Treatment In Bathinda</a>
                <a href="https://brareyehospital.com/squint-eye-treatment-in-bathinda.php">Squint Eye Treatment In Bathinda</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-kotkapura.php">Best Eye Hospital In Kotkapura</a>
                <a href="https://brareyehospital.com/cataract-surgery-in-kotkapura.php">Cataract Surgery In Kotkapura</a>
                <a href="https://brareyehospital.com/laser-eye-surgery-in-kotkapura.php">Laser Eye Surgery In Kotkapura</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-mansa.php">Best Eye Hospital In Mansa</a>
                <a href="https://brareyehospital.com/cataract-surgery-in-mansa.php">Cataract Surgery In Mansa</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-patiala.php">Best Eye Hospital In Patiala</a>
                <a href="https://brareyehospital.com/cataract-surgery-in-patiala.php">Cataract Surgery In Patiala</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-sangrur.php">Best Eye Hospital In Sangrur</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-moga.php">Best Eye Hospital In Moga</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-barnala.php">Best Eye Hospital In Barnala</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-malout.php">Best Eye Hospital In Malout</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-dabwali.php">Best Eye Hospital In Dabwali</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-hanumangarh.php">Best Eye Hospital In Hanumangarh</a>
                <a href="https://brareyehospital.com/best-eye-hospital-in-sri-ganganagar.php">Best Eye Hospital In Sri Ganganagar</a>
            </div>
        </div>
    </section>

</div>

<?php include('footer.php'); ?>
