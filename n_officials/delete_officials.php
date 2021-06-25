<?php
include "../db_conn.php";

$id= $_GET['id'];
// get id of officials and delete to database
$squary = mysqli_query($conn,"DELETE FROM `officials` WHERE id = $id");

 header("location:../index.php");
?>