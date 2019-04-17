<?php
include ("../includes/config.php");
$maxfilesize=1*1024*1024;
if(($_FILES["userfile"]["type"]=="application/pdf")&&($_FILES["userfile"]["size"]<$maxfilesize)){
    if($_FILES["userfile"]["error"]>0){
        echo "return Code : " . $_FILES["userfile"]["error"] . "<br/>";
    }
    else {
        move_uploaded_file($_FILES["userfile"]["tmp_name"], "../about.pdf" );
        header("Location:../about.php");
    }
}
else{
    echo "INVALID File";
}