<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        // Lógica para mostrar una lista de usuarios
    }

    public function show($id)
    {
        // Lógica para mostrar un usuario específico
    }

    public function create()
    {
        return view('user-register');
    }


    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user-update', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un usuario en la base de datos
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user) {
            return redirect()->route('users.index')->with('error', 'Usuario no encontrado');
        }

        $user->delete();
        return redirect()->route('home');
    }
    
}
