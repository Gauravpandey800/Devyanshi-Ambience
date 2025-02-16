<?php include 'header.php'; ?>

<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <!-- <i class="ri-code-s-slash-line"></i>--> Devyanshi Ambience 
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="index.php" class="nav__link">Home</a>
                </li>

                <!--=============== Designs  ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Designs <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <!-- Modular Kitchen Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Modular Kitchen Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Modern Kitchens</a></li>
                                    <li><a href="#" class="dropdown__link">Compact Kitchens</a></li>
                                    <li><a href="#" class="dropdown__link">Luxury Kitchens</a></li>
                                </ul>
                            </div>

                            <!-- Dining Room Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Dining Room Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Formal Dining</a></li>
                                    <li><a href="#" class="dropdown__link">Casual Dining</a></li>
                                </ul>
                            </div>

                            <!-- Tile Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Tile Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Floor Tiles</a></li>
                                    <li><a href="#" class="dropdown__link">Wall Tiles</a></li>
                                </ul>
                            </div>

                            <!-- Wardrobe Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Wardrobe Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Walk-in Wardrobes</a></li>
                                    <li><a href="#" class="dropdown__link">Sliding Wardrobes</a></li>
                                </ul>
                            </div>

                            <!-- Living Room Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Living Room Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Contemporary Living Rooms</a></li>
                                    <li><a href="#" class="dropdown__link">Minimalist Living Rooms</a></li>
                                </ul>
                            </div>

                            <!-- Bathroom Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Bathroom Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Modern Bathrooms</a></li>
                                    <li><a href="#" class="dropdown__link">Small Bathrooms</a></li>
                                </ul>
                            </div>

                            <!-- Master Bedroom Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Master Bedroom Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Luxury Bedrooms</a></li>
                                    <li><a href="#" class="dropdown__link">Cozy Bedrooms</a></li>
                                </ul>
                            </div>

                            <!-- Kids Bedroom Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Kids Bedroom Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Themed Bedrooms</a></li>
                                    <li><a href="#" class="dropdown__link">Playful Designs</a></li>
                                </ul>
                            </div>

                            <!-- Balcony Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Balcony Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Small Balconies</a></li>
                                    <li><a href="#" class="dropdown__link">Garden Balconies</a></li>
                                </ul>
                            </div>

                            <!-- Pooja Room Designs -->
                            <div class="dropdown__group">
                                <span class="dropdown__title">Pooja Room Designs</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Traditional Pooja Rooms</a></li>
                                    <li><a href="#" class="dropdown__link">Modern Pooja Rooms</a></li>
                                </ul>
                            </div>

                            <!-- Add more categories as needed -->
                        </div>
                    </div>
                </li>

                <!--=============== Cities ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Cities <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <!-- Maharashtra -->
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> <!-- City Icon -->
                                </div>
                                <span class="dropdown__title">Bihar</span>
                                <ul class="dropdown__list">
                                    <li><a href="/project/places.php?city=1" class="dropdown__link">Patna</a></li>
                                    <!---<li><a href="places.php?city=2" class="dropdown__link">Delhi</a></li>
                                    <li><a href="places.php" class="dropdown__link">Nagpur</a></li>--->
                                </ul>
                            </div>

                            <!-- Karnataka 
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> --- City Icon
                                </div>
                                <span class="dropdown__title">Karnataka</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Bangalore</a></li>
                                     <li><a href="#" class="dropdown__link">Mysore</a></li> 
                                    <li><a href="#" class="dropdown__link">Hubli</a></li>
                                </ul>
                            </div>-->

                            <!-- Tamil Nadu 
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> -- City Icon 
                                </div>
                                <span class="dropdown__title">Tamil Nadu</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">Chennai</a></li>
                                    <li><a href="#" class="dropdown__link">Coimbatore</a></li> 
                                    <li><a href="#" class="dropdown__link">Madurai</a></li>--
                                </ul>
                            </div>-->

                            <!-- Delhi
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> -- City Icon --
                                </div>
                                <span class="dropdown__title">Delhi</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">New Delhi</a></li>
                                     <li><a href="#" class="dropdown__link">Noida</a></li> 
                                    <li><a href="#" class="dropdown__link">Gurgaon</a></li>
                                </ul>
                            </div> -->

                            <!-- Delhi ---
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> -- City Icon --
                                </div>
                                <span class="dropdown__title">Delhi</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">New Delhi</a></li>
                                    <li><a href="#" class="dropdown__link">Noida</a></li>
                                    <li><a href="#" class="dropdown__link">Gurgaon</a></li>
                                </ul>
                            </div>--->

                            <!-- Delhi --
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> -- City Icon --
                                </div>
                                <span class="dropdown__title">Delhi</span>
                                <ul class="dropdown__list">
                                    <li><a href="#" class="dropdown__link">New Delhi</a></li>
                                    <li><a href="#" class="dropdown__link">Noida</a></li>
                                    <li><a href="#" class="dropdown__link">Gurgaon</a></li> --
                                </ul>
                            </div>-->

                            <!-- Delhi--->
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-map-pin-line"></i> <!-- City Icon -->
                                </div>
                                <span class="dropdown__title">Delhi</span>
                                <ul class="dropdown__list">
                                    <li><a href="/project/places.php?city=3" class="dropdown__link">New Delhi</a></li>
                                    <!-- <li><a href="#" class="dropdown__link">Noida</a></li> 
                                    <li><a href="#" class="dropdown__link">Gurgaon</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="nav__link">Pricing</a>
                </li>

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="aboutus.php" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="contactus.php" class="nav__link">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>