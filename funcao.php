<?php
function QuebraLinha()
{
    echo "<br>"; 
}
function ImprimirTexto($texto)
{
    echo $texto;
    QuebraLinha();
}

function Adicao($numero1,$numero2)
{
    return $numero1 + $numero2;
}
function Subtracao($numero1,$numero2)
{
    return $numero1 - $numero2;
}
function Multiplicacao($numero1,$numero2)
{
    return $numero1 * $numero2;
}
function Divisao($numero1,$numero2)
{
    return $numero1 / $numero2;
    $resto = $numero1 % $numero2;
}
function Resto($numero1,$numero2)
{
    return $numero1 % $numero2;
    
}
function Media($numero1,$numero2)
{
   return Adicao($numero1,$numero2) /2 ;
}
ImprimirTexto (Adicao(10,12));
ImprimirTexto ("Média 8 e 7 =". Media(8,7));
ImprimirTexto (Subtracao(10,12));
ImprimirTexto (Multiplicacao(10,12));
ImprimirTexto (Divisao(10,12));
ImprimirTexto (Resto(12,10));

function LendariaCalculadora($numero1,$numero2,$operacao)
{
    if ($operacao == "+"){
        $resultado = Adicao($numero1,$numero2);
    }else if($operacao == "-"){
        $resultado = Subtracao($numero1,$numero2);
    }else if($operacao == "*"){
        $resultado = Multiplicacao($numero1,$numero2);
    }else if($operacao == "/"){
        $resultado = Divisao($numero1,$numero2);
    }else if($operacao == "R"){
         $resultado = Resto($numero1,$numero2);
    }else if($operacao == "M"){
        $resultado = Media($numero1,$numero2);
    }else{
        $resultado = "Operação Inválida";
    }
    ImprimirTexto($resultado);
}
LendariaCalculadora(10,20,"+");
LendariaCalculadora(10,20,"fefef");

//ImprimirTexto("Minha chamada da função");
//ImprimirTexto("2º");
//ImprimirTexto("terceira");
//ImprimirTexto("quarta vez que eu chamo");
//ImprimirTexto("Ultima chamada");

?>