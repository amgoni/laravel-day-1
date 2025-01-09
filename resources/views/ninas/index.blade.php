<x-layout>
    <h2>Currently Available Ninas</h2>
    <p>{{ $greeting }}</p>
    <ul>
        @foreach($ninas as $nina)
        <li>
            <x-card href="/ninas/{{ $nina['id'] }}" :highlight="$nina['skill'] > 70">
                <h3>{{ $nina['name'] }}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>
