<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::with('posts')->get();
    }
    public function render()
    {
        return view('livewire.users');
    }
}
