<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DisFruta</title>
</head>
<body>
    <?php
    function contarValoresArray($array)
    {
	    $contar=array();
	    foreach($array as $value)
	    {
		    if(isset($contar[$value]))
		    {
			    $contar[$value]+=1;
		    }else{
			    $contar[$value]=1;
		    }
	    }
	    return $contar;
    }
        $numF = rand(7,20);
        $fruta = array("&#127815", "&#127816", "&#127817", "&#127818", "&#127819", "&#127820", "&#127821", "&#127822", "&#127823", "&#127824", "&#127825", "&#127826", "&#127827");
        $contador = array();
        echo "<p style='font-size: 7rem'>";
        for ($i = 0; $i < $numF -1; $i++){
            $elige = rand(0,count($fruta));
            array_push($contador, $fruta[$elige]);
            echo $contador[$i];
        }
        echo "</p>";
        echo "<h2>Resultados</h2>";
        $array = contarValoresArray($contador);
        foreach($array as $key => $value){
            
            echo "<p>La fruta <span style='font-size: 2rem'>". $key ."</span> está <strong>".$value."</strong>";
            if($value ==1)
            {echo ' vez';}
            else{ echo ' veces';};
            echo " en la lista.</p>";
        }
    ?>
</body>
</html>