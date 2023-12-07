<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/front/') ?>img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/front/') ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/front/') ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/front/') ?>css/style.css" rel="stylesheet">
</head>

<body>

	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
		<div class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
			<h2 class="m-0 text-primary">Zeenosaur</h2>
		</div>
		<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
				<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
				<?php foreach ($kategori as $kt) { ?>
				<a href="<?= base_url('home/kategori/'. $kt['id_kategori']) ?>" class="nav-item nav-link">
					<?= $kt['nama_kategori'] ?>
				</a>
				<?php } ?>
			</div>
			<a href="<?= base_url('auth') ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login</a>
		</div>
	</nav>
	<!-- Navbar End -->

	<!-- About Start -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-3">
                    <h1 class="mb-3"><?= $konten->judul; ?></h1>
                    <div class="d-flex">
                        <h5 style="margin-right: 20px;"><i class="fa fa-user text-primary" style="margin-right: 10px;"></i><?= $konten->nama; ?></h5>
                        <h5 style="margin-right: 20px;"><?= $konten->nama_kategori; ?></h5>
                    </div>
                </div>
                <div class="mb-5 text-dark">
                    <img class="img-fluid rounded w-100 mb-4" src="<?= base_url('assets/upload/konten/'. $konten->foto); ?>">
                    <?= $konten->keterangan; ?>
                </div>
            </div>
        </div>
    </div>
	<!-- About End -->


	<!-- Footer Start -->
	<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-3 col-md-6">
					<h5 class="text-white mb-4"><?= $konfig->judul_website ?></h5>
					<p class="mb-2"></i><?= $konfig->profil_website; ?></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5 class="text-white mb-4">Address</h5>
					<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
					<p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $konfig->no_wa; ?></p>
					<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
					<div class="d-flex pt-2">
						<a class="btn btn-square btn-outline-light btn-social"
							href="https://<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
						<a class="btn btn-square btn-outline-light btn-social" href=""><i
								class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5 class="text-white mb-4">Quick Links</h5>
					<a class="btn btn-link" href="<?= base_url() ?>">Home</a>
					<?php foreach ($kategori as $kt) { ?>
					<a class="btn btn-link" href="<?= base_url('home/kategori/'. $kt['id_kategori']) ?>">
						<?= $kt['nama_kategori'] ?>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="copyright">
				<div class="row">
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						&copy; <a href="#"><?= $konfig->judul_website ?></a>, All Right Reserved.
					</div>
					<div class="col-md-6 text-center text-md-end">
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed By <a href="https://htmlcodex.com">HTML Codex</a>
						<br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
			class="bi bi-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/isotope/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>lib/lightbox/js/lightbox.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/front /') ?>js/main.js"></script>
</body>

</html>
