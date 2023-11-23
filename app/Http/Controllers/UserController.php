<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function register(){
        return view('registrar');
    }

    public function login(){
        return view('login');
    }

    public function sesion(){
        return view('usuario');
    }


    public function validar_register(Request $request){

        $request->validate([
            'correo' => ['required', 'email', 'unique:users,email'],
            'contrasena' => ['required', 'string'],
            'nombre' => ['required', 'string'],
        ]);

        $user = new User();
        $user->name = $request->nombre;
        $user->email = $request->correo;
        $user->password = Hash::make($request->contrasena);

       if($user->save()){
            Auth::login($user);
            return redirect(route('home'))->with('info','Te has registrado');
        }
        else{
            return redirect(route('user.registro'));
        }


    }

    
    public function inicia_sesion(Request $request){
        
        $user = User::where('email', $request->correo)->get();

        $request->validate([
            'correo' => ['required', 'email', 'string'],
            'contrasena' => ['required', 'string'],
        ]);

        $credentials = [
            "email" => $request->correo,
            "password" => $request->contrasena
        ];

        $remember  = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){

            $request->session()->regenerate();
            return redirect(route('home'))->with('info','Sesion iniciada');
        }

        if(count($user) >0){
            throw validationException::withMessages([
                'contrasena' => __('auth.password')
            ]);
        }
        else{
            throw validationException::withMessages([
                'correo' => __('auth.failed'),
            ]);
        }

        //return redirect(route('user.login'));

    }

    
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'))->with('info','Se ha cerrado la sesion');
    }
}
