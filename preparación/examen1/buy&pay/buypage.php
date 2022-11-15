<!DOCTYPE html>
<html>
  <head>
    <title>Buyment Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="buypage.css">
  </head>
  <body>
    <h1>Welcome to the Grocery Market</h1>
    <h3>Select your products:</h3>
    <form action="buypage.php" method="get">
      <table>
        <tr>
          <td><label for "1">Banana</label><br><input type="checkbox"></td>
          <td><label for "1">Apple</label><br><input type="checkbox"></td>
          <td><label for "1">Milk</label><br><input type="checkbox"></td>
          <td><label for "1">Lettuce</label><br><input type="checkbox"></td>
        </tr>
        <tr>
          <td colspan="4" align="center"><input type="submit" value="Payment"></td>
        </tr>
      </table>
    </form>
  </body>
</html>