<?php
  session_start();

  require '../database/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="../css/menu.css">
  </head>
  <body>
      <div class="header">
            <!-- LOGO -->
            <div class="header_logo">
                <div class="menu_bar">
                    <a class="bt-menu"><span class="icon-menu"></span></a>
                </div>
                <a class="logo_hotel" href="../en/index.php" title="Canary Hotels"><span class="sr-only">Canary Hotels</span></a>

            </div>

            <!-- MENÚ -->
            <div class="header-menu">
                <div class="header-menu-correo">  
                        <div class="grid-item">
                            <a href="#" onclick="ventana()"><i class="fas fa-user"></i></a>
                        </div>
                        <p>CanaryHotels@hotmail.com</p>
                        <div class="header-info mb-3">  
                            <select id="menu-selector">
                                <option value="es">es</option>
                                <option value="en" selected="selected">en</option>
                            </select>    
                        </div>
                     </div>      

                <ul class="menu">
                    <li class="act"><a href="../en/index.php">Home</a></li>
                    <li class="sub cr"><a href="../en/quienes-somos.php">Who we are</a></li>
                    <li class="sub">
                        <a href="#">Accommodation</a>
                        <ul class="children">
                            <li><a href="../en/mirador_sureste.php">Hotel Mirador Sureste</a></li>
                            <li><a href="../en/cueva_marina.php">Hotel Cueva Marina</a></li>
                            <li><a href="../en/montaña_nacal.php">Hotel Montaña Nacal</a></li>
                        </ul>

                    </li>
                    <li class="fd"><a href="../en/Servicios.php">Services</a></li>
                    <li class="ft"><a href="../en/galeria.php">Gallery</a></li>
                    <li class="st"><a href="../en/contacto.php">Contact</a></li>
                    <li class="rs"><a href="../en/reserva.php">Booking</a></li>

                </ul>

            </div>
      </div>

    <script type="text/javascript" src="../js/language.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    
  </body>
</html>
