<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function check(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|exists:admins,nombre_usuario',
            'password' => 'required|min:9|max:30'
        ]);
       
        $credentials = $request->only('nombre_usuario','password');

        if ( Auth::guard('admin')->attempt($credentials) )
        {
            return redirect()->route('admin.home');
        }
        else
        {
            return redirect()->route('admin.login')->with('fail','Credenciales incorrectas');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
