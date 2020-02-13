
@extends ('app')

@section('content')

    <h1>Contact information: {{ $name }} {{$tel}} </h1>

@stop

@section('content2')
    <h2>Please contact:</h2>
    @if(count($people) > 0)
    <ul>
        @foreach($people as $person)
            <li>
                {{$person}}
            </li>
            @endforeach
    </ul>

    @endif
    @stop
