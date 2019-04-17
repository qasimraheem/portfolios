<?php
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services</title>
    <?php
    include ("includes/meta_css.php");
    ?>

</head>
<body>
<?php
include ("includes/header.php");
?>
<?php
include ("includes/nav.php");
?>
<section class="layout-width layout-padding">
    <h2 class="heading">Services</h2>
    <p class="par">There are the some services which we provide you</p>
    <div class="services">
        <img src="graphics/design.png" alt="">
        <h3 class="service-heading">Design</h3>
        <p class="par">
            In this services we make any type of design which you required.If you want this service then click on the link
        </p>
        <a href="servics/services1.php" target="_blank">Services 1</a>
    </div>
    <hr/>
    <div class="services">
        <img src="graphics/develop.png" alt="">
        <h3 class="service-heading">Develop</h3>
        <p class="par">
            In this services we make any type of development which you required.If you want this service then click on the link
        </p>
        <a href="servics/services2.php" target="_blank">Services 2</a>
    </div>
    <hr/>
    <div class="services">
        <img src="graphics/grow.png" alt="">
        <h3 class="service-heading">Grow</h3>
        <p class="par">
            In this services we make any type of marketing which you required.If you want this service then click on the link
        </p>
        <a href="servics/services3.php" target="_blank">Services 3</a>
    </div >
</section>
<?php
include ("includes/footer.php");
?>
</body>
</html>