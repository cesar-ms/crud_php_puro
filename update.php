<?php
include('connection.php');

$con = connection_db();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuarios</title>
    <link rel="stylesheet" href="sytle.css">
</head>

<body>
    <div class="container">
        <h1>Editar usuario</h1>
        <div id="formulario">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" placeholder="id" value="<?= $row['id'] ?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name'] ?>">
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname'] ?>">
                <input type="text" name="username" placeholder="Username" value="<?= $row['username'] ?>">
                <input type="password" name="password" placeholder="Password" value="<?= $row['password'] ?>">
                <input type="email" name="email" placeholder="Email" value="<?= $row['email'] ?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</body>

</html>