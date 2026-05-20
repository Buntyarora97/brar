<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Anand Singh Brar - Brar Eye Hospital</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Meet Our Professional Team</h1>
            <p>Dedicated experts providing exceptional eye care with precision and compassion.</p>
        </div>
    </header>

  <!-- 2. Dr. Anand Singh Brar (Image Right, Content Left) -->
  <section class="profile-section content-left">
    <div class="profile-img-container">
      <img src="assets/images/team/55.webp" alt="Dr. Anand Singh Brar" />
    </div>
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
  </section>
   
<?php include 'footer.php'; ?>


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