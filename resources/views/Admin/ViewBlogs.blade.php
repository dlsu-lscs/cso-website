@extends('Layouts.adminmain')
@section('header')
    <title>Blogs</title>
    <link rel="stylesheet" href="{{asset('css/Admin/ViewBlogs.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('EditBlogSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        <div class = "blogscontainer --left">
        <h1 style = "margin-left: 5px;"> Choose a blog to edit </h1>
        @if(count($blogs) > 0)
            @foreach ($blogs as $blog)
                <a href = "/admin/editblog/{{$blog->id}}">
                    <div class = "blogbox --left" style = "background-image: url({{$blog->img}})">
                        <div class = "blogbox__editcontainer"><i class="fa fa-pencil"></i> </div>
                        <div class = "blogbox__header">
                            <p><b class = "--gold">{{$blog->title}}</b></p>

                            <p class = "blogbox__header__post"> by: {{$blog->author}}</p>

                            <p class = "blogbox__header__post right">{{ $blog->lonago}}</p>
                            {{-- <p>Created on {{$blog->created_at}}</p> --}}
                        </div>
                    </div>
                </a>
            @endforeach

            </div>

            <div class = "pagecontainer">
            {{$blogs->links()}}
            </div>
        @else
            <h1>
                No blogs available.
            </h1>
            </div>
        @endif

    </div>
@endsection
