<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <p>Conversor pesetas a euros</p>
    <form action="Ejercicio_3.php" method ="post">
        <input type="text" name="pesetas"><br>
        <input type="submit" value="conversor">
    </form>
    <?php
    //Realiza un conversor de pesetas a euros. 
    //La cantidad en pesetas que se quiere convertir se deberá introducir por teclado.
    $precision = 2;
    echo $_POST['pesetas'].' pesetas son '.round($_POST['pesetas']/166.386,$precision). 'euros.'
    ?>
</body>
</html>