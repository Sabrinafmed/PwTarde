<!-- Crie uma variável e atribua um array com os seguintes itens : 20, 15, 30, 17, 8  -->

<?php
$numeros = array();

$numeros = [20, 15, 30, 17, 8];

echo "<ul>";
for($i = 0; $i < count($numeros); $i++){
    echo "<br> $numeros[$i]";
}
echo "<ul>";

echo "<pre>";
print_r($numeros);
echo "</pre>";


// <!-- Faça uma função que imprima o array do primeiro exercício. -->
function imprimir($numeros){

echo "<pre>";
print_r($numeros);
echo "</pre>";
}


// Crie uma função que some todos os itens do array do exercício 1
function soma($numeros){
    $resul = 0;
    
    for($i = 0; $i < count($numeros); $i++){
        $resul += $numeros[$i];
    }
    return  $resul;
}
echo soma($numeros);




// Utilizando o For imprima a tabuada do 144
     for($i = 0; $i < count($numeros); $i++){
        echo "<br> 144 *".$i." = ".(144*$i). "<br>";
    }
  




// Exiba na tela todos os itens pares de 251 de 544.
for($i = 251; $i <= 544; $i++){
    if($i % 2 == 0){
        echo "<br>".$i;
    }
}




// Adicione 3 novos itens no array do exercício 1 usando a função rand(-10,10).
array_push($numeros, rand(-10, 10));
array_push($numeros, rand(-10, 10));
array_push($numeros, rand(-10, 10));
imprimir($numeros);



// Faça uma função que receba a porcentagem e um numero e calcule a porcentagem desse numero.
function Porcentagem($porcentagem, $numeros){
    return ($numeros/100)*$porcentagem;
}
echo "<br>".Porcentagem(24, 120)."<br>";



// Exiba na tela a quantidade de pares, impares, negativos e positivos do array do exercício 1
$count_pares = 0;
$count_impares = 0;
$count_positivos = 0;
$count_negativos = 0;

for($i = 0; $i < count($numeros); $i++){
if($numeros[$i] >= 0){
    $count_positivos++;
}else{
    $count_negativos++;
}

if($numeros[$i] %2 == 0){
    $count_pares++;
}else{
    $count_impares++;
}

}
echo"<br> Pares: ".$count_pares."Impares: ".$count_impares;
echo"<br> Positivos: ".$count_positivos."Negativos: ".$count_negativos;


// Calcule a média do array do exercício 1
$soma = soma($numeros);
echo "<br> A média do meu array é: ".($soma/count($numeros));


?>
