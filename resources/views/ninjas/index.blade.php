<x-layout>
    <h2> Ninjas Page </h2>

    <ul>
        @foreach($ninjas as $ninja)
            <li> 
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{ $ninja['id']}}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>