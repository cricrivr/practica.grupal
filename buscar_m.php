<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th name="ID">ID</th>
            <th>Nom_empresa</th>
            <th>RNC</th>
            <th>Identidad</th>
            <th>dep_formacion</th>
            <th>Alcance</th>
            <th>act_economica</th>
            <th>indrustria</th>
            <th>Tamaño</th>
            <th>Direccion</th>
            <th>Sector</th>
            <th>Seccion</th>
            <th>Municipio</th>
            <th>Provincia</th>
            <th>Pais_operador</th>
            <th>Tel_principal</th>
            <th>Tel_directo</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Telf_cont</th>
            <th>Ext</th>
            <th>Correo</th>
            <th>Tel_completo</th>
        </tr>
<?php
require("connection.php");
$nombre=$_REQUEST["nom_empresa"];
$query= "SELECT * FROM empresa WHERE nom_empresa LIKE '%$nombre%' or id='$nombre'";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['nom_empresa'] . "</td>
        <td>" . $row['RNC'] . "</td>
        <td>" . $row['identidad'] . "</td>
        <td>" . $row['dep_formacion'] . "</td>
        <td>" . $row['alcance'] . "</td>
        <td>" . $row['act_economica'] . "</td>
        <td>" . $row['indrustria'] . "</td>
        <td>" . $row['tamaño'] . "</td>
        <td>" . $row['direccion'] . "</td>
        <td>" . $row['sector'] . "</td>
        <td>" . $row['seccion'] . "</td>
        <td>" . $row['municipio'] . "</td>
        <td>" . $row['provincia'] . "</td>
        <td>" . $row['pais_operador'] . "</td>
        <td>" . $row['tel_principal'] . "</td>
        <td>" . $row['tel_directo'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['contraseña'] . "</td>
        <td>" . $row['telf_cont'] . "</td>
        <td>" . $row['ext'] . "</td>
        <td>" . $row['correo'] . "</td>
        <td>" . $row['tel_Completo'] . "</td>
        <td> <a href='eliminar_m.php?id=$row[id]'>Borrar</td>
        </tr>";;  
    }
}   else
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Nombre o ID invalido',
            text: 'Registro no encontrado, Revise los datos introducidos'
        }).then(function () {
            window.location.href = "Empresa.php"
        })
    </script>

    </table>

</body>
</html>