@extends('layouts.user.main') {{-- Pastikan layout user yang Anda gunakan --}}
@section('title', 'Flash Sale') {{-- Set judul halaman --}}
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Flash Sale</h1>

        @if($flashSales->isEmpty())
            <div class="alert alert-info text-center">
                Tidak ada produk Flash Sale yang tersedia saat ini.
            </div>
        @else
            <div class="row">
                @foreach($flashSales as $sale)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/' . $sale->image) }}" class="card-img-top" alt="{{ $sale->product_name }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $sale->product_name }}</h5>
                                <p class="card-text">
                                    <span class="text-muted"><s>Rp {{ number_format($sale->original_price, 0, ',', '.') }}</s></span>
                                    <br>
                                    <strong>Rp {{ number_format($sale->discount_price, 0, ',', '.') }}</strong>
                                </p>
                                <p class="card-text">
                                    Stok: {{ $sale->stock }} <br>
                                    Berlaku hingga: {{ \Carbon\Carbon::parse($sale->end_time)->format('d M Y, H:i') }}
                                </p>
                                <a href="#" class="btn btn-primary btn-block">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection