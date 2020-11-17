@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" alt="" class=""
           style="opacity: .8">
      <span class="brand-text font-weight-light">sindy_shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
            {{request()->user()->username}}
            @else
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('beranda')}}" class="nav-link active">
              <i class="fa fa-home" aria-hidden="true"></i>
              <p>
                Beranda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <li class="nav-item">
                <a href="{{url('produk')}}" class="nav-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Kategori')}}" class="nav-link">
                  <i class="fa fa-th-large" aria-hidden="true"></i>
                  <p>Kategori</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
            <a href="{{url('promo')}}" class="nav-link">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <p>Promo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('login')}}" class="nav-link">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <p>login</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="register" class="nav-link">
              <i class="fa fa-registered" aria-hidden="true"></i>
              <p>Registrasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
              <p>Supplier</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>