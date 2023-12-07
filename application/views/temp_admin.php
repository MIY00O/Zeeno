<?php
    $menu = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Zeenosaur - <?= $menu = $this->uri->segment(2); ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/back/') ?>img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/back/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/back/') ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/back/') ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/back/') ?>css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid position-relative d-flex p-0">

		<!-- Sidebar Start -->
		<div class="sidebar pe-4 pb-3">
			<nav class="navbar bg-secondary navbar-dark">
				<a class="navbar-brand mx-4 mb-3">
					<h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Zeenosaur</h3>
				</a>
				<div class="d-flex align-items-center ms-4 mb-4">
					<div class="ms-3">
						<h6 class="mb-0"><?= $this->session->userdata('nama'); ?></h6>
						<span><?= $this->session->userdata('level'); ?></span>
					</div>
				</div>
				<div class="navbar-nav w-100">
					<a href="<?= site_url('admin/home') ?>" class="nav-item nav-link <?php if($menu=='home'){ echo 'active'; } ?>"><i
							class="fa fa-th me-2"></i>Dashboard</a>
					<a href="<?= site_url('admin/caraousel') ?>" class="nav-item nav-link <?php if($menu=='caraousel'){ echo 'active'; } ?>"><i
							class="fa fa-regular fa-play"></i>Caraousel</a>
					<a href="<?= site_url('admin/kategori') ?>" class="nav-item nav-link <?php if($menu=='kategori'){ echo 'active'; } ?>"><i
							class="fa fa-solid fa-list"></i>Kategori</a>
					<a href="<?= site_url('admin/konfigurasi') ?>" class="nav-item nav-link <?php if($menu=='konfigurasi'){ echo 'active'; } ?>"><i
							class="fa fa-table me-2"></i>Konfigurasi</a>
					<?php if($this->session->userdata('level')=='Admin'){ ?>
					<a href="<?= site_url('admin/konten') ?>" class="nav-item nav-link <?php if($menu=='konten'){ echo 'active'; } ?>"><i
							class="fa fa-regular fa-images"></i>Konten</a>
					<a href="<?= site_url('admin/user') ?>" class="nav-item nav-link <?php if($menu=='user'){ echo 'active'; } ?>"><i
							class="fa fa-regular fa-user"></i>User</a>
					<?php } ?>
				</div>
			</nav>
		</div>
		<!-- Sidebar End -->


		<!-- Content Start -->
		<div class="content">
			<!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
				<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
					<h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
				</a>
				<a href="#" class="sidebar-toggler flex-shrink-0">
					<i class="fa fa-bars"></i>
				</a>
				<div class="navbar-nav align-items-center ms-auto">
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<span class="d-none d-lg-inline-flex"><?= $this->session->userdata('nama'); ?></span>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
							<a href="<?= base_url('auth/logout') ?>" class="dropdown-item">Log Out</a>
						</div>
					</div>
				</div>
			</nav>
			<!-- Navbar End -->

			<!-- Recent Sales Start -->
			<div class="container-fluid pt-4 px-4">
				<div class="bg-secondary text-center rounded p-4">
					<div class="">
						<?= $contents; ?>
					</div>
				</div>
			</div>
			<!-- Recent Sales End -->

			<!-- Footer Start -->
			<div class="container-fluid pt-4 px-4">
				<div class="bg-secondary rounded-top p-4">
					<div class="row">
						<div class="col-12 col-sm-6 text-center text-sm-start">
							&copy; <a href="#">Zoyyy Site</a>, All Right Reserved.
						</div>
						<div class="col-12 col-sm-6 text-center text-sm-end">
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a href="https://htmlcodex.com">HTML Codex</a>
							<br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</div>
		<!-- Content End -->


		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/chart/chart.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/tempusdominus/js/moment.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="<?= base_url('assets/back/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/back/') ?>js/main.js"></script>
	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(5000).slideUp(300);

	</script>
</body>

</html>
