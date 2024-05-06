<!DOCTYPE html>
<html lang="es">
<head>
    <title>Conversión de cadenas</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" 
href="http://fonts.googleapis.com/css?family=Cabin+Condensed:600" />
    <link rel="stylesheet" media="screen" href="ejercicio6/css/conversion.css" />
    
</head>
<body>
<?php
    error_reporting(0);
    define("SALTO", "\n");
    $cad = "10 metros";
    $str = "3D";
    $val = 20.5;
    $num = 7;

    echo "<header>\n";
    echo "\t<h1>Trabajando con los tipos de datos en PHP</h1>\n";
    echo "\t<p id=\"datos\">\n";
    echo "\t\tVariables:<br />\n";
    echo "\t\t\$cad = \"$cad\"<br />\n";
    echo "\t\t\$str = \"$str\"<br />\n";
    echo "\t\t\$val = $val <br />\n";
    echo "\t\t\$num = $num <br />\n";
    echo "\t</p>\n";
    echo "</header>\n";
    
    $concat = $cad + $val;
    echo '<section>';
    echo "\n";
    echo '<article>';
    echo '<p>El valor de $concat = $cad + $val es: <span> = "' . $cad . '" + ' . $val . '</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
    
    $concat = $str + $num;
    echo '<article>';
    echo '<p>El valor de $concat = $str + $num es: <span> = "' . $str . '" + ' . $num . '</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
    
    $concat = $cad + $num;
    echo '<article>';
    echo '<p>El valor de $concat = $cad + $num es: <span> = "' . $cad . '" + ' . $num . '</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
    
    $concat = $str + $val;
    echo '<article>';
    echo '<p>El valor de $concat = $str + $val es: <span> = "' . $str . '" + ' . $val . '</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
    
    $concat = $cad + $str;
    echo '<article>';
    echo '<p>El valor de $concat = $cad + $str es: <span> = "' . $cad . '" + "' . $str . '"</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
  
    $concat = $val + $cad;
    echo '<article>';
    echo '<p>El valor de $concat = $val + $cad es: <span> = ' . $val . ' + "' . $cad . '"</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";

    $concat = $num + $str;
    echo '<article>';
    echo '<p>El valor de $concat = $num + $str es: <span> = ' . $num . ' + "' . $str . '"</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";

    $concat = $num + $cad;
    echo '<article>';
    echo '<p>El valor de $concat = $num + $cades: <span> = ' . $num . ' + "' . $cad . '"</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";

    $concat = $val + $str;
    echo '<article>';
    echo '<p>El valor de $concat = $val + $str es: <span> = ' . $val . ' + "' . $str . '"</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
    
    $concat = $str + $cad;
    echo '<article>';
    echo '<p>El valor de $concat = $str + $cad es: <span> = "' . $str . '" + "' . $cad . '"</span> = <span>';
    echo $concat . '</span> y el tipo de dato es: <span>' . gettype($concat) . "</span></p>" . SALTO;
    echo '</article>';
    echo "\n";
    echo '</section>';
    echo "\n";
?>
</body>
</html>