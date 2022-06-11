<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\InvitacionMailable;

class AdminController extends Controller
{
    //

    function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:1|max:20',
            'email' =>  'required|unique:admins,email',
            'apellido_paterno' => 'required|min:1|max:20',
            'apellido_materno' => 'required|min:1|max:20',
            'dni' => 'required|unique:admins,dni',
            'telefono' => 'required|min:1|max:20',
            'nombre_usuario' => 'required|unique:admins,nombre_usuario',
            'salario' => 'required|min:1|max:5',
            'password' => 'required|min:9|max:30|confirmed',   
        ]);

        $admin = new Admin();
        $admin->nombre = $request->nombre;
        $admin->email = $request->email;
        $admin->apellido_paterno = $request->apellido_paterno;
        $admin->apellido_materno = $request->apellido_materno;
        $admin->dni = $request->dni;
        $admin->telefono = $request->telefono;
        $admin->nombre_usuario = $request->nombre_usuario;
        $admin->salario = $request->salario;
        $admin->password = \Hash::make( $request->password);

        $save = $admin->save();

        Mail::to($admin->email)->send(new InvitacionMailable($request));

        if ($save)
        {
            return redirect()->route('admin.edit',['id' => 1])->with('success','sorry');
        }
        else
        {
            return redirect()->route('admin.edit',['id' => 1])->with('fail','sorry');
        }
        
    }

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

    public function edit($id)
    {

        $admin = Auth::user();

        return view('dashboard.admin.add-admin',compact('admin'));
    }
}
