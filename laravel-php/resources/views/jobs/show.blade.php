<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h1>{{ $job['title'] }}</h1><br>
    
    <h2>This job pays {{ $job['salary'] }} per year.</h2>
    
</x-layout>