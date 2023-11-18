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
$galleryJson = file_get_contents('../Json/gallery.json');
$gallery = json_decode($galleryJson, true);
?>
<html>
<head>
    <title>Gallery</title>
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

    <div class="content">
        <?php foreach ($gallery as $image): ?>
            <div class="img-frame">
                <img src="<?php echo $image; ?>" class="my-img" tabindex="0">
                <img src="<?php echo $image; ?>" class="largeImage" id="largeImage<?php echo substr($image, -6, 1); ?>">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>