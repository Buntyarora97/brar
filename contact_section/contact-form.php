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

            <select name="doctor" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">

                <option value="" disabled selected>Choose Doctor</option>

                <option value="Dr. P.S. Brar">Dr. P.S. Brar – Medical Director & Chief Eye Surgeon</option>
                <option value="Dr. M.S. Brar">Dr. M.S. Brar – Senior Cataract & Paediatric Surgeon</option>
                <option value="Dr. J.K. Gupta">Dr. J.K. Gupta – Senior Consultant Ophthalmologist</option>
                <option value="Dr. Sunny Goyal">Dr. Sunny Goyal – Cataract & Glaucoma Surgeon</option>
                <option value="Dr. Anand Singh Brar">Dr. Anand Singh Brar – Vitreo-Retina Consultant</option>
                <option value="Dr. B. Ravinder Naik">Dr. B. Ravinder Naik – Cataract, Strabismus & Pediatric Ophthalmology Consultant</option>
                <option value="Dr. Aazambir Singh Brar">Dr. Aazambir Singh Brar – Cataract, Refractive & Vitreo-Retina Surgeon</option>

            </select>

            <select name="branch" required
            style="flex:1; min-width:200px; padding:14px; border:1px solid #ddd; border-radius:8px; background:#f9f9f9; font-size:14px; outline:none;">

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