<?php

include('connection.php');

$con = connection_db();

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";

$query = mysqli_query($con,$sql);

if ($query){
    header("Location: index.php");
}

?>