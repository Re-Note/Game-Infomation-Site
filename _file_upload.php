<?php
    if(isset($img_file)){
        $dir = "blog_img/";
        $file_name = basename($img_file['name']);
        $tmp_name = $img_file['tmp_name'];
        $result = move_uploaded_file($tmp_name, $dir.$file_name);
    }
?>