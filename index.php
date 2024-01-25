<?php
include('connection.php');

$con = connection_db();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="sytle.css">
</head>

<body>
    <div class="container">
        <h1>Crear nuevo usuario</h1>
        <div id="formulario">
            <form action="insert_user.php" method="POST">
                <input type="text" name="name" placeholder="Nombre">
                <input type="text" name="lastname" placeholder="Apellidos">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="email" name="email" placeholder="Email">
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div id="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_array($query)) : ?>

                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['lastname'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td>
                                <a href="update.php?id=<?= $row['id'] ?>" class="btn_style">Editar</a>
                                <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn_style">Eliminar</a>
                            </td>
                        </tr>

                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>