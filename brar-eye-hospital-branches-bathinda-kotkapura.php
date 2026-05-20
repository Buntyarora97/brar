<?php
$pageTitle = "Brar Eye Hospital Branch Locations ";
$pageDescription = "Locate all Brar Eye Hospital branches across the city with contact details.";
$pageKeywords = "hospital branches, eye clinic locations, lasik surgery cost";
include('header.php');
?>
<!-- Branches Page (Kotkapura - left, Bathinda - right) -->
<section class="branch-page-title">
  <div class="branch-bg-layer"></div>
  <div class="branch-container">
    <div class="branch-content">
      <h1 style="color:white;">Our Branches</h1>
      <ul class="branch-breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>/</li>
        <li>Our Branches</li>
      </ul>
    </div>
  </div>
</section>

<section class="branches-overview">
  <div class="auto-container">
    <div class="branches-row">
      <!-- Kotkapura (Left) -->
      <div class="branch-card">
        <div class="branch-card-inner">
          <div class="branch-header">
            <h3>Kotkapura Branch</h3>
            <p class="muted">Brar Eye Hospital — Kotkapura</p>
          </div>

          <div class="map-wrap">
            <!-- Kotkapura iframe (uses the URL you provided) -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3426.774522497033!2d75.38590061459637!3d31.379144960251135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5efc4373c805%3A0x8fe5d2ed8a2d1b64!2sKotkapura%2C%20Punjab!5e0!3m2!1sen!2sin!4v1653893158888!5m2!1sen!2sin"
              width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="branch-cta">
            <a class="visit-btn" href="https://www.google.com/maps/search/?api=1&query=Kotkapura+Faridkot+Road" target="_blank" rel="noopener">Open in Google Maps</a>
          </div>
        </div>
      </div>

      <!-- Bathinda (Right) -->
      <div class="branch-card">
        <div class="branch-card-inner">
          <div class="branch-header">
            <h3>Bathinda Branch</h3>
            <p class="muted">Brar Eye Hospital — Bathinda</p>
          </div>

          <div class="map-wrap">
            <!-- Bathinda iframe (uses the URL you provided) -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13795.971214393782!2d74.94529577837368!3d30.211861129823856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f07278a9%3A0x62d171859e6e2096!2sBathinda%2C%20Punjab!5e0!3m2!1sen!2sin!4v1653893060546!5m2!1sen!2sin"
              width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="branch-cta">
            <a class="visit-btn orange" href="https://www.google.com/maps/search/?api=1&query=Bathinda+Opp+Mittal+Mall" target="_blank" rel="noopener">Open in Google Maps</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Consolidated Contact Details (single section) -->
    <div class="branches-details">
      <h2>Branch Contact & Visiting Details</h2>

      <div class="details-grid">
        <!-- Kotkapura details -->
        <div class="detail-card">
          <h4>Kotkapura</h4>
          <ul class="contact-list">
            <li><strong>Address:</strong> Faridkot Road, Kotkapura - 151204, Punjab</li>
            <li><strong>Phone:</strong> <a href="tel:+917218272182">+91 7218272182</a></li>
            <li><strong>Email:</strong> <a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a></li>
            <li><strong>Website:</strong> <a href="https://www.brareyehospital.com" target="_blank" rel="noopener">brareyehospital.com</a></li>
            <li><strong>Timing:</strong> Mon–Sat: 8:00 AM – 5:00 PM</li>
          </ul>
        </div>

        <!-- Bathinda details -->
        <div class="detail-card">
          <h4>Bathinda</h4>
          <ul class="contact-list">
            <li><strong>Address:</strong> Adjacent to Kapsons, GT Road, Opp. Mittal Mall, Bathinda</li>
            <li><strong>Phone:</strong> <a href="tel:+917218272182">+91 7218272182</a></li>
            <li><strong>Email:</strong> <a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a></li>
            <li><strong>Website:</strong> <a href="https://www.brareyehospital.com" target="_blank" rel="noopener">brareyehospital.com</a></li>
            <li><strong>Timing:</strong> Mon–Sat: 8:00 AM – 5:00 PM</li>
          </ul>
        </div>
      </div>

      <!-- Small note or CTA -->
      <div class="detail-note">
        <p>If you need help finding the quickest route, call us at <a href="tel:+917218272182">+91 7218272182</a> or email <a href="mailto:brareyehospitals@gmail.com">brareyehospitals@gmail.com</a>. We recommend calling ahead for appointment availability.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== Styles (paste into your stylesheet or keep inline) ===== -->
