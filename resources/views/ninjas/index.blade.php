<x-layout>
    <h2> Ninjas Page </h2>

    <ul>
        @foreach($ninjas as $ninja)
            <li> 
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] == 'Water Breathing'">
                    <div>
                    <h3>{{ $ninja->name }}</h3>
                    <p> {{ $ninja->dojo->name }} </p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-layout>