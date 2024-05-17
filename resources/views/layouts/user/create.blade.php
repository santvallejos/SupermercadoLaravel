<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Crear User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('user.store') }} ">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Userame') }}</label>
                        <input id="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="fechadenacimiento" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>
                        <input id="fechadenacimiento" type="date" class="form-control" placeholder="fechadenacimiento">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
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
                    </div>
                    <div class="form-group">
                        <label for="">Rol</label>
                        <select>
                            <option value="Admin">Administrador</option>
                            <option value="User">User</option>
                            <option value="Cliente">Cliente</option>
                        </select>
                      </div>
    
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
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
              </form>
            </div>
            <!-- /.card -->


          </div>
      </div><!-- /.container-fluid -->
    </section>
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

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
