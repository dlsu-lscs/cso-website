
@extends('Layouts.main')
@section('header')
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/Pages/home.css')}}">
@endsection

@section('content')
    <div class = "content">
        <!-- TOP SECTION -->
        <div class = "slide-show">
            
            <div class = "carousel-btn crsl-left"><i class="fas fa-chevron-left"></i></div>
            <div class = "carousel-btn crsl-right"><i class="fas fa-chevron-right"></i></div>

            <div class = "carousel-select">
                <div class = "carousel-circle crsl-focus"></div>
                <div class = "carousel-circle"></div>
                <div class = "carousel-circle"></div>
                
            </div>
        </div>
        <div class = "quote-banner">
            "Lead with passion and serve with purpose, this is the heart of CSO."
        </div>
        <!-- /TOP SECTION -->
        <!-- ORG SECTION -->
        <div class = "a-section org-section">
            <div class = "default-title org-title">Organizations</div>
            <div class = "org-body">
                <div class = "org-card"></div>
                <div class = "org-card"></div>
                <div class = "org-card"></div>
                <div class = "org-card"></div>
                <div class = "org-card"></div>
                <div class = "center-container"><div class = "see-more">Check Organizations</div></div>

            </div>
        </div>
        <!-- /ORG SECTION -->

        <!-- ACTIVITIES SECTION -->
        <div class = "parallax-background">
            <div class = "a-section activities-section">
                <div class = "default-title activities-title">Annual Activities</div>
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
                        <div class = "activity-title"> FROSH WELCOMING </div>
                        <div class = "activity-desc"> is a weeklong activity held every year by the Council of Student Organizations in which freshmen receive a warm welcome and a glimpse of the 42 organizations under the Council together with the  University Student Government Units, Special Groups, and Culture and Arts Office Organization. </div>
                        </div>
                    </div>

                    <div class = "activity-part photo-1"></div>
                </div>
                
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
                        <div class = "activity-title"> FROSH WELCOMING </div>
                        <div class = "activity-desc"> is a weeklong activity held every year by the Council of Student Organizations in which freshmen receive a warm welcome and a glimpse of the 42 organizations under the Council together with the  University Student Government Units, Special Groups, and Culture and Arts Office Organization. </div>
                        </div>
                    </div>

                    <div class = "activity-part photo-1"></div>
                </div>

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
                        <div class = "activity-title"> FROSH WELCOMING </div>
                        <div class = "activity-desc"> is a weeklong activity held every year by the Council of Student Organizations in which freshmen receive a warm welcome and a glimpse of the 42 organizations under the Council together with the  University Student Government Units, Special Groups, and Culture and Arts Office Organization. </div>
                        </div>
                    </div>

                    <div class = "activity-part photo-1"></div>
                </div>
                
            </div>
        </div>
        <!-- /ACTIVITIES SECTION -->

        <!-- BLOG SECTION -->
        <div class = "a-section blog-section">
            <div class = "default-title blog-title">Blogs</div>
            <div class = "main-blog"></div>
        </div>
        <!-- /BLOG SECTION -->
    </div>
    <!-- /CONTENT -->
    <!-- NAVBAR -->
        @include('Layouts.navbar')
    <!-- /NAVBAR -->
        
@endsection