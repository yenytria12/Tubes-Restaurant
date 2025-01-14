@extends('layouts.app')

@section('title', 'Menu - Restaurant Denyah')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Menu Restaurant D'enyah</h2>
        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <!-- Gambar Menu -->
                        <img src="{{ asset('images/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->name }}">
                        <div class="card-body">
                            <!-- Nama Menu -->
                            <h5 class="card-title">{{ $menu->name }}</h5>
                            <!-- Deskripsi Menu -->
                            <p class="card-text">{{ $menu->description }}</p>
                            <!-- Harga Menu -->
                            <p class="card-text"><strong>Rp {{ number_format($menu->price, 0, ',', '.') }}</strong></p>
                            <!-- Tombol "Add to Cart" -->
                            <a href="{{ route('order.add', $menu->id) }}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
