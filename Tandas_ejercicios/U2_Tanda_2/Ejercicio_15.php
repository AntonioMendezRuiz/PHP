<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 15</title>
</head>
<body>
<h2>Test de infidelidad</h2>
        <form action="Ejercicio_15.php" method="post">
          <ol>
            <li>
              Tu pareja parece estar más inquieta de lo normal sin ningún motivo
              aparente.<br>
              <input type="radio" name="r1" value="3">verdadero<br>
              <input type="radio" name="r1" value="0">falso<br>
            </li>

            <li>
              Ha aumentado sus gastos de vestuario.<br>
              <input type="radio" name="r2" value="3">verdadero<br>
              <input type="radio" name="r2" value="0">falso<br>
            </li>

            <li>
              Ha perdido el interés que mostraba anteriormente por ti.<br>
              <input type="radio" name="r3" value="3">verdadero<br>
              <input type="radio" name="r3" value="0">falso<br>
            </li>

            <li>
              Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se
              arregla el pelo y se asea con más frecuencia (si es mujer).<br>
              <input type="radio" name="r4" value="3">verdadero<br>
              <input type="radio" name="r4" value="0">falso<br>
            </li>

            <li>
              No te deja que mires la agenda de su teléfono móvil.<br>
              <input type="radio" name="r5" value="3">verdadero<br>
              <input type="radio" name="r5" value="0">falso<br>
            </li>

            <li>
              A veces tiene llamadas que dice no querer contestar cuando estás
              tú delante.<br>
              <input type="radio" name="r6" value="3">verdadero<br>
              <input type="radio" name="r6" value="0">falso<br>
            </li>

            <li>
              Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a.<br>
              <input type="radio" name="r7" value="3">verdadero<br>
              <input type="radio" name="r7" value="0">falso<br>
            </li>

            <li>
              Muchos días viene tarde después de trabajar porque dice tener mucho
              más trabajo.<br>
              <input type="radio" name="r8" value="3">verdadero<br>
              <input type="radio" name="r8" value="0">falso<br>
            </li>

            <li>
              Has notado que últimamente se perfuma más.<br>
              <input type="radio" name="r9" value="3">verdadero<br>
              <input type="radio" name="r9" value="0">falso<br>
            </li>

            <li>
              Se confunde y te dice que ha estado en sitios donde no ha ido contigo.<br>
              <input type="radio" name="r10" value="3">verdadero<br>
              <input type="radio" name="r10" value="0">falso<br>
            </li>
          </ol>
          <input type="submit" value="Aceptar">
        </form>
    <?php
    //Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está 
    //siendo infiel. El programa irá haciendo preguntas que el usuario contestará con verdadero 
    //o falso. Puedes utilizar radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. 
    //Las preguntas contestadas con falso no suman puntos. Utiliza el fichero test_infidelidad.txt 
    //para obtener las preguntas y las conclusiones del programa.

    $puntos = $_POST["r1"] + $_POST["r2"] + $_POST["r3"] + $_POST["r4"] + $_POST["r5"] + $_POST["r6"] + $_POST["r7"] + $_POST["r8"] + $_POST["r9"] + $_POST["r10"];

    if($puntos <=10)
    {
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    }
    elseif($puntos > 10 && $puntos <= 21){
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
    }
    else{
        echo "Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
    }
    ?>
</body>
</html>