<nav class = "nav-bar">
    <div class = "nav-green-bar"></div>
    <div class = "nav-wrapper">
        <div class = "nav-items-wrapper">
            <div class = "nav-left-wrapper left">
                    <div class = "img-logo left">
                        <img src = "{{asset('assets/CSO Logo.png')}}" class = "cso-logo" width = "100%" height = "100%"></img>
                    </div>
                    <a href = "/"><span class = "nav-title left">
                        Council of <br> Student Organizations
                    </span></a>
            </div>
            <div class = "nav-items right">
                {{-- <div class = "img-logo2">
                    <img src = "{{asset('assets/CSO Logo.png')}}" class = "cso-logo" width = "100%" height = "100%"></img>
                </div> --}}
                {{-- @if(isset($homenav))
                <a href = "/"><div class = "nav-item nav-selected">HOME</div></a>
                @else
                <a href = "/"><div class = "nav-item">HOME</div></a>
                @endif --}}
                @if(isset($aboutnav))
                <a href = "/aboutus"><div class = "nav-item nav-selected">About</div></a>
                @else
                <a href = "/aboutus"><div class = "nav-item">About</div></a>
                @endif
                @if(isset($activitiesnav))
                <a href = "/activities"><div class = "nav-item nav-selected">ACTIVITIES</div></a>
                @else
                <a href = "/activities"><div class = "nav-item">ACTVITIES</div></a>
                @endif
                @if(isset($orgnav))
                <a href = "/organizations"><div class = "nav-item nav-selected">Organizaions</div></a>
                @else
                <a href = "/organizations"><div class = "nav-item">Organizaions</div></a>
                @endif
                @if(isset($homenav))
                <a href = "/"><div class = "nav-item nav-selected">Activities</div></a>
                @else
                <a href = "/"><div class = "nav-item">Activities</div></a>
                @endif
                @if(isset($blognav))
                <a href = "/blogs"><div class = "nav-item nav-selected">Blogs</div></a>
                @else
                <a href = "/blogs"><div class = "nav-item">Blogs</div></a>
                @endif
                <div class = "nav-item">Contact</div>
            </div>
        </div>
    </div>
</nav>

<script src="{{asset('js/extras/nav.js')}}"></script>