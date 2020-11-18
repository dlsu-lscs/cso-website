@extends('Layouts.main')
@section('header')
    <title>About Us | Council of Student Organizations</title>
    <meta property="og:image" content="{{asset('assets/csofiles/CSO Pictures/IMG_0868.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/mediaqueries/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
@endsection

@section('content')
<script>
    new WOW().init();
</script>
@include('Layouts.navbar', ['aboutnav'=>true])

<div class = "content">
    <section id="banner" class="main-section banner--abt" style="background-image: url({{$bannerphoto}})">
        <div class="section-content">
            <img class="section-content__left" src="{{$aboutphoto}}" alt="">
            <div class="section__info">
                <div class="section__info__subtitle">About</div>
                <div class="section__info__title">{{$aboutquote}}</div>
                <div class="section__info__body-container">
                    <p>{{$about}}</p>
                    <div class="divider"></div>
                </div>
            </div>
            <!-- <div class="banner__main-txt wow fadeInLeftBig">Lead with passion and serve with purpose,</div>
            <div class="banner__sub-txt wow fadeInRightBig">this is the heart of CSO.</div> -->
        </div>
    </section>
    <!-- fix this block! no vh -->
    <!-- <section id="about"> -->
        <!-- <img src="{{asset('assets/CSO Logo.png')}}" alt="">
        <div class="about__desc">
            <div class="about__header">About <span class="cso-accent">CSO</span></div>
            <div class="about__content">
                <p>The Council of Student Organizations (CSO) is the union of accredited professional (PROF), special interest (SPIN) and socio-civic organizations of De La Salle University.</p>
                <p>Since its founding in 1974, the Council has continuously delivered quality student services and has produced outstanding student leaders dedicated to serving and contributing to the Lasallian Community.</p>
            </div>
        </div>
    </section> -->
    <!-- <section id="vis-mis">
        <div class="pdb">
            <div class="pdb__desc wow fadeInLeft">
                <div class="pdb__desc__header">Our <span class="cso-accent">Vision</span></div>
                <div class="pdb__desc__body">The Council of Student Organizations is committed to delivering quality services and activities as well as developing proactive and dynamic student leaders befitting the standards of a world-class reseasrch University. We create and maintain conditions where our member organizations can achieve optimum performance and realize their goals. We are driven by the ideals of the Lasallian mission, thus, we work actively to feed the needs of the students and ulitimately promote the growth of their potentials.</div>
            </div>
            <div class="pdb__photo wow fadeInRight">
                <img src="{{asset('assets/csofiles/CSO Pictures/watwedo.jpg')}}" alt=""/>
            </div>
        </div>
        <div class="pdb">
            <div class="pdb__photo wow fadeInLeft">
                <img src="{{asset('assets/csofiles/CSO Pictures/onecso.jpg')}}" alt=""/>
            </div>
            <div class="pdb__desc wow fadeInRight">
                <div class="pdb__desc__header">Our <span class="cso-accent">Mission</div>
                <div class="pdb__desc__body">The Council of Student Organizations provides relevant and quality services that support heightened student involvement and development. We continually set standards that contribute to the flourishing of our member organizations as we work together to inspire growth and create a platform for communication. We are pioneers of nation-building and Lasallian-formation by maintaining a sense of social awareness and spiritual growth in our activities.</div>
            </div>

        </div>
    </section> -->
    <section id="gen-info" class="main-section">
        <div class="img-desc">
            <div class="img" style="background-image: url({{$whoarewephoto}})">
                <!-- <img src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt=""> -->
            </div>
            <div class="desc">
                <div class="desc-title">Who are we?</div>
                <div>
                    <p>
                    {{$whoarewe}}
                    </p>
                    <div class="divider"></div>

                </div>
            </div>
        </div>
        <div class="desc-pair">
        <div class="desc">
                <div class="desc-title">Our Vision</div>
                <div>
                    <p>
                    {{$vision}}
                    </p>
                    <div class="divider"></div>
                </div>
            </div>
            <div class="desc">
                <div class="desc-title">Our Mission</div>
                <div>
                    <p>
                    {{$mission}}
                    </p>
                    <div class="divider"></div>

                </div>
            </div>
        </div>
    </section>
    <section id="cv" class="main-section">
        <div class="sec__header wow fadeInDown">
            <p>Our Core Values</p>
            <div class="divider"></div>
        </div>
        <div class="cv__container">
            @foreach ($core as $value)
                <div class="cv__cv wow fadeInUp">
                    <div class="cv__cv__photo">
                        {{-- <img src="{{$value->img}}" alt=""/> --}}
                    </div>
                    <div>
                        <div class="cv__cv__label">{{$value->name}}</div>
                        <div class="cv__cv__body"> {{$value->description}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section id="eb" class="main-section">
        <div id="eb__bg" class="main-section">
            <div class="sec__header wow fadeInDown">
                <p>The Executive Board</p>
            </div>
            <div class="sec__desc">{{$ebdesc}}</div>
            <div id="ebpb">
                <div id="ebpb__leader--pos-4" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{$eb[3]->img}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">{{$eb[3]->name}}</div>
                        <div class="ebpb__leader__desc__title">{{$eb[3]->position}}</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-2" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{$eb[1]->img}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">{{$eb[1]->name}}</div>
                        <div class="ebpb__leader__desc__title">{{$eb[1]->position}}</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-1" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{$eb[0]->img}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">{{$eb[0]->name}}</div>
                        <div class="ebpb__leader__desc__title">{{$eb[0]->position}}</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-3" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{$eb[2]->img}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">{{$eb[2]->name}}</div>
                        <div class="ebpb__leader__desc__title">{{$eb[2]->position}}</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-5" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{$eb[4]->img}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">{{$eb[4]->name}}</div>
                        <div class="ebpb__leader__desc__title">{{$eb[4]->position}}</div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </section>
    <section id="et" class="main-section">
        <div class="sec__header wow fadeInUp">
            <p>The Executive Team</p>
            <div class="divider"></div>
        </div>
        <div class="et__sub et__execteam">
            @foreach ($teams as $team)
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div class="et__comm__logo">
                            <img src="{{$team->img}}" alt=""/>
                        </div>
                        <div class="et__comm__cont__title">{{$team->name}} ({{$team->alias}})</div>
                        <div class="et__comm__cont__memb">
                            <div class="et__comm__cont__memb__head">
                                {{$team->vc}}<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                            </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    @foreach ($team->members as $member)
                                        <li>{{$member}}</li> 
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <section id="footer"></section>

</div>
    <!-- NAVBAR -->
    <!-- @include('Layouts.navbar', ['aboutnav'=>true]) -->
    <!-- /NAVBAR -->
@endsection
