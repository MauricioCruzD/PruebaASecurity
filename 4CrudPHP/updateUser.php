<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Editar usuarios</title>

</head>

<body>
    <div class="users-form">
        <h2>Editar usuario</h2>
        <form action="editUser.php" method="POST" onsubmit="return validaForm(event)">
            <div class="row">
                <div class="col-md-1">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="text" name="name" placeholder="Nombre" value="<?= $row['nombre'] ?>" id="name">
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="text" name="email" placeholder="Email" value="<?= $row['email'] ?>" id="email">
                </div>
                <div class="col-md-2">
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <script src="functions.js"></script>
</body>

</html>