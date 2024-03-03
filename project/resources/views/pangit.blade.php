<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangit Lives Matter</title>
    <style>
        body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #1a1a1a;
    color: #fff;
}

.dark-header {
    background-color: #222;
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.logo img {
    height: 50px; /* Adjust the height as needed */
}

.navigation ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.navigation a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s ease;
}

.navigation a:hover {
    color: #ffcc00; /* Change the color on hover */
}

.hero-section {
    background-image: url('hero-background.jpg'); /* Replace with your actual background image */
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 150px 0; /* Adjust padding as needed */
}

.hero-container {
    max-width: 800px;
    margin: 0 auto;
}

.hero-container h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero-container p {
    font-size: 18px;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ffcc00; /* Button background color */
    color: #222; /* Button text color */
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #e5b200; /* Change the color on hover */
}

.about-section {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.about-container {
    max-width: 800px;
    margin: 0 auto;
}

.mission-statement h2,
.impact-stories h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.mission-statement p,
.impact-stories p {
    font-size: 18px;
    margin-bottom: 40px;
}

.impact-stories .story {
    margin-bottom: 40px;
}

.impact-stories img {
    max-width: 100%;
    border-radius: 5px;
}

.statistics-section {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.statistics-container {
    max-width: 800px;
    margin: 0 auto;
}

.statistics-charts h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.statistics-charts .chart {
    margin-bottom: 40px;
}

.statistics-charts img {
    max-width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.statistics-charts p {
    font-size: 16px;
}

.gallery-section {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.gallery-container {
    max-width: 800px;
    margin: 0 auto;
}

.gallery-container h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.carousel {
    display: flex;
    overflow: hidden;
    width: 100%;
}

.carousel-slide {
    flex: 0 0 100%;
    transition: transform 0.5s ease;
}

.carousel img {
    width: 100%;
    border-radius: 5px;
}

.get-involved-section {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.get-involved-container {
    max-width: 800px;
    margin: 0 auto;
}

.get-involved-container h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.donation-call-to-action,
.volunteer-opportunities,
.social-media-links {
    margin-bottom: 60px;
}

.donation-call-to-action h3,
.volunteer-opportunities h3,
.social-media-links h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.donation-call-to-action p,
.volunteer-opportunities p,
.social-media-links p {
    font-size: 18px;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ffcc00; /* Button background color */
    color: #222; /* Button text color */
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #e5b200; /* Change the color on hover */
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-icons a img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.blog-section {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.blog-container {
    max-width: 800px;
    margin: 0 auto;
}

.blog-container h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.blog-posts {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.blog-post {
    flex: 1 1 300px; /* Adjust width as needed */
    overflow: hidden;
    position: relative;
    border-radius: 5px;
}

.blog-post img {
    width: 100%;
    border-radius: 5px 5px 0 0;
}

.blog-post h3 {
    font-size: 20px;
    margin: 15px 0;
}

.blog-post p {
    font-size: 16px;
    margin-bottom: 20px;
}

.cta-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffcc00; /* Link background color */
    color: #222; /* Link text color */
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta-link:hover {
    background-color: #e5b200; /* Change the color on hover */
}

.contact-section {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.contact-container {
    max-width: 800px;
    margin: 0 auto;
}

.contact-container h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-form label {
    font-size: 16px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #555;
    border-radius: 5px;
}

.contact-form button {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ffcc00; /* Button background color */
    color: #222; /* Button text color */
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: #e5b200; /* Change the color on hover */
}

.social-media-links,
.newsletter-subscription {
    margin-top: 60px;
}

.social-media-links h3,
.newsletter-subscription h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.social-media-links p,
.newsletter-subscription p {
    font-size: 16px;
    margin-bottom: 30px;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-icons a img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.newsletter-subscription form {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
}

.newsletter-subscription input {
    flex: 1 1 calc(70% - 10px);
}

.footer-section {
    background-color: #111;
    color: #fff;
    text-align: center;
    padding: 50px 0; /* Adjust padding as needed */
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-container h3 {
    font-size: 20px;
    margin-bottom: 15px;
}

.footer-navigation ul {
    list-style: none;
    padding: 0;
}

.footer-navigation a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    transition: color 0.3s ease;
}

.footer-navigation a:hover {
    color: #ffcc00; /* Change the color on hover */
}

.footer-social .social-icons {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.footer-social .social-icons a img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.footer-bottom {
    background-color: #000;
    padding: 10px 0;
    text-align: center;
}

.footer-bottom p {
    font-size: 14px;
    margin: 0;
}

.footer-bottom a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-bottom a:hover {
    color: #ffcc00; /* Change the color on hover */
}

    </style>
</head>

<body>
    <header class="dark-header">
        <div class="header-container">
            <div class="logo">
                <img src="your-logo.png" alt="Pangit Lives Matter Logo">
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="hero-container">
            <h1>Pangit Lives Matter</h1>
            <p>Embracing diversity and celebrating the beauty in every life.</p>
            <a href="#get-involved" class="cta-button">Join the Movement</a>
        </div>
    </section>

    <section class="about-section">
        <div class="about-container">
            <div class="mission-statement">
                <h2>Our Mission</h2>
                <p>At Pangit Lives Matter, we are committed to embracing diversity and celebrating the beauty in every life. Our mission is to create a world where everyone feels valued and appreciated, regardless of societal beauty standards.</p>
            </div>

            <div class="impact-stories">
                <h2>Impact Stories</h2>
                <div class="story">
                    <img src="story1.jpg" alt="Impact Story 1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="story">
                    <img src="story2.jpg" alt="Impact Story 2">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics-section">
        <div class="statistics-container">
            <h2>Key Statistics</h2>

            <div class="statistics-charts">
                <!-- Example chart, replace with your actual charts or infographics -->
                <div class="chart">
                    <!-- Replace the following with your chart library or image -->
                    <img src="chart1.png" alt="Statistics Chart 1">
                    <p>Statistic 1 description</p>
                </div>

                <div class="chart">
                    <!-- Replace the following with your chart library or image -->
                    <img src="chart2.png" alt="Statistics Chart 2">
                    <p>Statistic 2 description</p>
                </div>

                <!-- Add more charts as needed -->
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="gallery-container">
            <h2>Photo Gallery</h2>

            <div class="carousel">
                <div class="carousel-slide">
                    <img src="image1.jpg" alt="Gallery Image 1">
                </div>

                <div class="carousel-slide">
                    <img src="image2.jpg" alt="Gallery Image 2">
                </div>

                <!-- Add more slides as needed -->
            </div>
        </div>
    </section>

    <section class="get-involved-section">
        <div class="get-involved-container">
            <h2>Get Involved</h2>

            <div class="donation-call-to-action">
                <h3>Support Us with a Donation</h3>
                <p>Your contribution can make a significant impact on the lives we aim to celebrate and support.</p>
                <a href="#donate" class="cta-button">Donate Now</a>
            </div>

            <div class="volunteer-opportunities">
                <h3>Volunteer Opportunities</h3>
                <p>Join our team and actively contribute to the "Pangit Lives Matter" movement.</p>
                <a href="#volunteer" class="cta-button">Apply to Volunteer</a>
            </div>

            <div class="social-media-links">
                <h3>Connect with Us on Social Media</h3>
                <p>Stay updated on our initiatives and share your support by following us on social media.</p>
                <div class="social-icons">
                    <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="blog-container">
            <h2>Blog/News</h2>

            <div class="blog-posts">
                <div class="blog-post">
                    <img src="post1.jpg" alt="Blog Post 1">
                    <h3>Embracing Diversity: A Journey Towards Inclusivity</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#read-more" class="cta-link">Read More</a>
                </div>

                <div class="blog-post">
                    <img src="post2.jpg" alt="Blog Post 2">
                    <h3>Celebrating Beauty Beyond Stereotypes</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#read-more" class="cta-link">Read More</a>
                </div>

                <!-- Add more blog posts as needed -->
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-container">
            <h2>Contact Us</h2>

            <div class="contact-form">
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit" class="cta-button">Send Message</button>
                </form>
            </div>

            <div class="social-media-links">
                <h3>Connect with Us on Social Media</h3>
                <p>Stay updated on our initiatives and share your support by following us on social media.</p>
                <div class="social-icons">
                    <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>

            <div class="newsletter-subscription">
                <h3>Subscribe to Our Newsletter</h3>
                <p>Receive updates and news directly in your inbox by subscribing to our newsletter.</p>
                <form action="#" method="post">
                    <input type="email" name="newsletter-email" placeholder="Your Email" required>
                    <button type="submit" class="cta-button">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <section class="footer-section">
        <div class="footer-container">
            <div class="footer-navigation">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <h3>Connect with Us</h3>
                <div class="social-icons">
                    <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Pangit Lives Matter. All rights reserved. | <a href="#privacy-policy">Privacy Policy</a> | <a href="#terms-of-service">Terms of Service</a></p>
        </div>
    </section>






    <script src="script.js">
        document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel-slide');

    let currentIndex = 0;

    function updateCarousel() {
        const translateValue = -currentIndex * 100 + '%';
        carousel.style.transform = 'translateX(' + translateValue + ')';
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateCarousel();
    }

    setInterval(nextSlide, 5000); // Auto-advance every 5 seconds
});

    </script>
</body>

</html>



<!-- responsive -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangit Lives Matter</title>
    <style>
        body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #1a1a1a;
    color: #fff;
}

/* Add your existing styles here */

/* Responsive Design */
@media only screen and (max-width: 768px) {
    .hero-container {
        padding: 80px 20px;
    }

    .about-container,
    .statistics-container,
    .gallery-container,
    .get-involved-container,
    .blog-container,
    .contact-container {
        padding: 60px 20px;
    }

    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-navigation,
    .footer-social,
    .newsletter-subscription {
        margin-top: 30px;
    }
}

@media only screen and (max-width: 480px) {
    .hero-container {
        padding: 60px 20px;
    }

    .about-container,
    .statistics-container,
    .gallery-container,
    .get-involved-container,
    .blog-container,
    .contact-container {
        padding: 40px 20px;
    }
}
    </style>
</head>

<body>
    <header class="dark-header">
        <!-- Header content as previously provided -->
    </header>

    <section class="hero-section">
        <!-- Hero section content as previously provided -->
    </section>

    <section class="about-section">
        <!-- About Us section content as previously provided -->
    </section>

    <section class="statistics-section">
        <!-- Statistics section content as previously provided -->
    </section>

    <section class="gallery-section">
        <!-- Gallery section content as previously provided -->
    </section>

    <section class="get-involved-section">
        <!-- Get Involved section content as previously provided -->
    </section>

    <section class="blog-section">
        <!-- Blog/News section content as previously provided -->
    </section>

    <section class="contact-section">
        <!-- Contact Us section content as previously provided -->
    </section>

    <section class="footer-section">
        <!-- Footer section content as previously provided -->
    </section>

</body>

</html>


