<?php
function validarEmail($email)
{
    $patron = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if (preg_match($patron, $email)) {
        return true;
    } else {
        return false;
    }
}

$email = "xxx.gmail.com";
echo ("Para $email,"); 
echo(var_dump(validarEmail($email)));

$email = "xxx@gmail.com";
echo ("Para $email,");
echo (var_dump(validarEmail($email)));

?>
