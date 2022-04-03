<?php
include_once("config.php");
$id=$_GET['id'];
$sql="DELETE FROM `mywebsite` WHERE id=$id";
$conn->query($sql);
header("Location: update.php");
?>
