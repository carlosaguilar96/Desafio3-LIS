<!DOCTYPE html>
<html lang="es">
<head>
    <title>Año bisiesto</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="ejemplo1/css/fonts.css" />
    <link rel="stylesheet" href="ejemplo1/css/formstyle.css" />
    <link rel="stylesheet" media="screen" href="ejemplo1/css/bisiesto.css" />
    <script src="ejemplo1/js/validatedata.js"></script>
    <script src="ejemplo1/js/prefixfree.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
            if(!isset($_POST['enviar'])):
        ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" name="frmdatos">
            <h2 class="contact">Años bisiestos</h2>
            <span class="contact">
                <label for="txtdato">Probar año:</label>&nbsp;&nbsp;
            </span>
            <input type="text" name="year" id="year" value="" maxlength="20" placeholder=" (Ingrese el dato)" /><br/>
            <span id="numbersOnly">Ingrese números enteros</span>
            <input type="submit" name="enviar" id="enviar" value="Probar" />
        </form>
        <?php
            else:
                $year = isset($_POST['year']) ? $_POST['year']: 0;
                if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0):
                    echo "<p class=\"bisiesto\">";
                    echo "<span style=\"color: Green;font:bold 10pt 'Lucida Sans';\">El año $year es bisiesto</span><br />\n";
                    echo "<span style=\"color: Green; font:bold 10pt 'Lucida Sans';\"><a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</a>";
                    echo "</p>";
                else:
                    echo "<p class=\"bisiesto\">";
                    echo "<span style=\"color: FireBrick;font:bold 10pt 'Lucida Sans':\">El año $year no es bisiesto</span><br />\n";
                    echo "<span style=\"color:Green;font:bold 10pt 'Lucida Sans';\"><a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</a>";
                    echo "</p>";
                endif;
            endif;
        ?>
    </div>
</body>
</html>