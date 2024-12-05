@extends('layouts.user.main')
@section('content')
<<<<<<< HEAD
=======

>>>>>>> fb6f8d9 (modul 4)
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Halaman Detail Produk</h1>
                <nav class="d-flex align-items-center">
<<<<<<< HEAD
                    <a href="{{ route('user.dashboard') }}">
                        Home<span class="lnr lnr-arrow-right"></span>
                    </a>
=======
                    <a href="{{ route('user.dashboard') }}">Home<span class="lnr lnr-arrow-right"></span></a>
>>>>>>> fb6f8d9 (modul 4)
                    <a href="single-product.html">Detail Produk</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<section class="section_gap">
<<<<<<< HEAD
    <!--================ Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <!-- Product Image -->
=======
    <!-- Single Product Area -->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
>>>>>>> fb6f8d9 (modul 4)
                <div class="col-lg-6">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{ asset('images/' . $product->image) }}" alt="">
                    </div>
                </div>
<<<<<<< HEAD

                <!-- Product Details -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $product->name }}</h3>
                        <h2>{{ $product->price }} Points</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Kategori</span>: {{ $product->category }}
=======
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $product->name }}</h3>
                        @if($product->discount > 0)
                            <h6><del>{{ $product->price }} Points</del></h6>
                            <h2>{{ $product->price - ($product->price * $product->discount / 100) }} Points</h2>
                        @else
                            <h2>{{ $product->price }} Points</h2>
                        @endif
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Kategori</span> : {{ $product->category }}
>>>>>>> fb6f8d9 (modul 4)
                                </a>
                            </li>
                        </ul>
                        <p>{{ $product->description }}</p>
                        <div class="card_area d-flex align-items-center">
<<<<<<< HEAD
                            <a class="primary-btn" href="javascript:void(0);" onclick="confirmPurchase('{{ $product->id }}', '{{ Auth::user()->id }}')">
                                Beli Produk
                            </a>
=======
                            <a class="primary-btn" href="javascript:void(0);" onclick="confirmPurchase('{{ $product->id }}', '{{ Auth::user()->id }}')">Beli Produk</a>
>>>>>>> fb6f8d9 (modul 4)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <!--================ End Single Product Area =================-->
</section>

<!-- SweetAlert2 Script -->
=======
    <!-- End Single Product Area -->
</section>

>>>>>>> fb6f8d9 (modul 4)
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmPurchase(productId, userId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan membeli produk ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Beli!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/product/purchase/' + productId + '/' + userId;
            }
        });
    }
</script>
<<<<<<< HEAD
@endsection
=======

@endsection
>>>>>>> fb6f8d9 (modul 4)
