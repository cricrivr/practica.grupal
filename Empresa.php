<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa - Formulario</title>

    <link rel="icon" href="imagenes/logo-1.png">

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="contenido.css">
</head>
<body>
    
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
                        <li><a href="index.html #2">Talleres y sus perfiles+</a>
                        
                            <ul>
                                <li><a href="index.html #3">Talleres Industriales</a></li>
                                <li><a href="index.html #4">Talleres de Servicio</a></li>
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
                        <li><a href="pasantia.html #1">Qué es el NFCT?</a></li>
                        <li><a href="pasantia.html">Horas por taller</a></li>
                    </ul>
                </li>
                <li><a href="colaboradores.html">Colaboradores +</a>
                
                    <ul>
                        <li><a href="colaboradores.html #1">Cómo ser un centro de trabajo</a></li>
                        <li><a href="colaboradores.html #1">Funciones de acuerdos</a></li>
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
    </header>


    <center>

    <FORM ACTION="insert_empresa.php" METHOD="POST">

        <br>
        <br>
        <Label>Nombre de la empresa:</Label>
        <br>
        <INPUT TYPE="text" NAME="nom">
        <br>
        <br>
        
        <Label>RNC:</Label>
        <br>
        <INPUT TYPE="text" NAME="rnc">
        <br>
        <br>
        
        
        <Label>Desea que se conozca la identidad de su empresa?</Label>
        <br>
        <INPUT TYPE="radio" NAME="iden" VALUE="1" >SI
        <INPUT TYPE="radio" NAME="iden" VALUE="0">NO
        <br>
        <br>
        
        <Label>Dispone su empresa de un Departamento de Formación dentro de la empresa?</Label>
        <br>
        <INPUT TYPE="radio" NAME="dep" VALUE="1" >SI
        <INPUT TYPE="radio" NAME="dep" VALUE="0">NO
        <br>
        <br>
        
        <Label>Alcance de la empresa</Label>
        <br>
        <INPUT TYPE="radio" NAME="alcance" VALUE="0">Nacional/local
        <INPUT TYPE="radio" NAME="alcance" VALUE="1">Multinacional
        <br>
        <br>
        
        <Label>Actividad económica a la que se dedica la empresa</Label>
        <br>
        <TEXTAREA COLS="50" ROWS="4" NAME="act_e">
        </TEXTAREA>
        <br>
        <br>
        <label >taller tipo:</label>
        <select name="indu">

        <option value="1">industrial</option>
        <option value="0">servicios</option>
        </select>
        <br><br>

        <Label>Tamaño:</Label>
        <br>
        <INPUT TYPE="text" NAME="tam">
        <br>
        <br>
        <Label>Direccion:</Label>
        <br>
        <INPUT TYPE="text" NAME="dire">
        <br>
        <br>
        
        <Label>Sector:</Label>
        <br>
        <INPUT TYPE="text" NAME="sec">
        <br>
        <br>
        
        <Label>Seccion:</Label>
        <br>
        <INPUT TYPE="text" NAME="secc">
        <br>
        <br>
        
        <Label>Municipio:</Label>
        <br>
        <INPUT TYPE="text" NAME="muni">
        <br>
        <br>
        
        
        <Label>Provincia:</Label>
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
        
        <Label>Pais donde opera la empresa:</Label>
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
        <INPUT TYPE="text" NAME="telf1">
        <br>
        <br>
        
        <Label>Telefono directo:</Label>
        <br>
        <INPUT TYPE="text" NAME="telf2">
        <br>
        <br>
        
        <Label>Email:</Label>
        <INPUT TYPE="text" NAME="mail">
        <br>
        <br>
        
        <Label>Confirma tu email:</Label>
        <INPUT TYPE="text" NAME="emailconf">
        <br>
        <br>
        
        <Label>Elija una contraseña:</Label>
        <INPUT TYPE="password" NAME="contra">
        <br>
        <br>
        
        <Label>Confirme contraseña:</Label>
        <INPUT TYPE="password" NAME="contraconf">
        <br>
        <br>
        
        <br>
        <Label>CONTACTO DENTRO DE LA EMPRESA</Label>
        <br>
        <br>
        <Label>Telefono:</Label>
        <INPUT TYPE="text" NAME="telf3">
        <Label>extencion :</Label>
        <INPUT TYPE="text" NAME="ext">
        <br>
        <br>
        
        <Label>Correo:</Label>
        <INPUT TYPE="text" NAME="correo">
        <br>
        <br>
        
        <INPUT TYPE="submit" VALUE="ENVIAR">
        <br> <br> <br> <br>
        
        
    </FORM>

    <hr>
    <br>
    
    <h2>Editar Clientes</h2>

    <form action="editar_m.php" method="POST">
        <input type="text" name='id' placeholder="ID">
        <button type="submit" name="update">Editar</button>
    </form>
    <br>
    <br>

    <hr>
    

    <h2>Buscar</h2>

    <form action="buscar_m.php" method="post">
        <input type="text" name="nom_empresa" placeholder="Nombre o ID">
        <button type="submit">Buscar</button>
    </form>
    <br>
    <br>

    <hr>
   
    <br>
    <h2>Tabla</h2>

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
require("conexion_m.php");

$query= "SELECT * FROM empresa";
$data = mysqli_query($conexion, $query);
$total = mysqli_num_rows($data);

if ($total!=0) {
    while ($row=mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td  >" . $row['id'] . "</td>
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
                
    </footer>


</body>
</html>