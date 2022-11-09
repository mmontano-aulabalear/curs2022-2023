<!DOCTYPE html>
<html>
    <body>
    <?php $alumno = $_GET['alumno'];
        $edad = $_GET['edad'];
        if ($edad > 90)
        {
            echo "<h1>ENHORABUENA, 
            ¡ERES VIEJO!</h1>";
        }
        else
        {
            echo "<h1>ERES JOVEN O TAL VEZ,
            ¿NO?</h1>";
        }
    ?>  
        <ul>
    <?php        
        for($i=0; $i<10; $i++){
            echo "<li>";
            echo $i;
            echo "</li>";
        }
    ?>
        </ul>
    <?php
        echo "Tabla del 7 \n";
        for($i=1; $i<=10; ++$i){
            echo "$i * 7= $".$i*7,"<br>";
        }
    ?>
    </body>
</html>