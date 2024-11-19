@extends('layouts.user.main')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Flash Sale</h1>
    <div class="row">
        @foreach($flashSales as $flashSale)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/' . $flashSale->product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $flashSale->product->name }}</h5>
                        <p class="card-text">Harga Diskon: {{ $flashSale->discounted_price }}</p>
                        <p>Waktu: {{ $flashSale->start_time }} - {{ $flashSale->end_time }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
