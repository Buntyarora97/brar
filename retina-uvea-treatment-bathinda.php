<?php
$pageTitle = "Retina & Uvea Treatments in Bathinda I BRAR EYE Hospital";
$pageDescription = "Expert care for retina and uvea diseases including diabetic retinopathy, macular degeneration. Retina & Uvea Treatments in Bathinda";
$pageKeywords = "retina treatment, uvea care, diabetic retinopathy";
include('header.php');
?>
<!-- Hero Banner -->
<section class="hero-banner retina-hero bg-gradient" data-aos="fade">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7" style="color: white;">
                <h1 style="color: white;">Retina & Uvea Treatments</h1>
                <p class="lead" style="color: white;">
                    Specialized treatments for retinal diseases and uveitis using cutting-edge technology to preserve and restore vision.
                </p>
                <a href="contact-brar-eye-hospital-bathinda.php" class="btn btn-primary btn-lg mt-3">Book Consultation</a>
            </div>
            <div class="col-lg-5">
                <img src="assets/images/retina/retina-specialist.webp" alt="Retina Specialist" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Introduction -->
<section class="section-padding mt-5 mb-5" data-aos="fade-up">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Understanding Retinal & Uveal Conditions</h2>
            <div class="divider mx-auto"></div>
            <p class="section-subtitle">The retina and uvea are critical structures that require expert care when affected by disease or injury.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4>Retina Function</h4>
                    <p>The light-sensitive layer at the back of your eye that converts light into neural signals. Learn more about <a href="retina-uvea-treatment-bathinda.php" style="color: #03c0b4;">retina</a> function and its importance in vision.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h4>Uvea Function</h4>
                    <p>The middle layer of the eye containing blood vessels that nourish the eye and regulate light.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h4>Warning Signs</h4>
                    <p>Floaters, flashes, blurred vision, or dark spots may indicate retinal problems like <a href="eye-care-services-bathinda.php" style="color: #03c0b4;">diabetic retinopathy</a> or <a href="eye-care-services-bathinda.php" style="color: #03c0b4;">macular degeneration</a>.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Timely Care</h4>
                    <p>Early detection and treatment can prevent vision loss from retinal diseases such as <a href="index.php" style="color: #03c0b4;">diabetic retinopathy</a> and <a href="eye-care-services-bathinda.php" style="color: #03c0b4;">macular degeneration</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conditions Treated -->
