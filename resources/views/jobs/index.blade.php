<x-layout>
    <div class="space-y-10">
        <div class="flex flex-col gap-8 pt-6 items-center w-full">
            <h1 class="text-4xl font-bold">Let us find your dream job</h1>
            
            <div class="text-center min-w-[700px]">
                <x-search-text-input />
            </div>
        </div>
        
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
    
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 flex flex-wrap gap-y-2 gap-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
    
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            
            <div class="mt-6 space-y-3">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @endforeach
            </div>
        </section>
    </div>
</x-layout> 