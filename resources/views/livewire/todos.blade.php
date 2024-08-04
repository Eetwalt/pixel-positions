<div>
    <x-forms.form wire:submit="add">
        <x-forms.input label="Add todo" name="todo" placeholder="Add Todo" wire:model="todo" />
        <x-forms.button>Add Todo</x-forms.button>
    </x-forms.form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>

    <livewire:create-job />
    <livewire:show-jobs />
</div>
