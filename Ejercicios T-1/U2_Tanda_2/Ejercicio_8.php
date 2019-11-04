<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="Ejercicio_8.php" method ="post">
        Nota 1 <input type="number" name="nota1" min = "0" max = "10"><br>
        Nota 2 <input type="number" name="nota2" min = "0" max = "10"><br>
        Nota 3 <input type="number" name="nota3" min = "0" max = "10"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Amplía el programa anterior para 
    //que diga la nota del boletín (insuficiente, suficiente, bien, notable o sobresaliente).
    $x = $_POST["nota1"];
    $y = $_POST["nota2"];
    $z = $_POST["nota3"];
    echo "La media de las 3 notas es ". ($x+$y+$z)/3;
    echo "<br>";
    echo "Primera nota ". $x ."<br>";
    if($x<5){
        echo "Insuficiente <br>";
    }
    elseif($x==5){
        echo "Suficiente <br>";
    }
    elseif($x<=6){
        echo "Bien <br>";
    }
    elseif($x<=8){
        echo "Notable <br>";
    }
    else{
        echo "Sobresaliente <br>";
    }

    echo "Primera segunda ". $y."<br>";
    if($y<5){
        echo "Insuficiente <br>";
    }
    elseif($y==5){
        echo "Suficiente <br>";
    }
    elseif($y<=6){
        echo "Bien <br>";
    }
    elseif($y<=8){
        echo "Notable <br>";
    }
    else{
        echo "Sobresaliente <br>";
    }

    echo "Primera tercera ". $z."<br>";
    if($z<5){
        echo "Insuficiente <br>";
    }
    elseif($z==5){
        echo "Suficiente <br>";
    }
    elseif($z<=6){
        echo "Bien <br>";
    }
    elseif($z<=8){
        echo "Notable <br>";
    }
    else{
        echo "Sobresaliente <br>";
    }
    ?>
</body>
</html>