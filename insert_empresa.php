<?php

include_once 'conexion_m.php';
if ($_POST) {
    insertar($conexion);
}

function insertar ($conexion) {
$nom = $_POST['nom'];
$rnc = $_POST['rnc'];
$iden= $_POST['iden'];
$dep = $_POST['dep'];
$alcance= $_POST['alcance'];
$act_eco = $_POST['act_e'];
$ind = $_POST['indu'];
$tamn = $_POST['tam'];
$direccion = $_POST['dire'];
$sector = $_POST['sec'];
$seccion = $_POST['secc'];
$municipio = $_POST['muni'];
$provincia = $_POST['prov'];
$pais = $_POST['pais'];
$tel_prin = $_POST['telf1'];
$tel_direc = $_POST['telf2'];

//email y contra: variables de confirmacion y original
$email = $_POST['mail'];
$email_C = $_POST['emailconf'];

$contra = $_POST['contra'];
$contra_C = $_POST['contraconf'];

//variables del apartado de contacto de la empresa
$tel_cont = $_POST['telf3'];
$ext = $_POST['ext'];
$correo_cont = $_POST['correo'];


$consulta= "INSERT INTO `formulario2`.`empresa` (`nom_empresa`, `RNC`, `identidad`, `dep_formacion`, `alcance`, `act_economica`, `indrustria`, `tamaño`, `direccion`, `sector`, `seccion`, `municipio`, `provincia`, `pais_operador`, `tel_principal`, `tel_directo`, `email`, `contraseña`, `telf_cont`,`ext`,`correo`) 
VALUES ('$nom', '$rnc', '$iden', '$dep', '$alcance', '$act_eco', '$ind', '$tamn', '$direccion', '$sector', '$seccion', '$municipio', '$provincia', '$pais', '$tel_prin', '$tel_direc', '$email', '$contra', '$tel_cont','$ext','$correo_cont');";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

}
header("location: empresa.php?insert=success")

?>