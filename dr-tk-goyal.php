

<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. T.K. Goyal - Brar Eye Hospital</title>
   
</head>
<body>
    <header>
        <div class="container">
            <h1>Meet Our Professional Team</h1>
            <p>Dedicated experts providing exceptional eye care with precision and compassion.</p>
        </div>
    </header>

    <div class="container">
        <div class="doctor-profile">
            <div class="doctor-header">
                <h1>Dr. T.K. Goyal</h1>
                <h2>Consultant Anaesthetist</h2>
            </div>

            <div class="doctor-bio">
                <p>Dr. T.K. Goyal is a dedicated Consultant Anaesthetist with a strong focus on patient safety and perioperative care. With years of experience in providing anaesthesia for ophthalmic surgeries, he ensures smooth and pain-free procedures. Dr. Goyal is an integral part of the surgical team at Brar Eye Hospital, delivering dependable support with clinical precision and compassion.</p>
            </div>
        </div>
    </div>


   



  
 
<?php include 'footer.php'; ?>


<style>

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: rgba(241, 119, 50, 0.8);
    background-color: rgba(3, 192, 180, 0.05);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}


header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
    text-align: center;
}

header p {
    text-align: center;
    font-size: 1.2em;
    opacity: 0.95;
}

.hero-image {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    margin: 30px 0;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(3, 192, 180, 0.3);
}

.content-section {
    background: rgba(255, 255, 255, 1);
    padding: 40px;
    margin: 30px 0;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(3, 192, 180, 0.15);
}

.content-section h2 {
    color: #f17732;
    font-size: 2em;
    margin-bottom: 20px;
    border-bottom: 3px solid #03c0b4;
    padding-bottom: 10px;
}

.content-section h3 {
    color: #03c0b4;
    font-size: 1.5em;
    margin-top: 30px;
    margin-bottom: 15px;
}

.content-section h4 {
    color: #f17732;
    font-size: 1.2em;
    margin-top: 20px;
    margin-bottom: 10px;
}

.content-section p {
    margin-bottom: 15px;
    text-align: justify;
    line-height: 1.8;
}

.content-section ul {
    margin-left: 30px;
    margin-bottom: 20px;
}

.content-section li {
    margin-bottom: 10px;
    line-height: 1.8;
}

.info-box {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.1) 0%, rgba(3, 192, 180, 0.1) 100%);
    padding: 25px;
    margin: 25px 0;
    border-left: 5px solid #f17732;
    border-radius: 5px;
}

.highlight-box {
    background: linear-gradient(135deg, rgba(3, 192, 180, 0.1) 0%, rgba(241, 119, 50, 0.1) 100%);
    padding: 25px;
    margin: 25px 0;
    border-left: 5px solid #03c0b4;
    border-radius: 5px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 30px 0;
}

.service-card {
    background: rgba(255, 255, 255, 1);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(3, 192, 180, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-top: 4px solid #f17732;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(241, 119, 50, 0.2);
}

.service-card h3 {
    color: #f17732;
    margin-bottom: 15px;
}

.doctor-profile {
    background: rgba(255, 255, 255, 1);
    padding: 40px;
    margin: 30px 0;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(3, 192, 180, 0.15);
}

.doctor-header {
    text-align: center;
    margin-bottom: 30px;
    padding: 30px;
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.05) 0%, rgba(3, 192, 180, 0.05) 100%);
    border-radius: 10px;
}

.doctor-header h1 {
    color: #f17732;
    font-size: 2.5em;
    margin-bottom: 10px;
}

.doctor-header h2 {
    color: #03c0b4;
    font-size: 1.5em;
    font-weight: normal;
}

.doctor-bio {
    margin: 30px 0;
    padding: 25px;
    background: rgba(3, 192, 180, 0.05);
    border-radius: 8px;
    border-left: 4px solid #03c0b4;
}

.experience-section {
    margin: 30px 0;
}

.experience-item {
    padding: 20px;
    margin: 15px 0;
    background: rgba(255, 255, 255, 1);
    border-left: 3px solid #f17732;
    border-radius: 5px;
    box-shadow: 0 2px 8px rgba(3, 192, 180, 0.1);
}

.qualification-badge {
    display: inline-block;
    background: linear-gradient(135deg, #f17732 0%, #03c0b4 100%);
    color: rgba(255, 255, 255, 1);
    padding: 8px 20px;
    border-radius: 20px;
    margin: 5px;
    font-size: 0.9em;
}

footer {
    background: linear-gradient(135deg, rgba(241, 119, 50, 0.9) 0%, rgba(3, 192, 180, 0.9) 100%);
    color: rgba(255, 255, 255, 1);
    text-align: center;
    padding: 20px 0;
    margin-top: 50px;
}

@media (max-width: 768px) {
    header h1 {
        font-size: 2em;
    }
    
    .content-section {
        padding: 25px;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
}

</style>