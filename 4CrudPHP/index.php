<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form" id="usersForm">
        <h1>Crear usuario</h1>
        <form action="createUser.php" method="POST" onsubmit="return validaForm(event)">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="name" placeholder="Nombre" id="name" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="email" name="email" placeholder="Email" id="email" class="form-control">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </div>
            </div>
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><a href="updateUser.php?id=<?= $row['id'] ?>" class="users-table--edit"><button class='btn btn-primary btn-sm'>Editar</button></a></th>
                        <th><a href="deleteUser.php?id=<?= $row['id'] ?>" class="users-table--delete"><button class='btn btn-danger btn-sm'>Eliminar</button></a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="functions.js"></script>
</body>

</html>