<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-left" id="logo" href="{{url('dashboard')}}"><img src="{{ asset('images/fmipu.jpg') }}"><a class="navbar-brand" href="{{url('dashboard')}}">FMI University System - Dashboard</a></a>
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
                    <a href="{{url('home')}}"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="{{url('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{url('categories')}}"><i class="fa fa-wpforms" aria-hidden="true"></i></i> Categories</a>
                </li>
                <li>
                    <a href="{{ url('articles') }}"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i> Articles</a>
                </li>
                @if(!Auth::guest() && Auth::user()->is_admin)
                <li>
                    <a href="{{ url('users') }}"><i class="fa fa-user" aria-hidden="true"></i></i> Users</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>