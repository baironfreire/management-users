<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Livewire\Forms\UserForm;


class UserCreateForm extends Component
{
    public UserForm $form;

    public function mount(User $user)
    {
        $this->form = new UserForm($this, $user);
        $this->form->setUser($user);
    }

    public function render()
    {
        return view('livewire.user-create-form');
    }

    public function save()
    {
        $this->form->save();
 
        return $this->redirect('/home');
    }

    public function cancel()
    {
        return redirect('/home');
    }
}
