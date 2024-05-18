<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('userdata')->get();    /* "with" es para traer las relaciones entre tablas */
        $roles = Role::all();                 
        return view('layouts.user.list' ,compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('layouts.user.create' ,compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();                         /* Se utiliza para advertir que se va a realizar una transaccion,
                                                            esa transaccion puede ser eliminar, actualizar o crear registros.
                                                            Sirve para que no se creen datos de mala manera, sin beginTransaction
                                                            se puede crear o modificar datos pero pueden estar mal cargados y 
                                                            dara errores.
                                                            Si todo se ejecuto bien hace un DB::commit().
                                                            Si algo sale mal se ejecuta un catch.
                                                             */                 


            $validator = Validator::make($request->all(), [
                'first_name'        => 'required|between:1,100',
                'last_name'         => 'required|between:1,100',
                'email'             => 'required|between:3,64|email',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput();
            }
            
           /*  echo "mobile --->  ".$request->mobile; */
           $arrayRemove = array(" " , "(" ,")" , "-");
           $mobile = str_replace($arrayRemove,"",$request->mobile);
           /*         echo "<br> mobile --->  ".$mobile;
           echo '<br> dni: '.$request->dni; */
           $dni = str_replace(".","",$request->dni);
           /*  echo '<br> dni: '.$dni;
           dd('stop'); */
           dd('stop');
            $role = Role::where('id', $request->role)->first();
            $user = User::create([
                'name'                  => $request->name,
                'username'              => $request->username,
                'email'                 => $request->email,
                'password'              => Hash::make($request->password),
            ]);
            if ($request->file('avatar')) {
                $image = $request->file('avatar');
                $type = $image->getClientOriginalExtension();
                $img = date('Y-m-d-H-i-s') . '-id-' . $user->id . '.' . $type;
                $image->move('image/user/', $img);

                $avatar_image = 'image/user/' . $img;
            } else {
                $avatar_image = '/dist/img/user2-160x160.jpg';
            }
            $userData = UserData::create([
                'user_id'           =>  $user->id,
                'first_name'        =>  $request->first_name,
                'last_name'         =>  $request->last_name,
                'dni'               =>  $dni,
                'avatar'            =>  $avatar_image,
                'address'           =>  $request->address,
                'mobile'            =>  $mobile,
                'date_of_birth'     =>  $request->date_of_birth,
            ]);



            if (!is_null($user && $userData)) {
                $user->assignRole($role->name);
                DB::commit();
                $notification = Notification::Notification('User Successfully Created', 'success');
                return redirect('user/list')->with('notification', $notification);
            }


        } catch (\Exception $e) {
            /* dd($e); */
            DB::rollBack();
            $notification = Notification::Notification('Error', 'error');
            return redirect('user/create')->with('notification', $notification);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::where('id', $user->id)->with('userdata','roles')->first();
        $roles = Role::all();
        return view('layouts.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     /**
     * Search the specified resource from storage.
     *
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function searchUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (is_null($user)) {
            return ['status' => 200];
        } else {
            return ['status' => 400];
        }
    }
}
