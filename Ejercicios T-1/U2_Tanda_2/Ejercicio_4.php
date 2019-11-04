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
        <input type="number" name="horas" min="0"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
    //Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las
    //horas extras. Escribe un programa que calcule el salario semanal de un trabajador teniendo 
    //en cuenta que las horas ordinarias (40 primeras horas de trabajo) 
    //se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora.
    $horas = $_POST["horas"];

    if($horas < 40){
        $horas = $horas * 12;
        echo $horas . " es el salario";
    }
    else{
        $total1;
        $total2;
        $total1 = 40 * 12;
        $total2 = ($horas - 40) * 16;
        echo $total1 + $total2 . " es el salario";
    }
    ?>
</body>
</html>