<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de monedas</title>
    <link rel="stylesheet" href="css/monedas.css">
</head>
<body>
    <header>
        <h2>Tabla de conversiones de colones a dólares</h2>
    </header>
    <?php
    define("EQUIV","8.756");
    $colones = 1.00;
    $tabla = "<table>\n<thead>\n";
    $tabla .= "<th>Colones</th>";
    $tabla .= "<th>Dólares</th>";
    $tabla .= "</thead>\n</tbody>\n";
    while($colones<=10){
        $tabla .= "<tr>\n<td>&cent; ";
        $tabla .= number_format($colones, 2,'.',','). "</td><td>\$ ";
        $tabla .= number_format($colones / EQUIV, 2,'.',',');
        $colones += 0.25;
        $tabla .= "</td>\n</tr>\n";
    }
    $tabla .= "</tbody>\n</table>\n";
    echo $tabla;
    ?>
</body>
<script src="js/modernizr.custom.lis.js"></script>
</html>