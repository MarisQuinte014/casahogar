<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
    <title>Lista Producto</title>
</head>

<body>
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

    <section>
        <div class="container">
            <div class="col-12 mb-5">
                <h1 class="text-center registroAnimales">Lista de productos</h1>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php foreach($productos as $producto):?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $producto["foto"]?>" class="card-img-top h-100" alt="...">
                    <div class="card-body p-3">
                        <h5 class="card-title fuente2"><?= $producto["nombre"]?></h5>
                        <p class="card-text fuente">Precio: <?= $producto["precio"]?></p>
                        <p class="card-text fuente">Descripción: <?= $producto["descripcion"]?></p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#ModalDelete<?= $producto["idProducto"] ?>"
                            class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                        <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    </div>
                    <section>
                        <!-- Modal Eliminar-->
                        <div class="modal fade" id="ModalDelete<?= $producto["idProducto"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo">
                                        <h5 class="modal-title fuente2">Eliminar Producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="fuente">¿Está seguro que quiere eliminar este producto?</p>
                                        <p class="fuente">Id del producto: <?= $producto["idProducto"] ?></p>
                                    </div>
                                    <div class="text-center modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                                        <a href="<?= site_url('/Productos/eliminar'.$producto["idProducto"]) ?>"
                                            class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <!-- Modal Editar-->
                        <div class="modal fade" id="ModalEdit<?= $producto["idProducto"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo">
                                        <h5 class="modal-title fuente2">Actualizar Producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <form action="" method="">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label fuente"><i
                                                                class="fas fa-bone"></i><b>
                                                                Producto:</b></label>
                                                        <input type="text" class="form-control fuente" id="producto"
                                                            name="producto" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label fuente"><i
                                                                class="fas fa-images"></i><b> Fotografia:</b></label>
                                                        <input type="text" class="form-control fuente" id="fotografia"
                                                            name="fotografia">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label fuente"><i
                                                                class="fas fa-dollar-sign"></i><b> Precio
                                                                Unidad:</b></label>
                                                        <input type="number" class="form-control fuente"
                                                            id="precioUnidad" name="precioUnidad">
                                                    </div>
                                                    <div class="mb-3">
                                                        <!-- <label for="exampleFormControlTextarea1">Descripción:</label> -->
                                                        <textarea class="form-control fuente" id="descripcion"
                                                            name="descripcion" rows="3"
                                                            placeholder="Descripción:"></textarea>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label fuente"><i
                                                                class="fas fa-otter"></i><b>
                                                                Tipo de Animal:</b></label>
                                                        <select class="form-control fuente" name="tipodeAnimal">
                                                            <option value="1">Perros</option>
                                                            <option value="2">Gatos</option>
                                                            <option value="3">Aves</option>
                                                            <option value="4">Caballos</option>
                                                            <option value="5">Reptiles</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>