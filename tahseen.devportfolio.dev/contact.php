<?php
include ("includes/config.php");
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
    <title>Contact</title>
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
    <h2 class="heading">Contact US</h2>
    <p class="par">Our team of customer care ninjas is ready to hear from yo.</p>
    <div id="contact-left">
        <h2>Reach out to us :</h2>
        <p class="par">If you have a Question?Have some suggestions or just want to hi? Contact US.</p>
      <form action="contact-action.php" method="post" id="contact-form">
          <div>
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
              <label id="msg">Message:    </label>
              <textarea name="meg" placeholder="Type your message here"></textarea>
          </div>
          <input type="Submit" value="Send Feedback"/>
      </form>
    </div>
    <div id="contact-right">
        <h2>Customer Care :</h2>
        <p class="par">Not sure where to start ?Need help adding that  extra mojo to your landing page?Just visit out help center or got in touch with us.</p>
        <div>
            <span id="contact-circle"></span>
            <div id="contact-name">M Tahseen Mashaidi<br/>03484379948</div>
        </div>
        <div class="clear-fix"></div>
        <h2 class="heading">Other way to connect</h2>
        <div id="contact-icon">
            <a href="https://web.facebook.com/login/" ><h2 id="fb"></h2></a>
            <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><h2  id="mail"></h2></a>
        </div>
    </div>
    <div class="clear-fix"></div>
</section>
<?php
include ("includes/footer.php");
?>
</body>
</html>