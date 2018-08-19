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
            echo $file;
            echo "</a>";
            echo "<form action=\"choice.php\" method=\"post\">";
            echo "<button name=\"del\" type = \"submit\"  value=" . $file . ">削除</button>";
            echo "</form>";
		echo nl2br("\n");
	}
}
		 echo "<a href=\"./index.php\">" . 戻る . "</a>";

?>