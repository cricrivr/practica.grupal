<?php
require("conexion_m.php");

$id=$_REQUEST['id'];

$query = "DELETE FROM empresa where id=$id";
mysqli_query($conexion, $query);

header("location: Empresa.php?insert=success");
?>