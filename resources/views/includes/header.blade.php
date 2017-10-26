

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <div class="content-boxed">
            <!-- Header Navigation Right -->
            <ul class="nav-header pull-right">
                <li class="hidden-md hidden-lg">
                    <!-- Toggle class helper (for main header navigation below in small screens), functionality initialized in App() -> uiToggleClass() -->
                    <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-navicon"></i>
                    </button>
                </li>
            </ul>
            <!-- END Header Navigation Right -->

            <!-- Main Header Navigation -->
            <ul class="js-nav-main-header nav-main-header pull-right">
                <li class="text-right hidden-md hidden-lg">
                    <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                    <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                </li>
                <li>
                    <a class="active" href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a class="nav-submenu" href="javascript:void(0)">Movies</a>
                    <ul>
                        <li>
                            <a href="{{url('/newArrival')}}">New Release</a>
                        </li>
                        <li>
                            <a href="{{url('/upcoming')}}">Upcoming</a>
                        </li>
                        <li>
                            <a href="{{url('/topRated')}}">Top Rated</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" href="javascript:void(0)">TV Shows</a>
                    <ul>
                        <li>
                            <a href="{{url('/airingTodayTVShow')}}">Airing Today</a>
                        </li>
                        <li>
                            <a href="{{url('/topRatedTV')}}">Top Rated</a>
                        </li>
                        <li>
                            <a href="{{url('/popularTV')}}">Most Popular</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" href="frontend_pricing.html">Animes</a>
                    <ul>
                        <li>
                            <a href="frontend_team.html">New Release</a>
                        </li>
                        <li>
                            <a href="frontend_support.html">Upcoming</a>
                        </li>
                        <li>
                            <a href="frontend_search.html">Top Rated</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="frontend_contact.html">About Us</a>
                </li>
                <li>
                    <a href="frontend_contact.html">Contact</a>
                </li>
                <li>
                    @if(\Auth::check())
                    <a href="{{url('/profile')}}">Profile</a>
                    @endif
                </li>
                <li>
                    @if(\Auth::check())
                        <a href="{{url('/logout')}}">Logout</a>
                    @endif
                </li>
                <li>
                    @if(!\Auth::check())
                        <a href="{{url('/login')}}">Login</a>
                    @endif
                </li>
            </ul>
            <!-- END Main Header Navigation -->

            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="header-content">
                    <a class="h5" href="{{url('/')}}">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-white">ne</span>
                    </a>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </div>


    </header>