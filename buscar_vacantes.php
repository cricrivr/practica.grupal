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
            <td name="ID">ID
           </td>
            <td>Empresa
           </td>
            <td>nombre del puesto
           </td>
            <td>funcion del puesto
           </td>
            <td>sueldo
           </td>
            <td>tipo Contrato
           </td>
            <td>correo curriculum
           </td>
            <td>persona de contacto
           </td>
            <td>telefono
           </td>
            <td>horario
          </td>
            
        </tr>
<?php
include_once "conexion_o.php";
$id=$_REQUEST['id'];
$query= "SELECT * FROM ipisa_pag.buscar_vacantes where ID= $id; ";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td>" . $row['ID'] . "</td>
        <td>" . $row['empresa'] . "</td>
        <td>" . $row['nombre del puesto'] . "</td>
        <td>" . $row['funcion del puesto'] . "</td>
        <td>" . $row['sueldo'] . "</td>
        <td>" . $row['tipo contrato'] . "</td>
        <td>" . $row['correo curriculum'] . "</td>
        <td>" . $row['persona de contacto'] . "</td>
        <td>" . $row['telefono'] . "</td>
        <td>" . $row['horario'] . "</td>
        </tr>";
    }
}   else
    ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Nombre o ID invalido',
            text: 'Registro no encontrado, Revise los datos introducidos'
        }).then(function () {
            window.location.href = "index.php"
        })
    </script>

    </table>

</body>
</html>