<?php
function QuebraLinha(){
    echo "<br>";
}

function ImprimirTexto($texto){
    echo $texto;
    QuebraLinha();
}


function Adicao($numero1, $numero2){
    return $numero1 + $numero2;
}


function Subtracao($numero1, $numero2){
    return $numero1 - $numero2;
}

function Multiplicacao($numero1, $numero2){
    return $numero1 * $numero2;
}

function Divisao($numero1, $numero2){
    return $numero1 / $numero2;
}

function Resto($numero1, $numero2){
    return $numero1 % $numero2;
} 

function Media($numero1, $numero2){
    return Adicao($numero1, $numero2) / 2;
}



ImprimirTexto(Adicao(10, 12));
ImprimirTexto(Subtracao(20, 10));
ImprimirTexto(Multiplicacao(10, 5));
ImprimirTexto(Divisao(100, 2));
ImprimirTexto(Resto(3, 2));
ImprimirTexto("Média 8 e 7 = ". Media(8, 7));


/*ImprimirTexto("Minha chamada da função");
ImprimirTexto("Segunda chamada");
ImprimirTexto("Terceira chamada");
ImprimirTexto("Quarta chamada");
ImprimirTexto("ÙLtima chamada");
*/


function LendariaCalculadora($num1, $num2, $operacao){
    $Resultado = 0;
    if($operacao == "+"){
        $Resultado = Adicao($num1, $num2);
    }else if($operacao == "-"){
        $Resultado = Subtracao($num1, $num2);
    }else if($operacao == "*"){
        $Resultado = Multiplicacao($num1, $num2);
    }else if($operacao == "/"){
        $Resultado = Divisao($num1, $num2);
    }else if($operacao == "M"){
        $Resultado = Media($num1, $num2);
    }else if($operacao == "R"){
        $Resultado = Resto($num1, $num2);
    }else{
        $Resultado = "Operação Invalida!";
    }
    ImprimirTexto($Resultado);
}
LendariaCalculadora(10, 20, "M");
LendariaCalculadora(20, 10, "-");
LendariaCalculadora(20, 10, "*");
LendariaCalculadora(20, 10, "/");
LendariaCalculadora(20, 10, "R");
LendariaCalculadora(20, 10, "+");



?>