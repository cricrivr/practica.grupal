<?php
require("connection.php");

$id=$_REQUEST['id'];

$query = "DELETE FROM empresa where id=$id";
mysqli_query($mysqli, $query);

header("location: Empresa.php?insert=success");
?>