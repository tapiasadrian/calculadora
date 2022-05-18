<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora</h1>
    <div class="container">
        <form method="POST">
            Numero 1:<input type="number" name="numero1" value="0" max="1000" min="-1000" required>
            Numero 2:<input type="number" name="numero2" value="0" max="1000" min="-1000" required>
            <hr>
            <input type="radio" name="opcion" value="sumar" required> sumar
            <input type="radio" name="opcion" value="Restar" required> Restar
            <input type="radio" name="opcion" value="Multiplicar" required> Multiplicar
            <input type="radio" name="opcion" value="Dividir" required> Dividir
            <input type="radio" name="opcion" value="Potenciacion" required> Potenciacion
            <input type="radio" name="opcion" value="Concatenacion" required> Concatenacion
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar">
            <input type="reset" class="btn btn-danger w-25" value="Limpiar">
        </form>

        <div>
            <?php
            // if ($_POST){
            //     $n1 = $_POST['numero1'];
            //     $n2 = $_POST['numero2'];
            //     $opcion=$_POST['opcion'];

            //     function mensaje (){
            //         echo "hola";
            //     }
                 
            //     mensaje();
            // }

            if ($_POST){
                function sumar(){
                    echo "La suma de los numeros es: " .($_POST['numero1']+$_POST['numero2']);
                }

                function restar(){
                    echo "La Resta de los numeros es: " .($_POST['numero1']-$_POST['numero2']);
                }

                function Multiplicar(){
                    echo "La multiplicacion de los numeros es: " .($_POST['numero1']*$_POST['numero2']);
                }

                function Dividir(){
                    if ($_POST['numero2']==0)
                    $d="Error: division por 0";
                    else
                    $d=$_POST['numero1']/$_POST['numero2'];
                    echo "La division de los numeros es: ".$d;
                }

                function potenciacion(){
                    echo "La potencia de los numeros es: " .(pow($_POST['numero1'],$_POST['numero2']));
                }

                function concatenacion(){
                    echo "La concatenacion de los numeros es: " .($_POST['numero1'].$_POST['numero2']);
                }

                switch($_POST['opcion']){
                    case 'sumar':
                        Sumar();
                        break;
                    case 'restar':
                        Restar();
                        break;
                    case 'Multiplicar':
                        Multiplicar();
                        break;
                    case 'Dividir':
                        Dividir();
                        break;
                    case 'Potenciacion':
                        Potenciacion();
                        break;
                    case 'Concatenacion':
                        Concatenacion();
                        break;
                    default:
                    echo "Error en la opcion seleccionada";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>