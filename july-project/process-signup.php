<?php

if (empty($_POST["name"])){
    die("Name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ($_POST["password"] !== $_POST["password_confirmation"]){
    die("Password must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

// prepare (for haker injection)
$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

// message if a record with the same email address already exists in the database
if ($stmt->execute()) {

    header("Location: index.php");
    exit;
    
}else{

    if ($mysqli->errno === 1062) {
        die("email already taken");
    }else{
        die($mysqli->error . " " . $mysqli->errno);
    }

}




// print_r($_POST);

// var_dump($password_hash);

?>