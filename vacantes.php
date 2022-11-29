<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumno</title>
    <link rel="icon" href="imagenes/logo-1.png">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="contenido.css">
</head>
<body>
<header>
            
            <nav class="nav_bar">
                <a class="logo" href="index.php">
                    <img src="imagenes/logo-1.png" width="85px" height="85px" alt="logo">
                    IPISA
                </a>
    
    
                <ul>
                    <li><a href="index.php">Inicio +</a>
                        <ul>
                            <li><a href="index.php #1">¿Quiénes somos?</a></li>
                            <li><a href="index.php #2">Talleres y sus perfiles+</a>
                            
                                <ul>
                                    <li><a href="index.php #3">Talleres Industriales</a></li>
                                    <li><a href="index.php #4">Talleres de Servicio</a></li>
                                </ul>
                            
                            </li>
                        </ul>
                    
                    </li>
                    <li><a href="familia.php">Familia +</a>
                        <ul>
                            <li><a href="familia.php #1">Responsabilidades</a></li>
                            <li><a href="familia.php #2">Acuerdos</a></li>
                        </ul>
                    
                    </li>
                    <li><a href="pasantia.php">Pasantia +</a>
                    
                        <ul>
                            <li><a href="pasantia.php #1">Qué es el NFCT?</a></li>
                            <li><a href="pasantia.php">Horas por taller</a></li>
                        </ul>
                    </li>
                    <li><a href="colaboradores.php">Colaboradores +</a>
                    
                        <ul>
                            <li><a href="colaboradores.php #1">Cómo ser un centro de trabajo</a></li>
                            <li><a href="colaboradores.php #1">Funciones de acuerdos</a></li>
                        </ul>
                    </li>
                  
                    <li><a href="alumno.php">Alumno</a>
                    
                        <ul>
                            <li><a href="Empresa.php">Empresa</a></li>
                            <li><a href="vacantes.php">Vacantes</a></li>
                        </ul>
                    
                    </li>
                </ul>
            
            
            </nav>
        </header> 

<br> <br>

<center>

        <form action="insert_vacante.php" method="post" >
            <label >Empresa: </label>

            
            <select name="empr" >
<?php

include_once "connection.php";

$query= "SELECT id,nom_empresa FROM empresa; ";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);


if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {
        print "<option value= '".$row['id']."'> ".$row['nom_empresa']." </option>";
       
    }
}

?>


</select>  <br><br>

            <label >Nombre del puesto: </label>
            <input type="text" name="nomb"><br> <br>
            
            <label >Funcion del puesto: </label>
            <input type="text" name="func"><br> <br>
            
            <label >sueldo: </label>
            <input type="text" name="suel" ><br> <br>

            <label >contrato: </label>
            <select type="text" name="cont">
                <option value="0">fijo</option>
                <option value="1">temporal</option>
            </select> <br> <br>

            <label >Correo curriculum: </label>
            <input type="text" name="corr"><br> <br>

            <label > persona contacto: </label>
            <input type="text" name="pers"><br> <br>

            <label >telefono: </label>
            <input type="text" name="telf"><br> <br>

            <label >horario: </label>
                <label >hora de entrada: 
                    <select name="hora_a" >
                        <option value="8:00:00">8:00</option>
                        <option value="9:00:00">9:00</option>
                        <option value="10:00:00">10:00</option>
                        <option value="11:00:00">11:00</option>
                        <option value="12:00:00">12:00</option>
                        <option value="13:00:00">13:00</option>
                    </select>
                </label>

           
                <label >hora de salida: 
                    <select name="hora_b" >
                        <option value="14:00:00">14:00</option>
                        <option value="15:00:00">15:00</option>
                        <option value="16:00:00">16:00</option>
                        <option value="17:00:00">17:00</option>
                        <option value="18:00:00">18:00</option>
                        <option value="19:00:00">19:00</option>
                    </select>
                </label>


            <br> <br>

            <button>enviar</button>
        
        </form>

<form action="delete_vacante.php" method="POST">
    <h1>eliminacion de vacantes</h1>
<label >ID de la vacante a eliminar</label>
<input type="text" name="id">
<br><br>
<button>eliminar</button>
</form>
<br><br><br>


<form action="update_vacantes.php" method="POST">
    <h1>Actualizacion de vacantes</h1>
<label >ID de la vacante a actualizar</label>
<input type="text" name="id">
<br><br>
<button>actualizar</button>
</form>
<br><br><br>


<form action="buscar_vacantes.php" method="POST">
    <h1>Busqueda de vacantes</h1>
<label >ID de la vacante a buscar</label>
<input type="text" name="id">
<br><br>
<button>buscar</button>
</form>

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
include_once "connection.php";

$query= "SELECT * FROM ipisa_pag.buscar_vacantes; ";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);

if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td name='id' >" . $row['ID'] . "</td>
        <td>" . $row['empresa'] . "</td>
        <td>" . $row['nombre del puesto'] . "</td>
        <td>" . $row['funcion del puesto'] . "</td>
        <td>" . $row['sueldo'] . "</td>
        <td>" . $row['tipo contrato'] . "</td>
        <td>" . $row['correo curriculum'] . "</td>
        <td>" . $row['persona de contacto'] . "</td>
        <td>" . $row['telefono'] . "</td>
        <td>" . $row['horario'] . "</td>
        <td> <a href='delete_vacante.php?id=$row[ID]'>Borrar</td>
        <td> <a href='update_vacantes.php?id=$row[ID]'>actualizar</td>

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




        </center>

            <footer>

                <div class="container">	
                    <div class="sec aboutus">
                        <h2>Sobre nosotros</h2>
                                <p>Somos una institución educativa técnico profesional con uno de los más altos niveles 
                                de expansión y crecimiento en este tipo de modelo de educación, así como también, acorde 
                                a la vanguardia de los nuevos tiempos.</p>
                        <ul class="redes">
                         <li><a href="https://www.facebook.com/Bibliotecamp/"><i class="fab fa-facebook-square"></i></a></li>
                         <li><a href="https://www.instagram.com/biblioteca_mp/"><i class="fab fa-instagram-square"></i></a></li>
                         <link rel="stylesheet" type="text/css" href="css/css-footer.css">
                        </ul>
                </div>
                  
                <div class="sec quickLinks">
                    <h2>Enlaces rápidos</h2>
                       <ul>
                         <li><a href="index.html">Inicio</a></li>
                         <li><a href="pasantia.html">Pasantía</a></li>
                         <li><a href="colaboradores.html">Colaboradores</a></li>
                         <li><a href="familia.html">Familia</a></li>
                         <li><a href="alumno.html">Alumno</a></li>
                       </ul>
                </div>
                  
                <div class= "sec contact">
                    <h2>Contacto</h2>
                       <ul class="info">
                         <li>
                         <span><i class="fas fa-map-marker-alt"></i></span>
                         <span>Av. Hispanoamericana, Km 1 <br>
                          Santiago,<br>República Dominicana</span>
                         </li>
                        <li>
                         <span><i class="fas fa-phone-alt"></i></span>
                         <p><a href="tel:8293762176">+1 809 724 5700</a><br></p>
                        </li>
                        <li>
                         <span></span>
                         <p><a href="https://www.instagram.com/ipisasdb/?igshid=YmMyMTA2M2Y%3D">Instagram</a><br></p>
                        </li>
                        <li>
                         <span></span>
                         <p><a href="https://www.facebook.com/IPISASDB">Facebook</a><br></p>
                        </li>        
                </div>
            </div>
            </footer>

</body>
</html>