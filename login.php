<?php

require_once 'logininfo.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    if(isset($_POST['uname']) && isset($_POST['passwd'])){
        $uid = $_POST['uname'];
        $passwd = $_POST['passwd'];
        if(($uid === $uname) && ($pass === $passwd)){
            if(!isset($_SESSION['valid'])){
                   session_start();
            }
            $_SESSION['valid'] = 'valid';
            session_write_close();
            header("Location: ./novel/index.php");
            //exit();
            echo 'success!';
    }else{
        echo 'faild...';
    }
    }else{
        echo "check name and passwd";
    }