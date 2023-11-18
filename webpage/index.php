<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/login.css"> 
    <link rel="stylesheet" href="css/icons.css">
    <title>Login</title>
</head>
<body>
    <div class="row header"></div>
    <div class="box">
        <div class="title">
            <span>Login</span>
        </div> 
        <div class="paragraph">
            <form action="./PHP/login.php" method="POST" id="login-form">
                <label for="un">User Name</label>
                <br>
                <input type="text" name="username" id="un">
                <br>
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass">
                <br>
                <br>
                <input type="button" value="Login" class="button" onclick="login()">
                <input type="button" value="Cancel" class="button" onclick="ClearForm()">
                <br>
                <br>
            </form>
            <a href="pages/signUp.html">Sign Up...</a>
        </div>
    </div>  

    <script>
        function login() {
            var username = document.getElementById("un").value;
            var password = document.getElementById("pass").value;

            if (username === "" || password === "") {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }
        }

        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>
</body>
</html>
