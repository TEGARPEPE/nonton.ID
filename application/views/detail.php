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

	<link rel="stylesheet" href="<?=base_url('assets/')?>custom/detail.css">
</head>
<style>
	/* Navbar Styling */
	.navbar {
		background-color: #222 !important;
		/* Warna gelap untuk navbar */
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	}

	.navbar-brand {
		font-size: 1.5rem;
		/* Ukuran teks logo */
		font-weight: bold;
		color: #fff !important;
	}

	.search-bar input {
		border: 1px solid #555;
		border-radius: 3px;
		background-color: #444;
		color: #fff;
		outline: none;
	}

	.search-bar input:focus {
		border-color: #007bff;
	}

	.search-bar button {
		background-color: #007bff;
		border: none;
		color: #fff;
		padding: 6px 12px;
		border-radius: 3px;
		cursor: pointer;
		transition: 0.3s;
	}

	.search-bar button:hover {
		background-color: #0056b3;
	}

	.navbar-nav .nav-link {
		color: #ddd !important;
		padding: 10px 15px;
		transition: color 0.3s;
	}

	.navbar-nav .nav-link:hover {
		color: #fff !important;
	}

	/* Highlighted Button */
	.navbar-nav .cta .nav-link {
		margin-left: auto;
		font-weight: bold;
	}

	/* Responsive Styling */
	@media (max-width: 768px) {
		.search-bar {
			display: none;
			/* Hilangkan search bar di layar kecil */
		}
	}



	.search-container {
		display: flex;
		align-items: center;
	}

	.search-input {
		padding: 2px;
		padding-left: 8px;
		padding-right: 8px;
		background-color: #353535;
		outline: none;
		color: whitesmoke;
		margin-right: 3px;
		border: 1px solid #353535;
		border-radius: 10px 10px 10px 10px;
		/* Membulatkan sudut kiri */
		width: 200px;
		/* Sesuaikan lebar sesuai kebutuhan */
	}

	.search-input input[type=text] {
		color: white;
		font-size: 10px;
	}

	.search-button {
		background-color: transparent;
		border: none;
		color: #fff;
		padding: 2px 12px;
		border-radius: 3px;
		cursor: pointer;
		transition: 0.3s;
	}

	.detail img{
		min-width: 28%;
		max-width: 28%;
		min-height: 300px;
		max-height: 300px;
	}
	.detail video{
		min-height: 300px;
		max-height: 300px;
		min-width: 65%;
		max-width: 65%;
	}

	.videofoto {
		justify-content: space-between;
	}

</style>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="padding: 3px;background-color:#222;">
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
			<div class="collapse navbar-collapse" id="navbarNav" style="gap:200px;">
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
                    <a href="#" class="nav-link dropdown-toggle px-3 pt-1 pb-1" id="genreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Genre
                    </a>
                    <div class="dropdown-menu" aria-labelledby="genreDropdown">
						<?php foreach($kategori as $kate) {?>
                        <a class="dropdown-item" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
						<?php }?>
                    </div>
                </li>
					<li class="nav-item cta ml-auto">
						<a href="<?= base_url('auth')?>" class="nav-link btn text-white px-3 pt-1 pb-1">LogIn</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="ftco-section" style="padding-top:10px;">
		<div class="container">
			<div id="film">


				<div class="detail" style="background-color:#222;">
					<div class="vidiofoto d-flex  justify-content-between">

						<img src="<?= base_url('assets/upload/konten/'.$konten->foto)?>" alt="" 
							style="border-radius:0px;">
						<video controls>
							<source src="<?= base_url('assets/upload/video/'. $konten->video)?>" type="video/mp4">
						</video>
					</div>
					<div class="col-md-8 d-flex align-items-start">


						<div id="keterangan" style="color:white;">
							<h2 class="mb-4" style="color:white;"><?= $konten->judul;?></h2>
							<p style="color:white;font-size:15px;">Sinopsis :<br><?= $konten->keterangan;?></p>
							<p class="tahun text-light" style="font-size:20px;">Tahun Rilis <br> <span
									style="font-size:15px;border: 1px solid white;padding:8px;border-radius:10px;"><?= $konten->tahun;?></span>
							</p>
							<p class="tahun text-light" style="font-size:20px;">Tag <br> <span
									style="font-size:15px;border: 1px solid white;padding:8px;border-radius:10px;"><?= $konten->nama_kategori;?></span>
							</p>
							<p class="tahun text-light" style="font-size:20px;">Download <br> <span
									style="font-size:15px;padding:8px;border-radius:10px;background-color: #b32020;"><a
										href="<?= $konten->link;?>" target="_blank" class="dunlud text-light">Link
										Download</a></span></p>
						</div>

					</div>
				</div>


				<div class="col-lg-4 sidebar" id="sidebar">
					<div class="widgets-container">
						<!-- Categories Widget -->
						<div class="categories-widget widget-item">
							<h3 class="widget-title text-light">CATEGORIES</h3>
							<ul class="mt-3">
								<?php foreach ($kategori as $kate){ ?>
								<li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
										style="color:white;"><?= $kate['nama_kategori'] ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>
						<!--/Categories Widget -->

						<!-- Garis pemisah antara kategori dan gambar -->
						<hr class="my-4">

						<?php foreach($another_konten as $ktn):?>
						<div class="card"
							style="background-color:#363636;	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);border:none;">
							<div class="img-wrapper" style="  min-height: 100px; max-height: 100px;">
								<a href="<?= base_url('home/detail/') . $ktn['slug'] ?>">
									<img src="<?= base_url('assets/upload/konten/').$ktn['foto']?>"
										alt="Profile Picture" style="min-height:100px; max-height:100px;">
								</a>
							</div>
							<div class="card-body" style="align-content:center;">
								<a href="<?= base_url('home/detail/') . $ktn['slug'] ?>">
									<p class="jdl text-light" style="font-weight:bold;font-size:small;margin-bottom:0;">
										<?= substr($ktn['judul'],0,20)?></p>
								</a>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>

			</div>
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
							<li class="ftco-animate"><a href="<?= $konfig->no_wa?>"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="<?= $konfig->instagram?>"><span class="icon-instagram"></span></a></li>
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
