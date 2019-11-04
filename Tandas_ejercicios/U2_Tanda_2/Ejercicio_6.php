<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="Ejercicio_6.php" method ="post">
        <input type="number" name="altura"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. 
    //Aplica (la formula) siendo g = 9.81m/s2
    $g = 9.81;
    $h = $_POST["altura"];
    $t = sqrt((2*$h)/$g);
    echo "El tiempo que tarda en caer es ". $t . " segundos.";
    ?>
</body>
</html>