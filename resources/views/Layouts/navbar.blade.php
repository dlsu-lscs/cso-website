<nav class = "nav-bar">
    <div class = "nav-green-bar"></div>
    <div class = "nav-wrapper">
        <div class = "nav-items-wrapper">
            <div class = "nav-left-wrapper left">
                    <div class = "img-logo left">
                        <a href = "/"><img src = "{{asset('assets/CSO Logo.png')}}" class = "cso-logo" width = "100%" height = "100%"></img></a>
                    </div>
                    <a href = "/"><span class = "nav-title left">
                        Council of <br> Student Organizations
                    </span></a>
            </div>
            <div class = "nav-items right">
                
                <div class = "nav-item burgercontainer" onclick = "clickactive(this)">
                    <div class = "burgermenu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    </div>
                </div>
            </div>
            <div class = "nav-items right navmenu">

                <div class = "fullnavmenu">
                @if(isset($homenav))
                <a href = "/"><div class = "nav-item --item nav-selected">Home</div></a>
                @else
                <a href = "/"><div class = "nav-item --item">Home</div></a>
                @endif
                @if(isset($aboutnav))
                <a href = "/aboutus"><div class = "nav-item --item nav-selected">About</div></a>
                @else
                <a href = "/aboutus"><div class = "nav-item --item">About</div></a>
                @endif
                @if(isset($activitiesnav))
                <a href = "/activities"><div class = "nav-item nav-selected --item">Activities</div></a>
                @else
                <a href = "/activities"><div class = "nav-item --item">Activities</div></a>
                @endif
                @if(isset($orgnav))
                <a href = "/organizations"><div class = "nav-item nav-selected --item">Organizations</div></a>
                @else
                <a href = "/organizations"><div class = "nav-item --item">Organizations</div></a>
                @endif
                @if(isset($downloadnav))
                <a href = "/download"><div class = "nav-item nav-selected --item">Downloads</div></a>
                @else
                <a href = "/download"><div class = "nav-item --item">Downloads</div></a>
                @endif
                @if(isset($blognav))
                <a href = "/blogs"><div class = "nav-item nav-selected --item">Blogs</div></a>
                @else
                <a href = "/blogs"><div class = "nav-item --item">Blogs</div></a>
                @endif
                @if(isset($contactnav))
                <a href="/contact"><div class = "nav-item nav-selected --item">Contact</div></a>
                @else
                <a href="/contact"><div class = "nav-item --item">Contact</div></a>
                @endif
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="{{asset('js/extras/nav.js')}}"></script>