
<!DOCTYPE html>
<html>
    <!-- capçalera-->
    <head>
        <meta charset="UTF-8">
        <title>Títol de la plana</title>
    </head>
    <!-- cos-->
    <body>
    <?php //Primera comprobación de datos
    $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
    $apellido = isset($_GET["apellido"]) ? $_GET["apellido"] : "";
    $edad = isset($_GET["edad"]) ? $_GET["edad"] : "";
    $coches = isset($_GET["coches"]) ? $_GET["coches"] : "";

    if (($nombre !="") and ($apellido !="") and ($edad !="") and ($coches !="")) {
        $comprobación_datos = true;
        } else {
            $comprobación_datos = false;
        }
    ?>
        <form action="formularios2.php" method="get">
        Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>" required><br>
        Apellidos: <input type="text" name="apellido" required value="<?php echo $apellido; ?>"><br>
        Edad: <input type="number" name="edad" required value="<?php echo $edad; ?>">
        <br>
        <!--Selector-->
        <label for="coches">Escoge un coche:</label>
        <select name="coches" id="coche" form="cocheform">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
        <br>
        <!--Boton de radio-->
        Selecciona tu lenguaje favorito<br>
        <input type="radio" id="html" name="fav_language" 
        value="HTML">
        <label for="html">HTML</label>
        <input type="radio" id="css" name="fav_language" 
        value="CSS">
        <label for="css">CSS</label>
        <input type="radio" id="javascript" name="fav_language" 
        value="JavaScript">
        <label for="javascript">JavaScript</label>
        <br>
        <input type="submit" value="Respuesta a los datos">
        </form>
        <?php //Comprobación de datos por segunda vez
        echo "<hr>";
        if($comprobación_datos==true){
            echo "Bienvenido $nombre $apellido <br>";
            echo "Tienes $edad años<br>";
            echo "Tu coche fav. es $cars";
        } else {
            echo "Introduce tu nombre y apellidos<br>";
            echo "Introduce tu edad<br>";
            echo "Selecciona tu coche favorito<br>";
        }
        ?>
    </body>
</html>