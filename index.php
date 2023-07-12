<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src="https://kit.fontawesome.com/88b3df3889.js" crossorigin="anonymous"></script>

		<title>Projet formation</title>

        
	</head>
	<body>
	<?php
include('assets/exo_php/header.php')
?>

		<section class="banner d-flex justify-content-center align-items-center pt-5">
			<div class="container my-5 py-5">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6 banner-desc lh-lg">
						<h1 class="text-capitalize py-3 redressed">
							Restaurant TheDistrict à <br />
							votre goût dans la ville de Amiens
						</h1>
						
					</div>
				</div>
			</div>
		</section>

		<section class="available merriweather py-5">
			<div class="container">
				<div class="row">
					<div class="card mb-3 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<img src="assets/img/banniere6.jpg" class="img-fluid" alt="..." />
							</div>
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Nos pizzas</h3>
									<p class="card-text">
										Découvrez nos pizzas cuitent au feux de bois 
									</p>
									<p class="card-text"><a href="pizza.html" class="btn text-muted">Découvrir les pizzas</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card my-5 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Notre restaurant</h3>
									<p class="card-text">
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
										doloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
										obcaecati quidem tempore debitis.
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="assets/img/Carousel/carousel2.jpg" class="d-block w-100" alt="..." />
										</div>
										<div class="carousel-item">
											<img src="assets/img/Carousel/carousel1.jpg" class="d-block w-100" alt="..." />
										</div>
										<div class="carousel-item">
											<img src="assets/img/Carousel/carousel3.jpg" class="d-block w-100" alt="..." />
										</div>
									</div>
									<button
										class="carousel-control-prev"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="prev"
									>
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button
										class="carousel-control-next"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="next"
									>
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card mb-3 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<img src="assets/img/food/cheesburger.jpg" class="img-fluid" alt="..." />
							</div>
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Nos Burgers</h3>
									<p class="card-text">
										Découvrez nos burgers préparer mains 
									</p>
									<p class="card-text"><a href="burger.html" class="btn text-muted">Découvrir les burgers</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="cc-carousel merriweather bg-dark text-light text-center py-5">
			<div class="container">
				<div class="row">
					<h1 class="text-uppercase">Nos délices </h1>
					
				</div>
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/img/Carousel/carousel2.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>Le gout de la légèreté</h5>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assets/img/Carousel/carousel1.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>Un décors qui facilite la digestion</h5>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assets/img/Carousel/carousel3.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>Un environnement calme et décontractant</h5>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assets/img/Carousel/carousel4.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>L'hygiène est au rendez-vous</h5>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</section>

		<br>

		<div class="reseau">
			<a href="https://www.instagram.com/">
				<i class="fa-brands fa-instagram fa-spin fa-2xl" style="color: #000000;"></i>
				<div class="insta">
					<p>&emsp;</p>
				</div>
	
				<a href="https://www.youtube.com/">
					<i class="fa-brands fa-youtube fa-spin fa-2xl" style="color: #000000;"></i>
					<div class="ytb">
						<p>&emsp;</p>
					</div>
	
					<a href="https://www.facebook.com">
						<i class="fa-brands fa-facebook fa-spin fa-2xl" style="color: #000000; "></i>
						<div class="fb">
							<p>&emsp;</p>
						</div>
	
	
						<a href="https://twitter.com/">
							<i class="fa-brands fa-twitter fa-spin fa-2xl" style="color: #000000;"></i>
							<div class="tw">
								<p>&emsp;</p>
							</div>
	
							<a href="https://www.linkedin.com/">
								<i class="fa-brands fa-linkedin fa-spin fa-2xl" style="color: #000000;"></i>
								<div class="lin">
									<p>&emsp;</p>
								</div>
		</div>
	
		<br><br>
		<?php
		include('assets/exo_php/header.php')
		?>


		<script src="assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>