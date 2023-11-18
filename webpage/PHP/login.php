<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $jsonData = file_get_contents('../Json/info.json');
    $users = json_decode($jsonData, true);

    if (isset($users[$username]) && $users[$username]["password"] == $password) {
        $_SESSION["username"] = $username;

        header("Location: ../pages/page.php");
        exit();
    } else {
        header("Location: ../pages/signup.html");
        exit();
    }
}
?>
