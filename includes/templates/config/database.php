<?php
function conectarDB() : mysqli{
    $db = mysqli_connect('127.0.0.1','root','1234','bienesraices_curd');


    if(!$db){
        echo"ERROR";
        exit;
    }else{
       return $db;
    }
}
?>