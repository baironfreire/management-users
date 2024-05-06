<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ListUsers extends Component
{
    public $users; // Definimos la variable $users aquí

    public function mount()
    {
        $this->users = User::all(); // Asignamos los usuarios a la variable $users
    }

    public function render()
    {
        $columns = ['Nro', 'Name', 'Last Name', 'Email', 'Phone Number', 'Status', 'Actions'];
        return view('livewire.list-users', ['columns' => $columns]);
    }
}
