<?php

include_once 'connection.php';

$cod = $_POST['id'];
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


$query ="UPDATE empresa SET nom_empresa='$nom', RNC='$rnc', identidad='$iden', dep_formacion='$dep', 
alcance='$alcance', act_economica='$act_eco', indrustria='$ind', tamaño='$tamn', direccion='$direccion', 
sector='$sector', seccion='$seccion', municipio='$municipio', provincia='$provincia', pais_operador='$pais', 
tel_principal='$tel_prin', tel_directo='$tel_direc', email='$email', contraseña='$contra', 
telf_cont='$tel_cont', ext='$ext', correo='$correo_cont' WHERE id='$cod'";


mysqli_query($mysqli, $query);
mysqli_close($mysqli);

header("location: empresa.php?update=success");

$mysqli->close();
?>

?>