<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-newspaper"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            @if($footer)
                <p>{{ $footer->app_name }}</p>
            @else
                <p>No footer data available.</p>
            @endif
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Post Management -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePostManagement"
            aria-expanded="true" aria-controls="collapsePostManagement">
            <i class="fas fa-newspaper"></i>
            <span>Post Management</span>
        </a>
        <div id="collapsePostManagement" class="collapse" aria-labelledby="headingPostManagement" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('blogPostList')}}">
                    <i class="fas fa-plus"></i> Add New Post
                </a>
                <a class="collapse-item" href="{{url('categoryList')}}">
                    <i class="fas fa-tags"></i> Post Categories/Tags
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Comment Management -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseCommentManagement"
            aria-expanded="true" aria-controls="collapseCommentManagement">
            <i class="fas fa-comments"></i>
            <span>Comment Management</span>
        </a>
        <div id="collapseCommentManagement" class="collapse" aria-labelledby="headingCommentManagement" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('commentList')}}">
                    <i class="fas fa-comment-dots"></i> Comments
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - User Management -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUserManagement"
            aria-expanded="true" aria-controls="collapseUserManagement">
            <i class="fas fa-user"></i>
            <span>User Management</span>
        </a>
        <div id="collapseUserManagement" class="collapse" aria-labelledby="headingUserManagement" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('userList')}}">
                    <i class="fas fa-user-cog"></i> Manage Users
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Settings -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseSettings"
            aria-expanded="true" aria-controls="collapseSettings">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Settings</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingSettings" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('general-Setting')}}">
                    <i class="fas fa-cogs"></i> General site settings
                </a>
{{--                <a class="collapse-item" href="">--}}
{{--                    <i class="fas fa-search"></i> SEO settings--}}
{{--                </a>--}}
{{--                <a class="collapse-item" href="">--}}
{{--                    <i class="fas fa-link"></i> Permalink URL settings--}}
{{--                </a>--}}
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
