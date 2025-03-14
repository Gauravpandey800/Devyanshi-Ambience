<?php
// Initialize error handling
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include initialization file
require_once __DIR__ . '/assets/includes/init.php';

try {
    // Set the page title
    set_page_title('Home');
    
    // Include template files
    include_template('header');
    include_template('navbar');
    ?>
    
    <!-- Full-Page Hero Section -->
    
    <section class="contact-us section">
        <div class="container">
            <h2 class="section__title">Contact Us</h2>
            <p class="section__description">
                Have questions or need assistance? Reach out to us! We're here to help you create your dream space.
            </p>

            <div class="contact-us__content">
                <!-- Contact Form -->
                <div class="contact-us__form">
                    <form name="submit-to-google-sheet">
                        <div class="form__group">
                            <input type="text" name="Name" placeholder="Your Name" required>
                        </div>
                        <div class="form__group">
                            <input type="email" name="Email" placeholder="Your Email" required>
                        </div>
                        <div class="form__group">
                            <textarea name="Message" rows="6" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="form__group">
                            <input type="text" name="Subject" placeholder="Subject" required>
                        </div>
                        <div class="form__group">
                            <button type="submit" class="btn btn--primary">Send Message</button>
                        </div>
                    </form>
                    <span id="msg"></span>
                </div>

                <!-- Contact Details -->
                <div class="contact-us__details">
                    <div class="contact-us__item">
                        <i class="ri-map-pin-line"></i>
                        <div>
                            <h3>Our Office</h3>
                            <p>123 Interior Street, Design City, DC 12345</p>
                        </div>
                    </div>
                    <div class="contact-us__item">
                        <i class="ri-phone-line"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+123 456 7890</p>
                        </div>
                    </div>
                    <div class="contact-us__item">
                        <i class="ri-mail-line"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@interiordesign.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="contact-us__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093747!2d144.95373531531664!3d-37.816279742021665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d2e7d30c0b8!2sFederation%20Square!5e0!3m2!1sen!2sin!4v1633083126837!5m2!1sen!2sin"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!--=============== MAIN JS ===============-->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxCJa37T3cDDZPuQQF_e8_6sDQzhyO8nkVC8Mh-KtFqgVu0lbnGaGFzEY3hAtYDrUr53Q/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => {
                    msg.innerHTML = "Message Sent successfully"
                    setTimeout(function () {
                        msg.innerHTML = ""
                    }, 5000)
                    form.reset()
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>

<!-- filepath:  -->
    <?php
    include_template('footer');
} catch (Exception $e) {
    if (DEBUG) {
        echo "<div style='color:red; padding:20px;'>";
        echo "Error: " . $e->getMessage();
        echo "</div>";
    } else {
        // Log error and show friendly message
        error_log($e->getMessage());
        echo "<div style='text-align:center; padding:20px;'>";
        echo "Sorry, something went wrong. Please try again later.";
        echo "</div>";
    }
}


