@extends('Layouts.main')
@section('header')
    <title>Blogs</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogsHome.css')}}">
@endsection

@section('content')
    <div class = "content">
        <div class= "blogscontainer">

            @if(count($blogs) > 0)
                @foreach ($blogs as $key=>$blog)
                    @if($key == 0)
                        <a href = "/blogs/{{$blog->id}}">
                        <div class = "featuredblog" style = "background-image: url('{{$blog->img}}');">
                                <div class = "featuredblog__cover"></div>
                                <div class = "featuredblog__bottom">
                                    <p class = "featuredblog__kind">LATEST BLOG</p>
                                    <p class = "featuredblog__title">{{$blog->title}}</p>
                                    <p class = "featuredblog__desc">{{str_limit(strip_tags($blog->body), $limit = 120, $end = '...')}}</p>
                                    <p class = "featuredblog__desc">by: <span class = "featuredblog__author">{{$blog->author}}</span></p>
                                    <p class = "featuredblog__small">Posted 3 seconds ago</p>
                                </div>
                        </div>
                        </a>

                        <div class = "otherblogscontainer">
                    @else
                            <div class = "minorblog">
                                <a href = "/blogs/{{$blog->id}}"><div class = "minorblog__img left" style = "background-image: url('{{$blog->img}}');"></div></a>
                                <div class = "minorblog__info left">
                                    <a href = "/blogs/{{$blog->id}}"><p class = "minorblog__info__title">{{$blog->title}}</p></a>
                                    <p class = "minorblog__info__small">by: <b>{{$blog->author}}</b></p>
                                    <p class = "minorblog__info__small">Posted a few hours ago.</p>
                                    <p class = "minorblog__info__desc">{{str_limit(strip_tags($blog->body), $limit = 220, $end = '...')}}</p>
                                    <a href = "/blogs/{{$blog->id}}"><div class ="minorblog__info__readcontainer"><div class = "read-more">Read more</div></div></a>
                                </div>
                            </div>
                    @endif
                @endforeach
                        </div>

            @else
                <div class = "noblogscontainer noblogscontainer--text">
                    <i class="material-icons noblogscontainer--text">error_outline</i> There are no blogs available.
                </div>
            @endif
        </div>
    </div>
    @include('Layouts.navbar')
@endsection
