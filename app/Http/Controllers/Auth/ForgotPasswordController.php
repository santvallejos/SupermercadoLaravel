<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\Jobs\SendEmailForgotPasswordJob;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar los correos electrónicos de restablecimiento de contraseña y
    | incluye un rasgo que ayuda a enviar estas notificaciones desde
    | su aplicación a sus usuarios. Siéntete libre de explorar este rasgo.
    |
    */

    use SendsPasswordResetEmails;
    
    /* Metodo para el envio de reseteo de contraseña */
    public function sendResetLinkEmail(Request $request){
        $login = $request->input($this->username());                                    //$login guarda el valor ingresado por el usuario.
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';      //$field filtra y valida si es un email o no.
        
        if($field=='username'){                                                         //verificamos si es username el valor ingresado
            $user = User::where('username',$login)->first();                            //$user busca y devuelve el primer username guardado si existe
        }else{                                                                          //o en su defecto
            $user = User::where('email',$login)->first();                               //$user devuelve el primer email guardado
        }                                                                                

        if(is_null($user)){                                                             //Verificamos si es nulo el $user
                $this->statusReturn(400,'El email o el usuario no existe');             //muestra el error 400 y muestra el mensaja de error
                return redirect()->back();                                              //retorna a la ultima vista
        }

        $codeToken = Str::random(60);                                                   //$codeToken almacena un token que sera enviado por email al usuario
        session(['codeToken' => $codeToken, 'emailReset'=>$user->email]);               //sessio[(almacena el $codeToken, y el email del usuario que desea el reseteo)]
        $passwordReset = PasswordReset::where('email',$user->email)->first();           //verificamos si existe o no el email
      
        if(is_null($passwordReset)){                                                    //verificamos si es nulo o no
           PasswordReset::create([                                                      
                'email'         =>  $user->email,
                'token'         =>  $codeToken,                                         //si es nulo, creamos el modelo para el reseteo de contraseña
                'created_at'    =>  date('Y-m-d H:i:s')
            ]);
        }else{
            $passwordReset->token = $codeToken;                                         //si no es nulo, actualizo el token 
            $passwordReset->save();                                                     //guardo en la BDD este nuevo token para el reseteo 
        }

        //Job para el envio de un mail para el reseteo de contraseña
        SendEmailForgotPasswordJob::dispatch($user,$codeToken);                         //despacha un email ($user que puede ser email o username, el token nuevo alamacenado en la BDD password_resets)
        $this->statusReturn(200,'Revisa tu email, se envio un email para reestablecer la 
        contraseña.');                                                                  //muestra el mensaje en pantalla que se envio un email
        return redirect()->back();                                                      //retorna a la ultima vista
    }

    public function username(){
        return 'login';
    }

    //Metodo para el reseteo de contraseña
    public function passwordReset(Request $request){
        //con el passwordReset capturamos lo que dejo en sesion el usuario, buscamos y evaluamos si los datos almacenados el sesion son iguales a los ingresados, solicitamos nos devuelva la primer coincidencia
        $passwordReset = PasswordReset::select('email','token')->where('email',session('emailReset'))->where('token',session('codeToken'))->first();
        if(!$passwordReset) return redirect()->back();                                  //si la consulta da nula que vuelva a la vista anterior

        //si no es nula la consulta que le envie al email ingresado el token guardado
        $email = $passwordReset->email;                                                 
        $token = $passwordReset->token;

        //redijire a la vista detalla abajo, con el "compact" envia las variables a la vista indicada
        return view('auth.passwords.reset', compact('email','token'));
    }

    //Metodo de actualizacion de contraseña
    public function passwordUpdate(Request $request){
        $validate = $this->checkPassword($request->password, $request->password_confirmation);          //$validate almacena el password nuevo y la confimado de password ingresada por el usuario
        if(!$validate){                                                                                 //validamos si coinciden las contraseñas
            $this->statusReturn(400,'Las contrasenas no coinciden');                                    //retorna un error 400 y el mensaje
            return redirect()->back();                                                                  //retorna a la ultima vista
        }

        //con el passwordReset capturamos lo que dejo en sesion el usuario, buscamos y evaluamos si los datos almacenados el sesion son iguales a los ingresados, solicitamos nos devuelva la primer coincidencia
        $passwordReset = PasswordReset::select('email','token')->where('email',session('emailReset'))->where('token',session('codeToken'))->first();
        
        $user = User::where('email',$passwordReset->email)->first();                                    //consultamos si existe un email alamcenado en la tabla y que devuelva la primer coincidencia
        if(!$passwordReset && !$user) {                                                                 //verificamos si la consulta es nula, ya sea porque no existe ni email ni un username o el campo es nulo
            $this->emptySession();                                                                      //con "emptySession" vaciamos la sesion
            $this->statusReturn(400,'Las credenciales no coinciden');                                   //retorna un error 400 y el mensaje indicado
            return redirect()->back();                                                                  //retorna a la ultima vista
        }
     
        $user->password = Hash::make($request->password);                                               //hasheamos la contraseña nueva ingresada por el usuario
        $user->save();                                                                                  //guardamos y actualizamos la contraseña en la BDD
        $passwordReset->delete();                                                                       //elimina lo que esta en passwordReset en ese momento, los cuales son el email y el token, lo realiza porque ya fue actualizado en la BDD
        $this->emptySession();                                                                          //con "emptySession" vaciamos la sesion
        $this->statusReturn(200,'Contraseña reestablecida con éxito');                                  //retorna el status 200 y el mensaje indicado
        return redirect('login');                                                                       //redirecciona a la vista login
    }

    //Metodo eliminar lo que hay en la sesion guardada, "forget" realiza esa funcion de vaciar lo que hay en sesion
    protected function emptySession(){
        Session::forget(['codeToken','emailReset']);
    }
    
    //Metodo para verificar si el password ingresado es igual al password confirmado abajo
    protected function checkPassword($password, $passwodConfirmation){
        if($password != $passwodConfirmation) return false;
        return true;
    }

    //Metodo para el envio de mensaje de status, ya sea exitoso con "success" o erroneo con "danger"
    protected function statusReturn($status,$message){
        if($status==200){
            Session::flash('flash_message',$message);
            Session::flash('flash_message_class','success');
        }else{
            Session::flash('flash_message',$message);
            Session::flash('flash_message_class','danger');
        }
    }
}
