<?php
include ("includes/config.php");
if((isset($_SESSION["loggedin"]))&&(isset($_SESSION["loggedin"]))) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Portfolio</title>
        <?php
        include("includes/meta_css.php");
        ?>
    </head>
    <body>
    <?php
    include("includes/header.php");
    ?>
    <?php
    include("includes/nav.php");
    ?>
    <section class="layout-width layout-padding">
        <h2 class="heading">Welcome In My Portfolio</h2>
        <p class="par">These are many project Which we completed but we use these language to complete
            our projects.We use HTML5,CSS3,Java and C# to complete
        </p>
        <div id="portfolio_main">
            <div class="portfolio"><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5" target="_blank"><img src="graphics/html5-logo.png" alt=""/></a>  </div>
            <div class="portfolio"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3" target="_blank"><img src="graphics/css3-logo.png" alt=""/></a>  </div>
            <div class="portfolio"><a href="https://www.oracle.com/java/" target="_blank"><img src="graphics/java_logo.png" alt=""/> </a> </div>
            <div class="portfolio"><a href="https://www.learncs.org/" target="_blank"><img src="graphics/csharp-logo.png" alt=""/> </a> </div>
        </div>
    </section>
    <?php
    include("includes/footer.php");
    ?>
    </body>
    </html>
    <?php
}
else{
    header("Location:admin/index.php?MSG=UAA");
}