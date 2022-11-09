<?php $edad=$_GET['edad'];
if ($edad >=0 && $edad <=3){
    echo "RANDO DE EDAD = INFANTE";
}
elseif ($edad >=4 && $edad <=17){
    echo "RANDO DE EDAD = NIÑO";
}
elseif ($edad >=18 && $edad <=64){
    echo "RANDO DE EDAD = ADULTO";
}
elseif ($edad >64){
    echo "RANDO DE EDAD = SENIOR";
}
else{
    echo "ERROR";
}
?>