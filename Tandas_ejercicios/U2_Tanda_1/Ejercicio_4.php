<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="Ejercicio_4.php" method ="post">
        <input type="text" name="numero1"><br>
        <input type="text" name="numero2">
        <input type="submit" value="conversor">
    </form>

    <?php
        //Escribe un programa que sume, reste, multiplique y divida dos 
        //números introducidos por teclado.
        
        if(isset($_POST['numero1']) && isset($_POST['numero2'])){
        $x = $_POST['numero1'];
        $y = $_POST['numero2'];
        echo $x . ' + ' . $y . ' = ' . ($x+$y) . '<br>';
        echo $x . ' - ' . $y . ' = ' . ($x-$y) . '<br>';
        echo $x . ' x ' . $y . ' = ' . ($x*$y) . '<br>';
        echo $x . ' / ' . $y . ' = ' . ($x/$y) . '<br>';
        }
    ?>
    
</body>
</html>