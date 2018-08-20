<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_SESSION['valid'] === 'valid'){
    header("Location: ./novel/index.php");
    exit();
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login</title>
    </head>
    <body>
        <form name="login" action="login.php" method="post">
            ユーザー名:<input type="text" name="uname">
            <br>
            パスワード<input type="password" name="passwd">
            <br>
            <button type="submit" name="loginb" value="ログイン">ログイン</button>
        </form>
    </body>
</html>