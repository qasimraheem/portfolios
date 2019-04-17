<?php
include ("../includes/config.php");
//TODO: Read,Sanatize & Validate
   $fn = $_POST["fn"];
   $ln = $_POST["ln"];
   $em=$_POST["em"];
   $meg=$_POST["meg"];
   $smeg = sanitizeInput($meg);
   $sfn = sanitizeInput($fn);
   $sln = sanitizeInput($ln);
   $sem=sanitizeInput($em);

//TODO: SETCOOKIES
setcookie("fn",$sfn,time()+60*60*24*30);
setcookie("ln",$sln,time()+60*60*24*30);
setcookie("em",$sem,time()+60*60*24*30);

//TODO: Write Order file

$file=fopen("../order/".$sem.".php","w") or die ("Unable to open file");
$txt="<?php ";
$txt  .='$name=  "'.$sfn. ' ' . $sln.   ' ";';
$txt  .='$email="' .$sem.  '";';
$txt  .='$message= " '.$smeg.  '" ;';
$txt  .=" ?> ";
fwrite($file,$txt);
fclose($file);

header("Location:../index.php");

