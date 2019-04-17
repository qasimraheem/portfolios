<?php
include ("../includes/config.php");
if((isset($_SESSION["loggedin"]))&&(isset($_SESSION["loggedin"]))) {
    header("Location:home.php");
}else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Admin</title>
        <?php
        include("../includes/meta_css.php");
        ?>
    </head>
    <body>
    <?php
    include("../includes/header.php");
    ?>
    <?php
    include("../includes/nav.php");
    ?>
    <section class="layout-width layout-padding" >
        <h2 class="heading">Admin</h2>
        <?php
        if ((isset($_GET["MSG"]))) {
            if ($_GET["MSG"] == "DNF") {
                echo "<p class='warning' >ERROR:Missing Fields!</p><br/>";
            }
           else if ($_GET["MSG"] == "LDM") {
                echo "<p class='warning' >Authorization Field!Try Again</p><br/>";
            }
           else if ($_GET["MSG"] == "UAA") {
                echo "<p class='warning' >Authorization Access Attempt! Login First</p><br/>";
            }
           else if ($_GET["MSG"] == "SLO") {
                echo "<p class='success' >You have successfully Logged Off</p><br/>";
            }
        }

        ?>
        <div id="login">
            <form action="login.php" method="post">
                <input type="email" name="un" placeholder="Email Address"/><br/>
                <input type="password" name="pw" placeholder="Password"/><br/>
                <input type="submit" value="Login"/><br/>
             </form>
        </div>
    </section>
    <?php
    include("../includes/footer.php");
    ?>
    </body>
    </html>
    <?php
}
?>