@extends('layouts.app')

@section('title')
    Product Detail
@endsection

@section('content')
    <!-- Main Detail -->
    <section class="detail mt-4">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Web App</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Gallery Detail -->
            <div class="row mt-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="images/detail1.png" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="row text-center text-lg-start">
                        <div class="col-6">
                            <img src="images/detail2.png" class="img-fluid" alt="" />
                        </div>
                        <div class="col-6">
                            <img src="images/detail3.png" class="img-fluid" alt="" />
                        </div>
                        <div class="col-6">
                            <img src="images/detail4.png" class="img-fluid mt-3" alt="" />
                        </div>
                        <div class="col-6">
                            <img src="images/detail5.png" class="img-fluid mt-3" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Info -->
            <div class="row mt-5 text-white justify-content-between">
                <div class="col-lg-4">
                    <div class="rate d-flex align-items-center">
                        <div class="ico me-2">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        ( 120 Terjual )
                    </div>
                    <h1 class="name-product mt-2">BookStore - Web App</h1>
                    <p class="owner">By <a href="#">UICreativeStudio</a></p>
                    <p class="price mt-5">
                        Rp 120,000 <small>(*Tidak ada biaya tambahan)</small>
                    </p>
                </div>

                <div class="col-lg-3">
                    <div class="d-flex justify-content-lg-between">
                        <div class="view d-flex align-items-center">
                            <i class="bx bx-show"></i>
                            <p class="m-0 ms-2">1,230 views</p>
                        </div>
                        <div class="review d-flex align-items-center ms-4 ms-lg-0">
                            <i class="bx bx-chat"></i>
                            <p class="m-0 ms-2">230 Review</p>
                        </div>
                    </div>
                    <a href="{{ route('cart') }}" class="btn-first d-block mt-5 text-center">Tambah ke Keranjang</a>
                    <a href="#" class="btn-second d-block mt-3 text-center">Tambah ke wishlist</a>
                    <a href="#" class="d-block text-center mt-3">Preview Design</a>
                </div>
            </div>

            <hr />

            <!-- Overview -->
            <div class="row text-white">
                <div class="col-sm-9">
                    <h1 class="heading">Overview</h1>
                    <p class="m-0 mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Senectus
                        feugiat nec integer pretium sit montes, mattis. Eu lorem suscipit
                        aliquet pharetra, at. Lobortis aliquet commodo, sed aliquam
                        laoreet cras proin diam. Eu quis imperdiet facilisis volutpat
                        arcu, turpis sit cum. Tincidunt phasellus nisi pulvinar vitae. Nec
                        vitae interdum eu facilisis et eu. Proin neque nam volutpat
                        elementum cras sit turpis blandit sit. Mauris consectetur egestas
                        tempor st suspendisse bibendum quam dictum sollicitudin. Senectus
                        condimentum pharetra tellus cursus scelerisque euismod quam
                        euismod. Ultricies pulvinar sit sed diam purus, egestas lorem quam
                        ante.
                    </p>
                </div>
            </div>

            <!-- Benefit -->
            <div class="row row-benefit mt-5">
                <div class="col-12 text-white mb-4">
                    <h1 class="heading">Apa Yang Akan Anda Dapatkan?</h1>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="images/screen.png" class="img-fluid" alt="" />
                        <p>8 Design Screen</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="images/component.png" class="img-fluid" alt="" />
                        <p>Component Design</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="images/guide.png" class="img-fluid" alt="" />
                        <p>Styleguide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="images/icon.png" class="img-fluid" alt="" />
                        <p>Free Icon</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="images/font.png" class="img-fluid" alt="" />
                        <p>Fonts Siap Pakai</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img src="images/file.png" class="img-fluid" alt="" />
                        <p>File Project</p>
                    </div>
                </div>
            </div>

            <!-- Product Relate -->
            <div class="row row-relate text-white mt-5">
                <div class="col-12 mt-5 relate">
                    <h1 class="heading">Mungkin Anda Suka Ini</h1>
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
                                <a href="product-detail.html" class="name">Plantshop</a>
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
                                <a href="product-detail.html" class="name">Plantshop</a>
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
                            <img src="images/product1.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="product-detail.html" class="name">Plantshop</a>
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
                            <img src="images/product2.png" class="img-fluid" alt="" />
                            <div class="bg-shadow position-absolute top-0 start-0">
                                <div class="categori-label px-3 py-1 rounded-3 text-white">
                                    Landing Page
                                </div>
                            </div>
                        </div>
                        <div class="detail d-flex justify-content-between mt-4">
                            <div>
                                <a href="product-detail.html" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="price m-0 mb-1">Rp 120,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review -->
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="heading text-white">Customer Review</h1>
                    <hr />
                </div>
            </div>
            <div class="row row-review">
                <div class="col-sm-5 mt-4">
                    <div class="card bg-transparent">
                        <div class="user d-flex justify-content-between">
                            <div class="profile d-flex align-items-center">
                                <img src="images/testi.png" class="img-fluid" width="50" alt="" />
                                <div class="ms-3">
                                    <p class="username m-0">Mardha Mardiya</p>
                                    <p class="title m-0">Creator</p>
                                </div>
                            </div>
                            <p class="date">2 Minggu yang lalu</p>
                        </div>
                        <div class="rate mt-4">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <p class="m-0 mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita, vero!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-review mt-4">
                <div class="col-sm-5 mt-4">
                    <div class="card bg-transparent">
                        <div class="user d-flex justify-content-between">
                            <div class="profile d-flex align-items-center">
                                <img src="images/testi.png" class="img-fluid" width="50" alt="" />
                                <div class="ms-3">
                                    <p class="username m-0">Mardha Mardiya</p>
                                    <p class="title m-0">Creator</p>
                                </div>
                            </div>
                            <p class="date">2 Minggu yang lalu</p>
                        </div>
                        <div class="rate mt-4">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <p class="m-0 mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita, vero!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-review mt-4">
                <div class="col-sm-5 mt-4">
                    <div class="card bg-transparent">
                        <div class="user d-flex justify-content-between">
                            <div class="profile d-flex align-items-center">
                                <img src="images/testi.png" class="img-fluid" width="50" alt="" />
                                <div class="ms-3">
                                    <p class="username m-0">Mardha Mardiya</p>
                                    <p class="title m-0">Creator</p>
                                </div>
                            </div>
                            <p class="date">2 Minggu yang lalu</p>
                        </div>
                        <div class="rate mt-4">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <p class="m-0 mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Expedita, vero!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
