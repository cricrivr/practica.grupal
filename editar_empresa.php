<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<h2>editar empresa</h2>


<FORM ACTION="editar_m.php" METHOD="POST">


<?php

require_once 'connection.php';

$id=$_REQUEST['id'];
echo $id;

$sql="SELECT * FROM empresa WHERE id=$id;";

$result = mysqli_query($mysqli,$sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
    $row = mysqli_fetch_assoc($result);
    $a = $row['nom_empresa'];
    $b = $row['RNC'];
    $c = $row['identidad'];
    $d = $row['dep_formacion'];
    $e = $row['alcance'];
    $f = $row['act_economica'];
    $g = $row['indrustria'];
    $h = $row['tamaño'];
    $i = $row['direccion'];
    $j = $row['sector'];
    $k = $row['seccion'];
    $l = $row['municipio'];
    $m = $row['provincia'];
    $n = $row['pais_operador'];
    $o = $row['tel_principal'];
    $p = $row['tel_directo'];
    $q = $row['email'];
    $r = $row['contraseña'];
    $s = $row['telf_cont'];
    $t = $row['ext'];
    $v = $row['correo'];
}

?>



<br>
<br>
<Label>ID de la empresa:</Label>
<br>
<INPUT TYPE="text" NAME="id" VALUE="<?php echo $id?>" >
<br>

<br>
<Label>Nombre de la empresa:</Label>
<br>
<INPUT TYPE="text" NAME="nom" VALUE="<?php echo $a?>" >
<br>
<br>

<Label>RNC:</Label>
<br>
<INPUT TYPE="text" NAME="rnc"  VALUE="<?php echo $b?>" >
<br>
<br>


<Label>Desea que se conozca la identidad de su empresa? : 
    
        <?php
        if ($c == 1) {
            echo "si";
        } else {
            echo "no";
        }
        ?>
        <br>  cambiar a :
</Label>
<br>
<INPUT TYPE="radio" NAME="iden" VALUE="1" TRUE >SI
<INPUT TYPE="radio" NAME="iden" VALUE="0">NO
<br>
<br>

<Label>Dispone su empresa de un Departamento de Formación dentro de la empresa?

<?php
if ($d == 1) {
    echo "si";
} else {
    echo "no";
}
 
?>
  <br> cambiar a :

</Label>
<br>
<INPUT TYPE="radio" NAME="dep" VALUE="1" >SI
<INPUT TYPE="radio" NAME="dep" VALUE="0">NO
<br>
<br>

<Label>Alcance de la empresa

<?php
if ($d == 1) {
    echo "Multinacional";
} else {
    echo "Nacional/local";
}
 
?>
 <br> cambiar a :


</Label>
<br>
<INPUT TYPE="radio" NAME="alcance" VALUE="0">Nacional/local
<INPUT TYPE="radio" NAME="alcance" VALUE="1">Multinacional
<br>
<br>

<Label>Actividad económica a la que se dedica la empresa </Label>
<br>
<TEXTAREA COLS="50" ROWS="4" NAME="act_e"  VALUE="<?php echo $f?>" >
</TEXTAREA>
<br>
<br>
<label >taller tipo:

<?php
if ($d == 1) {
    echo "industrial";
} else {
    echo "servicios";
}
 
?>
 <br> cambiar a :

</label>
<select name="indu">

<option value="1">industrial</option>
<option value="0">servicios</option>
</select>
<br><br>

<Label>Tamaño:</Label>
<br>
<INPUT TYPE="text" NAME="tam"  VALUE="<?php echo $h?>" >
<br>
<br>
<Label>Direccion:</Label>
<br>
<INPUT TYPE="text" NAME="dire"  VALUE="<?php echo $i?>" >
<br>
<br>

<Label>Sector:</Label>
<br>
<INPUT TYPE="text" NAME="sec"  VALUE="<?php echo $j?>" >
<br>
<br>

<Label>Seccion:</Label>
<br>
<INPUT TYPE="text" NAME="secc"  VALUE="<?php echo $k?>" >
<br>
<br>

