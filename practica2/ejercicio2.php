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
        <div class="col-md-12">
            <form action="" method="POST">
                <div class="row p-2">
                    <div class="col-12 py-2">
                        <label>Ingrese un caracter:</label>
                        <input type="text" id="caracter" name="caracter" maxlength="1" />
                    </div>
                    <div class="col-12 py-2">
                        <input type="submit" id="enviar" name="submit" value="Enviar" class="submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <?php
                if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"){
                    extract($_POST);
                    switch($caracter){
                        case 'a': case 'e': case 'i': case 'o': case 'u': 
                            echo "<h3>El caracter<b> ".$caracter." </b>es una vocal minúscula</h3>"; break;
                        case 'A': case 'E': case 'I': case 'O': case 'U':
                            echo "<h3>El caracter<b> ".$caracter." </b>es una vocal mayúscula</h3>"; break;
                        case 'á': case 'é': case 'í': case 'ó': case 'ú': 
                            echo "<h3>El caracter<b> ".$caracter." </b>es una vocal minúscula con tilde</h3>"; break;
                        case 'Á': case 'É': case 'Í': case 'Ó': case 'Ú':
                            echo "<h3>El caracter<b> ".$caracter." </b>es una vocal mayúscula con tilde</h3>"; break;
                        case 'b': case 'c': case 'd': case 'f': case 'g': case 'h': case 'j': case 'k': case 'l': case 'm': case 'n': case 'ñ': case 'p': case 'q': case 'r': case 's': case 't': case 'v': case 'w': case 'x': case 'y': case 'z':
                            echo "<h3>El caracter<b> ".$caracter." </b>es una consonante minúscula</h3>"; break;                        
                        case 'B': case 'C': case 'D': case 'F': case 'G': case 'H': case 'J': case 'K': case 'L': case 'M': case 'N': case 'Ñ': case 'P': case 'Q': case 'R': case 'S': case 'T': case 'V': case 'W': case 'X': case 'Y': case 'Z':
                            echo "<h3>El caracter<b> ".$caracter." </b>es una consonante mayúscula</h3>"; break;  
                        case '1': case '2': case '3': case '4': case '5': case '6': case '7': case '8': case '9': case '0':
                            echo "<h3>El caracter<b> ".$caracter." </b>es un número</h3>"; break;  
                        case '.': case ',': case ';': case ':': case '(': case ')': case '"': case '"': case "'": case "'": case '!': case '¡': case '¿': case '?': case '#': case '$': case '%': case '&': case '_': case '-': case '+': case '*': case '{': case '}': case '[': case ']': case '/': case '%': case '$': case '#':
                            echo "<h3>El caracter<b> ".$caracter." </b>es un símbolo</h3>"; break;  
                        default:
                            echo "<h3>El caracter<b> ".$caracter." </b>no se puede procesar</h3>"; break;
                    }
                }
            ?>
        </div>
    </div>
    </div>
</body>
</html>