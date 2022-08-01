<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Templaterweb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5">
                <a class="nav-link active" href="{{ route('product') }}">Produk</a>
                <a class="nav-link" href="#">Bundle Design</a>
                <a class="nav-link" href="#">Bundle Code</a>
                <a class="nav-link" href="#">Flash Sale <small class="sale badge text-bg-warning">Now</small></a>

            </div>
            <div class="auth-btn mt-4 mt-lg-0">
                <a href="{{ route('login') }}" class="btn-second d-block d-lg-inline text-center">Masuk</a>
                <a href="{{ route('register') }}"
                    class="btn-first ms-lg-3 d-block d-lg-inline text-center mt-3 mt-lg-0">Daftar</a>
            </div>
        </div>
    </div>
</nav>
