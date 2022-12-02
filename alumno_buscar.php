<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>busqueda del alumnos segun el ID</h1>

<table border="2">
        <tr>
            <td >ID
           </td>
            <td>año graduacion
           </td>
            <td>instituto
           </td>
            <td>curso
           </td>
            <td>matricula
           </td>
            <td>cedula
           </td>
            <td>carrera tec
           </td>
            <td>tecnico basico
           </td>
            <td>nombre
           </td>
            <td>apellido
            </td>
            
            <td>nacimiento
            </td>
            
            <td>sexo 
            </td>
            
            <td>direccion
            </td>
            
            <td>sector
            </td>
            
            <td>seccion
            </td>
            
            <td>municipio
            </td>
            
            <td>provincia
            </td>
            
            <td>pais de residencia
            </td>
            
            <td>tel residencial
            </td>
            
            <td>tel movil
            </td>
            
            <td>licencia
            </td>
            
            <td>tvehiculo
            </td>
            
            <td>email
            </td>
            
            <td>clave
            </td>
            
        </tr>
        <?php
        include_once "connection.php";

        $id = $_REQUEST['id'];

        $query= "SELECT * FROM ipisa_pag.alumno where id_alum=$id; ";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);

        if ($total!=0) {
            while ($row=mysqli_fetch_assoc($data)) {
                echo "<tr>
                <td name='id' >" . $row['id_alum'] . "</td>
                <td>" . $row['a_gradu']         . "</td>
                <td>" . $row['insti']           . "</td>
                <td>" . $row['curso']           . "</td>
                <td>" . $row['matricula']       . "</td>
                <td>" . $row['cedula']          . "</td>
                <td>" . $row['carrera_tec']     . "</td>
                <td>" . $row['tec_basic']       . "</td>
                <td>" . $row['nombres']         . "</td>
                <td>" . $row['apellidos']       . "</td>
                <td>" . $row['fecha_nac']       . "</td>
                <td>" . $row['sexo']            . "</td>
                <td>" . $row['direccion']       . "</td>
                <td>" . $row['sector']          . "</td>
                <td>" . $row['seccion']         . "</td>
                <td>" . $row['municipio']       . "</td>
                <td>" . $row['provincia']       . "</td>
                <td>" . $row['pais_nac']        . "</td>
                <td>" . $row['tel_res']         . "</td>
                <td>" . $row['tel_movil']       . "</td>
                <td>" . $row['lic_conducir']    . "</td>
                <td>" . $row['vehiculop']       . "</td>
                <td>" . $row['email']           . "</td>
                <td>" . $row['contra']          . "</td>

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