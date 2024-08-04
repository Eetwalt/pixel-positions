<div>
    <h2 class="mt-8">Create Job</h2>

    <button x-on:click="$wire.title = ''; $wire.salary = '';" class="btn btn-primary">Reset</button>
    <x-forms.form wire:submit="save">
        <x-forms.input label="Title" name="title" placeholder="Title" wire:model="title" wire:model="title" />
        <small>
            <span x-text="$wire.title.length"></span>
        </small>
        <x-forms.input label="Salary" name="salary" placeholder="Salary" wire:model="salary" wire:model="salary" />

        <x-forms.button>Create Job</x-forms.button>
    </x-forms.form>
</div>
