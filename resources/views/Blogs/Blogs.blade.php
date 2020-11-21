@extends('Layouts.main')
@section('header')
    <title>Blogs</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogsHome.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pages/mediaqueries/blogs.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

@include('Layouts.navbar', ['blognav'=>true]) 
    <div class = "content">

            <div class = "shade__light">
                <div class = "blogmenu">
                    <form class="form-horizontal right" method="GET" action="/blogs">
                    {{-- <button type = "button" class = "left magnifybutton searchform" onclick = "togglesearch()"><i class = "fa fa-search"></i> </button> --}}
                    <div>
                    <div class = "left magnifybutton searchform" ><i class = "fa fa-search"></i> </div>
                    <input name = "search" id = "searchbar" type = "text" class = "searchbar left searchform" value = "{{$search}}" placeholder = "Search blogs...">
                    <button type = "submit" class = "searchbutton left searchform">Search</button>
                    </div>
                    </form>
                    <div class = "blogstitle left">
                        BLOGS FROM CSO
                    </div>
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
        @if(count($blogs) > 1)
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
                        <div class = "left --iblog_container --image">
                        @else
                        <div class = "left --iblog_container --image">
                        @endif
                            <img src="{{$blog->img}}" alt="" class = "--img" />
                        </div>

                        @if($key%2 == 1)
                        <div class = "left iblogcontent">
                        @else
                        <div class = "left iblogcontent">
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
                                READ MORE
                            </div>
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>

            <script>
                function stripHtml(html){
                    // source: https://ourcodeworld.com/articles/read/376/how-to-strip-html-from-a-string-extract-only-text-content-in-javascript
                    var temporalDivElement = document.createElement("div");
                    temporalDivElement.innerHTML = html;
                    return temporalDivElement.textContent || temporalDivElement.innerText || "";
                }
                @if(count($blogs) > 0)
                var latestcount = {{ count($blogs) }}
                var latest_id = {{ $blogs->last()->id }};
                @else
                var latestcount = 0;
                var latest_id = 0;
                @endif
                var searchvar = "";
                @if($search != "")
                    searchvar = $search;
                @endif
                var num_get = 2;
                function test(){
                    $.ajax({
                        type:"POST",
                        url:"/api/seemore",
                        data: {
                            'latest_id': latest_id,
                            'search': searchvar
                        },
                        headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(blogs){
                            if(blogs.length < num_get){
                                $('.seemore').remove();
                            }
                            for(blog in blogs){
                                latestcount++;

                                sb = ""
                                sb += '<div class = "iblog">'

                                if(latestcount % 2 == 0){
                                    sb += '<div class = "left --iblog_container --image">';
                                }
                                else{
                                    sb += '<div class = "right --iblog_container --image">';
                                }
                                sb += '<img src="'+blogs[blog]['img']+'" alt="" class = "--img" />'
                                sb += '</div>'
                                
                                if(latestcount % 2 == 0){
                                    sb += '<div class = "left iblogcontent">'
                                }
                                else{
                                    sb+= '<div class = "right iblogcontent">'
                                }

                                var content = stripHtml(blogs[blog]['body']);
                                
                                content = content.substring(0, 521);
                                if(content.length >520){
                                    content += '...';
                                }

                                sb += `
                                            <div class = "iblogcontent__title">
                                            `+blogs[blog]['title']+`
                                        </div>
                                        <div class = "iblogcontent__body">
                                            <small>`+blogs[blog]['author']+`<br>
                                            `+blogs[blog]['longago']+`</small>

                                            <div class = "divider" style="margin-top:15px;"></div>
                                        </div>
                                        <div class = "iblogcontent__body">
                                            `+content+`
                                        </div>
                                        <a href = "/blogs/`+blogs[blog]['id']+`">
                                        <div class = "iblogcontent__readmore">
                                            READ MORE
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                `;
                                
                            $('.iblogcontainer').append(sb);   

                            latest_id = blogs[blog]['id'];
                            }
                            // console.log(blogs);
                            //location.reload();
                        }
                    });
                }
                function togglesearch(){
                    var elems = document.getElementsByClassName("searchform");
                    for(elem in elems){
                        if(elems[elem].classList){
                            elems[elem].classList.toggle("searchchange");
                        }
                    }
                    var searchbar = document.getElementById("searchbar");
                    searchbar.focus();
                    
                }
            </script>
            @if(count($blogs) == 5)
            <div class = "centermore"><div class="seemore" onclick = "test()">See more</div></div>
            @endif
        </div>
        @endif
    </div>
@endsection
