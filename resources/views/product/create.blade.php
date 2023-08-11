@extends('layout.global')

@section('pageTitle')
    Tambah Produk
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product-name">Nama Produk</label>
                                <input type="text" class="form-control" id="product-name" name="product-name">
                            </div>
                            <div class="form-group">
                                <label for="product-category">Kategori Produk</label>
                                <input type="text" class="form-control" id="product-category" name="product-category">
                            </div>
                            <div class="form-group">
                                <label for="description">Harga Produk</label>
                                <input type="number" class="form-control" id="product-price" name="product-price">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="description" name="description" rows="4" cols="50"></textarea>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
