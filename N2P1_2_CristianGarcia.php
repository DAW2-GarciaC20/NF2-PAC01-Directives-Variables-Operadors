<?php

session_start();
$_SESSION['nombre'] = "Cristian";
$_SESSION['apellido1'] = "Garcia";
$_SESSION['apellido2'] = "Moreno";
$_POST['usuario'];
$_POST['codigo'];
$_POST['pass'];
setcookie("nomPost",$_SESSION['nombre'],time()+15);
?>

<html>
 <head>
  <title>Busca mi pelicula favorita!</title>
 </head>
 <body>
    <?php
    $mipelifavorita = urlencode("Star Wars");
    echo "<a href='N2P1_1_CristianGarcia.php?pelifavorita=$mipelifavorita'>";
    echo "haz click para ver mi pelicula favorita";
    echo "</a>";
    ?>
    <form method="post" action="N2P1_1_CristianGarcia.php">
       <p>Introduce tu nombre: 
        <input type="text" name="usuario"/>
       </p>
       <p>introduce tu codigo: 
        <input type="text" name="codigo"/>
       </p>
       <p>introduce tu contraseña: 
        <input type="password" name="pass"/>
       </p>
       <p>
        <input type="submit" name="enviar" value="Enviar"/>
       </p>
    </form>
 </body>
</html>
