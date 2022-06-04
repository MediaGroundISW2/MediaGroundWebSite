<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:1|max:20',
            'apellido_paterno' => 'required|min:1|max:20',
            'apellido_materno' => 'required|min:1|max:20',
            'dni' => 'required|unique:users,dni',
            'email' =>  'required|unique:users,email',
            'nombre_usuario' => 'required|unique:users,nombre_usuario',
            'password' => 'required|min:9|max:30|confirmed',   
        ]);

        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->nombre_usuario = $request->nombre_usuario;
        $user->password = \Hash::make( $request->password);

        $save = $user->save();

        if ($save)
        {
            return redirect()->back()->with('success','Registro Completado');
        }
        else
        {
            return redirect()->back()->with('fail','Error en el registro');
        }
        
    }

    function check(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|exists:users,nombre_usuario',
            'password' => 'required|min:9|max:30'
        ]);

        $credentials = $request->only('nombre_usuario','password');

        if ( Auth::guard('web')->attempt($credentials) )
        {
            return redirect()->route('user.home');
        }
        else
        {
            return redirect()->route('user.login')->with('fail','Credenciales incorrectas');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
