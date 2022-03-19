<?php
echo"<h2>6.Questão</h2>";

$qm = 7; 

if ($qm < 12 && $qm > 1){
    $vm = 1.30;               
    $vt = $qm * $vm;         
   echo "<i>O valor a ser pago pelas maçãs é R$ $vt  reais</i>";
}else if ($qm > 12){
      $vm = 1.00;
      $vl = $qm *$vm;
      echo "<i>O valor a ser pago pelas maçãs é R$ $vt reais</i>";
}else {
      echo"<i>Não foi comprado nenhuma maçã</i>";
}
?>