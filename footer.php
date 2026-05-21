<!-- Google reCAPTCHA Script (ADD ONCE ON PAGE) -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section id="brar-contact-section"
style="
max-width:900px;
margin:40px auto;
border-radius:16px;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
box-shadow:0 15px 35px rgba(0,0,0,0.1);
background:#fff;
color:#333;
overflow:hidden;
border:1px solid #eee;
">

  <div style="display:flex; align-items:stretch; flex-wrap:wrap;">

    <div style="flex:1; min-width:300px; padding:40px;">

      <h2 style="
      text-align:left;
      font-size:26px;
      margin-bottom:25px;
      font-weight:700;
      color:#333;
      border-left:5px solid #1dd2c3;
      padding-left:15px;">
        Book an Appointment
      </h2>

      <form action="/contact_section/form-process.php"
            method="POST"
            style="display:flex; flex-direction:column; gap:18px;">

        <!-- Honeypot -->
        <div style="display:none;">
          <input type="text" name="website_url" value="">
        </div>

        <!-- Name & Mobile -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <input type="text" name="name" placeholder="Full Name" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
            
            <input type="text" name="mobile" placeholder="Mobile Number" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
        </div>

        <!-- Email & Age -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">
            <input type="email" name="email" placeholder="Email Address" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
            
            <input type="number" name="age" placeholder="Age" required
            style="width:100px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">
        </div>

        <!-- Doctor & Branch -->
        <div style="display:flex; gap:15px; flex-wrap:wrap;">

            <select name="doctor" required class="ignore"
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none; appearance:auto; -webkit-appearance:auto; cursor:pointer;">

                <option value="" disabled selected>Choose Doctor</option>

                <option value="Dr. P.S. Brar">Dr. P.S. Brar – Medical Director & Chief Eye Surgeon</option>
                <option value="Dr. M.S. Brar">Dr. M.S. Brar – Senior Cataract & Paediatric Surgeon</option>
                <option value="Dr. J.K. Gupta">Dr. J.K. Gupta – Senior Consultant Ophthalmologist</option>
                <option value="Dr. Sunny Goyal">Dr. Sunny Goyal – Cataract & Glaucoma Surgeon</option>
                <option value="Dr. Anand Singh Brar">Dr. Anand Singh Brar – Vitreo-Retina Consultant</option>
                <option value="Dr. B. Ravinder Naik">Dr. B. Ravinder Naik – Cataract, Strabismus & Pediatric Ophthalmology Consultant</option>
                <option value="Dr. Aazambir Singh Brar">Dr. Aazambir Singh Brar – Cataract, Refractive & Vitreo-Retina Surgeon</option>

            </select>

            <select name="branch" required class="ignore"
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none; appearance:auto; -webkit-appearance:auto; cursor:pointer;">

                <option value="" disabled selected>Select Branch</option>
                <option value="Kotkapura">Kotkapura</option>
                <option value="Bathinda">Bathinda</option>

            </select>

        </div>

        <!-- Description -->
        <textarea name="description" rows="3"
        placeholder="Briefly describe your eye concern..."
        required
        style="padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; resize:none; outline:none;"></textarea>

        <!-- RECAPTCHA -->
        <div style="transform:scale(0.9); transform-origin:0 0;">
            <div class="g-recaptcha" data-sitekey="6Lcr63AsAAAAAFh4z7-avvXy9-Zi7PnJuFM40IG6"></div>
        </div>

        <!-- Button -->
        <button type="submit"
        style="
        padding:15px;
        background:linear-gradient(to right,#1dd2c3,#18b3a5);
        color:#ffffff;
        border:none;
        border-radius:8px;
        font-size:16px;
        font-weight:600;
        cursor:pointer;
        box-shadow:0 8px 20px rgba(29,210,195,0.3);
        text-transform:uppercase;
        letter-spacing:1px;">
          Confirm Appointment
        </button>

      </form>

    </div>

  </div>

</section>


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
        
    </div>


    <!-- jequery plugins -->

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
   
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>

<style>
    /* Style for footer logo */
.footer-logo .logo img {
    max-width: 150px; /* Set a max width for the footer logo */
    height: auto;   
    background-color: white;  /* Maintain aspect ratio */
}

/* Adjust logo size for smaller screens (mobile/tablet) */
@media (max-width: 768px) {
    .footer-logo .logo img {
        max-width: 100px;  /* Reduce logo size on smaller screens */
    }
}



.footer-menu .dropdown-container {
        position: relative;
    }
  
  
    
    
    .footer-dropdown li a:hover {
        background-color: #f17732;
        color: white;
    }
    
    .footer-menu .dropdown-container:hover .footer-dropdown {
        display: block;
    }
    
    /* Add a small down arrow */
    .footer-menu .dropdown-container .fa-chevron-down {
        font-size: 12px;
        margin-left: 5px;
        transition: transform 0.3s ease;
    }
    
    .footer-menu .dropdown-container:hover .fa-chevron-down {
        transform: rotate(180deg);
    }
    
    /* Make sure footer menu items have proper spacing */
    .footer-menu > li {
        margin: 0 15px;
    }
    
    /* Adjust dropdown position for mobile */
    @media (max-width: 767px) {
        .footer-dropdown {
            position: static;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 0;
        }
        
        .footer-menu > li {
            margin: 10px 0;
        }
    }

</style>










<!-- main-footer -->
<footer class="main-footer p_relative">
    
    
    
    
    
    
    
    
    <div class="footer-top">
        <div class="auto-container">
            <div class="top-inner" style="text-align: center; margin-left:500px; margin-bottom: 20px;">
                <div class="footer-logo" style="display: inline-block;">
                    <figure class="logo">
                        <a href="index.php">
                            <img src="assets\images\logo1.webp" alt="Brar Eye Hospital Logo" style="max-width: 150px; height: auto; background-color: white;">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-section">
        <div class="auto-container">
            <div class="row clearfix" style="display: flex; flex-wrap: wrap; align-items: flex-start;">
                
                <!-- Left content -->
                <div class="footer-column" style="flex: 1 1 50%; padding-right: 20px; min-width: 300px;">
                    <div class="about-widget footer-widget mr_40">
                        <div class="widget-title">
                            <h3>About Brar Eye Hospital</h3>
                        </div>
                        <div class="widget-content">
                            <p>Brar Eye Hospital is a leading eye care center dedicated to providing world-class ophthalmic services with advanced technology and compassionate care. With locations in Bathinda and KotKapura, our team of experienced eye specialists offers comprehensive treatments ranging from routine eye check-ups to complex surgeries. At Brar Eye Hospital, patient satisfaction, safety, and clear vision are our top priorities.</p>
                           <ul class="social-links clearfix" style="padding-left: 0; list-style: none; display: flex; gap: 10px;">
    <li>
        <a href="https://www.facebook.com/brareyehospitals" target="_blank" style="color: white;">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <li>
        <a href="https://www.youtube.com/channel/UCZYhxYnJ5HiVy0GLffaDM-g" target="_blank" style="color: white;">
            <i class="fab fa-youtube"></i>
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/brareyehospital/" target="_blank" style="color: white;">
            <i class="fab fa-instagram"></i>
        </a>
    </li>
    <!--<li>-->
    <!--    <a href="https://www.linkedin.com/company/brar-eye-hospital-pvt-ltd" target="_blank" style="color: white;">-->
    <!--        <i class="fab fa-linkedin-in"></i>-->
    <!--    </a>-->
    <!--</li>-->
</ul>

                        </div>
                    </div>

                    <div class="contact-widget footer-widget ml_50" style="margin-top: 30px;">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info clearfix" style="padding-left: 0; list-style: none;">
                                <li><strong style="color:#f17732;">Bathinda Address:</strong> Near Rose Garden Chowk, GT Road, Bathinda – 151001</li>
                                <li><strong style="color:#f17732;">KotKapura Address:</strong> Faridkot Rd, KotKapura, Punjab 151204</li>
                                <li><strong style="color:#f17732;">Phone:</strong> <a href="tel:7218272182"> +91 7218272182 </a></li>
                                <li><strong style="color:#f17732;">Email:</strong> <a href="mailto:brareyehospitals@gmail.com"> brareyehospitals@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right video -->
                <div class="footer-column" style="flex: 1 1 50%; min-width: 300px; padding-left: 20px;">
                    <div style="position: relative; padding-top: 56.25%; /* 16:9 Aspect Ratio */ overflow: hidden; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                            <source src="assets\images\background\BRAR EYE VIDEO.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Cities We Serve Section -->
<div style="background:#0a1e2e;padding:48px 0 36px;border-top:1px solid rgba(255,255,255,0.07)">
  <div class="auto-container">
    <h3 style="color:#1dd2c3;font-size:1.25rem;margin-bottom:24px;font-weight:700;letter-spacing:.5px;text-align:center">Cities We Serve Across Punjab</h3>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:28px 40px">

      <!-- Existing major cities -->
      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Bathinda</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-bathinda.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Hospital</a></li>
          <li><a href="best-eye-doctor-in-bathinda.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Doctor</a></li>
          <li><a href="cataract-surgery-in-bathinda.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Surgery</a></li>
          <li><a href="retina-specialist-in-bathinda.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist</a></li>
          <li><a href="glaucoma-treatment-in-bathinda.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Glaucoma Treatment</a></li>
          <li><a href="eye-hospital-gallery-bathinda.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Photo Gallery</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Kotkapura</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-kotkapura.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Hospital</a></li>
          <li><a href="best-eye-doctor-in-kotkapura.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Doctor</a></li>
          <li><a href="cataract-surgery-in-kotkapura.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Surgery</a></li>
          <li><a href="retina-specialist-in-kotkapura.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Ludhiana</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-ludhiana.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Hospital</a></li>
          <li><a href="best-eye-doctor-in-ludhiana.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Doctor</a></li>
          <li><a href="cataract-surgery-in-ludhiana.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Surgery</a></li>
          <li><a href="lasik-surgery-in-ludhiana.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Surgery</a></li>
          <li><a href="glaucoma-treatment-in-ludhiana.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Glaucoma Treatment</a></li>
          <li><a href="retina-specialist-in-ludhiana.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Jalandhar</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-jalandhar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Hospital</a></li>
          <li><a href="best-eye-doctor-in-jalandhar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Doctor</a></li>
          <li><a href="cataract-surgery-in-jalandhar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Surgery</a></li>
          <li><a href="lasik-surgery-in-jalandhar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Surgery</a></li>
          <li><a href="glaucoma-treatment-in-jalandhar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Glaucoma Treatment</a></li>
          <li><a href="retina-specialist-in-jalandhar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Mohali / Chandigarh</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-mohali.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Mohali</a></li>
          <li><a href="lasik-surgery-in-mohali.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Surgery Mohali</a></li>
          <li><a href="retina-specialist-in-mohali.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist Mohali</a></li>
          <li><a href="best-eye-hospital-in-chandigarh.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Chandigarh</a></li>
          <li><a href="lasik-surgery-in-chandigarh.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Chandigarh</a></li>
          <li><a href="retina-specialist-in-chandigarh.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Chandigarh</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Amritsar</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-amritsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Hospital</a></li>
          <li><a href="best-eye-doctor-in-amritsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Doctor</a></li>
          <li><a href="cataract-surgery-in-amritsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Surgery</a></li>
          <li><a href="retina-specialist-in-amritsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist</a></li>
          <li><a href="smile-pro-surgery-in-amritsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Surgery</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Patiala</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-patiala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Hospital</a></li>
          <li><a href="best-eye-doctor-in-patiala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Best Eye Doctor</a></li>
          <li><a href="cataract-surgery-in-patiala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Surgery</a></li>
          <li><a href="retina-specialist-in-patiala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist</a></li>
          <li><a href="smile-pro-surgery-in-patiala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Surgery</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Moga &amp; Mansa</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-moga.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Moga</a></li>
          <li><a href="retina-specialist-in-moga.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist Moga</a></li>
          <li><a href="smile-pro-surgery-in-moga.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Moga</a></li>
          <li><a href="best-eye-hospital-in-mansa.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Mansa</a></li>
          <li><a href="retina-specialist-in-mansa.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Specialist Mansa</a></li>
          <li><a href="smile-pro-surgery-in-mansa.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Mansa</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Sangrur &amp; Barnala</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-sangrur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Sangrur</a></li>
          <li><a href="retina-specialist-in-sangrur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Sangrur</a></li>
          <li><a href="smile-pro-surgery-in-sangrur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Sangrur</a></li>
          <li><a href="best-eye-hospital-in-barnala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Barnala</a></li>
          <li><a href="smile-pro-surgery-in-barnala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Barnala</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Ferozepur &amp; Muktsar</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-ferozepur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Ferozepur</a></li>
          <li><a href="retina-specialist-in-ferozepur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Ferozepur</a></li>
          <li><a href="smile-pro-surgery-in-ferozepur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Ferozepur</a></li>
          <li><a href="best-eye-hospital-in-muktsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Muktsar</a></li>
          <li><a href="retina-specialist-in-muktsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Retina Muktsar</a></li>
          <li><a href="smile-pro-surgery-in-muktsar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Muktsar</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Pathankot &amp; Gurdaspur</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-pathankot.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Pathankot</a></li>
          <li><a href="cataract-surgery-in-pathankot.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Pathankot</a></li>
          <li><a href="lasik-surgery-in-pathankot.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Pathankot</a></li>
          <li><a href="best-eye-hospital-in-gurdaspur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Gurdaspur</a></li>
          <li><a href="cataract-surgery-in-gurdaspur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Gurdaspur</a></li>
          <li><a href="lasik-surgery-in-gurdaspur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Gurdaspur</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Hoshiarpur &amp; Kapurthala</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-hoshiarpur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Hoshiarpur</a></li>
          <li><a href="cataract-surgery-in-hoshiarpur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Hoshiarpur</a></li>
          <li><a href="lasik-surgery-in-hoshiarpur.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Hoshiarpur</a></li>
          <li><a href="best-eye-hospital-in-kapurthala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Kapurthala</a></li>
          <li><a href="cataract-surgery-in-kapurthala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Kapurthala</a></li>
          <li><a href="lasik-surgery-in-kapurthala.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Kapurthala</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Faridkot &amp; Nawanshahr</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-faridkot.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Faridkot</a></li>
          <li><a href="cataract-surgery-in-faridkot.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Faridkot</a></li>
          <li><a href="lasik-surgery-in-faridkot.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Faridkot</a></li>
          <li><a href="best-eye-hospital-in-nawanshahr.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Nawanshahr</a></li>
          <li><a href="cataract-surgery-in-nawanshahr.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Cataract Nawanshahr</a></li>
          <li><a href="lasik-surgery-in-nawanshahr.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">LASIK Nawanshahr</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Abohar, Malout &amp; Fazilka</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-abohar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Abohar</a></li>
          <li><a href="smile-pro-surgery-in-abohar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">SMILE Pro Abohar</a></li>
          <li><a href="best-eye-hospital-in-malout.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Malout</a></li>
          <li><a href="best-eye-hospital-in-fazilka.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Fazilka</a></li>
          <li><a href="best-eye-hospital-in-jalalabad.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Jalalabad</a></li>
          <li><a href="best-eye-hospital-in-dabwali.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Dabwali</a></li>
        </ul>
      </div>

      <div>
        <h4 style="color:#f17732;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:6px">Rajasthan &amp; Haryana</h4>
        <ul style="list-style:none;padding:0;margin:0">
          <li><a href="best-eye-hospital-in-sirsa.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Sirsa</a></li>
          <li><a href="best-eye-hospital-in-hanumangarh.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Hanumangarh</a></li>
          <li><a href="best-eye-hospital-in-sri-ganganagar.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Sri Ganganagar</a></li>
          <li><a href="best-eye-hospital-in-tarn-taran.php" style="color:#b0c4d0;font-size:.85rem;text-decoration:none;line-height:2.1">Eye Hospital Tarn Taran</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>
<!-- End Cities We Serve Section -->

<div class="footer-bottom centred">
    <div class="auto-container">
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> All Right Reserved</p>
            <p>
                Created With ❤️ By
                <a href="https://digitaldots.in/" target="_blank" style="color: inherit; text-decoration: none; font-weight: 600;">
                    Digital Dots
                </a>
            </p>
        </div>
    </div>  
</div>

</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const toggles = document.querySelectorAll(".dropdown-toggle");
  
    toggles.forEach(function (toggle) {
        toggle.addEventListener("click", function () {
            let dropdown = this.nextElementSibling;

            // Close all other dropdowns
            document.querySelectorAll(".footer-dropdown").forEach(function (menu) {
                if (menu !== dropdown) {
                    menu.style.display = "none";
                }
            });

            // Toggle current dropdown
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        });
    });

    // Optional: close dropdowns when clicking outside
    document.addEventListener("click", function(e){
        if (![...toggles].some(toggle => toggle.contains(e.target))) {
            document.querySelectorAll(".footer-dropdown").forEach(function (menu) {
                menu.style.display = "none";
            });
        }
    });
});

</script>
