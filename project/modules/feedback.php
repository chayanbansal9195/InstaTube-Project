<?php include "../db/dbconfig.php";
$count=0;
$result="select count(*) as total from feedback";
$count = mysqli_query($conn, $result);
$row = mysqli_fetch_assoc($count);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="../css/feedback-form.css">
    <script src="../js/feedback-form.js"></script>
    <title>Insta Tube - Feedback</title>
</head>

<body>
    <div id="container">
        <div id="main">
            <header>
                <a href="../index.html" class="header-brand">Insta Tube</a>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="question.php">Question</a></li>
                        <li><a href="portfolio.php">Profile</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li class="active"><a href="feedback.php">Feedback</a></li>
                      
                    </ul>
                    <div id="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="off()">&times;</a>
                        <div id="container-login-form">
                            <div class="login">Login</div>
                            <div class="signup">Sign up</div>

                            <div class="login-form">
                                <form>
                                    <input type="text" placeholder="Enter your email id"><br>
                                    <input type="password" placeholder="Enter your password"><br>
                                    <button class="btn" type="submit">Log in</button><br>
                                </form>
                                <span><a href="">Forget Password</a></span>
                            </div>

                            <div class="signup-form">
                                <form>
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
            <main>
                <div class="container">
                    <h2>FEEDBACK FORM -  &nbsp; &nbsp; <i>Total count</i> (<?php echo $row["total"]?>)</h2>
                    <form action="../backend/feedback_action.php" name="feed" onsubmit="return validateForm()" method="POST">

                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="Your name..">
                        <div class="error" id="fnameErr"></div>

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Your last name..">
                        <div class="error" id="lnameErr"></div>



                        <label for="subject">Suggestion</label>
                        <textarea id="subject" name="sugg" placeholder="Write something.."
                            style="height:200px"></textarea>
                        <div class="error" id="suggErr"></div>

                        <input type="submit" value="Submit">

                    </form>
                </div>
            </main>
        </div>
    </div>
    <footer>
        <div class="wrapper">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="question.php">Question</a></li>
                <li><a href="portfolio.php">Profile</a></li>
                <li><a href="timeline.php">Timeline</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
            <div class="footer-sm">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=chayanbansal1999@gmail.com"
                    target="_blank">Reach Us</a>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="../js/main.js"></script>
    <script src="../js/auth.js"></script>

</body>

</html>