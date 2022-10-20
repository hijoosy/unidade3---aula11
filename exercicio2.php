<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio2</title>
</head>
<body><!--
PEÇA PARA O ÚSUARIO DIGITAR O NOME E A NOTA FINAL DE 7 ALUNOS.
EXIBA A MÉDIA DA TURMA E QUAIS ALUNOS POSSUEM NOTAS ACIMA DA MÉDIA E 
QUAIS ESTÃO ABAIXO DA MÉDIA.-->

    <?php
  

$nome = array ("luana", "rita", "julia", "marcelo", "pedro", "gael");
$nota = array (10,9,8,7,6,5);

$media = 0;
$soma = 0;
$contador = 0;

foreach ($nota as $n){
    //$soma = $soma +$n;
    $contador++;
    $soma += $n;
}
echo "A soma das notas é: " .$soma;
echo "<br/> A quantidade de alunos é: " .$contador;
//echo "<br/> A média da turma é: " .($soma/$contador);
$media = $soma/$contador;
echo "<br/> A média da turma é: " .$media;

foreach($nota as $chave => $nota) {
    if($nota >= $media){ 
        echo "<br/><br/> O aluno " .$nome[$chave]." teve nota acima da média da turma." ;
    }else {
        echo "<br/><br/> O aluno " .$nome[$chave]. " teve nota abaixo da média da turma." ;
    }
}





?>
</body>
</html>












