
@extends('Layouts.main')
@section('header')
    <title>{{$client->name}} | Council of Student Organizations</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/about.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/orgpage.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
    <style>

        .banner__org-jema__r:before {
            @isset ($generalphoto)
            background: url('{{$generalphoto}}');
            @endisset
        }
    </style>
@endsection


@section('content')
@include('Layouts.navbar', ['homenav'=>true])

<div class = "content">
    <section id="banner__org" class="banner--org">
    <div class="banner__org-bg" style = "background: url('{{$generalphoto or ''}}'); background-size: cover;"></div>
            <!-- <p>{{$client->name}} <span>({{$client->acronym}})</span></p> -->
        <!-- </div> -->

        <div class="banner__org-logo">
            <img src="{{$clientlogo->img or ''}}"/>
        </div> 
        <div class="banner__org-lbl">        
            <p>{{$client->name}} <span>({{$client->acronym}})</span></p>
        </div>

            <p class="banner__org-name">{{$client->name}} <span>({{$client->acronym}})</span></p>
        
        
        
        <!-- 
        <div class="banner__org-lbl banner__org-jema__l" style = "background: url('{{$generalphoto or ''}}'); background-size: cover;">
        -->
            <!-- <p>
            Mechanical Engineering Society <span>(MES)</span>                
            </p> -->
            <!-- <p style = "max-width:90%">{{$client->name}} <span>({{$client->acronym}})</span></p>
        </div> -->
        <!-- <div class="banner__org-logo banner__org-jema__r">

            @isset ($clientlogo)
                <img src="{{$clientlogo}}"/>
            @endisset
        </div> -->
    </section>
    <!-- fix this block! no vh -->
    <section id="about" class="main-section about--jema" style = "background-color: {{$clientinfo->color1}}">
        <div class="main-section__row-wrapper">
            <img class="about__org-photo" src="{{$aboutphoto or ''}}">
        <div class="about__desc">
            <div class="about__header">About {{$client->acronym}}</span></div>
            <div class="about__content">
                {!!$clientinfo->aboutus!!}
            </div>
            <div class="divider divider--white"></div>
        </div>
    </div>
    </section>
    <section id="vis-mis" class="main-section">
        <div class="pdb">
            <div class="pdb__desc">
            <div class="pdb__desc__header jema-accent" style = "color: {{$clientinfo->color1}}">Vision</div>
                <div class="pdb__desc__body">
                    {!!$clientinfo->vision!!}
                </div>
            <div class="divider" style = "background-color: {{$clientinfo->color1}}"></div>            
                
            </div>
            <div class="pdb__photo">
                <img class="about__org-photo" src="{{$visionphoto or ''}}">
            </div>
        </div>
        <div class="pdb">
            <div class="pdb__photo">
                <img class="about__org-photo" src="{{$missionphoto or ''}}">       
            </div>
            <div class="pdb__desc">
                <div class="pdb__desc__header jema-accent" style = "color: {{$clientinfo->color1}}">Mission</div>
                <div class="pdb__desc__body">{!!$clientinfo->mission!!}</div>
                <div class="divider" style = "background-color: {{$clientinfo->color1}}"></div>                        
            </div>
            
        </div>
    </section>
    
    <section id="et" class="main-section">
        <div class="sec__header">The <span class="jema-accent" style = "color: {{$clientinfo->color1}}">Executive Team</span></div>        
        <div class="et__sub">
            @foreach ($orgofficers as $orgofficer)
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            <div class="et__comm__cont__memb__name et__comm__cont__title--lighter">{{$orgofficer->name}}</div>
                            <div class="et__comm__cont__memb__title" style = "color: {{$clientinfo->color1}}">{{$orgofficer->position}}</div>
                        </div>
                    </div>                        
                </div>
            </div>
            @endforeach
            
        </div>
    </section>
    <section id="footer"></section>
    
</div>
    <!-- NAVBAR -->
    <!-- /NAVBAR -->
    @endsection