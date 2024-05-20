@section('navbar')
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #004d29">
  <a href="{{ url('/') }}" class="logoHeader"><img src="{{ asset('img/logo.jpeg') }}" alt="logo" style="width: 200px" ></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item " style="display: flex">
      <img src="https://i.postimg.cc/sgVHzPTc/avatar-admin-removebg-preview.png" alt="avataradmin" width="30" height="30">
      <span class="nav-link px-3"> {{ Auth::user()->name }} </span> 
    </div>
  </div>
</header>
@endsection

