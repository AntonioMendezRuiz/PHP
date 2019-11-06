<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 13</title>
</head>
<body>
    <form action="Ejercicio_13.php" method ="post">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="number" name="num3"><br>
        <input type="number" name="num4"><br>
        <input type="number" name="num5"><br>
        <input type="number" name="num6"><br>
        <input type="number" name="num7"><br>
        <input type="number" name="num8"><br>
        <input type="number" name="num9"><br>
        <input type="number" name="num10"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos.

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];
        $num6 = $_POST["num6"];
        $num7 = $_POST["num7"];
        $num8 = $_POST["num8"];
        $num9 = $_POST["num9"];
        $num10 = $_POST["num10"];
        $positivos = 0;
        $negativos = 0;

        if(num1 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        if(num2 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        if(num3 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        if(num4 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        if(num5 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        if(num6 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        if(num7 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }if(num8 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }if(num9 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }if(num10 > 0)
        {
            $positivos++;
        }
        else
        {
            $negativos++;
        }
        echo "El número de positivos es " . $positivos . " y de negativos " . $negativos . ".";
    ?>
</body>
</html>