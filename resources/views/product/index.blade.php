@extends('layout.global')

@section('pageTitle')
    Daftar Produk
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right my-4">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah
                    Produk</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table" id="products-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Kategori Produk</th>
                                    <th scope="col">Harga (RP)</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ ($products->currentPage() - 1) * $products->perPage() + $key + 1 }}
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('products.edit', [$product->id]) }}"
                                                    class="btn btn-warning btn-sm mr-2">Edit</a>
                                                <form action="{{ route('products.destroy', [$product->id]) }}"
                                                    method="post" onsubmit="return confirm('Hapus Produk?')"
                                                    class="d-line">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
