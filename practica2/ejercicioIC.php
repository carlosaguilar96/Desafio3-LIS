<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio IC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row text-center justify-content-center pt-4">
        <div class="col-md-6">
        <h3>Ingresar notas</h3>
            <form action="" method="POST">
                <div class="row p-2">
                    <div class="col-12 py-2">
                        <label>Estudiante:</label>
                        <input type="text" id="nombre" name="nombre" />
                    </div>
                    <div class="col-12 py-2">
                        <label>Materia 1:</label>
                        <input type="text" id="materia1" name="materia1" />
                        <label>Nota:</label>
                        <input type="text" id="nota1" name="nota1" />
                    </div>
                    <div class="col-12 py-2">
                        <label>Materia 2:</label>
                        <input type="text" id="materia2" name="materia2" />
                        <label>Nota:</label>
                        <input type="text" id="nota2" name="nota2" />
                    </div>
                    <div class="col-12 py-2">
                        <label>Materia 3:</label>
                        <input type="text" id="materia3" name="materia3" />
                        <label>Nota:</label>
                        <input type="text" id="nota3" name="nota3" />
                    </div>
                    <div class="col-12 py-2">
                        <label>Materia 4:</label>
                        <input type="text" id="materia4" name="materia4" />
                        <label>Nota:</label>
                        <input type="text" id="nota4" name="nota4" />
                    </div>
                    <div class="col-12 py-2">
                        <label>Materia 5:</label>
                        <input type="text" id="materia5" name="materia5" />
                        <label>Nota:</label>
                        <input type="text" id="nota5" name="nota5" />
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
                    if($nombre!=null && $nota1!=null && $nota2!=null && $nota3!=null && $nota4!=null && $nota5!=null && $materia1!=null && $materia2!=null && $materia3!=null && $materia4!=null && $materia5!=null){
                        echo "<h3>Estudiante: ".$nombre."</h3>";
                        $cum = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5;
                        echo "<h3>CUM: ".$cum."</h3>";
                        if ($cum>=7.5){
                            echo "<h5>El estudiante podrá cursar un máximo de 32 unidades valorativas.</h5>";
                        } else if($cum>=7&&$cum<7.5){
                            echo "<h5>El estudiante podrá cursar un máximo de 24 unidades valorativas.</h5>";
                        } else if($cum>=6&&$cum<7){
                            echo "<h5>El estudiante podrá cursar un máximo de 20 unidades valorativas.</h5>";
                        }  else if($cum<6){
                            echo "<h5>El estudiante podrá cursar un máximo de 16 unidades valorativas.</h5>";
                        }
                    }
                    else{
                        echo "<h3>Datos incompletos</h3>";
                    }
                }
            ?>
        </div>
    </div>
    </div>
</body>
</html>