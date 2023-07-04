<?php include('../src/base/header.php');
include('login.php');
?>
<script src="../src/js/rut.js"></script>
<main class="text-center">
    <h1 class="fs-1 m-5">Sesion Rural</h1>
    <?php if($error){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php }; unset($error); ?>
    <form class="col-8 mx-auto" method="POST">
        <input class="form-control shadow mb-4" name="rut" type="text" oninput="checkRut(this)" placeholder="Rut" required>
        <input class="form-control shadow mb-5" name="pass" type="password" placeholder="Contraseña" minlength="8" required>
        <input class="form-control shadow mb-4 btn btn-warning" name="login" type="submit" value="Iniciar Sesion" required>
    </form>
</main>
<?php include('../src/base/footer.php'); ?>