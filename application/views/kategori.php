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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

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
                <a href="<?= base_url('auth') ?>" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">KONTEN</h6>
                <h1 class="mb-4"><?= $nama_kategori; ?></h1>
            </div>
            <div class="row g-4">
            <?php $no = 1; foreach ($konten as $ab) { ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" style="width:100vh; height:30vh; object-fit: cover;" src="<?= base_url('assets/upload/konten/'. $ab['foto']) ?>">
                        <div class="position-relative p-4 pt-2">
                            <h4 class="mb-2"><?= $ab['judul'] ?></h4>
                            <p><?= $ab['nama_kategori'] ?></p>
                            <a class="small fw-medium" href="<?= base_url('home/artikel/'. $ab['slug']); ?>">Baca Selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            <?php $no++; } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


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
                        <a class="btn btn-square btn-outline-light btn-social" href="https://<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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