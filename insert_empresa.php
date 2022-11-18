<?php

include_once 'conexion.php';
if ($_POST) {
    insertar($conexion);
}

function insertar ($conexion) {
$nom_empresa = $_POST['nom_empresa'];
$rnc = $_POST['RNC'];
$iden_empresa = $_POST['iden_empresa'];
$dep_formacion = $_POST['dep_formacion'];
$alcance_emp = $_POST['alcance_emp'];
$direccion = $_POST['direccion'];
$sector = $_POST['sector'];
$municipio = $_POST['municipio'];
$provincia = $_POST['provincia'];
$pais = $_POST['pais'];
$tel_principal = $_POST['tel_principal'];
$tel_directo = $_POST['tel_directo'];
$email = $_POST['email'];
$conf_email = $_POST['conf_email'];
$contra = $_POST['contra'];
$conf_contra =$_POST['conf_contra'];

$consulta = "INSERT INTO `form2` (nom_empresa, rnc, iden_empresa, dep_formacion, direccion, sector, municipio, provincia, pais, tel_principal, tel_directo, email, conf_email, contra, conf_contra )VALUES ('$nom_empresa','$rnc','$iden_empresa','$dep_formacion','$direccion','$sector','$municipio','$provincia','$pais','$tel_principal','$tel_directo','$email','$conf_email','$contra','$conf_contra');";
mysqli_query($conexion, $consulta);
mysqli_close($conexion);

}
?>