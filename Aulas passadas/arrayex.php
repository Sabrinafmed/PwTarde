<?php
/*
$num[0] = rand(-10,10);
$num[1] = rand(-10,10);
$num[2] = rand(-10,10);
$num[3] = rand(-10,10);
$num[4] = rand(-10,10);
$num[5] = rand(-10,10);
$num[6] = rand(-10,10);
$num[7] = rand(-10,10);
$num[8] = rand(-10,10);
$num[9] = rand(-10,10);

echo"<pre>";
print_r($num);
echo"</pre>";
*/
$numeros = array( rand(-10,10),
                  rand(-10,10),
                  rand(-10,10),             
                  rand(-10,10),
                  rand(-10,10),
                  rand(-10,10),
                  rand(-10,10),
                  rand(-10,10),
                  rand(-10,10),
                  rand(-10,10), );

//echo"<pre>";
//print_r($numeros);
//echo"</pre>";

$negativos = 0;
$positivos = 0;
for ($i = 0; $i < 10; $i++)
{
    if($numeros[$i] < 0)
    { 
        $negativos++;
    } else {
         $positivos++;
        }
}
echo "Negativos: $negativos Positivos: $positivos <pre>";
print_r($numeros);
echo "</prev>";
?>