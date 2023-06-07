<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arvigo #MakinPercayaDiri</title>
    <link rel="icon" type="image/x-icon"
        href="https://storage.googleapis.com/arvigo-bucket/arvigo-logo/arvigo-icon-web.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" {{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-5">
            <img src="https://storage.googleapis.com/arvigo-bucket/arvigo-logo/arvigo-logo.png" alt="arvigo-logo-nav"
                width="120">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#about">Tentang</a></li>
                </ul>
                <button class="btn rounded-pill px-3 mb-2 mb-lg-0 btn-grad" style="color: white;" data-bs-toggle="modal"
                    data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-cloud-arrow-down-fill me-2"></i>
                        <span class="small">Unduh Sekarang</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead" id="beranda">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" id="phone-screen" style="padding-bottom: 50px; margin-top: -40px">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="lh-1 mb-3" id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                #MakinPercayaDiri</spand> Bersama Arvigo
                        </h1>
                        <p class="lead fw-normal text-muted mb-5" style="padding-top: 10px">Dapatkan
                            rekomendasi fesyen terbaik, mencoba produk secara virtual di aplikasi, dan temukan penawaran
                            produk dari
                            berbagai
                            toko online & offline di Indonesia. Semuanya ada dalam satu aplikasi di Arvigo.
                            <!-- Unduh aplikasi sekarang agar
                            <spand class="bg-gradient-primary-to-secondary-text">#MakinPercayaDiri</spand> dengan
                            aplikasi Arvigo. -->
                        </p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <button class="btn-grad btn rounded-pill px-3 mb-2 mb-lg-0 btn-lg me-lg-3 mb-4 mb-lg-0"
                                style="color: white; width: 160px; height: 50px;" data-bs-toggle="modal"
                                data-bs-target="#feedbackModal">
                                <!-- <i class="bi bi-cloud-arrow-down-fill me-2"></i> -->
                                <span class="small text-center">Unduh Arvigo</span>
                            </button>
                            <button class="btn rounded-pill px-3 mb-2 mb-lg-0 btn-lg" data-bs-toggle="modal"
                                style="width: 160px; height: 50px;  background: linear-gradient(#f8f9fa, #f8f9fa) padding-box,
                            linear-gradient(to right, #24C6DC 0%, #9e2fdd 51%, #24C6DC 100%) border-box;
                          border-radius: 50em;
                          border: 1px solid transparent;"
                                data-bs-target="#feedbackModal">
                                <!-- <i class="bi bi-cloud-arrow-down-fill me-2"></i> -->
                                <span class="text-center small bg-gradient-primary-to-secondary-text">Mulai
                                    Bermitra</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="desktop-screen">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content text-center">
            <div class="container px-5">
                <!-- <h2 class="text-white display-1 lh-1 mb-4">
                    #MakinPercayaDiri
                    <br />
                    Dengan Arvigo
                </h2> -->
                <!-- <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age"
                    target="_blank">Download for free</a> -->
                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                    class="glightbox video-button">
                    <i class="bi bi-play-circle-fill bg-gradient-primary-to-secondary-text"
                        style="font-size: 80px;"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- App phone-features section-->
    <section id="features">
        <div class="container px-5 features-repsonsive">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device  mockup-->
                    <div class="features-device-mockup">
                        {{-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg> --}}
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 phone-feature">
                    <div class="">
                        <h1 class="lh-1 mb-3 " id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                Dapatkan Rekomendasi Fesyen</spand>
                        </h1>
                        <p class="lead fw-normal text-muted mb-5 " style="padding-top: 10px;">Dengan teknologi Machine
                            Learning dari Arvigo, kamu dapat mengetahui rekomendasi fesyen terbaik berdasarkan bentuk
                            wajah dan
                            kepribadian kamu. Jadi, kamu tidak perlu khawatir dengan produk yang tidak cocok atau salah
                            membeli produk fesyen.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5 features-repsonsive">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        {{-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg> --}}
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 phone-feature">
                    <div class="">
                        <h1 class="lh-1 mb-3 " id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                Coba Produk Fesyen Secara Virtual</spand>
                        </h1>
                        <p class="lead fw-normal text-muted mb-5 " style="padding-top: 10px">Dengan integrasi
                            teknologi Augmented Reality di Arvigo, kamu dapat mencoba produk
                            fesyen secara virtual di
                            manapun dan kapanpun hanya melalui smartphone kamu.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5 features-repsonsive">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        {{-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg> --}}
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 phone-feature">
                    <div class="">
                        <h1 class="lh-1 mb-3 " id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                Dapatkan Penawaran Produk Tebaik</spand>
                        </h1>
                        <p class="lead fw-normal text-muted mb-5 " style="padding-top: 10px">Kamu
                            dapat mengetahui rekomendasi penawaran produk dari toko online & offline di seluruh
                            Indonesia, sehingga memudahkan kamu menemukan produk dengan harga termurah dan terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5 features-repsonsive">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        {{-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg> --}}
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 phone-feature">
                    <div class="">
                        <h1 class="lh-1 mb-3 " id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                Arvigo Search Engine</spand>
                        </h1>
                        <p class="lead fw-normal text-muted mb-5 " style="padding-top: 10px">Arvigo Search Engine
                            adalah fitur pencarian dengan integrasi Machine Learning untuk menamplikan
                            rekomendasi produk fesyen berdasarkan input dari pengguna.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5 features-repsonsive">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        {{-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg> --}}
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 phone-feature">
                    <div class="">
                        <h1 class="lh-1 mb-3 " id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                Arvigo Mitra</spand>
                        </h1>
                        <p class="lead fw-normal text-muted mb-5 " style="padding-top: 10px">Ayo bermitra bersama
                            Arvigo untuk tingkatkan kualitas
                            layanan dan penjualan toko online
                            atau offline kamu di Arvigo Mitra.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        {{-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg> --}}
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="max-width: 100%; height: 100%">
                                        <source
                                            src="https://storage.googleapis.com/arvigo-bucket/assets/demo-screen.mp4"
                                            type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="phone-feature">
                        <h1 class="lh-1 mb-3 phone-feature " id="judul">
                            <spand class="bg-gradient-primary-to-secondary-text">
                                Arvigo Link</spand>
                        </h1>
                        <p class="lead fw-normal text-muted mb-5 " style="padding-top: 10px">Tautkan Arvigo Link di
                            toko e-commerce kamu, agar pelanggan dapat mencoba produk di Arvigo sesuai dengan produk
                            yang kamu tawarkan dan tingkatkan kepuasan
                            layanan kepada pelanggan di toko e-commerce kamu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="about">
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <p class="text-white" style="font-size: calc(1.3rem + 0.6vw);">"Visi kami adalah menjadi
                            platform inovatif bagi semua UMKM
                            untuk mencapai kepuasan pelanggan yang maksimal dalam mendapatkan produk terbaik"</p>
                        {{-- <img src="https://storage.googleapis.com/arvigo-bucket/assets/tnw-logo.svg" alt="..."
                        style="height: 3rem" /> --}}
                    </div>
                </div>
            </div>
        </aside>
        <!-- Basic features section-->
        {{-- <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4">Enter a new age of web design</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">This section is perfect for featuring some
                        information about your application, why it was built, the problem it solves, or anything else!
                        There's plenty of space for text here, so don't worry about writing too much.</p>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                            src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                </div>
            </div>
        </div>
    </section> --}}

        <!-- Team section-->
        <section class="bg-light" id="phone-team">
            <h2 class="text-center display-4 team-font"
                style="margin-bottom: 40px; font-size: calc(1.3rem + 0.6vw); !important;">Ini
                Kami, <span class="text-center bg-gradient-primary-to-secondary-text">Arvigo
                    Team</span>
            </h2>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card-person shadow-sm swiper-slide" data-swiper-autoplay="2000">
                            <div class="image-content">
                                <div class="overlay"></div>

                                <div class="card-image">
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                        alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h3 style="font-size: 12pt" class="name">Yischard Meynardi Borean</h3>
                                <p class="description">Politeknik Negeri Ujung Pandang</p>
                                <p class="description1 bg-gradient-primary-to-secondary-text" style="margin-top: 0px">
                                    Team Lead & Cloud Engineer
                                </p>

                            </div>
                        </div>
                        <div class="card-person shadow-sm swiper-slide" data-swiper-autoplay="2000">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                        alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 style="font-size: 12pt" class="name">Yusuf Wibisono</h2>
                                <p class="description">Universitas Bina Nusantara</p>
                                <p class="description1 bg-gradient-primary-to-secondary-text">Product Manager & Backend
                                </p>
                            </div>
                        </div>
                        <div class="card-person shadow-sm  swiper-slide" data-swiper-autoplay="2000">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                        alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 style="font-size: 12pt" class="name">Irfan Maulana</h2>
                                <p class="description" style="font-size: 9pt !important">Universitas Singaperbangsa
                                    Karawang</p>
                                <p class="description1 bg-gradient-primary-to-secondary-text">Android Developer</p>

                            </div>
                        </div>
                        <div class="card-person shadow-sm  swiper-slide" data-swiper-autoplay="2000">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                        alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 style="font-size: 12pt" class="name">Ryo Martin Sopian</h2>
                                <p class="description">Universitas Bandar Lampung</p>
                                <p class="description1 bg-gradient-primary-to-secondary-text">Android Developer</p>

                            </div>
                        </div>
                        <div class="card-person shadow-sm swiper-slide" data-swiper-autoplay="2000">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                        alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 style="font-size: 12pt" class="name">Safrizal Ardana Ardiyansa</h2>
                                <p class="description">Universitas Brawijaya</p>
                                <p class="description1 bg-gradient-primary-to-secondary-text">Machine Learning Engineer
                                </p>
                            </div>
                        </div>
                        <div class="card-person shadow-sm  swiper-slide" data-swiper-autoplay="2000">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                        alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 style="font-size: 12pt" class="name">Andre Christoga Pramaditya</h2>
                                <p class="description">Universitas Indonesia</p>
                                <p class="description1 bg-gradient-primary-to-secondary-text">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination" style="position: relative; margin-top: 30px;"></div>
            </div>
        </section>

        {{-- Team Section Desktop --}}
        <section class="bg-light" style="padding-left: 140px; padding-right: 140px" id="desktop-team">
            <h2 class="text-center display-4 team-font"
                style="margin-bottom: 40px; font-size: calc(1.5rem + 0.6vw); !important;">Ini
                Kami, <span class="text-center bg-gradient-primary-to-secondary-text">Arvigo
                    Team</span>
            </h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-3 justify-content-md-center">
                <div class="col col-lg-3">
                    <div class="card-person shadow-sm swiper-slide">
                        <div class="image-content">
                            <div class="overlay"></div>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                    alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 style="font-size: 11.5pt" class="name">Safrizal Ardana Ardiyansa</h2>
                            <p class="description">Universitas Brawijaya</p>
                            <p class="description1 bg-gradient-primary-to-secondary-text" style="margin-top: 0px">
                                Machine Learning Engineer
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card-person shadow-sm swiper-slide">
                        <div class="image-content">
                            <div class="overlay"></div>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                    alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 style="font-size: 11.5pt" class="name">Andre Christoga Pramaditya</h2>
                            <p class="description">Universitas Indonesia</p>
                            <p class="description1 bg-gradient-primary-to-secondary-text" style="margin-top: 0px">
                                Machine Learning Engineer
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card-person shadow-sm swiper-slide">
                        <div class="image-content">
                            <div class="overlay"></div>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                    alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 style="font-size: 11.5pt" class="name">Ryo Martin Sopian</h2>
                            <p class="description">Universitas Bandar Lampung</p>
                            <p class="description1 bg-gradient-primary-to-secondary-text" style="margin-top: 0px">
                                Android Developer
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-4 justify-content-md-center"
                style="margin-top: 25px">
                <div class="col col-lg-3">
                    <div class="card-person shadow-sm swiper-slide">
                        <div class="image-content">
                            <div class="overlay"></div>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                    alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 style="font-size: 11.5pt" class="name">Irfan Maulana</h2>
                            <p class="description" style="font-size: 9pt !important">Universitas Singaperbangsa
                                Karawang</p>
                            <p class="description1 bg-gradient-primary-to-secondary-text ">Android Developer</p>

                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card-person shadow-sm swiper-slide">
                        <div class="image-content">
                            <div class="overlay"></div>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                    alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 style="font-size: 11.5pt" class="name">Yusuf Wibisono</h2>
                            <p class="description">Universitas Bina Nusantara</p>
                            <p class="description1 bg-gradient-primary-to-secondary-text">Product Manager & Backend

                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card-person shadow-sm swiper-slide">
                        <div class="image-content">
                            <div class="overlay"></div>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80"
                                    alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 style="font-size: 11.5pt" class="name">Yischard Meynardi Borean</h2>
                            <p class="description">Politeknik Negeri Ujung Pandang</p>
                            <p class="description1 bg-gradient-primary-to-secondary-text" style="margin-top: 0px">
                                Team Lead & Cloud Engineer

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="supporter-desktop" class="bg-light"
            style="padding-left: 20px; padding-right: 20px; margin-top: -50px">
            {{-- <h2 class="text-center display-4 team-font"
            style="margin-bottom: 40px; font-size: calc(1.5rem + 0.6vw); !important;">Aplikasi Arvigo Didukung Oleh
        </h2> --}}
            <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-4 justify-content-md-center">
                <div class="col col-lg-2">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/bangkit.png" alt="bangkit-logo"
                            height="35px">
                    </div>
                </div>
                <div class="col col-lg-2">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/google.png" alt="bangkit-logo"
                            height="35px">
                    </div>
                </div>
                <div class="col col-lg-2">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/goto.png" alt="bangkit-logo"
                            height="35px">
                    </div>
                </div>
                <div class="col col-lg-2">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/traveloka.webp"
                            alt="bangkit-logo" height="75px" style="margin-top
                        : -30px">
                    </div>
                </div>
            </div>
        </section>

        <section id="supporter-mobile" class="bg-light"
            style="padding-left: 19px; padding-right: 17px; margin-top: -100px">
            {{-- <h2 class="text-center display-4 team-font"
            style="margin-bottom: 40px; font-size: calc(1.5rem + 0.6vw); !important;">Aplikasi Arvigo Didukung Oleh
        </h2> --}}
            <div class="row justify-content-md-center">
                <div class="col">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/bangkit.png" alt="bangkit-logo"
                            height="17px">
                    </div>
                </div>
                <div class="col">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/google.png" alt="bangkit-logo"
                            height="17px">
                    </div>
                </div>
                <div class="col">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/goto.png" alt="bangkit-logo"
                            height="17px">
                    </div>
                </div>
                <div class="col">
                    <!-- Feature item-->
                    <div class="text-center">
                        <img src="https://storage.googleapis.com/arvigo-bucket/assets/traveloka.webp"
                            alt="bangkit-logo" height="37px" style="margin-top
                        : -10px">
                    </div>
                </div>
            </div>
        </section>
        </section>

        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5">
                <h2 class="team-font text-center text-white font-alt mb-4">Ayo Unduh Aplikasi dan Bermitra Bersama
                    Arvigo Sekarang!</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <button class=" btn rounded-pill px-3 mb-2 mb-lg-0 btn-lg me-lg-3 mb-4 mb-lg-0"
                        style="color:white;  
                border: 1px solid; width: 160px; height: 50px;"
                        data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <!-- <i class="bi bi-cloud-arrow-down-fill me-2"></i> -->
                        <span class="small text-center">Unduh Arvigo</span>
                    </button>
                    <button class="btn rounded-pill px-3 mb-2 mb-lg-0 btn-lg" data-bs-toggle="modal"
                        data-bs-target="#feedbackModal"
                        style="color:white;  
                    border: 1px solid; width: 160px; height: 50px;">
                        <!-- <i class="bi bi-cloud-arrow-down-fill me-2"></i> -->
                        <span class="text-center small">Mulai Bermitra</span>
                    </button>
                </div>
            </div>

            <!-- Footer-->
            {{-- <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">Arvigo</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer> --}}
        </section>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                </div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email"
                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                    required.
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                    required.
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled"
                                    id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src=" {{ asset('js/jquery.js') }}"></script>
        <script src=" {{ asset('js/glightbox.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src=" {{ asset('js/scripts.js') }}"></script>
        <!-- Swiper JS -->
        <script src=" {{ asset('js/swiper-bundle.min.js') }}"></script>

        <script src=" {{ asset('assets/js/glightbox.min.js') }}"></script>
        <script>
            //========= glightbox
            GLightbox({
                'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
                'type': 'video',
                'source': 'youtube', //vimeo, youtube or local
                'width': 900,
                'autoplayVideos': true,
            });
        </script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

{{-- <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Device Mockups</h3>
                                    <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop
                                        required!</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Flexible Use</h3>
                                    <p class="text-muted mb-0">Put an image, video, animation, or anything else in the
                                        screen!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Free to Use</h3>
                                    <p class="text-muted mb-0">As always, this theme is free to download and use for
                                        any
                                        purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Open Source</h3>
                                    <p class="text-muted mb-0">Since this theme is MIT licensed, you can use it
                                        commercially!</p>
                                </div>
                            </div>
                        </div> --}}
