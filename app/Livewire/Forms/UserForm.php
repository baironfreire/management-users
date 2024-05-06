<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;

class UserForm extends Form
{
    //
    public ?User $user;
 
    #[Validate('required|min:5')]
    public $name = '';
 
    #[Validate('required|min:5')]
    public $last_name = '';

    #[Validate('required|min:5')]
    public $email = '';

    #[Validate('required|min:5')]
    public $phone_number = '';

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
        $this->user->update(
            $this->all()
        );
    }
}
