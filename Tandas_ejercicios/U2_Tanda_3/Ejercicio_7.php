<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="Ejercicio_7.php" method ="post">
        <input type="number" name="num1" max = "9999" min ="999" autofocus>
        <input type="hidden" name="intentos" value = "3"><br>
        <input type="submit" value="Entrar">
    </form>
    <?php
    //Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. 
    //El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje 
    //“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte 
    //se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. 
    $clave = 1234;
    $claveintroducida = $_POST['num1'];
    $intentos = $_POST['intentos'];
    
    if($clave == $claveintroducida){
        echo "La caja fuerte se ha abierto satisfactoriamente";
    }
    else{
        echo "Lo siento, esa no es la combinación <br>";
        if($intentos = 0){
            echo "Has agotado los intentos<br>";
        }
        else{
            echo '<form action="Ejercicio_7.php" method ="post">';
            echo '<input type="number" name="num1" max = "9999" min ="999" autofocus>';
            echo '<input type="hidden" name="intentos" value="'. $intentos . '">';
            echo '<input type="submit" value="Entrar">';
            echo "</form>";
            echo "Te quedan ". $intentos. " intentos";
            $intentos--;
        }
    }
    ?>
</body>
</html>