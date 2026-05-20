
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
                        <h2>Leave a Comment</h2>
                        
                        <?php if(isset($_GET['success']) && $_GET['success'] == '1'): ?>
                        <div class="alert alert-success" style="background-color: #dff0d8; color: #3c763d; padding: 15px; margin-bottom: 20px; border: 1px solid #d6e9c6; border-radius: 4px;">
                            Your message has been sent successfully. We will contact you shortly.
                        </div>
                        <?php endif; ?>
                        
                        <?php if(isset($_GET['error']) && $_GET['error'] == '1'): ?>
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