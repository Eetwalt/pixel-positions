<x-layout>
    <x-page-heading>Post a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$100,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="San Francisco, CA" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
            <option value="contract">Contract</option>
            <option value="freelance">Freelance</option>
        </x-forms.select>

        <x-forms.input label="Link" name="url" placeholder="www.google.com" />
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="php, laravel, javascript" />

        <x-forms.button>Create Job</x-forms.button>

    </x-forms.form>
</x-layout>
