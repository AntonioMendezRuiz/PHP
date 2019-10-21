<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
</head>
<body>
    <form action="Ejercicio_11.php" method ="post">
        Hora <input type="number" name="hora" min = "0" max ="24"><br>
        Minutos <input type="number" name="minuto" min = "0" max = "60"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Escribe un programa que dada una hora 
    //determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche.
    $segTotal = 3600*24;
    $h = $_POST["hora"];
    $m = $_POST["minuto"];
    
    echo "El número de segundos hasta medianoche es ". ($segTotal - (($h*3600)+($m*60)));
    ?>
    
</body>
</html>