<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location:../index.php");
    exit();
}

?>
<html>
    <head>
        <title>
            contactinfo
        </title>
        <link rel="stylesheet" href="../css/Contactpage.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/icons.css">
    </head>
    <body>
        <div class="row" id="header">
         
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i>MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="page.php">
                            <li><i class="ico ico-l user-ico"></i>Main Page</li>
                        </a>
                        <a href="page1.php">
                            <li><i class="ico ico-l wallet-ico"></i>CV</li>
                        </a>
                        <a href="page2.php">
                            <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
                        </a>
                        <a href="page3.php">
                            <li><i class="ico ico-l user-ico"></i>Contact me</li>
                        </a>
                    </ul>
                </div>
            </div>
            <p class="welcome">Welcome <?php echo $_SESSION['username']; ?>!</p><form action="" method="post"><input type="submit" name="logout" value="logout" id="logout"></form>
        </div>
    
        <div class="body">
            <div class="contactinfo">
               
                <div class="contactitem">

                    <a href="mailto:dania.matar@lau.edu"><img src="../images/icons/mail.png" alt="mail image"></a>
                    <span>dania.matar@lau.edu</span>
                    <span>Feel free to send me an email.</span>
                </div>
                <div class="contactitem">
                    <img src="../images/icons/phone.png" alt="phone image">
                    <span>+961 76 329 658</span>
                    <span>You can reach me by phone.</span>
                </div>
                <div class="contactitem">
                    <a href="https://github.com/DaniaMatar" target="_blank"><img src="../images/icons/github-mark-white.png" alt="github image"></a>
                    <span>DaniaMatar</span>    
                    <span>Click the icon to explore my github</span>
                </div>
                <div class="contactitem">
                    <a href="https://www.linkedin.com/in/dania-matar/" target="_blank"><img src="../images/icons/linkedin.png" alt="Linked in image"></a>
                    <span>Dania Matar</span>    
                    <span>Click the icon to check my LinkedIn</span>
                </div>
            </div>
            
        </div>
    </body>
</html>