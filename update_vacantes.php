<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>editar estudiantes</h2>

<?php

require_once 'connection.php';

$id=$_REQUEST['id'];
echo $id;

$sql="SELECT * FROM vacantes WHERE id_vacante=$id;";

$result = mysqli_query($mysqli,$sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
    $row = mysqli_fetch_assoc($result);
    $a = $row['id_vacante'];
    $b = $row['id_empresa'];
    $c = $row['nom_puesto'];
    $d = $row['funcion_puesto'];
    $e = $row['sueldo'];
    $f = $row['tipo_contrato'];
    $g = $row['correo_curriculum'];
    $h = $row['persona_contacto'];
    $i = $row['telefono'];
    $j = $row['hora_entrada'];
    $k = $row['hora_salida'];
}

?>

<form action="fupdatate_vacante.php" method="POST" >


            <label >Vacante id: </label>
            <input type="text" name="id_va" value="<?php echo $a ?>"><br> <br>

            <label >Empresa: </label>
            <input type="text" name="empr" value="<?php echo $b ?>"><br> <br>
            
            <label >Nombre del puesto: </label>
            <input type="text" name="nomb" value="<?php echo $c ?>" ><br> <br>
            
            <label >Funcion del puesto: </label>
            <input type="text" name="func" value="<?php echo $d ?>"><br> <br>
            
            <label >sueldo: </label>
            <input type="text" name="suel" value="<?php echo $e ?>" ><br> <br>

            <label for="cont">Tipo Conctrato:</label>
            
            <?php if ($f==0) {
                echo "<i>fijo<i><br> cambiar a:";
            }
             else if ($f==1) {
             
                echo "<i>temporal<i><br> cambiar a:";

            }?>
            <select name="cont" >
            
            <option value='0' selected >FIJO</option>
            <option value='1'  >TEMPORAL</option>
                        
            </select> <br> <br>

            <label >Correo curriculum: </label>
            <input type="text" name="corr" value="<?php echo $g ?>"><br> <br>

            <label > persona contacto: </label>
            <input type="text" name="pers" value="<?php echo $h ?>"><br> <br>

            <label >telefono: </label>
            <input type="text" name="telf" value="<?php echo $i ?>"><br> <br>

            <label >horario: </label>
                <label >hora de entrada: 
                    <input type="text" name="hora_a"  value="<?php echo $j ?>">
                </label>

           
                <label >hora de salida: 
                    <input type="text" name="hora_b" value="<?php echo $k ?>">
                </label>


            <br> <br>

            <button>enviar</button>
        
        </form>





</body>
</html>