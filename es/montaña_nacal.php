<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="../img/logo.png">
    <title>Hotel Montaña Nacal | Canary Hotels</title>

    <link rel="stylesheet" media="screen" href="../css/alp.css">
    <link rel="stylesheet" media="screen" href="../css/hbt.css">
    <link rel="stylesheet" media="screen" href="../css/ban_hbt.css">
    <link rel="stylesheet" media="screen" href="../css/srv.css">
    <link rel="stylesheet" media="screen" href="../css/btn.css">
    <link rel="stylesheet" media="screen" href="../css/ctn.css">
    <link rel="stylesheet" media="screen" href="../css/ftr.css">
    <link rel="stylesheet" media="screen" href="../css/gnr.css">
    <link rel="stylesheet" media="screen" href="../css/menu.css">
    <link rel="stylesheet" media="screen" href="../css/cjos.css">
    <link rel="stylesheet" media="screen" href="../css/tau.css">
    <link rel="stylesheet" media="screen" href="../css/tau_tablet.css">
    <link rel="stylesheet" media="screen" href="../css/tau_movil.css">
    <link rel="stylesheet" media="screen" href="../css/jquery.flipster.min.css">
    <link rel="stylesheet" media="screen" href="../css/magnific-popup.min.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="../css/redessociales.css" />
    <link rel="stylesheet" media="screen" href="../css/carouselStyle.css" />
    <link rel="stylesheet" media="screen" href="../css/style.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenedor">
        <!-- CABECERA -->
        <?php require 'cabecera.php' ?>

        <!-- BANNER -->
        <div class="banner montana-nacal">
            <div class="banner-container">
                <img src="../img/index/hotel2.jpg">
                <div class="banner-text">
                    <div class="head">HOTEL MONTAÑA NACAL</div>
                    <div class="lead">Acuéstate y disfruta del paraiso</div>
                </div>


            </div>
        </div>

        <!-- INFORMACION ALOJAMIENTO -->
        <div class="hotel-about">
            <div class="main-title-container">
                <h1 class="main-title">Hotel Montaña Nacal</h1>
            </div>
            <p>
                Mantente sano y activo con nuestros eventos al aire libre, estos varían según el día y la hora. El descanso también es importante.
                Sumérgete en nuestra piscina y desconecta del estrés del día a día.
            </p>
        </div>

           <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../img/apartamentos/apt20.jpg" alt="Canary Hotels ">
                </div>
                <div class="swiper-slide">
                    <img src="../img/apartamentos/apt21.jpg" alt="Canary Hotels">
                </div>
                <div class="swiper-slide">
                    <img src="../img/apartamentos/apt25.jpg" alt="Canary Hotels ">
                </div>
                <div class="swiper-slide">
                    <img src="../img/apartamentos/apt29.jpg" alt="Canary Hotels ">
                </div>
                <div class="swiper-slide">
                    <img src="../img/apartamentos/apt32.jpg" alt="Canary Hotels ">
                </div>


            </div>
            <div class="swiper-pagination "></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- TITULO HABITACIONES -->
        <div class="hoteles-heading text-center">
            <h2>Habitaciones</h2>
        </div>

        <br>

        <!-- LAS HABITACIONES -->
        <div class="rooms">

            <div class="room text-center">
                <span class="iconic"><a href="../img/Galeria/apart4.jpg" title="PREMIUM BITE"><img src="../img/Galeria/apart4.jpg"></a></span>
                <h3>SUITE ORGAN</h3>
                <p>Disfruta la brisa del mar desde la terraza y descansa en cualquiera de sus 2 dormitorios independientes, perfecto para familias.</p>
                <div class="button button-read">
                    <a href="../es/suite-organ.php">VER HABITACIÓN</a>
                </div>
            </div>

            <div class="room text-center">
                <span class="iconic"><a href="../img/Galeria/apart4.jpg" title="DUPLEX AIRWIND"><img src="../img/Galeria/apart5.jpg"></a></span>
                <h3>DUPLEX AIRWIND</h3>
                <p>Observa el cielo desde la terraza mientras te relajas. Este apartamento está equipado con muebles y aparatos de exterior.</p>
                <div class="button button-read">
                    <a href="../es/duplex-airwind.php">VER HABITACIÓN</a>
                </div>
            </div>

            <div class="room text-center">
                <span class="iconic"><a href="../img/Galeria/apart4.jpg" title="DUPLEX SEATEA"><img src="../img/Galeria/apart6.jpg"></a></span>
                <h3>DUPLEX SEATEA</h3>
                <p>Escápate en uno de nuestros acogedores y luminosos apartamentos distribuidos en 3 niveles, con todo el equipamiento necesario.</p>
                <div class="button button-read">
                    <a href="../es/duplex-seatea.php">VER HABITACIÓN</a>
                </div>
            </div>
        </div>

        <!-- TITULO NUESTROS SERVICIOS  -->
        <div class="hoteles-heading text-center">
            <h2>Servicios de habitaciones</h2>
        </div>

        <!-- TODOS LOS SERVICIOS -->
        <div class="services-container text-center">
            <div class="services-group">
                <h3 class="service-group-heading">BIENESTAR</h3>
                <div class="service-group">

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/terraza.png">
                            <p>Terraza</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Nevera.png">
                            <p>Nevera</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Tostadora.png">
                            <p>Tostadora</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Vitroceramica.png">
                            <p>Vitrocerámica</p>
                        </div>
                    </div>
                </div>
                <div class="service-group">

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Utensilios.jpg">
                            <p>Utensilios de cocina</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/ducha.png">
                            <p>Ducha</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/bañera.jpg">
                            <p>Bañera</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/ventilador.png">
                            <p>Ventilador de techo</p>
                        </div>
                    </div>
                </div>

                <div class="service-group">

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/amenities.png">
                            <p>Amenities</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/secador.png">
                            <p>Secador</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/espejo.png">
                            <p>Espejo de aumento</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/albornoz.png">
                            <p>Albornoz **</p>
                        </div>
                    </div>

                </div>

                <div class="service-group">

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Cafetera.png">
                            <p>Cafetera</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Hervidor.png">
                            <p>Hervidor de agua</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Cajafuerte.png">
                            <p>Caja fuerte *</p>
                        </div>
                    </div>



                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/AireAcondicionado.jpg">
                            <p>Aire acondicionado</p>
                        </div>
                    </div>


                </div>

                <div class="service-group">

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Microondas.png">
                            <p>Microondas</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Plancha.png">
                            <p>Tabla de planchar y plancha **</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/Almohadas.png">
                            <p>Carta de almohadas</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/sofa.png">
                            <p>Sofám cama</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/petanca.png">
                            <p>Petanca</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/tenis.png">
                            <p>Tenis</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/piscina.png">
                            <p>Piscina climatizada y de exterior</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/restaurante.png">
                            <p>Restaurante</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/zumba.png">
                            <p>Zumba</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/billar.png">
                            <p>Billar</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/sauna.png">
                            <p>Sauna</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/gimnasio.png">
                            <p>Gimnasio</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/buffet.png">
                            <p>Buffet</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/cafe.png">
                            <p>Cafe bar</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/club.png">
                            <p>MiniClub</p>
                        </div>
                    </div>


                </div>
            </div>

            <div class="services-group">
                <h3 class="service-group-heading">CONECTIVIDAD</h3>
                <div class="service-group">

                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/telefono.jpg">
                            <p>Teléfono *</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/wifi.png">
                            <p>WiFi</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service-content">
                            <img src="../img/iconosAlojamientos/television.png">
                            <p>Televisión</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hoteles-heading text-center">
            <h2>Ocio</h2>
        </div>
        <br />


        <div class="servicios-sec text-center">
            <!-- BUFFET -->
            <div class="content_servicios servicio1">
                <img src="../img/Servicios/restaurante.jpg" class="medium-width" alt="Restaurante">
                <div class="content medium-width">
                    <h3 class="rule">RESTAURANTE</h3>
                    <p class="text_content">Disfruta de la experiencia gastronómica de nuestro restaurante Hotel Montaña Nacal. Disponemos de una amplia variedad de platos, además de nuestro restaurante, disponemos de un buffet y un café - bar. Ofrecemos todo tipo de comidas de diferentes paises, frescos y gustosos.</p>
                </div>

            </div>


            <div class="content_servicios margin-top-cero servicio1">
                <div class="content medium-width">
                    <h3 class="rule">PISTA DE TENIS</h3>
                    <p class="text_content">El lugar ideal para pasar el rato con tu familia, como con amigos. Disfruta ahora de nuestra pista de tenis con más de 20 metros de largo y 8 de ancho, adémas de disponer el mejor cesped artificial del mercado para que puedas sentirte como un verdadero profesional. </p>
                </div>
                <img src="../img/Servicios/pistadetenis.jpg" class="medium-width" alt="Pista de tenis">
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
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/bundle.js" data-cfasync="false"></script>
    <script type="text/javascript" src="../js/cookies.js"></script>
    <script type="text/javascript" src="../js/jquery.flipster.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/carouselInitializer.js"></script>
</body>
</html>