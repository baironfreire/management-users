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

    
    public function index(){
        $users =  $this->userService->getAllUsers();
        return view('user-index', ['users' => $users]);
    }

    public function create()
    {
        return view('user-create');
    }

    public function edit($id)
    {
        return view('user-update', ['user' => $this->userService->getUserById($id)]);
    }

    public function store($data){
        return $this->userService->createUser([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => isset($data['password']) ? Hash::make($data['password']) : null,
        ]);
    }

    public function update($id, $data){
        return $this->userService->updateUser($id, array_filter([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => isset($data['password']) ? Hash::make($data['password']) : null,
        ]));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user) {
            return redirect('/home')->with('error', 'Usuario no encontrado');
        }

        $this->userService->deleteUser($id);
        return redirect('/home');
    }
    
}
