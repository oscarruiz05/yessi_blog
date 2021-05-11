<header class="site-header fixed-header">
    <div class="container expanded">
        <div class="header-wrap">
            <div class="header-logo">
                <a href=""><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu">
                    <li class="{{request()->routeIs('frontend.index*') ? 'active' : ''}}"><a href="{{route('frontend.index')}}">Inicio</a></li> 

                    <li><a href="#">Tienda</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="#">Boxed Slider</a></li>
                            <li><a href="#">Full Width Slider</a></li>
                            <li><a href="#">Two Big Posts</a></li>
                            <li><a href="#">Three Big Posts</a></li>
                            <li><a href="#">Infinity Scroll</a></li>
                        </ul> --}}
                    </li>

                    <li class="{{request()->routeIs('frontend.blog*') ? 'active' : ''}}"><a href="{{route('frontend.blog')}}">Blog</a></li>
    
                    {{-- <li class="menu-item-has-children"><a href="#">Posts</a>
                        <ul class="sub-menu">
                            <li><a href="single-standard-post.html">Standard Post</a></li>
                            <li><a href="single-audio-post.html">Audio Post</a></li>
                            <li><a href="single-video-post.html">Video Post</a></li>
                            <li><a href="single-gallery-post.html">Gallery Post</a></li>
                            <li><a href="single-quote-post.html">Quote Post</a></li>
                            <li><a href="single-post-left-sidebar.html">Left Sidebar Post</a></li>
                            <li><a href="single-post-right-sidebar.html">Right Sidebar Post</a></li>
                            <li><a href="single-post-without-sidebar.html">Without Sidebar Post</a></li>
                        </ul>
                    </li> --}}
                    <li class="{{request()->routeIs('frontend.contacto*') ? 'active' : ''}}"><a href="{{route('frontend.contacto')}}">Contacto</a></li>
                    <li class="{{request()->routeIs('frontend.contacto*') ? 'active' : ''}}"><a href="{{route('frontend.auth.logout')}}">admin</a></li>
                </ul>
            </div>
            <div class="header-widgets">
                <ul class="right-menu">
                    <li class="menu-item menu-mobile-nav">
                        <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                            <span class="hamburger"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
