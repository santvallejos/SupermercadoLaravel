<?php

namespace App\Helpers;

class Notification
{   
    /* Utilizamos para enviar notificaciones cuando estamos en el UserController al momento de crear un usuario */
    public static function Notification($message, $alert)
    {
        return $notification = array(           /* Devuelve un array de datos con 2 valores */ 
            'message' => $message,              /* Es la variable que contendra el mensaje a mostrar */
            'alert-type' => $alert              /* Muestra el tipo de mensaje o el custom del mensaje tomado de bootstrap, por ejemplo color  */
        );
    }
}