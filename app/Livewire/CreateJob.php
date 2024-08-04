<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateJob extends Component
{
    #[Rule('required', message: 'Otsikko on pakollinen')]
    #[Rule('min:3', message: 'Otsikko on liian lyhyt')]
    public $title = '';

    #[Rule('required', message: 'Palkka on pakollinen')]
    #[Rule('min:3', message: 'Palkka on liian lyhyt')]
    public $salary = '';

    public function save()
    {
        $this->validate();

        Job::create([
            'employer_id' => 1,
            'title' => $this->title,
            'salary' => $this->salary,
            'location' => '',
            'schedule' => 'Full Time',
            'url' => '',
            'featured' => false,    
        ]);

        $this->redirect('/todos');
    }

    public function render()
    {
        return view('livewire.create-job');
    }
}
