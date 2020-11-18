
@extends('Layouts.main')
@section('header')
    <title>Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Pages/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pages/mediaqueries/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pages/mediaqueries/blogshow.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src = "{{asset('js/extras/playvid.js')}}"></script>
        
@endsection

@section('content')
<script>
    new WOW().init();
</script>
@include('Layouts.navbar', ['homenav'=>true])

    <div class = "content">
        <!-- TOP SECTION -->
        {{-- <div class = "tempnav">
            <div class = "tempnav__img"></div>
        </div> --}}
        <section id="banner" class="banner--abt">
            <div class="banner__bg">
                <div>
                </div>
                <div>
                </div>
            </div>
            <div id="banner-center" class="banner__center banner__center__bg">
                <!-- set to autoplay w/ jquery on button click -->
                {{-- <iframe id="vid-wrapper" width="100%" height="100%"
                    src="https://www.youtube.com/embed/vc91hZyy5jc?autoplay=1" allowfullscreen>
                </iframe> --}}
                <iframe id="vid-wrapper" src="https://drive.google.com/file/d/1KUCJ--LGTNlVvAQiQyV8MdHyObe0qWQw/preview" width="100%" height="100%" allowfullscreen></iframe>
                <div class="banner-content">
                    <!-- <div class="banner__main-txt wow fadeInLeftBig">Council of Student Organizations</div> -->
                    <div class="banner__main-txt">Council of Student Organizations</div>
                    <div class="banner__sub-txt"> Providing service to its accredited organizations by ensuring that the activities/projects/initiatives of these organizations are well prepared, documented, and executed. </div>
                    <div class="divider"></div>
                    <button id="btn-home-vid" class="button button--white"><i class="fas fa-play-circle"></i>Play Video</button>
                </div>
            </div>
            
        </section>
        {{-- <div class = "slide-show">
            <div class = "slideshow__container">
                <div class = "slideshow__stage">
                    <div class = "slideshow__content slide1">
                        <div class= "slideshow__content__item"></div>
                        <div class= "slideshow__content__item">
                            <div>
                            <div class = "slideshow__content__item__title">COUNCIL OF STUDENT ORGANIZATIONS</div>
                            <div class = "slideshow__content__item__body">The Council of Student Organizations (CSO) is the union of accredited professional (PROF), special interest (SPIN) and socio-civic organizations of De La Salle University. Since its founding in 1974, the Council has continuously delivered quality student services and has produced outstanding student leaders dedicated to serving and contributing to the Lasallian Community. To support the preparation, execution, and documentation of the activities/projects/initiatives of the accredited organizations, nine Executive Teams work under the supervision of the CSO Executive Board. The CSO Executive Board also serves as the coordinating entity of the Council Body composed of the Presidents of the CSO member organizations.</div>
                            </div>
                        </div>
                    </div>
                    <div class = "slideshow__content slide2">slide2</div>
                    <div class = "slideshow__content slide3">slide3</div>

                    <div class = "slideshow__content slide3">slide4</div>
                </div>
            </div>
            <div class = "carousel-btn crsl-left" onclick = "slidePrev()"><i class="fas fa-chevron-left"></i></div>
            <div class = "carousel-btn crsl-right" onclick = "slideNext()"><i class="fas fa-chevron-right"></i></div>

            <div class = "carousel-select">
                <div class = "carousel-circle crs1 crsl-focus" onclick="turnSlide(1)"></div>
                <div class = "carousel-circle crs2" onclick="turnSlide(2)"></div>
                <div class = "carousel-circle crs3" onclick="turnSlide(3)"></div>
                <div class = "carousel-circle crs4" onclick="turnSlide(4)"></div>
                
            </div>
        </div> --}}

        {{-- <div class = "quote-banner">
            <div class = "wow fadeInLeft">
            "Lead with passion and serve with purpose, this is the heart of CSO."
            </div>
        </div> --}}
        <!-- /TOP SECTION -->
        <!-- TO ABOUT -->
        <section id="about" class="main-section">
            <div id="about-wrapper" class="section-content section-content--pd">
                <div class="section__info">
                    <div class="section__info__title">Passionate leaders since 1974.</div>
                    <div class="divider"></div>
                    <div class="section__info__body">Providing service to its accredited organizations by ensuring that the activities/projects/initiatives of these organizations are well prepared, documented, and executed. </div>
                    <a href = "/aboutus"><button class="button">Read More About CSO</button></a>        
                </div>
                <img src="{{asset('assets/CSOIMAGES_2019-20/cso-pictures_0.jpg')}}" alt="">
            </div>
        </section>
        <!-- ORG SECTION -->
        <!-- <div class = "a-section org-section">
            <div class = "default-title org-title">ORGANIZATIONS</div>
            <div class = "org-body">
                {{-- @foreach ($clusters as $key => $cluster)

                    <div class = "org-card">
                        @foreach ($cluster as $item)
                            <img class = "org-card__img left" src = "{{$item['img']}}">
                        @endforeach
                        <div class = "org-card__desc">{{$key}}</div>
                    </div>
                @endforeach --}}

            </div>

            <a href = "/organizations"><div class = "center-container"><div class = "see-more">Check Organizations</div></div></a>
        </div> -->
        <section id="orgs" class="main-section">
            <div id="orgs-wrapper" class="section-content section-content--center">
                <div class="section__solidbg section__solidbg--dg section__solidbg--center">
                    <div class="section__info__title section__info__title--alt ">A family of organizations.</div>
                    <div class="divider"></div>
                    <div class="section__info__body"><br>Diverse. Inclusive. Collaborative.<br></div>
                    <a href = "/organizations"><button class="button button--white">See CSO-accredited Organizations</button></a>            
                </div>
            </div>
        </section>
        <!-- /ORG SECTION -->

        <!-- ACTIVITIES SECTION -->
        <section id="events" class="main-section" style = "display: block;">
            <div id="about-wrapper" class="section-content section-content--pd">
                <div class="section-content__photo-square">
                    {{-- <div></div>                     --}}
                    <img src="{{asset('assets/csofiles/Sample Photos/sample-activities-side.png')}}" alt="">
                </div>
                <div class="section__info">
                    <div class="section__info__title">Activities to serve the student body.</div>
                    <div class="divider"></div>
                    <div class="section__info__body">CSO is a home for leaders and aspiring leaders. We develop and train people by giving them new opportunities and experiences through our various activities every year. As an organization, these activities are our contribution to your stay in the university.</div>
                    <a href = "/activities"><button class="button">More About CSO Activities</button></a>            
                </div>
            </div>
            <div id="event-carousel">
                <div class="carousel-controller">
                    <div class="carousel-title">Annual CSO Events</div>
                    <div class="carousel-arrow">
                        <p id="carousel-arrow-prev" class="carousel-arrow-disabled" onclick="slidePrev()"><i class="fas fa-long-arrow-alt-left"></i></p>
                        <p id="carousel-arrow-nxt" onclick="slideNext()"><i class="fas fa-long-arrow-alt-right"></i></p>
                    </div>
                </div>
                <div class = "carousel-stage">
                    <div class="carousel-items" id = "carousel-items">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/AGB.png')}}" alt="AGB" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/ARW.png')}}" alt="ARW" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/FLARE.png')}}" alt="FLARE" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/FW.png')}}" alt="FW" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/GCA.png')}}" alt="GCA" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/LEA.png')}}" alt="LEA" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/LEAP.jpg')}}" alt="LEAP" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/TUKLAS.png')}}" alt="TUKLAS" class = "slide">
                        <img src="{{asset('assets/csofiles/CSO AA Logos and Pictures/UGNAYAN.jpg')}}" alt="UGNAYAN" class = "slide">
                    </div>
                </div>
                <!-- <img src="{{asset('assets/csofiles/Sample Photos/sample-activities-side.jpg')}}" alt="">
                <img src="{{asset('assets/csofiles/Sample Photos/sample-activities-side.jpg')}}" alt=""> -->
            </div>
            <!-- <div id="events-wrapper" class="section-content section-content--offcenter"> -->
                <!-- <img class="section-content__left" src="{{asset('assets/csofiles/Sample Photos/sample-events-fw-ls.jpg')}}" alt=""> -->
                <!-- <div class="section__info section__solidbg--lg"> -->
                    <!-- <div class="section__info__title section__info__title--alt ">Some tagline for events.</div> -->
                    <!-- <div class="divider"></div> -->
                    <!-- <div class="section__info__body section__info__body--alt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> -->
                    <!-- <button class="button button--white">See All Annual CSO Events</button>             -->
                <!-- </div> -->
            <!-- </div> -->
        </section>

        <!-- <div class = "parallax-background">
            <div class = "a-section activities-section">
                <div class = "default-title activities-title"><span class = "gold-accent">44TH</span> CSO EVENTS</div>
                
                <div class = "eventcontainer">
                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/FW.png')}}"></div>
                        <p class = "eventsection__title">FROSH WELCOMING</p>
                        <div class = "eventsection__body">is a weeklong activity held every year by the Council of Student Organizations in which freshmen receive a warm welcome and a glimpse of the 42 organizations under the Council together with the University Student Government Units, Special Groups, and Culture and Arts Office Organization. </div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 4,000-5,000</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Freshmen Students of DLSU and student Organizations </p>
                    </div>

                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/GCA.png')}}"></div>
                        <p class = "eventsection__title">GREEN CARD ALLIANCE</p>
                        <div class = "eventsection__body">establishes partnerships with Companies to offer special privileges such as discounts to the Students of De La Salle University Manila and Laguna who have joined the 42 Organizations under the Council of Student Organizations. </div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 13,000-14,000</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Members of the 45 (?) CSO Organizations </p>
                    </div>

                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/ARW.png')}}"></div>
                        <p class = "eventsection__title">ANNUAL RECRUITMENT WEEK</p>
                        <div class = "eventsection__body">is a weeklong activity for the whole student body of De La Salle University to be given an opportunity to choose among the 42 Organizations that can serve as an avenue to meet people with similar interests and at the same time hone their skills outside of academic responsibilities. At the end of the week, students will be treated with a culminating night or a concert with various artists alongside prizes to be given away.</div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 15,000</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Whole Lasallian Community</p>
                    </div>

                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/UGNAYAN.jpg')}}"></div>
                        <p class = "eventsection__title">UGNAYAN</p>
                        <div class = "eventsection__body">Is a yearlong event where The Council of Student Organizations alongside Ateneo De Manila University: Council of Organizations of the Ateneo, CSO DLSU’s counterpart for ADMU, will be given opportunities and insights from keynote speakers to involve each other for action plans and projects.</div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 200</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Members of CSO and COA</p>
                    </div>

                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/LEAP.jpg')}}"></div>
                        <p class = "eventsection__title"> LASALLIAN ENRICHMENT ALTERNATIVE PROGRAM</p>
                        <div class = "eventsection__body">LEAP, or is whole-day event during the University-Vision-Mission Week headed by CSO alongside its 42 accredited organizations, USG with its respective units, and other offices of the university, where students are offered alternative classes which cater to their interests that help them develop holistically.</div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 15,000</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Whole Lasallian Community</p>
                    </div>

                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/TUKLAS.png')}}"></div>
                        <p class = "eventsection__title"> TOWARDS UPLIFTING KNOWLEDGE AND LEADERSHIP ADVANCEMENT SERIES</p>
                        <div class = "eventsection__body">TUKLAS is a two-part leadership seminar designed for the purpose of transforming DLSU students and student leaders through talks based on the Lasallian Core Values - Fait, Service, and Communion in Mission prepared by notable Lasallian graduates.</div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 200 per day</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Student Leaders from the De La Salle Schools</p>
                    </div>

                    <div class = "eventsection">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/AGB.png')}}"></div>
                        <p class = "eventsection__title"> AWARD GIVING BODIES</p>
                        <div class = "eventsection__body">AGB is an entity headed by CSO designed to seek and award outstanding student leaders, organizations, activities, and professors on the basis of: SSOT, or Students’ Search for Outstanding Teachers, HOW or Harvest of Winers, and TOC-TOYM, The Outstanding Co-eds, The Outstanding Young Men. </div>
                        
                        <p class = "eventsection__line--left">
                            <span class = "eventsection__date left"><span class = "--bold">DATE:</span> </span>
                            <span class = "eventsection__participants right"><span class = "--bold">PARTICIPANTS:</span> 15,000</span>
                        </p>
                        
                        <p class = "eventsection__audience left"><span class = "--bold">AUDIENCE:</span> Students, Administrators and Professors</p>
                    </div>

                    <div class = "eventsection leasec">
                        <div class = "eventsection__imgcontainer"><img class = "eventsection__img" src = "{{asset('assets/csofiles/CSO AA Logos and Pictures/LEA.png')}}"></div>
                        <p class = "eventsection__title"> LASALLIAN EXCELLENCE AWARDS</p>
                        <div class = "eventsection__body">LEA or The Lasallian Excellence Awards gives way to honor the services and craft shown by Lasallian individuals and organizations based on faith, service, and communion. LEA serves as a way to give back to the community and empowering student leaders to pursue excellence through honoring and awarding their works. LEA consists of events throughout March to July, namely the launch night, event night, LEA seminars and development activities. The launch night symbolizes the start of LEA in which the beneficiaries are introduced and various activities to help hone the minds of the Lasallian leaders. While the Awards night is the peak activity of the whole Lasallian Excellence Awards where partner beneficiaries will be awarded and chosen through another CSO event, the Award Giving Bodies (AGB). LEA’s developmental activities consist of the Expo Week, LEA and STC seminars, fundraising activities and an alternative class for students (LEAP class). The developmental activities serves as an avenue not only to promote the beneficiaries but to also create an interactive connection between them and the Lasallian community. Expo Week is an avenue for the beneficiaries and organizations to promote their advocacies to the DLSU community. Interactive booths and donation drives will be spread around campus to further instigate the interaction among DLSU students and the Expo. LEA and STC Seminar composes of talks in regards to the holistic development and service of an individual to the society. The beneficiaries advocate their beliefs and are given a chance to promote their projects and accomplishments which can also serve as a way to recruit more volunteers for their projects. </div>
                        
                    </div>


                    
                    
                </div>
            </div>
        </div> -->
        <!-- /ACTIVITIES SECTION -->

        <!-- BLOG SECTION -->
        <section id="blogs" class="main-section section-content section-content--short">
            <div class="section__info--la">
                <div class="section__info__title section__info__title--alt">The latest blogs.</div>
                <div class="divider"></div>
                <div class="article-wrapper">
                        @foreach ($blogs as $blog) 
                        <div class="ap">
                                <img  src="{{$blog->img}}" alt="">
                                <div class="ap-title"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></div>
                                <div class="ap-timestamp">{{$blog->longago}}</div>
                        </div>
                        @endforeach
                    {{-- <div class="ap">
                        <img  src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt="">
                        <div class="ap-title"><a href="">Erap losing in Manila; Isko Moreno set to become new mayor</a></div>
                        <div class="ap-timestamp">Yesterday</div>
                    </div>
                    <div class="ap">
                        <img  src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt="">
                        <div class="ap-title">Erap losing in Manila; Isko Moreno set to become new mayor</div>
                        <div class="ap-timestamp">Yesterday</div>
                    </div>
                    <div class="ap">
                        <img  src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt="">
                        <div class="ap-title">Erap losing in Manila; Isko Moreno set to become new mayor</div>
                        <div class="ap-timestamp">Yesterday</div>
                    </div>
                    <div class="ap">
                        <img  src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt="">
                        <div class="ap-title">Erap losing in Manila; Isko Moreno set to become new mayor</div>
                        <div class="ap-timestamp">Yesterday</div>
                    </div>
                    <div class="ap">
                        <img  src="{{asset('assets/csofiles/CSOfb/IMG_0878.jpg')}}" alt="">
                        <div class="ap-title">Erap losing in Manila; Isko Moreno set to become new mayor</div>
                        <div class="ap-timestamp">Yesterday</div>
                    </div> --}}
                </div>
                <a href = '/blogs'><div class="ra">
                    <button class="button button--white">See all Blogs</button>                                
                </div></a>
            </div>
        </section>

        {{-- <div class = "a-section blog-section">
            <div class = "default-title blog-title">BLOGS</div>
            <div class = "main-blog"></div>
        </div> --}}
        <!-- /BLOG SECTION -->

        <!-- FOOTER -->
        <!-- <section id="footer"> -->
            <!--logo, social media shortcuts-->
            <!-- <div class="f-socialmedia">
                <img src="{{asset('assets/CSO Logo.png')}}" alt="">
                <div class="f-social-media">
                    <div><i class="fab fa-facebook-f"></i>dlsu.cso</div>
                    <div><i class="fab fa-twitter"></i>DLSUCSO</div>
                </div>
            </div> 
            <div class="f-sitemap">
                <div class="f-sitemap__col">
                    <div>About</div>
                    <ul>
                        <li>History</li>
                        <li>Mission and Vision</li>
                        <li>Core Values</li>
                        <li>Officers</li>
                    </ul>
                </div>
                <div class="f-sitemap__col">
                    <div>About</div>
                    <ul>
                        <li>History</li>
                        <li>Mission and Vision</li>
                        <li>Core Values</li>
                        <li>Officers</li>
                    </ul>
                </div>
                <div class="f-sitemap__col">
                    <div>About</div>
                    <ul>
                        <li>History</li>
                        <li>Mission and Vision</li>
                        <li>Core Values</li>
                        <li>Officers</li>
                    </ul>
                </div>
            </div> -->
            <!--navigation-->            
            <!-- <div></div>
        </section> -->
        <!-- /FOOTER -->
    </div>
    <!-- /CONTENT -->
    <!-- NAVBAR -->
    <!-- /NAVBAR -->

    {{-- <script src="{{asset('js/extras/eventscarousel.js')}}"></script> --}}

        
@endsection