@section('sidebar')
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="{{ route('user.create') }}" class="nav-link">
              <span data-feather="home">Panel de Control</span>
            </a>
          </li>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                      Usuario
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('user.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>New</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                      </a>
                    </li>
  
                  </ul>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>New</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
              </a>
            </li>

          </ul>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Categorias
            </a>
          </li>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>New</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
              </a>
            </li>

          </ul>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reportes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Estadisticas
            </a>
          </li>
        </ul>

      </div>
       <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 30px">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </nav>
@endsection