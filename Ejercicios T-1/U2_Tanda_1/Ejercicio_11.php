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
        <input type="text" name="kb"><br>
        <input type="submit" value="calcular">
    </form>
    <?php
        //Realiza un conversor de Kb a Mb.
        $kb = $_POST['kb'];
        $mb = $kb / 1024;

        echo $kb.'kilobytes son '. $mb .' megas.';
    ?>
</body>
</html>