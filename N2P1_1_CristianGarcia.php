<?php

session_start();

?>

<html>
 <head>
  <title>Mi web de peliculas</title>
 </head>
 <body>
    <?php
    
    echo "Bienvenido: ";
    echo $_SESSION["nombre"];
    echo " ";
    echo $_SESSION["apellido1"];
    echo " ";
    echo $_SESSION["apellido2"];
    echo " ";
    echo "<br/>";
    echo "<br/>";
    echo "Mi pelicula favorita es:  ";
    echo $_GET['pelifavorita'];   
    
    echo "<br/>";
    echo "<br/>";
    echo "Datos del formulario: ";
    echo "<br/>";
    echo $_POST["usuario"];
    echo "<br/>";
    echo $_POST["codigo"];
    echo "<br/>";
    echo $_POST["pass"];
    
    echo "<br/>";
    echo "<br/>";
    echo "Datos de la cookie: ";
    echo "<br/>";
    echo $_COOKIE["nomPost"];
    
    echo "<br/>";
    echo "<br/>";
    echo "el usuario del formulario esta vacio?: ";
    /*he usado el empty en vez del isset porque la variable POST siempre que le das a enviar estará seteada y 
    dará el valor TRUE ya que el valor enviado no es NULL aunque si que está vacío.*/
    $nombre = empty($_POST["usuario"]) ? 'si':'no';
    echo $nombre;

    
    date_default_timezone_set('Europe/Madrid');
    $dia = date('d');
    $mes = date('m');
    $ano = date('o');
    echo "<br/>";
    echo "<br/>";    
    echo "la fecha de hoy es:";
    echo " ";
    echo $dia;
    echo "-";
    echo $mes;
    echo "-";
    echo $ano;
       
    ?>
 </body>
</html>
