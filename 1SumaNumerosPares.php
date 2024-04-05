<?php
function sumaNumPares($number){
    $sum = 0;
    for ($i=1;$i<=$number;$i++){
        if ($i%2==0){
            $sum += $i;
        }    
    }
    return $sum;
}

echo "Ingrese un numero: ";
$num = trim(fgets(STDIN));
if  (is_numeric($num)){
    $num = intval($num);
    if ($num >= 1) {
        echo ("La sumatoria de los numeros pares desde 1 hasta $num es: " . sumaNumPares($num));
    } else{
        echo ("Por favor, ingrese un valor mayor a cero.");
    }
}else{
    echo ("Por favor, ingrese un valor numérico mayor a cero.");
}


?>