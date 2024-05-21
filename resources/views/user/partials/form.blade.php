<div class="card-body">
    <div class="form-group">
      <label for="name" class="name">Name{{--   --  <span class="name text-danger displayNoneError" ></span> --}}</label>
        @if (!empty($user))
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $user->name }}"required>
        @else
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}"required>
        @endif
    </div>
    <div class="form-group">
      <label for="username" class="username">Username  {{-- <span class="username text-danger displayNoneError" > --}}</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username"  value="{{ !empty($user) ? $user->username : old('username') }}"required>
    </div>

    <div class="form-group">
        <label for="email" class="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" onblur="validateEmail(this.value)" {{-- onchange="searchUsername(this.value)" --}}  value="{{ !empty($user) ? $user->email : '' }}" {{ !empty($user) ? 'disabled' : ''}}required>
        @if($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

    <div class="form-group">
      <label for="password" class="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password"required>
    </div>

    <div class="form-group">
        <label class="role">Role</label>
        <select class="form-control select2 select2-secondary" name="role" data-dropdown-css-class="select2-secondary" id="role" style="width: 100%;"  {{ !empty($user) ? 'disabled' : ''}}>
            <option selected="selected" disabled>Select</option>
            @foreach ($roles as $role)
                @if (!empty($user) && !empty($user->roles[0]))
                    <option value="{{$role->id}}" {{ ($user->roles[0]->id === $role->id ? 'selected' : '') ? 'selected':''}}> {{$role->name}}</option>
                @else
                    <option value="{{$role->id}}">{{ $role->name }}</option>
                @endif
            @endforeach
        </select>
        @if($errors->has('role'))
            <p class="text-danger">{{ $errors->first('role') }}</p>
        @endif
    </div>


    <div class="form-group">
        <label for="nombre" class="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ !empty($user->userdata) ? $user->userdata->nombre : '' }}">
        @if($errors->has('nombre'))
            <p class="text-danger">{{ $errors->first('nombre') }}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="apellido" class="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" value="{{ !empty($user->userdata) ? $user->userdata->apellido : '' }}">
        @if($errors->has('apellido'))
            <p class="text-danger">{{ $errors->first('apellido') }}</p>
        @endif
    </div>

    <div class="form-group">
      <label for="fechadenacimiento" class="fechadenacimiento">Fecha de nacimiento</label>
      <input type="date" class="form-control" name="fechadenacimiento" id="fechadenacimiento" placeholder="fechadenacimiento"  value="{{ !empty($user->userdata) ? $user->userdata->fechadenacimiento : '' }}">
    </div>


  <div class="form-group">
    <label >Sexo</label>
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
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
  </div>
