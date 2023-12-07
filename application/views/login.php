<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/back/') ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
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

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Zeehehe</h3>
                            <h3>Login</h3>
                        </div>
                        <form action="<?= base_url('auth/login') ?>" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                                <label for="floatingText" class="text-white">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                                <label for="floatingPassword" class="text-white">Password</label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                            </div>
                            <div id="hilang">
                                <?= $this->session->flashdata('alert') ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
</body>

</html>