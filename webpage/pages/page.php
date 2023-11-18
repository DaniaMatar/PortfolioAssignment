
<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}

?>

<html>
    <head>
        <title>
            DaniaMatarCV
        </title>
        <link rel="stylesheet" href="../css/main.css">
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

            <p class="welcome">Welcome <?php echo $_SESSION["username"]; ?>!</p>
          <form action="" method="post">
                <input type="submit" name="logout" value="logout" id="logout">
            </form>
        </div>
        
        <div class="main">
            <div class="left">
                <div class="animation">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
                    <dotlottie-player src="https://lottie.host/74793cba-c4d9-4a25-9bab-8dd22d4dbd5b/22hczvsVfR.json" background="transparent" speed="1" style="width: 500px; height: 550px;" loop autoplay></dotlottie-player>
                </div>

                <div><a href="page3.php"><button class="button" role="button">Contact me</button></a></div>

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