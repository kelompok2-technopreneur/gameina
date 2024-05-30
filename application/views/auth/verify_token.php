<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/styling.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>GameINA - Web Game Portal Indonesia</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-colour" id="nav">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('welcome') ?>">Gameindonesia.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('welcome') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('games') ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Game Gratis
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/prasekolah') ?>">PRA-SEKOLAH</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/kanak') ?>">KANAK-KANAK</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/awal') ?>">USIA SEKOLAH AWAL</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/akhir') ?>">USIA SEKOLAH AKHIR</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/remaja') ?>">REMAJA</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#daftar">Game Premium</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($this->session->userdata('email')) : ?>
                            <a class="cta text-decoration-none" href="<?= base_url('welcome/logout') ?>">
                                <span class="my-auto"><i class="font-lol">LOGOUT</i></span>
                                <span class="shape-login">
                                    <svg width="44px" height="36px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <!-- SVG paths for the logout button -->
                                    </svg>
                                </span>
                            </a>
                        <?php else : ?>
                            <a class="cta text-decoration-none" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                <span class="my-auto"><i class="font-lol">LOGIN</i></span>
                                <span class="shape-login">
                                    <svg width="44px" height="36px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <!-- SVG paths for the login button -->
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Token Form -->
    <div class="container">
        <div class="row bg-registration mt-5">
            <div class="col-md-6 mx-auto img-fluid">
                <img src="<?= base_url('assets/') ?>img/hayabusa.png" class="mx-auto" alt="">
            </div>
            <div class="col-md-6 mx-auto my-auto mt-5">
                <form action="<?= base_url('verifytoken') ?>" method="post">
                    <div class="form-group">
                        <label for="email" class="label-font-register">Masukkan Email</label>
                        <input type="email" class="form-control effect-9" name="email" id="email" value="<?= set_value('email'); ?>" required>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="token" class="label-font-register">Token</label>
                        <input type="text" class="form-control" name="token" id="token" placeholder="Masukkan token Anda di sini..." required>
                        <?= form_error('token', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-block btn-modal btn-submit">Submit Token</button>
                </form>
                <p class="mt-3">Belum memiliki token? Hubungi kami di <a href="https://wa.me/6289665967439">WhatsApp</a>.</p>
            </div>
        </div>
    </div>
    <!-- End Token Form -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-J6qa4849blE2+poT5T9MRzO8ABe+f5sRa4lpa8qX5gKUpq8K/9H+65P3pG5Oop7j" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-ZdP/y7psZJd2m6uj0I+UMGVU7Z2AKwhboFtG6Oj2lxD5i6bqZOQSe2FZyhlhvPo3" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEw3yFA63HM7jq2jP5qKOXH7CisXbz" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            // SweetAlert untuk notifikasi token benar
            <?php if ($this->session->flashdata('success-token')) : ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Token Benar',
                    text: '<?= $this->session->flashdata('success-token'); ?>',
                    showConfirmButton: true
                });
            <?php endif; ?>

            // SweetAlert untuk notifikasi token salah
            <?php if ($this->session->flashdata('error-token')) : ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Token Salah',
                    text: '<?= $this->session->flashdata('error-token'); ?>',
                    showConfirmButton: true
                });
            <?php endif; ?>
        });
    </script>
</body>

</html>