<!DOCTYPE html>
<html lang="es">
@include('frontend.includes.head')

<body>
    <!-- lodader -->
    <div id="js-preloader" class="js-preloader">
        <div class="cp-preloader cp-preloader_type1">
            <span class="cp-preloader__letter" data-preloader="C">C</span>
            <span class="cp-preloader__letter" data-preloader="A">A</span>
            <span class="cp-preloader__letter" data-preloader="R">R</span>
            <span class="cp-preloader__letter" data-preloader="G">G</span>
            <span class="cp-preloader__letter" data-preloader="A">A</span>
            <span class="cp-preloader__letter" data-preloader="N">N</span>
            <span class="cp-preloader__letter" data-preloader="D">D</span>
            <span class="cp-preloader__letter" data-preloader="O">O</span>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-nav-wrapper">
        <div class="mobile-menu-inner">
            <ul class="mobile-menu">
                <li><a href="#">Inicio <i class="sub-icon fa fa-angle-down"></i></a></li>
            
                <li><a href="pages-about-me-v1.html">Tienda</a></li>
                
                <li><a href="#">Blog <i class="sub-icon fa fa-angle-down"></i></a></li>
                <li><a href="pages-contact-me-v2.html">Contacto</a></li>
            </ul>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <!-- top header -->
    <section class="above-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/yessitraveling"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/yessitraveling"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/yessitraveling/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <ul class="search-item">
                        <li class="menu-item menu-search">
                            <a href="#search" id="menu-search-btn">
                                <i class="icon_search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- header -->
    @include('frontend.includes.header')

    <!-- buscador -->
    <div class="change-class"></div>

    <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Que buscaremos hoy..." />
            <button type="submit" class="primary-button"><i class="icon_search"></i></button>
        </form>
    </div>

    <!-- contenido principal -->
    @yield('content')

    <!-- footer -->
    @include('frontend.includes.footer')
</body>

</html>
