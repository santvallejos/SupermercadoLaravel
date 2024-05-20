{{-- Modal View --}}
<div class="modal fade" id="showUser-{{$user->id}}"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title colorLabelHeaderModal">Datos del usuario</h3>
            </div>

            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                      <label>Name</label>
                      {{-- <input type="text" class="form-control userDataJSName" disabled> --}}
                      <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control {{-- userUsernameJS --}}" value="{{ $user->username }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{ $user->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" value="{{ !empty($user->roles[0]) ? $user->roles[0]->name : ''}}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" value="{{ !empty($user->userdata) ? $user->userdata->nombre : '' }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" value="{{ !empty($user->userdata) ? $user->userdata->apellido : '' }}" disabled>
                    </div>

                    <div class="form-group">
                      <label>Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="fechadenacimiento" id="fechadenacimiento" placeholder="fechadenacimiento"  value="{{ !empty($user->userdata) ? $user->userdata->fechadenacimiento : '' }}" disabled>
                    </div>
                  </div>
                  <!-- /.card-body -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>

