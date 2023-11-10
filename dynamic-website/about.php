<?php
    session_start();
    include("php/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding123</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <style>
        #about-home {
            background-image: linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url('image/about-land2.jpg');
        }
    </style>
</head>

<body>
    <nav>
        <h1>Coding123</h1>
        <div class="navigation">
            <input type="checkbox" id="menu-button">
            <label for="menu-button">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a class="active" href="#">About</a>
                </li>
                <li>
                    <a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="courses.php">Courses</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <?php
                    if(isset($_SESSION['valid'])){
                ?>
                <li>
                    <a href="php/logout.php"> <button class="logout">Log Out</button> </a>
                </li>
                <?php
                    }else{
                ?>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <!-- landing section -->
    <section id="about-home">
        <h2>About Coding123</h2>
    </section>

    <!-- about section -->
    <section id="about-container">
        <div class="about-img">
            <img src="/image/about-left.jpg" alt="">
        </div>

        <div class="about-text">
            <h2>Welcome to Coding123, a place to learn</h2>
            <p>When we started Coding123, we set out to create a new, interactive way of learning —
                making it engaging, flexible, and accessible for as many people as possible. Since then, we have helped
                thousands of people worldwide unlock modern technical skills and reach their full potential through
                code.
            </p>
            <div class="about-details">
                <img src="/image/about-detail1.png" alt="">
                <div class="det-text">
                    <h5>100+ Courses</h5>
                    <p>We provide a variety of courses to accomodate any of your tech interests.</p>
                </div>
            </div>
            <div class="about-details">
                <img src="/image/about-detail2.png" alt="">
                <div class="det-text">
                    <h5>Lifetime Access</h5>
                    <p>A one time payment grants access to these courses FOREVER!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <h1>What You Will Receive</h1>
        <p>Some benefits you will receive by learning with us are...</p>
        <div class="ft-container">
            <div class="ft-box">
                <i class="fa fa-graduation-cap"></i>
                <h3>Online Courses</h3>
                <p>Online courses available anytime you want for however long you want. Courses are routinely updated
                    every few months to ensure quality.</p>
            </div>
            <div class="ft-box">
                <i class="fa fa-file-certificate"></i>
                <h3>Professional Certification</h3>
                <p>Once you finish one of our courses, you will receive a certificate of completion recognized by
                    trusted, professional organizations around the world.</p>
            </div>
            <div class="ft-box">
                <i class="fa fa-award"></i>
                <h3>Award Winning</h3>
                <p>Our courses have won multiple awards from an array of institutions, namely universities and
                    technological companies.</p>
            </div>
        </div>
    </section>

    <section id="companies">
        <h1>Trusted By</h1>
        <p>Over 400 companies and thousands of learners around the world</p>
        <div class="comp-images">
            <img src="image/comp1.png" alt="grab">
            <img src="image/comp2.png" alt="gojek">
            <img src="image/comp6.png" alt="bankindo">
            <img src="image/comp3.png" alt="traveloka">
            <img src="image/comp5.jpg" alt="telkom">
            <img src="image/comp4.png" alt="kominfo">
        </div>
    </section>

    <footer>
        <div class="foot-container">

            <div class="socials">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
            <div class="foot-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="foot-bottom">
            <p>Copyright &copy;2023; <span class="company">Coding123</span></p>
        </div>
    </footer>

</body>
<script src="js/script.js"></script>

</html>