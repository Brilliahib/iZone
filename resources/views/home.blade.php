@extends('layouts.main')
@section('container')
    <section class="banner" style="margin: 2rem 0;">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/banner_2.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/banner_1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/banner_3.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="product" style="margin: 3rem 0;">
    <div class="container">
        <div class="list-product card border-0">
            <div class="list-product-container row card-body bg-white">
                <div class="heading-section" style="margin: 1rem 0;">
                    <h5 class="fw-semibold text-black">Produk Terbaru</h5>
                    <hr>
                </div>
                @foreach ($latestProducts as $product)
                    <div class="col-lg-2 mb-4">
                        <a href="/product/{{ $product->id }}" class="text-decoration-none">
                            <div class="card p-0" style="border: none;">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @endif
                                <div class="card-body p-0 mt-2 mb-0">
                                    <div class="category bg-primary rounded-pill d-inline-block mb-2">
                                        <p class="font-xs text-white mb-0 fw-semibold" style="font-size: 12px;">
                                            {{ $product->category->name }}</p>
                                    </div>
                                    <h2 class="font-base text-darkgray fw-normal"
                                        style="display: -webkit-box;
                     -webkit-line-clamp: 1; 
                    -webkit-box-orient: vertical;
                    overflow: hidden; text-align:left">
                                        {{ $product->nama }}</h2>
                                    <p class="mb-0 font-small price fw-bold text-black">Rp
                                        {{ number_format($product->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="product" style="margin: 3rem 0;">
    <div class="container">
        <div class="list-product card border-0">
            <div class="list-product-container row card-body bg-white">
                <div class="heading-section" style="margin: 1rem 0;">
                    <h5 class="fw-semibold text-black">Produk Gitar</h5>
                    <hr>
                </div>
                @foreach ($guitarProducts as $product)
                    <div class="col-lg-2 mb-4">
                        <a href="/product/{{ $product->id }}" class="text-decoration-none">
                            <div class="card p-0" style="border: none;">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @endif
                                <div class="card-body p-0 mt-2 mb-0">
                                    <div class="category bg-primary rounded-pill d-inline-block mb-2">
                                        <p class="font-xs text-white mb-0 fw-semibold" style="font-size: 12px;">
                                            {{ $product->category->name }}</p>
                                    </div>
                                    <h2 class="font-base text-darkgray fw-normal"
                                        style="display: -webkit-box;
                     -webkit-line-clamp: 1; 
                    -webkit-box-orient: vertical;
                    overflow: hidden; text-align:left">
                                        {{ $product->nama }}</h2>
                                    <p class="mb-0 font-small price fw-bold text-black">Rp
                                        {{ number_format($product->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="product" style="margin: 3rem 0;">
    <div class="container">
        <div class="list-product card border-0">
            <div class="list-product-container row card-body bg-white">
                <div class="heading-section" style="margin: 1rem 0;">
                    <h5 class="fw-semibold text-black">Produk Drum</h5>
                    <hr>
                </div>
                @foreach ($drumProducts as $product)
                    <div class="col-lg-2 mb-4">
                        <a href="/product/{{ $product->id }}" class="text-decoration-none">
                            <div class="card p-0" style="border: none;">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @endif
                                <div class="card-body p-0 mt-2 mb-0">
                                    <div class="category bg-primary rounded-pill d-inline-block mb-2">
                                        <p class="font-xs text-white mb-0 fw-semibold" style="font-size: 12px;">
                                            {{ $product->category->name }}</p>
                                    </div>
                                    <h2 class="font-base text-darkgray fw-normal"
                                        style="display: -webkit-box;
                     -webkit-line-clamp: 1; 
                    -webkit-box-orient: vertical;
                    overflow: hidden; text-align:left">
                                        {{ $product->nama }}</h2>
                                    <p class="mb-0 font-small price fw-bold text-black">Rp
                                        {{ number_format($product->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="product" style="margin: 3rem 0;">
    <div class="container">
        <div class="list-product card border-0">
            <div class="list-product-container row card-body bg-white">
                <div class="heading-section" style="margin: 1rem 0;">
                    <h5 class="fw-semibold text-black">Produk Sound</h5>
                    <hr>
                </div>
                @foreach ($soundProducts as $product)
                    <div class="col-lg-2 mb-4">
                        <a href="/product/{{ $product->id }}" class="text-decoration-none">
                            <div class="card p-0" style="border: none;">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                        class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                @endif
                                <div class="card-body p-0 mt-2 mb-0">
                                    <div class="category bg-primary rounded-pill d-inline-block mb-2">
                                        <p class="font-xs text-white mb-0 fw-semibold" style="font-size: 12px;">
                                            {{ $product->category->name }}</p>
                                    </div>
                                    <h2 class="font-base text-darkgray fw-normal"
                                        style="display: -webkit-box;
                     -webkit-line-clamp: 1; 
                    -webkit-box-orient: vertical;
                    overflow: hidden; text-align:left">
                                        {{ $product->nama }}</h2>
                                    <p class="mb-0 font-small price fw-bold text-black">Rp
                                        {{ number_format($product->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
