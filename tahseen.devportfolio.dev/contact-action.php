<?php
include ("includes/config.php");
if((isset($_SESSION["loggedin"]))&&(isset($_SESSION["loggedin"]))) {

//TODO: Read,Sanatize & Validate


    $fn = $_POST["fn"];
    $ln = $_POST["ln"];
    $em = $_POST["em"];
    $meg = $_POST["meg"];
    $smeg = sanitizeInput($meg);
    $sfn = sanitizeInput($fn);
    $sln = sanitizeInput($ln);
    $sem = sanitizeInput($em);

//TODO: SETCOOKIES
    setcookie("fn", $sfn, time() + 60 * 60 * 24 * 30);
    setcookie("ln", $sln, time() + 60 * 60 * 24 * 30);
    setcookie("em", $sem, time() + 60 * 60 * 24 * 30);

//TODO: Email
    $to = "admin@gmail.com";
    $subject = "Feedback From Website";
    $message = "From:" . $sfn . " " . $sln;
    $message = $message . "Message = " . $smeg;
    $header = "From:" . $sem;
//mail($to,$subject,$message,$header);
//TODO: Redirect
    header("Location:index.php");
}
else{
    header("Location:admin/index.php?MSG=UAA");
}

