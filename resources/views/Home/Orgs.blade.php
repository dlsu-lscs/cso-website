
@extends('Layouts.main')
@section('header')
    <title>Organizations | Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Pages/org.css')}}">
@endsection

@section('content')
    <section id="banner" class="banner--abt">
        <div class="banner-content">
            <div class="banner__main-txt">Organizations</div>
            <div class="banner__sub-txt">some tagline here.</div>
        </div>
    </section>

    @foreach ($clusters as $key => $cluster)
        <section class = "clustersection">
            <div class = "clustersection__title">{{$key}}</div>
            <div class = "clustersection__subtitle">Meaning of cluster here</div>

        <div class = "clustersection__orgcontainer">
            @foreach ($cluster as $ckey => $item)
                <a href = "organizations/{{$item['info']['id']}}"><div class = "clustersection__orgcard left"><img src = "{{$item['logos']['img']}}" alt = "" class = "clustersection__orgcard--img"></div></a>
            @endforeach
        </div>

        </section>
    @endforeach
<!-- NAVBAR -->
@include('Layouts.navbar')
<!-- /NAVBAR -->
        
@endsection