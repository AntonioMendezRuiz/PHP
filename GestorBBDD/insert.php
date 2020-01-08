<?php
    header('Access-Control-Allow-Origin: *');
    $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");
    $tabla = $_POST["columnas"];
    $sql = "";

    if($tabla == "familia"){
        $nombre = $_POST["nombre"];
        $cod = $_POST["cod"];
        echo "<form action='insert.php' method='POST'>
        Código: <input type='text' name ='cod'><br/> Nombre: <input type='text' name ='nombre'><br/>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='familia'>Familia</option></select>
        </form>"; 
        $sql = "INSERT INTO $tabla VALUES ('$cod', '$nombre')";
        if($cod != "" && $nombre != ""){
            $dwes->exec($sql);
            echo "Se ha insertado correctamente.";
        }else{
            echo "Se ha producido un error.";
        }
    }
    if($tabla == "producto"){
        $nombre_corto = $_POST["nombre_corto"];
        $descripcion = $_POST["descripcion"];
        $PVP = floatval($_POST["PVP"]);
        $familia = $_POST["familia"];
        $cod = $_POST["cod"];
        echo "<form action='insert.php' method='POST'>
        Código: <input type='text' name ='cod'><br/> Nombre: <input type='text' name ='nombre_corto'><br/> Descripción: <input type='text' name ='descripcion'><br/> PVP: <input type='number' name ='PVP'><br/> Familia: <input type='text' name ='familia'><br/>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='producto'>producto</option></select>
        </form>";
        $sql = "INSERT INTO $tabla VALUES ('$cod', '$nombre_corto', '$descripcion', $PVP, '$familia')";
        if($cod != "" && $nombre_corto != "" && $descripcion != "" && $familia != ""){
            $dwes->exec($sql);
            echo "Se ha insertado correctamente.";
        }
    }
    if($tabla == "tienda"){
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        echo "<form action='insert.php' method='POST'>
        Nombre: <input type='text' name ='nombre'><br/> Teléfono: <input type='text' name ='telefono'>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='tienda'>tienda</option></select>
        </form>";
        $sql = "INSERT INTO $tabla (nombre, tlf) VALUES ('$nombre', '$telefono')";
        if($nombre != "" && $telefono != ""){
            $dwes->exec($sql);
            echo "Se ha insertado correctamente.";
        }
    }
    if($tabla == "stock"){
        $tienda = $_POST["tienda"];
        $producto = $_POST["producto"];
        $unidades = $_POST["unidades"];
        echo "<form action='insert.php' method='POST'>
        Producto: <input type='text' name ='producto'><br/> Tienda: <input type='number' name ='tienda'><br/> Unidades: <input type='number' name ='unidades'>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='stock'>Stock</option></select>
        </form>";
        $sql = "INSERT INTO $tabla VALUES ('$producto', $tienda, $unidades)";
        if($producto != "" && $tienda != "" && $unidades != ""){
            $dwes->exec($sql);
            echo "Se ha insertado correctamente.";
        }
    }
        
    echo "<a href='index.html'>Volver</a>";
    unset($dwes);
?>