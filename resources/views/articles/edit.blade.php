
@extends('app')

    @section('content')
        <h1>{{ $article->title }}</h1>

        {!! Form::model($article, ['url'=>'/articles/'.$article->id, 'method'=>'PATCH']) !!}
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

        @include('errors/list')


        @stop
