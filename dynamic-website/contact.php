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
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="courses.php">Courses</a>
                </li>
                <li>
                    <a  class="active" href="contact.php">Contact</a>
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
        <h2>Contact Us</h2>
    </section>

    <section id="contact">
        <div class="getin">
            <h2>Get in touch</h2>
            <p>Looking for help? Contact us for more information.</p>

            <div class="getin-details">
                <h3>Headquarters</h3>
                <div>
                    <i class="far fa-home get"></i>
                    <p>Jalan Kemang Timur No.21 RT 007/003 Kelurahan Bangka, Kecamatan Mampang , Kota Jakarta Selatan -
                        Provinsi DKI Jakarta</p>
                </div>
                <h3>Phone</h3>
                <div>
                    <i class="fas fa-phone-alt get"></i>
                    <p>(+62)83421025670 <br> (+62)81721675609</p>
                </div>
                <h3>Support</h3>
                <div>
                    <i class="fal fa-envelope-open-text get"></i>
                    <p>help@coding123.com <br> support@coding123.com</p>
                </div>
            </div>


        </div>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = mysqli_real_escape_string($con, $_POST["message"]);;

            mysqli_query($con,"INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')") or die("Error Occured");
            echo "<div class='message'>
                    <p>Message Sent!</p>
                </div> <br>";
        }else{
        ?>
        <form action="" method="post" class="form">
            <h4>Let's Connect</h4>
            <p>Give us your thoughts on the company.</p>
            <div class="form-row">
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-col">
                <input type="text"  name="subject" placeholder="Subject">
            </div>
            <div class="form-col">
                <textarea cols="30" rows="8" placeholder="How can we help?"  name="message"></textarea>
            </div>
            <div class="form-col">
                <button type="submit" name="submit">Send Message</button>
            </div>
        </form>
        <?php
        }
        ?>
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
<script src="/js/script.js"></script>

</html>