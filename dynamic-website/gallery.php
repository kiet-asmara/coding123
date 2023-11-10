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
                    <a class="active" href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="courses.php">Courses</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
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
    <section id="about-home"> <!-- same id as about section -->
        <h2>Gallery</h2>
    </section>

    <h2 id="showcase">A Showcase of our Best Moments</h2>
    <section id="gallery">
        <div id="gallery-pics">
            <ul>
                <li>
                    <a href="">
                        <figure>
                            <img src='image/about-landing.jpg'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img
                                src='https://images.unsplash.com/photo-1606761568499-6d2451b23c66?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img src='image/study.jpg'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img
                                src='https://images.unsplash.com/photo-1560250056-07ba64664864?q=80&w=2051&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img
                                src='https://images.unsplash.com/photo-1621241484978-6f60fdb68f1c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img
                                src='https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img src='image/porto1.jpg'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img
                                src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure>
                            <img src='image/system.jpg'>
                        </figure>
                    </a>
                </li>
            </ul>
        </div>

    </section>
    
    <footer id="log-footer">
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