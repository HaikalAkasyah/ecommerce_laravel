<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Teknik Informatika | KSI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">KSI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
<<<<<<< HEAD
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('flash-sale.create') }}">
                    <i class="fas fa-tags"></i> Flash Sale
                </a>
            </li>
            <li class="{{ Request::is('product') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.product') }}">
                    <i class="fas fa-box"></i> <span>Produk</span>
                </a>
            </li>
=======
                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('product*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.product') }}"><i class="fas fa-box"></i> <span>Produk</span></a>
            </li>
            <li class="{{ Request::is('distributor*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.distributor') }}"><i class="fas fa-truck"></i> <span>Distributor</span></a>
            </li>
            {{-- <li class="{{ Request::is('#*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('') }}"><i class="fas fa-shopping-cart"></i> <span>FlashSale</span></a>
            </li> --}}
>>>>>>> fb6f8d9 (modul 4)
        </ul>
    </aside>
</div>
