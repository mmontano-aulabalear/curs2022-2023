<!DOCTYPE html>
<html>
    
    <!-- capçalera-->
    <head>
        <meta charset="UTF-8">
        <title>Lista de la compra</title>
    </head>
    <!-- cos-->
    <body>
        <?php $alumno = $_GET['alumno'];
        $edad = $_GET['edad'];
        echo "Alumno: ".$alumno." y Edad: ".$edad;
        echo "<h1> LISTA DE LA COMPRA</h1>";
        ?>
        <ol>
            <li>Huevos</li>
            <li>Leche</li>
        </ol>
        <a href="www.google.es" target="_blank">Para escapar...</a>
        <img src="./img/person.jpeg" alt="Una persona que no existe" width="200">
    </body>
</html>