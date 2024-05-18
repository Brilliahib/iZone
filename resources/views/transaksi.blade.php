@extends('layouts.main')
@section('container')
    <section class="product" style="margin: 3rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form class="card border-0 p-4 bg-white" method="post" action="/product/{{$product->id}}/checkout" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="no_seluler" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_seluler" name="no_seluler">
                        </div>
                        <div class="mb-4">
                            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" aria-label="Default select example" name="metode_pembayaran">
                                <option selected>Pilih Metode Pembayaran</option>
                                <option value="Transfer Bank">Transfer Bank</option>
                                <option value="DANA">DANA</option>
                                <option value="QRIS">QRIS</option>
                            </select>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn bg-primary text-white fw-semibold">Pesan Sekarang</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="list-product card border-0">
                        <div class="list-product-container row card-body bg-white p-4">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="img-fluid rounded-3" style="height: 400px; object-fit: cover;">
                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
