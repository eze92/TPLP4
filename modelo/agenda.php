<?php
  session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Turismo</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/login.css">

    </head>

    <body>
        <header>

            <div class="holder">

                <section class="logo">
                    <img src="../galeria/logo.jpg" alt="logo">
                </section>

                <h1>Turismo Nacional e Internacional  </h1>

                <div id="facebook">
                    <p>
                        <a href="http://www.facebook.com/" target="_blank"><img alt="Siguenos en Facebook" src="https://lh6.googleusercontent.com/-CYt37hfDnQ8/T3nNydojf_I/AAAAAAAAAr0/P5OtlZxV4rk/s32/facebook32.png" width=32 height=32 /></a>
                    </p>
                </div>

                <div id="twitter">

                    <a href="http://twitter.com/" target="_blank"><img src="https://lh6.googleusercontent.com/--aIk2uBwEKM/T3nN1x09jBI/AAAAAAAAAs8/qzDsbw3kEm8/s32/twitter32.png" width=32 height=32 alt="Síguenos en Twitter" /></a>
                </div>

                <section class="login">
                    <ul>
                        <li><a href="../controladores/salir.php" title=""> Salir </a></li>
                    </ul>
                </section>

            </div>

        </header>

        <!-- /header -->

        <nav>
            <div class="holder ">

                <ul>
                    <li><a href="../index.php" title="">Home</a></li>
                    <li><a href="#">¿Donde viajo?</a>
                        <ul>
                            <li><a href="provincias.html">Provincias Argentinas </a></li>
                            <li><a href="#">Continentes</a>
                                <ul>
                                    <li><a href="../vistas/america.html">América</a></li>
                                    <li><a href="../vistas/europa.html">Europa</a></li>
                                    <li><a href="../vistas/asia.html">Asia</a></li>
                                </ul>
                        </ul>
                        </li>
                    </li>
<<<<<<< HEAD
                </li>
                <li><a href="servicios.html" title="">Servicios</a></li>
                <li><a href="pago.html" title="">Formas de Pago</a></li>
                <li><a href="agenda.php" title=""> Agenda </a></li>
                <li><a href="contacto.html" title=""> Contacto </a></li>
            </ul>
        </div>

    </nav>

    <section class="holder">
        <h2>Agenda del viajero</h2>

        <div class="">

            <p>Ingrese la anecdota que desea guardar.La imagen a subir debe ser de tipo png,jpg,jpeg o gif y cuyo tamaño debe ser menor o igual a 2MB.</p>

            <table class="agenda" border="2">
                <thead>
                    <th>Nro Anecdota</th>
                    <th>Nombre</th>
                    <th>Relato</th>
                    <th>Imagen</th>
                    <th>
                        <a href="../controladores/agregarNuevo.php">
                            <button type='button' class='btn btn-info'>Nuevo</button>
                        </a>
                    </th>
                    <th> </th>

                    <?php
=======
                    <li><a href="servicios.html" title="">Servicios</a></li>
                    <li><a href="pago.html" title="">Formas de Pago</a></li>
                    <li><a href="agenda.php" title=""> Agenda </a></li>
                    <li><a href="contacto.html" title=""> Contacto </a></li>
                </ul>
            </div>

        </nav>

        <section class="holder">
            <h2>Agenda del viajero</h2>

            <div class="">

                <p>Ingrese la anecdota que desea guardar.La imagen a subir debe ser de tipo png,jpg,jpeg o gif y cuyo tamaño debe ser menor o igual a 2MB.</p>

                <table class="agenda" border="2">
                    <thead>
                        <th>Nro Anecdota</th>
                        <th>Usuario</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>
                            <?php  
                        if (isset($_SESSION["usuario"]) ){

                       echo '<a href="../controladores/agregarNuevo.php">
                            <button type="button" class="btn btn-info">Nuevo</button>
                        </a>';
                    }else{

                    }
                        ?>
                        </th>
                        <th> </th>

                        <?php
>>>>>>> login
        include "../controladores/conect.php";
        $sentecia="SELECT * FROM agenda";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc()) //obtiene datos de la variable fila
        {
            //muestra los datos por pantalla
          echo "<tr>";
            echo "<td>"; echo $fila['nro_trans']; echo "</td>";
            echo "<td>"; echo $fila['usuario']; echo "</td>";
            echo "<td>"; echo $fila['anecdota']; echo "</td>";
            echo "<td>"; echo "<img src='".$fila['imagen']."' width='300' >"; echo "</td>";

            if (isset($_SESSION["usuario"]) ){

            echo "<td><a href='../controladores/modificar.php?nro_trans=".$fila['nro_trans']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo "<td><a href='../controladores/eliminarAnecdota.php?nro_trans=".$fila['nro_trans']."'> <button type='button' class='btn btn-danger' onclick='return ConfirmDelete()'>Eliminar</button> </a></td>";

            }else{
                echo"<td>"; echo"</td>";
                echo"<td>"; echo"</td>";

              }  

          echo "</tr>";
        }
      ?>

                            <script type="text/javascript">
                                function ConfirmDelete() {
                                    var respuesta = confirm("¿Estas seguro que deseas eliminar la anecdota ?");

                                    if (respuesta == true) {
                                        return true;
                                    } else {}
                                    return false;
                                }
                            </script>

                    </thead>

                </table>
            </div>

        </section>

        <footer>
            <p> Turismo Nacional e interncional </p>
            <p> Caseros Buenos Aires Argentina, Valentín Gómez 4772, B1678 </p>
            <p> turismotp2020@gmail.com- Tel. / Fax: +54 11 4575-5012 </p>
            <p> Copyright 2020 :Diseño y Programación: Ezequiel Ledesma</p>
        </footer>

    </body>

    </html>