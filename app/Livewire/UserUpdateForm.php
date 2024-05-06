<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Livewire\Forms\UserForm;


class UserUpdateForm extends Component
{
    public UserForm $form;

    public function mount(User $user)
    {
        $this->form = new UserForm($this, $user);
        $this->form->setUser($user);
    }

    public function save()
    {
        $this->form->update();
 
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.user-update-form');
    }
    
    public function cancel()
    {
        return redirect('/');
    }
}
