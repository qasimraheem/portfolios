<?php
include ("../includes/config.php");
$fn=" ";
$ln="";
$em="";
if(isset($_COOKIE["fn"])){
    $fn=$_COOKIE["fn"];
}
if(isset($_COOKIE["ln"])){
    $ln=$_COOKIE["ln"];
}
if(isset($_COOKIE["em"])){
    $em=$_COOKIE["em"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Service 3</title>
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
<section class="layout-width layout-padding" id="sub-services">
    <h2 class="heading">Growing</h2>
    <div id="services-form-left">
        <form action="order-action.php" method="post">
            <div >
                <label>First Name:</label>
                <input type="text" name="fn"  value="<?php echo $fn ?>" required/>
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="ln"  value="<?php echo $ln;?>" required/>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="em" value="<?php echo $em;?>" required/>
            </div>
            <div>
                <label id="message">Message:    </label>
                <textarea name="meg"></textarea>
            </div>
            <input type="Submit" value="Order"/>
        </form>
    </div>
    <div id="services-right"> <img src="../graphics/grow.png" alt=""></div>
    <div class="clear-fix"></div>
</section>
<?php
include ("../includes/footer.php");
?>
</body>
</html>