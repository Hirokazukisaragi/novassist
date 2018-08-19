<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title></title>
    </head>
    <body>
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
            echo "<div class=\"fname\">";
            //$link = "<a href=" . "http://lightnovel-club.sakura.ne.jp/"  . $file . ">";
            echo basename($file);
            echo $file;
            echo "</a>";
            echo "<form action=\"choice.php\" method=\"post\">";
            echo "<button name=\"del\" type = \"submit\"  value=" . $file . ">削除</button>";
            echo "</form>";
            echo "<form action=\"read.php\" method=\"post\">";
            echo "<button name=\"read\" type=\"submit\" value=" .$file . ">読み込み</button>";
            echo "</form>";
            echo "<form action=\"index.php\" method=\"post\">";
            echo "<button name=\"edit\" type=\"submit\" value=" .$file. ">編集</button>";
            echo "</form>";
            echo "</div>";
		echo nl2br("\n");
	}
}
		 echo "<a href=\"./index.php\">" . 戻る . "</a>";

?>
    </body>
</html>