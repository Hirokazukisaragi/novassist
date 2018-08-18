<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['novel']) && isset($_POST['title'])){
$novel = $_POST['novel'];
    $title = $_POST['title'];
if(!file_exists("./novel/". $title)){
    touch( "./novel/" . $title );
    $fh = fopen("./novel/".$title, "w");
    fwrite($fh, $novel);
    fclose($fh);
    echo '書き込みました';
     file_put_contents ( "./novel/list" , $title , FILE_APPEND );
       file_put_contents ( "./novel/list" ,"\n" , FILE_APPEND );
}
}else{
    echo "書き込めませんでした";
}
?>
