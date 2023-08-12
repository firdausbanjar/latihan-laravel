@extends('layout.global')

@section('pageTitle')
    Edit Produk
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('products.update', [$product->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="product-name">Nama Produk</label>
                                <input type="text" class="form-control" id="product-name" name="product-name"
                                    value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="product-category">Kategori Produk</label>
                                <input type="text" class="form-control" id="product-category" name="product-category"
                                    value="{{ $product->category }}">
                            </div>
                            <div class="form-group">
                                <label for="product-price">Harga Produk</label>
                                <input type="number" class="form-control" id="product-price" name="product-price"
                                    value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="description" name="description" rows="4" cols="50">{{ $product->description }}</textarea>
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
