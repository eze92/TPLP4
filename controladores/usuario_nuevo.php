<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Turismo</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/normalize.css">
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

        </div>

        <div id="twitter">

            <a href="http://twitter.com/" target="_blank"><img src="https://lh6.googleusercontent.com/--aIk2uBwEKM/T3nN1x09jBI/AAAAAAAAAs8/qzDsbw3kEm8/s32/twitter32.png" width=32 height=32 alt="Síguenos en Twitter" /></a>
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
                <li><a href="../modelo/servicios.html" title="">Servicios</a></li>
                <li><a href="../modelo/pago.html" title="">Formas de Pago</a></li>
                <li><a href="../modelo/agenda.php" title=""> Agenda </a></li>
                <li><a href="../modelo/contacto.html" title=""> Contacto </a></li>
            </ul>
        </div>

    </nav>

    <form action="agregarUsuario.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    <section class="holder">
        <div class="">

            <div class="row">
              <div class="col-xs-3">
              <label>Nombre:</label>
              <input type="text" name="nom" id="nom" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Usuario:</label>
              <input type="text" name="usr" id="usr" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Password:</label>
              <input type="password" name="pass" id="pass" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Tipo de Usuario:</label>
              <select name="tipo" id="tipo" class="form-control">
                  <option>ADMINISTRADOR</option>
                  <option>VENTAS</option>
                </select>
              </div>
            </div>

        </div>
           <button type="submit" class="btn btn-success">Guardar</button>

    </section>
    </form>

    <footer>
        <p> Turismo Nacional e interncional </p>
        <p> Caseros Buenos Aires Argentina, Valentín Gómez 4772, B1678 </p>
        <p> turismotp2020@gmail.com- Tel. / Fax: +54 11 4575-5012 </p>
        <p> Copyright 2020 :Diseño y Programación: Ezequiel Ledesma</p>
    </footer>

</body>

</html>