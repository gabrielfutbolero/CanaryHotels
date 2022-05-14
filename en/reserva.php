<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="../img/logo.png">
    <title>Booking | Canary Hotels</title>

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
                <p>What are you waiting to start your vacation</p>
                <p class="ruler ">&nbsp;</p>
                <h1>Canary Hotels</h1>
            </div>

            <!-- modulo-de-reservas -->

            <div class="formulario">
                    <form action="reserva.php" method="POST">

                        <?php require 'correo.php';
                        $fechaActual = date('Y-m-d');
                        ?>

                        <h2>Details of the reserve</h2>


                        <p><input type="text" placeholder="Hotel*" name="hotel" required=""></p>
                        <p><input type="date" placeholder="Check-In*" name="checkin" value="<?php echo $fechaActual ?>" required=""></p>
                        <p><input type="date" placeholder="Check-out*" name="checkout" value="<?php echo $fechaActual ?>" required=""></p>
                        <p><input type="text" placeholder="Name*" name="nombre" required=""></p>
                        <p><input type="text" placeholder="Surnames*" name="apellidos" required=""></p>
                        <p><input type="email" placeholder="Email*" name="correo" required=""></p>
                        <p><input type="text" placeholder="Phone" name="telefono"></p>

                        <p><textarea placeholder="Do you have any additional comments about your reservation?  " name="mensaje"></textarea></p>
                        <input type="submit" name="enviar" id="boton">
                    </form>
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
           
             <a href="../en/booking.php" title="Booking:: Canary Hotels">Booking</a>
            <a href="../en/sitemap.php" title="Sitemap :: Canary Hotels">Sitemap</a>
            </div>
      

        
              <div class="avisos div3">
            <a href="../en/contacto.php" title="Contact:: Canary Hotels">Contact</a> 
            <a href="../en/index.php" title="Homepage :: Canary Hotels">Homepage</a>
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
<script type="text/javascript" src="../js/booking-search.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>