<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Blogs</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a href="{{ url('blogs') }}">Blogs</a>
                    </li>
                    <li>
                        <a href="{{ url('blogs/create') }}">Add Blog</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Brands</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('brand/list') }}">Brand List </a>
                    </li>
                    <li>
                        <a href="{{ url('brand/create') }}">Add Brand</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-build"></i>
                    </span>
                    <span class="title">Mobile Info</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('mobile/list') }}">Mobile Info List</a>
                    </li>
                    <li>
                        <a href="{{ url('mobile/add') }}">Add Mobile Info </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('admin/users') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">All Users</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('/e') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">Ads Post</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('/') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">Locations</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('/') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">Contacts</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->