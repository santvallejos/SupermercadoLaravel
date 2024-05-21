@extends('layouts.app')
@extends('layouts.dashboard.navbaradmin')
@extends('layouts.dashboard.menuSuperior')
@extends('layouts.dashboard.sidebar')

@section('content')
    <div class="card-header">
        <h3 class="card-title titleModule">Listado Usuarios</h3> <a href="{{ route('user.create') }}" class="btn float-right colorCyan" role="button">+ Crear Usuario</a>
    </div>
    <section>
        <table id="listUser" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width:15%; text-align:center">Nombre</th>
                                <th style="width:15%; text-align:center">UserName</th>
                                <th style="width:10%; text-align:center">Role</th>
                                <th style="width:15%; text-align:center">Email</th>
                                <th style="width:20%; text-align:center">Nombre, Apellido</th>
                                <th style="text-align:center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr id='userId_{{$user->id}}'> {{-- Este condicional es para poder eliminar una fila de mi tabla --}}
                                    <td style=" text-align:center">
                                        @if(($user) && ($user->name))
                                            <span class="textFirstName"> {{ $user->name }}</span>
                                        @endif
                                    </td>
                                    <td style=" text-align:center">
                                        @if(!empty($user->username))
                                            <span class="textFirstName">{{ $user->username }}</span>
                                        @endif
                                    </td>
                                    <td style=" text-align:center">
                                        @if(!empty($user->roles))
                                            @foreach ($user->roles as $itemRole)
                                                <span class="textFirstName">{{ $itemRole->name }}</span>
                                            @endforeach
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td style=" text-align:center">
                                        @if(!empty($user->email))
                                            <span class="textFirstName">{{ $user->email }}</span>
                                        @endif
                                    </td>
                                    <td style=" text-align:center">
                                        @if(!empty($user->userdata))
                                        <span class="textFirstName">{{ $user->userdata->nombre }}</span>, <span class="textLastName">{{ $user->userdata->apellido }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">                                            
                                            <button type="button" class="btn paddBto" data-user="{{$user}}" data-bs-toggle="modal" data-bs-target="#showUser-{{$user->id}}" data-title="View">
                                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="#4099D4" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                              </button>
                                            <form action="{{$user->id}}/edit" method="GET">
                                                <button type="submit" class="btn" data-title="Edit">
                                                   <img src="https://i.postimg.cc/SK8yyfsJ/edit-svgrepo-com.png" alt="" width="22">
                                                </button>
                                            </form>
                                            <button type="button" class="btn paddBto" onclick="deleteUser({{$user->id}})" data-title="Delete">
                                                <img src="https://i.postimg.cc/pV0tM6Zs/destroy-svgrepo-com.png" alt="" width="22">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @include('user/partials/actions')
                            @endforeach
                        </tbody>
        </table>
    </section> 
@endsection
@section('scripts')

    <script src="{{ asset('js/modules/user/list.js') }}"></script>

@endsection
