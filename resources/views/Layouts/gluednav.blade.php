<nav class = "nav-bar glued">
        <div class = "nav-wrapper">
            {{-- <div class = "img-logo">
                <img src = "{{asset('assets/CSO Logo.png')}}" class = "cso-logo" width = "100%" height = "100%"></img>
            </div> --}}
            <div class = "nav-items-wrapper">
                <div class = "nav-items">
                    <div class = "img-logo2">
                        <img src = "{{asset('assets/CSO Logo.png')}}" class = "cso-logo" width = "100%" height = "100%"></img>
                    </div>
                    @if(isset($homenav))
                    <a href = "/"><div class = "nav-item nav-selected">HOME</div></a>
                    @else
                    <a href = "/"><div class = "nav-item">HOME</div></a>
                    @endif
                    @if(isset($aboutnav))
                    <a href = "/aboutus"><div class = "nav-item nav-selected">ABOUT</div></a>
                    @else
                    <a href = "/aboutus"><div class = "nav-item">ABOUT</div></a>
                    @endif
                    @if(isset($orgnav))
                    <a href = "/organizations"><div class = "nav-item nav-selected">ORGANIZATIONS</div></a>
                    @else
                    <a href = "/organizations"><div class = "nav-item">ORGANIZATIONS</div></a>
                    @endif
                    @if(isset($blognav))
                    <a href = "/blogs"><div class = "nav-item nav-selected">BLOGS</div></a>
                    @else
                    <a href = "/blogs"><div class = "nav-item">BLOGS</div></a>
                    @endif
                    <div class = "nav-item">CONTACT</div>
                </div>
            </div>
        </div>
    </nav>
    