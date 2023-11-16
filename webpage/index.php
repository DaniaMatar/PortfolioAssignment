<?php 
session_start();
session_unset();
session_destroy();

setcookie("language","en",time()+10);
if (isset($_COOKIE["language"])){
    echo $_COOKIE["language"];
}
else{
    echo "language cookie doesnt exist";
}
?>
<html>
    <head>
        <title>
            DaniaMatarCV
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
        <!-- <div id="page-header"> 
            <div style="display: inline-block;margin-left: 55%;;font-size: medium; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i style="margin-right: 5px ;" class="fa fa-phone" aria-hidden="true">(+961) 76329658</i></div>
            <div style="display: inline-block;margin-left: 2%;;font-size: medium; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i style="margin-right: 5px ;" class="fa fa-envelope" aria-hidden="true">dania.matar@lau.edu</i></div>
        </div> -->
        
        <div class="main">
            <div class="animation">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
                <dotlottie-player src="https://lottie.host/74793cba-c4d9-4a25-9bab-8dd22d4dbd5b/22hczvsVfR.json" background="transparent" speed="1" style="width: 500px; height: 550px;" loop autoplay></dotlottie-player>
    
                <div><button class="button" role="button">Contact me</button></div>
            </div>
            <div class="box">
                <h1>ABOUT ME</h1>
                <hr>
                <div>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dolor tempore voluptate sit quis minima autem illum dicta ex quia, ipsum quae ut architecto maxime odit hic, iste iure! Quis.</h3>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur impedit id dignissimos, explicabo debitis, amet minus recusandae vitae delectus odio iure, repellendus omnis inventore commodi veritatis aliquid deserunt aut a!</span>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur impedit id dignissimos, explicabo debitis, amet minus recusandae vitae delectus odio iure, repellendus omnis inventore commodi veritatis aliquid deserunt aut a!</span>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur impedit id dignissimos, explicabo debitis, amet minus recusandae vitae delectus odio iure, repellendus omnis inventore commodi veritatis aliquid deserunt aut a!</span>
                </div>
            </div>
        </div>
    </body>
</html>