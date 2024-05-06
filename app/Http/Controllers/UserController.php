<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Contracts\UserServiceInterface;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    public function create()
    {
        return view('user-register');
    }

    public function edit($id)
    {
        return view('user-update', ['user' => $this->userService->getUserById($id)]);
    }

    public function store($data){
        return $this->userService->createUser($data);
    }

    public function update($id, $data){
        return $this->userService->updateUser($id, $data);
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
