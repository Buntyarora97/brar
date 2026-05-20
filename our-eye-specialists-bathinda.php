<?php
$pageTitle = "Our Expert Team - Brar Eye Hospital";
$pageDescription = "Meet the expert doctors, surgeons, and staff dedicated to your eye care.";
$pageKeywords = "eye specialists, eye doctors, lasik surgery cost, eyesight operation, glaucoma treatment";
include('header.php');
?>

<!-- 🌟 Page Title: Our Team -->
<section class="team-page-title">
  <!-- Background Layer -->
  <div class="team-bg-layer"></div>

  <!-- Content Container -->
  <div class="team-container">
    <div class="team-content">
      <h1></h1>
      <ul class="team-breadcrumb">
        <li><a href="index.php"></a></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
</section>

<!-- 💅 CSS Styling -->
<style>
/* ====== Team Page Title Section ====== */
.team-page-title {
  position: relative;
  width: 100%;
  padding: 100px 20px;
  text-align: center;
  box-sizing: border-box;
  overflow: hidden;
  z-index: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Background with gradient overlay for better readability */
.team-bg-layer {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('assets/images/background/4 (2).webp');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  transition: transform 1.2s ease;
  z-index: 1;
}

.team-page-title:hover .team-bg-layer {
  transform: scale(1.05);
}

.team-container {
  position: relative;
  z-index: 2;
  max-width: 1100px;
  margin: 0 auto;
  color: #fff;
}

.team-content h1 {
  font-size: 3rem;
  font-weight: 700;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 15px;
  text-shadow: 0 3px 10px rgba(0, 0, 0, 0.5);
  animation: fadeDown 1s ease both;
}

.team-breadcrumb {
  list-style: none;
  display: inline-flex;
  gap: 8px;
  justify-content: center;
  padding: 0;
  margin: 0;
  font-size: 1.1rem;
  color: #ffffff;
  font-weight: 500;
  animation: fadeUp 1s ease both;
}

.team-breadcrumb li {
  color: #f1f1f1;
}

.team-breadcrumb a {
  color: #1dd2c3;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s ease, text-shadow 0.3s ease;
}

.team-breadcrumb a:hover {
  color: #f17732;
  text-shadow: 0 0 6px rgba(241, 119, 50, 0.7);
}

/* ====== Animations ====== */
@keyframes fadeDown {
  from { opacity: 0; transform: translateY(-15px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeUp {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ====== Responsive Design ====== */
@media (max-width: 992px) {
  .team-content h1 {
    font-size: 2.4rem;
  }
}

@media (max-width: 768px) {
  .team-page-title {
    padding: 80px 15px !important;
  }

  .team-content h1 {
    font-size: 1.9rem !important;
    line-height: 1.3;
  }

  .team-breadcrumb {
    flex-direction: column;
    font-size: 0.95rem !important;
    gap: 4px;
  }

  .team-breadcrumb li:nth-child(2) {
    display: none !important;
  }
}

@media (max-width: 480px) {
  .team-content h1 {
    font-size: 1.6rem !important;
  }
  .team-page-title {
    padding: 60px 10px !important;
  }
}
</style>


<section class="profile-section">
    <div class="profile-img-container">
      <img src="assets/images/team/123.webp" alt="Dr. P.S Brar" />
    </div>
    <div class="profile-content">
      <h1>Dr P.S Brar</h1>
      <div class="subtitle">
        Medical Director & Chief Eye Surgeon – Brar Eye Hospital
      </div>
      <p>
        <strong>Dr. P.S. Brar</strong>, the visionary behind <strong>Brar Eye Hospital</strong>, is a highly respected <b>ophthalmologist</b> known for his <b>surgical excellence</b> and <b>compassionate care</b>.
        A graduate and post-graduate from <strong>Dayanand Medical College & Hospital, Ludhiana</strong>, he pioneered <b>Phacoemulsification and LASIK Laser surgery</b> in <b>South Punjab and the Malwa region</b>.
      </p>
      <p>
        With <b>advanced training from the USA and Chennai</b>, he has <b>transformed eye care in the region</b>. Dr. Brar is not only a <b>skilled surgeon</b> but also a <b>dedicated social contributor</b> and a <b>revered figure in the medical community</b>.
        Under his <b>dynamic leadership</b>, the hospital continues to <b>reach new heights</b>.
      </p>
    </div>
  </section>
 <style>
    .profile-section {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-img-container {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content {
      flex: 1 1 56%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-content h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content .subtitle {
      font-style: italic;
      text-align: center;
      font-size: 1.25rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content p {
      font-size: 1.15rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.7;
      font-weight: 400;
    }
    .profile-content b, .profile-content strong {
      font-weight: 700;
      color: #fd7e14;
    }
    @media (max-width: 850px) {
      .profile-section {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container img {
        width: 230px;
        height: 260px;
      }
      .profile-content h1 {
        font-size: 2rem;
      }
    }
  </style>


<!-- ---------------------------- -->




<!----------------------------------- 2 -->

<style>
    .profile-section3 {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-img-container3 {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container3 img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content3 {
      flex: 1 1 58%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-content3 h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content3 .subtitle3 {
      font-style: italic;
      text-align: center;
      font-size: 1.22rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content3 p {
      font-size: 1.1rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.65;
      font-weight: 400;
    }
    .profile-content3 b, .profile-content3 strong {
      font-weight: 700;
      color: #253662;
    }
    @media (max-width: 850px) {
      .profile-section3 {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container3 img {
        width: 230px;
        height: 260px;
      }
      .profile-content3 h1 {
        font-size: 2rem;
      }
    }
  </style>

    <section class="profile-section3">
    <div class="profile-img-container3">
      <img src="assets/images/team/12345.webp" alt="Dr. Sunny Goyal" />
    </div>
    <div class="profile-content3">
      <h1>Dr. Sunny Goyal</h1>
      <div class="subtitle3">
        Cataract & Glaucoma Consultant – Brar Eye Hospital
      </div>
      <p>
        Dr. Sunny Goyal brings dedicated expertise to the <strong>Cataract and Glaucoma Department</strong> at Brar Eye Hospital. He completed his <strong>MBBS from SBH Government Medical College, Dhule</strong>, and <strong>MS in Ophthalmology from MRMC, Gulbarga</strong>. He further enhanced his skills with a <strong>fellowship in General Ophthalmology</strong> and <strong>advanced training in Phacoemulsification at Sankara Eye Care Institute, Shimoga</strong>.
      </p>
      <p>
        Having served as a <strong>Cataract Consultant at Grewal Eye Institute, Chandigarh</strong>, Dr. Goyal specializes in <strong>sutureless cataract surgery</strong> and <strong>phacoemulsification</strong>, providing <strong>exceptional eye care with precision and compassion</strong>.
      </p>
    </div>
  </section>


<!-- ......................3 -->
<style>
    .profile-section5 {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-img-container5 {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container5 img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content5 {
      flex: 1 1 58%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-content5 h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content5 .subtitle5 {
      font-style: italic;
      text-align: center;
      font-size: 1.22rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content5 p {
      font-size: 1.1rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.65;
      font-weight: 400;
    }
    .profile-content5 b, .profile-content5 strong {
      font-weight: 700;
      color: #253662;
    }
    @media (max-width: 850px) {
      .profile-section5 {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container5 img {
        width: 230px;
        height: 260px;
      }
      .profile-content5 h1 {
        font-size: 2rem;
      }
    }
  </style>

 
  <section class="profile-section5">
    <div class="profile-img-container5">
      <!-- Update the image source to your specific dr ms brar image -->
      <img src="assets/images/team/1234.webp" alt="Dr. M.S. Brar" />
    </div>
    <div class="profile-content5">
      <h1>Dr. M.S. Brar</h1>
      <div class="subtitle5">
        Cataract & Paediatric Surgeon
      </div>
      <p>
        <strong>Dr. M.S. Brar</strong> is a highly experienced <strong>Cataract and Paediatric Surgeon</strong> with <strong>over 30 years in ophthalmology</strong>. An <strong>alumnus of Govt. Medical College, Patiala</strong>, and holder of <strong>FRCS (I), UK</strong>, he <strong>pioneered stitch-less cataract surgery</strong> in the public sector. After serving as a <strong>senior eye surgeon in government hospitals</strong> and conducting <strong>thousands of surgeries in community eye camps</strong>, he now brings his expertise to <strong>Brar Eye Hospital</strong>, focusing on <strong>paediatric and cataract care</strong> with <strong>compassion and precision</strong>.
      </p>
    </div>
  </section>


<!-- 4 -->
 <!-- 2. Dr. Anand Singh Brar (Image Right, Content Left) -->
  <section class="profile-section content-left">
    <div class="profile-content">
      <h1>Dr. Anand Singh Brar</h1>
      <div class="subtitle">
        Vitreo-Retina Surgeon
      </div>
      <p>
        Dr. Anand Singh Brar is a dedicated <strong>Vitreo-Retina Surgeon</strong> with extensive experience in diagnosing and managing complex retinal disorders. 
        He is skilled in <strong>Retinal Detachment Surgery</strong>, <strong>Diabetic Retinopathy</strong>, and <strong>Macular Degeneration</strong> treatment.
        Known for his precision and patient-centered care, Dr. Brar brings advanced surgical expertise to Brar Eye Hospital’s retina services, offering tailored solutions for both adult and pediatric retinal conditions.
      </p>
    </div>
    <div class="profile-img-container">
      <img src="assets/images/team/55.webp" alt="Dr. Anand Singh Brar" />
    </div>
  </section>
  
  
  <!--5-->
  <!-- 4. Dr. Aazambir Singh Brar (Image Right, Content Left) -->
  <section class="profile-section content-left">
   
    <div class="profile-content">
      <h1>Dr. Aazambir Singh Brar</h1>
      <div class="subtitle">
        Vitreo-Retina Surgeon
      </div>
      <p>
        Dr. Aazambir Singh Brar is a dedicated Vitreo-Retina Surgeon committed to providing advanced retinal care. 
        With strong academic foundations and specialized training in managing complex retinal disorders, he focuses on delivering precision treatment in diabetic retinopathy, retinal detachment, macular degeneration, and other vitreo-retinal conditions.
        Dr. Brar combines clinical expertise with a patient-first approach, making him an integral part of the retina team at Brar Eye Hospital.
      </p>
    </div>
     <div class="profile-img-container">
      <img src="assets/images/team/team-51.webp" alt="Dr. Aazambir Singh Brar" />
    </div>
  </section>
  
  
<style>
    .profile-section4 {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-content4 {
      flex: 1 1 60%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-img-container4 {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container4 img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content4 h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content4 .subtitle4 {
      font-style: italic;
      text-align: center;
      font-size: 1.22rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content4 p {
      font-size: 1.1rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.65;
      font-weight: 400;
    }
    .profile-content4 b, .profile-content4 strong {
      font-weight: 700;
      color: #253662;
    }
    @media (max-width: 850px) {
      .profile-section4 {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container4 img {
        width: 230px;
        height: 260px;
      }
      .profile-content4 h1 {
        font-size: 2rem;
      }
    }
  </style>
<!--6-->
 <!-- -----------------------------------------  --> 


  <style>
    .profile-section7 {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-img-container7 {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container7 img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content7 {
      flex: 1 1 64%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-content7 h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content7 .subtitle7 {
      font-style: italic;
      text-align: center;
      font-size: 1.22rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content7 p {
      font-size: 1.1rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.65;
      font-weight: 400;
      text-align: left;
    }
    .profile-content7 b, .profile-content7 strong {
      font-weight: 700;
      color: #253662;
    }
    @media (max-width: 850px) {
      .profile-section7 {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container7 img {
        width: 230px;
        height: 260px;
      }
      .profile-content7 h1 {
        font-size: 2rem;
      }
    }
  </style>

  <section class="profile-section7">
   <div class="profile-img-container7">
      <!-- Update this image source as needed -->
      <img src="assets/images/team/53.webp" alt="Dr. B. Ravinder Naik" />
    </div>
    <div class="profile-content7">
      <h1>Dr. B. Ravinder Naik</h1>
      <div class="subtitle7">
        Cataract, Strabismus, Pediatric & Neuro-Ophthalmology Consultant
      </div>
      <p>
        Dr. B. Ravinder Naik is an experienced consultant specializing in <strong>Cataract, Strabismus, Pediatric Ophthalmology</strong>, and <strong>Neuro-Ophthalmology</strong>. He completed his <strong>MBBS and MD from the prestigious AIIMS, New Delhi</strong>, and further pursued specialization in <strong>Strabismus and Pediatric Ophthalmology at Maulana Azad Medical College (MAMC), Delhi</strong>. Dr. Naik brings a compassionate approach and sharp clinical expertise in managing complex eye conditions across all age groups.
      </p>
    </div>
     
  </section>
  
  <!--7-->
  <section class="profile-section4">
       <div class="profile-img-container4">
      <img src="assets/images/team/imgi_5_dr-raman.webp" alt="Dr. Raman Mittal" />
    </div>
    <div class="profile-content4">
      <h1>Dr. Raman Mittal</h1>
      <div class="subtitle4">
        Oculoplastic, Orbital Disease & Ocular Oncology Surgeon – Brar Eye Hospital
      </div>
      <p>
        Dr. Raman Mittal is a skilled <strong>Oculoplastic Surgeon</strong> with advanced training from <strong>L.V. Prasad Eye Institute</strong>, and international observerships at <strong>University of Rochester, New York</strong> and <strong>Tampa, Florida (USA)</strong>.
        He specializes in <strong>eyelid, orbital, lacrimal, and ocular tumor surgeries</strong>.
      </p>
      <p>
        With years of experience at <strong>Venu Eye Institute, New Delhi</strong>, and <strong>over 1000 successful eye surgeries</strong>, Dr. Mittal is committed to delivering <strong>cutting-edge care</strong> with a focus on <strong>aesthetic and ophthalmic plastic surgery</strong>.
      </p>
    </div>
   
  </section>

  <!--8 ---------------------------------------  -->

  <!--<section class="profile-section content-left">-->
  <!--  <div class="profile-img-container">-->
  <!--    <img src="assets/images/team/kushdeep.webp" />-->
  <!--  </div>-->
  <!--  <div class="profile-content">-->
  <!--    <h1>Dr. Kushdeep Kaur  </h1>-->
  <!--    <div class="subtitle">-->
       
  <!--    </div>-->
  <!--    <p>-->
  <!--      Dr. Kushdeep Kaur making him an integral part of the retina team at Brar Eye Hospital.-->
  <!--    </p>-->
  <!--  </div>-->
  
  <!--</section>-->
  
  <!--9-->
  <section class="profile-section content-left">
    
    <div class="profile-content">
      <h1>Dr.Rabia Saif </h1>
      <div class="subtitle">
        Consultant Ophthalmologist
      </div>
      <p>
      
      </p>
    </div>
    <div class="profile-img-container">
      <img src="assets/images/team/kushdeep.webp" />
    </div>
  </section>

  <!--9 ------------------------------------  -->

   <style>
    .profile-section6 {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-content6 {
      flex: 1 1 60%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-img-container6 {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container6 img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content6 h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content6 .subtitle6 {
      font-style: italic;
      text-align: center;
      font-size: 1.22rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content6 p {
      font-size: 1.1rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.65;
      font-weight: 400;
    }
    .profile-content6 b, .profile-content6 strong {
      font-weight: 700;
      color: #253662;
    }
    @media (max-width: 850px) {
      .profile-section6 {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container6 img {
        width: 230px;
        height: 260px;
      }
      .profile-content6 h1 {
        font-size: 2rem;
      }
    }
  </style>

  





 


  <!-- ---------------------------------  -->

   <style>
    .profile-section {
      max-width: 1400px;
      margin: 40px auto;
      border: 2px solid #253662;
      border-radius: 16px;
      background: #fff;
      padding: 36px 28px;
      display: flex;
      align-items: center;
      gap: 38px;
    }
    .profile-img-container {
      flex: 1 1 36%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 320px;
    }
    .profile-img-container img {
      width: 320px;
      height: 370px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 24px #03c0b48c;
      border: 2px solid #03c0b4;
    }
    .profile-content {
      flex: 1 1 64%;
      min-width: 340px;
      padding: 10px 5px;
    }
    .profile-content h1 {
      text-align: center;
      color: #253662;
      font-size: 2.55rem;
      font-weight: 800;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }
    .profile-content .subtitle {
      font-style: italic;
      text-align: center;
      font-size: 1.22rem;
      color: #222;
      margin-bottom: 19px;
    }
    .profile-content p {
      font-size: 1.1rem;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.65;
      font-weight: 400;
      text-align: left;
    }
    .profile-content b, .profile-content strong {
      font-weight: 700;
      color: #253662;
    }
    /* Variation for content-left, img-right layouts */
    .profile-section.content-left {
      flex-direction: row-reverse;
    }
    @media (max-width: 850px) {
      .profile-section,
      .profile-section.content-left {
        flex-direction: column;
        padding: 24px 0;
        gap: 18px;
      }
      .profile-img-container img {
        width: 230px;
        height: 260px;
      }
      .profile-content h1 {
        font-size: 2rem;
      }
    }
  </style>


  <!-- 10. Dr. M.L. Kapoor (Image Left, Content Right) -->
  <section class="profile-section">
    <div class="profile-img-container">
      <img src="assets/images/team/sample-2.webp" alt="Dr. M.L. Kapoor" />
    </div>
    <div class="profile-content">
      <h1>Dr. M.L. Kapoor</h1>
      <div class="subtitle">
        Consultant Anaesthetist
      </div>
      <p>
        Dr. M.L. Kapoor is a highly experienced Consultant Anaesthetist, known for his precision, care, and commitment to patient safety. With extensive experience in administering anaesthesia across a wide range of ophthalmic procedures, he ensures safe and comfortable surgical experiences for patients. 
        Dr. Kapoor plays a crucial role in supporting the surgical team at Brar Eye Hospital with his expertise and calm professionalism.
      </p>
    </div>
  </section>

 

  <!-- 11. Dr. T.K. Goyal (Image Left, Content Right) -->
  <section class="profile-section">
    <div class="profile-img-container">
      <img src="image-tk-goyal.webp" alt="Dr. T.K. Goyal" />
    </div>
    <div class="profile-content">
      <h1>Dr. T.K. Goyal</h1>
      <div class="subtitle">
        Consultant Anaesthetist
      </div>
      <p>
        Dr. T.K. Goyal is a dedicated Consultant Anaesthetist with a strong focus on patient safety and perioperative care.
        With years of experience in providing anaesthesia for ophthalmic surgeries, he ensures smooth and pain-free procedures.
        Dr. Goyal is an integral part of the surgical team at Brar Eye Hospital, delivering dependable support with clinical precision and compassion.
      </p>
    </div>
  </section>

  


<?php include 'footer.php'; ?>
