<link rel="stylesheet" href="assets/css/places.css">
<?php
require_once 'assets/includes/init.php';

// Set page title
set_page_title('Interior Design in India');
include_template('header');
include_template('navbar');

// Database connection
require_once PROJECT_ROOT . '/assets/includes/db_connect.php';

// Get selected city ID from URL
$selectedCityId = isset($_GET['city']) ? intval($_GET['city']) : 1;

// Fetch city data for the selected city
$sql_city = "SELECT id, city, description, image_url FROM cities WHERE id = $selectedCityId";
$result_city = $conn->query($sql_city);

if ($result_city->num_rows > 0) {
    $city = $result_city->fetch_assoc();
} else {
    echo "City not found.";
    exit;
}

// Fetch reviews data for the selected city
$sql_reviews = "SELECT city_id, before_image, after_image, project_type, project_cost, completion_date, review_text, image_url, client_name FROM city_reviews WHERE city_id = $selectedCityId ORDER BY completion_date DESC LIMIT 3";
$result_reviews = $conn->query($sql_reviews);
$reviews = [];
if ($result_reviews->num_rows > 0) {
    while ($row = $result_reviews->fetch_assoc()) {
        $reviews[] = $row;
    }
}

// Fetch popular styles data for the selected city
$sql_styles = "SELECT name, description, image_url FROM popular_styles WHERE city_id = $selectedCityId";
$result_styles = $conn->query($sql_styles);
$styles = [];
if ($result_styles->num_rows > 0) {
    while ($row = $result_styles->fetch_assoc()) {
        $styles[] = $row;
    }
}

// Fetch budget ranges data for the selected city
$sql_budgets = "SELECT package_type, price FROM budget_ranges WHERE city_id = $selectedCityId";
$result_budgets = $conn->query($sql_budgets);
$budgets = [];
if ($result_budgets->num_rows > 0) {
    while ($row = $result_budgets->fetch_assoc()) {
        $budgets[$row['package_type']] = $row['price'];
    }
}

// Fetch highlights data for the selected city
$sql_highlights = "SELECT highlight_text FROM highlights WHERE city_id = $selectedCityId";
$result_highlights = $conn->query($sql_highlights);
$highlights = [];
if ($result_highlights->num_rows > 0) {
    while ($row = $result_highlights->fetch_assoc()) {
        $highlights[] = $row['highlight_text'];
    }
}
?>

<link rel="stylesheet" href="assets/css/places.css">

<section class="city-section" id="city-<?php echo $city['id']; ?>">
    <!-- Hero Section -->
    <section class="city-hero" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php echo $city['image_url']; ?>);">
        <div class="container">
            <div class="city-hero__content">
                <h1>Interior Design in <?php echo $city['city']; ?></h1>
                <p><?php echo $city['description']; ?></p>

                <!-- Quick Stats -->
                <div class="city-hero__stats">
                    <div class="stat">
                        <h3>5000+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat">
                        <h3>4.9/5</h3>
                        <p>Customer Rating</p>
                    </div>
                    <div class="stat">
                        <h3>45 Days</h3>
                        <p>Delivery Time</p>
                    </div>
                </div>
            </div>

            <!-- Consultation Form -->
            <div class="city-hero__form">
                <h2>Book Free Design Session</h2>
                <form id="consultationForm" class="consultation-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="tel" placeholder="Phone Number" required>
                    <select required>
                        <option value="">Select Property Type</option>
                        <option value="2bhk">2 BHK</option>
                        <option value="3bhk">3 BHK</option>
                        <option value="villa">Villa</option>
                    </select>
                    <button type="submit">Schedule Free Visit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Recent Projects -->
    <section class="recent-projects">
        <div class="container">
            <h2>Home interiors in <?php echo $city['city']; ?> becoming a hassle?</h2>
            <p style="text-align:center;">Our best interior decorators in <?php echo $city['city']; ?>, will make your home interiors journey smooth and hassle-free.</p>
            <p style="text-align:center;">Book FREE Consultation</p>
            <div class="projects-grid">
                <?php if (!empty($reviews)): ?>
                    <?php foreach ($reviews as $review): ?>
                        <div class="project-card">
                            <div class="project-card__images">
                                <div class="before-after">
                                    <img src="<?php echo $review['before_image']; ?>" alt="Before" class="before">
                                    <img src="<?php echo $review['after_image']; ?>" alt="After" class="after">
                                    <div class="slider"></div>
                                </div>
                            </div>
                            <div class="project-card__content">
                                <h3><?php echo $review['project_type']; ?></h3>
                                <div class="project-details">
                                    <span>Cost: <?php echo $review['project_cost']; ?></span>
                                    <span>Completed: <?php echo date('M Y', strtotime($review['completion_date'])); ?></span>
                                </div>
                                <p><?php echo $review['review_text']; ?></p>
                                <div class="client-info">
                                    <img src="<?php echo $review['image_url']; ?>" alt="<?php echo $review['client_name']; ?>">
                                    <span><?php echo $review['client_name']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No reviews available for <?php echo $city['city']; ?>.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Pricing Packages -->
    <section class="pricing-packages">
        <div class="container">
            <h2>Homes for every budget</h2>
            <p style="text-align:center;">Our interior designers work with you keeping in mind your requirements and budget</p>
            <p style="text-align:center;">GET FREE QUOTE</p>
            <div class="packages-grid">
                <?php if (!empty($budgets)): ?>
                    <?php foreach ($budgets as $type => $price): ?>
                        <div class="package-card">
                            <h3><?php echo ucfirst($type); ?> Package</h3>
                            <p class="price"><?php echo $price; ?></p>
                            <ul>
                                <?php foreach ($highlights as $highlight): ?>
                                    <li><i class="ri-check-line"></i> <?php echo $highlight; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button class="btn-primary">Get Quote</button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No budget information available for <?php echo $city['city']; ?>.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Livspace Home Interior Design Reviews -->
    <section class="livspace-reviews">
        <div class="container">
            <h2>Livspace Home Interior Design Reviews</h2>
            <p style="text-align:center;">For a team that aims at making customers feel at home, these reviews motivate us to provide top-quality experiences to our customers every day.</p>
        </div>
    </section>

    <!-- Reasons to love us -->
    <section class="reasons-to-love">
        <div class="container">
            <h2>Reasons to love us</h2>
        </div>
    </section>
</section>

<?php
include_template('footer');
?>
