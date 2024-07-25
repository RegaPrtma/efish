<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('admincss/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Admin</h1>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li><a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Home </a></li>
              <li><a href="{{ url ('view_kategori') }}"> <i class="icon-grid"></i>Kategori </a></li>
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Produk </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{ url('add_produk') }}">Tambahkan ikan</a></li>
                  <li><a href="{{ url('view_produk') }}">Melihat Produk</a></li>
                </ul>
                <li><a href="{{ url ('view_pesanan') }}"> <i class="icon-grid"></i>Pesanan </a></li>
              </li>
      </ul>
    </nav>
    <!-- Sidebar Navigation end-->