<x-guest-layout>

@section('title', 'Menu - Restaurant Denyah')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Menu Restaurant D'enyah</h2>

        <!-- Kategori Makanan Berat -->
        <h3>Makanan Berat</h3>
        <div class="row mb-5">
            @foreach ($menus as $menu)
                @if ($menu->category == 'Makanan Berat')
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <p class="card-text">{{ $menu->description }}</p>
                                <p class="card-text"><strong>Rp {{ number_format($menu->price, 0, ',', '.') }}</strong></p>
                                <a href="{{ route('order.add', $menu->id) }}" class="btn btn-outline-primary">+</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Kategori Makanan Penutup -->
        <h3>Makanan Penutup</h3>
        <div class="row mb-5">
            @foreach ($menus as $menu)
                @if ($menu->category == 'Makanan Penutup')
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <p class="card-text">{{ $menu->description }}</p>
                                <p class="card-text"><strong>Rp {{ number_format($menu->price, 0, ',', '.') }}</strong></p>
                                <a href="{{ route('order.add', $menu->id) }}" class="btn btn-outline-primary">+</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Kategori Minuman -->
        <h3>Minuman</h3>
        <div class="row mb-5">
            @foreach ($menus as $menu)
                @if ($menu->category == 'Minuman')
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->name }}</h5>
                                <p class="card-text">{{ $menu->description }}</p>
                                <p class="card-text"><strong>Rp {{ number_format($menu->price, 0, ',', '.') }}</strong></p>
                                <a href="{{ route('order.add', $menu->id) }}" class="btn btn-outline-primary">+</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</x-guest-layout>
