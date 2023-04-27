<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
    <div>
        <form action="" method="Post">
            <h1> FORMULARIO </h1>
            <input type="text" name="Nombre" id="" placeholder="Nombre Usuario"> <br> <br>
            <input type="text" name="Telefono" id="" placeholder="Teléfono"> <br> <br>
            <input type="text" name="Email" id="" placeholder="Email"> <br> <br>
            <input type="text" name="Direccion" id="" placeholder="Dirección"> <br> <br>
            <button type="submit">Enviar</button> <br> 
        </form>
</body>
</html>

<?php
$nombre = $_POST['Nombre'];
$telefono = $_POST['Telefono'];
$email = $_POST['Email'];
$direccion = $_POST['Direccion'];

echo "<h2>Datos Usuario</h2>
<table>
    <tr>
        <td>Nombre</td>
        <td>Teléfono</td>
        <td>Email</td>
        <td>Dirección</td>
    </tr>
    <tr>
        <td>".$nombre."</td>
        <td>".$telefono."</td>
        <td>".$email."</td>
        <td>".$direccion."</td>
    </tr>
</table>";
