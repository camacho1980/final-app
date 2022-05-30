<?php


// namespace App\Http\Controllers;
use Validator;

use App\Models\Mensaje;
// use Illuminate\Http\Request;
// use Illuminate\support\Facades\Mail;

use App\Mail\MensajeContacto;
use App\Controllers\Controller;


class PageController extends Controller
{
    public function apiMensaje(){
          // paso 1 valido los datos

          $validator = Validator::make(request()->all(), [
            'name'=>'required | min:4',
            'email'=>'required',
            'phone'=>'required | min:5',
            'message'=>'required'  
        ]);
        // paso 2 respondo si hay errores
        
        if ($validator -> fails()){
            return response([
                'error'=> true,
                'data'=> $validator -> errors()
            ],422);
        };

        // dd(request()->all());

        // validador datos requeridos

        $mensaje = Mensaje::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'phone'=>request()->phone,
            'message'=>request()->message
        ]);

        // dd($mensaje);

        Mail::to('jorgearguello@live.com.ar')->send(new MensajeContacto($mensaje));
        
        //RESPONDEMOS UN JSON
        
        return response([
            "meta" => [
                "mensaje" => "Gracias por su mensaje le responderemos a la brevedad",
                "codigo" => 201
            ],
            'data'=> $mensaje
        ],201);
    }
     
}