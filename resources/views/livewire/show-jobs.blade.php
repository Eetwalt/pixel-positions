<div>
    <h2>Jobs</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr wire:key="{{ $job->id }}">
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>
                        <button type="button" wire:click="delete({{ $job->id }})" wire:confirm="Are you sure?">Delete
                        </button>
                    </td>
                </tr>
            @endforeach
    </table>
</div>
