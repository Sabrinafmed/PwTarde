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
    echo "<br>".$resul."<br>";
}
soma($numeros);




// Utilizando o For imprima a tabuada do 144
     for($i = 0; $i < count($numeros); $i++){
        echo "<br> 144 *".$i." = ".(144*$i). "<br>";
    }

?>