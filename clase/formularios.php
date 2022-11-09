Sexo: <?php isset($_GET["sexo"]) ? $selected=$_GET["sexo"] : "";?>
<html>
<body>
<form action="formularios.php" method="get">
    Nom: <input type="text" name="nom"><br>
    Email: <input type="text" name="email"><br>
    Fecha: <input type="date" name="fecha"><br>
    Seleccione su genero
    <select name="sexo">
        <option value="valor1" selected>Masculino</option>
        <option value="valor2">Feminino</option>
        <option value="valor">¿Que eres?</option>
    </select><br>
    <input type="submit" value="Enviar">
</form>
Hola <?php isset($_GET["nom"]) ? print $_GET["nom"] : ""; ?><br>
El teu e-mmail és: <?php isset($_GET["email"]) ? 
print $_GET["email"] : ""; 
?><br>
Fecha: <?php isset($_GET["fecha"]) ? print $_GET["fecha"] : "";?><br>
</body>
</html>