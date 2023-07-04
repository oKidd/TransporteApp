<?php 
include('../src/base/header.php');
include('register.php') 
?>
<script src="../src/js/rut.js"></script>
<main class="text-center">
    <h1 class="fs-1 m-5">Registro Rural</h1>
    <?php if($error){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php }; unset($error); ?>
    <form class="col-8 mx-auto" method="POST">
        <input class="form-control shadow mb-4" name="nombre" type="text" placeholder="Nombre" required>
        <input class="form-control shadow mb-4" name="apellido" type="text" placeholder="Apellido" required>
        <input class="form-control shadow mb-4" name="rut" type="text" oninput="checkRut(this)" placeholder="Rut" required>
        <input class="form-control shadow mb-4" name="email" type="email" placeholder="Email" required>
        <label for="nacimiento" class="text-secondary">Fecha de Nacimiento:</label>
        <input class="form-control shadow mb-4 text-secondary" name="nacimiento" type="date" placeholder="Fecha de Nacimiento" required>
        <input class="form-control shadow mb-4" name="pass1" type="password" placeholder="Contraseña" minlength="8" required>
        <input class="form-control shadow mb-5" name="pass2" type="password" placeholder="Validar Contraseña" minlength="8" required>
        <input class="form-control shadow mb-4 btn btn-warning" name="register" type="submit" value="Registrarse" required>
    </form>
</main>
<?php include('../src/base/footer.php'); ?>