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
            <a class="logo" href="index.html">
                <img src="imagenes/logo-1.png" width="85px" height="85px" alt="logo">
                IPISA
            </a>

            <ul>
                <li><a href="index.html">Inicio +</a>
                    <ul>
                        <li><a href="index.html #1">¿Quiénes somos?</a></li>
                        <li><a href="index.html #2">Tallerers y sus perfiles+</a>
                        
                            <ul>
                                <li><a href="index.html #3">Tallerres Industriales</a></li>
                                <li><a href="index.html #4">Tallerers de Servicio</a></li>
                            </ul>
                        
                        </li>
                    </ul>
                
                </li>
                <li><a href="familia.html">Familia +</a>
                    <ul>
                        <li><a href="familia.html #1">Responsabilidades</a></li>
                        <li><a href="familia.html #2">Acuerdos</a></li>
                    </ul>
                
                </li>
                <li><a href="pasantia.html">Pasantia +</a>
                
                    <ul>
                        <li><a href="pasantia.html #1">¿que es el NFCT?</a></li>
                        <li><a href="pasantia.html">HORAS POR TALLER</a></li>
                    </ul>
                </li>
                <li><a href="colaboradores.html">Colaboradores +</a>
                
                    <ul>
                        <li><a href="colaboradores.html #1">como ser un centro de trabajo</a></li>
                        <li><a href="colaboradores.html #1">funciones de acuerdos</a></li>
                    </ul>
                </li>
              
                <li><a href="alumno.html">Alumno</a>
                
                    <ul>
                        <li><a href="Empresa.html">Empresa</a></li>
                        <li><a href="vacantes.html">Vacantes</a></li>
                    </ul>
                
                </li>
              
            </ul>
        
        
        </nav>

        <section class="texto-header">
            <h1>IPISA</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C221.50,153.47 254.22,76.48 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>

</header>

<br> <br>

<center>

        <form action="" method="post" >


            <label for="graduacion">Año de graduacion: </label><input type="text"><br> <br>
            
            <label for="inst">Institución eduactiva a la que pertenece: </label><input type="text"><br> <br>
            
            <label for="curso">Curso: </label><input type="text"><br> <br>

            <label for="matricula">Matrícula: </label><input type="text"><br> <br>

            <label for="cedula">Cédula de identidad: </label><input type="text"><br> <br>

            <label for="carreratec">Carrera técnica: 
                <select id="carrera">
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

            <label for="tecbasico">Técnico básico: </label><input type="text"><br> <br>

            <label for="nom">Nombres: </label><input type="text"><br> <br>

            <label for="apellidos">Apellidos: </label><input type="text"><br> <br>

            <label for="fecha">Fecha de nacimiento</label>
            <select name="year" id="">
            <option value="0">0</option>
            <?php
                $a = 0;
                    while($a <= 2022)
                    {
                    print "<option value='".$a."'>".$a."</option>";
                    $a++;
                    }
            ?>
           <option value="2023" selected>2023</option>
        </select>
                 <select id="mes">
                    <option value="enero">enero</option>
                <option value="febrero">febrero</option>
               <option value="marzo">marzo</option>
                <option value="abril">abril</option>
                <option value="mayo">mayo</option>
                <option value="junio">junio</option>
                <option value="julio">julio</option>
                <option value="agosto">agosto</option>
                <option value="septiembre">septiembre</option>
                <option value="octubre">octubre</option>
                <option value="novimbre">noviembre</option>
                <option value="diciembre">diciembre</option>
                </select>
                <select id="dia">
                    <option value="2">01</option>
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
                <select id="sexo">
                    <option value="vacio"></option>
                    <option value="fem">femenino</option>
                <option value="masc">masculino</option>
               <option value="ni">prefiero no decirlo</option>
                </select>
            </label>
            <br> <br>

            <label for="dir">Dirección: </label><input type="text"><br> <br>

            <label for="sector">Sector: </label><input type="text"><br> <br>

            <label for="seccion">Sección: </label><input type="text"><br> <br>

            <label for="mun">Municipio: </label><input type="text"><br> <br>

            <label for="provincia">Provincia: </label><input type="text"><br> <br>

            <label for="pais">País de nacionalidad: 
                <select id="pais">
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

            <label for="telresidencial">Teléfono residencial: </label><input type="text"><br> <br>

            <label for="telmovil">Teléfono móvil: </label><input type="text"><br> <br>

            <label for="licenciacon">Posee licencia de conducir </label><input type="checkbox"><br> <br>

            <label for="vehiculo">Posee vehículo propio: </label><input type="checkbox"><br> <br>

            <label for="email">Email: </label><input type="text"><br> <br>

            <label for="email">Confirmación de email: </label><input type="text"><br> <br>

            <label for="contra">Elige una contraseña: </label><input type="password"><br> <br>

            <label for="contra">Confirmar contraseña: </label><input type="password"><br> <br>
            
            <br>
            
            <input type="submit" value="enviar">
            
        </center>
            
            </form>

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


 <?php
require "conexion.php";
insertar($mysqli);
function insertar  ($mysqli) {
  $nom = $_POST['nombre']?? null;
  $pass = $_POST['contrasena']?? null;
  $nac = $_POST['nacimiento']?? null;

$consulta =  "INSERT INTO alumno_dapersonales(nombre, contrasena, nacimiento) VALUES ('$nom', '$pass', '$nac')";
mysqli_query($mysqli, $consulta);
mysqli_close($mysqli);
}
 ?>

</body>
</html>