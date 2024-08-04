<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]

class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'Learn Livewire',
            'Build a todo app',
            'Profit!',
        ];
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
