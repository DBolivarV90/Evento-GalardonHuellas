<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;
use Validator;

class RegisterController extends Controller
{
    public function index(){
      
        $message = "";

        return view("register.index", compact('message'));

    }

    public function store(Request $request)
    {
        $rules = ['email'   => 'unique:users'];

        $customErrorMessages = ['email.unique' => 'Correo Electronico registrado.'];

        $validator = Validator::make($request->all(), $rules, $customErrorMessages);

        $message = ""; 
        if ($validator->fails()) {
            
            $errors = [];

            foreach($validator->errors()->toArray() as $error){
                $message = $error[0];
                return view("register.index", compact('message'));
            }
        }

        $user= new User();
        $user->fill($request->all());
        $user->save();

        //Envio de Correo
        $to_email = $request->email;

        Mail::to($to_email)->send(new RegisterEmail);

        if(Mail::failures() != 0) {
            return redirect('https://www.galardonhuellas.com/gracias/');
        }else {
            $message = "TU email no fue enviado ocurrio un error inesperado"; 

            view("register.index", compact('message'));
        }

        
    }

   

}
