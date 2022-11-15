<!DOCTYPE html>
<html>
  <head>
    <title>Buy Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="buypage.css">
  </head>
  <body>
    <div class="center">
      <h1>Welcome to the Grocery Market</h1>
      <h3>Select your products:</h3>
      <form action="paypage.php" method="get">
        <table>
          <tr>
            <td><label>Banana</label><br><input type="checkbox"></td>
            <td><label for "apple">Apple</label><br><input type="checkbox"></td>
            <td><label for "milk">Milk</label><br><input type="checkbox" value=""></td>
            <td><label for "lettuce">Lettuce</label><br><input type="checkbox" value="lettuce"></td>
          </tr>
          <tr>
            <td colspan="4" align="center"><a href="paypage.php"></a><input type="submit" value="Payment"></td>
          </tr>
        </table>
    </form>
    </div>
    <footer><P> NAH DE LOCOS</footer>
  </body>
</html>