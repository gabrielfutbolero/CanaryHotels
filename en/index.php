<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="../img/logo.png">
    <title>Home | Canary Hotels</title>

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
                    <p>Enter into paradise</p>
                    <h1>Canary Hotels</h1>
                </div>


                <div class="booking-search">
                    <form id="booking-form">
                        <div class="fields">
                            <div class="field hotel-selector">
                                <div class="label">Hotel / Apartments </div>
                                <select class="container-booking-selector">
                                    <option>Select Here...</option>
                                    <option>Hotel Mirador Sureste</option>
                                    <option>Hotel Montaña Nacal</option>
                                    <option>Hotel Cueva Marina</option>
                                </select>
                            </div>
                            
                            <div class="field ">
                                <div class="label">Arrival</div>
                                <div class="field">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png">
                                    <input type="text" placeholder="Check-In" class="container-booking-selector">

                                </div>
                            </div>
                            <div class="field">
                                <div class="label">Exit</div>
                                <div class="field">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png">
                                    <input type="text" placeholder="Check-Out" class="container-booking-selector">

                                </div>

                            </div>

                            <div class="field">
                                <div class="label">Adults</div>
                                <div class="field ">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png" alt="arrow down">
                                    <input type="text" placeholder="Adults" accept=""class="container-booking-selector">

                                </div>
                            </div>

                            <div class="field">
                                <div class="label">Children</div>
                                <div class="field">
                                    <div class="label"></div>
                                    <img width="12" src="../img/marker.png" alt="arrow down">
                                    <input type="text" placeholder="Children" value="" class="container-booking-selector">

                                </div>

                               
                            </div>


                            <button class="sear">
                                <input type="submit" value="VIEW AVAILABILITY">
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
                <p>The best comfort at the reach of your hand</p>
            </div>
        </div>




        <!-- EL HOTEL -->
        <div class="hotel">
            <div class="hotel-text">

                <p class="text">Welcome to Canary Hotels, our hotel chain located in Gran Canaria. Enjoy our different hotels with the greatest comfort. You will have countless services, such as breakfast, internet, own parking ... <br> Take advantage, it will be the best place to take your children this summer, contact us at CanaryHotels@hotmail.com.</p>

                <div class="button button-read">
                    <a href="../en/quienes-somos.php">KEEP READING</a>
                </div>

                <div class="button button-more2">
                    <a href="../en/booking.php">BOOK NOW</a>
                </div>

            </div>
            <img src="../img/gf-victoria-hotel-tenerife.jpg" alt="Carnary Hotels Portada-hotel">
        </div>

        <!-- ALOJAMIENTOS -->
        <div class="accommodation">
            <div class="accommodation-title">

                <h2>
                    Discover our accommodations
                </h2>
            </div>
            <div class="accommodation-parts">
                <div class="accommodation-part">
                    <span class="iconic-image"><a href="../img/index/hotel1.jpg" title="Hotel mirador sureste"><img src="../img/index/hotel1.jpg"></a></span>
                    <h3>HOTEL MIRADOR SURESTE</h3>
                    <p>The greatest comfort you will find</p>
                    <div class="button button-read">
                        <a href="../en/mirador_sureste.php">VIEW ACCOMMODATION</a>
                    </div>
                    <p>Maspalomas</p>
                    <p>Gran Canaria</p>
                </div>
                <div class="accommodation-part">
                    <span class="iconic-image"><a href="../img/index/hotel2.jpg" title="Hotel montaña nacal"><img src="../img/index/hotel2.jpg"></a></span>
                    <h3>HOTEL MONTAÑA NACAL</h3>
                    <p>Your dreams will become true</p>
                    <div class="button button-read">
                        <a href="../en/montaña_nacal.php">VIEW ACCOMMODATION</a>
                    </div>
                    <p>San Agustín</p>
                    <p>Gran Canaria</p>
                </div>
                <div class="accommodation-part">
                    <span class="iconic-image"><a href="../img/index/hotel3.jpg" title="Hotel Cueva Marina"><img src="../img/index/hotel3.jpg"></a></span>
                    <h3>HOTEL CUEVA MARINA</h3>
                    <p>Sit down and think calmly.</p>
                    <div class="button button-read">
                        <a href="../en/cueva_marina.php">VIEW ACCOMMODATION</a>
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
                    <h3 class="rule ">Sports</h3>
                    <p class="text_content">
                        Keep your mind and body active
                        Sport and fun go hand in hand. In Canary Hotels
                        we have at your disposal a complete gym, a multipurpose court
                        volleyball and 5-a-side football or squash court, among other options
                        to make your experience with us unforgettable.
                    </p>
                </div>

            </div>

            <!-- SPA KRABI -->
            <div class="content_servicios margin-top-cero">

                <div class="content medium-width">
                    <h3 class="rule ">Sauna</h3>
                    <p class="text_content">We want you to enjoy your stay to the fullest, that is why we love to pamper and take care of you in our spa & wellness area. Here you will find a hydromassage pool, sauna and Turkish bath, and you can enjoy body and facial treatments.</p>
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
    <script type="text/javascript" src="../js/booking-search.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/bundle.js" data-cfasync="false"></script>
    <script type="text/javascript" src="../js/cookies.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>