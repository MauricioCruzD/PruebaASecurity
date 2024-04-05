<?php
function connection(){
    $host = "localhost";
    $user = "usuariocrud";
    $pass = "usuariocrud";

    $bd = "crudphp";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}

