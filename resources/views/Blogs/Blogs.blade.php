@extends('Layouts.main')
@section('header')
    <title>Blogs</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogsHome.css')}}">
@endsection

@section('content')
    <div class = "content">

            <div class = "shade__light">
                <div class = "blogmenu">
                    <form class="form-horizontal" method="GET" action="/blogs">
                    <input name = "search" type = "text" class = "searchbar left" value = "" placeholder = "Search blogs">
                    <button type = "submit" class = "searchbutton left">Search</button>
                    </form>
                </div>
            </div>
    
    
        <div class = "containerofblogs">
            <div class= "blogscontainer">

                @if(count($blogs) > 0)
                            <a href = "/blogs/{{$blogs->first()->id}}">
                            <div class = "featuredblog" style = "background-image: url('{{$blogs->first()->img}}');">
                                    <div class = "featuredblog__cover"></div>
                                    <div class = "featuredblog__bottom">
                                        <p class = "featuredblog__kind">LATEST BLOG</p>
                                        <p class = "featuredblog__title">{{$blogs->first()->title}}</p>
                                        <p class = "featuredblog__desc">{{str_limit(strip_tags($blogs->first()->body), $limit = 120, $end = '...')}}</p>
                                        <p class = "featuredblog__desc">by: <span class = "featuredblog__author">{{$blogs->first()->author}}</span></p>
                                        <p class = "featuredblog__small">{{$blogs->first()->longago}}</p>
                                    </div>
                            </div>
                            </a>


                @else
                    <div class = "noblogscontainer noblogscontainer--text">
                        <i class="material-icons noblogscontainer--text">error_outline</i> There are no blogs available.
                    </div>
                @endif

            
            </div>
        </div>
        <div class = "infinityblogs">
            <div class = "shade">
                <div class = "iblogsection">
                    <div class = "iblogtitle">Other CSO Blogs and Stories</div>
                    <div class = "dividercontainer"><div class = "divider"></div></div>
                </div>
            </div>


            <div class = "iblogcontainer">

                @foreach ($blogs as $key=>$blog)
                @if($key > 0)
                    <div class = "iblog">
                        @if($key%2 == 1)
                        <div class = "left --iblog_container">
                        @else
                        <div class = "right --iblog_container">
                        @endif
                            <img src="{{$blog->img}}" alt="" class = "--img" />
                        </div>

                        @if($key%2 == 1)
                        <div class = "left iblogcontent">
                        @else
                        <div class = "right iblogcontent">
                        @endif
                            <div class = "iblogcontent__title">
                                {{$blog->title}}
                            </div>
                            <div class = "iblogcontent__body">
                                <small>{{$blog->author}}<br>
                                {{$blog->longago}}</small>

                                <div class = "divider" style="margin-top:15px;"></div>
                            </div>
                            <div class = "iblogcontent__body">
                                {{str_limit(strip_tags($blog->body), $limit = 620, $end = '...')}}
                            </div>
                            <a href = "/blogs/{{$blog->id}}">
                            <div class = "iblogcontent__readmore">
                                Read More
                            </div>
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @include('Layouts.navbar', ['blognav'=>true])
@endsection
