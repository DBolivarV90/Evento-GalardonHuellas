<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class EventoController extends Controller
{
    public function index(){

        return view("evento.index");
    }

    public function login(){

        return view("evento.login");
    }

    public function store(Request $request)
    {
       
        $user = User::where('email',$request->email)->first();

        if($user){
            Auth::login($user);
            return redirect()->route('evento.index');
        } else {
            return back()->withInput();
            
        }
        
    }
}
?>