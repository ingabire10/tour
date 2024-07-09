<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tour Booking</title>
<link rel="icon" href="image/home.jpeg">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
<link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('image/home.jpeg"');
        background-size: cover;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        flex-direction: column;
    }
    .booking-container {
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
        margin-bottom: 30px;
    }
    .booking-container h2 {
        margin-bottom: 20px;
    }
    .booking-container label {
        display: block;
        margin-top: 10px;
        text-align: left;
    }
    .booking-container input[type="text"],
    .booking-container input[type="email"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .booking-container input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        background-color: #28a745;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    .booking-container input[type="submit"]:hover {
        background-color: #218838;
    }
    .success-message {
        color: green;
    }
    .error-message {
        color: red;
    }
    .whatsapp-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #25D366;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }
    .whatsapp-button:hover {
        background-color: #1DA851;
    }
    .footer {
        width: 100%;
        background: #111111;
        color: #ffffff;
        padding: 50px 0;
    }
    .footer .footer-column {
        margin-bottom: 30px;
    }
    .footer .footer-column h5 {
        letter-spacing: 5px;
        margin-bottom: 20px;
    }
    .footer .footer-column a {
        color: #bbbbbb;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
    }
    .footer .footer-column a:hover {
        color: #ffffff;
    }
    .footer .footer-contact p {
        margin-bottom: 10px;
    }
    .footer .footer-contact h6 {
        margin-top: 20px;
        letter-spacing: 5px;
    }
    .footer .input-group input {
        padding: 15px;
    }
    .footer .input-group button {
        padding: 15px;
    }
    .footer .footer-bottom {
        background: #000000;
        color: #bbbbbb;
        padding: 20px 0;
        text-align: center;
    }
</style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+250786574146</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-primary px-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="text-primary px-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-primary px-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="text-primary pl-3" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
        <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link active">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="package.html" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="guide.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Booking Container Start -->
    <div class="booking-container">
        <h2>Book  here </h2>
        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tour";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database if it doesn't exist
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if ($conn->query($sql) === FALSE) {
            echo "Error creating database: " . $conn->error;
        }

        // Select the database
        $conn->select_db($dbname);

        // Create table if it doesn't exist
        $sql = "CREATE TABLE IF NOT EXISTS booking (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            nationality VARCHAR(50) NOT NULL,
            phonenumber VARCHAR(20) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($conn->query($sql) === FALSE) {
            echo "Error creating table: " . $conn->error;
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $nationality = $_POST['nationality'];
            $phonenumber = $_POST['phonenumber'];

            $sql = "INSERT INTO booking (name, email, nationality, phonenumber)
            VALUES ('$name', '$email', '$nationality', '$phonenumber')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success-message'>Booking successfully recorded.</p>";
            } else {
                echo "<p class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }

        $conn->close();
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" required>
            
            <label for="phonenumber">Phone Number:</label>
            <input type="text" id="phonenumber" name="phonenumber" required>
            
            <input type="submit" value="Book Now">
        </form>
        <a href="https://wa.me/+250786574146" class="whatsapp-button">Chat with us on WhatsApp</a>
    </div>
    <!-- Booking Container End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-column">
                    <a href="" class="navbar-brand">
                        <h1 class="text-primary"><span class="text-white">TRAVEL</span>Olivier</h1>
                    </a>
                    <p>Client is king, money after</p>
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-column">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-column">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Useful Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-column footer-contact">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Kigali, Rwanda</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+250 788 354 222</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="m-0 text-center text-white-50">
                    &copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
</body>
</html>
