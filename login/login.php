<?php
include('../config.php');

session_start();

if($_SESSION['rut']){
    header('location: /profile');
}

if (isset($_POST['login'])) {
    $rut = $_POST["rut"];
    $clave = $_POST["pass"];

    // Realizar la consulta para obtener los datos del usuario
    $query = "SELECT * FROM Pasajero WHERE Rut = '$rut'";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $hashClave = $row['Clave'];

        // Verificar la contraseña ingresada
        if (password_verify($clave, $hashClave)) {
            // Contraseña correcta, iniciar sesión

            // Guardar datos en variables de sesión
            $_SESSION['nombre'] = $row['Nombre'];
            $_SESSION['apellido'] = $row['Apellido'];
            $_SESSION['rut'] = $row['Rut'];
            $_SESSION['fecha_nacimiento'] = $row['Fecha_nacimiento'];
            $_SESSION['email'] = $row['Email'];

            // Redireccionar a la página de perfil
            header('Location: /profile');
        } else {
            // Contraseña incorrecta
            $error = "La contraseña ingresada es incorrecta...";
        }
    } else {
        // No se encontró un usuario con el rut ingresado
        $error = "No se encontró un usuario con ese rut...";
    }
}
?>
