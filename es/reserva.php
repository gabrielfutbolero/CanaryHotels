<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="../img/logo.png">
    <title>Reserva | Canary Hotels</title>

    <link rel="stylesheet" media="screen" href="../css/alp.css">
    <link rel="stylesheet" media="screen" href="../css/gnr.css">
    <link rel="stylesheet" media="screen" href="../css/menu.css">
    <link rel="stylesheet" media="screen" href="../css/ftr.css">
    <link rel="stylesheet" media="screen" href="../css/index.css">
    <link rel="stylesheet" media="screen" href="../css/normalize.css">
    <link rel="stylesheet" media="screen" href="../css/style.css" />
    <link rel="stylesheet" media="screen" href="../css/booking-search.css">
    <link rel="stylesheet" media="screen" href="../css/redessociales.css">
    <link rel="stylesheet" media="screen" href="../css/formulariocontacto.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap">
</head>
<body>
<div class="contenedor">
    <!-- CABECERA -->
    <?php require 'cabecera.php' ?>
    <!-- /CABECERA -->

    <!-- BANNER -->
    <div class="banner5">
        <div class="banner-content">
            <div class="banner-text text-center">
                <p>A que esperas para empezar tus vacaciones</p>
                <p class="ruler ">&nbsp;</p>
                <h1>Canary Hotels</h1>
            </div>

            <div class="formulario">
                    <form action="reserva.php" method="POST">

                        <?php require 'correo.php'; 
                        $fechaActual = date('Y-m-d');
                        ?>

                        <h2>Detalles de la reserva</h2>


                        <p><input type="text" placeholder="Hotel*" name="hotel" required=""></p>
                        <p><input type="date" placeholder="Llegada*" name="checkin" value="<?php echo $fechaActual ?>" required=""></p>
                        <p><input type="date" placeholder="Salida*" name="checkout" value="<?php echo $fechaActual ?>" required=""></p>
                        <p><input type="text" placeholder="Nombre*" name="nombre" required=""></p>
                        <p><input type="text" placeholder="Apellidos*" name="apellidos" required=""></p>
                        <p><input type="email" placeholder="Correo electrónico*" name="correo" required=""></p>
                        <p><input type="text" placeholder="Número de teléfono" name="telefono"></p>

                        <p><textarea placeholder="¿Tienes algun comentario adicional sobre tu reserva?" name="mensaje"></textarea></p>
                        <input type="submit" name="enviar" id="boton">
                    </form>

            </div>


            </div>
        </div>
            
            
        </div>
    </div>



    <!-- FOOTER -->
      <div class="footer">
    <div class="redes-container text-center">
        
        
             <div class="avisos div1">   

    <ul>
        <h2 class="rule rule-300">Canary Hotels</h2>
        <li><a href="#" class="facebook"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/canaryhotels/?hl=es" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>


        </ul>
                  </div>
   

            <div class="avisos div2">
           
             <a href="../es/reserva.php" title="Reserva :: Canary Hotels">Reserva</a>
            <a href="../es/sitemap.php" title="Sitemap :: Canary Hotels">Sitemap</a>
            </div>
      

        
              <div class="avisos div3">
            <a href="../es/contacto.php" title="Contacto:: Canary Hotels">Contacto</a> 
            <a href="../es/index.php" title="Pagina principal :: Canary Hotels">Pagina principal</a>
            </div>

        </div>
    
    </div>

    <a href="https://api.whatsapp.com/send?phone=677888154&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20vuestros%20hoteles." class="float" target="">
        <i class="fab fa-whatsapp my-float"></i>
    </a>


</div>
<script type="text/javascript" src="../js/jquery-1.12.4-wp.js"></script>
<script type="text/javascript" src="../js/menu.js"></script>
<script type="text/javascript" src="../js/bundle.js" data-cfasync="false"></script>
<script type="text/javascript" src="../js/cookies.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/booking-search.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>