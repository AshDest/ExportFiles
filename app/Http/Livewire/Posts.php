<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Posts extends Component
{
    public $title;
    public $content;
    public $user_id;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function mount()
    {
        $this->user_id = User::first()->id;
    }

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => $this->user_id,
        ]);

        $this->title = '';
        $this->content = '';
        $this->emit('postAdded');
    }
    public function render()
    {
        return view('livewire.posts');
    }
}
