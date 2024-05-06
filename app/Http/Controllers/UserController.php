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
        return $this->userService->createUser($data);
    }

    public function update($id, $data){
        return $this->userService->updateUser($id, $data);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user) {
            return redirect('/')->with('error', 'Usuario no encontrado');
        }

        $this->userService->deleteUser($id);
        return redirect('/');
    }
    
}
