<!DOCTYPE html>
<html lang="es">
<head>
    <title>Detector de Lenguaje del Navegador</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-
scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="css/idioma.css" />
</head>
<body>
<div id="wrapper">
<header>
    <h1 class="emboss">Idioma del navegador</h1>
</header>
<section>
<?php
   //Antes de nada introducimos mensajes en forma de variables
   $espanol = "Hola";
   $ingles = "Hello";
   $aleman = "Hallo";
   $frances = "Bonjour";
   $italiano = "Ciao";
   $portugues = "Olá";
   //Ahora leemos del navegador cuál es su lengua oficial
   $completo = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
   $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
   //$idioma=substr($HTTP_ACCEPT_LANGUAGE,0,2);
   //Formulamos las posibilidades que se pueden dar
   echo "<p>" . $completo . "<br>";
   echo $idioma ."</p>\n";
   if($idioma == "es"){
      echo '<p class="msgOff">';
      printf ("El lenguaje que se está utilizando en el navegador es el Español: %s </p>\n", $espanol);
   }
   elseif($idioma == "fr"){
      echo '<p class="msgOff">';
      printf ("El lenguaje que se está utilizando en el navegador es el Francés: %s </p>\n", $frances);
   }
   elseif($idioma == "en"){
      echo '<p class="msgOff">';
      printf ("El lenguaje que se está utilizando en el navegador es el Inglés: %s </p>\n", $ingles);
   }
   elseif($idioma == "de"){
      echo '<p class="msgOff">';
      printf ("El lenguaje que se está utilizando en el navegador es el Alemán: %s </p>", $aleman);
   }
   elseif($idioma == "it"){
      echo '<p class="msgOff">';
      printf ("El lenguaje que se está utilizando en el navegador es el Inglés: %s </p>\n", $italiano);
   }
   elseif($idioma == "pt"){
      echo '<p class="msgOff">';
      printf ("El lenguaje que se está utilizando en el navegador es el Alemán: %s </p>", $portugues);
   }
   else{
      echo '<p class="msgOff">';
      echo "El idioma del navegador es desconocido.</p>\n";
   }
?>
</section>
</div>
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/switchclass.js"></script>
</html>