<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    <p>Coversor de euros a pesetas</p>
    <p>Introduce una cantidad en euros:</p>
    <form action="Ejercicio_2.php" method="post">
        <input type="number" name="euros" id="euros"><br>
        <input type="submit" value="conversion">
    </form>
    <?php
        //Realiza un conversor de 
        //euros a pesetas. Ahora la cantidad en euros que 
        //se quiere convertir se deberá introducir por teclado.

        if(isset($_POST['euros'])){
        echo $_POST['euros'],' euros son ',round($_POST['euros'] * 166.386),' pesetas.';
        }
    ?>
</body>
</html>