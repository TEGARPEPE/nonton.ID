<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $judul_halaman;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<!-- css bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
		integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
	</script>
	<!-- css bootstrap -->
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/animate.css">

	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/magnific-popup.css">

	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/aos.css">

	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/ionicons.min.css">

	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/flaticon.css">
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/icomoon.css">
	<link rel="stylesheet" href="<?=base_url('assets/direng/')?>css/style.css">


	<link rel="stylesheet" href="<?=base_url('assets/')?>custom/home.css">
</head>
<style>
</style>

<body bg-dark>

	<nav class="navbar navbar-expand-lg navbar-dark sticky-top"
		style="padding:1px;background-color:#222;min-widht:1000px;max-height:42px;">
		<div class="container" style="justify-content:center;">
			<!-- Brand/Logo -->
			<a class="navbar-brand" href="<?= base_url('home') ?>"
				style="font-size:19px;"><?= $konfig->judul_web; ?></a>

			<!-- Toggle Button for Mobile View -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar Content -->
			<div class="collapse navbar-collapse" id="navbarNav">
				<!-- Search Bar -->
				<div class="search-container mr-auto">
					<form action="<?php echo base_url('home/search'); ?>" method="post" class="form-inline">
						<input type="text" name="keyword" placeholder="Cari..." class="search-input">
						<button class="search-button">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
								<path
									d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
								</path>
							</svg>
						</button>
					</form>
				</div>

				<!-- Navbar Links -->
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle px-3 pt-1 pb-1" id="genreDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Genre
						</a>
						<div class="dropdown-menu" aria-labelledby="genreDropdown">
							<?php foreach($kategori as $kate) {?>
							<a class="dropdown-item"
								href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
							<?php }?>
						</div>
					</li>
					<li class="nav-item cta ml-auto">
						<a href="<?= base_url('auth')?>" class="nav-link btn px-3 pt-1 pb-1">LogIn</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	>
	<!-- END nav -->


	<!-- Carousel -->
	<!-- Carousel -->







	<section class="ftco-section" style="background-color:#222;padding-bottom:0px;padding-top:0px;">
		<div class="container" style="min-widht:1000px;">
			<div class="row justify-content-space-between mb-1 pb-0">
				<div class="col heading-section ftco-animate " style="display: flex;align-items:center;">
					<!-- <span class="subheading">Special</span> -->
					<h2 class="mb-4 text-light" flex><strong>Mungkin ini yang anda maksud</strong></h2>
				</div>
			</div>
		</div>
		<div class="konten">

			<?php foreach($konten as $ktn):?>
			<?php if ($ktn['nama_kategori'] == $ktn['nama_kategori']): ?>
			<div class="card" style="background-color: #363636;min-height :399px;border:none;">
				<div class="img-wrapper" style="  min-height: 192px; 
    max-height: 192px;background-color:#363636;">
					<img src="<?= base_url('assets/upload/konten/').$ktn['foto']?>" alt="Profile Picture"
						style="min-height:192px; max-height:192px;">
				</div>
				<div class="card-body">
					<p class="jdl text-light" style="font-weight:bold;font-size:small;"><?= $ktn['judul']?></p>
					<p class="kate text-light"><?= $ktn['nama_kategori']?></p>
					<span class="ml-auto mt-5" text-center><a href="<?= base_url('home/detail/'. $ktn['slug'])?>"
							style="background-color:crimson;padding: 5px; color:white;" id="tonton">Watch
						</a></span>
				</div>

			</div>
			<?php endif?>
			<?php endforeach;?>
		</div>
	</section>






	<footer class="ftco-footer ftco-bg-dark ftco-section pt-5 pb-5">
		<div class="container mr-auto ml-auto">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2"><?= $konfig->judul_web?></h2>
						<p><?= $konfig->profil_web?></p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="<?= $konfig->no_wa?>"><span
										class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="<?= $konfig->instagram?>"><span
										class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Information</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">About</a></li>
							<li><a href="#" class="py-2 d-block">Service</a></li>
							<li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
							<li><a href="#" class="py-2 d-block">Become a partner</a></li>
							<li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
							<li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());

						</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="<?= base_url('assets/direng/')?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery.stellar.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/aos.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/jquery.timepicker.min.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url('assets/direng/')?>js/google-map.js"></script>
	<script src="<?= base_url('assets/direng/')?>js/main.js"></script>

</body>

</html>
