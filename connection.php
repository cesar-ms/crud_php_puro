<?php

function connection_db(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "php_crud";

    $connect = mysqli_connect($host,$user,$pass);

    mysqli_select_db($connect,$db);

    return $connect;
}

?>