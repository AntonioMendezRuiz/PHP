<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php
    //Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno leído por 
    //teclado que no sean divisibles entre otro también leído de igual forma.
    if (!isset($_POST['numeroGrande'])){
        ?>
          <form action="Ejercicio_29.php" method="post">
            Introduzca un número entero positivo (relativamente grande):
            <input type="number" name="numeroGrande" min="0" autofocus="" required=""><br>
            Introduzca otro número (relativamente pequeño):
            <input type="number" name="numeroPequeno" min="0" required=""><br>
            <input type="submit" value="Aceptar">
          </form>
      <?php
        } else {
          $numeroGrande = $_POST['numeroGrande'];
          $numeroPequeno = $_POST['numeroPequeno'];

          echo "Los números enteros positivos menores que $numeroGrande";
          echo " que no son divisibles entre $numeroPequeno son los siguientes: <br>";

          for ($i = 1; $i < $numeroGrande; $i++) {
            if (($i % $numeroPequeno) != 0) {
              echo "$i ";
            }
          }
        }
    ?>
</body>
</html>