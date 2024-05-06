<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $nombre_completo = "José Carlos Aguilar Linares";
        $lugar_nacimiento = "Cojutepeque, Cuscatlán, El Salvador";
        $edad = 27;
        $carnet = "AL210841";
        echo '<div class="row text-center justify-content-center pt-4">';
        echo '<div class="col-5">';
            echo '<table class="table table-bordered caption-top">';
                echo '<caption>Datos personales</caption>';
                echo '<tbody>';
                    echo '<tr>';
                        echo '<th>Nombre Completo</th>';
                        echo '<td>'.$nombre_completo.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>Lugar de nacimiento</th>';
                        echo '<td>'.$lugar_nacimiento.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>Edad</th>';
                        echo '<td>'.$edad.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>Carnet</th>';
                        echo '<td>'.$carnet.'</td>';
                    echo '</tr>';
                echo '</tbody>';
            echo '</table>';
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>