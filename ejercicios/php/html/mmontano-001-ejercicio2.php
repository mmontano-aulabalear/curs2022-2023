<h1>3.</h1>
<?php  $pc=653;$pc-=(5/100*$pc);echo"TOTAL:"
,round($pc+=(21/100*$pc),2),"€"?>
<h1>4.</h1>
<?php $i=$pc*(5/100)*3;echo"3 MESES: ".round($pc+$i,2),"€<br>";
$i=round($pc*(5/100)*12)/1;echo"1 AÑO: ".round($pc+$i,2)."€"?>