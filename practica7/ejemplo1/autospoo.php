<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximumscale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Venta de autos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Autos disponibles</h1>
        </header>
        <div class="row">
        <?php
        //Incluyendo el archivo de clase
        Spl_autoload_register(function ($classname){
        //function __autoload($classname) {
        include_once("class/" . $classname . ".class.php");
        });
        //Creando los objetos para cada tipo de auto. Notar que se están
        //asignando a elementos de una matriz que tendrá por nombre $movil
        $movil[0] = new auto("Peugeot", "307", "Gris", "img/peugeot.jpg");
        $movil[1] = new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg");
        $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
        $movil[3] = new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg");
        //Esta llamada mostrará los valores por defecto en los argumentos
        //del método constructor.
        $movil[4] = new auto();
        ?>
            <div class="col-6">
                <h4>Seleccionar auto</h4>
                <form action="" method="POST">
                <div class="row p-2">
                    <div class="col-12 py-2">
                        <select name="marca" class="form-select" aria-label="Default select example">
                            <option selected>Seleccionar marca</option>
                            <?php for($i=0; $i<count($movil); $i++){
                                echo "<option value=\"".$i."\">".$movil[$i]->getMarca()."</option>";
                            }?>
                        </select>
                    </div>
                    <div class="col-12 py-2">
                        <input type="submit" id="enviar" name="submit" value="Mostrar" class="btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-6">
                <h4>Mostrar auto</h4>
                <?php
                if(isset($_POST['submit']) && $_POST['submit'] == "Mostrar"){
                    extract($_POST);
                    if($marca!="Seleccionar marca") $movil[$marca]->mostrar();
                    else echo "<h5>No ha seleccionada marca</h5>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>