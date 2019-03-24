
@extends('Layouts.main')
@section('header')
    <title>Mechanical Engineering Society | Council of Student Organizations</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/about.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/orgpage.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
    <style>

        .banner__org-jema__r:before {

            @if ($orgphoto1)
            background: url('{{$orgphoto1->img}}');
            @endif
        }
    </style>
@endsection


@section('content')
<div class = "content">
    <section id="banner" class="banner--org">
        
        @if ($orgphoto1)
        <div class="banner__org-lbl banner__org-jema__l" style = "background: url('{{$orgphoto1->img}}'); background-size: cover;">
        @else
            <div class="banner__org-lbl banner__org-jema__l">
        @endif
            <!-- <p>
            Mechanical Engineering Society <span>(MES)</span>                
            </p> -->
            <p>{{$client->name}} <span>({{$client->acronym}})</span></p>
        </div>
        <div class="banner__org-logo banner__org-jema__r">

            @if ($clientlogo)
                <img src="{{$clientlogo->img}}" alt=""/>
            @endif
        </div>
    </section>
    <!-- fix this block! no vh -->
    <section id="about" class="about--jema" style = "background-color: {{$clientinfo->color1}}">

        @if ($orgphoto1)
        <img class="about__org-photo" src="{{$orgphoto1->img}}" alt="">
        @else
        <img class="about__org-photo" src="" alt="">
        @endif
        <div class="about__desc">
            <div class="about__header">About {{$client->acronym}}</span></div>
            <div class="about__content">
                {!!$clientinfo->aboutus!!}
            </div>
        </div>
    </section>
    <section id="vis-mis">
        <div class="pdb">
            <div class="pdb__desc">
            <div class="pdb__desc__header jema-accent" style = "color: {{$clientinfo->color1}}">Vision</div>
                <div class="pdb__desc__body">{!!$clientinfo->vision!!}</div>
            </div>
            <div class="pdb__photo">
                @if ($orgphoto1)
                <img class="about__org-photo" src="{{$orgphoto1->img}}" alt="">
                @else
                <img class="about__org-photo" src="" alt="">
                @endif
            </div>
        </div>
        <div class="pdb">
            <div class="pdb__photo">
                @if ($orgphoto1)
                <img class="about__org-photo" src="{{$orgphoto1->img}}" alt="">
                @else
                <img class="about__org-photo" src="" alt="">
                @endif             
            </div>
            <div class="pdb__desc">
                <div class="pdb__desc__header jema-accent" style = "color: {{$clientinfo->color1}}">Mission</div>
                <div class="pdb__desc__body">{!!$clientinfo->mission!!}</div>
            </div>
            
        </div>
    </section>
    
    <section id="et">
        <div class="sec__header">The <span class="jema-accent" style = "color: {{$clientinfo->color1}}">Executive Team</span></div>        
        <div class="et__sub">
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Activity Monitoring Team (AMT)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
        </div>
        <div class="et__sub">
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Activity Monitoring Team (AMT)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="et__comm">
                <div class="et__comm__cont">
                    <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                    <div class="et__comm__cont__memb">
                        <p>
                            Juan Pedro dela Cruz<br>
                            <i>Vice Chairperson</i>
                        </p>
                    </div>                        
                </div>
            </div>
        </div>
    </section>
    <section id="footer"></section>
    
</div>
    <!-- NAVBAR -->
    @include('Layouts.navbar')
    <!-- /NAVBAR -->
    @endsection