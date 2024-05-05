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
        return view('list-user');
    }

    public function edit($id)
    {
        return view('user-register', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un usuario en la base de datos
    }

    public function destroy($id)
    {
        // Lógica para eliminar un usuario de la base de datos
    }
    
}
