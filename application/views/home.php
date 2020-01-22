<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manajemen Absen | Dinas Koperasi Kota Pekanbaru</title>

    <!-- Custom fonts for this theme -->
    <link href="<?= base_url(); ?>assets/tampilan_home/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?= base_url(); ?>assets/tampilan_home/css/freelancer.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Manajemen Absen</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Absensi</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= base_url('auth/tampillogin'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

            <!-- Masthead Avatar Image -->
            <img src="<?php echo base_url(); ?>assets/images/koperasi.png" style="height:300px"><br>

            <!-- Masthead Heading -->
            <h1 class="masthead-heading text-uppercase mb-0">Selamat Datang</h1>

            <!-- Icon Divider -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Masthead Subheading -->
            <p class="masthead-subheading font-weight-light mb-0">Silahkan Absen</p>

        </div>
    </header>

    <!-- Portfolio Section -->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">

            <!-- Portfolio Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Absensi</h2>

            <!-- Icon Divider -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">

                <!-- Portfolio Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <a href="<?= base_url('chome/pagi') ?>"> <i class="fas fa-plus fa-3x"></i></a>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>assets/tampilan_home/img/portfolio/pagi.jpeg" alt="" width="300px">
                    </div>
                </div>

                <!-- Portfolio Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#absensiang">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <a href="<?= base_url('chome/siang') ?>"><i class="fas fa-plus fa-3x"></i></a>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>assets/tampilan_home/img/portfolio/siang.jpeg" alt="" width="300px">
                    </div>
                </div>

                <!-- Portfolio Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#absensore">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <a href="<?= base_url('chome/sore') ?>"><i class="fas fa-plus fa-3x"></i></a>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url(); ?>assets/tampilan_home/img/portfolio/sore.jpeg" alt="" width="300px">
                    </div>
                </div>
            </div>




        </div>
    </section>





    <!-- Copyright Section -->
    <section class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Dinas Koperasi Kota Pekanbaru 2019</small>
        </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="absenpagi" tabindex="-1" role="dialog" aria-labelledby="absenpagiLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title -->
                                <h5 class="portfolio-modal-title text-secondary text-uppercase ">Absen Pagi</h5>
                                <hr>
                                <form class="form-horizontal" action="<?php echo base_url('auth/tambahpagi'); ?>" method="post">
                                    <div class="box-body" align="center">
                                        <div class="form-group">
                                            <label for="no_hp" class="col-sm-12 control-label">Nama Pegawai</label>
                                            <div class="col-sm-8">
                                                <?php $komang = "var prdName = new Array();"; ?>
                                                <select class="form-control select2" name="nip" id="absen_pagi" style="width: 100%;" required="">
                                                    <option value="" disabled>---Pilih---</option>
                                                    <?php
                                                    foreach ($pegawai as $p) { ?>
                                                        <?php $v = TRUE;
                                                        $d = date('Y-m-d');
                                                        for ($i = 0; $i < count($pagi); $i++) {
                                                            if ($d == $pagi[$i]->tgl_absen) {
                                                                if ($p->nip == $pagi[$i]->nip) {
                                                                    $v = FALSE;
                                                                    break;
                                                                }
                                                            } else {
                                                                $v = TRUE;
                                                            }
                                                        } ?>
                                                        <?php if ($v) { ?>
                                                            <option value="<?php echo $p->nip; ?>"><?php echo $p->nama; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-8">
                                                <select class="form-control select2" name="absen" style="width: 100%;" required="">
                                                    <option value="">---Pilih---</option>
                                                    <option value="1">Hadir</option>
                                                    <option value="2">Sakit</option>
                                                    <option value="3">Izin</option>
                                                    <option value="4">Alpha</option>
                                                    <option value="5">Dinas Luar</option>
                                                    <option value="6">Cuti</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div align="center">
                                        <button type="submit" id="send" class="btn btn-primary">Absen</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="absensiang" tabindex="-1" role="dialog" aria-labelledby="absensiangLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title -->
                                <h5 class="portfolio-modal-title text-secondary text-uppercase ">Absen Siang</h5>
                                <hr>
                                <form class="form-horizontal" action="<?php echo base_url('auth/tambahsiang'); ?>" method="post">
                                    <div class="box-body" align="center">
                                        <div class="form-group">
                                            <label for="no_hp" class="col-sm-12 control-label">Nama Pegawai</label>
                                            <div class="col-sm-8">
                                                <?php $komang = "var prdName = new Array();"; ?>
                                                <select class="form-control select2" name="nip" id="absen_siang" style="width: 100%;" required="">
                                                    <option value="" disabled>---Pilih---</option>
                                                    <?php
                                                    foreach ($pegawai as $p) { ?>
                                                        <?php $v = TRUE;
                                                        $d = date('Y-m-d');
                                                        for ($i = 0; $i < count($siang); $i++) {
                                                            if ($d == $siang[$i]->tgl_absen) {
                                                                if ($p->nip == $siang[$i]->nip) {
                                                                    $v = FALSE;
                                                                    break;
                                                                }
                                                            } else {
                                                                $v = TRUE;
                                                            }
                                                        } ?>
                                                        <?php if ($v) { ?>
                                                            <option value="<?php echo $p->nip; ?>"><?php echo $p->nama; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-8">
                                                <select class="form-control select2" name="absen" style="width: 100%;" required="">
                                                    <option value="">---Pilih---</option>
                                                    <option value="1">Hadir</option>
                                                    <option value="2">Sakit</option>
                                                    <option value="3">Izin</option>
                                                    <option value="4">Alpha</option>
                                                    <option value="5">Dinas Luar</option>
                                                    <option value="6">Cuti</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div align="center">
                                        <button type="submit" id="send" class="btn btn-primary">Absen</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="absensore" tabindex="-1" role="dialog" aria-labelledby="absensoreLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title -->
                                <h5 class="portfolio-modal-title text-secondary text-uppercase ">Absen Sore</h5>
                                <hr>
                                <form class="form-horizontal" action="<?php echo base_url('auth/tambahsore'); ?>" method="post">
                                    <div class="box-body" align="center">
                                        <div class="form-group">
                                            <label for="no_hp" class="col-sm-12 control-label">Nama Pegawai</label>
                                            <div class="col-sm-8">
                                                <?php $komang = "var prdName = new Array();"; ?>
                                                <select class="form-control select2" name="nip" id="absen_sore" style="width: 100%;" required="">
                                                    <option value="" disabled>---Pilih---</option>
                                                    <?php
                                                    foreach ($pegawai as $p) { ?>
                                                        <?php $v = TRUE;
                                                        $d = date('Y-m-d');
                                                        for ($i = 0; $i < count($sore); $i++) {
                                                            if ($d == $sore[$i]->tgl_absen) {
                                                                if ($p->nip == $sore[$i]->nip) {
                                                                    $v = FALSE;
                                                                    break;
                                                                }
                                                            } else {
                                                                $v = TRUE;
                                                            }
                                                        } ?>
                                                        <?php if ($v) { ?>
                                                            <option value="<?php echo $p->nip; ?>"><?php echo $p->nama; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-8">
                                                <select class="form-control select2" name="absen" style="width: 100%;" required="">
                                                    <option value="">---Pilih---</option>
                                                    <option value="1">Hadir</option>
                                                    <option value="2">Sakit</option>
                                                    <option value="3">Izin</option>
                                                    <option value="4">Alpha</option>
                                                    <option value="5">Dinas Luar</option>
                                                    <option value="6">Cuti</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div align="center">
                                        <button type="submit" id="send" class="btn btn-primary">Absen</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url(); ?>assets/tampilan_home/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/tampilan_home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url(); ?>assets/tampilan_home/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url(); ?>assets/tampilan_home/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url(); ?>assets/tampilan_home/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= base_url(); ?>assets/tampilan_home/js/freelancer.min.js"></script>

</body>

</html>