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
    <div class="container">
        <div class="row text-center justify-content-center pt-4">
        <h3>Cálculo de días vividos</h3>
        <div class="col-md-12">
            <form action="" method="POST">
                <div class="row p-2">
                    <div class="col-12 py-2">
                        <label>Ingrese fecha de nacimiento:</label>
                        <input type="date" id="fecha" name="fecha" />
                    </div>
                    <div class="col-12 py-2">
                        <input type="submit" id="enviar" name="submit" value="Calcular" class="submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <?php
                if(isset($_POST['submit']) && $_POST['submit'] == "Calcular"){
                    extract($_POST);
                    date_default_timezone_set("America/El_Salvador");
                    if($fecha!=null){
                        if($fecha>date("Y-m-d")){
                            echo "<h3>Fecha de nacimiento es mayor que la fecha actual</h3>";
                        } else{
                            echo "<h3>Fecha de nacimiento: ".$fecha."</h3>";
                            $fechaActual = new DateTime(date("Y-m-d"));
                            $fechaNacimiento = new DateTime($fecha);
                            $diasVividos = $fechaNacimiento->diff($fechaActual);
                            echo "<h3>Días vividos: ".$diasVividos->days."</h3>";
                        }
                    }
                    else{
                        echo "<h3>No ha seleccionado fecha</h3>";
                    }
                }
            ?>
        </div>
    </div>
    </div>
</body>
</html>