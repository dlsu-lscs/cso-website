@extends('Layouts.main')
@section('header')
    <title>{{$blog->title}} | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogShow.css')}}">
@endsection

@section('content')
    <div class = "content">
        <div class = "thumbnail-container" style = "background-image: url('{{$blog->img}}')"></div>
        <div class = "blogcontainer">
            <div onclick = "goBack()" style = "cursor: pointer;position: absolute;"><i class="fa fa-arrow-left"></i> Go back</div>
            <h1 class = "blogcontainer__header"> {{$blog->title}} </h1>
            <div class = "blogcontainer__header">Written on {{$blog->updated_at}}</div>
            <div>
                {!!$blog->body!!}
            </div>
            

            {!!Form::open(['action' => ['BlogController@destroy', $blog->id], 'method'=> 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete')}}
            {!!Form::close()!!}
        </div>
    </div>
    @include('Layouts.navbar')
@endsection
