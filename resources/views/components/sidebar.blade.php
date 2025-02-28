<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">STTAL ADMIN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item ">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>


            <li class="nav-item ">
                <a href="{{ route('prajurits.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Prajurit</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Users Admin</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('satuans.show', 1) }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Satuan</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('attendances.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                    <span>Absensi</span></a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Permission</span>
                </a>
            </li>
    </aside>
</div>
