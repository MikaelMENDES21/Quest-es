<?php
echo"<h2>10.Questão</h2>";

$soma;
$m = 159;
$l = 13;
$d = 87;

if($m > $d && $l > $d){
$soma = $m + $l;
echo"<i>A soma dos números maiores são: $soma</i>";
}
else if($l > $m && $d > $m){
$soma = $l + $d;
echo"<i>A soma dos números maiores são: $soma</i>";
}
else{
$soma = $m + $d;
echo"<i>A soma dos números maiores são: $soma</i>";
}
?>