<section class="section-padding bg-light mt-5" data-aos="fade-up">
    <div class="container ">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Conditions We Treat</h2>
            <div class="divider mx-auto"></div>
            <p class="section-subtitle">Comprehensive management of retinal and uveal disorders</p>
        </div>
        
        <div class="row g-4">
            <?php
            $conditions = [
                [
                    "title" => "Diabetic Retinopathy",
                    "icon" => "fas fa-bolt",
                    "desc" => "Diabetes-related damage to retinal blood vessels that can cause vision loss. Learn more about <a href='eye-care-services-bathinda.php' style='color: #03c0b4;'>diabetic retinopathy</a>.",
                    "symptoms" => ["Blurred vision", "Dark spots", "Vision fluctuations"]
                ],
                [
                    "title" => "Retinal Detachment",
                    "icon" => "fas fa-layer-group",
                    "desc" => "Emergency condition where retina separates from underlying tissue.",
                    "symptoms" => ["Flashes of light", "New floaters", "Shadow in vision"]
                ],
                [
                    "title" => "Macular Degeneration",
                    "icon" => "fas fa-circle",
                    "desc" => "Breakdown of central retina causing central vision loss. Discover more about <a href='eye-care-services-bathinda.php' style='color: #03c0b4;'>macular degeneration</a>.",
                    "symptoms" => ["Blurred central vision", "Distorted lines", "Dark areas"]
                ],
                [
                    "title" => "Macular Hole",
                    "icon" => "fas fa-dot-circle",
                    "desc" => "Small break in macula affecting detailed central vision.",
                    "symptoms" => ["Central blur", "Distortion", "Difficulty reading"]
                ],
                [
                    "title" => "Retinal Vein Occlusion",
                    "icon" => "fas fa-water",
                    "desc" => "Blockage of retinal veins causing hemorrhages and swelling.",
                    "symptoms" => ["Sudden blur", "Painless vision loss", "Vein abnormalities"]
                ],
                [
                    "title" => "Uveitis",
                    "icon" => "fas fa-fire",
                    "desc" => "Inflammation of uvea causing pain, redness and vision loss.",
                    "symptoms" => ["Eye pain", "Light sensitivity", "Redness"]
                ],
                [
                    "title" => "Epiretinal Membrane",
                    "icon" => "fas fa-film",
                    "desc" => "Scar tissue on retina causing distortion and blur.",
                    "symptoms" => ["Metamorphopsia", "Blur", "Difficulty reading"]
                ],
                [
                    "title" => "Retinitis Pigmentosa",
                    "icon" => "fas fa-moon",
                    "desc" => "Genetic disorder causing progressive peripheral vision loss.",
                    "symptoms" => ["Night blindness", "Tunnel vision", "Photophobia"]
                ]
            ];
            
            foreach ($conditions as $cond) {
                echo '
                <div class="col-md-6 col-lg-3 mt-5 mb-5 ">
                    <div class="condition-card h-100">
                        <div class="condition-header">
                            <div class="condition-icon">
                                <i class="'.$cond["icon"].'"></i>
                            </div>
                            <h4>'.$cond["title"].'</h4>
                        </div>
                        <p>'.$cond["desc"].'</p>
                        <div class="condition-symptoms">
                            <h6>Symptoms:</h6>
                            <ul>';
                            foreach ($cond["symptoms"] as $symptom) {
                                echo '<li>'.$symptom.'</li>';
                            }
                            echo '</ul>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Diagnostic Technology -->
<section class="section-padding" data-aos="fade-up">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title mt-5">Advanced Diagnostics</h2>
            <div class="divider mx-auto"></div>
            <p class="section-subtitle">State-of-the-art imaging for precise diagnosis and treatment planning</p>
        </div>
        
        <div class="row g-4 align-items-center mb-5">
            <div class="col-lg-6">
                <div class="diagnostic-image">
                    <img src="assets/images/retina/amd.webp" alt="OCT Scan" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Comprehensive Retinal Evaluation</h3>
                <p>Our clinic utilizes the latest diagnostic technologies to accurately assess retinal and uveal conditions:</p>
                
                <div class="tech-list mt-4">
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-search-plus"></i>
                        </div>
                        <div class="tech-content">
                            <h5>Optical Coherence Tomography (OCT)</h5>
                            <p>High-resolution cross-sectional imaging of retinal layers with micron-level detail.</p>
                        </div>
                    </div>
                    
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div class="tech-content">
                            <h5>Ultra-Widefield Retinal Imaging</h5>
                            <p>200° view of retina to detect peripheral abnormalities often missed by standard exams.</p>
                        </div>
                    </div>
                    
                    <div class="tech-item">
                        <div class="tech-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="tech-content">
                            <h5>Fluorescein & ICG Angiography</h5>
                            <p>Dye-based imaging to evaluate retinal circulation and detect leakage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Treatment Options -->
<section class="section-padding bg-light" data-aos="fade-up">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Treatment Options</h2>
            <div class="divider mx-auto"></div>
            <p class="section-subtitle">Personalized therapies tailored to your specific condition</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="treatment-option h-100">
                    <div class="treatment-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h4>Intravitreal Injections</h4>
                    <p>Medications injected into the eye to treat wet AMD, diabetic edema, and retinal vein occlusion.</p>
                    <ul>
                        <li>Anti-VEGF therapy (Lucentis, Eylea, Avastin)</li>
                        <li>Steroid implants (Ozurdex)</li>
                        <li>In-office procedure with topical anesthesia</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="treatment-option h-100">
                    <div class="treatment-icon">
                        <i class="fas fa-laser"></i>
                    </div>
                    <h4>Laser Therapies</h4>
                    <p>Precise laser treatments for various retinal conditions.</p>
                    <ul>
                        <li>Focal laser for diabetic retinopathy</li>
                        <li>PRP for proliferative retinopathy</li>
                        <li>Photodynamic therapy for AMD</li>
                        <li>Barrier laser for retinal tears</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="treatment-option h-100">
                    <div class="treatment-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h4>Vitreoretinal Surgery</h4>
                    <p>Microsurgical procedures for complex retinal conditions.</p>
                    <ul>
                        <li>Vitrectomy for retinal detachment</li>
                        <li>Membrane peeling for epiretinal membranes</li>
                        <li>Macular hole repair</li>
                        <li>Minimally invasive techniques</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mt-5 mb-5">
                <div class="treatment-option h-100">
                    <div class="treatment-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h4>Medical Therapy</h4>
                    <p>Systemic treatments for inflammatory and infectious conditions.</p>
                    <ul>
                        <li>Immunosuppressants for uveitis</li>
                        <li>Antibiotics for infections</li>
                        <li>Oral supplements for AMD</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mt-5 mb-5">
                <div class="treatment-option h-100">
                    <div class="treatment-icon">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <h4>Retinal Prosthesis</h4>
                    <p>Advanced options for end-stage retinal disease.</p>
                    <ul>
                        <li>Argus II retinal implant</li>
                        <li>Low vision rehabilitation</li>
                        <li>Visual aids and adaptive technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Choose Us -->
<section class="section-padding mt-5" data-aos="fade-up">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="section-header mb-4 text-start">
                    <h2 class="section-title">Why Choose Our Retina Care</h2>
                    <div class="divider"></div>
                </div>
                
                <div class="advantages-list">
                    <div class="advantage-item">
                        <div class="advantage-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="advantage-content">
                            <h5>Retina Specialists</h5>
                            <p>Fellowship-trained vitreoretinal surgeons with extensive experience.</p>
                        </div>
                    </div>
                    
                    <div class="advantage-item">
                        <div class="advantage-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div class="advantage-content">
                            <h5>Advanced Technology</h5>
                            <p>Latest diagnostic and surgical equipment for precise treatment.</p>
                        </div>
                    </div>
                    
                    <div class="advantage-item">
                        <div class="advantage-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <div class="advantage-content">
                            <h5>Personalized Care</h5>
                            <p>Treatment plans tailored to your specific condition and needs.</p>
                        </div>
                    </div>
                    
                    <div class="advantage-item">
                        <div class="advantage-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="advantage-content">
                            <h5>Compassionate Approach</h5>
                            <p>We understand the anxiety of vision loss and provide supportive care.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="why-choose-image">
                    <img src="assets/images/retina/retina-specialist.webp" alt="Retina Specialist" class="img-fluid rounded shadow">
                    <div class="experience-badge">
                        <span>25+ Years</span>
                        <small>of Excellence</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Appointment CTA -->
<section class="cta-section section-padding bg-primary text-white" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="mb-3">Concerned About Your Retinal Health?</h3>
                <p class="mb-lg-0" style="color: white;">Early detection and treatment can preserve your vision. Schedule a comprehensive retinal evaluation today.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact-brar-eye-hospital-bathinda.php" class="btn btn-light btn-lg">Book Appointment</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<style>
    /* Hero Section */
    .retina-hero {
        background: linear-gradient(135deg, #03c0b4 0%, #0288d1 100%);
        color: white;
        padding: 100px 0;
    }
    
    .retina-hero h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .retina-hero .lead {
        font-size: 1.25rem;
        margin-bottom: 30px;
    }
    
    /* Section Styling */
    .section-header {
        margin-bottom: 50px;
    }
    
    .section-title {
        font-size: 2.25rem;
        color: #03c0b4;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .divider {
        width: 80px;
        height: 4px;
        background: #f17732;
        margin: 15px auto;
    }
    
    .section-subtitle {
        color: #555;
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }
    
    /* Feature Cards */
    .feature-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .icon-box {
        width: 70px;
        height: 70px;
        background: rgba(3, 192, 180, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    
    .icon-box i {
        color: #03c0b4;
        font-size: 30px;
    }
    
    /* Condition Cards */
    .condition-card {
        background: white;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .condition-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .condition-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .condition-icon {
        width: 50px;
        height: 50px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
    }
    
    .condition-icon i {
        color: #03c0b4;
        font-size: 20px;
    }
    
    .condition-symptoms {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #eee;
    }
    
    .condition-symptoms h6 {
        font-size: 0.9rem;
        color: #f17732;
        margin-bottom: 8px;
    }
    
    .condition-symptoms ul {
        padding-left: 20px;
        margin-bottom: 0;
    }
    
    .condition-symptoms li {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 5px;
    }
    
    /* Tech List */
    .tech-list {
        margin-top: 30px;
    }
    
    .tech-item {
        display: flex;
        margin-bottom: 20px;
    }
    
    .tech-icon {
        width: 50px;
        height: 50px;
        background: rgba(3, 192, 180, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .tech-icon i {
        color: #03c0b4;
        font-size: 20px;
    }
    
    .tech-content h5 {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 5px;
    }
    
    .tech-content p {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 0;
    }
    
    /* Treatment Options */
    .treatment-option {
        background: white;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .treatment-option:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .treatment-icon {
        width: 60px;
        height: 60px;
        background: rgba(3, 192, 180, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .treatment-icon i {
        color: #03c0b4;
        font-size: 24px;
    }
    
    .treatment-option h4 {
        font-size: 1.3rem;
        color: #333;
        margin-bottom: 15px;
    }
    
    .treatment-option p {
        color: #666;
        margin-bottom: 15px;
    }
    
    .treatment-option ul {
        padding-left: 20px;
        margin-bottom: 0;
    }
    
    .treatment-option li {
        font-size: 0.9rem;
        color: #555;
        margin-bottom: 8px;
    }
    
    /* Why Choose Us */
    .advantages-list {
        margin-top: 30px;
    }
    
    .advantage-item {
        display: flex;
        margin-bottom: 25px;
    }
    
    .advantage-icon {
        width: 50px;
        height: 50px;
        background: rgba(3, 192, 180, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .advantage-icon i {
        color: #03c0b4;
        font-size: 20px;
    }
    
    .advantage-content h5 {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 5px;
    }
    
    .advantage-content p {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 0;
    }
    
    .why-choose-image {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .experience-badge {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: #f17732;
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        text-align: center;
    }
    
    .experience-badge span {
        font-size: 1.5rem;
        font-weight: 700;
        display: block;
        line-height: 1;
    }
    
    .experience-badge small {
        font-size: 0.8rem;
    }
    
    /* Resource Cards */
    .resource-card {
        background: white;
        border-radius: 10px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .resource-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .resource-icon {
        width: 60px;
        height: 60px;
        background: rgba(3, 192, 180, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
    }
    
    .resource-icon i {
        color: #03c0b4;
        font-size: 24px;
    }
    
    .resource-card h5 {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 10px;
    }
    
    .resource-card p {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 15px;
    }
    
    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #03c0b4 0%, #0288d1 100%);
        padding: 60px 0;
    }
    
    .cta-section h3 {
        font-size: 1.8rem;
        font-weight: 700;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .retina-hero h1 {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
    }
    
    @media (max-width: 767px) {
        .retina-hero {
            text-align: center;
            padding: 80px 0;
        }
        
        .retina-hero h1 {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.75rem;
        }
        
        .why-choose-image {
            margin-top: 30px;
        }
    }
</style>

<script>
    AOS.init({
        once: true,
        duration: 800,
        delay: 100
    });
</script>