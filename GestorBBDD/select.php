<?php
    header('Access-Control-Allow-Origin: *');
    $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");
    $tabla = $_POST["columnas"];
    $sql = "SELECT * FROM $tabla";
    $resultado = $dwes->query($sql);
    if($tabla == "familia"){
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            echo "Código: ".$registro->cod." <br/>
            Nombre: ".$registro->nombre."<br/>";
            echo "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>";
        }
    }elseif($tabla == "stock"){
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            echo "Producto: ".$registro->producto." <br/> Tienda: ".$registro->tienda." <br/> Unidades: ". $registro->unidades."<br/>";
            echo "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>";
        }
    }elseif($tabla == "producto"){
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            echo "Código: ".$registro->cod." <br/> Nombre: ".$registro->nombre_corto." <br/> Precio: ". $registro->PVP."€<br/> Familia: ". $registro->familia."<br/> Descripción: ". $registro->descripcion."<br/>";
            echo "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>";
        }
    }else{
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            echo "Código: ".$registro->cod." <br/>
            Nombre: ".$registro->nombre."<br/>
            Teléfono: ".$registro->tlf."<br/>";
            echo "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>";
        
        }
    }

    echo "<a href='index.html'>Volver</a>";
    unset($dwes);
 ?>