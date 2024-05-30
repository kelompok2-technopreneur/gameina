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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
    <title>GameINA | Games</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid game-jumbotron rellax">
                <div class="container " data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="display-4 font-weight-bold header-jumbotron" d>Mainkan Game Gratis!</h1>
                    <p class="lead text-jumbotron">Mainkan banyak game gratis disini. Gratis, seru dan menarik. <br>
                        Nikmati kemudahan bermain game dimana saja dengan GameINA.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- title -->
    <div class="row">
        <div class="owl-carousel mt--5 container owl-theme category ">
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1200">
                <a href="<?= base_url('games/prasekolah') ?>">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/PRASEKOLAH.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1400">
                <a href="<?= base_url('games/kanak') ?>">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/KANAK.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1600">
                <a href="games/awal">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/AWAL.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1800">
                <a href="games/akhir">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/AKHIR.png);"></div>
                </a>
            </div>
            <div class="b-game-card item" data-aos="fade-down" data-aos-duration="2000">
                <a href="games/remaja">
                    <div class="b-game-card__cover" style="background-image: url(assets/img/REMAJA.png);"></div>
                </a>
            </div>
        </div>
    </div>

    <div class="row " id="daftar">
        <div class="container">
            <h1 class="font-weight-bold mt-5" data-aos="fade-right" data-aos-duration="1500" style="color: #d6011d;font-size:47px !important;">Mainkan Game Populer dan
                Menarik!</h1>
        </div>
    </div>


    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6" data-aos-duration="1500" data-aos="fade-right">
                <img src="<?= base_url('assets/') ?>img/hayabusa.png" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-md-6 my-auto" data-aos-duration="1500" data-aos="fade-left">
                <h1 class="text-center title mt-5">Tertarik bergabung bersama kami?</h1>
                <p class="text-center text-section">Temukan keajaiban gaming dengan langganan premium kami! Dapatkan akses eksklusif ke koleksi game menarik, fitur khusus, dan bonus menggiurkan. Bergabunglah sekarang untuk pengalaman gaming yang tak terlupakan!</p>
                <a href="<?= base_url('verifytoken') ?>"><button class="btn btn-section btn-block">Berlangganan Sekarang!</button></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="end-section row mt-5" data-aos-duration="1200" data-aos="zoom-out">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="font-weight-bold">Promosikan bisnis Anda kepada jutaan pelanggan potensial! </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="https://wa.me/6289665967439">
                            <h5 class="btn btn-light font-weight-bold">Promosikan Sekarang!</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title font-weight-bold" id="exampleModalCenterTitle">Login ke gameina sekarang.</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/'); ?>img/_____2x-removebg-preview.png" height="300px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <form action="<?= base_url('welcome/index') ?>" method="post">
                                    <div class="form-group">
                                        <label class="label-font" for="exampleFormControlInput1">
                                            Email.</label>
                                        <input type="text" value="<?= set_value('email'); ?>" class="form-control" name="email" id="email" placeholder="Masukan email mu disini ..">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="label-font" for="exampleFormControlInput1">Password.</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password mu disini ..">
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Ingat saya.
                                        </label>
                                    </div>
                                    <p class="terms">Dengan login anda menyetujui <i>privasi dan persyaratan ketentuan
                                            hukum kami </i> .
                                        belum punya akun? daftar <a href="<?= base_url('welcome/registration') ?>">
                                            disini.</a>
                                    </p>
                                    <button class="btn btn-modal btn-block">Login Sekarang!</button>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    </div>
    </div>



    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

    <script>
        var rellax = new Rellax('.rellax');
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>


</html>