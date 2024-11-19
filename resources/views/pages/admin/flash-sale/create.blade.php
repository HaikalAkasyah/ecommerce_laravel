@extends('layouts.admin.main')
@section('title', 'Tambah Flash Sale')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Flash Sale</h1>
        </div>

        <div class="card">
            <form action="{{ route('flash-sale.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="product_id">Produk</label>
                        <select name="product_id" id="product_id" class="form-control" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="discounted_price">Harga Diskon</label>
                        <input type="number" name="discounted_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="start_time">Waktu Mulai</label>
                        <input type="datetime-local" name="start_time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="end_time">Waktu Selesai</label>
                        <input type="datetime-local" name="end_time" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
