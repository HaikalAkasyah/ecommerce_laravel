@extends('layouts.admin.main')
@section('title', 'Admin Detail Product')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Produk</h1>
            <div class="section-header-breadcrumb">
<<<<<<< HEAD
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.product') }}">Produk</a>
                </div>
=======
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.product') }}">Produk</a></div>
>>>>>>> fb6f8d9 (modul 4)
                <div class="breadcrumb-item">Detail Produk</div>
            </div>
        </div>

<<<<<<< HEAD
        <a href="{{ route('admin.product') }}" class="btn btn-icon icon-left btn-warning">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>

        <div class="row mt-4">
            <div class="col-12 col-md-8 col-lg-6 m-auto">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image"
                             style="background-image: url('{{ asset('images/' . $product->image) }}');">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">
                            <a href="#">{{ $product->name }}</a>
                            <div class="bullet"></div>
                            <a href="#">{{ $product->category }}</a>
                        </div>
                        <div class="article-title">
                            <h2>Harga: {{ $product->price }} Points</h2>
                        </div>
                        <hr>
                        <p>{{ $product->description }}</p>
                    </div>
=======
        <a href="{{ route('admin.product') }}" class="btn btn-icon icon-left btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>

        <div class="row mt-4">
            <div class="col-12 col-md-4 col-lg-12 m-auto">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="{{asset('images/' . $data->image) }}"></div>
                    </div>
                <div class="article-details">
                    <div class="article-category"><a href="#">{{ $data->name }}</a><div class="bullet"></div> <a href="#">{{ $data->category }}</a></div>
                    <div class="article-category"><a href="#">{{ $data->nama_distributor }}</a></div>
                    <div class="article-title">
                        <h2>
                            @if ($data->discount > 0)
                                <span style="text-decoration: line-through; color: black;">{{ $data->price }} Points</span>
                                <span class="ml-2" style="color: red;">{{ $data->price - ($data->price * $data->discount / 100) }} Points</span>
                            @else
                                <!-- No discount -->
                                Harga: {{ $data->price }} Points
                            @endif
                        </h2>
                    </div>
                    <hr>
                    <p>
                        {{ $data->description }}
                    </p>
                </div>
>>>>>>> fb6f8d9 (modul 4)
                </article>
            </div>
        </div>
    </section>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> fb6f8d9 (modul 4)
