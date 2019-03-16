@extends('Layouts.adminmain')
@section('header')
    <title>Admin | CSO</title>
    <link rel="stylesheet" href="{{asset('css/Admin/Home.css')}}">
@endsection

@section('content')
    @include('Layouts.adminbar')
    <div class = "admin-container">
        <div class = "blogform">
            
        </div>
    </div>
    
@endsection