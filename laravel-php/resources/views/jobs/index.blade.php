<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    
    <h1>Hello Jobs from PHP and Laravel</h1><br>

        @foreach ($jobs as $job)
                <a href="/jobs/{{$job['id']}}">
                    <div>
                        {{ $job->employer->name }}
                    </div>
                    <div>
                        <strong>{{ $job['title'] }}: Pays {{ $job['salary']}} per year.</strong>
                    </div>
                </a>
        @endforeach

        <div>
            {{ $jobs->Links() }}
        </div>

</x-layout>