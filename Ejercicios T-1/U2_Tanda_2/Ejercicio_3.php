<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="Ejercicio_3.php" method ="post">
        <input type="number" name="dia" min = "1" max = "7"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa en que dado un número del 1 a 7 escriba 
        //el correspondiente nombre del día de la semana. 
        $dia = $_POST["dia"];
        switch ($dia) {
            case 1:
            echo "Lunes";
            break;
            case 2:
            echo "Martes";
            break;
            case 3:
            echo "Miércoles";
            break;
            case 4:
            echo "Jueves";
            break;
            case 5:
            echo "Viernes";
            break;
            case 6:
            echo "Sábado";
            break;
            case 7:
            echo "Domingo";
            break;
        }
    ?>
</body>
</html>