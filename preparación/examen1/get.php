<?php $nombre=isset($_GET['nombre']) ? $_GET['nombre'] : "" ?>
<!DOCTYPE html>
<html>
<head>
<title>GET</title>
</head>
<body>
  <form action="get.php" method="get">
    <label for="nombre">Escribe un nombre:</label>
    <input type="text" name="nombre"><br>
    <input type="submit" value="Medir">
  </form>
  <hr>
  <?php if ($nombre != ""){
    echo "La longitud de su palabra es: <strong>".strlen($nombre);
  } else
  echo "Por favor, introduce un nombre";?>
</body>
</html>