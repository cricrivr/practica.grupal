<?php

include_once 'connection.php';

$id_a = $_REQUEST['id'];
$a = $_REQUEST['grad'];
$b = $_REQUEST['insti'];
$c = $_REQUEST['cur'];
$d = $_REQUEST['mat'];
$e = $_REQUEST['ced'];
$f = $_REQUEST['carrera'];
$g = $_REQUEST['tbas'];
$h = $_REQUEST['nom'];
$i = $_REQUEST['ape'];
$a1 = $_REQUEST['year'];
$a2 = $_REQUEST['mes'];
$a3 = $_REQUEST['dia'];
$j = $a1."-".$b."-".$a3;


$k = $_REQUEST['sex'];
$l = $_REQUEST['dir'];
$m = $_REQUEST['sect'];
$n = $_REQUEST['secc'];
$o = $_REQUEST['mun'];
$p = $_REQUEST['prov'];
$q = $_REQUEST['pais'];
$r = $_REQUEST['telf_res'];
$s = $_REQUEST['telf_mov'];
$t = $_REQUEST['lic'];
$u = $_REQUEST['veh'];
$v = $_REQUEST['mail'];
$w = $_REQUEST['clave'];

$query = "UPDATE `ipisa_pag`.`alumno` 
SET `a_gradu` = $a, `insti` = '$b', `curso` = '$c',
 `matricula` = '$d', `cedula` = '$e', `carrera_tec` = '$f',
  `tec_basic` = '$g', `nombres` = '$h', `apellidos` = '$i',
   `fecha_nac` = '$j', `sexo` = '$k', `direccion` = '$l',
    `sector` = '$m', `seccion` = '$n', `municipio` = '$o',
     `provincia` = '$p', `pais_nac` = '$q', `tel_res` = '$r',
      `tel_movil` = '$s', `lic_conducir` = '$t', `vehiculop` = '$u',
       `email` = '$v', `contra` = '$w' WHERE (`id_alum` = '2');
";



mysqli_query($mysqli, $query);

header("location: alumno.php");

?>
