<?php
    $estudiantes = array(
        "Max Verstappen" => array(
            "Tarea" => 10,
            "Investigación"  => 10,
            "Examen Parcial" => 10
        ),
        "Charles Leclerc" => array(
            "Tarea" => 10,
            "Investigación"  => 9.4,
            "Examen Parcial" => 10
        ),
        "Pierre Gasly" => array(
            "Tarea" => 7,
            "Investigación"  => 6,
            "Examen Parcial" => 5
        ),
        "Esteban Ocon" => array(
            "Tarea" => 5,
            "Investigación"  => 4,
            "Examen Parcial" => 4.5
        ),
        "Carlos Sainz" => array(
            "Tarea" => 9,
            "Investigación"  => 10,
            "Examen Parcial" => 10
        ),
        "Lando Norris" => array(
            "Tarea" => 10,
            "Investigación"  => 6,
            "Examen Parcial" => 10
        ),
        "Lewis Hamilton" => array(
            "Tarea" => 10,
            "Investigación"  => 10,
            "Examen Parcial" => 10
        ),
        "Fernando Alonso" => array(
            "Tarea" => 8,
            "Investigación"  => 9,
            "Examen Parcial" => 10
        ),
        "Sergio Pérez" => array(
            "Tarea" => 9,
            "Investigación"  => 9,
            "Examen Parcial" => 10
            )
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center">
        <h1>Notas de estudiantes</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tarea</th>
                    <th scope="col">Investigación</th>
                    <th scope="col">Examen Parcial</th>
                    <th scope="col">Promedio Final</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($estudiantes as $estudiante => $notas){
                echo "<tr>";
                echo "<td>$estudiante</td>";
                $promedio = 0;
                $i = 1;
                foreach($notas as $actividad => $nota){
                    echo "<td>$nota</td>";
                    if($i ==1){
                        $promedio = $promedio + ($nota*0.5);
                        $i++;
                    }
                    else if($i ==2){
                        $promedio = $promedio + ($nota*0.3);
                        $i++;
                    }
                    else if($i ==3){
                        $promedio = $promedio + ($nota*0.2);
                        $i=1;
                    }
                }
                echo "<td>$promedio</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>