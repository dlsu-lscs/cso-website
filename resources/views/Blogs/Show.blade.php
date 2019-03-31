@extends('Layouts.main')
@section('header')
    <title>{{$blog->title}} | Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogShow.css')}}">
@endsection

@section('content')
    <div class = "content">
        <div class = "thumbnail-container"></div>
        <div class = "blogcontainer">
            <h1 class = "blogcontainer__header"> {{$blog->title}} </h1>
            <div><br>
                <div class = "blogcontainer__header right">
                    <small>@if($blog->updated_at->hour != 12)
                        {{$blog->updated_at->hour%12}}:{{$blog->updated_at->minute}}
                    @else
                        12:{{$blog->updated_at->minute}}
                    @endif
                    @if($blog->updated_at->hour >= 12)
                    p.m.
                    @else
                        a.m.
                    @endif
                </small>

                    {{date("F", mktime(0, 0, 0, $blog->updated_at->month, 1))}} {{$blog->updated_at->day}}, {{$blog->updated_at->year}} 
                    
                </div>
                <div class = "blogcontainer__header left">By: <b>{{$blog->author}}</b></div>
            </div><br>
            <div class = thumbnailimg style = "background-image: url('{{$blog->img}}');"></div>
            <div>
                {!!$blog->body!!}
            </div>
            

            {{-- {!!Form::open(['action' => ['BlogController@destroy', $blog->id], 'method'=> 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete')}}
            {!!Form::close()!!} --}}
        </div>
    </div>
    @include('Layouts.navbar')
@endsection
