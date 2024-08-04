<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6 space-y-6">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Search jobs" />
            </x-forms.form>
        </section>

        <section>
            <livewire:todos />
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach

            </div>

        </section>
        <section>
            <x-section-heading>Recent jobs</x-section-heading>

            <div class="flex flex-col space-y-4 mt-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>

    </div>
</x-layout>
