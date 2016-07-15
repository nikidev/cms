<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('home')}}">FMI University System</a>
    </div>
    @if(!Auth::guest())
        <ul class="nav navbar-top-links navbar-right">
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   Hi, {{ Auth::user()->username }} ! <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                    <li><a href="{{ url('profile/edit/'.Auth::user()->id) }}"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        </ul>
    @endif
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
          
                <li>
                    <a href="{{url('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>

            
                @foreach($categories as $category)
                <li>
                    <a href="{{ url($category->id) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$category->name}}</a>
                </li>
                @endforeach

                
                {{-- <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>