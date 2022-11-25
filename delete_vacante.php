<?php
include_once 'conexion_o.php';

$id = $_REQUEST['id_v'];
$query = "DELETE FROM vacantes WHERE id_vacante=$id";

mysqli_query($mysqli, $query);
header("location: vacantes.php?insert=success");

?>