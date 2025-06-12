<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
            ${{ number_format($job->salary)}}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-slate-500 text-sm items-center">
        <div class="flex space-x-4">
            <div>{{ $job->employer->company_name }}</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>
                <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
                  {{ Str::ucfirst($job->experience) }}    
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
                    {{ $job->category }}
                </a>
            </x-tag>
        </div>
    </div>
    {{-- <div>            
        <a href="{{route('jobs.show', $job)}}" class="rounded-md border border-slate-300 bg-white px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-slate-100">
            Show
        </a>
        <x-link-button :href="route('jobs.show', $job)">
            Show
        </x-link-button>
    </div> --}}

    {{ $slot }}
</x-card> 