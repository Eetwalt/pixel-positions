<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateJob;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateJobTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateJob::class)
            ->assertStatus(200);
    }
}
