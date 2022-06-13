<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="{{ route('admin_dashboard') }}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">

                    <li class="nav-divider">
                        Menu
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link @if(Route::currentRouteName() == 'admin_dashboard') active @endif" href="{{ route('admin_dashboard') }}"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_menus') }}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-100" aria-controls="submenu-1"><i class="fas fa-fw fa-file"></i> Talents </a>
                        <div id="submenu-100" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin_menus') }}">List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin_menu_add') }}">Add New</a>
                                </li>
                            </ul>
                        </div>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_testimonials') }}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-101" aria-controls="submenu-101"><i class="fas fa-fw fa-file"></i> Projects </a>
                        <div id="submenu-101" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin_testimonials') }}">List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin_add_testimonial') }}">Add New</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_manage_users') }}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-users"></i> Users </a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin_manage_users') }}">List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin_add_user_get') }}">Add New</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link @if(Route::currentRouteName() == 'site_settings') active @endif" href="{{ route('site_settings') }}"><i class="fa fa-fw fa-cog"></i>Site Settings</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
