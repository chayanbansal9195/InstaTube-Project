<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="../css/profile-form.css">
    <script src="../js/login-reg-val.js"></script>
    <title>Insta Tube - Profile</title>
</head>

<body>
    <div id="container">
        <div id="main">
            <header>
                <a href="../index.php" class="header-brand">Insta Tube</a>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="question.php">Question</a></li>
                        <li class="active"><a href="portfolio.php">Profile</a></li>
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
                <div id="main-profile-page">
                    <form action="../backend/profile_action.php" name="contactForm" onsubmit="return validateForm()" method="POST">
                        <h2>Profile Details</h2>
                        <div class="row">
                            <label>Full Name</label>
                            <input type="text" name="name">
                            <div class="error" id="nameErr"></div>
                        </div>
                        <div class="row">
                            <label>Email Address</label>
                            <input type="text" name="email">
                            <div class="error" id="emailErr"></div>
                        </div>
                        <div class="row">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile" maxlength="10">
                            <div class="error" id="mobileErr"></div>
                        </div>
                        <div class="row">
                            <label>Country</label>
                            <select name="country">
                                <option>Select</option>
                                <option>Australia</option>
                                <option>India</option>
                                <option>United States</option>
                                <option>United Kingdom</option>
                            </select>
                            <div class="error" id="countryErr"></div>
                        </div>
                        <div class="row">
                            <label>Gender</label>
                            <div class="form-inline">
                                <label><input type="radio" name="gender" value="male"> Male</label>
                                <label><input type="radio" name="gender" value="female"> Female</label>
                            </div>
                            <div class="error" id="genderErr"></div>
                        </div>
                        <div class="row">
                            <label>Hobbies <i>(Optional)</i></label>
                            <div class="form-inline">
                                <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
                                <label><input type="checkbox" name="hobbies[]" value="movies"> Movies</label>
                                <label><input type="checkbox" name="hobbies[]" value="music"> Music</label>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
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