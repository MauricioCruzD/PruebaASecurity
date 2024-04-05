<?php

function potenciaConSumas($m, $n)
{
    if ($m==0){
        $res = 0;
    }else{
        $res = 1;
        $negN=false;
        $negM=false;

        if ($n < 0) {
            $negN =true;
            $n = abs($n);
        }

        if ($m<0){
            $negM = true;
            $m = abs($m);
        }

        for ($i = 1; $i <= $n; $i++) {
            $prod = 0;
            for ($j = 1; $j <= $m; $j++) {
                $prod += $res;
            }
            $res=$prod;
        }
        if (($negM)&&($n%2!=0)){
                $res= -$res;
        }

        if($negN){
            $res = 1/$res;
        }
    } 
    return $res;

}

echo "Ingrese la Base: ";
$base = trim(fgets(STDIN));

echo "Ingrese el Exponente: ";
$exponente = trim(fgets(STDIN));

if  (is_numeric($base) && is_numeric($exponente)){
    $resultado = potenciaConSumas($base, $exponente);
    echo "El resultado de $base elevado a $exponente es: $resultado";
}else {
    echo ("Por favor, ingrese valores numéricos en la base y exponente.");
}



?>