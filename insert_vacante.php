<?php
         include_once 'connection.php';

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
                  
                
$consulta =  "INSERT INTO `ipisa_pag`.`vacantes` (`id_empresa`, `nom_puesto`, `funcion_puesto`, `sueldo`, `tipo_contrato`, `correo_curriculum`, `persona_contacto`, `telefono`, `hora_entrada`, `hora_salida`) VALUES ('$empresa', '$puesto', '$funcion', '$sueldo', '$contrato', '$correo', '$persona', '$telefono', '$hora_a', '$hora_b');";
                echo $consulta;
                mysqli_query($mysqli, $consulta);
               
                

            header("location: vacantes.php?insert=success");
            ?>