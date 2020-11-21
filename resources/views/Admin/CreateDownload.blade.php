@extends('Layouts.adminmain')
@section('header')
    <title>Downloads</title>
    <link rel="stylesheet" href="{{asset('css/Admin/ViewBlogs.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('CreateDownloadSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        <form action="{{ URL::to('csoadmin/download') }}" method="post" enctype="multipart/form-data">
            <br>
            <label for="file">Upload File</label>
            <br>
            <input type="file" name="file" id="file" require>
            <input type="submit" value="Upload File" name="submit">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
    </div>
@endsection
