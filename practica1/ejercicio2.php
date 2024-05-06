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
    <div class="row text-center justify-content-center pt-4">
        <div class="col-md-6">
            <h3>Formulario de ingreso</h3>
            <form action="" method="POST">
                <div class="row p-2">
                    <div class="col-12 py-2">
                        <label>Cantidad en dólares:</label>
                        <input type="text" id="cantD" name="cantD" />
                    </div>
                    <div class="col-12 py-2">
                        <input type="submit" id="enviar" name="submit" value="Enviar" class="submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Tabla de resultados</h3>
            <div class="row justify-content-center">
                <div class="col-10">
                    <table class="table table-bordered caption-top">
                        <caption>Conversión de dólares a euros</caption>
                        <thead>
                            <tr>
                                <th scope="col">Cantidad en dólares</th>
                                <th scope="col">Cantidad en euros</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"){
                                extract($_POST);
                                if(is_numeric($cantD)){
                                    $cantE = $cantD * 0.92;
                                    echo "<tr><td>$".$cantD."</td>";
                                    echo "<td>&euro;".$cantE."</td></tr>";
                                }
                                else{
                                    echo "<tr><td colspan='2'>Ingreso de datos no válidos</td></tr>";
                                }
                            }
                            else{
                                echo "<tr><td colspan='2'>No se han ingresado datos</td></tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>