<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    if($_SESSION['valid'] != 'valid'){
        header( "Location: ../index.php");
        
    }

if(isset($_POST['edit'])){
    //$fname = "./novel/" . $_POST['edit'];
    $fname = $_POST['edit'];
    $src = file_get_contents($_POST['edit']);
    
}else{
    $src = "";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title></title>
    </head>
    <body>
        <form action="written.php" method="post">
            タイトル<br>
            <textarea name ="title" cols="128" rows="1"><?php
            $fn = basename($fname);
            $fn = trim($fn);
            echo $fn;
            ?></textarea>
            <br>
            本文<br>
            <textarea name="novel" cols="80" rows="24" wrap="hard" maxlength="1000000"><?php
            $src = trim($src);
            echo $src;
            ?></textarea>
            <br>
            <button  type = "submit" class="btn" value ="send">書き込む</button>
        </form>
        
        <form action="all.php" method="post">
            <button type="submit" class="btn" value="all">all</button>
        </form>
        
</html>
