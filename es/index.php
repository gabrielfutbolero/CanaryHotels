<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="../img/logo.png">
    <title>Inicio | Canary Hotels</title>

    <link rel="stylesheet" media="screen" href="../css/alp.css">
    <link rel="stylesheet" media="screen" href="../css/gnr.css">
    <link rel="stylesheet" media="screen" href="../css/btn.css">
    <link rel="stylesheet" media="screen" href="../css/cjos.css">
    <link rel="stylesheet" media="screen" href="../css/index.css">
    <link rel="stylesheet" media="screen" href="../css/ftr.css">
    <link rel="stylesheet" media="screen" href="../css/normalize.css">
    <link rel="stylesheet" media="screen" href="../css/booking-search.css">
    <link rel="stylesheet" media="screen" href="../css/style.css" />
    <link rel="stylesheet" media="screen" href="../css/tau.css" />
    <link rel="stylesheet" media="screen" href="../css/tau_movil.css" />
    <link rel="stylesheet" media="screen" href="../css/tau_tablet.css" />
    <link rel="stylesheet" media="screen" href="../css/redessociales.css" />
    
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
    <div class="banner">
        <div class="banner-content">
            <div class="banner-text text-center">
                <p>Adéntrate hacia el paraiso</p>
                <h1>Canary Hotels</h1>
            </div>

        <div class="booking-search">
                    <form id="booking-form">
                        <div class="fields">
                            <div class="field hotel-selector">
                                <div class="label">Hotel / Apartamentos </div>
                                <select class="container-booking-selector">
                                    <option>Seleccione aquí...</option>
                                    <option>Hotel Mirador Sureste</option>
                                    <option>Hotel Montaña Nacal</option>
                                    <option>Hotel Cueva Marina</option>
                                </select>
                            </div>
                            
                            <div class="field ">
                                <div class="label">Llegada</div>
                                <div class="field">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png">
                                    <input type="text" placeholder="Check-In" class="container-booking-selector">

                                </div>
                            </div>
                            <div class="field">
                                <div class="label">Salida</div>
                                <div class="field">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png">
                                    <input type="text" placeholder="Check-Out" class="container-booking-selector">

                                </div>

                            </div>

                            <div class="field">
                                <div class="label">Adultos</div>
                                <div class="field ">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png" alt="arrow down">
                                    <input type="text" placeholder="Adults" accept=""class="container-booking-selector">

                                </div>
                            </div>

                            <div class="field">
                                <div class="label">Niños</div>
                                <div class="field">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png" alt="arrow down">
                                    <input type="text" placeholder="Childrens" value="" class="container-booking-selector">

                                </div>

                               
                            </div>


                            <button class="sear">
                                <input type="submit" value="VER DISPONIBILIDAD">
                            </button>

                        </div>
                    </form>
                </div>
            
            
            
        </div>
    </div>
    <br>
 
        <div class="container-hoteles-heading ">
                <div class="hoteles-heading text-center">
                    
        <h2>Canary Hotels</h2>
        <p>La mejor Comodidad al alcance de tus manos</p>
    </div>
            </div>
    

        
    
    <!-- EL HOTEL -->
    <div class="hotel"> 
        <div class="hotel-text">
    
            <p class="text">Bienvenidos a Canary Hotels, nuestra cadena de hoteles situada en Gran Canaria. Disfruta de nuestros distintos hotles con la mayor comodidad y facilidad posible. Dispondrás de innumerables servicios, como desayunos, internet, aparcamiento propio ... <br>Aprovecha, será el mejor sitio para llevar a tus hijos este verano, contacta con nosotros en CanaryHotels@hotmail.com.</p> 
            
            <div class="button button-read">
                <a href="../es/quienes-somos.php">SEGUIR LEYENDO</a>
            </div>
            
               <div class="button button-more">
                <a href="../es/reserva.php">RESERVA AHORA</a>
            </div>
            
        </div>
        <img src="../img/gf-victoria-hotel-tenerife.jpg" alt="Carnary Hotels Portada-hotel">
    </div>

    <!-- ALOJAMIENTOS -->
    <div class="accommodation">
        <div class="accommodation-title">
          
            <h2>Descubre nuestros alojamientos</h2>
        </div>
        <div class="accommodation-parts">
            <div class="accommodation-part">
                <span class="iconic-image"><a href="../img/index/hotel1.jpg" title="Hotel mirador sureste"><img src="../img/index/hotel1.jpg"></a></span>
                <h3>HOTEL MIDADOR SURESTE</h3>
                <p>El mayor confort que encontrarás</p>
                  <div class="button button-read">
                <a href="../es/mirador_sureste.php">VER ALOJAMIENTO</a>
            </div>
                <p>Maspalomas</p>
                <p>Gran Canaria</p>
            </div>
              <div class="accommodation-part">
                <span class="iconic-image"><a href="../img/index/hotel2.jpg" title="Hotel montaña nacal"><img src="../img/index/hotel2.jpg"></a></span>
                <h3>HOTEL MONTAÑA NACAL</h3>
                <p>Tus sueños se harán realidad</p>
                    <div class="button button-read">
                <a href="../es/montaña_nacal.php">VER ALOJAMIENTO</a>
            </div>
             
                <p>San Agustín</p>
                <p>Gran Canaria</p>
            </div>
            <div class="accommodation-part">
                <span class="iconic-image"><a href="../img/index/hotel3.jpg" title="cueva marina norte"><img src="../img/index/hotel3.jpg"></a></span>
                <h3>HOTEL CUEVA MARINA</h3>
                <p >Siéntate y piensa tranquilamente.</p>
                  <div class="button button-read">
                <a href="../es/cueva_marina.php">VER ALOJAMIENTO</a>
            </div>
                <p>Arguineguín</p>
                <p>Gran Canaria</p>
            </div>
        </div>
    </div>
  
        <div class="servicios-sec text-center">
        <!-- ACTIVIDADES -->
        <div class="content_servicios">
              <img src="../img/index/Caracteristicas-de-pistas-de-futbol-tipo-indoor.jpg" class="medium-width" alt="Wellnes">
            <div class="content medium-width">
                <h3 class="rule">Deportes</h3>
                <p class="text_content">Mantén cuerpo y mente activas
                    Deporte y diversión van de la mano. En canaryhotels
                     tenemos a tu disposición un completo gimnasio, una cancha multiusos 
                    de volleyball y de fútbol 5 o pista de squash, entre otras opciones
                     para hacer que tu experiencia con nosotros sea inolvidable.</p>
            </div>
          
        </div>

        <!-- SPA KRABI -->
        <div class="content_servicios margin-top-cero">
            
            <div class="content medium-width">
                <h3 class="rule">Sauna</h3>
                <p class="text_content">Queremos que disfrutes al máximo de tu estancia, por ello nos encanta mimarte y cuidarte en nuestra zona spa & wellness. Aquí encontrarás una piscina de hidromasaje, sauna y baño turco, y podrás disfrutar de tratamientos corporales y faciales.</p>
            </div>
            <img src="../img/index/sauna.jpg" class="medium-width" alt="Gimnasio">
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
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>

</body>
</html>