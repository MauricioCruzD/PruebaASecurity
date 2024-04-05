<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$email = $_POST['email'];

$sql="UPDATE usuarios SET nombre='$name', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>