<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>

    <form action="Ejercicio_2.php" method ="post">
        <input type="number" name="hora" min = "0" max = "24"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Realiza un programa que pida una hora por teclado y 
    //que muestre luego buenos días, buenas tardes o buenas noches según la hora. 
    //Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. 
    //Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
    $hora = $_POST["hora"];
    if($hora > 6 && $hora < 12){
        echo "Buenos dias";
    }
    elseif($hora > 13 && $hora < 20){
        echo "Buenas tardes";
    }
    else{
        echo "Buenas noches";
    }
    ?>
</body>
</html>