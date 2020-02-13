
@extends('app')

    @section('content')
        <h1>Write your new Article</h1>

        {!! Form::open(['url'=>'/articles']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}

                {!! Form::text('title', null, ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('content','Content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('published_at','Published_at:') !!}
                {!! Form::input('date','published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
{{--                {!! Form::label('') !!}--}}
                {!! Form::submit("Submit", ['class'=>'btn btn-primary form-control']) !!}
            </div>

        {!! Form::close() !!}

        @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
                @endforeach
        </ul>
        @endif

        @stop
