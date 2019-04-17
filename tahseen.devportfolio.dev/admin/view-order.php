<?php
include ("../includes/config.php");
$fn=$_GET["f"];
include("../order/$fn");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <?php
    include ("../includes/meta_css.php");
    ?>
</head>
<body>
<?php
include ("../includes/header.php");
?>
<?php
include ("../includes/nav.php");
?>
<section class="layout-width layout-padding">
    <h2>Order:</h2>
    <?php
    echo "Full Name: " .$name . "<br/>";
    echo "Email: " .$email. "<br/>";
    echo "Message: " .$message. "<br/>";
    ?>
</section>
<?php
include ("../includes/footer.php");
?>
</body>
</html>