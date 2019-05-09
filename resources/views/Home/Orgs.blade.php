
@extends('Layouts.main')
@section('header')
    <title>Organizations | Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Pages/org.css')}}">
@endsection

@section('content')
    <section id="banner" class="banner--abt">
        <div class="banner-content">
            <div class="banner__main-txt">Organizations</div>
            <div class="banner__sub-txt">accredited by CSO</div>
        </div>
    </section>

    @foreach ($clusters as $key => $cluster)
        <section class = "clustersection">
            <div class = "clustersection__title">{{$key}}</div>
            @if ($key == 'ASO')
                <div class = "clustersection__subtitle">College of Science Organizations</div>
            @elseif($key == 'ASPIRE')
                <div class = "clustersection__subtitle">College of Education and Special Interest and Socio-Civic Organizations</div>
            @elseif($key == 'CAP 12')
                <div class = "clustersection__subtitle">College of Liberal Arts Organizations</div>
            @elseif($key == 'ENGAGE')
                <div class = "clustersection__subtitle">College of Engineering and College of Computer Studies Organizations</div>
            @else
                <div class = "clustersection__subtitle">College of Business and School of Economics</div>
            @endif

        <div class = "clustersection__orgcontainer">
            @foreach ($cluster as $ckey => $item)
                <a href = "organizations/{{$item['info']['id']}}"><div class = "clustersection__orgcard left"><img src = "{{$item['logos']['img']}}" alt = "" class = "clustersection__orgcard--img"></div></a>
            @endforeach
        </div>

        </section>
    @endforeach
<!-- NAVBAR -->
@include('Layouts.navbar', ['orgnav' => true])
<!-- /NAVBAR -->
        
@endsection