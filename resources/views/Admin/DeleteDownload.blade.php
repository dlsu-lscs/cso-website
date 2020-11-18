@extends('Layouts.adminmain')
@section('header')
    <title>Downloads</title>
    <link rel="stylesheet" href="{{asset('css/Admin/ViewBlogs.css')}}">
@endsection

@section('content')
    @extends('Layouts.adminbar')
    @section('DeleteDownloadSection')
        <div class = "admin-side-item a-selected">
    @endsection
    <div class = "admin-container">
        @foreach($files as $file)
            <a href="/csoadmin/download/delete/{{ $file }}" onclick="return confirm('Delete this file?')">{{ $file }}</a>
            <br>
        @endforeach
    </div>
@endsection
