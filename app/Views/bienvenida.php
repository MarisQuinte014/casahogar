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
						<li class="nav-item">
                            <a class="nav-link active fuente" aria-current="page" href="<?= site_url('/Animales/listado') ?>">Inventario de Animales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fuente" aria-current="page" href="<?= site_url('/Producto/listado') ?>">Inventario de Productos</a>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<section>
		<div class="container mt-5">
			<div class="row">
				<div class="col-12">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="imagen 1">

							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="iamgen 2">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="imagen 3">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container mt-2">
			<div class="row d-flex justify-content-center">
				<div class="col-8 text-center mt-3">
					<h5 class="mb-4 fuente2">Hogar de animales <span class="funte2">ANIMALANDIA</span></h5>
					<p class="fuente">Casa hogar Animalandia, atiende desde 1996 animales y fauna silvestre en estado de abandono, ofreciendo atención integral, además somos fabricantes de comida y accesorios para todo tipo de mascota</p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-1">
					<a href="<?= site_url('/AnimalesPerros') ?>" method="GET">
						<img src="<?= base_url('public/img/dog-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
					</a>
					<p class="fuente2 text-center tituloTipo">Perros</p>
				</div>
				<div class="col-1">
					<a href="<?= site_url('/AnimalesGatos') ?>">
						<img src="<?= base_url('public/img/cat-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
					</a>
					<p class="fuente2 text-center tituloTipo">Gatos</p>
				</div>
				<div class="col-1">
					<a href="<?= site_url('/AnimalesAves') ?>">
						<img src="<?= base_url('public/img/bird-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
					</a>
					<p class="fuente2 text-center tituloTipo">Aves</p>
				</div>
				<div class="col-1">
					<a href="<?= site_url('/AnimalesCaballos') ?>">
						<img src="<?= base_url('public/img/horse-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
					</a>
					<p class="fuente2 text-center tituloTipo">Caballos</p>
				</div>
				<div class="col-1">
					<a href="<?= site_url('/AnimalesReptiles') ?>">
						<img src="<?= base_url('public/img/rodent-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
					</a>
					<p class="fuente2 text-center tituloTipo">Reptiles</p>
				</div>
			</div>
			<br>
		</div>
	</section>

	<section class="fondoApp"></section>

	<section>
		<div class="container mt-4">
			<div class="row pt-44">
				<div class="col-6 mt-3">
					<img src="<?= base_url('public/img/imgen5.jpg') ?>" alt="" class="img-fluid w-100">
					<img src="<?= base_url('public/img/imagen6.jpg') ?>" alt="" class="img-fluid w-100 mt-5">
				</div>
				<div class="col-6 mt-3 text-center">
					<h5 class="fuente2">Hogar <span class="funte2">ANIMALANDIA</span></h5>
					<p class="fuente">Somos una organización protectora de animales especializada, desde 1996, en la ayuda a perros y gatos maltratados y/o abandonados; una organización española totalmente independiente que no recibe subvenciones de organismos oficiales, empresas ni partidos políticos. Las cuotas de nuestros socios y las donaciones de nuestros simpatizantes permiten que nuestra labor sea sostenible y preservan nuestra libertad de acción. Contamos con un centro veterinario en Medellín abierto al público, que destina sus ingresos íntegramente al cuidado de los animales abandonados, y un centro de acogida en El Espinar.
						Defendemos el “sacrificio cero”. Esto significa que establecemos una línea muy clara entre “el sacrificio” y “la eutanasia”. Nunca sacrificamos cachorros recién nacidos, ni animales cojos, ciegos, sordos o con enfermedades crónicas que sean tratables. Exclusivamente en caso de enfermedad en fase terminal que produzca un sufrimiento irreversible, se recurre a la eutanasia con toda la dignidad, el respeto y el amor que ellos merecen.</p>
				</div>
			</div>
		</div>
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
					<i class="fab fa-youtube fa-3x"></i>
					<p class="fuente mt-5">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>