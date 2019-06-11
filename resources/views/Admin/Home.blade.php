@extends('Layouts.adminmain')
@section('header')
    <title>Admin | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Admin/Home.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('CreateBlogSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        <div class = "blogform">
            {!! Form::open(['action' => 'AdminController@publish', 'method' => 'POST' ]) !!}
                <div class = "topform">
                    <div class = "right">
                        {{Form::submit('Publish', ['class' => 'button right'])}}
                        {{-- <button class = "right linkbutton" type="submit"formaction="/csoadmin/draft"><i class="fa fa-save"></i> Save Draft</button> --}}
                        <button class = "right linkbutton" type="submit"formaction="/csoadmin/preview"><i class="fa fa-eye"></i> Preview</button>
                    </div>
                    <div class = "form-group uploadform">
                        <div id = "img-uploader" onclick = "uploadThumbnail()" onmouseover="uploadImageHover()" onmouseout="uploadImageRemove()">
                            <div id = "img-uploader__snack"> Upload Thumbnail </div>
                            {{ Form::text('img', '',['class' => 'shadow-text', 'placeholder'=> 'Thumbnail', 'id'=> 'invi-img'])}}
                        </div>
                    </div>

                </div>
                <div class = "form-group">
                    {{ Form::label('title', 'Title')}}
                    {{ Form::text('title', '',['class' => 'input-text', 'placeholder'=> 'Title'])}}
                </div>
                <div class = "form-group">
                    {{ Form::label('author', 'Author')}}
                    {{ Form::text('author', '',['class' => 'input-text', 'placeholder'=> 'Author'])}}
                </div>
                <div class = "form-group">
                    {{ Form::label('body', 'Body')}}
                    {{ Form::textarea('body', '',['id' => 'article-ckeditor','class' => 'input-text', 'placeholder'=> 'body'])}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    
    <script>
        var lfm = function(options, cb) {

        var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
        // alert(options.type);
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
        }

        function uploadThumbnail(){
            lfm({type: 'image'}, function(url, path) {
                var uploader = document.getElementById("img-uploader");
                uploader.style.backgroundImage = "url("+path+")";
                var inputter = document.getElementById("invi-img");
                inputter.value = path;
            });
        }
    </script>
@endsection