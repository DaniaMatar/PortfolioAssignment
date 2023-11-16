<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <title>
            Gallery
        </title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/icons.css">
    </head>
    <body>
        <div class="row" id="header">
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i>MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="index.html">
                            <li><i class="ico ico-l user-ico"></i>Main Page</li>
                        </a>
                        <a href="page1.html">
                            <li><i class="ico ico-l wallet-ico"></i>CV</li>
                        </a>
                        <a href="page3.html">
                            <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
                        </a>
                        <a href="page4.html">
                            <li><i class="ico ico-l user-ico"></i>Contact me</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>


        <div class="content"> 
            <div class="img-frame">
                
                <img src="../images/image1.jpg" class="my-img" tabindex="0" >
                <img src="../images/image1.jpg" class="largeImage" id="largeImage1">
            </div>
            <div class="img-frame">
                <img src="../images/image2.jpg" class="my-img" tabindex="0" >
                <img src="../images/image2.jpg" class="largeImage" id="largeImage2">
                
            </div>
            <div class="img-frame">
            
                <img src="../images/image3.jpg" class="my-img"  tabindex="0">
                <img src="../images/image3.jpg" class="largeImage" id="largeImage3">
                
            </div>        
        </div>
    </body>
</html>