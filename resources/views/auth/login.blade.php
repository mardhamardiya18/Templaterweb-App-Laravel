@extends('layouts.app')

@section('title')
    Masuk | Templeterweb
@endsection

@section('content')
    <section class="auth-register">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="/images/auth.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 offset-lg-1">
                    <h1 class="heading">Masuk</h1>
                    <p>
                        Memulai langkah dalam kembangkan bisnis anda disini
                    </p>
                    <form action="#" class="mt-5">
                        <div class="form-group">
                            <input type="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror " name="email"
                                placeholder="Email" required>
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" value="{{ old('password') }}"
                                class="form-control @error('password') is-invalid @enderror " name="password"
                                placeholder="Password" required>
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn-first btn-auth mt-4 w-100" type="submit">Masuk</button>
                        <a href="{{ route('register') }}" class="btn-second mt-3 w-100 d-inline-block text-center">Belum
                            punya akun? Daftar
                            Sekarang</a>
                        <a href="#" class="mt-3 d-inline-block">Ada kendala dengan password anda? 😕</a>
                    </form>

                    <p class="mt-4">Atau masuk menggunakan :</p>
                    <a href="#" class="btn-warning btn d-flex align-items-center justify-content-center"><i
                            class='bx bxl-google bx-sm'></i>
                        Akun Google</a>
                </div>
            </div>
        </div>
    </section>
@endsection
