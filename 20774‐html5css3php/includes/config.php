<?php
session_start();
$path="http://devportfolio.dev/20774‐html5css3php/";
$username="admin@gmail.com";
$password="1234";

function sanitizeInput($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}