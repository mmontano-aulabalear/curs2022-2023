<?php
 $n=intval(isset($_GET['n']) ? $_GET["n"] : "");
 $l=isset($_GET['l']) ? $_GET["l"] : "";?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <!---->
    <form action="form.php" method="get">
      <label>Introduzca un numero: </label>
      <input type="number" name="n" required="required"><br>
      <label>Introduzca una letra: </label>
      <input type="text" name="l" required="required"><br>
      <input type="submit" value="Enviar">
      <hr>
      <?php $j=1;
      if($n>0 && $n<1000 && strlen($l) == 1){
        for($i=0;$i!=$n;$i++){
          $j*=3;
          echo "<p style='color: #fc8$j'>".$l."</p>";
        }}else{
        echo "ERROR, el numero tiene que ser entre 1 a 999 o ha de haber una letra";
      }?>
    </form>
  </body>
</html>