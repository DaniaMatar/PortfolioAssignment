<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $data = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'pass' => $_POST['pass'],
        'sex' => $_POST['sex'],
        'ageGroup' => $_POST['ageGroup'],
        'language' => $_POST['language'],
        'captcha' => isset($_POST['cbcaptcha']) ? 'true' : 'false'
    );

    // Read existing data from the JSON file
    $file_path = '../Json/info.json';
    $existing_data = file_exists($file_path) ? json_decode(file_get_contents($file_path), true) : [];

    // Add new user data to the array
    $existing_data[] = $data;

    // Convert the array to JSON format
    $json_data = json_encode($existing_data, JSON_PRETTY_PRINT);

    // Save the JSON data to the file
    file_put_contents($file_path, $json_data);

    // Optionally, you can redirect the user to a thank you page or do other actions
    // header('Location: ./pages/page.html');
    // exit;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/signUp.css"> 
        <link rel="stylesheet" href="../css/mForm.css"> 
        <link rel="stylesheet" href="../css/icons.css"> 
        <script>
            // alert("my first javascript!"); 
         </script>
        <title>
            Sign Up
        </title>
    </head>
    <body>
        <div class="row header " >
            
        </div>
        <div class="title">
            <span>Sign Up</h1>
        </div>        
        
    
        <div class="paragraph">
            <form action="" method="POST" name="signup-form">
                <label for="un">First Name</label>
                <br>
                <input type="text" name="firstname" class="txtfield">
                <br>
                <label for="un">Last Name</label>
                <br>
                <input type="text" name="lastname" class="txtfield">
                <br>
                <label for="un">Email</label>
                <br>
                <input type="text" name="email" class="txtfield">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="pass" class="txtfield">
                <br>
                <label for="pass">Confirm Password</label>
                <br>
                <input type="password" name="confirmPassword" class="txtfield">
                
                <br><br>
                <input type="radio" name="sex" checked id="r-male" value="m">
                <label for="r-male">Male</label>
                <input type="radio" name="sex" id="r-female" value="f">
                <label for="r-female">Female</label>
                <br><br>
                <input type="radio" name="ageGroup" checked id="r-above18" value="above">
                <label for="r-above18">18 years old and above</label>
                <input type="radio" name="ageGroup" id="r-below18" value="below">
                <label for="r-below18">less than 18 years old</label>
                <br>
                <br>
                <label for="sel-language">Language</label>
                <select name="language" id="sel-language" class="mSelect">
                    <option value="-1">--</option>
                    <option value="en">English</option>
                    <option value="ar">Arabic</option>
                </select>
                <br>
                <br>
                <input type="checkbox" name="cbcaptcha" id="cbcaptcha">
                <label for="cbcaptcha">I am human</label>
                <br>
                <br>
                <input type="button" value="Sign Up" class="mButton" onclick="SignUp()">
                <input type="button" value="Cancel" class="mButton" onclick="ClearForm()">
            </form>
        </div>
        <script>
            function SignUp(){
                var mForm=document.querySelector("form[name='signup-form']");
                var fn=mForm.elements["firstname"].value;
                var ln=mForm.elements["lastname"].value;
                var email=mForm.elements["email"].value;
                var pass=mForm.elements["pass"].value;
                var confPass=mForm.elements["confirmPassword"].value;
                var sex=mForm.elements["sex"].value;
                var ageGroup=mForm.elements["ageGroup"].value;
                var language=mForm.elements["language"].value;
                var captcha=mForm.elements["cbcaptcha"].checked;
                console.log("fn:"+fn);
                console.log("ln:"+ln);
                console.log("email:"+email);
                console.log("pass:"+pass);
                console.log("confPass:"+confPass);
                console.log("sex:"+sex);
                console.log("ageGroup:"+ageGroup);
                console.log("language:"+language);
                console.log("captcha:"+captcha);
        
                if ((pass!=confPass)||(pass==""))
                    alert("Passwords must be equal.");
                else
                    mForm.submit();        
            }
            function ClearForm(){
                var mForm=document.querySelector("form[name='signup-form']");
                mForm.elements["firstname"].value="";
                mForm.elements["lastname"].value="";
                mForm.elements["email"].value="";
                mForm.elements["pass"].value="";
                mForm.elements["confirmPassword"].value="";
                mForm.elements["sex"].value="m";
                mForm.elements["ageGroup"].value="above";
                mForm.elements["language"].value=-1;
                mForm.elements["cbcaptcha"].checked=false;
            }
        </script>
</body>
</html>