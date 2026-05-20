<?php include('header.php'); ?>

<div style="max-width: 600px; margin: auto; padding: 20px; font-family: Arial, sans-serif;">
    <div style="background-color: #f1f1f1; padding: 15px; border-radius: 10px; margin-bottom: 10px;">
        👋 Welcome to BRAR EYE Hospital!
    </div>

    <div style="background-color: #f1f1f1; padding: 15px; border-radius: 10px; margin-bottom: 10px;">
        👁️ We care about your vision and eye health.
    </div>

    <div style="background-color: #f1f1f1; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
        💬 Ask your question below:
    </div>

    <form method="post">
        <input type="text" name="user_message" placeholder="Type your message..." required 
               style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" />
        <button type="submit" style="margin-top: 10px; padding: 10px 20px; background-color: #007BFF; 
                color: white; border: none; border-radius: 5px;">Send</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div style="background-color: #e0ffe0; padding: 15px; border-radius: 10px; margin-top: 20px;">
                📞 Connect with us: <strong>7218272182</strong>, <strong>brareyehospitals@gmail.com</strong>
              </div>';
    }
    ?>
</div>

<?php include('footer.php'); ?>
