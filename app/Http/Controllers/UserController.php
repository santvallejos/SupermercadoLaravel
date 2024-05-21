<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\UserData;
use App\Http\Requests\UserFormRequest;
use App\Helpers\Notification;
use Exception;
use Auth;
use Session;
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
    {                                         /* en esta parte de codigo indica que el usuario logueado no aparezca y no se pueda eliminar*/  
        $users = User::with('userdata')->where('id','!=',Auth::user()->id)->get();
        return view('user.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create',compact('roles'));
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
            DB::beginTransaction();
 
            $role = Role::where('id', $request->role)->first();
            $user = User::create([
                'name'                  => $request->name,
                'username'              => $request->username,
                'email'                 => $request->email,
                'password'              => Hash::make($request->password),
            ]);
            $userData = UserData::create([
                'user_id'               =>  $user->id,
                'nombre'                =>  $request->nombre,
                'apellido'              =>  $request->apellido,
                'fechadenacimiento'     =>  $request->fechadenacimiento,
                'sexo'                  =>  $request->sexo,
            ]);



            if (!is_null($user && $userData)) {
                $user->assignRole($role->name);
                DB::commit();
                $notification = Notification::Notification('User Successfully Created', 'success');
                return redirect('user/list')->with('notification', $notification);
            }


        } catch (\Exception $e) {
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
    public function show(Request $request)
    {
        $user = User::where('id', $request->id)->with('userdata','roles')->first();
        return [
            'status'    =>  200,
            'name'      =>  $user->name,
            'username'  =>  $user->username,
            'nombre'    =>  $user->userdata->nombre,
        ];
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
        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, User $user)
    {
        try {
            DB::beginTransaction();

            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();
            $userData = UserData::where('user_id',$user->id)->first();
            $userData->nombre = $request->nombre;
            $userData->apellido = $request->apellido;
            $userData->fechadenacimiento = $request->fechadenacimiento;
            $userData->sexo = $request->sexo;
            $userData->save();

            if (!is_null($user && $userData)) {
                DB::commit();
                $notification = Notification::Notification('User Successfully Updated', 'success');
                return redirect('user/list')->with('notification', $notification);
            }


        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            $notification = Notification::Notification('Error', 'error');
            return redirect('user/list')->with('notification', $notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     /*    $user = User::find($request->userId);
        if(!is_null($user)){
            $userData = UserData::where('user_id',$user->id)->first();
            if(!is_null($userData)) $userData->delete();
            $user->delete();
            return ['status' => 200];
        }
       return ['status' => 400]; */
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