<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
</head>
<body>
    <form action="Ejercicio_10.php" method ="post">
        <input type="text" name="mb"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Realiza un conversor de Mb a Kb.
        $mb = $_POST['mb'];
        $kb = $mb *1024;

        echo $mb.'megas son '. $kb .' kilobytes.';
    ?>
</body>
</html>