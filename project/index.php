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
    
    <section class="hero-slideshow">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('assets/images/k.jpg');">
            <div class="slide-content">
                <h1 class="slide-title">Where Creativity Meets Comfort</h1>
                <p class="slide-description">Transform your space into a masterpiece. Where design meets comfort, your
                    dream home comes to life.</p>
                <a href="#explore" class="slide-button">Explore Ideas</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('assets/images/k01.jpg');">
            <div class="slide-content">
                <h1 class="slide-title">Modern Living Spaces</h1>
                <p class="slide-description">Experience the elegance of modern design tailored to your lifestyle.</p>
                <a href="#explore" class="slide-button">Explore Ideas</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('assets/images/k02.jpg');">
            <div class="slide-content">
                <h1 class="slide-title">Luxury Redefined</h1>
                <p class="slide-description">Indulge in the luxury of bespoke interiors crafted just for you.</p>
                <a href="#explore" class="slide-button">Explore Ideas</a>
            </div>
        </div>

        

        <!-- Slide Navigation Dots -->
        <div class="slide-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
    </section>
    </div>




    <!--=============== MAIN ===============-->
    <div class="main">
        <section class="hero">
            <div class="container hero__container">
                <!-- Left content -->
                <div class="hero__content">
                    <h1 class="hero__title">Devyanshi Ambience</h1>
                    <p class="hero__description">Devyanshi Ambience is a premier interior design firm established in
                        2018 by the visionary Harsh Arshin. We specialize in creating sophisticated and personalized
                        living spaces that reflect the unique tastes and lifestyles of our clients. Our commitment to
                        excellence and passion for innovative design set us apart in the industry. At Devyanshi
                        Ambience, we believe that every space has a story to tell, and our mission is to bring that
                        story to life with elegance and style.</p>
                    <div class="hero__buttons">
                        <a href="#courses" class="btn btn--primary">
                            Explore Ideas
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="#about" class="btn btn--outline">
                            Book Free Counsultation
                        </a>
                    </div>
                    <div class="hero__stats">
                        <div class="stats__item">
                            <h3>7+</h3>
                            <p>Cities</p>
                        </div>
                        <div class="stats__item">
                            <h3>100+</h3>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>

                <!-- Right content -->
                <div class="hero__image">
                    <img src="assets/images/hero-banner.jpg" alt="Learning illustration">
                    <div class="hero__card">
                        <i class="ri-code-s-slash-line"></i>
                        <span>Desines from experts</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Offerings Section -->
    <section class="offerings section">
        <div class="container">

            <h2 class="section__title">One-stop shop for all things interiors</h2>
            <p class="one-stop-shop__description">
                Be it end-to-end interiors, renovation, or modular solutions, we have it all for your home or office.
                With a wide range of furniture & decor, we have your back from start to finish.
            </p>
            <div class="offerings__content">
                <!-- Modular Interiors -->
                <div class="offerings__item">
                    <img src="assets/images/k1.jpg" alt="Modular Interiors" class="offerings__image">
                    <h3 class="offerings__title">Modular Interiors</h3>
                    <p class="offerings__description">
                        Functional kitchen, wardrobe, and storage solutions tailored to your needs.
                    </p>
                    <a href="#" class="offerings__link">&gt;</a>
                </div>

                <!-- Full Home Interiors -->
                <div class="offerings__item">
                    <img src="assets/images/k01.jpg" alt="Full Home Interiors" class="offerings__image">
                    <h3 class="offerings__title">Full Home Interiors</h3>
                    <p class="offerings__description">
                        Turnkey interior solutions for your home, designed to perfection.
                    </p>
                    <a href="#" class="offerings__link">&gt;</a>
                </div>

                <!-- Modular Interiors -->
                <div class="offerings__item">
                    <img src="assets/images/k2.jpg" alt="Modular Interiors" class="offerings__image">
                    <h3 class="offerings__title">Modular Interiors</h3>
                    <p class="offerings__description">
                        Functional kitchen, wardrobe, and storage solutions tailored to your needs.
                    </p>
                    <a href="#" class="offerings__link">&gt;</a>
                </div>

                <!-- Full Home Interiors -->
                <div class="offerings__item">
                    <img src="assets/images/k02.jpg" alt="Full Home Interiors" class="offerings__image">
                    <h3 class="offerings__title">Full Home Interiors</h3>
                    <p class="offerings__description">
                        Turnkey interior solutions for your home, designed to perfection.
                    </p>
                    <a href="#" class="offerings__link">&gt;</a>
                </div>


            </div>
        </div>
    </section>


    
   <!-- Pinterest-like Layout Section -->
