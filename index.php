<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your LMS Website</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</head>
<body>

<header>
    <div class="navbar">
        <div class="logo"><img src="logo.png" alt="Logo"></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">About</a></li>
            <li><a href="pages/contact.php">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <a href="Login/index.php" class="btn signin">Login</a>
            
        </div>
    </div>
</header>

<div class="slider-container">
    <div class="slider">
        <img src="assets/Images/Slider/slide1.jpg" class="slide" alt="Slide 1">
        <img src="assets/Images/Slider/slide2.jpg" class="slide" alt="Slide 2">
        <img src="assets/Images/Slider/slide3.jpg" class="slide" alt="Slide 3">
    </div>
    <div class="slider-overlay"></div>
    <div class="slider-text">
        <h1>Find Your Way</h1>
        <p>Student Learning Management System</p>
    </div>
</div>

<div class="content">
    <h2>Courses</h2>
    <div class="course-cards">
        <div class="course-card">
            
            <div class="card-content">
                <h3>IT</h3>
                <p>Learn the latest in technology and software development.</p>
            </div>
        </div>
        <div class="course-card">
            
            <div class="card-content">
                <h3>Accounting</h3>
                <p>Master the fundamentals of accounting and finance.</p>
            </div>
        </div>
        <div class="course-card">
            
            <div class="card-content">
                <h3>English</h3>
                <p>Improve your English language skills for personal and professional growth.</p>
            </div>
        </div>
        <!-- Add more course cards as needed -->
    </div>
    <!-- Vertical Line -->
    <div class="vertical-line"></div>
</div>

<div class="services-section">
    <h2>Our Services</h2>
    <div class="services-container">
        <div class="service-card">
            <div class="service-header" onclick="toggleDropdown('service1')">
                <span class="dropdown-arrow">▼</span>
                <h3>Course Management</h3>
            </div>
            <div id="service1" class="service-description">
                <p>Effortlessly create, manage, and organize courses with our intuitive platform.</p>
            </div>
        </div>
        <div class="service-card">
            <div class="service-header" onclick="toggleDropdown('service2')">
                <span class="dropdown-arrow">▼</span>
                <h3>User Analytics</h3>
            </div>
            <div id="service2" class="service-description">
                <p>Gain insights into user engagement and performance with detailed analytics.</p>
            </div>
        </div>
        <div class="service-card">
            <div class="service-header" onclick="toggleDropdown('service3')">
                <span class="dropdown-arrow">▼</span>
                <h3>Interactive Learning</h3>
            </div>
            <div id="service3" class="service-description">
                <p>Enhance learning with quizzes, forums, and multimedia content.</p>
            </div>
        </div>
    </div>
</div>

<div class="crew-section">
    <h2>Our Crew</h2>
    <div class="crew-container">
        <div class="crew-member">
            <img src="assets/Images/Crew_profile/profile2.JPG" alt="Member 1" class="profile-photo"> <!-- Replace with actual image path -->
            <h3>Awishka Isuru</h3>
            <p>Founder & CEO</p>
        </div>
        <div class="crew-member">
            <img src="assets/Images/Crew_profile/profile1.JPG" alt="Member 2" class="profile-photo"> <!-- Replace with actual image path -->
            <h3>Sandesh Nawarathne</h3>
            <p>Head of Development</p>
        </div>
        <div class="crew-member">
            <img src="assets/Images/Crew_profile/profile2.JPG" alt="Member 3" class="profile-photo"> <!-- Replace with actual image path -->
            <h3>Chavindu Priyasara</h3>
            <p>Marketing Specialist</p>
        </div>
        <div class="crew-member">
            <img src="assets/Images/Crew_profile/profile1.JPG" alt="Member 4" class="profile-photo"> <!-- Replace with actual image path -->
            <h3>Gaganathara Suraweera</h3>
            <p>Product Manager</p>
        </div>
    </div>
</div>
<!--footer-->
<footer class="footer bg-light py-4"> <!-- Changed background color to light -->
    <div class="container d-flex justify-content-between align-items-start">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 150px;"> <!-- Replace with your logo path -->
        </div>
        <div class="quick-links">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
                <li><a href="#contact" class="text-dark">Contact Us</a></li>
                <li><a href="#about" class="text-dark">About</a></li>
                <li><a href="#services" class="text-dark">Services</a></li>
                <li><a href="#faq" class="text-dark">FAQ</a></li>
            </ul>
        </div>
        <div class="social-media text-center">
            <h5>Follow Us</h5>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-x"></i></a></li> 
                <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-github"></i></a></li> 
            </ul>
        </div>
        <div class="contact-info">
            <h5>Contact Us</h5>
            <p>Advanced Technological Institute<br>Bandaranayake Mawatha, Kegalle, 71000<br>SriLanka<br>Email: info@sliatekegalle.com<br>Phone: 0354856556</p>
        </div>
    </div>
    <hr class="my-4">
    <p class="text-center text-dark">&copy; 2024 Advanced Technological Institute-Kegalle. All rights reserved.</p>
</footer>

<!-- Font Awesome for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="assets/Js/slider.js"></script> <!-- Link to your JavaScript -->
</body>
</html>