@extends('Layouts.main')
@section('header')
    <title>Activities | Council of Student Organizations</title>
    <meta property="og:image" content="{{asset('assets/csofiles/CSO Pictures/IMG_0868.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pages/activities.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
@endsection

@section('content')
<script>
    new WOW().init();
</script>
@include('Layouts.navbar', ['activitiesnav'=>true])

<div class = "content">
    <section id="banner" class="main-section banner--abt">
        <div class="section-content">
            <img class="section-content__left" src="{{asset('assets/csofiles/Sample Photos/sample-activities-side.png')}}" alt="">
            <div class="section__info">
                <div class="section__info__subtitle">Activities</div><br>
                {{-- <div class="section__info__title">A tagline that describe how CSO activities bring out the best in students.</div> --}}
                <div class="section__info__body-container">
                    <p>CSO is a home for leaders and aspiring leaders. We develop and train people by giving them new opportunities and experiences through our various activities every year. As an organization, these activities are our contribution to your stay in the university.</p>
                    <div class="divider"></div>
                </div>
            </div>
            <!-- <div class="banner__main-txt wow fadeInLeftBig">Lead with passion and serve with purpose,</div>
            <div class="banner__sub-txt wow fadeInRightBig">this is the heart of CSO.</div> -->
        </div>
    </section>
    <section id="et" class="main-section">
        <div class="et__sub">
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div id="et__comm--fw" class="et__comm__photo">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/FW.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Frosh Welcoming</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Frosh Welcoming is a weeklong activity held every year by the Council of Student Organizations in which freshmen receive a warm welcome and a glimpse of the 42 organizations under the Council together with the University Student Government Units, Special Groups, and Culture and Arts Office Organization.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Participants</p>
                                <p class="et__comm__cont__details__data">4,000-5,000</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Freshmen Students of DLSU and student Organizations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">

                    <div class="et__comm__cont">
                        <div class="et__comm__photo">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/GCA.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Green Card Alliance</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Green Card Alliance establishes partnerships with Companies to offer special privileges such as discounts to the Students of De La Salle University Manila and Laguna who have joined the 42 Organizations under the Council of Student Organizations.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Participants</p>
                                <p class="et__comm__cont__details__data">13,000-14,000</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Members of the 45 CSO Organizations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div id="et__comm--arw" class="et__comm__photo">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/ARW.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Annual Recruitment Week</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Annual Recruitment Week is a weeklong activity for the whole student body of De La Salle University to be given an opportunity to choose among the 42 Organizations that can serve as an avenue to meet people with similar interests and at the same time hone their skills outside of academic responsibilities.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Participants</p>
                                <p class="et__comm__cont__details__data">15,000</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Whole Lasallian community</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div id="et__comm--ugnayan" class="et__comm__photo">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/UGNAYAN.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Ugnayan</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Ugnayan is a yearlong event where The Council of Student Organizations alongside Ateneo De Manila University: Council of Organizations of the Ateneo, CSO DLSU’s counterpart for ADMU, will be given opportunities and insights from keynote speakers to involve each other for action plans and projects.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Participants</p>
                                <p class="et__comm__cont__details__data">200</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Members of CSO and COA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div id="et__comm--leap" class="et__comm__photo">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/LEAP.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Lasallian Enrichment Alternative Program</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Lasallian Enrichment Alternative Program (LEAP) is whole-day event during the University-Vision-Mission Week headed by CSO alongside its 42 accredited organizations, USG with its respective units, and other offices of the university, where students are offered alternative classes which cater to their interests that help them develop holistically.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Participants</p>
                                <p class="et__comm__cont__details__data">15,000</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Whole Lasallian Community</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div class="et__comm__photo" id = "et__com--tuklas">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/TUKLAS.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Towards Uplifting Knowledge and Leadership Advancement Series</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Towards Uplifting Knowledge and Leadership Advancement Series (TUKLAS) is a two-part leadership seminar designed for the purpose of transforming DLSU students and student leaders through talks based on the Lasallian Core Values - Faith, Service, and Communion in Mission prepared by notable Lasallian graduates.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Participants</p>
                                <p class="et__comm__cont__details__data">200 per day</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Student Leaders from the De La Salle Schools</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div class="et__comm__photo">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/AGB.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Award Giving Bodies</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            Award Giving Bodies (AGB) is an entity headed by CSO designed to seek and award outstanding student leaders, organizations, activities, and professors on the basis of: SSOT, or Students’ Search for Outstanding Teachers, HOW or Harvest of Winers, and TOC-TOYM, The Outstanding Co-eds, The Outstanding Young Men.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">Students, Administrators and Professors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div class="et__comm__photo" id = "et__com--lea">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/LEA.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Lasallian Excellence Awards</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                            LEA or The Lasallian Excellence Awards gives way to honor the services and craft shown by Lasallian individuals and organizations based on faith, service, and communion. LEA serves as a way to give back to the community and empowering student leaders to pursue excellence through honoring and awarding their works. 
                            </p>
                        </div>
                        
                    </div>
                </div>

                <div class="et__comm">
                    <div class="et__comm__cont">
                        <div class="et__comm__photo" id = "et__com--flare">
                            <div class="et__comm__photo__logo">
                                <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/FLARE.png')}}" alt=""/>
                            </div>
                        </div>
                        <div class="et__comm__cont__title">Flare</div>
                        <div class="divider--short"></div>
                        <div class="et__comm__cont__memb">
                            <p>
                                    FLARE is a certification program of the Council of Student Organizations and the Office of Student LIFE (SLIFE) for all accredited and recognized student organizations and government units. It aims to equip student leaders with trainings and mentoring sessions on project development, management, monitoring, and evaluation. Further, FLARE will also implement a case competition that’ll enable student leaders to come up with sustainable project proposals on various social issues.
                            </p>
                        </div>
                        <div class="et__comm__cont__detailsgroup">
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Target Participants</p>
                                <p class="et__comm__cont__details__data">70</p>
                            </div>
                            <div class="et__comm__cont__details">
                                <p class="et__comm__cont__details__title">Audience</p>
                                <p class="et__comm__cont__details__data">USG and CSO student representatives</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </section>
    <section id="footer"></section>

</div>
@endsection