<section class="pinterest-layout section">
    <div class="container">
        
        <h2 class="section__title">Explore Our Designs</h2>
        <p class="section__description">Get inspired by our curated collection of stunning interior designs.</p>

        <!-- Masonry Grid -->
        <div class="pin_container">
            <!-- Landscape Card -->
            <div class="card card_medium" data-orientation="landscape">
                <img src="assets/images/k.jpg" alt="Landscape Design 1" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Modern Living Room</h3>
                    <p class="card-description">Elegant and minimalist design for a cozy living space.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <!-- Portrait Card -->
            <div class="card card_large" data-orientation="portrait">
                <img src="assets/images/k01.jpg" alt="Portrait Design 1" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Luxury Kitchen</h3>
                    <p class="card-description">Sleek and functional kitchen design for modern homes.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <!-- Landscape Card -->
            <div class="card card_medium" data-orientation="landscape">
                <img src="assets/images/k02.jpg" alt="Landscape Design 2" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Cozy Bedroom</h3>
                    <p class="card-description">Warm and inviting bedroom design for ultimate comfort.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <!-- Portrait Card -->
            <div class="card card_large" data-orientation="portrait">
                <img src="assets/images/k1.jpg" alt="Portrait Design 2" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Elegant Dining Room</h3>
                    <p class="card-description">Classic and timeless dining room design for family gatherings.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <!-- Add more cards here -->
            <div class="card card_small" data-orientation="portrait">
                <img src="assets/images/k2.jpg" alt="Landscape Design 3" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Modern Bathroom</h3>
                    <p class="card-description">Clean and stylish bathroom design for a refreshing experience.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <div class="card card_large" data-orientation="portrait">
                <img src="assets/images/k.jpg" alt="Portrait Design 3" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Home Office</h3>
                    <p class="card-description">Productive and chic home office design for remote work.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <div class="card card_small" data-orientation="landscape">
                <img src="assets/images/k2.jpg" alt="Landscape Design 3" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Modern Bathroom</h3>
                    <p class="card-description">Clean and stylish bathroom design for a refreshing experience.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>

            <div class="card card_medium" data-orientation="landscape">
                <img src="assets/images/k02.jpg" alt="Landscape Design 2" class="card-image">
                <div class="card-content">
                    <h3 class="card-title">Cozy Bedroom</h3>
                    <p class="card-description">Warm and inviting bedroom design for ultimate comfort.</p>
                    <a href="#" class="cta">View All Designs</a>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<!--=============== WHY CHOOSE US ===============-->
<section class="why-choose-us section">
        <div class="container">
            <h2 class="section__title">Why Choose Us</h2>
            <div class="why-choose-us__content">
                <div class="why-choose-us__item">
                    <i class="ri-star-line"></i>
                    <h3>Expert Designers</h3>
                    <p>Our team of experienced designers ensures your space is both functional and beautiful.</p>
                </div>
                <div class="why-choose-us__item">
                    <i class="ri-customer-service-line"></i>
                    <h3>24/7 Support</h3>
                    <p>We provide round-the-clock support to address all your queries and concerns.</p>
                </div>
                <div class="why-choose-us__item">
                    <i class="ri-money-dollar-circle-line"></i>
                    <h3>Affordable Pricing</h3>
                    <p>Get premium designs at competitive prices without compromising on quality.</p>
                </div>
                <div class="why-choose-us__item">
                    <i class="ri-calendar-check-line"></i>
                    <h3>On-Time Delivery</h3>
                    <p>We ensure timely completion of projects, so you can enjoy your new space sooner.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Testimonial Section -->
<section class="testimonials section">
  <div class="container">
    <h2 class="section__title">What Our Clients Say</h2>
    <div class="testimonials__content">
      <!-- Testimonial 1 -->
      <div class="testimonial__card">
        <video class="testimonial__video" autoplay muted loop>
          <source src="assets/images/testenomial.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="testimonial__info">
          <div class="testimonial__profile">
            <div class="testimonial__avatar">
              <img src="assets/images/hero-banner.jpg" alt="John Doe">
            </div>
            <div class="testimonial__details">
              <h3 class="testimonial__name">John Doe</h3>
              <p class="testimonial__place">New York, USA</p>
              <p class="testimonial__company">Interior Designer at XYZ Interiors</p>
            </div>
          </div>
          <p class="testimonial__text">"The team transformed my living space into a modern, stylish haven. Highly recommended!"</p>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="testimonial__card">
        <video class="testimonial__video" autoplay muted loop>
          <source src="assets/images/testenomial.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="testimonial__info">
          <div class="testimonial__profile">
            <div class="testimonial__avatar">
              <img src="assets/images/hero-banner.jpg" alt="Jane Smith">
            </div>
            <div class="testimonial__details">
              <h3 class="testimonial__name">Jane Smith</h3>
              <p class="testimonial__place">London, UK</p>
              <p class="testimonial__company">Furniture Specialist at ABC Furniture</p>
            </div>
          </div>
          <p class="testimonial__text">"Their attention to detail and craftsmanship is unparalleled. My clients love the new furniture!"</p>
        </div>
      </div>
      <!-- Testimonial 3 -->
      <div class="testimonial__card">
        <video class="testimonial__video" autoplay muted loop>
          <source src="assets/images/testenomial.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="testimonial__info">
          <div class="testimonial__profile">
            <div class="testimonial__avatar">
              <img src="assets/images/hero-banner.jpg" alt="Michael Lee">
            </div>
            <div class="testimonial__details">
              <h3 class="testimonial__name">Michael Lee</h3>
              <p class="testimonial__place">Delhi, India</p>
              <p class="testimonial__company">Homeowner</p>
            </div>
          </div>
          <p class="testimonial__text">"Professional, timely, and creative. They exceeded my expectations in every way."</p>
        </div>
      </div>
    </div>
    <div class="testimonials__more">
      <a href="#" class="btn--primary">View More</a>
    </div>
  </div>
