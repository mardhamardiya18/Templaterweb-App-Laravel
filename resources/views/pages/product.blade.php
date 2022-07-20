@extends('layouts.app')

@section('title')
    Product Page
@endsection

@section('content')
    <!-- Panel Pencarian -->
    <section class="panel">
        <div class="container">
            <div class="row text-center search position-relative">
                <div class="col-12">
                    <h1 class="heading">Semua Produk</h1>
                    <form action="" class="form-search mt-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control py-3" placeholder="Mau cari template website apa?"
                                aria-label="Recipient's username" aria-describedby="button-addon2" />
                            <button class="btn btn-danger d-flex justify-content-center align-items-center" type="button"
                                id="button-addon2">
                                <i class="bx bx-search bx-sm"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Category -->
    <section class="product-category">
        <div class="container">
            <div class="row text-sm-center">
                <div class="col-12">
                    <a href="#" class="btn-first">E-commerce</a>
                    <a href="#" class="btn-first">Company Profile</a>
                    <a href="#" class="btn-first">Personal Website</a>
                    <a href="#" class="btn-first">Gorverment</a>
                    <a href="#" class="btn-first">Bisnis</a>
                    <a href="#" class="btn-first">Health</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="product-list">
        <div class="container">
            <div class="row text-white">
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
                                <a href="{{ route('product-detail') }}" class="name">Plantshop</a>
                                <p class="owner mt-1">By <a href="#">UICreativeStudio</a></p>
                            </div>
                            <div>
                                <p class="free m-0 mb-1 text-center rounded-3 px-3 py-1">
                                    Free
                                </p>
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
                                <a href="product-detail.html" class="name">BeCreative</a>
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
                                <p class="free m-0 mb-1 text-center rounded-3 px-3 py-1">
                                    Free
                                </p>
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
                                <a href="product-detail.html" class="name">BeCreative</a>
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
            </div>
        </div>
    </section>
@endsection
