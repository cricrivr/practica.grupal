<?php
         include_once 'connection.php';

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
                  
$query =  "INSERT INTO `ipisa_pag`.`alumno` 
( `a_gradu`, `insti`, `curso`, `matricula`, `cedula`, `carrera_tec`, `tec_basic`,
 `nombres`, `apellidos`, `fecha_nac`, `sexo`, `direccion`, `sector`, `seccion`, `municipio`,
  `provincia`, `pais_nac`, `tel_res`, `tel_movil`, `lic_conducir`, `vehiculop`, `email`, `contra`)
   VALUES ( $a, '$b', '$c', '$d', '$e', '$f', '$g',
    '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o',
    '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w');
";
                mysqli_query($mysqli, $query);
          echo $query;     
                

      // header("location: alumno.php?insert=success");
            ?>