<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['read'])){
    $fname = $_POST['read'];
    $novel = file_get_contents($fname);
}
    $novel =  "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title></title>
<meta charset=\"utf-8\">
<![endif]-->
</head>
<body>" . $novel . "</body></html>";
    echo $novel;
?>