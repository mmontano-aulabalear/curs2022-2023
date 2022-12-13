<!DOCTYPE html>
<html>

<head>
    <?php include "../include/header.php" ?>
    <!-- Required meta tags -->

    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Llistat de Clientes</title>
</head>

<body>

    <?php
    include "../include/db.php";
    ?>
    <div class="container">
        <?php
        include "../include/navbar.php";
        ?>
        <div class="row">
            <div class="col">
                <h2>Llistat de clients</h2>
                <hr>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>CP</th>
                            <th>email</th>
                        </tr>
                    </thead>

                    <?php
                    /* Recuperam els registres */

                    $sql = "select * from clientes";
                    foreach ($pdo->query($sql) as $row) {
                        $nombre = $row['nombre'];
                        $apellido = $row['apellido'];
                        $telefono = $row['telefono'];
                        $cp = $row['cp'];
                        $email = $row['email'];
                        echo "<tr><td>$nom</td>";
                        echo "<td><a href='edit.php?id=$id'>";
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
                <div><a href="edit.php"><button type="button" class="btn btn-info">Nuevo Cliente</button></a></div>
            </div>
        </div>
    </div>
    <?php include "../include/footer.php" ?>
</body>

</html>