@extends('layouts.app')

@section('title')
    Cart Page
@endsection

@section('content')
    <!-- content cart -->
    <section class="cart">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading">Keranjang Belanja</h1>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 table-responsive-xxl">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Paket</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <img src="images/product1.png" class="img-fluid" width="100" alt="" />
                                        <div class="detail ms-sm-4 mt-2 mt-sm-0">
                                            <p class="tb-name m-0">Bookstore website</p>
                                            <p class="tb-owner m-0">By UICreativeStudio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Bundle Design</td>
                                <td>Web App</td>
                                <td>Rp 120,000</td>
                                <td class="text-center">
                                    <a href="#"><i class="bx bxs-trash bx-tada-hover"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <img src="images/product3.png" class="img-fluid" width="100" alt="" />
                                        <div class="detail ms-sm-4 ms-sm-4 mt-2 mt-sm-0">
                                            <p class="tb-name m-0">Bookstore website</p>
                                            <p class="tb-owner m-0">By UICreativeStudio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Bundle Code</td>
                                <td>Web App</td>
                                <td>Rp 120,000</td>
                                <td class="text-center">
                                    <a href="#"><i class="bx bxs-trash bx-tada-hover"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row additional">
                <div class="col-12 mb-4">
                    <h1 class="heading">Paket Tambahan</h1>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bundleCode" />
                        <label class="form-check-label text-white" for="bundleCode">
                            Bundle Code
                            <p class="add-price m-0">+ Rp 200,000</p>
                            <a href="#">Detail</a>
                        </label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 mt-3 mt-sm-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="custom" />
                        <label class="form-check-label text-white" for="custom">
                            Jasa Custom
                            <p class="add-price m-0">+ Rp 50,000</p>
                            <a href="#">Detail</a>
                        </label>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-3 mt-sm-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="development" />
                        <label class="form-check-label text-white" for="development">
                            Jasa Development
                            <p class="add-price m-0">+ Rp 1,000,000</p>
                            <a href="#">Detail</a>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row user-info text-white mt-5">
                <div class="col-12 mb-4">
                    <h1 class="heading">Informasi Pembeli</h1>
                </div>
                <div class="col-lg-2 col-md-3">
                    <small>Nama Lengkap</small>
                    <p class="fullName m-0">Mardha Mardiya</p>
                </div>
                <div class="col-lg-3 col-md-5 mt-3 mt-sm-0">
                    <small>Email</small>
                    <p class="email m-0">mardhamardiya.18@gmail.com</p>
                </div>
                <div class="col-lg-2 col-md-4 mt-3 mt-sm-0">
                    <small>No Handphone</small>
                    <p class="phone m-0">085210827615</p>
                </div>
            </div>

            <div class="row payment-info text-white mt-5">
                <div class="col-12 mb-4">
                    <h1 class="heading">Informasi Pembayaran</h1>
                </div>
                <div class="col-lg-2 col-md-2">
                    <small>Biaya layanan</small>
                    <p class="fullName m-0">Rp 0</p>
                </div>
                <div class="col-lg-3 col-md-2 mt-3 mt-sm-0">
                    <small>Ongkir</small>
                    <p class="email m-0">Free</p>
                </div>
                <div class="col-lg-2 col-md-3 mt-3 mt-sm-0">
                    <small>Total Pembayaran</small>
                    <p class="phone m-0">Rp 190,000</p>
                </div>
                <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                    <a href="#" class="btn-second d-sm-inline-block me-sm-3 d-block text-center">Bayar Nanti</a>
                    <a href="#" class="btn-first d-block d-sm-inline-block text-center mt-3 mt-sm-0">Bayar
                        Sekarang</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 protect">
                    <div class="d-flex p-3">
                        <i class="bx bxs-check-shield"></i>
                        <div class="ms-3">
                            <h5 class="m-0">Sistem Pembayaran Menggunakan Midtrans</h5>
                            <p class="m-0">Menjadi Lebih Aman, Mudah, dan Terpercaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
