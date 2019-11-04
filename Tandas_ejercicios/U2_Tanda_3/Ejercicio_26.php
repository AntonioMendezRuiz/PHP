<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 26</title>
</head>
<body>
    <?php
    //Realiza un programa que pida primero un número y a continuación un dígito. 
    //El programa nos debe dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número introducido.
    if (!isset($_POST['n'])){
        ?>
        <form action="Ejercicio_26.php" method="post">
          Introduzca un número entero: <input type="number" name="n" min="0" autofocus="" required=""><br>
          Introduzca un dígito: <input type="number" name="digito" min="0" max="9" required=""><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
          $n = $_POST['n'];
          $digito = $_POST['digito'];
          $volteado = 0;
          $longitud = 0;
          $posicion = 1;

          echo "Contando de izquierda a derecha, el $digito aparece dentro de $n en las siguientes posiciones:&nbsp;&nbsp;";

          $numero = $n;
          if ($numero == 0) {
            $longitud = 1;
          }

          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            $numero = floor($numero / 10);
            $longitud++;
          } 
          while ($volteado > 0) {
            if (($volteado % 10) == $digito) {
              echo "$posicion&nbsp;&nbsp;";
            }
            $volteado = floor($volteado/10);
            $posicion++;
          } 
        } 
      ?>
    
</body>
</html>