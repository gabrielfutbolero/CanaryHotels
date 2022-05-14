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
            <a class="logo_hotel" href="../es/index.php" title="Canary Hotels"><span class="sr-only">Canary Hotels</span></a>

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
                                <option value="es" selected="selected">es</option>
                                <option value="en">en</option>
                            </select>    
                        </div>
                     </div>               
                 
                     <ul class="menu">
                         <li class="act"><a href="../es/index.php">Inicio</a></li>
                         <li class="sub cr"><a href="../es/quienes-somos.php">Conócenos</a></li>
                         <li class="sub">
                             <a href="#">Alojamientos</a>
                             <ul class="children">
                                 <li><a href="../es/mirador_sureste.php">Hotel Mirador Sureste</a></li>
                                 <li><a href="../es/cueva_marina.php">Hotel Cueva Marina</a></li>
                                 <li><a href="../es/montaña_nacal.php">Hotel Montaña Nacal</a></li>
                             </ul>
                         </li>
                         <li class="fd"><a href="../es/Servicios.php">Servicios</a></li>
                         <li class="ft"><a href="../es/galeria.php">Galería</a></li>
                         <li class="st"><a href="../es/contacto.php">Contacto</a></li>
                         <li class="rs"><a href="../es/reserva.php">Reserva</a></li>

                     </ul>
                
                   </div> 
    </div>

    <script type="text/javascript" src="../js/language.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    
  </body>
</html>
