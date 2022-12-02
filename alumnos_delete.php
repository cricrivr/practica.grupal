<?php
include_once 'connection.php';

$id = $_REQUEST['id'];
$query = "DELETE FROM alumno WHERE id_alumgit =$id";

mysqli_query($mysqli, $query);
header("location: alumno.php?insert=success");

?>