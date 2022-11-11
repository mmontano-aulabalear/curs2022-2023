<?php $base=isset($_GET["base"]) ? $_GET["base"] : "";
$altura=isset($_GET["altura"]) ? $_GET["altura"] : "";$a=(int)$base*(int)$altura;?>
<!DOCTYPE html>
<html>
 <head>
  <title>Area de rectangulo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
 </head>
 <body>
  <div class="container-fluid">
   <h1>Calcular area de un rectangulo</h1>
   <form action="mmontano_area.php" method="get">
     <label for="base">Introduce la base:</label>
     <input type="number" name="base"><br>
     <label for="altura">Introduce la altura:</label>
     <input type="number" name="altura"><br>
     <input type="submit" value="Calcular">
   </form>
  </div>
  <?php if ($base!="" &  $altura!=""){
    echo "<hr>El area es: <strong>".$a;
  }?>
 </body>
</html>