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
        #login {
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
                    <a class="active" href="login.php">Login</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <!-- landing section -->
    <section id="login">
        <div class="log-container">

            <div class="box form-box">

            <?php
            
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                // verify if unique

                $verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='login-mssg'>
                            <p>This email has been used, try another one.</p>
                         </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn-mssg'>Go Back</button>";
         
                }else{

                    mysqli_query($con,"INSERT INTO users(username,email,password) VALUES('$username','$email','$password')") or die("Error Occured");
        
                    echo "<div class='message'>
                              <p>Registration successful!</p>
                          </div> <br>";
                    echo "<a href='login.php'><button class='btn-mssg'>Login Now</button>";
                 
        
                 }
                }else{
            ?>
                <h2>Register</h2>
                <form action="" method="post">

                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="field input">
                        <label for="username">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="field">
                        <input type="submit" name="submit" value="Register" class="btn-sub">
                    </div>
                    <div class="links">
                        Already a member? <a href="login.php">Sign In</a>
                    </div>

                </form>
            </div>
            <?php } ?>
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
<script src="/js/script.js"></script>

</html>