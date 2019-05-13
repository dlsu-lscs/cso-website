<div class = "selection-bar">
    <div class = "selection-bar__csologo">
    </div>
    <div class = "admin-items">
        <div class = "admin-group">
            <div class = "admin-group-title">CONTENT</div>
            @section('CreateBlogSection')
                <div class = "admin-side-item">
            @show
                <i class="fas fa-edit"></i> 
                <a href = "/csoadmin"><span class = "admin-text-item"> Create Blog</span></a>
            </div>
            @section('EditBlogSection')
                <div class = "admin-side-item">
            @show
                <i class="fa fa-pencil"></i> 
                <a href = "/csoadmin/viewblogs"><span class = "admin-text-item"> Edit Blog</span></a>
            </div>
            @section('ManageOrgSection')
                <div class = "admin-side-item">
            @show
                <i class="fa fa-pencil"></i> 
                <a href = "/csoadmin/manageorgs"><span class = "admin-text-item"> Manage Orgs</span></a>
            </div>
            {{-- @section('DraftSection')
                <div class = "admin-side-item">
            @show
                <i class="fa fa-file-text"></i> 
                <span class = "admin-text-item"> Drafts</span>
            </div>
            @section('TrashSection')
                <div class = "admin-side-item">
            @show
                    <i class="fa fa-trash"></i> 
                    <span class = "admin-text-item"> Trash</span>
            </div> --}}
        </div>
        <div class = "admin-group">
            <div class = "admin-group-title">Media</div>
            <div class = "admin-side-item">
                <i class="fa fa-file-image-o"></i> 
                <span class = "admin-text-item"> Upload Media</span>
            </div>
            {{-- <div class = "admin-side-item">
                <i class="fa fa-archive"></i> 
                <span class = "admin-text-item"> Archive</span>
            </div> --}}
        </div>
    </div>
    
</div>
<div class = "admin-nav-bar"> 
    <div class = "nav-wrapper">
        <div class = "nav-items-wrapper">
            <div class = "nav-items left" style = "visibility: hidden;">
                <a href = "/"><div class = "nav-item admin-item">HOME</div></a>
                <div class = "nav-item admin-item">ABOUT</div>
                <div class = "nav-item admin-item">ORGANIZATIONS</div>
                <div class = "nav-item admin-item">BLOG</div>
                <div class = "nav-item admin-item">CONTACT</div>
            </div>
            <div class = "nav-items--right">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <div class = "nav-item admin-item">Logout</div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </div>
        </div>
    </div>
</div>