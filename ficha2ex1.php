<?php

echo "Exercicio 1 - Grupo 1 <br>";
function retangulo($altura)
{
    $i=1;
    
    while($i <= $altura)
    {
        echo "*******<br>";
        $i++;
    }
}
retangulo (7);

echo "Exercicio 2 - grupo 1<br>";
function trocar($A = 5, $B = 7)
{

    echo "Antes da troca a = $A e b = $B <br>";
    $C = $A;
    $A = $B;
    $B = $C;
    echo "Depois da troca a = $A e b = $B <br><br>";
}
trocar(5, 7);

echo 'Exercicios 1 - Grupo 2<br>';
function inverter($string)
{
    $tamanho = strlen($string);
    for ($i = $tamanho - 1; $i >= 0; $i--)
        {
            echo $string[$i];
        }

}
inverter ("Irchad Meneses");
echo "<br>";
echo strrev("Jason");

echo " <br> <br> Exercicio 1 - Grupo 3 <br>";
$vetor = array(1, -2, 3, 4, 5, 6, 7);
echo ("O menor elemento é ".min($vetor));
echo "<br> A media é ";
echo (array_sum($vetor)/count($vetor));
$somap=0; $soman=0;
foreach ($vetor as $valor)
    {
        if ($valor >0)
            $somap += $valor;
        if ($valor < 0)
            $soman += $valor;       // $soman=$soman+$valor;

    }

echo "<br> A soma dos positivos é $somap e a soma dos negativos é $soman <br>";

echo "<br>Exercicio 2 - Grupo 3 <br>";
$chave = array();
for ($i = 0; $i <=5; $i++)
    {
        $num = rand(1,50);
        $aux=in_array($num, $chave);
        if ($aux == false)
            {
            $chave[$i] =$num;
            echo "$num<br>";
            }
            else
            {
                $i--;
            }
    }

echo "<br> <br> Exercicio 3 - Grupo 3<br>";
$cavalos=array("cavalo1"=>88, "cavalo2"=>18, "cavalo3"=>120, "cavalo4"=>50,"cavalo5"=>75);
asort($cavalos);
foreach ($cavalos as $c => $v )
{
        echo "$c ganhou em primeiro lugar com velocidade $v <br>";
        $a++;
        if ($a == 4)
            {
                echo "$c ficou em segundo lugar com velocidade $v <br>";
                break;
            }

}



?>