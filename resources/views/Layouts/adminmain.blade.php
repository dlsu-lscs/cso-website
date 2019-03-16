<html>

<head>
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/Layouts/adminbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/BlogForm.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('header')
    <title>{{config('app.name', 'Council of Student Organizations')}}</title>
</head>
<body>
    @include('Layouts.errorsnackbar')
    @yield('content')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace( 'article-ckeditor', options );
    </script> 
    <script>
        function uploadImageHover(){
            var snack = document.getElementById("img-uploader__snack");
            snack.classList.add("img-uploader__hovered");
        }

        function uploadImageRemove(){
            var snack = document.getElementById("img-uploader__snack");
            snack.classList.remove("img-uploader__hovered");
        }
    </script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>