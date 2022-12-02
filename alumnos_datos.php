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

$sql="SELECT * FROM alumno WHERE id_alum=$id;";

$result = mysqli_query($mysqli,$sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
    $row = mysqli_fetch_assoc($result);
    $a = $row['id_alum']; 

$b = $row['a_gradu']      ;
$c = $row['insti']        ;
$d = $row['curso']        ;
$e = $row['matricula']    ;
$f = $row['cedula']       ;
$g = $row['carrera_tec']  ;
$h = $row['tec_basic']    ;
$i = $row['nombres']      ;
$j = $row['apellidos']    ;
$k = $row['fecha_nac']    ;
$l = $row['sexo']         ;
$m = $row['direccion']    ;
$n = $row['sector']       ;
$o = $row['seccion']      ;
$p = $row['municipio']    ;
$q = $row['provincia']    ;
$r = $row['pais_nac']     ;
$s = $row['tel_res']      ;
$t = $row['tel_movil']    ;
$u = $row['lic_conducir'] ;
$v = $row['vehiculop']    ;
$w = $row['email']        ;
$x = $row['contra']       ;
   
}

?>
       <form action="alumno_update.php" method="POST" >


<label for="graduacion">Año de graduacion: </label>
<input type="text" id="graduacion" name="grad" value="<?php  echo $b?>"  ><br> <br>

<label for="inst">Institución eduactiva a la que pertenece: </label>
<input type="text" id="inst" name="insti" value="<?php  echo $c?>" ><br> <br>

<label for="curso">Curso: </label>
<input type="text" id="curso" name="cur"  value="<?php  echo $d?>" ><br> <br>

<label for="matricula">Matrícula: </label>
<input type="text" id="matricula" name="mat"  value="<?php  echo $e?>" ><br> <br>

<label for="cedula">Cédula de identidad: </label>
<input type="text" id="cedula" name="ced"  value="<?php  echo $f?>" ><br> <br>

<label >Carrera técnica: <?php echo "<b> $g </b>"?> <br> cambiar a:
<select name="carrera">
    <option value="info">Desarrollo y administración de aplicaciones informáticas</option>
    <option value="eba">Muebles y estructura de la madera</option>
    <option value="eldad">Electricidad</option>
    <option value="elca">Electrónica</option>
    <option value="gat">Gestión administrativa y tributaria</option>
    <option value="meca">Mecánica industrial</option>
    <option value="auto">Mecánica automotriz</option>
    <option value="cyp">Confección y patronaje</option>
</select>
</label><br> <br>

<label for="tecbasico">Técnico básico: </label>
<input type="text" id="tecbasico" name="tbas"  value="<?php  echo $h?>" ><br> <br>

<label for="nombres">Nombres: </label>
<input type="text" id="nombres" name="nom"  value="<?php  echo $i?>" ><br> <br>

<label for="apellidos">Apellidos: </label>
<input type="text" id="apellidos" name="ape"  value="<?php  echo $j?>" ><br> <br>

<label >Fecha de nacimiento: <?php  echo "<b>$k</b>"?> <br> cambiar a: </label>
<select name="year" >
    <option value="1600">-</option>
    <?php
        $a = 1600;
            while($a <= 2022)
            {
            print "<option value='".$a."'>".$a."</option>";
            $a++;
            }
    ?>
    <option value="2022" selected>2022</option>
</select>
<select name="mes">
        <option value="01">enero</option>
        <option value="02">febrero</option>
        <option value="03">marzo</option>
        <option value="04">abril</option>
        <option value="05">mayo</option>
        <option value="06">junio</option>
        <option value="07">julio</option>
        <option value="08">agosto</option>
        <option value="09">septiembre</option>
        <option value="10">octubre</option>
        <option value="11">noviembre</option>
        <option value="12">diciembre</option>
</select>
<select name="dia">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="06">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">12</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>


</select>

    <br> <br>

<label for="sexo">sexo:  <?php  echo $l?> <br> cambiar a:
    <select id="sexo" name="sex">
        <option value="fem">femenino</option>
    <option value="masc">masculino</option>
   <option value="ni">prefiero no decirlo</option>
    </select>
</label>
<br> <br>

<label for="direccion">Dirección: </label>
<input type="text" id="direccion" name="dir"  value="<?php  echo $m?>" ><br> <br>


<label for="sector">Sector: </label>
<input type="text" id="sector" name="sect"  value="<?php  echo $n?>" ><br> <br>

<label for="seccion">Sección: </label>
<input type="text" id="seccion" name="secc"  value="<?php  echo $o?>" ><br> <br>

<label for="municipio">Municipio: </label>
<input type="text" id="municipio" name="mun"  value="<?php  echo $p?>" ><br> <br>

<label for="provincia">Provincia: </label>
<input type="text" id="provincia" name="prov"  value="<?php  echo $q?>" ><br> <br>

<label for="paises">País de nacionalidad: <?php  echo "<b>$r</b>"?>  <br> cambiar a:
    <select id="paises" name="pais">
    <option value="rd">República Dominicana</option>
   <option value="venezuela">Venezuela</option>
    <option value="costar">Costa Rica</option>
    <option value="puertor">Puerto Rico</option>
    <option value="colombia">Colombia</option>
    <option value="españa">España</option>
    <option value="otro">Otro</option>
    </select>
</label><br> <br>

<label for="telresidencial">Teléfono residencial: </label>
<input type="text" id="telresidencial" name="telf_res" value="<?php  echo $s?>" ><br> <br>

<label for="telmovil">Teléfono móvil: </label>
<input type="text" id="telmovil" name="telf_mov"  value="<?php  echo $r?>" ><br> <br>

<label for="licenciacon">Posee licencia de conducir </label>
<input type="checkbox" id="licenciacon" name="lic" ><br> <br>

<label for="vehiculo">Posee vehículo propio: </label>
<input type="checkbox" id="vehiculo" name="veh"><br> <br>

<label for="email">Email: </label>
<input type="text" id="email" name="mail"  value="<?php  echo $w?>" ><br> <br>


<label for="contra">Elige una contraseña: </label>
<input type="password" id="contra" name="clave"  value="<?php  echo $x?>" ><br> <br>

<br>

<input type="submit" value="actualizar">



</form>
</center>




</body>
</html>