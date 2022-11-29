<?php

include_once 'connection.php';

$id = $_REQUEST['id_va'];
$empresa = $_REQUEST['empr'];
$puesto = $_REQUEST['nomb'];
$funcion = $_REQUEST['func'];
$sueldo = $_REQUEST['suel'];
$contrato = $_REQUEST['cont'];
$correo = $_REQUEST['corr'];
$persona = $_REQUEST['pers'];
$telefono = $_REQUEST['telf'];
$hora_a = $_REQUEST['hora_a'];
$hora_b = $_REQUEST['hora_b'];

$query = "UPDATE vacantes SET `id_empresa` = $empresa,`nom_puesto` = '$puesto', `funcion_puesto` = '$funcion',
 `sueldo` = $sueldo, `tipo_contrato` = $contrato, `correo_curriculum` = '$correo',
  `persona_contacto` = '$persona', `telefono` = '$telefono', `hora_entrada` = '$hora_a',
   `hora_salida` = '$hora_b' WHERE `id_vacante` = $id ; ";



mysqli_query($mysqli, $query);

header("location: vacantes.php");

?>
