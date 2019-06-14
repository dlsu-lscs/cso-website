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
    <section id="banner" class="main-section banner--abt">
        <div class="section-content">
            <img class="section-content__left" src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt="">
            <div class="section__info">
                <div class="section__info__subtitle">About</div>
                <div class="section__info__title">Lead with passion and serve with purpose, this is the heart of CSO.</div>
                <div class="section__info__body-container">
                    <p>Providing service to its accredited organizations by ensuring that the activities/projects/initiatives of these organizations are well prepared, documented, and executed.</p>
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
            <div class="img">
                <!-- <img src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt=""> -->
            </div>
            <div class="desc">
                <div class="desc-title">Who are we?</div>
                <div>
                    <p>
                    The Council of Student Organizations (CSO) is the union of accredited professional (PROF), special interest (SPIN) and socio-civic organizations of De La Salle University.
                    </p>
                    <p>
                    Since its founding in 1974, the Council has continuously delivered quality student services and has produced outstanding student leaders dedicated to serving and contributing to the Lasallian Community.
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
                    The Council of Student Organizations is committed to delivering quality services and activities as well as developing proactive and dynamic student leaders befitting the standards of a world-class reseasrch University. We create and maintain conditions where our member organizations can achieve optimum performance and realize their goals. We are driven by the ideals of the Lasallian mission, thus, we work actively to feed the needs of the students and ulitimately promote the growth of their potentials.
                    </p>
                    <div class="divider"></div>
                </div>
            </div>
            <div class="desc">
                <div class="desc-title">Our Mission</div>
                <div>
                    <p>
                    The Council of Student Organizations provides relevant and quality services that support heightened student involvement and development. We continually set standards that contribute to the flourishing of our member organizations as we work together to inspire growth and create a platform for communication. We are pioneers of nation-building and Lasallian-formation by maintaining a sense of social awareness and spiritual growth in our activities.
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
            <div class="cv__cv wow fadeInUp">
                <div class="cv__cv__photo">
                    <img src="{{asset('assets/sample/logo-placeholder.png')}}" alt=""/>
                </div>
                <div>
                    <div class="cv__cv__label">Competence</div>
                    <div class="cv__cv__body">Upholding the Lasallian brand of leadership, the Council serves as an example in innovating standards.</div>
                </div>
            </div>
            <div class="cv__cv wow fadeInUp">
                <div class="cv__cv__photo">
                    <img src="{{asset('assets/sample/logo-placeholder.png')}}" alt=""/>
                </div>
                <div>
                    <div class="cv__cv__label">Service</div>
                    <div class="cv__cv__body">Driven by the passion to serve, the Council abides by the Lasallian Core Values for the benefit of its member organizations.</div>
                </div>
            </div>
            <div class="cv__cv wow fadeInUp">
                <div class="cv__cv__photo">
                    <img src="{{asset('assets/sample/logo-placeholder.png')}}" alt=""/>
                </div>
                <div>
                    <div class="cv__cv__label">Order</div>
                    <div class="cv__cv__body">Pioneering integrity and ethics, the Council integrates these in its service and constitute discipline among its officers.</div>
                </div>
            </div>
        </div>
    </section>
    <section id="eb" class="main-section">
        <div id="eb__bg" class="main-section">
            <div class="sec__header wow fadeInDown">
                <p>The Executive Board</p>
            </div>
            <div class="sec__desc">The CSO Executive Board is composed of the Chairperson, Executive Vice Chairperson for Internals, Executive Vice Chairperson for Externals, Executive Vice Chairperson for Finance, Executive Vice Chairperson for Activity and Documentations. As the Executive Board of 44th CSO, we commit to uphold our legacy which is to produce leaders who lead with passion and serve with a purpose. Together as one CSO, we will continue to show the heart of CSO through our service to the organizations.</span></div>
            <div id="ebpb">
                <div id="ebpb__leader--pos-5" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{asset('assets/csofiles/CSO EB Pictures/EVC ACTIVITIES AND DOCUMENTATIONS - FELICCI LARA.JPG')}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">Armina Felicci Lara</div>
                        <div class="ebpb__leader__desc__title">Executive Vice Chairperson for Finance</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-2" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{asset('assets/csofiles/CSO EB Pictures/EVC INTERNALS - ELISA DY.JPG')}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">Elisa Dy</div>
                        <div class="ebpb__leader__desc__title">Executive Vice Chairperson for Internals</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-1" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{asset('assets/csofiles/CSO EB Pictures/COUNCIL CHAIRPERSON - JASHIA CHUA .JPG')}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">Jashia Caila Chua</div>
                        <div class="ebpb__leader__desc__title">Council Chairperson</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-3" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{asset('assets/csofiles/CSO EB Pictures/EVC EXTERNALS - MHARJORIE SANDEL.JPG')}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">Mharjorie Sandel</div>
                        <div class="ebpb__leader__desc__title">Executive Vice Chairperson for Externals</div>
                    </div>
                </div>
                <div id="ebpb__leader--pos-4" class="ebpb__leader">
                    <div class="ebpb__leader__photo">
                        <img src="{{asset('assets/csofiles/CSO EB Pictures/EVC FINANCE - NICOLLE MADRID.JPG')}}" alt=""/>
                    </div>
                    <div class="ebpb__leader__desc">
                        <div class="ebpb__leader__desc__name">Nicolle Bien Madrid</div>
                        <div class="ebpb__leader__desc__title">Executive Vice Chairperson for Activities and Documentation</div>
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
        <div class="et__sub">
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div class="et__comm__logo">
                            <img src="{{asset('assets/Team Logos/Copy of AMT(Transparent).png')}}" alt=""/>
                        </div>
                        <div class="et__comm__cont__title">Activity Monitoring Team (AMT)</div>
                        <div class="et__comm__cont__memb">
                            <div class="et__comm__cont__memb__head">
                                Justine Caroline Dolorito<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                            </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Andre Joshua Cordero Sy</li>
                                    <li>Alyssa Mae Melegrito</li>
                                    <li>Regina Ara Motar</li>
                                    <li>Paul Nathaniel Nugraha</li>
                                    <li>Raphael Francis Regaspi</li>
                                    <li>Gwynette Aira Sy</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of ORGRES(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Organizational Research and Analysis (ORGRES)</div>
                        <div class="et__comm__cont__memb">
                            <div class="et__comm__cont__memb__head">
                            
                                TJ Angelica Celestino<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                            </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>John Benedict Espejo</li>
                                    <li>Kassandra Isabella Leviste</li>
                                    <li>Arra Garnette Marcelo</li>
                                    <li>Nathaniel Francisco Romero</li>
                                    <li>Justine Ariel Tasarra</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of HRD(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Human Resource and Development (HRD)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Barbara Nepomuceno<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Erl-Jan De Leon</li>
                                    <li>Anica Danielle Ng</li>
                                    <li>Ryan Clarence Pangalangan</li>
                                    <li>Shenaider Bless Sy</li>
                                    <li>Desiree Jane Tan</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of MNL(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Marketing and Linkages (MNL)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Maria Beatriz Baguilod<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Jiezel Lois Alvarez</li>
                                    <li>Allyssa Marie Campit</li>
                                    <li>Linus Vincent Cruz</li>
                                    <li>Michiko Go</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>

                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of PMT(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Project Management Team (PMT)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Jewel Abbey Ramilo<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Renzelle Joyce Polido</li>
                                    <li>Daniela Abigail Javier</li>
                                    <li>Nicole Andrei Domingo</li>
                                    <li>Miguel Johnfer Guevara</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of PNP(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Publicity and Productions (PNP)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Jan Reinell Agoy<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Mark Kevin Abellar</li>
                                    <li>JV Ambata</li>
                                    <li>John Christian Campos</li>
                                    <li>John Lawrence Ocampo</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of ADM (Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Activity Documentation and Management (ADM)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Jeeno Velasco<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Carlos Antonio Mariano</li>
                                    <li>Matt Vincent Ng</li>
                                    <li>Julianne Clare Sy</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of APS(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Activity Processing and Screening (APS)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Arsenic Santos<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Mishael Joy De Castro</li>
                                    <li>Arsenic Publico</li>
                                    <li>Danielle Quinones</li>
                                    <li>Samantha Christine Yabut</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                    <div class="et__comm__logo"><img src="{{asset('assets/Team Logos/Copy of FIN(Transparent).png')}}" alt=""/></div>
                        <div class="et__comm__cont__title">Finance (FIN)</div>
                        <div class="et__comm__cont__memb">
                        <div class="et__comm__cont__memb__head">
                            
                                Marj Yap<br>
                                <div class="et__comm__cont__memb__title">Vice Chairperson</div>
                                </div>
                            <p>
                                <!-- <i>Associate Vice Chairpersons:</i><br> -->
                                <ul>
                                    <li>Angel Smayl Sesante</li>
                                    <li>Nicole Keith Sarte</li>
                                    <li>Geralyn Mae Silva</li>
                                    <li>Maliya Gabrielle Tolentino</li>
                                    <li>Christian Nikko Chua</li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
        </div>

    </section>
    <section id="footer"></section>

</div>
    <!-- NAVBAR -->
    <!-- @include('Layouts.navbar', ['aboutnav'=>true]) -->
    <!-- /NAVBAR -->
@endsection
