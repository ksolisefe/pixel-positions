<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-3">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @endforeach
    </div>
</x-layout>