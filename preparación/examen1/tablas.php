<?php $a=430.35;$b=30;$c=350?>
<!DOCTYPE html>
<html>
<head>
  <title>Factura</title>
</head>
<body>
  <table border=2>
    <tr>
      <td>id</td>
      <td>nombre</td>
      <td>qtt</td>
      <td>preu</td>
    </tr>
    <tr>
      <td>3</td>
      <td>ordinador de sobretaula</td>
      <td>1</td>
      <td><?php echo $a."€"?></td>
    </tr>
    <tr>
      <td>1</td>
      <td>ratolí</td>
      <td>1</td>
      <td><?php echo $b."€"?></td>
    </tr>
    <tr>
      <td>123</td>
      <td>impressora làser</td>
      <td>1</td>
      <td><?php echo $c."€"?></td>
    </tr>
    <tr>
      <td colspan="3" align="right">total:</td>
      <td><?php echo $a+$b+$c."€"?></td>
    </tr>
  </table>
</body>
</html>