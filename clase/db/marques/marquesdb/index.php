<!DOCTYPE html>
<html>

<head>
    <?php include "include/header.php" ?>
    <!-- Required meta tags -->

    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Llistat de Marques</title>
</head>

<body>

    <?php
    include "include/db.php";
    ?>
    <div class="container">
        <?php
        include "include/navbar.php";
        ?>
        <div class="row">
            <div class="col">
                <h2>Llistat de marques</h2>
                <hr>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nom</th>
                            <th></th>
                        </tr>
                    </thead>

                    <?php
                    /* Recuperam els registres */

                    $sql = "select * from marques";
                    foreach ($pdo->query($sql) as $row) {
                        $nom = $row['nom'];
                        $uuid = $row['uuid'];
                        echo "<tr><td>$nom</td>";
                        echo "<td><a href='edit.php?id=$uuid'>";
                    ?>

                        <button type="button" class="btn btn-primary">Editar</button>
                        <?php
                        echo "</a>";
                        echo "<a href='delete.php?id=$uuid'>";
                        ?>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    <?php
                        echo "</a></td>";
                        echo " </tr>";
                    }
                    ?>
                </table>
                <div><a href="edit.php"><button type="button" class="btn btn-info">Nova marca</button></a></div>
            </div>
        </div>
    </div>
    <?php include "include/footer.php" ?>
</body>

</html>