@extends('layouts.app')
@extends('layouts.dashboard.navbaradmin')
@extends('layouts.dashboard.sidebar')
@extends('layouts.dashboard.menuSuperior')

@section('content')
<section class="col-md-9 ms-sm-auto col-lg-12  px-md-4">

  <h3>Crear Usuario</h3>
   <!-- form start -->
  <form method="post" action="{{ route('user.store') }}" onsubmit="return validateForm();" enctype="multipart/form-data" autocomplete="off">
        @csrf
         @include('user.partials.form')
  </form>

</section>  
@endsection

@section('scripts')
    <script src="{{ asset('js/modules/user/form.js') }}"></script>
@endsection
