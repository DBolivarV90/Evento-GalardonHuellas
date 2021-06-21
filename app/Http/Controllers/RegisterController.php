<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;
class RegisterController extends Controller
{
    public function index(){
      
        return view("register.index");

    }

    public function store(Request $request)
    {
        $user= new User();
        $user->fill($request->all());
        $user->save();

        //Envio de Correo
        $to_email = $request->email;

        Mail::to($to_email)->send(new RegisterEmail);

        if(Mail::failures() != 0) {
            return "<p> Success! Your E-mail has been sent.</p>";
        }

        else {
            return "<p> Failed! Your E-mail has not sent.</p>";
        }



        return redirect()->route('register.index')->with([
            'feedback' => [
                'type' => 'toastr',
                'action' => 'success',
                'message' => 'Usuario registrado exitosamente'
            ]
        ]);
    }

   

}
