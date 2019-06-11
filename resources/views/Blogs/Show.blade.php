@extends('Layouts.main')
@section('header')
    <title>{{$blog->title}} | Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Blogs/BlogShow.css')}}">

    <script src="{{asset('js/Blogs/socialscroll.js')}}"></script>
    <meta property="og:title"         content="{{$blog->title}}" />

    <meta property="og:image"         content="{{asset($blog->img)}}" />
    <meta property="og:description"   content="{{str_limit(strip_tags($blog->body), $limit = 220, $end = '...')}}" />
    <meta name="twitter:title" content="{{$blog->title}}">
    <meta name="twitter:description" content="{{str_limit(strip_tags($blog->body), $limit = 220, $end = '...')}}">
    <meta name="twitter:image" content="{{asset($blog->img)}}">
    <meta name="twitter:card" content="summary_large_image">
@endsection

@section('content')

    <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
    <script>
        function share_fb(link){
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(link),'sharer','toolbar=0,status=0,width=626,height=436');
        
        }
        function msg_func(link, app_id){
            window.open('fb-messenger://share?link=' + encodeURIComponent(link) + '&app_id=' + encodeURIComponent(app_id),'sharer','toolbar=0,status=0,width=626,height=436');
        }

        function share_twitter(link){
            window.open('https://twitter.com/intent/tweet?text={{$blog->title}} ' + encodeURIComponent(link),'sharer','toolbar=0,status=0,width=626,height=436');
            "https://twitter.com/intent/tweet?text=California%20Joins%20New%20Mexico%20in%20Withdrawing%20National%20Guard%20From%20Border%20by%20Citizen%20Truth%20Staff%20https%3A%2F%2Flink.medium.com%2FjcBKIidsqV"
        }
        
        function msg_click(){
            // msg_func(location.href, document.title);
            share_twitter(location.href);
        }
    </script>
    <div class = "content">
            <div class = "socialcontent">
                    SHARE
                    <a href="http://www.facebook.com/share.php?u=google.com" onclick="return fbs_click()" target="_blank">
                        <div class = "socialcontent__button">
                            <i class="fa fa-facebook-official"></i>
                        </div>
                    </a>
                    <div class = "socialcontent__button" onclick = "msg_click()">
                        <i class="fa fa-twitter"></i>
                    </div>
    
                </div>
        <div class = "thumbnail-container">

            <div class = "titlecontainer left">
                <div class = "titlecontainer__inner">
                    <div class = "titlecontainer__title">{{$blog->title}}</div><br>
                    <div class = "dividercontainer"><div class = "divider"></div></div>
                    <div class = "titlecontainer__subtitle"><br>
                        by {{$blog->author}}<br>
                        Published {{date("F", mktime(0, 0, 0, $blog->updated_at->month, 1))}} {{$blog->updated_at->day}}, {{$blog->updated_at->year}} 
                        @if($blog->updated_at->hour != 12)
                            {{$blog->updated_at->hour%12}}:{{$blog->updated_at->minute}}
                        @else
                            12:{{$blog->updated_at->minute}}
                        @endif
                        @if($blog->updated_at->hour >= 12)
                        p.m.
                        @else
                            a.m.
                        @endif
                    </div>
                </div>

            </div>
            <div class = "imagecontainer right" style = "background-image: url('{{$blog->img}}');">

            </div>
        </div>
        
        <div class = "blogcontainer">
            {{-- <div class = "socialcontent">
                SHARE
                <a href="http://www.facebook.com/share.php?u=google.com" onclick="return fbs_click()" target="_blank">
                    <div class = "socialcontent__button">
                        <i class="fa fa-facebook-official"></i>
                    </div>
                </a>
                <div class = "socialcontent__button" onclick = "msg_click()">
                    <i class="fa fa-twitter"></i>
                </div>

            </div> --}}
            {{-- <h1 class = "blogcontainer__header"> {{$blog->title}} </h1>
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
            <div class = thumbnailimg style = "background-image: url('{{$blog->img}}');"></div> --}}
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
                <div class = "socialfooter__but left" onclick = "msg_click()">
                    <i class="fa fa-twitter"></i>
                </div>
            </div>
            
        </div>
    </div>
    @include('Layouts.navbar', ['blognav' => true])
@endsection
