<?php
include ("../includes/config.php");

if((isset($_SESSION["loggedin"]))&&(isset($_SESSION["loggedin"]))) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Home</title>
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
    <section class="layout-width layout-padding" id="login_section">
        <h2 class="heading">Welcome In Admin  Home</h2>
        <h3 class="orderheading"   >Upload Brochure:</h3>
        <div id="file_upload">
          <form action="file-upload.php" method="post" enctype="multipart/form-data">
            <label for="uf">Brochure File:</label>
            <input type="file" id="uf" name="userfile"/>
            <input type="submit" name="submit" value="Upload"/>
          </form>
        </div>
        <h3 class="orderheading">Order View Detail:</h3>
        <div id="order_details">
            <?php
              $odir="../order";
              $dh=opendir($odir);
               while(false!==($afilename=readdir($dh))){
                  if(is_file($odir."/" .$afilename)){
                     echo ("<a href='view-order.php?f=" .$afilename."'>$afilename</a><br/>\n");
                  }
                  ?>
                   <br/>
                   <?php
               }
              closedir($dh);
            ?>

        </div>
    </section>
    <?php
    include("../includes/footer.php");
    ?>
    </body>
    </html>
    <?php
}
else {
    header("Location:index.php?MSG=UAA");
}
    ?>