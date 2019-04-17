<header>
    <div class="layout-width">
        <?php
        if((isset($_SESSION["loggedin"]))&&(isset($_SESSION["loggedin"]))) {
            ?>
            <a href="<?php echo $path; ?>admin/logoff.php" id="logofflink"><div id="logoff">Log off</div></a>

            <?php
        }
        ?>
        <label  id="mobile-menu"  for="mm">X</label>
        <div id="logo"><a href="index.php"><h1></h1></a></div>
        <div class="clear-fix"></div>
    </div>
</header>