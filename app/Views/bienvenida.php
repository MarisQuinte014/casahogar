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
	<title>Animalandia</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondo">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					ANIMALANDIA
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active fuente" aria-current="page" href="#">Inicio</a>
						<li class="nav-item">
							<a class="nav-link active fuente" aria-current="page" href="#">Sobre mi</a>
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
								<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="imagen 3">
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
				<div class="col-8 text-center">
					<h5 class="fuente2">Hogar de animales <span class="funte2">ANIMALANDIA</span></h5>
					<p class="fuente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum necessitatibus facere corporis incidunt, vitae delectus quod sed omnis, minima dolorum voluptatum beatae, officiis sint ad iste. Hic nisi delectus quos.</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-1">
					<img src="<?= base_url('public/img/dog-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
				</div>
				<div class="col-1">
					<img src="<?= base_url('public/img/cat-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
				</div>
				<div class="col-1">
					<img src="<?= base_url('public/img/bird-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
				</div>
				<div class="col-1">
					<img src="<?= base_url('public/img/horse-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
				</div>
				<div class="col-1">
					<img src="<?= base_url('public/img/rodent-icon.png') ?>" alt="" class="img-fluid w-100 zoom">
				</div>
			</div>
			<br>
		</div>
	</section>
	<section class="fondoApp"></section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-6 mt-3">
					<img src="<?= base_url('public/img/imgen5.jpg') ?>" alt="" class="img-fluid w-100">
				</div>
				<div class="col-6 mt-3 text-center">
					<h5 class="fuente2">Hogar <span class="funte2">ANIMALANDIA</span></h5>
					<p class="fuente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, laudantium eveniet optio delectus cum voluptate aperiam rerum voluptatibus quae ipsum dolor exercitationem mollitia maiores dignissimos similique iste molestiae, minus ipsam commodi? Voluptatem ipsum voluptatibus error repellat nihil, ea ullam provident consequuntur reiciendis libero quos molestias porro aut nam minus consequatur rem cumque omnis minima temporibus hic placeat suscipit totam. Consequatur porro, id eveniet veniam sit nulla, facere quos sint ipsum accusantium fugiat dolores perspiciatis, enim placeat officia natus dolore ratione quis. Quia nostrum quisquam consectetur. Eaque at libero repellat eos officiis. Error, tenetur quae? Debitis eos corporis repellat provident error.</p>
				</div>
			</div>
		</div>
	</section>
	<footer style="background-color: #EEE9E8;">
		<div class="container mt-5" >
		<div class="row">
			<div class="col-4">
				<h6 class="fuente2">Horario de Atención</h6>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, necessitatibus!</p><br>
				<h5>Direccion</h5>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-4">
				<h5>Ayuda</h5>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, maxime.</p><br>
				<h5>Proteccion de datos</h5>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="col-4">
				<h5>Animalanida</h5>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nulla.</p><br>
				<h5>Otrea cosa</h5>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>