<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <--Escribe un programa que muestre tu nombre por pantalla.--> </br>
    <?php
      echo 'Antonio Méndez';
    ?>
</br></br>
<-- Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. 
Cada dato se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, 
utilizando tanto HTML como PHP. -->
     <?php
      echo 'Núemero de teléfono: 956342234<br/>';
      echo 'Dirección: C/Armas de Santiago';
    ?>
</br></br>

<-- Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano. 
Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta `<table>` de HTML. -->
    <?php
    echo "<table>";
          echo "<tr><th>Spanish</th><th>English</th></tr>";
          echo "<tr><td>conocimiento</td><td>knowledge</td></tr>";
          echo "<tr><td>amor</td><td>love</td></tr>";
          echo "<tr><td>felicidad</td><td>happiness</td></tr>";
          echo "<tr><td>agua</td><td>water</td></tr>";
          echo "<tr><td>aire</td><td>air</td></tr>";
          echo "<tr><td>pastel</td><td>cake</td></tr>";
          echo "<tr><td>dinero</td><td>money</td></tr>";
          echo "<tr><td>libro</td><td>book</td></tr>";
          echo "<tr><td>bosque</td><td>forest</td></tr>";
    echo "</table>";
      ?>
      </br></br>

      <-- Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente. A continuación,
       muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación -->

      <?php
        $x = 144;
        $y = 999;
        echo "x = ", $x;
        echo "<br>y = ", $y;
        echo "<br>x + y = ", $x + $y;
        echo "<br>x - y = ", $x - $y;
        echo "<br>x / y = ", $x / $y;
        echo "<br>x * y = ", $x * $y;
      ?>

</br></br>
<-- Crea la variable $nombre y asígnale tu nombre completo. Muestra su valor por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 1.-->

    <?php
      $nombre = "Antonio";
      echo $nombre;
  ?>

<-- Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. Muestra los valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2. -->

<?php
      $euros = 6;
      $pesetas = 6 * 166;
      echo $euros, " euros son ", $pesetas, " pesetas.";
    ?>

</br></br>

<-- Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar almacenada en una variable. --> 

    <?php
    $pesetas = 1000;
    $euros = round($pesetas / 166, 2);
    echo $pesetas, " pesetas son ", $euros, " euros";
   ?>
   </br>


  <-- Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos. -->
   <?php
      echo "<pre>";
      echo "    *<br />";
      echo "   ***<br />";
      echo "  *****<br />";
      echo " *******<br />";
      echo "*********<br />";
      echo "</pre>";
    ?>
    </br>

    <-- gual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el contorno hecho con asteriscos). -->

<?php
    echo "<pre>";
    echo "    *<br />";
    echo "   * *<br />";
    echo "  *   *<br />";
    echo " *     *<br />";
    echo "*********<br />";
    echo "</pre>";
  ?>
  </br>

<-- Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice hacia abajo. -->

<?php
      echo "<pre>";
      echo "*********<br />";
      echo " *     *<br />";
      echo "  *   *<br />";
      echo "   * *<br />";
      echo "    *<br />";
      echo "</pre>";
    ?>
  </body>
</body>
</html>