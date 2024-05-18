{{-- Modal View --}}
<div class="modal fade" id="showUser-{{$user->id}}"  tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title colorLabelHeaderModal">User</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                      <label>Date of birth</label>
                      <input type="date" class="form-control" name="fechadenacimiento" id="fechadenacimiento" placeholder="fechadenacimiento"  value="{{ !empty($user->userdata) ? $user->userdata->fechadenacimiento : '' }}" disabled>
                    </div>



                  </div>
                  <!-- /.card-body -->

                {{--   <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
 --}}







            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>