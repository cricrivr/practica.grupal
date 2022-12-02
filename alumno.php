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

        <form action="alumno_insert.php" method="POST" >


            <label for="graduacion">Año de graduacion: </label>
            <input type="text" id="graduacion" name="grad"><br> <br>
            
            <label for="inst">Institución eduactiva a la que pertenece: </label>
            <input type="text" id="inst" name="insti"><br> <br>
            
            <label for="curso">Curso: </label>
            <input type="text" id="curso" name="cur"><br> <br>

            <label for="matricula">Matrícula: </label>
            <input type="text" id="matricula" name="mat"><br> <br>

            <label for="cedula">Cédula de identidad: </label>
            <input type="text" id="cedula" name="ced"><br> <br>

            <label >Carrera técnica: 
            <select name="carrera">
                <option value="vacio"></option>
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
            <input type="text" id="tecbasico" name="tbas"><br> <br>

            <label for="nombres">Nombres: </label>
            <input type="text" id="nombres" name="nom"><br> <br>

            <label for="apellidos">Apellidos: </label>
            <input type="text" id="apellidos" name="ape"><br> <br>

            <label >Fecha de nacimiento</label>
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
                option value="2022" selected>2022</option>
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

            <label for="sexo">sexo: 
                <select id="sexo" name="sex">
                    <option value="fem">femenino</option>
                <option value="masc">masculino</option>
               <option value="ni">prefiero no decirlo</option>
                </select>
            </label>
            <br> <br>

            <label for="direccion">Dirección: </label>
            <input type="text" id="direccion" name="dir"><br> <br>


            <label for="sector">Sector: </label>
            <input type="text" id="sector" name="sect"><br> <br>

            <label for="seccion">Sección: </label>
            <input type="text" id="seccion" name="secc"><br> <br>

            <label for="municipio">Municipio: </label>
            <input type="text" id="municipio" name="mun"><br> <br>

            <label for="provincia">Provincia: </label>
            <input type="text" id="provincia" name="prov"><br> <br>

            <label for="paises">País de nacionalidad: 
                <select id="paises" name="pais">
                    <option value="vacio"></option>
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
            <input type="text" id="telresidencial" name="telf_res"><br> <br>

            <label for="telmovil">Teléfono móvil: </label>
            <input type="text" id="telmovil" name="telf_mov"><br> <br>

            <label for="licenciacon">Posee licencia de conducir </label>
            <input type="checkbox" id="licenciacon" name="lic"><br> <br>

            <label for="vehiculo">Posee vehículo propio: </label>
            <input type="checkbox" id="vehiculo" name="veh"><br> <br>

            <label for="email">Email: </label>
            <input type="text" id="email" name="mail"><br> <br>

            <label for="email">Confirmación de email: </label>
            <input type="text"><br> <br>


            <label for="contra">Elige una contraseña: </label>
            <input type="password" id="contra" name="clave"><br> <br>


            <label for="contra">Confirmar contraseña: </label>
            <input type="password"><br> <br>
            
            <br>
            
            <input type="submit" value="enviar">
            
        </center>
            
            </form>
            <form action="alumnos_delete.php" method="POST">
    <h1>eliminacion de alumnos</h1>
<label >ID del alumno a eliminar</label>
<input type="text" name="id">
<br><br>
<button>eliminar</button>
</form>
<br><br><br>


<form action="alumnos_datos.php" method="POST">
    <h1>Actualizacion de alumnos</h1>
<label >ID de la vacante a actualizar</label>
<input type="text" name="id">
<br><br>
<button>actualizar</button>
</form>
<br><br><br>


<form action="alumno_buscar.php" method="POST">
    <h1>Busqueda de alumnos</h1>
<label >ID de la vacante a buscar</label>
<input type="text" name="id">
<br><br>
<button>buscar</button>
</form>

    <table border="2">
        <tr>
            <td name="id_alum">ID
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

        $query= "SELECT * FROM ipisa_pag.alumno; ";
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