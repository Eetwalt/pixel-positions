<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;

class ShowJobs extends Component
{
    public function delete(Job $job)
    {
        $job->delete();
    }

    public function render()
    {
        return view('livewire.show-jobs', [
            'jobs' => Job::all(),
        ]);
    }
}
