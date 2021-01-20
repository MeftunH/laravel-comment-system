<div class="theme-layout">

    <div class="responsive-header">
        <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
            <span class="mh-text">
				<a href="newsfeed.html" title=""><img src="{{asset('frontend/images/logo2.png')}}" alt=""></a>
			</span>

        </div>

        <nav id="menu" class="res-menu">
            <ul class="main-menu">
                {{--                <li><a href="{{ route('admin.dashboard') }}" title="">Dashboard</a></li>--}}
                <li><a href="/home" title="">Home</a></li>

                @if (Route::has('login'))

                    @auth
                        @if(Auth::user()->role->id == 1)

                            <li style="margin-left: 10px"> <a href="{{ route('post.create') }}" title="">Create Post</a></li>
                            <li style="margin-left: 10px"> <a href="{{ route('logout') }}" title="">Logout</a></li>
                        @elseif(Auth::user()->role->id == 2)
                            <li>
                                <a href="{{ route('post.create') }}">Create Post</a></li>
                            <li style="margin-left: 10px"> <a href="{{ route('logout') }}" title="">Logout</a></li>
                        @else
                            null
                        @endif
                    @else
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif

            </ul>
        </nav>

    </div><!-- responsive header -->

    <div class="topbar stick">
        <div class="logo">
            <a title="" href="newsfeed.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
        </div>

        <div class="top-area">
            <ul class="main-menu">
{{--                <li><a href="{{ route('admin.dashboard') }}" title="">Dashboard</a></li>--}}
                <li><a href="/home" title="">Home</a></li>

                @if (Route::has('login'))

                        @auth
                            @if(Auth::user()->role->id == 1)

                              <li style="margin-left: 10px"> <a href="{{ route('post.create') }}" title="">Create Post</a></li>
                            <li style="margin-left: 10px"> <a href="{{ route('logout') }}" title="">Logout</a></li>
                            @elseif(Auth::user()->role->id == 2)
                                <li>
                                    <a href="{{ route('post.create') }}">Create Post</a></li>
                            <li style="margin-left: 10px"> <a href="{{ route('logout') }}" title="">Logout</a></li>
                            @else
                                null
                            @endif
                        @else
                            <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                            @if (Route::has('register'))
                                <li>
                                <a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                @endif

            </ul>


        </div>
    </div><!-- topbar -->

</div>
