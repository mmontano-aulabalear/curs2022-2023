<!DOCTYPE html>
<html>
    <!-- capçalera-->
    <head>
        <meta charset="UTF-8">
        <title>Vyzum</title>
    </head>
    <!-- cos-->
    <body>
    <?php $telefono = isset($_GET["telefono"]) ? $_GET["telefono"] : "";
    $importe = isset($_GET["telefono"]) ? $_GET["telefono"] : ""; 
    if($comprobar==true){
        header("Location: ". "gracias.php?. $telefono&$importe=$importe");
    }
    ?>
    </body>
</html>