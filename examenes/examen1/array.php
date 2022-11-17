<?php $a = array("poma", "pera", "plàtan", "meló", "coco", "kiwi", "cirera", "pruna");
foreach($a as $frutas){
  if (str_starts_with($frutas, "p")){
    echo $frutas."<br>";
  }
}?>