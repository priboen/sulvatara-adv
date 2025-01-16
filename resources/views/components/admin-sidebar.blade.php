<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Sulvatara Adventure</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">SLVTR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fa-solid fa-house"></i><span>Beranda</span></a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"><i class="fa-solid fa-user"></i><span>Kelola Karyawan</span></a>
            </li>
            <li class="menu-header">MANAJEMEN BARANG</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa-solid fa-boxes-stacked"></i><span>Barang</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('product.index') }}">Produk</a></li>
                    <li><a class="nav-link" href="{{route('categories.index')}}">Kategori</a></li>
                    <li><a class="nav-link" href="{{route('brands.index')}}">Brand</a></li>
                    <li><a class="nav-link" href="{{route('usage.index')}}">Jenis Kegunaan</a></li>
                </ul>
            </li>
            <li class="menu-header">MANAJEMEN KONTEN</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-layer-group"></i><span>
                        Beranda Website</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('super-products.index')}}">Produk Unggulan</a></li>
                    <li><a class="nav-link" href="{{route('promos.index')}}">Promo Banner</a></li>
                    <li><a class="nav-link" href="{{route('trips.index')}}">Open Trip</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
