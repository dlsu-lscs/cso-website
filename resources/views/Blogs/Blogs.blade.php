@extends('Layouts.main')
@section('header')
    <title>Blogs</title>
@endsection

@section('content')
    <div class = "content">
        <h1> Blogs </h1>
        @if(count($blogs) > 0)
            @foreach ($blogs as $blog)
                <div>
                    <h2>{{$blog->title}}</h2>
                    <h3>Created on {{$blog->created_at}}</h3>
                </div>
            @endforeach
        @else
            <h1>
                No blogs available.
            </h1>
        @endif

    </div>
    {{$blogs}}

    @include('Layouts.navbar')
@endsection
