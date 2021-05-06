@extends('frontend.layouts.app')

@section('content')

    <!-- banner principal -->
    <div class="main-banner">
        <div class="container expanded">
            <div class="owl-big-banner owl-carousel">
                <div class="item">
                    <div class="overlay"></div>
                    <img src="{{ asset('assets/images/main-banner/img.gif') }}" alt="" class="img-fluid">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span>Fashion</span>
                            </div>
                            <a href="single-standard-post.html">
                                <h4>tousled <em>subway</em> chartreuse</h4>
                            </a>
                            {{-- <ul class="post-info">
                                <li><a href="#">January 10, 2020</a></li>
                                <li><a href="#">6 Comments</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- seccion para tienda -->
    <section class="medium-gap call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="left-content">
                                    <h2><em>Shareen</em> newest personal <em>Blog</em> Template!</h2>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="normal-white-button">
                                    <a href="#">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion de posts -->
    <section class="medium-gap standard-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="standard-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/770x320"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="meta-category">
                                            <span>Lifestyle</span>
                                        </div>
                                        <a href="single-standard-post.html">
                                            <h4>Sartorial dreamcatcher food truck <em>cardigan bicycle</em></h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four
                                            loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric
                                            leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments-info">
                                                    <i class="fa fa-comment-o"></i>
                                                    <span>8 comments</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="share-post">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a>,</li>
                                                    <li><a href="#">Pinterest</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="standard-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/770x320"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="meta-category">
                                            <span>Fashion</span>
                                        </div>
                                        <a href="single-standard-post.html">
                                            <h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four
                                            loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric
                                            leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments-info">
                                                    <i class="fa fa-comment-o"></i>
                                                    <span>8 comments</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="share-post">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a>,</li>
                                                    <li><a href="#">Pinterest</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="standard-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/770x320"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="meta-category">
                                            <span>Beauty</span>
                                        </div>
                                        <a href="single-standard-post.html">
                                            <h4><em>helvetica</em> skateboard semiotics <em>tumeric shorts</em> drinking
                                            </h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four
                                            loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric
                                            leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments-info">
                                                    <i class="fa fa-comment-o"></i>
                                                    <span>8 comments</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="share-post">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a>,</li>
                                                    <li><a href="#">Pinterest</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar right-sidebar">
                        <div class="row">

                            <!-- acerca de -->
                            <div class="col-lg-12">
                                <div class="widget-sidebar about-me">
                                    <div class="widget-header">
                                        <h4>Acerca de</h4>
                                    </div>
                                    <div class="widget-content">
                                        <img src="http://placehold.it/310x200" alt="">
                                        <p>Franzen tumeric sriracha and quinoa goard next level cold-pressed kinfolk.</p>
                                        <h6>Shareen Robertson</h6>
                                        {{-- <ul class="social-icons">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- promocion de ecomerce -->
                            <div class="col-lg-12">
                                <div class="widget-sidebar promo-post">
                                    <div class="widget-header">
                                        <h4>Promoción Tienda</h4>
                                    </div>
                                    <div class="widget-content">
                                        <div class="promo-image">
                                            <img src="http://placehold.it/310x250" alt="">
                                            <div class="inner-content">
                                                <p>Franzen tumeric sriracha and quinoa next level kinfolk cronut.</p>
                                                <div class="normal-white-button">
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- publicaiones instagram -->
                            <div class="col-lg-12">
                                <div class="widget-sidebar instagram-posts">
                                    <div class="widget-header">
                                        <h4>Instagram</h4>
                                    </div>
                                    <div class="widget-content">
                                        <div class="instagram-item left-item first-row">
                                            <img src="http://placehold.it/140x140" alt="">
                                        </div>
                                        <div class="instagram-item first-row">
                                            <img src="http://placehold.it/140x140" alt="">
                                        </div>
                                        <div class="instagram-item left-item">
                                            <img src="http://placehold.it/140x140" alt="">
                                        </div>
                                        <div class="instagram-item">
                                            <img src="http://placehold.it/140x140" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 ultimas publicaciones -->
                            <div class="col-lg-12">
                                <div class="widget-sidebar latest-posts">
                                    <div class="widget-header">
                                        <h4>Ultimas Publicaciones</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="latest-post-list">
                                            <li>
                                                <a href="single-standard-post.html">
                                                    <div class="left-image">
                                                        <img src="http://placehold.it/80x80" alt="">
                                                        <span>9</span>
                                                    </div>
                                                    <div class="right-content">
                                                        <h6>croix flannel thundercats chicken</h6>
                                                        <span>January 14, 2020</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-standard-post.html">
                                                    <div class="left-image">
                                                        <img src="http://placehold.it/80x80" alt="">
                                                        <span>3</span>
                                                    </div>
                                                    <div class="right-content">
                                                        <h6>The Ultimate Women Guide Latest Fashion</h6>
                                                        <span>January 12, 2020</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-standard-post.html">
                                                    <div class="left-image">
                                                        <img src="http://placehold.it/80x80" alt="">
                                                        <span>7</span>
                                                    </div>
                                                    <div class="right-content">
                                                        <h6>wayfarers man braid marfa typewriter</h6>
                                                        <span>January 10, 2020</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- filtrar por categorias -->
                            <div class="col-lg-12">
                                <div class="widget-sidebar categories">
                                    <div class="widget-header">
                                        <h4>Categorias</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="categories">
                                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                            <li><a href="#">Fashion <span>(9)</span></a></li>
                                            <li><a href="#">Beauty <span>(7)</span></a></li>
                                            <li><a href="#">Nature <span>(19)</span></a></li>
                                            <li><a href="#">Nightlife <span>(4)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="widget-sidebar tags-cloud">
                                    <div class="widget-header">
                                        <h4>Tags Cloud</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="tags">
                                            <li><a href="#">lifestyle</a></li>
                                            <li><a href="#">beauty</a></li>
                                            <li><a href="#">fashion</a></li>
                                            <li><a href="#">js</a></li>
                                            <li><a href="#">psd</a></li>
                                            <li><a href="#">brand</a></li>
                                            <li><a href="#">wordpress</a></li>
                                            <li><a href="#">css</a></li>
                                            <li><a href="#">nature</a></li>
                                            <li><a href="#">inspiration</a></li>
                                            <li><a href="#">motivation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
