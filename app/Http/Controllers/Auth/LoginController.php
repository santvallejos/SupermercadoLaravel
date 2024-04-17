<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Session;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){                        //Metodo para loguearnos en el sitio. //$request trae toda la informacion del formulario.
        $userQueDeseaLoguearse=null;
        $credentials = $this->credentials($request);                //$credentials Arma el formato para que evalue el Auth::validate    
        if(Auth::validate($credentials)){
            $user = Auth::getLastAttempted();
            auth()->login($user);                                   //Indica que loguee al usuario.
            return redirect('home');                                //Redijire a la pagina "Home".
        }else{
            if(!empty($credentials['username'])) {
                $userQueDeseaLoguearse = User::where('username', $credentials['username'])->first(); //Busca el primer username.
            }else if(!empty($credentials['email'])) {
                $userQueDeseaLoguearse = User::where('email', $credentials['email'])->first();      //Busca el primer email.
            }    
        
        if(is_null($userQueDeseaLoguearse)){                        //Condicional para que informa si se equivoco de usuario o de contraseña.
            Session::flash('flash_message', 'El usuario no esta registrado');
            Session::flash('flash_message_class','danger');        
        }else{
            Session::flash('flash_message', 'El password ingresado es incorrecto');
            Session::flash('flash_message_class','danger');        
        }

        return back()->withInput();                                 //"back" es para volver atras y "withInput" permite volver atras con los datos cargados.
    }
    }
    public function credentials(Request $request){                  //Este metodo arma el formato para que se evalue en el login. 
        $login = $request->input($this->username());

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';      //Evalua si es un email o no lo que se carga en el campo Field.
        return [
            $field      => $login,                                                      //Toma el valor del formulario, o es email o es username.
            'password'  => $request->input('password'),                                 //Toma el password ingresado por el usuario.
        ];
    }

    public function username(){ 
        return 'login';
    }

}