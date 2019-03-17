@extends('Layouts.main')
@section('header')
    <title>Blogs</title>
@endsection

@section('content')
    <div class = "content">
        <div style = "margin-top:120px; padding: 25px;" class = "blog-container">
        <h1> Create a Blog </h1>
        {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST' ]) !!}
            <div class = "form-group">
                {{ Form::label('title', 'Title')}}
                {{ Form::text('title', '',['class' => 'input-text', 'placeholder'=> 'Title'])}}
            </div>
            <div class = "form-group">
                {{ Form::label('body', 'Body')}}
                {{ Form::textarea('body', '',['id' => 'article-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'urmom'])}}
        {!! Form::close() !!}

        </div>
    </div>
    @include('Layouts.navbar')
@endsection
