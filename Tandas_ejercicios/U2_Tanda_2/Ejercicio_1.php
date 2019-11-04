<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="Ejercicio_1.php" method ="post">
        <input type="text" name="dia"><br>
        <input type="submit" value="calcular">
    </form>
    <?php   
        //Escribe un programa que pida por teclado un día de la semana 
        //y que diga qué asignatura toca a primera hora ese día.
        $dia = $_POST['dia'];

        switch ($dia) {
            case "Lunes":
            echo "DWES";
            break;
            case "Martes":
            echo "EI";
            break;
            case "Miércoles":
            echo "DIW";
            break;
            case "Jueves":
            echo "DIW";
            break;
            case "Viernes":
            echo "DWES";
            break;
            case "Sábado":
            echo "Dormir";
            break;
            case "Domingo":
            echo "Dormir";
            break;
        }
    ?>
    
</body>
</html>