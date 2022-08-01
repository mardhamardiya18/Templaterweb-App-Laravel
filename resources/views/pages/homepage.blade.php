@extends('layouts.app')

@section('title')
    Templaterweb | Web Design & Developent Kit Siap Pakai
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <h1 class="heading">
                        Pilih Dan Kembangan Website Impian Kamu Disini
                    </h1>
                    <p class="subheading">
                        Platform penyedia template website kreatif dan modern
                    </p>
                    <div class="input-group mt-5">
                        <input type="text" class="form-control" placeholder="Mau cari template website apa?"
                            aria-label="Recipient's username" aria-describedby="button-addon2" />
                        <button class="btn btn-outline-danger d-flex align-items-center justify-content-center p-2"
                            type="button" id="button-addon2">
                            <i class="bx bx-search bx-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6 text-lg-end text-center p-0 mt-5 mt-lg-0">
                    <img src="images/hero-img2.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Section -->
    <section class="category section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Temukan Mulai Dari Sini</h1>
                </div>
            </div>
            <div class="row mt-4 row-btn">
                <div class="col-12">
                    <a href="#" class="btn-first mt-3">Landing Page</a>
                    <a href="#" class="btn-first mt-3">Web App</a>
                    <a href="#" class="btn-first mt-3">Dashboard Admin</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Populer Product -->
    <section class="populer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Desain Yang Lagi Populer Nih</h1>
                </div>
            </div>

            <div class="row mt-2 mt-sm-5">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product1.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div class="detail-1">
                                <a href="#" class="name" title="Plantshop website kekinian">Plantshop website
                                    kekinian</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div class="detail-1">
                                <p class="free m-0 mb-1 text-center rounded-3 py-1 px-3">Free</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product2.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div class=" w-50">
                                <a href="#" class="name">BeCreative Lorem, ipsum dolor.</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product3.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product4.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Product -->
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <h1 class="heading">Desain Yang Sedang Trending Saat Ini</h1>
                    <a href="#" class="btn-trending">Produk Lainnya</a>
                </div>
                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0">
                    <a href="#">
                        <div class="card bg-transparent">
                            <div class="img-box position-relative mx-auto">
                                <img src="images/product2.png" class="img-fluid" alt="" />
                                <div class="bg-shadow position-absolute top-0 start-0">
                                    <div class="categori-label px-3 py-1 rounded-3 text-white">
                                        Landing Page
                                    </div>

                                    <p class="sold">2.120 Terjual</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0">
                    <a href="#">
                        <div class="card bg-transparent">
                            <div class="img-box position-relative mx-auto">
                                <img src="images/product3.png" class="img-fluid" alt="" />
                                <div class="bg-shadow position-absolute top-0 start-0">
                                    <div class="categori-label px-3 py-1 rounded-3 text-white">
                                        Web App
                                    </div>

                                    <p class="sold">1.220 Terjual</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mt-3 mt-sm-0">
                    <a href="#">
                        <div class="card bg-transparent">
                            <div class="img-box position-relative mx-auto">
                                <img src="images/product4.png" class="img-fluid" alt="" />
                                <div class="bg-shadow position-absolute top-0 start-0">
                                    <div class="categori-label px-3 py-1 rounded-3 text-white">
                                        Landing Page
                                    </div>

                                    <p class="sold">920 Terjual</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Terbaru Product -->
    <section class="populer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Desain Terbaru Untuk Anda</h1>
                </div>
            </div>

            <div class="row mt-2 mt-sm-5">
                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product1.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="free m-0 mb-1 text-center rounded-3 py-1">Free</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product2.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">BeCreative</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product3.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product4.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product1.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="free m-0 mb-1 text-center rounded-3 py-1">Free</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product2.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">BeCreative</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product3.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-3">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative mx-auto">
                            <img src="images/product4.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="#" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                                <p class="views">2.1k Views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-lg-4 text-center">
                    <a href="#" class="btn-first d-block">Lihat Desain Lainnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Desain Pilihan -->
    <section class="pilihan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Desain Pilihan Dari Kami Untuk Anda</h1>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 col-main">
                    <div class="card bg-transparent">
                        <div class="img-box position-relative">
                            <img src="images/product2.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <div class="card bg-transparent">
                                <div class="img-box position-relative">
                                    <img src="images/product4.png" class="img-fluid" alt="" />
                                    <div class="bg-shadow position-absolute top-0 start-0">
                                        <div class="categori-label px-3 py-1 rounded-3 text-white">
                                            Landing Page
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="card bg-transparent">
                                <div class="img-box position-relative">
                                    <img src="images/product2.png" class="img-fluid" alt="" />
                                    <div class="bg-shadow position-absolute top-0 start-0">
                                        <div class="categori-label px-3 py-1 rounded-3 text-white">
                                            Landing Page
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3 text-center">
                            <div class="card bg-transparent">
                                <div class="img-box position-relative">
                                    <img src="images/product4.png" class="img-fluid" alt="" />
                                    <div class="bg-shadow position-absolute top-0 start-0">
                                        <div class="categori-label px-3 py-1 rounded-3 text-white">
                                            Landing Page
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3 text-center">
                            <div class="card bg-transparent">
                                <div class="img-box position-relative">
                                    <img src="images/product1.png" class="img-fluid" alt="" />
                                    <div class="bg-shadow position-absolute top-0 start-0">
                                        <div class="categori-label px-3 py-1 rounded-3 text-white">
                                            Landing Page
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscriptions -->
    <section class="subscribe">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-12">
                    <h3>Subscriptions</h3>
                    <p>Dapatkan Update Desain Terbar Dari Kami Secara Gratis</p>
                    <form action="#" class="mt-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ketik email anda disini.."
                                aria-label="Recipient's username" aria-describedby="button-addon2" />
                            <button class="btn btn-danger" type="button" id="button-addon2">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
