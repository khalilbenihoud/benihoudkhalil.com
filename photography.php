<?php
include("pages/top.php");
?>

    <body>
<?php
include("slicknav/mobilenav/mobilenav.php");
?>
        <div id="left">
            <header>
                <div class="logo"></div>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="portfolio.php">Artwork</a></li>
                    <li><a href="photography.php"><strong style="font-weight:600;">Photography</strong></a></li>
                    <li><a href="info.php">About me</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div id="right">
<?php
include("pages/pictures.php");
?>




        </div>
<?php
include("pages/footer.php");
?>