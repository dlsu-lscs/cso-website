@extends('Layouts.main')
@section('header')
    {{-- <title>Downloads | Council of Student Organizations</title>
    <meta property="og:image" content="{{asset('assets/csofiles/CSO Pictures/IMG_0868.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/contact.css')}}">
@endsection

@section('content')
    <!-- NAVBAR -->
    @include('Layouts.navbar', ['downloadnav'=>true])
    <!-- /NAVBAR -->
@endsection