@extends('layouts.app')
@extends('layouts.dashboard.navbaradmin')
@extends('layouts.dashboard.sidebar')
@extends('layouts.dashboard.menuSuperior')

@section('content')
  <h2 style="text-align: center">Bienvenido <span > {{ Auth::user()->name }} </span></h2>

  </main>
  </div>
  </div>
 
@endsection
