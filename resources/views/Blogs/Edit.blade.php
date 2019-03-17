@extends('Layouts.main')
@section('header')
    <title>Blogs</title>
@endsection

@section('content')
    <div class = "content">
        <h1> Edit Blog </h1>
        {!! Form::open(['action' => ['BlogController@update', $blog->id], 'method' => 'POST' ]) !!}
            </div class = "form-group">
                {{ Form::label('title', 'Title')}}
                {{ Form::text('title', $blog->title,['class' => 'input-text', 'placeholder'=> 'Title'])}}
            </div>
            <div class = "form-group">
                {{ Form::label('body', 'Body')}}
                {{ Form::textarea('body', $blog->body,['id' => 'article-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class' => 'urmom'])}}
        {!! Form::close() !!}


    </div>
    @include('Layouts.navbar')
@endsection
