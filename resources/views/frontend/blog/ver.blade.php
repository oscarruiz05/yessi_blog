@extends('frontend.layouts.app')

@section('content')
<section class="medium-gap single-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="single-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="single-post">
                  <div class="post-image">
                    <div class="meta-category">
                      <span>Fashion</span>
                    </div>
                    <img src="http://placehold.it/770x420" alt="">
                  </div>
                  <div class="down-content">
                    <h4>Umami Pin Paleo Skateboard Enamel</h4>
                    <ul class="post-info">
                      <li><a href="#">January 10, 2020</a></li>
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">3 Comments</a></li>
                    </ul>
                    <p class="first-paragraph">Lorem ipsum dolor amet swag typewriter meditation iceland air plant, direct trade tacos kale chips ugh. Fashion axe single-origin coffee organic edison bulb prism. Green juice sriracha kogi iceland. Single-origin coffee leggings gluten-free asymmetrical biodiesel jianbing hoodie crucifix blog cray bitters shabby chic chillwave four dollar toast. Hexagon neutra irony organic jean shorts pop-up fashion axe prism ethical four loko small batch meh plaid tumeric chia, enamel pin vegan.<br><br></p><blockquote>” Bicycle rights keytar meggings kickstarter messenger bag dreamcatcher crufix iceland bitters single-origin coffee. “</blockquote><br><p class="last-paragraph">Bitters jianbing pok pok direct trade kombucha. Organic wolf af, PBRB tacos four loko hoodie chambray. Forage master cleanse kogi vice salvia flannel deep v. Portland gentrify jean shorts, vaporware umami kale chips cray shoreditch freegan kickstarter selfies. Migas mumblecore semiotics neutra everyday carry green juice dreamcheater vegans model.</p>
                    <div class="row">
                      <div class="col-lg-7 col-md-6">
                        <div class="tags">
                          <ul class="tags">
                            <li><i class="fa fa-tag"></i></li>
                            <li><a href="#">Beauty</a>,</li>
                            <li><a href="#">Fashion</a>,</li>
                            <li><a href="#">Lifestyle</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-5 col-md-6">
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
              {{-- <div class="col-lg-12">
                <div class="about-author">
                  <div class="author-image">
                    <img src="http://placehold.it/140x140" alt="">
                  </div>
                  <div class="right-content">
                    <h6>Shareen Robertson</h6>
                    <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut shoreditch freegan kistrater selfies.</p>
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
                <ul class="post-nav">
                  <li><a href="#">Prev Post</a></li>
                  <li><a href="#">Next Post</a></li>
                </ul>
              </div> --}}
              <div class="col-lg-12">
                <div class="widget-post comments">
                  <div class="widget-header">
                    <h4>3 Comments</h4>
                  </div>
                  <div class="widget-content">
                    <ul class="comments">
                      <li>
                        <div class="comment-author-image">
                          <img src="http://placehold.it/90x90" alt="">
                        </div>
                        <div class="right-content">
                          <h6>Robert Imeri <span>January 10, 2020</span></h6>
                          <a href="#" class="reply-button">Reply</a>
                          <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                        </div>
                      </li>
                      <li class="replied">
                        <div class="comment-author-image">
                          <img src="http://placehold.it/90x90" alt="">
                        </div>
                        <div class="right-content">
                          <h6>Kate Luise <span>January 11, 2020</span></h6>
                          <a href="#" class="reply-button">Reply</a>
                          <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                        </div>
                      </li>
                      <li>
                        <div class="comment-author-image">
                          <img src="http://placehold.it/90x90" alt="">
                        </div>
                        <div class="right-content">
                          <h6>Antonio Matters <span>January 09, 2020</span></h6>
                          <a href="#" class="reply-button">Reply</a>
                          <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="widget-post leave-comment">
                  <div class="widget-header">
                    <h4>Deja tu comentario</h4>
                  </div>
                  <div class="widget-content">
                    <div class="contact-form">
                      <form id="contact" action="#" method="post">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" class="form-control" id="name" placeholder="Tu nombre..." required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Tu correo electronico..." required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tu comentario..." required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="filled-button">Publicar comentario</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
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
              <div class="col-lg-12">
                <div class="widget-sidebar categories">
                  <div class="widget-header">
                    <h4>Categories</h4>
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
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection