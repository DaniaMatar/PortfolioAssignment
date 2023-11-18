<?php
// Function to read JSON file
function readJsonFile($filename) {
    $jsonString = file_get_contents($filename);
    return json_decode($jsonString, true);
}

// Function to authenticate user
function authenticateUser($username, $password, $userData) {
    foreach ($userData as $user) {
        if ($user['email'] === $username && $user['pass'] === $password) {
            return true;
        }
    }
    return false;
}

// Main login logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace 'json/info.json' with the actual path to your JSON file
    $userData = readJsonFile('json/info.json');

    if (!$userData) {
        die('Error reading JSON file');
    }

    if (authenticateUser($username, $password, $userData)) {
        header('Location: ./pages/page.html');
        exit;
    } else {
        echo '<script>alert("Invalid email or password. Please try again.");</script>';
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" href="css/login.css"> 
        <link rel="stylesheet" href="css/icons.css">
        <title>Login</title>
    </head>
    <body>
        <div class="title">
            <span>Login</span>
        </div> 
        <div class="paragraph">
            <form action="" method="POST" id="login-form">
            <label for="un">User Name</label>
                <br>
                <input type="text" name="username" id="un">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass">
                <br>
                <input type="button" value="Login" onclick="login()">
                <input type="button" value="Cancel" onclick="ClearForm()">
            </form>
            <a href="pages/signUp.php">Sign Up...</a>
        </div>
    
<script>
    function login(){
        var un=document.getElementById("un").value;
        var pass=document.getElementById("pass").value;
        console.log(un);
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("un").value="";
        document.getElementById("pass").value="";
    }
</script>
</body>
</html>