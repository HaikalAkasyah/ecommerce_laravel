@extends('layouts.user.main')
<<<<<<< HEAD

@section('content')
=======
@section('content')

>>>>>>> fb6f8d9 (modul 4)
<!-- Start Banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
<<<<<<< HEAD
                <!-- Single Slide -->
=======
>>>>>>> fb6f8d9 (modul 4)
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="banner-content">
                            <h1>Nike New <br>Collection!</h1>
<<<<<<< HEAD
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
=======
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
>>>>>>> fb6f8d9 (modul 4)
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner-img">
<<<<<<< HEAD
                            <img class="img-fluid" src="{{ asset('assets/templates/user/img/banner/banner-img.png') }}" alt="Banner Image">
=======
                            <img class="img-fluid" src="{{ asset('assets/templates/user/img/banner/banner-img.png') }}" alt="">
>>>>>>> fb6f8d9 (modul 4)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Product Area -->
<section class="section_gap">
    <div class="container">
<<<<<<< HEAD
        <!-- Section Title -->
=======
>>>>>>> fb6f8d9 (modul 4)
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Latest Products</h1>
<<<<<<< HEAD
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>

        <!-- Product List -->
        <div class="row">
            @forelse ($products as $item)
                <!-- Single Product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}">
                        <div class="product-details">
                            <h6>{{ $item->name }}</h6>
                            <div class="price">
                                <h6>Harga: {{ $item->price }} Points</h6>
                            </div>
                            <div class="prd-bottom">
                                <!-- Beli Button -->
                                <a class="social-info" href="javascript:void(0);"
                                    onclick="confirmPurchase('{{ $item->id }}', '{{ Auth::user()->id }}')">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Beli</p>
                                </a>
                                <!-- Detail Button -->
=======
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            @forelse ($products as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ asset('images/' . $item->image) }}" alt="">
                        <div class="product-details">
                            <h6>{{ $item->name }}</h6>
                            <div class="price">
                                @if($item->discount > 0)
                                    <h6>{{ $item->price }} Points</h6>
                                @else
                                    <h6>{{ $item->price }} Points</h6>
                                @endif
                            </div>
                            <div class="prd-bottom">
                                <a class="social-info" href="javascript:void(0);" onclick="confirmPurchase('{{ $item->id }}', '{{ Auth::user()->id }}')">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Beli</p>
                                </a>
>>>>>>> fb6f8d9 (modul 4)
                                <a href="{{ route('user.detail.product', $item->id) }}" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
<<<<<<< HEAD
                <!-- No Products Message -->
=======
>>>>>>> fb6f8d9 (modul 4)
                <div class="col-lg-12 col-md-12">
                    <div class="single-product">
                        <h3 class="text-center">Tidak ada produk</h3>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
<!-- End Product Area -->

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
