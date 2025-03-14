<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">কোম্পানীগঞ্জ সাফল্য সমিতি</span>
    </a>
    <div class="sidebar">
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/membersList" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <p> সভ্য তালিকা </p>
                    </a>
                </li>

                <!-- First Menu -->
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            মেনু
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/adminPanelList" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> অ্যাডমিন প্যানেল </p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <!-- Second Menu -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            কালেকশন শীট
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/sanchayaKhatian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> সঞ্চয় খতিয়ান </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/korjoKhatian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> কর্জ খতিয়ান </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/shareKhatian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> শেয়ার খতিয়ান </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/somobayBazarKhatian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> সমবায় খতিয়ান </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/mojudMalamalKhatian" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> মজুদ মালামাল খতিয়ান </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Third Menu -->
                <li class="nav-item">
                    <a href="/adminPanelList" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> অ্যাডমিন প্যানেল </p>
                    </a>
                </li>
            </ul>

        </nav>
    </div>
</aside>
