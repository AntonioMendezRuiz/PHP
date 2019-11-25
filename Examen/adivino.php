<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adivino</title>
</head>
<body>
    <form action="adivino.php" method="post">
        <input type="number" name="n" autofocus><br>
        <input type="submit" value="Comprobar número">
    </form>
    <?php
    session_start();
    $numR = rand(1,100);
    
   if(!isset($_SESSION["newsession"])){
        $_SESSION["newsession"] = $numR;
    }
    if(isset($_POST['n'])){
    if(empty($_POST['n'])){
        echo "No ha escrito ningún número";
    }elseif($_POST['n'] <= 0){
        echo "No ha escrito un número entero positivo";
    }else{
        if($_POST['n'] < $_SESSION["newsession"]){
            echo "Demasiado pequeño";
        }
        elseif($_POST['n'] > $_SESSION["newsession"]){
            echo "Demasiado grande";
        }
        else{
            echo "FELICIDADES. HAS ACERTADO.";
            unset($_SESSION["newsession"]);
            unset($_POST['n']);
        }
    }
}
?>
</body>
</html>