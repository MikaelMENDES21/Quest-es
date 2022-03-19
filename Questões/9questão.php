<?php
echo"<h2>9.Questão</h2>";

$N1 = 13;    
$N2 = 17;    
$N3 = 99;    

if($N1 > $N2 && $N1 > $N3){
echo"<i>$N1 é o maior número irformado!</i>";
}
else if($N2 > $N1 && $N2 > $N3){
echo"<i>$N2 é o maior número informado!</i>";
}
else{
echo"<i>$N3 é o maior número informado!</i>";
}
?>