@extends('layouts.app')
@extends('layouts.dashboard.navbaradmin')
@extends('layouts.dashboard.menuSuperior')
@extends('layouts.dashboard.sidebar')

@section('content')
<section class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
  <h3 class="card-title">Editar Usuario</h3>
  <!-- form start -->
              <form method="POST" action="{{ route('user.update',$user->id) }}" onsubmit="return validateForm();" enctype="multipart/form-data" autocomplete="off">
                    @method('PUT')
                    @csrf
                    @include('user.partials.form')
              </form>
</section>  
@endsection
@section('scripts')
    <script src="{{ asset('js/modules/user/form.js') }}"></script>
@endsection
