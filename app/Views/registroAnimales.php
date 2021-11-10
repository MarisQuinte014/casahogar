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
    <!-- enrutar recursos que estan en la carpeta PUBLIC -->
    <title>Animalandia</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fondo">
            <div class="container-fluid">
                <a class="navbar-brand fuente" href="<?= site_url('/') ?>">
                    <i class="fas fa-paw"></i>
                    ANIMALANDIA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fuente" aria-current="page" href="<?= site_url('/RegistroProducto') ?>">Registro producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fuente" aria-current="page" href="<?= site_url('/RegistroAnimales') ?>">Registro Animales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h1 class="text-center registroAnimales">Registro de Animales</h1>
                </div>
                <div class="col-6">
                    <form action="<?= site_url('/RegistroAnimales/registrar') ?>" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label fuente"><i class="fas fa-file-signature"></i><b> Nombre:</b></label>
                            <input type="text" class="form-control fuente" id="nombre" name="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label fuente"><i class="fas fa-sort-numeric-up"></i><b> Edad:</b></label>
                            <input type="number" class="form-control fuente" id="edad" name="edad">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label fuente"><i class="fas fa-images"></i><b> Fotografia:</b></label>
                            <input type="text" class="form-control fuente" id="foto" name="foto">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control fuente" id="descripcion" name="descripcion" rows="3" placeholder="Descripción:"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tipodeanimales" class="form-label fuente"> <i class="fas fa-otter"></i><b> Tipo de Animal:</b></label>
                            <select class="form-control fuente tipoAnimal2" name="tipoAnimal">
                                <option>Perros</option>
                                <option>Gatos</option>
                                <option>Aves</option>
                                <option>Caballos</option>
                                <option>Reptiles</option>
                            </select>
                        </div>
                        <div class="text-center mt-5 d-grid gap-2">
                            <button type="submit" class="btn btn-primary fuente"><i class="fas fa-vote-yea"></i><b> Enviar</b></button>
                        </div>
                    </form>
                </div>
                <div class="col-6 align-self-center">
                    <img src="<?= base_url('public/img/imagen8.png') ?>" class="img-fluid w-100 mb-3 rounded">
                    <img src="<?= base_url('public/img/imagen9.jpg') ?>" class="img-fluid w-100 rounded">
                    <a href="<?= site_url('/Animales/listado') ?>">Ver Inventario</a>
                </div>
            </div>
        </div>
    </main>

    <section>
        <?php if(session('mensaje')): ?>
        <div class="modal fade" id="ModalProducto" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white fondo">
                        <h5 class="modal-title fuente2 ">Animalandia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="fuente"><?= (session('mensaje')) ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['mensaje']); ?>
        <?php endif ?>
    </section>

    <footer style="background-color: #EEE9E8;">
        <div class="container mt-5 pt-4">
            <div class="row">
                <div class="col-4">
                    <h6 class="fuente2">Horario de Atención</h6>
                    <p class="fuente">Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p><br>
                    <h5 class="fuente2">Direccion</h5>
                    <p class="fuente">Belén Altavista Calle 8A # 112-82 </p>
                </div>
                <div class="col-4">
                    <h5 class="fuente2">Ayuda</h5>
                    <p class="fuente">Glosario / Correo remoto / Monitoreo y desempeño de uso del sitio web.</p><br>
                    <h5 class="fuente2">Proteccion de datos</h5>
                    <p class="fuente">Protección de datos personales en el Municipio de Medellín.</p>
                </div>
                <div class="col-4">
                    <h3 class="fuente2"><i class="fas fa-paw"></i> Animalanida</h3>
                    <i class="fab fa-facebook fa-3x"></i>
                    <i class="fab fa-instagram fa-3x"></i>
                    <i class="fab fa-youtube fa-3x"></i><br><br><br>


                    <p class="mt-5 fuente">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
                </div>
            </div>
        </div>
    </footer>

    <script type="module" src="<?= base_url('public/js/lanzarmodal.js') ?>"></script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>