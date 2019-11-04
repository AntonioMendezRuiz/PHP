<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
<p>Por favor, introduzca dos números:</p><br>
        <form action="Ejercicio_1.php" method="post">
          x <input type="text" name="x"><br>
          y <input type="text" name="y"><br>
          <input type="submit" value="multiplicacion">
        </form>

    <?php
        //Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
        echo $_POST['x']. " x ". $_POST['y']. " = ". $_POST['x'] * $_POST['y'];
    ?>
    
</body>
</html>