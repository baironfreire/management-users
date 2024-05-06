<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ListUsers extends Component
{
    public $users;

    public function mount($users)
    {
        $this->users = $users;
    }

    public function render()
    {
        $columns = ['Nro', 'Name', 'Last Name', 'Email', 'Phone Number', 'Actions'];
        return view('livewire.list-users', ['columns' => $columns]);
    }
}
