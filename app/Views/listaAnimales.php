<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
    <title>Document</title>
</head>

<body>
    <!-- CABECERA -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fondo mb-5">
            <div class="container-fluid">
                <a class="navbar-brand fuente" href="#">
                    <i class="fas fa-paw"></i>
                    ANIMALANDIA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fuente" aria-current="page"
                                href="<?= site_url('/RegistroProducto') ?>">Registro producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fuente" aria-current="page"
                                href="<?= site_url('/RegistroAnimales') ?>">Registro Animales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- TITULO DE LA PAGINA -->
    <section>
        <div class="container">
            <div class="col-12 mb-5">
                <h1 class="text-center registroAnimales">Lista de Animales</h1>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-1 g-4">
                <?php foreach($animales as $animal):?>
                <!-- card -->
                <div class="card">
                    <img src="<?= $animal["foto"]?>" class="card-img-top h-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fuente2"><?= $animal["nombre"]?></h5>
                            <p class="card-text fuente">Edad: <?= $animal["edad"]?></p>
                            <p class="card-text fuente">Descripción: <?= $animal["descripcion"]?></p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalDelete<?= $animal["idAnimal"] ?>" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalEdit<?= $animal["idAnimal"] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        </div>
                </div>
                <section>
                     <!-- Modal Eliminar-->
                     <div class="modal fade" id="ModalDelete<?= $animal["idAnimal"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo">
                                        <h5 class="modal-title fuente2">Eliminar Animal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="fuente">¿Está seguro que quiere eliminar este Animal?</p>
                                        <p class="fuente">Id del producto: <?= $animal["idAnimal"] ?></p>
                                    </div>
                                    <div class="text-center modal-footer">
                                        <!-- Ojo aqui -->
                                        <a href="<?= site_url('/Animales/eliminar'.$animal["idAnimal"]) ?>"
                                            class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <section>
                    <!-- Modal Editar-->
                    <div class="modal fade" id="ModalEdit<?= $animal["idAnimal"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo">
                                        <h5 class="modal-title fuente2">Actualizar Animal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-3 align-self-center">
                                                <img src="<?= $animal["foto"]?>" alt="foto" class="img-fluid w-100">
                                            </div>
                                            <div class="col-9">
                                                <form action="<?= site_url('/Animales/editar'.$animal["idAnimal"])?>" method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label fuente"><i class="fas fa-bone"></i><b>Animal:</b></label>
                                                        <input type="text" class="form-control fuente" id="nombre"
                                                            name="nombre" value="<?= $animal["nombre"] ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label fuente"><i class="fas fa-dollar-sign"></i><b> Edad:</b></label>
                                                        <input type="number" class="form-control fuente"
                                                            id="edad" name="edad"
                                                            value="<?= $animal["edad"] ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <!-- <label for="exampleFormControlTextarea1">Descripción:</label> -->
                                                        <textarea class="form-control fuente" id="descripcion"
                                                            name="descripcion"
                                                            rows="3"><?= $animal["descripcion"] ?></textarea>
                                                    </div>

                                                    <div class="text-center mt-5 ">
                                                        <button type="submit" class="btn btn-primary fuente"><i
                                                                class="fas fa-vote-yea"></i><b>
                                                                Enviar</b></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>
</html>