        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BookStore <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="indexkategori">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="indexbuku">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku</span></a>
            </li>
            @if (auth()->user()->role == "Pengelola")
            <li class="nav-item">
                <a class="nav-link" href="indexpengelola">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pengelola</span></a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="indexpenerbit">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Penerbit</span></a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="indexpeminjam">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Peminjam</span></a>
            @endif

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
