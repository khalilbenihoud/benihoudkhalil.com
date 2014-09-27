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
                    <li><a href="photography.php">Photography</a></li>
                    <li><a href="info.php"><strong style="font-weight:600;">About me</strong></a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>

<?php
include("pages/aboutme.php");
?>

<?php
include("pages/footer.php");
?>