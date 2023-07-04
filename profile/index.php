<?php
include('../src/base/header.php');
include('profile.php');
?>
<main class="text-center">
    <h1 class="fs-1 m-5">Tu Perfil</h1>
    <!-- Mostrar los datos del perfil -->
    <p class="fs-4">Hola de nuevo <?php echo $_SESSION['nombre']," ",$_SESSION['apellido']; ?>!</p>
    <p>Tu Rut: <?php echo $_SESSION['rut']; ?></p>
    <p>Tu fecha de nacimiento: <?php echo $_SESSION['nacimiento']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <form method="post">
        <button type="submit" name="logout" class="btn btn-danger">Cerrar Sesion</button>
    </form>
</main>
<?php include('../src/base/footer.php'); ?>