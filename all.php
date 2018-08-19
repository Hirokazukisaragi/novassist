<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

     
$dir = 'novel/';

$filelist = glob($dir . '*');

foreach ($filelist as $file) {

	if (is_file($file)) {
            $link = "<a href=" . "http://lightnovel-club.sakura.ne.jp/"  . $file . ">";
            echo $link;
            
		print($file) ;
		echo nl2br("\n");
	}
}
?>