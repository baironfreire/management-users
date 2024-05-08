<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;
use App\Http\Controllers\UserController;

class UserForm extends Form
{
    protected $userController;
    //
    public ?User $user;

    public $name = '';
 
    public $last_name = '';

    public $email = '';

    public $phone_number = '';

    public $password = null;

    public $password_confirmation = null;


    public function __construct($id, $data)
    {
        parent::__construct($id, $data);
        $this->userController = App::make(UserController::class); // Crea una instancia del controlador
    }

    public function setUser(User $user)
    {
        $this->user = $user;
 
        $this->name = $user->name;
 
        $this->last_name = $user->last_name;

        $this->email = $user->email;

        $this->phone_number = $user->phone_number;
    }

    public function update()
    {
        $this->userController->update(
            $this->user->id,
            $this->validate([
                'name' => 'required|min:5',
                'last_name' => 'min:5',
                'email' => 'required|min:5|email|unique:users,email,'. $this->user->id,
                'phone_number' => 'min:5',
                'password' => 'nullable|string|min:8|confirmed', 
                
            ])
        );
    }

    public function save(){
        $this->userController->store(
            $this->validate([
                'name' => 'required|min:5',
                'last_name' => 'min:5',
                'email' => 'required|min:5|email|unique:users,email',
                'phone_number' => 'min:5',
                'password' => 'nullable|string|min:8|confirmed', 
            ])
        );
    }

    public function register(){
        $url = route('register');
     
        $this->userController->register(
            $this->validate([
                'name' => 'required|min:5',
                'last_name' => 'min:5',
                'email' => 'required|min:5|email',
                'phone_number' => 'min:5',
                'password' => 'required|min:5', 
            ])
        );
    }
}
