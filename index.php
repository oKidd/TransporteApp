<?php include('src/base/header.php'); ?>
<!-- https://coolors.co/92977e-e6e18f-fefcad-eadda6-fffae2 -->
<main class="p-2">
    <div id="carouselExample" class="carousel slide mb-2">
        <div class="carousel-inner col-10 mx-auto border rounded">
            <div class="carousel-item active">
                <img src="https://uatv.cl/wp-content/uploads/2020/02/inclusion.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://www.diarioeldia.cl/u/fotografias/m/2022/8/19/f1280x720-94467_226142_5050.jpg"
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://elmagallanico.com/wp-content/uploads/2020/10/2020-10-23-transporte-rio-seco.jpg"
                    class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="dropdown mb-2">
        <button class="btn btn-lg col-12 btn-secondary dropdown-toggle text-dark fs-1 bg-warning" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuando llega?
        </button>
        <ul class="dropdown-menu col-12 text-center bg-secondary-subtle">
            <li class="col-8 mx-auto">
                <form>    
                    <input class="text-center mb-2 form-control" type="text" placeholder="Codigo Paradero">
                    <input class="form-control btn btn-primary" type="submit" value="Buscar Paradero">
                </form>
            </li>
        </ul>
    </div>
    <div class="dropdown mb-2">
        <button class="btn btn-lg col-12 btn-secondary dropdown-toggle text-dark fs-1 bg-warning" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Como pago?
        </button>
        <ul class="dropdown-menu col-12 text-center bg-secondary-subtle">
            <li class="col-8 mx-auto">
                Puedes comprar tu boleto digital mediante nuestra web o comprar tu boleto directamente con el chofer del bus.
            </li>
        </ul>
    </div>
    <a href="/register" class="btn btn-lg col-12 btn-secondary text-light fs-1 bg-success">
        Abrir Cuenta
    </a>
</main>
<?php include('src/base/footer.php'); ?>