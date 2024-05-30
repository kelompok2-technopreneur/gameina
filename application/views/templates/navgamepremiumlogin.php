<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.min.css">
    <link href=" https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <title>GameINA - Web Game Portal Indonesia</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-colour" id="nav">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('welcome') ?>">Gameindonesia.</a>
            <script src="<?= base_url('assets/'); ?>js/myscript.js"></script>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('welcome') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('games') ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Game Gratis
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/prasekolah') ?>">PRA-SEKOLAH</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/kanak') ?>">KANAK-KANAK</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/awal') ?>">USIA SEKOLAH AWAL</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/akhir') ?>">USIA SEKOLAH AKHIR</a>
                            <a class="dropdown-item" style="color: #d6011d!important" href="<?= base_url('games/remaja') ?>">REMAJA</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#daftar">Game Premium <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <?php if ($this->session->userdata('email')) { ?>
                            <a class="cta text-decoration-none" href="<?= base_url('welcome/logout') ?>">
                                <span class="my-auto"><i class="font-lol">LOGOUT</i></span>
                                <span class="shape-login">
                                    <svg width="44px" height="36px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- SVG paths for the logout button -->
                                    </svg>
                                </span>
                            </a>
                        <?php } else { ?>
                            <a class="cta text-decoration-none" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                <span class="my-auto"><i class="font-lol">LOGIN</i></span>
                                <span class="shape-login">
                                    <svg width="44px" height="36px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- SVG paths for the login button -->
                                    </svg>
                                </span>
                            </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- end navbar -->

    <!-- end navbar -->