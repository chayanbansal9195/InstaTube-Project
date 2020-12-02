<?php include "./db/dbconfig.php";
$sql = "SELECT * FROM Question";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/af63c1dbc9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/main-page-card.css">
    <title>Insta Tube</title>
</head>

<body>
    <div id="container">
        <div id="main">
            <header>
                <a href="index.php" class="header-brand">Insta Tube</a>
                <nav>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="modules/question.php">Question</a></li>
                        <li><a href="modules/portfolio.php">Profile</a></li>
                        <li><a href="modules/timeline.php">Timeline</a></li>
                        <li><a href="modules/feedback.php">Feedback</a></li>
                    </ul>

                    <div id="overlay">
                        <a href="" class="closebtn" onclick="off()">&times;</a>
                        <div id="container-login-form">
                            <div class="login">Login</div>
                            <div class="signup">Sign up</div>

                            <div class="login-form" >
                                <form name="login" onsubmit="return validateLoginForm()">
                                    <input type="text" placeholder="Enter your email id"><br>
                                    <input type="password" placeholder="Enter your password"><br>
                                    <button class="btn" type="submit">Log in</button><br>
                                </form>
                                <span><a href="">Forget Password</a></span>
                            </div>

                            <div class="signup-form">
                                <form name="SignUp" onsubmit="return validateSignUpForm()">
                                    <input type="text" placeholder="Enter your email id"><br>
                                    <input type="text" placeholder="Enter College Name"><br>
                                    <input type="password" placeholder="Enter your password"><br>
                                    <button class="btn" type="submit">Sign up</button>
                                </form>

                            </div>


                        </div>
                    </div>
                    <button class="header-login" onclick="on()">Log In</button>

                </nav>
            </header>
            <main id="main-card-css">
                <?php while($row = mysqli_fetch_assoc($result)) {?>
                <div class="main-card">
                    <div class="main-brand-color"></div>
                    <div class="main-card-content">
                        <p><span>q: </span> <span style="font-size:20px;"><?php echo $row["question_title"]?></span> <br><?php echo $row["question_text"]?> </p>
                    </div>
                    <div class="main-card-like">
                        <p><i onclick="like(this)" class="far fa-2x fa-thumbs-up main-icon-class"></i><span
                                class="main-like-span">like</span> </p>
                    </div>
                </div>
                <?php }
                 } else {
                            echo "0 results";
                        }
                mysqli_close($conn);?>
            </main>
            
        </div>
    </div>
    <footer>
        <div class="wrapper">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="modules/question.php">Question</a></li>
                <li><a href="modules/portfolio.php">Profile</a></li>
                <li><a href="modules/timeline.php">Timeline</a></li>
                <li><a href="modules/feedback.php">Feedback</a></li>
            </ul>
            <div class="footer-sm">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=chayanbansal1999@gmail.com"
                    target="_blank">Reach Us</a>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="js/main-like.js"></script>
    <script src="js/main.js"></script>
    <script src="js/auth.js"></script>

</body>

</html>

