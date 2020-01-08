<?php
    header('Access-Control-Allow-Origin: *');
    $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123");
    $tabla = $_POST["columnas"];
    $sql = "";

    if($tabla == "familia"){
        $cod = $_POST["cod"];
        echo "<form action='delete.php' method='POST'>
        Código: <input type='text' name ='cod'><br/>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='familia'>Familia</option></select>
        </form>"; 
        $sql = "DELETE FROM $tabla WHERE cod = '$cod'";
        if($cod != ""){
            $dwes->exec($sql);
            echo "Se ha borrado correctamente. <br/>";
        }
    }
    if($tabla == "producto"){
        $cod = $_POST["cod"];
        echo "<form action='delete.php' method='POST'>
        Código: <input type='text' name ='cod'><br/>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='producto'>producto</option></select>
        </form>";
        $sql = "DELETE FROM $tabla WHERE cod = '$cod'";
        if($cod != ""){
            $dwes->exec($sql);
            echo "Se ha borrado correctamente. <br/>";
        }
    }
    if($tabla == "tienda"){
        $nombre = $_POST["nombre"];
        echo "<form action='delete.php' method='POST'>
        Nombre: <input type='text' name ='nombre'><br/>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='tienda'>tienda</option></select>
        </form>";
        $sql = "DELETE FROM $tabla WHERE nombre = '$nombre'";
        if($nombre != ""){
            $dwes->exec($sql);
            echo "Se ha borrado correctamente. <br/>";
        }
    }
    if($tabla == "stock"){
        $producto = $_POST["producto"];
        echo "<form action='delete.php' method='POST'>
        Producto: <input type='text' name ='producto'><br/>
        <button type='submit'>Enviar</button> 
        <select name='columnas' hidden>
        <option value='stock'>Stock</option></select>
        </form>";
        $sql = "DELETE FROM $tabla WHERE producto = '$producto'";
        if($producto != "" ){
            $dwes->exec($sql);
            echo "Se ha borrado correctamente. <br/>";
        }
    }
        
    echo "<a href='index.html'>Volver</a>";
    unset($dwes);
?>