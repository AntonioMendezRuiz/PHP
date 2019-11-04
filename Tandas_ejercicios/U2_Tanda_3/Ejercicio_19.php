<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 19</title>
</head>
<body>
    <form action="Ejercicio_19.php" method="post">
            Altura: <input type="number" name="altura" min="1" max="10" autofocus=""><br>
            Figura base:
            <select name="figura">
                <option value="bolita">Bolita</option>
                <option value="ladrillo">Ladrillo</option>
                <option value="pinguino">Pingüino</option>
                <option value="sol">Sol</option>
            </select>
            <input type="submit" value="Aceptar">
          </form>
    <pre>
    <?php
    //Realiza un programa que pinte una pirámide por pantalla. 
    //La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, 
    //ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario.
    $altura = $_POST['altura'];
    $figura = $_POST['figura'];
    $alt= 1;
    $espacios = $altura - 1;
    switch ($figura) {
        case 'bolita':
            $glifo = "•";
            break;
        case 'ladrillo':
            $glifo = "#";
            break;
        case 'pinguino':
            $glifo = "Å";
            break;
        case 'sol':
            $glifo = "*";
            break;
    }
    while ($alt <= $altura) {

        for ($i = 1; $i <= $espacios; $i++) {
          echo "&nbsp;";
        }

        for ($i = 1; $i < $alt * 2; $i++) {
          echo $glifo;
        }
        echo "<br>";

        $alt++;
        $espacios--;
      }
    ?>
    </pre>
</body>
</html>