</section>

<!-- Livsspace Home section -->

<section class="home-gallery-section">
  <div class="home-gallery-container">
    <h2 class="home-gallery-heading">Get a glimpse of Livspace homes</h2>
    <p class="home-gallery-subheading">Latest dream home interiors delivered the hassle-free way</p>

    <div class="home-slideshow-wrapper">
      <div class="home-slideshow-track">
        <div class="home-slide active">
          <img src="assets/images/k.jpg" alt="Modern Penthouse" class="home-slide-image">
          <div class="home-slide-title">Modern 4 BHK Penthouse, Bangalore</div>
        </div>
        <div class="home-slide">
          <img src="assets/images/k2.jpg" alt="Luxury Villa" class="home-slide-image">
          <div class="home-slide-title">Luxury Villa, Mumbai</div>
        </div>
        <div class="home-slide">
          <img src="assets/images/k01.jpg" alt="Contemporary Apartment" class="home-slide-image">
          <div class="home-slide-title">Contemporary Apartment, Delhi</div>
        </div>
      </div>

      <button class="home-slideshow-nav home-slideshow-prev">❮</button>
      <button class="home-slideshow-nav home-slideshow-next">❯</button>
    </div>
  </div>

  <!-- Modal -->
  <div id="home-gallery-modal" class="home-gallery-modal">
    <div class="home-modal-content">
      <span class="home-modal-close">×</span>
      <div class="home-modal-grid">
        <div class="home-modal-item"><img src="assets/images/k1.jpg" alt="Gallery 1"></div>
        <div class="home-modal-item"><img src="assets/images/k02.jpg" alt="Gallery 2"></div>
        <div class="home-modal-item"><img src="assets/images/k.jpg" alt="Gallery 3"></div>
        <!-- Add more images as needed -->
      </div>
    </div>
  </div>
</section>

<!-- Stay Updated Section -->
<section class="stay-updated-section">
  <div class="stay-updated-container">
    <div class="stay-updated-header">
      <h2 class="stay-updated-title">Stay updated with trending home interior designs!</h2>
      <p class="stay-updated-subtitle">Find everything from design fixes to expert tips on Livspace magazine</p>
      <a href="#" class="stay-updated-cta">Explore Magazine <i class="fas fa-arrow-right"></i></a>
    </div>

    <div class="stay-updated-grid">
      <!-- Article 1 -->
      <article class="stay-updated-card">
        <div class="stay-updated-card-image">
          <img src="assets/images/abouus-01.png" alt="2024 Design Trends">
          <span class="stay-updated-card-badge">Trending</span>
        </div>
        <div class="stay-updated-card-content">
          <h3>2024's Hottest Interior Design Trends</h3>
          <p>Discover the color palettes and materials dominating this year's home designs</p>
          <a href="#" class="stay-updated-card-link">Read More <i class="fas fa-angle-right"></i></a>
        </div>
      </article>

      <!-- Article 2 -->
      <article class="stay-updated-card">
        <div class="stay-updated-card-image">
          <img src="assets/images/k.jpg" alt="Small Space Solutions">
          <span class="stay-updated-card-badge">Tips & Tricks</span>
        </div>
        <div class="stay-updated-card-content">
          <h3>Maximizing Small Spaces</h3>
          <p>Expert strategies for making compact areas feel spacious and functional</p>
          <a href="#" class="stay-updated-card-link">Read More <i class="fas fa-angle-right"></i></a>
        </div>
      </article>

      <!-- Article 3 -->
      <article class="stay-updated-card">
        <div class="stay-updated-card-image">
          <img src="assets/images/k01.jpg" alt="DIY Projects">
          <span class="stay-updated-card-badge">DIY Guide</span>
        </div>
        <div class="stay-updated-card-content">
          <h3>Weekend DIY Makeovers</h3>
          <p>Transform your space with these easy-to-implement DIY projects</p>
          <a href="#" class="stay-updated-card-link">Read More <i class="fas fa-angle-right"></i></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Get Started Section -->
<section class="get-started-section">
  <div class="get-started-container">
    <h2 class="get-started-title">Your dream home is just a click away</h2>
    <a href="#" class="get-started-cta">GET STARTED</a>
  </div>
</section>

<!-- filepath: index.php -->
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
