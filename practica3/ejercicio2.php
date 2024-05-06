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
    <div class="container">
        <div class="row text-center justify-content-center pt-4">
        <div class="col-md-6">
            <h1><b>TABLA DE MULTIPLICAR</b></h1>
            <form action="" method="POST">
                <div class="row p-2">
                    <div class="col-12 py-2">
                        <label>Ingrese el número:</label>
                        <input type="text" id="num1" name="num1" />
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
                    if($num1!=null){
                            echo "<h1><b> Tabla de multiplicar para el número ".$num1."</b></h1><br>";
                            for($i=1;$i<=10;$i++){
                                $resultado = $i * $num1;
                                echo "<h2><b>".$num1." X ".$i." = ".$resultado."</b></h2>";
                            }
                    }
                    else{
                        echo "<h3>No ha ingresado número</h3>";
                    }
                }
            ?>
        </div>
    </div>
    </div>
</body>
</html>