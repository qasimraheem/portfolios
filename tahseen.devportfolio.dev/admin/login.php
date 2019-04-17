<?php
include ("../includes/config.php");


if((isset($_POST["un"]))&&(isset($_POST["pw"]))) {
    $un = $_POST["un"];
    $pw = $_POST["pw"];
    $sun = sanitizeInput($un);
    $spw = sanitizeInput($pw);

    if (empty($sun) || empty($spw)) {
        header("Location:index.php?MSG=DNF");
    }
    else if(($sun==$username) &&($spw==$password)){
        $_SESSION["loggedin"]=true;
        $_SESSION["email"]=$sun;
        header("Location:home.php");
    }else{
        header("Location:index.php?MSG=LDM");
    }
}