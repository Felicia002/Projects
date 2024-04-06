<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<?php
    include './check-auth.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Task management</title>
</head>

<body>
    <div id="root">
        <header class="headerContainer">
            <div class="headerContent">
                <div>
                    <a href="./index.php" class="logoLink">
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
                        <a href="#">Main</a>
                        <a href="logout.php">Log out</a>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div id="myDIV" class="to-do-header">
            <?php if (isset($user)):?>
               <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
            <?php else: ?>
                <p>Hello</p>
            <?php endif; ?>

                <h2 style="margin:5px">
                    My To Do List
                </h2>
                <input type="text" class="addTask-input" id="myInput" placeholder="Title...">
                <span onclick="newElement()" class="addTaskBtn">Add</span>
            </div>

            <ul id="myToDoList">
                <li>Hit the gym</li>
                <li class="checked">Pay bills</li>
                <li>Meet George</li>
                <li>Buy eggs</li>
                <li>Read a book</li>
                <li>Organize office</li>
            </ul>


        </main>

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


    <script src="./js/script2.js"></script>
</body>

</html>