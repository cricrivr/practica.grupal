<?php

include_once 'connection.php';

$cod =     $_REQUEST['id'];
$nom =     $_REQUEST['nom'];
$rnc =     $_REQUEST['rnc'];
$iden=     $_REQUEST['iden'];
$dep =     $_REQUEST['dep'];
$alcance=  $_REQUEST['alcance'];
$act_eco = $_REQUEST['act_e'];
$ind =     $_REQUEST['indu'];
$tamn =    $_REQUEST['tam'];
$direccion=$_REQUEST['dire'];
$sector =  $_REQUEST['sec'];
$seccion = $_REQUEST['secc'];
$municipio=$_REQUEST['muni'];
$provincia=$_REQUEST['prov'];
$pais =    $_REQUEST['pais'];
$tel_prin =$_REQUEST['telf1'];
$tel_direc=$_REQUEST['telf2'];
//email y contra: variables de confirmacion y original
$email = $_REQUEST['mail'];

$contra = $_REQUEST['contra'];

//variables del apartado de contacto de la empresa
$tel_cont = $_REQUEST['telf3'];
$ext = $_REQUEST['ext'];
$correo_cont = $_REQUEST['correo'];


$query ="UPDATE empresa SET nom_empresa='$nom', RNC='$rnc', identidad=$iden, dep_formacion=$dep, 
alcance=$alcance, act_economica='$act_eco', indrustria=$ind, tamaño='$tamn', direccion='$direccion', 
sector='$sector', seccion='$seccion', municipio='$municipio', provincia='$provincia', pais_operador='$pais', 
tel_principal='$tel_prin', tel_directo='$tel_direc', email='$email', contraseña='$contra', 
telf_cont='$tel_cont', ext='$ext', correo='$correo_cont' WHERE id='$cod';";


mysqli_query($mysqli, $query);

header("location: empresa.php?update=success");

?>

?>