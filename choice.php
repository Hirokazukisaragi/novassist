<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $delf = $_POST['del'];
 unlink($delf);
 echo $delf . "を削除しました";
 echo "<a href=\"./all.php\">" . 戻る . "</a>";