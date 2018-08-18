<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title></title>
    </head>
    <body>
        <form action="written.php" method="post">
            タイトル<br>
            <input type="text"  name ="title"><br/>
            本文<br>
            <textarea name="novel" cols="80" rows="24" wrap="hard" maxlength="1000000">
            </textarea>
            <br>
<button  type = “submit” value =“send“>書き込む</button>
        </form>
        
        <form action="all.php" method="post">
            <button type="submit" value="all">all</button>
        </form>
        
</html>
