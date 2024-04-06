<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user WHERE email = '%s'", 
                    $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

       if (password_verify($_POST["password"], $user["password_hash"])) {

        session_start();

        // prevent session fixation attack
        session_regenerate_id();

        $_SESSION["user_id"] = $user["id"];

        header("Location: index.php");
        exit;
       }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">


    <title>Login</title>
    <script src="./js/script.js" defer></script>
</head>

<body>
    <div id="root">
        <!-- header section starts -->
        <header class="headerContainer">
            <div class="headerContent">
                <div>
                    <a href="./index.html" class="logoLink">
                        <h1 class="bigLogoText">Task management</h1>
                    </a>
                </div>

                <div class="nav-container">
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <div class="nav__link hide">
                        <a href="./authorization.html">AUTHORIZATION</a>
                    </div>
                </div>
            </div>

        </header>
        <!-- header section ends -->

        <!-- main section starts -->
        <main>
            <div class="authPage-content">
                <!-- left side -->
                <div class="authPage-leftSide-container">
                    <div class="authPage-leftSide-content">
                        <h1 class="leftSide-text">Organize your work and life, finally.</h1>
                        <h2>Become focused, organized, and calm with<br>Task management. </h2>
                    </div>
                </div>

                <!-- right side -->
                <div class="authPage-rightSide">
                    <div class="rightSide-container">



                        <!-- Login Form -->

                        <?php if ($is_invalid): ?>
                        <em>Invalid login</em>
                        <?php endif; ?>

                        <form class="form" method="post">
                            <div class="form-title">Login</div>
                            <div class="input-field">
                                <input type="email" name="email" value="<?= htmlspecialchars($_POST[" email"] ?? "" )
                                    ?>" placeholder="Email">
                            </div>
                            <div class="input-field">
                                <input type="password" id="passwordId1" class="password" name="password"
                                    placeholder="Password">
                                <span><i class="uil-eye uil-eye-slash pwEyeIcon" id="eyeIcon1"></i></span>
                            </div>

                            <div class="checkbox-text">
                                <div class="checkbox-content">
                                    <input type="checkbox" id="logCheck">
                                    <label for="logCheck" class="form-text">Remember me</label>
                                </div>

                                <a href="#" class="form-text">Fprgot password?</a>
                            </div>
                            
                            <button class="submit-btn">Login</button>
                            
                        </form>
                        <div class="login-signup">
                            <span class="form-text">Not a member?
                                <a href="./registration.html" class="form-text" id="signup-link">Signup Now</a>
                            </span>
                        </div>





                    </div>
                </div>
            </div>
        </main>
        <!-- main section ends -->

        <!-- footer section starts -->
        <footer class="autgPage-footer">
            <a href="index.html" class="logoLink">
                <h2 class="smallLogoText">Task management</h2>
            </a>
            <p class="authPage-footer-text">We make the life easy</p>
            <p class="authPage-footer-text-2">2023</p>
        </footer>
        <!-- footer section ends -->

    </div>
</body>

</html>