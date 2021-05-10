@extends('frontend.layouts.app')

@section('content')
    <section class="small-gap filter-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-filters">
                        <ul>
                            <li class="active" data-filter="*"><span>Show All</span></li>
                            <li data-filter=".travel"><span>Travel</span></li>
                            <li data-filter=".motivation"><span>Motivation</span></li>
                            <li data-filter=".fashion"><span>Fashion</span></li>
                            <li data-filter=".lifestyle"><span>Lifestyle</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medium-gap standard-home masonry-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="standard-posts">
                        <div class="row masonry-layout normal-col-gap">
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="{{route('frontend.blog.ver')}}">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 masonry-item travel">
                                <div class="standard-post masonry-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 masonry-item">
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
                {{-- <div class="col-lg-4">
          <div class="main-sidebar right-sidebar">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-sidebar about-me">
                  <div class="widget-header">
                    <h4>About Me</h4>
                  </div>
                  <div class="widget-content">
                    <img src="http://placehold.it/310x200" alt="">
                    <p>Franzen tumeric sriracha and quinoa goard next level cold-pressed kinfolk.</p>
                    <h6>Shareen Robertson</h6>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            
              <div class="col-lg-12">
                <div class="widget-sidebar latest-posts">
                  <div class="widget-header">
                    <h4>Latest Posts</h4>
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

              
            </div>
          </div>
        </div> --}}
            </div>
        </div>
    </section>
@endsection
