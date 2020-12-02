<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="../css/question.css">
    <script src="../js/question.js"></script>
    <title>Insta Tube - Questions</title>
</head>

<body>
    <div id="container">
        <div id="main">
            <header>
                <a href="../index.php" class="header-brand">Insta Tube</a>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li class="active"><a href="question.php">Question</a></li>
                        <li><a href="portfolio.php">Profile</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
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
                <main>
                    <div class="container">
                        <h2>ADD QUESTION</h2>
                        <form action="../backend/question_action.php" name="question" onsubmit="return validateForm()" method="POST">

                            <label for="qname">Question Title</label>
                            <input type="text" id="qname" name="qname" placeholder="Question title..">
                            <div class="error" id="qnameErr"></div>





                            <label for="qtext">Add Question Text</label>
                            <textarea id="subject" name="qtext" placeholder="Add Question Text.."
                                style="height:200px"></textarea>
                            <div class="error" id="qtextErr"></div>

                            <input type="submit" value="Submit">

                        </form>
                    </div>
                </main>
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