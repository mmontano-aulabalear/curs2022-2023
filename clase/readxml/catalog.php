<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TABLA EPICA</title>
  </head>
  <body>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">COMMON</th>
          <th scope="col">BOTANICAL</th>
          <th scope="col">ZONE</th>
          <th scope="col">LIGHT</th>
          <th scope="col">AVAILABILITY</th>
          </tr>
        </thead>
      <tbody>
<?php $xml = simplexml_load_file("plant_catalog.xml");
$negopo=0;
foreach($xml->PLANT as $plant){
  $negopo++;
  echo "<tr>";echo "<th scope=\"row\">$negopo</th>";
  echo "<td>".$plant->COMMON."</td>";
  echo "<td>".$plant->BOTANICAL."</td>";
  echo "<td>".$plant->ZONE."</td>";
  echo "<td>".$plant->LIGHT."</td>";
  echo "<td>".$plant->AVAILABILITY."</td></tr>";
} ?>
        </tbody>
      </tr>
    </table>
  </body>
</html>