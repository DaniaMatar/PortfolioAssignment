<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $sex = $_POST["sex"];
    $ageGroup = $_POST["ageGroup"];

    $jsonData = file_get_contents('../Json/info.json');
    $users = json_decode($jsonData, true);


    if (isset($users[$username])) {

        header("Location: error.php");
        exit();
    }


    $users[$username] = [
        "username"=> $username,
        "password"=> $password,
        "firstname"=> $firstname,
        "lastname"=> $lastname,
        "sex"=> $sex,
        "ageGroup"=> $ageGroup

    ];
    
    $updatedJsonData = json_encode($users, JSON_PRETTY_PRINT);

    file_put_contents('../Json/info.json', $updatedJsonData);

    header("Location: ../index.php");
    exit();
}
?>
