@extends('Layouts.main')
@section('header')
    <title>Contact Us | Council of Student Organizations</title>
    <meta property="og:image" content="{{asset('assets/csofiles/CSO Pictures/IMG_0868.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
@endsection

@section('content')
    
    <!-- NAVBAR -->
    @include('Layouts.navbar', ['aboutnav'=>true])
    <!-- /NAVBAR -->
@endsection