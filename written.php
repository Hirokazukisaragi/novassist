<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['novel']) && isset($_POST['title'])){
$novel = $_POST['novel'];
    $title = $_POST['title'];
    $novel = nl2br($novel);
    $novel =  "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title></title>
<meta charset=\"utf-8\">
<![endif]-->
</head>
<body>" . $novel . "</body></html>";
if(!file_exists("./novel/". $title)){
    touch( "./novel/" . $title );
    $fh = fopen("./novel/".$title, "wb");
    fwrite($fh, $novel);
    fclose($fh);
    echo '書き込みました';
}
}else{
    echo "書き込めませんでした";
}
?>
