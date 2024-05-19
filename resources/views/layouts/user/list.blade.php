<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
  <!-- Main Sidebar Container -->
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('image\logo.jpeg')}}  " alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="100%">
      <span class="brand-text font-weight-light">Panel Principal</span>
    </a>
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out-alt"></i>
  
          {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
    </form>
  
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('user.create') }}">New User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Listado Usuario</a>
      </li>
    </ul>
  
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Listado User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content-wrapper">
      <div class="row rowFixed">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title titleModule">User List</h3> <a href="{{ route('user.create') }}" class="btn float-right colorCyan" role="button">+ Add User</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="listUser" class="table table-bordered table-striped">
  
                          <thead>
                              <tr>
                                  <th style="width:15%; text-align:center">Name</th>
                                  <th style="width:15%; text-align:center">Username</th>
                                  <th style="width:15%; text-align:center">Role</th>
                                  <th style="width:10%; text-align:center">Email</th>
                                  <th style="width:15%; text-align:center">Email</th>
                                  <th style="width:20%; text-align:center">Fechadenacimiento</th>
                                  <th style="text-align:center">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($users as $user)
                                  <tr id='userId_{{$user->id}}'>
                                      <td>
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
                                          <span class="textFirstName">{{ $user->userdata->date_of_birth }}</span>, <span class="textLastName">{{ $user->userdata->last_name }}</span>
                                          @endif
                                      </td>
                                      <td>
                                          <div class="d-flex justify-content-center">
                                              <button type="button" class="btn paddBto" data-user="{{$user}}" data-toggle="modal" data-target="#showUser-{{$user->id}}" data-title="View">
                                                  <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="#4099D4" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                      <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                  </svg>
                                              </button>
                                              {{-- <button type="button" onclick="showUser({{$user->id}})"></button> --}}
                                              <form action="{{$user->id}}/edit" method="GET">
                                                  <button type="submit" class="btn" data-title="Edit">
                                                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="#4099D4" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
  
                                                  </button>
                                              </form>
                                              <button type="button" class="btn paddBto" onclick="deleteUser({{$user->id}})" data-title="Delete">
                                                                                                   <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="#4099D4" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>

                                              </button>
  
                                          </div>
                                      </td>
                                  </tr>
                                  @include('layouts/user/partials/actions')
                              @endforeach
                          </tbody>
                          <tfoot>
                          </tfoot>
                      </table>
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
  </div>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
   
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{ asset('js/modules/user/list.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>