<style>
:root{
  --teal: #03c0b4;
  --teal-dark: #0da89e;
  --orange: #f17732;
  --muted: #6b7a80;
  --card-shadow: 0 12px 36px rgba(14,30,40,0.06);
  --container-max: 1200px;
  --ff: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.branch-page-title{
  position: relative;
  padding: 90px 20px;
  text-align: center;
  color: #fff;
  font-family: var(--ff);
}
.branch-bg-layer{
  position:absolute; inset:0;
  background-image: linear-gradient(180deg, rgba(3,192,180,0.15), rgba(8,24,40,0.45)), url('assets/images/background/our brancehs.webp');
  background-size: cover;
  background-position: center;
  filter: brightness(0.55);
  z-index:0;
}
.branch-container{position:relative; z-index:2; max-width:var(--container-max); margin:0 auto; padding:0 16px;}
.branch-content h1{ font-size:2.6rem; margin:0 0 10px; text-transform:uppercase; letter-spacing:1px; text-shadow: 0 6px 24px rgba(2,20,30,0.3);}
.branch-breadcrumb{ list-style:none; display:inline-flex; gap:8px; padding:0; margin:0; color:#fff; font-weight:600;}

/* overview */
.branches-overview{ padding:48px 0 80px; background:#fbfdff; font-family:var(--ff); }
.auto-container{ max-width:var(--container-max); margin:0 auto; padding:0 16px; }

/* branches row (two columns) */
.branches-row{ display:grid; grid-template-columns: 1fr 1fr; gap:22px; align-items:start; margin-bottom:28px; }

/* branch card */
.branch-card{ background:#fff; border-radius:12px; overflow:hidden; box-shadow:var(--card-shadow); border:1px solid rgba(12,36,48,0.04); }
.branch-card-inner{ padding:18px; display:flex; flex-direction:column; gap:12px; height:100%; }
.branch-header h3{ margin:0; color:var(--teal-dark); font-size:1.3rem; }
.branch-header .muted{ color:var(--muted); margin:3px 0 0; font-size:0.95rem; }

/* map container */
.map-wrap{ width:100%; height:320px; border-radius:8px; overflow:hidden; box-shadow: inset 0 1px 0 rgba(255,255,255,0.02); }

/* CTA */
.branch-cta{ display:flex; justify-content:flex-end; }
.visit-btn{ display:inline-block; padding:10px 14px; border-radius:8px; background:var(--teal); color:#fff; text-decoration:none; font-weight:700; transition:transform .18s ease, box-shadow .18s ease; border:1px solid rgba(0,0,0,0.03); }
.visit-btn.orange{ background:var(--orange); }
.visit-btn:hover{ transform:translateY(-3px); box-shadow:0 12px 30px rgba(11,32,38,0.08); }

/* consolidated details */
.branches-details{ margin-top:18px; background:linear-gradient(180deg,#fff,#fbfdff); padding:28px; border-radius:12px; box-shadow:var(--card-shadow); border:1px solid rgba(12,36,48,0.03); }
.branches-details h2{ margin:0 0 12px; color:var(--teal-dark); font-size:1.35rem; }
.details-grid{ display:grid; grid-template-columns: 1fr 1fr; gap:18px; margin-top:12px; }
.detail-card{ background:#fff; border-radius:10px; padding:18px; border-left:5px solid var(--teal); box-shadow: 0 6px 20px rgba(10,20,30,0.04); }
.detail-card h4{ margin:0 0 8px; color:#153b43; }
.contact-list{ list-style:none; padding:0; margin:0; color:var(--muted); line-height:1.65; }
.contact-list li a{ color:var(--teal); text-decoration:none; font-weight:600; }

/* note */
.detail-note{ margin-top:14px; color:var(--muted); font-size:0.98rem; }

/* responsive behaviour */
@media (max-width: 992px){
  .branches-row{ grid-template-columns: 1fr; }
  .details-grid{ grid-template-columns: 1fr; }
  .map-wrap{ height:300px; }
}
@media (max-width: 480px){
  .map-wrap{ height:220px; }
  .branch-page-title{ padding:60px 16px; }
  .branch-content h1{ font-size:1.6rem; }
}
</style>

<!-- ===== Optional small script to scroll to branch details if needed ===== -->
<script>
  // If you want to programmatically scroll to details on page load or button click,
  // you can use this function. Not required — included for convenience.
  function scrollToDetails() {
    const el = document.querySelector('.branches-details');
    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
</script>
    <?php include('footer.php'); ?>
