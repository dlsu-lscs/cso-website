
@extends('Layouts.main')
@section('header')
    <title>Council of Student Organizations</title>
    <link rel="stylesheet" href="{{asset('css/Pages/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pages/mediaqueries/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/Extras/anim.css')}}">
    <script src = "{{asset('js/extras/anim.js')}}"></script>
@endsection

@section('content')
<script>
    new WOW().init();
</script>
    <div class = "content">
        <!-- TOP SECTION -->
        <div class = "slide-show">
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
        </div>
        <div class = "quote-banner">
            <div class = "wow fadeInLeft">
            "Lead with passion and serve with purpose, this is the heart of CSO."
            </div>
        </div>
        <!-- /TOP SECTION -->
        <!-- ORG SECTION -->
        <div class = "a-section org-section">
            <div class = "default-title org-title wow bounceInUp">ORGANIZATIONS</div>
            <div class = "org-body">
                @foreach ($clusters as $key => $cluster)

                    <div class = "org-card">
                        @foreach ($cluster as $item)
                            <img class = "org-card__img left" src = "{{$item['img']}}">
                        @endforeach
                        <div class = "org-card__desc">{{$key}}</div>
                    </div>
                @endforeach
                <a href = "/organizations"><div class = "center-container"><div class = "see-more">Check Organizations</div></div></a>

            </div>
        </div>
        <!-- /ORG SECTION -->

        <!-- ACTIVITIES SECTION -->
        <div class = "parallax-background">
            <div class = "a-section activities-section">
                <div class = "default-title activities-title wow bounceInUp">Annual Activities</div>
                <div class = "activity-body-1">
                    <div class = "activity-part photo-1"></div>
                    <div class = "activity-part desc-1">
                        <div>
                        <div class = "activity-title"> FROSH WELCOMING </div>
                        <div class = "activity-desc"> is a weeklong activity held every year by the Council of Student Organizations in which freshmen receive a warm welcome and a glimpse of the 42 organizations under the Council together with the  University Student Government Units, Special Groups, and Culture and Arts Office Organization. </div>
                        </div>
                    </div>
                </div>

                <div class = "activity-body-1">
                    <div class = "activity-part desc-1">
                        <div>
                        <div class = "activity-title"> GREEN CARD ALLIANCE </div>
                        <div class = "activity-desc"> establishes partnerships with Companies to offer special privileges such as discounts to the Students of De La Salle University Manila and Laguna who have joined the 42 Organizations under the Council of Student Organizations. </div>
                        </div>
                    </div>

                    <div class = "activity-part photo-1"></div>
                </div>

                <div class = "activity-body-1">
                    <div class = "activity-part photo-1"></div>
                    <div class = "activity-part desc-1">
                        <div>
                        <div class = "activity-title"> ANNUAL RECRUITMENT WEEK </div>
                        <div class = "activity-desc"> is a weeklong activity for the whole student body of De La Salle University to be given an opportunity to choose among the 42 Organizations that can serve as an avenue to meet people with similar interests and at the same time hone their skills outside of academic responsibilities. At the end of the week, students will be treated with a culminating night or a concert with various artists alongside prizes to be given away. </div>
                        </div>
                    </div>
                </div>

                <div class = "activity-body-1">
                    <div class = "activity-part desc-1">
                        <div>
                        <div class = "activity-title"> UGNAYAN </div>
                        <div class = "activity-desc"> Is a yearlong event where The Council of Student Organizations alongside Ateneo De Manila University: Council of Organizations of the Ateneo, CSO DLSU’s counterpart for ADMU, will be given opportunities and insights from keynote speakers to involve each other for action plans and projects. </div>
                        </div>
                    </div>
                    <div class = "activity-part photo-1"></div>
                </div>

                <div class = "activity-body-1">
                    <div class = "activity-part photo-1"></div>
                    <div class = "activity-part desc-1">
                        <div>
                        <div class = "activity-title"> LASALLIAN ENRICHMENT ALTERNATIVE PROGRAM </div>
                        <div class = "activity-desc"> LEAP, or is whole-day event during the University-Vision-Mission Week headed by CSO alongside its 42 accredited organizations, USG with its respective units, and other offices of the university, where students are offered alternative classes which cater to their interests that help them develop holistically. </div>
                        </div>
                    </div>
                </div>

                <div class = "activity-body-1">
                    <div class = "activity-part desc-1">
                        <div>
                        <div class = "activity-title"> TOWARDS UPLIFTING KNOWLEDGE AND LEADERSHIP ADVANCEMENT SERIES </div>
                        <div class = "activity-desc"> TUKLAS is a two-part leadership seminar designed for the purpose of transforming DLSU students and student leaders through talks based on the Lasallian Core Values - Fait, Service, and Communion in Mission prepared by notable Lasallian graduates. </div>
                        </div>
                    </div>

                    <div class = "activity-part photo-1"></div>
                </div>
                
            </div>
        </div>
        <!-- /ACTIVITIES SECTION -->

        <!-- BLOG SECTION -->
        <div class = "a-section blog-section">
            <div class = "default-title blog-title">BLOGS</div>
            <div class = "main-blog"></div>
        </div>
        <!-- /BLOG SECTION -->
    </div>
    <!-- /CONTENT -->
    <!-- NAVBAR -->
        @include('Layouts.navbar')
    <!-- /NAVBAR -->

    <script src="{{asset('js/extras/carousel.js')}}"></script>
        
@endsection