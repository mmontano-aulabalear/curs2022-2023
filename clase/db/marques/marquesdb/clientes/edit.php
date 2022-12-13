<!DOCTYPE html>
<html>

    <head>
        <title>Mantenimient de clientes</title>
        <?php include "../include/header.php" ?>
        <meta content="noindex, nofollow" name="robots">
        <!--== Include CSS File Here ==-->
    </head>

    <body>

        <?php
include "../include/db.php";

$nom="";
$uuid="";
if (isset($_GET['id'])){
  $id = $_GET['id'];
  $statement = $pdo->prepare("SELECT * FROM clientes where id=?");
  $statement->bindParam(1, $id);
  if ($statement->execute()) {

  foreach ($statement->fetchAll() as $row) {
     $nom = $row['nom'];
     $uuid = $row['uuid'];
     $img = $row['img'];
  }
}
}
?>
        <div class="container">

            <div>
                <p><a href="index.php">Llista de Marques</a></p>
            </div>
            <div class="first">
                <h2> Marques</h2>
                <form action="edit.php" id="#form" method="post" name="#form">
                    <label>Nombre del cliente:</label>
                    <input id="name" name="nombre" placeholder='Nom del Cliente' type='text' value="<?php echo $nombre ?> ">
                    <input type="hidden" id="uuidId" name="uuid" value="<?php echo $uuid ?>">
                    <input id='btn' name="submit" type='submit' value='Guardar'>

                    <?php
if(isset($_POST['submit'])){
    // Fetching variables of the form which travels in URL
      $nom = $_POST['nom'];
      $uuid = $_POST['uuid'];
    
      if (empty($uuid)) {
        $uuid= uniqid();
        $stm = $pdo->prepare("INSERT INTO marques(nom, uuid) VALUES (?, ?)");
      } else {
        $stm = $pdo->prepare("UPDATE marques SET nom=? WHERE uuid=?");
      }
      /* no s'ha de fer mai això */
      //  To redirect form on a particular page
      $stm->bindParam(1, $nom);
      $stm->bindParam(2, $uuid);
      if($stm->execute()) {
            header("Location: thanks.php?id=".$uuid);
      }
    }
?>
                </form>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </body>

</html>