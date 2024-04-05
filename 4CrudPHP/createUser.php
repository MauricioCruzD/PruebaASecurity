<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios VALUES('$id','$name','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>