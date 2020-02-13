
    @extends('app')
        @section('content')
            <h2>{{$article->title}}</h2>
            <hr>
            <div class="body">
                <p>{{$article->content}}</p>
            </div>



    @stop
