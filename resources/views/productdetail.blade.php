@extends('layouts.main')
@section('container')
    <section class="product" style="margin: 3rem 0;">
        <div class="container">
            <div class="list-product card border-0">
                <div class="list-product-container row card-body bg-white p-4">
                    <div class="col-lg-6 mb-4 d-flex">
                        <div>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid rounded-3"
                                style="height: 400px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h4 class="text-black fw-normal">
                                {{ $product->nama }}</h4>
                            <hr>
                            <h5 class="mb-4 text-danger price fw-bold">Rp
                                {{ number_format($product->harga, 0, ',', '.') }}</h5>
                            <p class="mb-0">Stok : <span class="text-success">Tersedia</span></p>
                            <p class="text-black mb-0">
                                Kategori : {{ $product->category->name }}</p>
                        </div>
                        <div style="margin-top: 2rem;">
                            <a href="{{$product->id}}/checkout" class="button bg-transparent border text-danger">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="other-product" style="margin: 3rem 0;">
        <div class="container">
            <div class="list-other-product d-flex card bg-white border-0 p-4">
                <div class="heading-section" style="margin: 1rem 0;">
                    <h5 class="fw-semibold text-black">Produk Lain</h5>
                    <hr>
                </div>
                <div class="row card-body d-flex">
                    @foreach ($otherProducts as $otherProduct)
                        <div class="col-lg-2 mb-4">
                            <a href="/product/{{ $otherProduct->id }}" class="text-decoration-none">
                                <div class="card p-0" style="border: none;">
                                    @if ($otherProduct->image)
                                        <img src="{{ asset('storage/' . $otherProduct->image) }}" alt=""
                                            class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                            class="img-fluid rounded-3" style="height: 250px; object-fit: cover;">
                                    @endif
                                    <div class="card-body p-0 mt-2 mb-0">
                                        <div class="category bg-primary rounded-pill d-inline-block mb-2">
                                            <p class="font-xs text-white mb-0 fw-semibold" style="font-size: 12px;">
                                                {{ $otherProduct->category->name }}</p>
                                        </div>
                                        <h2 class="font-base text-darkgray fw-normal"
                                            style="display: -webkit-box;
                     -webkit-line-clamp: 1; 
                    -webkit-box-orient: vertical;
                    overflow: hidden; text-align:left">
                                            {{ $otherProduct->nama }}</h2>
                                        <p class="mb-0 font-small price fw-bold text-black">Rp
                                            {{ number_format($otherProduct->harga, 0, ',', '.') }}</p>
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