<Label>Municipio:</Label>
<br>
<INPUT TYPE="text" NAME="muni"  VALUE="<?php echo $l?>" >
<br>
<br>


<Label>Provincia: 
    <?php echo "<b> $m</b>"?>
</Label>
<br>
<SELECT NAME="prov">
<OPTION VALUE="Santiago">Santiago
<OPTION VALUE="Santo Domingo">Santo Domingo
<OPTION VALUE="La vega">La vega
<OPTION VALUE="Azúa">Azúa
<OPTION VALUE="Baoruco">Baoruco
<OPTION VALUE="Barahona">Barahona
<OPTION VALUE="Dajabón">Dajabón
<OPTION VALUE="Distrito Nacional">Distrito Nacional
<OPTION VALUE="Duarte">Duarte
<OPTION VALUE="Elías Pina">Elías Pina
<OPTION VALUE="El Seibo">El Seibo
<OPTION VALUE="Espaillat">Espaillat
<OPTION VALUE="Hato Mayor">Hato Mayor
<OPTION VALUE="Independencia">Independencia
<OPTION VALUE="La Altagracia">La Altagracia
<OPTION VALUE="La Romana">La Romana
<OPTION VALUE="Maria Trinidad Sanchez">Maria Trinidad Sanchez
<OPTION VALUE="Monseñor Nouel">Monseñor Nouel
<OPTION VALUE="Monte Cristi">Monte Cristi
<OPTION VALUE="Monte Plata">Monte Plata
<OPTION VALUE="Pedernales">Pedernales
<OPTION VALUE="Peravia">Peravia
<OPTION VALUE="Puerto Plata">Puerto Plata
<OPTION VALUE="Salcedo">Salcedo
<OPTION VALUE="Samana">Samana
<OPTION VALUE="Sánchez Ramírez">Sánchez Ramírez
<OPTION VALUE="San Cristobal">San Cristobal
<OPTION VALUE="San Jose de Ocoa">San Jose de Ocoa
<OPTION VALUE="San Juan">San Juan
<OPTION VALUE="San Pedro de Macorís">San Pedro de Macorís
<OPTION VALUE="Santiago Rodríguez">Santiago Rodríguez
<OPTION VALUE="Valverde">Valverde
</SELECT>
<br>
<br>

<Label>Pais donde opera la empresa:     <?php echo "<b> $n</b>"?> <br> cambiar a:</Label>
<br>
<SELECT NAME="pais">
<OPTION VALUE="Republica Dominicana">Republica Dominicana
<OPTION VALUE="Republica de Haiti">haiti
<OPTION VALUE=" Puerto Rico"> Puerto Rico
<OPTION VALUE=" Cuba ">Cuba 
<OPTION VALUE=" Jamaica">Jamaica 
</SELECT>
<br>
<br>

<Label>Telefono Principal:</Label>
<br>
<INPUT TYPE="text" NAME="telf1"  VALUE="<?php echo $o?>" >
<br>
<br>

<Label>Telefono directo:</Label>
<br>
<INPUT TYPE="text" NAME="telf2"  VALUE="<?php echo $p?>" >
<br>
<br>

<Label>Email:</Label>
<INPUT TYPE="text" NAME="mail" VALUE="<?php echo $q?>" >
<br>
<br>


<Label>Elija una contraseña:</Label>
<INPUT TYPE="password" NAME="contra" VALUE="<?php echo $r?>" >
<br>
<br>



<br>
<Label>CONTACTO DENTRO DE LA EMPRESA</Label>
<br>
<br>
<Label>Telefono:</Label>
<INPUT TYPE="text" NAME="telf3" VALUE="<?php echo $s?>" >
<Label>extencion :</Label>
<INPUT TYPE="text" NAME="ext" VALUE="<?php echo $t?>" >
<br>
<br>

<Label>Correo:</Label>
<INPUT TYPE="text" NAME="correo" VALUE="<?php echo $v?>" >
<br>
<br>

<INPUT TYPE="submit" VALUE="ENVIAR">
<br> <br> <br> <br>


</FORM>




</body>
</html>