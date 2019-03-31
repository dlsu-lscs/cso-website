@extends('Layouts.main')
@section('header')
    <title>{{$blog->title}} | Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogShow.css')}}">

    <script src="{{asset('js/Blogs/socialscroll.js')}}"></script>
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$blog->title}}" />
    <meta property="og:description"   content="{{str_limit(strip_tags($blog->body), $limit = 220, $end = '...')}}" />
    <meta property="og:image"         content="localhost:8000/{{$blog->img}}   " />
@endsection

@section('content')

    <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
    <div class = "content">
        <div class = "thumbnail-container"></div>

        
        <div class = "blogcontainer">
            <div class = "socialcontent">
                SHARE
                <a href="http://www.facebook.com/share.php?u=google.com" onclick="return fbs_click()" target="_blank">
                    <div class = "socialcontent__button">
                        <i class="fa fa-facebook-official"></i>
                    </div>
                </a>
                <a href="http://twitter.com/home?status=Currentlyreading" title="Click to share this post on Twitter">
                <div class = "socialcontent__button">
                    <i class="fa fa-twitter-square"></i>
                </div>
                </a>

            </div>
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

            <!-- Your share button code -->
            <br>
            <hr>
            <br>

            <div class = "socialfooter left">
                <div class = "left" style = "line-height: 30px;">
                    Share this
                </div>
                <a href="http://www.facebook.com/share.php?u=google.com" onclick="return fbs_click()" target="_blank">
                    <div class = "socialfooter__but left">
                        <i class="fa fa-facebook-official"></i>
                    </div>
                </a>
                <div class = "socialfooter__but left">
                    <i class="fa fa-twitter-square"></i>
                </div>
            </div>
            
        </div>
    </div>
    @include('Layouts.navbar')
@endsection
