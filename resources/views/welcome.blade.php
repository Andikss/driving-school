<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <header class="navbar navbar-expand-lg bg-black">
        <div class="container-sm">
            <a class="navbar-brand" href="#">
                <h3 class="text-white mb-0">
                    Cahya Mengemudi
                </h3>
            </a>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="text-white nav-link active" aria-current="page" href="#home">Home</a>
                        <a class="text-white nav-link" href="#about">TENTANG</a>
                        <a class="text-white nav-link" href="#service">SERVICE</a>
                        <a class="text-white nav-link" href="#program">PAKET PROGRAM</a>
                        <a class="text-white nav-link" href="#testimoni">ULASAN GOOGLE</a>
                        <a class="text-white nav-link" href="#faq">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="hero" class="mb-5">
            <img src="{{ asset('assets/img/hero.webp') }}" alt="Hero" style="z-index: 1 !important">

            <div class="row" style="z-index: 999 !important">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div data-aos="fade-up">
                        <h3 class="text-white mb-4">SELAMAT DATANG,</h3>

                        <p class="text-white mb-4">Joel kursus mengemudi di Bali. Langsung BISA!</p>

                        <button class="btn btn-outline-light" style="border-radius: 0px">SAYA MAU LATIHAN</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center justify-content-center"
                        style="padding-right: 24px" data-aos="fade-up">
                        <img src="{{ asset('assets/img/about.webp') }}" alt="About" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" style="padding-left: 24px" data-aos="fade-left">
                        <span class="font-weight-bold">Tentang Kami</span>
                        <h3>
                            Cahya Private Mengemudi
                            <div class="marker"></div>
                        </h3>
                        <p class="mb-5">
                            "Cahya" Private Mengemudi adalah salah satu dri sekian banyak kursus mengemudi di Bali yang
                            teteap eksis sampai sekarang. Sudah teruji memiliki infrastruktur yang handal dan
                            berpenglaman di bidangnya.
                        </p>

                        <a href="#">
                            <div>
                                <span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="counter" class="mb-5">
            <div class="container pb-3">
                <div class="row w-100 g-3">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center" data-aos="fade-up">
                        <h4>
                            Kami Akan Terus Berkembang
                            <div class="marker"></div>
                        </h4>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 d-flex flex-row gap-5 justify-content-end">
                        <div class="row g-5" data-aos="fade-up">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="wrapper">
                                    <h1 class="mb-2">
                                        10
                                    </h1>
                                    <p>
                                        Counter <br> Penerimaan
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="wrapper">
                                    <h1 class="mb-2">
                                        17
                                    </h1>
                                    <p>
                                        Tahun <br> Pengalaman
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="wrapper">
                                    <h1 class="mb-2">
                                        5000+
                                    </h1>
                                    <p>
                                        Lulusan <br> Mengemudi
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="wrapper">
                                    <h1 class="mb-2">
                                        20+
                                    </h1>
                                    <p>
                                        Instruktur <br> Profesional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12" data-aos="fade-up">
                        <span class="font-weight-bold">Kenapa Memilih Kami</span>
                        <h3>
                            Kami Memberikan Service & Fasilitas Terbaik
                            <div class="marker"></div>
                        </h3>
                        <p>
                            Beberapa keunggulan yang kami miliki untuk menjaga kualitas dan mutu pengerjaan yang baik
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-end"
                        data-aos="fade-up">
                        <a href="#">
                            <div>
                                <span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card shadow-sm" data-aos="fade-up">
                            <img class="background-image" src="{{ asset('assets/img/handshake.webp') }}"
                                alt="Handshake">
                            <div class="cover">
                                <img src="{{ asset('assets/img/icons/handshake-icon.png') }}" alt="Handshake Icon">
                                <span class="text-white">
                                    Terpercaya
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card shadow-sm" data-aos="fade-up">
                            <img class="background-image" src="{{ asset('assets/img/wallet.webp') }}" alt="Wallet">
                            <div class="cover">
                                <img src="{{ asset('assets/img/icons/price-tag.png') }}" alt="Price Tag Icon">
                                <span class="text-white">
                                    Harga Kompetitif
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card shadow-sm" data-aos="fade-up">
                            <img class="background-image" src="{{ asset('assets/img/smile.webp') }}" alt="Smile">
                            <div class="cover">
                                <img src="{{ asset('assets/img/icons/smile-icon.png') }}" alt="Smile Icon">
                                <span class="text-white">
                                    Pelayanan Terbaik
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card shadow-sm" data-aos="fade-up">
                            <img class="background-image" src="{{ asset('assets/img/calendar.webp') }}"
                                alt="calendar">
                            <div class="cover">
                                <img src="{{ asset('assets/img/icons/calendar-icon.png') }}" alt="calendar Icon">
                                <span class="text-white">
                                    Jadwal Belajar Flexibel
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card shadow-sm" data-aos="fade-up">
                            <img class="background-image" src="{{ asset('assets/img/mechanics.webp') }}"
                                alt="Handshake">
                            <div class="cover">
                                <img src="{{ asset('assets/img/icons/tools-icon.png') }}" alt="Handshake Icon">
                                <span class="text-white">
                                    Maintenance Rutin
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card shadow-sm" data-aos="fade-up">
                            <img class="background-image" src="{{ asset('assets/img/driver.webp') }}"
                                alt="Handshake">
                            <div class="cover">
                                <img src="{{ asset('assets/img/icons/car-icon.png') }}" alt="Handshake Icon">
                                <span class="text-white">
                                    Gratis Antar Jemput
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="program" class="mb-5">
            <div class="container pb-4">
                <h4 style="font-weight: 600" class="text-center mb-5" data-aos="fade-up">
                    PAKET PROGRAM
                </h4>

                <p style="color: var(--main); font-weight: 550" class="mb-4" data-aos="fade-up">Paket Manual</p>

                <div class="row mb-4 g-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header mb-4">
                                <p class="mb-0">
                                    Private
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                480
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">10x pertemuan</p>
                                <p class="text-center mb-1">1x pertemuan 1 jam / +- 20km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header recomended mb-4">
                                <p class="mb-0">
                                    VIP Class
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                680
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">5x pertemuan</p>
                                <p class="text-center mb-1">1x pertemuan 2 jam / +- 40km</p>
                                <p class="text-center mb-1">Waktu belajar flexible</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header mb-4">
                                <p class="mb-0">
                                    VVIP Class
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                930
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">5x pertemuan</p>
                                <p class="text-center mb-1">1x pertemuan 1 jam / +- 40km</p>
                                <p class="text-center mb-1">Waktu belajar flexible</p>
                                <p class="text-center mb-1">Gratis antar-jemput</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header mb-4">
                                <p class="mb-0">
                                    Suka - Suka
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                80
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">Biaya dihitung perjam</p>
                                <p class="text-center mb-1">Minimal ambil 2 jam</p>
                                <p class="text-center mb-1">2 - 12x pertemuan</p>
                                <p class="text-center mb-1">Waktu belajar flexible</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p data-aos="fade-up" style="color: var(--main); font-weight: 550" class="mb-4">Paket Matic</p>

                <div class="row g-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header mb-4">
                                <p class="mb-0">
                                    Private
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                480
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">10x pertemuan</p>
                                <p class="text-center mb-1">1x pertemuan 1 jam / +- 20km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header recomended mb-4">
                                <p class="mb-0">
                                    VIP Class
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                680
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">5x pertemuan</p>
                                <p class="text-center mb-1">1x pertemuan 2 jam / +- 40km</p>
                                <p class="text-center mb-1">Waktu belajar flexible</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header mb-4">
                                <p class="mb-0">
                                    VVIP Class
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                930
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">5x pertemuan</p>
                                <p class="text-center mb-1">1x pertemuan 1 jam / +- 40km</p>
                                <p class="text-center mb-1">Waktu belajar flexible</p>
                                <p class="text-center mb-1">Gratis antar-jemput</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div data-aos="fade-up" class="program-card shadow pb-4">
                            <div class="header mb-4">
                                <p class="mb-0">
                                    Suka - Suka
                                </p>
                            </div>

                            <div class="price mb-5">
                                <span class="currency">Rp</span>
                                80
                                <span class="counter">rb</span>
                            </div>

                            <div class="detail">
                                <p class="text-center mb-1">Biaya dihitung perjam</p>
                                <p class="text-center mb-1">Minimal ambil 2 jam</p>
                                <p class="text-center mb-1">2 - 12x pertemuan</p>
                                <p class="text-center mb-1">Waktu belajar flexible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="youtube" class="mb-5">
            <div class="container">
                <p style="opacity: 0.8">
                    Silahkan pilih satuu program yang kami tanyakan khusus untuk anda dan kami pastikan manfaat yang
                    anda
                    dapatkan bernilai jauh lebih banyak daripada harga yang and bayarkan.
                </p>

                <p style="opacity: 0.8" class="mb-5">
                    Tunggu apalagi, segera hubungi kami dan manfaatkan layanan terbaik kami hanya untuk anda.
                </p>

                <iframe width="100%" data-aos="fade-up" height="550"
                    src="https://www.youtube.com/embed/A9Zd9g9atM0?si=z0lKdkwAmn96Qett" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <section id="testimoni" class="mb-5">
            <div class="container">
                <h4 style="font-weight: 600" class="text-center mb-5" data-aos="fade-up">
                    TESTIMONI
                </h4>
                <h6 class="mb-2 text-center" data-aos="fade-up">
                    Apa kata mereka tentang Joel Mengemudi
                </h6>

                <p class="text-center" data-aos="fade-up" style="font-size: small">Joel Mengemudi, Kursus Mengemudi
                    Bali</p>

                <div class="d-flex align-items-center flex-column">
                    <div class="d-flex flex-row w-100 justify-content-between" data-aos="fade-up">
                        <div class="avatar">
                            <img src="https://picsum.photos/400" alt="Avatar of Ratna Dewi" width="40"
                                style="border-radius: 50%">
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="rating">
                                    <span class="rating-number">4.9</span>
                                    <span class="star full"></span>
                                    <span class="star full"></span>
                                    <span class="star full"></span>
                                    <span class="star full"></span>
                                    <span class="star half"></span>
                                </div>

                                <small>Based on 489 reviews</small>

                                <span class="mb-3">
                                    <small style="opacity: 0.8">powered by</small>
                                    <img src="{{ asset('assets/img/icons/google-letter.png') }}" alt="google"
                                        width="50">
                                </span>

                                <button
                                    class="mb-4 btn btn-primary shadow-sm d-flex align-items-center justify-content-center gap-2"
                                    style="border-radius: 50px">
                                    review us on
                                    <div style="background: white; border-radius: 50%; padding: 4px; width: 30px; height: 30px"
                                        class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/img/icons/google-icon.png') }}" alt="google"
                                            width="20">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div data-aos="fade-up" class="d-flex flex-column align-items-center">
                        <div class="review d-flex justify-content-between mb-3">
                            <div class="avatar">
                                <img src="https://picsum.photos/100" alt="Avatar of Ratna Dewi" width="40"
                                    style="border-radius: 50%">
                            </div>
                            <div>
                                <p style="color: var(--main); font-weight: 550" class="text-center mb-1">
                                    Ratna Dewi
                                </p>
                                <p class="text-center mb-1"><small>a year ago</small></p>
                                <p class="text-center" style="opacity: 0.8">
                                    <span class="rating">
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                    </span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et iste animi hic quos
                                    labore
                                    ullam nisi, assumenda officiis debitis quae, sed quod provident nemo odit magnam.
                                    Ullam
                                    praesentium quasi neque.
                                </p>
                            </div>
                        </div>

                        <div class="review d-flex justify-content-between mb-3">
                            <div class="avatar">
                                <img src="https://picsum.photos/300" alt="Avatar of Ratna Dewi" width="40"
                                    style="border-radius: 50%">
                            </div>
                            <div>
                                <p style="color: var(--main); font-weight: 550" class="text-center mb-1">
                                    Bayu Wicaksono
                                </p>
                                <p class="text-center mb-1"><small>a year ago</small></p>
                                <p class="text-center" style="opacity: 0.8">
                                    <span class="rating">
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                    </span>
                                    Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi qui
                                    maiores
                                    amet consectetur adipisicing elit. Et iste animi hic quos labore
                                    ullam nisi, assumenda officiis debitis quae, sed quod provident nemo odit magnam.
                                    Ullam
                                    praesentium quasi neque.
                                </p>
                            </div>
                        </div>

                        <div class="review d-flex justify-content-between mb-3">
                            <div class="avatar">
                                <img src="https://picsum.photos/200" alt="Avatar of Ratna Dewi" width="40"
                                    style="border-radius: 50%">
                            </div>
                            <div>
                                <p style="color: var(--main); font-weight: 550" class="text-center mb-1">
                                    Arum Ambar
                                </p>
                                <p class="text-center mb-1"><small>a year ago</small></p>
                                <p class="text-center" style="opacity: 0.8">
                                    <span class="rating">
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                        <span class="star full"></span>
                                    </span>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis est nemo,
                                    laboriosam consectetur provident adipisci excepturi placeat ipsam repudiandae ipsum
                                    quos
                                    nulla qui nesciunt id magni maxime consequuntur expedita velit.Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Et iste animi hic quos labore ullam nisi,
                                    assumenda
                                    officiis debitis quae, sed quod provident nemo odit magnam. Ullam praesentium quasi
                                    neque.
                                </p>
                            </div>
                        </div>

                        <a href="#" class="text-center" style="color: var(--main); text-decoration: none">
                            See All Reviews
                        </a>
                    </div>

                    <div class="row g-3 my-4">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <iframe width="100%" data-aos="fade-up" height="240"
                                src="https://www.youtube.com/embed/nTFEW2ra6Qg?si=IDBck5hzHelIMk4f"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <iframe width="100%" data-aos="fade-up" height="240"
                                src="https://www.youtube.com/embed/nTFEW2ra6Qg?si=IDBck5hzHelIMk4f"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <iframe width="100%" data-aos="fade-up" height="240"
                                src="https://www.youtube.com/embed/nTFEW2ra6Qg?si=IDBck5hzHelIMk4f"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <iframe width="100%" data-aos="fade-up" height="240"
                                src="https://www.youtube.com/embed/nTFEW2ra6Qg?si=IDBck5hzHelIMk4f"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <iframe width="100%" data-aos="fade-up" height="240"
                                src="https://www.youtube.com/embed/nTFEW2ra6Qg?si=IDBck5hzHelIMk4f"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <iframe width="100%" data-aos="fade-up" height="240"
                                src="https://www.youtube.com/embed/nTFEW2ra6Qg?si=IDBck5hzHelIMk4f"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
        </section>

        <section id="faq" class="mb-5">
            <h4 style="font-weight: 600" class="text-center mb-5">
                TANYA JAWAB
            </h4>

            <div class="container">
                <hr>

                <div class="row mb-4">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center">
                        <a href="#">
                            <img src="{{ asset('assets/img/other.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                        Rute Latihannya Kemana?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        Rute latihan bisa direquest sendiri oleh murid, dan disesuaikan dengan kemampuan
                                        murid
                                        dalam penguasaan mobil
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Jika terjadi resiko dijalan bagaimana?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        Semua resiko dijalan ditanggung oleh perusahaan, jadi peserta kursus dapat
                                        belajar dengan
                                        aman.
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Instrukturnya galak gak?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        Kami pastikan instrukturnya profesional, sopan dan memiliki etika yang baik.
                                        Apabila
                                        pelayanan instruktur kami kurang memuaskan silakan hubungi : <a
                                            href="#">nomor pengaduan</a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                        Jam latihannya gimana?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body">
                                        Untuk jam latihan silahkan request, kami akan siapkan jadwal sesuai waktu luang
                                        Anda.
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                        Bisa dicicil gak bayarnya?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingFive">
                                    <div class="accordion-body">
                                        Pembayaran sangat flexible. Bisa dilakukan dalam beberapa kali pembayaran
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                        Untuk cara pembayarannya gimana?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingSix">
                                    <div class="accordion-body">
                                        Pembayaran bisa dilakukan dengan beberapa cara :

                                        <ol>
                                            <li>
                                                Transfer Bank
                                            </li>
                                            <li>
                                                Bayar tunai langsung di Kantor pada saat Pendaftaran.
                                            </li>
                                            <li>
                                                Pembayaran juga bisa di bayarkan kepada instruktur pada saat penjemputan
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                        Gimana cara daftarnya?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingSeven">
                                    <div class="accordion-body">
                                        Pendaftaran bisa dilakukan dengan 2 cara yaitu:

                                        <ol>
                                            <li>
                                                Datang langsung ke kantor cabang terdekat.
                                            </li>
                                            <li>
                                                Daftar via telepon atau WA ke <a href="#">08123456789</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                        Gimana cara daftarnya?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingEight">
                                    <div class="accordion-body">
                                        Sopiri Driving School menerapakan metode private. 1 instruktur – 1 murid
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                        Ada hitungan jarak (KM-nya) juga ngga?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingNine">
                                    <div class="accordion-body">
                                        <strong>TIDAK</strong> <br>
                                        Kami hanya menggunakan hitungan durasi.
                                        1 jam atau 2 jam sesuai paket yang diambil.
                                        Karena menurut kami kalo pakai hitungan jarak itu merugikan konsumen.
                                        Misalnya kalo jalan lancar baru 30 menit sudah menempuh jarak 20km maka latihan
                                        akan
                                        diakhiri.
                                        Di tempat kami tidak seperti itu. Di tempat kami berapun jarak yang ditempuh
                                        tidak kami
                                        hitung, karena kami hanya menggunakan hitungan durasi.
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                                        Berapa lama latihannya?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTen">
                                    <div class="accordion-body">
                                        Lama latihan tergantung dari paket yang diambil, untuk paket lengkap silakan
                                        klik <a href="#program">disini</a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="accordion-item mb-3 border-1">
                                <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
                                        Berapa biaya latihan di Sopiri Driving School?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingEleven">
                                    <div class="accordion-body">
                                        Harga mulai Rp 380 Ribu, untuk harga paket lengkapnya silakan klik disini
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="d-flex w-100 justify-content-center">
                    <button class="btn btn-outline-primary shadow-sm btn-sm">
                        SELENGKAPNYA
                    </button>
                </div>
        </section>

        <section id="end">
            <img src="{{ asset('assets/img/footer.webp') }}" alt="">
            <div class="filter"></div>

            <div class="cover">
                <h3 class="text-center text-white" data-aos="fade-up">
                    Mulai Belajar Mengemudi Dengan Kami
                </h3>
                <p class="text-center text-white mb-5" data-aos="fade-up">
                    Hubungi kami dan pesan jadalmu sekarang juga!
                </p>

                <button class="btn btn-primary shadow-sm" style="border-radius: 0px" data-aos="fade-up">
                    <i class="bi bi-whatsapp me-2"></i>
                    Hubungi Sekarang
                </button>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">

            <div class="row g-3 mb-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="{{ asset('assets/img/icons/cahya.webp') }}" alt="" width="180px"
                        class="mb-3">
                    <div>
                        <img src="{{ asset('assets/img/icons/facebook-icon.png') }}" alt="" width="50">
                        <img src="{{ asset('assets/img/icons/instagram-icon.png') }}" alt="" width="50">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mb-3">
                        <strong>ALAMAT PUSAT</strong> <br>
                        <small>Jalan Palapa No. 1 Sidakarya-Denpasar Selatan</small>
                    </div>
                    <div class="mb-3">
                        <strong>JAM KERJA</strong> <br>
                        <small>Senin - Sabtu: 08:00 - 19:00</small>
                        <small>Minggu: Libur</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mb-3">
                        <strong>EMAIL</strong> <br>
                        <small>info@cahyamengemudi.com</small>
                    </div>
                    <div class="mb-3">
                        <strong>TELEPON</strong> <br>
                        <small>0822 4725 2015</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mb-3">
                        <strong>IJIN USAHA</strong> <br>
                        <small class="mb-3">Ijin Lembaga Pelatihan Kerja
                            Nomor Induk Berusaha : 8120015241776</small>
                    </div>
                    <div>
                        <small>
                            Keputusan MENKUMHAM RI
                            NOMOR AHU-0056932.AH.01.01.Th.2018
                        </small>
                    </div>
                </div>
            </div>

            <p class="text-center mt-3 copy">
                &copy; 2024 PT Cahya Kharisma Sejahtera. All Rights Reserved
            </p>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script>
        AOS.init();

        let lastScrollTop = 0;

        $(window).scroll(function() {
            const currentScrollTop = $(this).scrollTop();
            const navbar = $(".navbar");
            const heroHeight = $('#hero').outerHeight();

            if (currentScrollTop > lastScrollTop && currentScrollTop > heroHeight) {
                navbar.removeClass("slide-down").addClass("slide-up");
            } else {
                navbar.removeClass("slide-up").addClass("slide-down");
            }

            lastScrollTop = currentScrollTop;
        });
    </script>
</body>

</html>
