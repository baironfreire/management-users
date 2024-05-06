<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Services\Contracts\UserServiceInterface;

class ListUsers extends Component
{
    public $users;

    public function mount(UserServiceInterface $userService)
    {
        $this->users = $userService->getAllUsers();
    }

    public function render()
    {
        $columns = ['Nro', 'Name', 'Last Name', 'Email', 'Phone Number', 'Actions'];
        return view('livewire.list-users', ['columns' => $columns]);
    }
}
