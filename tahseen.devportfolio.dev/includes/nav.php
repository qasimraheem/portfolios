<nav>
    <div class="layout-width">
        <input type="checkbox" id="mm">
        <ul>
            <li><a href="<?php echo $path;?>index.php">Home</a> </li>
            <li><a href="<?php echo $path;?>portfolio.php">Portfolio</a></li>
            <li><a href="<?php echo $path;?>service.php">Services</a></li>
            <li><a href="<?php echo $path;?>about.php">About</a></li>
            <li><a href="<?php echo $path;?>contact.php">Contact</a></li>
            <?php
            if((isset($_SESSION["loggedin"]))&&(isset($_SESSION["loggedin"]))) {
                ?>
                <li id="nav-logoff"><a href="<?php echo $path; ?>admin/logoff.php">Logoff</a></li>
                <li><a href="<?php echo $path; ?>admin/home.php">Admin </a></li>
                <?php
                   }else {
                ?>
                <li><a href="<?php echo $path; ?>admin/">Login</a></li>
                <?php
            }
                ?>
        </ul>
    </div>
</nav>