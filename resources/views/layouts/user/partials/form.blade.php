<div class="card-body">
    <div class="form-group">
        <label for="name" class="name">Name{{--   --  <span class="name text-danger displayNoneError" ></span> --}}</label>
          @if (!empty($user)) <!-- Consultamos si el usuario no es vacio -->
                <!-- Ingresa por el metodo edit ya que el usuario existe -->
              <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
          @else
                <!-- Ingresa por el metodo create ya que no es vacio ni igual a un usuario existente -->
              <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
          @endif
      </div>

    <div class="form-group">
      <label for="username" class="username">Username {{-- -- <span class="username text-danger displayNoneError" ></span >--}}</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username"  value="{{ !empty($user) ? $user->username : old('username') }}">
    </div>

    <div class="form-group">
      <label for="fechadenacimiento" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fechadenacimiento" type="date" class="form-control @error('fechadenacimiento') is-invalid @enderror" name="fechadenacimiento" value="{{ old('fechadenacimiento') }}" required autocomplete="fechadenacimiento" autofocus>

                                @error('fechadenacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="sexo_femenino" name="sexo" value="Femenino" required>
                <label class="form-check-label" for="sexo_femenino">
                    Femenino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="sexo_masculino" name="sexo" value="Masculino" required>
                <label class="form-check-label" for="sexo_masculino">
                    Masculino
                </label>
            </div>
            @error('sexo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" onblur="validateEmail(this.value)" {{-- onchange="searchUsername(this.value)" --}}  value="{{ !empty($user) ? $user->email : '' }}" {{ !empty($user) ? 'disabled' : ''}}>
        @if($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

     <div class="form-group">
        <label class="role">Role</label>
        <select class="form-control" name="role" data-dropdown-css-class="select2-secondary" id="role" style="width: 100%;"  {{ !empty($user) ? 'disabled' : ''}}>
            <option selected="selected" disabled>Select</option>
               @foreach ($roles as $key->$role)
                @if (!empty($user) && !empty($user->roles[0]))
                <option value="{{$role->id}}" {{ ($user->roles[0]->id === $role->id ? 'selected' : '') ? 'selected':''}}> {{$role->name}}</option>
                @else
                <option value="{{$role->id}}">{{ $role->name }}</option>
                @endif
                @endforeach
           {{-- <option value="1">Admin</option>
                <option value="2">Client</option>
                <option value="3">User</option> --}}
        </select>
        @if($errors->has('role'))
            <p class="text-danger">{{ $errors->first('role') }}</p>
        @endif
    </div>
    

   <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
