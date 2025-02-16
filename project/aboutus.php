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
        <div class="slide active" style="background-image: url('assets/images/bg.jpg');">
            <div class="slide-content">
                <h1 class="slide-title">About Us</h1>
                <a href="#Our Members" class="slide-button">Scroll Down</a>
            </div>
        </div>
</section>


<!--========================================== OUR MEMBER ==========================================-->
<!-- Our Members Section -->
<section class="our-members">
<div class="container">
  <div class="section__title">
    <h2>Our Members</h2>
    <p>Meet the talented individuals who make our company great.</p>
  </div>
  <div class="pin-container">

    <!-- Member Card 1 -->
    <div class="card" data-orientation="portrait">
      <div class="card-front">
        <img src="assets/images/about01.jpeg" alt="Member 1" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 01</h3>
        <p class="card-description">CEO & Founder</p>
        <p class="card-details">John has over 10 years of experience in the tech industry.</p>
      </div>
    </div>
    <!-- Member Card 2 -->
    <div class="card" data-orientation="landscape">
      <div class="card-front">
        <img src="assets/images/about02.jpeg" alt="Member 2" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 02</h3>
        <p class="card-description">CTO</p>
        <p class="card-details">Jane specializes in AI and machine learning technologies.</p>
      </div>
    </div>
    <!-- Member Card 3 -->
    <div class="card" data-orientation="portrait">
      <div class="card-front">
        <img src="assets/images/about03.jpeg" alt="Member 1" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 03</h3>
        <p class="card-description">CEO & Founder</p>
        <p class="card-details">John has over 10 years of experience in the tech industry.</p>
      </div>
    </div>
    <!-- Member Card 4 -->
    <div class="card" data-orientation="portrait">
      <div class="card-front">
        <img src="assets/images/about04.jpeg" alt="Member 1" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 04</h3>
        <p class="card-description">CEO & Founder</p>
        <p class="card-details">John has over 10 years of experience in the tech industry.</p>
      </div>
    </div>

    <!-- Member Card 5 -->
    <div class="card" data-orientation="portrait">
      <div class="card-front">
        <img src="assets/images/about01.jpeg" alt="Member 1" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 05</h3>
        <p class="card-description">CEO & Founder</p>
        <p class="card-details">John has over 10 years of experience in the tech industry.</p>
      </div>
    </div>
     <!-- Member Card 6 -->
     <div class="card" data-orientation="landscape">
      <div class="card-front">
        <img src="assets/images/about05.jpeg" alt="Member 2" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 06</h3>
        <p class="card-description">CTO</p>
        <p class="card-details">Jane specializes in AI and machine learning technologies.</p>
      </div>
    </div>
    
    <!-- Member Card 7 -->
    <div class="card" data-orientation="landscape">
      <div class="card-front">
        <img src="assets/images/about01.jpeg" alt="Member 2" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 07</h3>
        <p class="card-description">CTO</p>
        <p class="card-details">Jane specializes in AI and machine learning technologies.</p>
      </div>
    </div>
    <!-- Member Card 7 -->
    <div class="card" data-orientation="landscape">
      <div class="card-front">
        <img src="assets/images/about02.jpeg" alt="Member 1" class="card-image">
      </div>
      <div class="card-back">
        <h3 class="card-title">John Doe 08</h3>
        <p class="card-description">CEO & Founder</p>
        <p class="card-details">John has over 10 years of experience in the tech industry.</p>
      </div>
    </div>
     
     




</div>
    <!-- Add more member cards as needed -->
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
