<?php
echo"<h2>11.Questão</h2>";
$Nota1 = 4;
$Nota2 = 4;
$Soma = $Nota1 + $Nota2;
$Media = $Soma / 2;

echo"<i>A média do(a) aluno(a) é $Media , </i>";

if ($Media > 6 && $Media < 10){
 echo"<i>o (a) aluno(a) está aprovado(a)</i>";
 
}

else{
  echo"<i>o(a) aluno(a) está reprovado(a)</i>";
}
?>