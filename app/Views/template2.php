<?php $sess = session(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('public/main/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/main/css/custom.css') ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="icon" type="image/png" href="<?= base_url('public/main/images/favico.png ') ?>" />
     <!-- toast -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <title>Mitrarenov</title>
</head>

<body>
    <header class="header">
        <div class="header-top">
            <div class="header-inner">
                <div class="d-flex align-items-center">
                    <div class="w-100">
                        Belum memiliki akun ? <a href="<?= base_url('member/register') ?>" class="text-warning font-weight-bold">Registrasi sekarang</a>
                    </div>
                    <div class="w-100 text-right">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a href=" https://bit.ly/whatsapp-mitrarenov" target="_blank" class="nav-link">
                                    <i class="ico ico-phone"></i> <span class="font-weight-bold">Call Center</span> 0822
                                    9000 9990
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="ico ico-download"></i> <span class="font-weight-bold">Unduh Aplikasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="header-inner">
                <div class="d-flex align-items-center header-row">
                    <div class="header-logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('public/main/images/logo-mitrarenov.png') ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <div class="login-mobile">
                            <a href="<?= base_url('member/login') ?>" class="nav-link px-0">
                                <i class="ico ico-user"></i> Login / Daftar
                            </a>
                        </div>
                        <?php $currentURL = current_url(); ?>
                        <ul class="nav main-nav">
                            <li class="nav-item">

                                <a href="<?= base_url() . '/' ?>" class="nav-link <?php if ($currentURL == base_url() . '/') echo "active"; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('simulasi-kpr') ?>" class="nav-link <?php if ($currentURL == base_url('simulasi-kpr')) echo "active"; ?>">Simulasi KPR</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('tentang-kami') ?>" class="nav-link <?php if ($currentURL == base_url('tentang-kami')) echo "active"; ?>">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('/#ckk') ?>" class="nav-link <?php if ($currentURL == base_url('/#ckk')) echo "active"; ?>">Cara Kerja</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kontak') ?>" class="nav-link <?php if ($currentURL == base_url('kontak')) echo "active"; ?>">Hubungi Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('artikel') ?>" class="nav-link <?php if ($currentURL == base_url('artikel')) echo "active"; ?>">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('/#jasa') ?>" class="nav-link <?php if ($currentURL == base_url('/#jasa')) echo "active"; ?>">Order Jasa</a>
                            </li>
                        </ul>
                        <ul class="nav justify-content-end mobile-call-center">
                            <li class="nav-item">
                                <a href=" https://bit.ly/whatsapp-mitrarenov" class="nav-link px-0">
                                    <i class="ico ico-phone"></i> <span class="font-weight-bold">Call Center</span> 0822
                                    9000 9990
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link px-0">
                                    <i class="ico ico-download"></i> <span class="font-weight-bold">Unduh Aplikasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-nav-second">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <!-- <a href="keranjang.html" class="nav-link">
                                    <i class="ico ico-cart"></i>
                                    <span class="badge">1</span>
                                </a> -->
                            </li>
                            <?php if ($sess->get('logged_in') == TRUE) { ?>
                                <li class="nav-item">
                                    <a href="percakapan.html" class="nav-link">
                                        <i class="ico ico-chat"></i>
                                        <span class="badge">2</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="notifDropdown" role="button" data-toggle="dropdown" data-offset="40" aria-expanded="false">
                                        <i class="ico ico-bell"></i>
                                        <span class="badge">1</span>
                                    </a>
                                    <div class="dropdown-menu notif-dropdown dropdown-menu-right" aria-labelledby="notifDropdown">
                                        <div class="mt-3">
                                            <div class="row">
                                                <div class="col-md-4 mb-3 pl-4 text-primary font-weight-bold">Notifikasi</div>
                                                <div class="col-md-8 mb-3 text-right">
                                                    <a href="#" class="read-all-notif">Tandai sudah dibaca semua <i class="ico ico-check-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="dropdown-item new-notif" href="#">
                                            <p class="font-weight-bold">Lorem ipsum dolor sit amet</p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua.
                                            </p>
                                            <p class="text-right mb-0">11.30</p>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <p class="font-weight-bold">Lorem ipsum dolor sit amet</p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua.
                                            </p>
                                            <p class="text-right mb-0">11.30</p>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <p class="font-weight-bold">Lorem ipsum dolor sit amet</p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua.
                                            </p>
                                            <p class="text-right mb-0">11.30</p>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ($sess->get('logged_in') == FALSE) { ?>
                                <li class="nav-item mobile-off">
                                    <a href="<?= base_url('member/login') ?>" class="nav-link btn btn-outline-primary ml-3">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item mobile-off">
                                    <a href="<?= base_url('member/register') ?>" class="nav-link btn btn-primary ml-3">
                                        Register
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item mobile-off">
                                    <a href="<?= base_url('member/akun') ?>" class="nav-link">
                                        <i class="ico ico-user"></i>
                                    </a>
                                </li>
                            <?php } ?>

                            <li class="nav-item btn-nav-mobile">
                                <a href="#" class="nav-link pr-0">
                                    <div class="humburger-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper">
        <div class="page-title">
            <a href="#" class="menu-nav-mobile">
                <div class="humburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <h1>Akun</h1>
        </div>

        <div class="container-md account-section">
            <div class="card card-border">
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-lg-3 col-left">
                            <div class="card-nav card-menu-nav">
                                <a href="#" class="close-nav">
                                    <i class="ico ico-close"></i>
                                </a>
                                <div class="account-user mb-4">
                                    <div class="img-user">
                                        <div class="img-user-inner">
                                            <?php if(empty($akun->photo)): ?>
                                                <img src="<?= base_url('public/main/images/article-sd.jpg') ?>" alt="">                                            
                                            <?php else: ?>
                                                <img src="<?= base_url('public/images/pp/'. $akun->photo) ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="data-user">
                                        <p class="username"><?= $akun->name ?></p>
                                        <p><?= $sess->get('user_email') ?></p>
                                        <p><?= $akun->telephone ?></p>
                                    </div>
                                    <div class="action-user">
                                        <a href="<?= base_url('member/edit_profile') ?>"><i class="ico ico-edit"></i></a>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-12">
                                        <p class="text-grey text-14 mb-1">Kode Referal</p>
                                    </div>
                                    <div class="col-8">
                                        <div class="reveral" id="reveral"><?= $akun->referal ?></div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="#" onclick="copyToClipboard('#reveral')"><i class="ico ico-copy"></i></a>
                                    </div>
                                </div>

                                <div class="menu-list">
                                    <ul class="nav flex-column nav-account">
                                        <li class="nav-item">
                                            <a href="<?= base_url('member/akun') ?>" class="nav-link active">
                                                <div class="nav-ico"><i class="ico ico-hammer"></i></div>
                                                <div>Project Berlangsung</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('member/riwayat') ?>" class="nav-link ">
                                                <div class="nav-ico"><i class="ico ico-history"></i></div>
                                                <div>Riwayat Dok. Project</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('member/ubah_password') ?>" class="nav-link ">
                                                <div class="nav-ico"><i class="ico ico-lock"></i></div>
                                                <div>Ubah Password</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('member/qa') ?>" class="nav-link ">
                                                <div class="nav-ico"><i class="ico ico-question"></i></div>
                                                <div>Tanya Jawab</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('member/tentang-mitra') ?>" class="nav-link ">
                                                <div class="nav-ico"><i class="ico ico-info"></i></div>
                                                <div>Tentang Mitrarenov</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('member/syarat') ?>" class="nav-link ">
                                                <div class="nav-ico"><i class="ico ico-document"></i></div>
                                                <div>Syarat dan Ketentuan</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= site_url('home/logout') ?>" class="nav-link">
                                                <div class="nav-ico"><i class="ico ico-power-off"></i></div>
                                                <div>Logout</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?= $this->renderSection('content') ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="btn-whatsapp">
        <a href=" https://bit.ly/whatsapp-mitrarenov" target="_blank">
            <div class="whatsapp-inner">
                <i class="ico ico-whatsapp"></i>
            </div>
        </a>
    </div>

    <footer class="footer">
        <div class="section-inner py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="#">
                        <img src="<?= base_url('public/main/images/logo-mitrarenov-white.svg') ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-lg-5">
                            <h5>Info Kontak</h5>

                            <div class="d-flex mb-2 align-items-center">
                                <div class="icon-cnt">
                                    <i class="ico ico-phone-white"></i>
                                </div>
                                <div class="pl-3">0822 9000 9990</div>
                            </div>
                            <div class="d-flex mb-2 align-items-center">
                                <div class="icon-cnt">
                                    <i class="ico ico-location"></i>
                                </div>
                                <div class="pl-3">
                                    Rukan Taman Pondok Kelapa Blok F No.1, Jaktim
                                </div>
                            </div>
                            <div class="d-flex mb-2 align-items-center">
                                <div class="icon-cnt">
                                    <i class="ico ico-mail-white"></i>
                                </div>
                                <div class="pl-3">
                                    info@mitrarenov.com
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-7">
                            <h5>Peroleh Bantuan</h5>
                            <div class="row">
                                <div class="col-lg-7">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link px-0">
                                                Informasi pengiriman
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Syarat & ketentuan penjualan
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Pengembalian uang
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Pemberitahuan privasi
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                FAQ Belanja
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link px-0">
                                                Partner
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Disclaimer
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                User Privacy
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Application privacy
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Complaint
                                            </a>
                                            <a href="#" class="nav-link px-0">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <h5>PARTNER</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link px-0">
                                        Daftar Rekanan
                                    </a>
                                    <a href="#" class="nav-link px-0">
                                        Karir
                                    </a>
                                    <a href="#" class="nav-link px-0">
                                        Perawatan Rumah
                                    </a>
                                    <a href="#" class="nav-link px-0">
                                        Interior
                                    </a>
                                    <a href="#" class="nav-link px-0">
                                        Pengurusan IMB
                                    </a>
                                    <a href="#" class="nav-link px-0">
                                        Jasa Arsitek
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-lg-7">
                            <h5 class="mb-3">Ikuti Kami di Sosial media</h5>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-facebook"></i>
                            </a>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-instagram"></i>
                            </a>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-twitter"></i>
                            </a>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-youtube"></i>
                            </a>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-tiktok"></i>
                            </a>

                            <h5 class="mt-4 mb-3">Unduh Aplikasi</h5>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-playstore"></i>
                            </a>
                            <a href="#" class="mr-4 mb-3">
                                <i class="ico ico-ios"></i>
                            </a>

                            <h5 class="mt-5 mb-3">TETAP TERHUBUNG</h5>
                            <div class="newsletter">
                                <input type="text" class="form-control" placeholder="Masukkan email anda disini">
                                <button type="submit" class="btn">LANGGANAN</button>
                            </div>
                            <p class="mt-3">
                                Tetap up to date dengan berita terbaru
                                dan penawaran khusus kami.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <h5>We accept:</h5>
            <div class="payment-bank">
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/mastercard-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/visa-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/shopepay-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/akulaku-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/uob-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/octo-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/bca-clickpay-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/indomaret-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/alfamart-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/bri-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/bca-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/bca-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/bni-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/mandiri-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="bank-logo">
                    <img src="<?php echo base_url('public/main/images/payment/danamon-logo.png'); ?>" class="img-fluid" alt="">
                </div>
                <div class="row payment-options">

                    <div class="col-3 mb-2">

                    </div>
                    <div class="col-3 mb-2">

                    </div>
                    <div class="col-3 mb-2">

                    </div>
                    <div class="col-3 mb-2">

                    </div>
                </div>
            </div>


        </div>
        <hr>
        <div class="section-inner py-3">
            <div class="row">
                <div class="col-md-6">
                    ©2021, mitrarenov
                </div>
                <div class="col-md-6 text-right">
                    All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="<?= base_url('public/main/js/script-bundle.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/main/js/leaflet.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/main/js/leaflet-src.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/main/js/esri-leaflet-debug.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/main/js/esri-leaflet-geocoder-debug.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/main/js/script.js') ?>"></script>
    <!-- toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
	$(document).ready(() => {
	<?php if (session()->get('toast')) { ?>
            toastr.options.closeButton = true;
            var toastvalue = "<?php echo session()->get('toast') ?>";
            var status = toastvalue.split(":")[0];
            var message = toastvalue.split(":")[1];
            if (status === "success") {
            toastr.success(message, status);
            } else if (status === "error") {
            toastr.error(message, status);
            } else if (status == "warn") {
            toastr.warning(message, status);
            }
      <?php } ?>
	});
</script>
    <?= $this->renderSection('script') ?>

</body>

</html>