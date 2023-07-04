<?php
session_start();

if (isset($_POST['logout'])) {
    // Destruir la sesión
    session_destroy();
    session_unset();
    // Redirigir a la página de inicio de sesión u otra página deseada
    header('Location: /login');
    // exit;
}
?>