<?php
include('../config.php');

if($_SESSION['rut']){
    header('location: /profile');
}

// Verificar si se ha enviado el formulario
if (isset($_POST["register"])) {
    // Obtener los valores del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $rut = $_POST["rut"];
    $email = $_POST["email"];
    $nacimiento = $_POST['nacimiento'];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];


    $verificar_email = "SELECT * FROM Pasajero WHERE Email = '$email'";
    $resultado = mysqli_query($conn, $verificar_email);
    // Comprobar si se obtienen resultados
    if (mysqli_num_rows($resultado) == 0) {
        // Verificar si las contraseñas coinciden
        if ($pass1 == $pass2) {

            $clave = password_hash($pass1, PASSWORD_BCRYPT);

            // Insertar los datos en la tabla "Pasajero"
            $sql = "INSERT INTO Pasajero (Rut, Nombre, Apellido, Fecha_Nacimiento, Email, Clave) VALUES ('$rut', '$nombre', '$apellido', '$nacimiento', '$email', '$clave')";

            try {
                if ($conn->query($sql) === TRUE) {
                    session_start();
            
                    // Almacenar datos en la sesión
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['apellido'] = $apellido;
                    $_SESSION['rut'] = $rut;
                    $_SESSION['email'] = $email;
                    $_SESSION['nacimiento'] = $nacimiento;
                    header('location: /profile');
                    // exit;
                }
            } catch (Exception $e) {
                $e = $e->getMessage();
                if (strpos($e, "Duplicate entry") !== false){
                    $error = "Ese rut ya esta registrado...";
                }else{
                    $error = "Ha ocurrido un error, por favor intentelo mas tarde...";
                }
            }
        } else {
            $error = "Las contraseñas no coinciden";
        }
    }else{
        // El email ya existe en la base de datos
        $error = "El email ya está registrado...";
        // exit;
    }
    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>

<!-- 20642834-1 -->