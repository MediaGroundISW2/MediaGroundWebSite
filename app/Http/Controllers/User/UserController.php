<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\TicketMailable;

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

    function recarga()
    {
        return view('dashboard.user.recarga');
    }

    function make_recarga(Request $request)
    {
        $request->validate([
            'numero_tarjeta' => 'required|min:19|max:20|',
            'nombre_propietario' => 'required|min:1|max:20',
            'fecha_expiracion' => 'required',
            'CVV' => 'required|',
            'saldo' =>  'required',
        ]);

        $results = DB::select('select * from banks where numero_tarjeta = :NT AND CVV = :CVV', ['NT' => $request->numero_tarjeta,'CVV' => $request->CVV]);

        if (!$results)
        {
            return redirect()->route('user.recarga')->with('fail','Tarjeta no encontrada, revise bien los datos ingresados');  
        }

        foreach ($results as $result) { }


        if ($request->saldo > $result->saldo)
        {    
            return redirect()->route('user.recarga')->with('fail_ins','Saldo insuficiente');  
        }else{
            $saldo_descontado =  $result->saldo - $request->saldo;
            $affected = DB::update(
                'update banks set saldo = ? where CVV = ?',
                [$saldo_descontado,$request->CVV]
            );

            $results_user = DB::select('select * from users where id = :id ', ['id' => 1]);
            foreach ($results_user as $result_user) { }

            $saldo_abonado =  $result_user->saldo + $request->saldo;
            $affected = DB::update(
                'update users set saldo = ? where id = ?',
                [$saldo_abonado,1]
            );

            Mail::to($result_user->email)->send(new TicketMailable($result_user,$result));


            return redirect()->route('user.recarga')->with('success','Saldo recargado con éxito');

        }
    }
}
