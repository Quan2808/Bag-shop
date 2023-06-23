@php
    $route = request()
        ->route()
        ->getname();
@endphp


<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('user.*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    User Management
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('user.index') }}"
                        class="nav-link {{ request()->routeIs('user.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>User List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add User</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ request()->routeIs('product.*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->routeIs('product.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                    Product Management
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('product.index') }}"
                        class="nav-link {{ request()->routeIs('product.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.add') }}"
                        class="nav-link {{ request()->routeIs('product.add') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Product</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
