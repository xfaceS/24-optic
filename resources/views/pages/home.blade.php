@extends('layouts.app')

@section('title','Accueil')

@section('content')
<div id="main-slider" data-slider-width="100%" data-slider-height="750" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
    <div class="sp-slides">
      @foreach ($sliders as $item)
        <div class="sp-slide">
          <img src="{{asset('storage/'.$item->image)}}" alt="slider" class="sp-image"/>
          <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
            <h2 class="main-slider__title">{{$item->title}}</h2>
          </div>
          {{-- <div data-width="100%" data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer"><a href="blog-1.html" class="main-slider__link bg-3 btn btn-xs btn-effect">lifestyle</a></div> --}}
          <div data-width="100%" data-show-transition="right" data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
            <div class="main-slider-meta">
              <span class="main-slider-meta__item">
                {{$item->description}}
              </span>
              {{-- <span class="main-slider-meta__item"><i class="icon pe-7s-comment"></i>108</span> --}}
            </div>
          </div>
        </div>
      @endforeach
      
     
    </div>
  </div>
  {{-- <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <section class="section-type-a wow">
          <div class="wrap-title-bg">
            <h2 class="ui-title-bg">Latest from categories</h2>
          </div>
          <div data-min480="1" data-min768="2" data-min992="2" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
            <article class="post post-1 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/1.jpg" alt="Foto" class="img-responsive"/></a>
                <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
              </div><span class="label bg-1">politics</span>
              <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>62</span></div>
            </article>
            <article class="post post-1 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/2.jpg" alt="Foto" class="img-responsive"/></a>
                <h2 class="entry-title">elit sed eiusmod tempor</h2>
              </div><span class="label bg-2">technology</span>
              <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>24</span></div>
            </article>
            <article class="post post-1 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/3.jpg" alt="Foto" class="img-responsive"/></a>
                <h2 class="entry-title">dolore magna aliqua Ut enim</h2>
              </div><span class="label bg-5">world</span>
              <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>47</span></div>
            </article>
            <article class="post post-1 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/4.jpg" alt="Foto" class="img-responsive"/></a>
                <h2 class="entry-title">ullamco laboris nisi aliquip</h2>
              </div><span class="label bg-7">health</span>
              <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">feb 30, 2016</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>85</span></div>
            </article>
          </div>
        </section>
      </div>
    </div>
  </div> --}}
  <div class="section-type-c wow">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <section class="section-area">
            <h2 class="ui-title-block">
              <span class="ui-title-block__subtitle">Explorez le sommet</span>
              {{-- <span class="text-uppercase">news makers</span> --}}
            </h2>
            {{-- <ul class="nav nav-tabs">
              <li class="tabs-label">Filter Content by</li>
              <li class="active"><a href="#tab-1" data-toggle="tab">Latest</a></li>
              <li><a href="#tab-2" data-toggle="tab">Previous Week</a></li>
              <li><a href="#tab-3" data-toggle="tab">HOT articles</a></li>
              <li><a href="#tab-4" data-toggle="tab">highest rated</a></li>
            </ul> --}}
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade in active">
                <div class="row">
                  {{-- <div class="col-md-6">
                    <article class="post post-2 post-2_mod-d clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                        </div>
                        <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                      </div>
                    </article>
                  </div> --}}
                  <div class="col-md-12">
                    @foreach ($news as $new)
                      <article class="post post-3 post-3_mod-a clearfix">
                        <div class="entry-media"><a href="{{asset('storage/'.$new->thumbnail)}}" class="prettyPhoto"><img src="{{asset('storage/'.$new->thumbnail)}}" alt="{{$new->thumbnail}}" class="img-responsive"/></a></div>
                        <div class="entry-main">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="{{route('news.show',$new->slug)}}">{{$new->name}}</a></h2>
                          </div>
                          <div class="entry-meta">
                            <span class="category color-4">{{$new->category_name}}</span>
                            {{-- <span class="entry-meta__item">
                              <i class="icon pe-7s-comment"></i>
                              <a href="news_details-1.html" class="entry-meta__link">6</a>
                            </span> --}}
                          </div>
                        </div>
                      </article>
                    @endforeach
                    
                   
                    
                  </div>
                </div>
              </div>
              {{-- <div id="tab-2" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-6">
                    <article class="post post-2 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                        </div>
                        <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-6">
                    <article class="post post-2 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                        </div>
                        <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div id="tab-4" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-6">
                    <article class="post post-2 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                        </div>
                        <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat duis</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-4">sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                      </div>
                    </article>
                    <article class="post post-3 clearfix">
                      <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto" class="img-responsive"/></a></div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                        </div>
                        <div class="entry-meta"><span class="category color-12">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                      </div>
                    </article>
                  </div>
                </div>
              </div> --}}
            </div>
          </section>
        </div>
        <div class="col-md-4">
          <aside class="sidebar">
            {{-- <section class="widget">
              <h2 class="widget-title ui-title-inner text-right">Suivez-nous</h2>
              <div class="decor-right"></div>
              <div class="widget-content">
                <ul class="list-subscription list-unstyled">
                  <li class="list-subscription__item bg-11"><span class="list-subscription__name">Rss</span><span class="list-subscription__number">164.983</span> followers<a href="rss.com" class="list-subscription__link"><i class="icon fa fa-rss"></i></a></li>
                  <li class="list-subscription__item bg-8"><span class="list-subscription__name">TW</span><span class="list-subscription__number">714,967</span> followers<a href="twitter.com" class="list-subscription__link"><i class="icon fa fa-twitter"></i></a></li>
                  <li class="list-subscription__item bg-9"><span class="list-subscription__name">FB</span><span class="list-subscription__number">250,642</span> likes<a href="facebook.com" class="list-subscription__link"><i class="icon fa fa-facebook"></i></a></li>
                  <li class="list-subscription__item bg-10"><span class="list-subscription__name">yt</span><span class="list-subscription__number">920,497</span> subscribers<a href="youtube.com" class="list-subscription__link"><i class="icon fa fa-youtube-play"></i></a></li>
                </ul>
              </div>
            </section> --}}
            <div class="widget">
              @foreach ($ads as $ad)
              <a href="{{$ad->lien}}" class="banner" target="__blank">
                <img src="{{asset('storage/'.$ad->image)}}" alt="banner" class="img-responsive center-block">
              </a>
              @endforeach
              
              
            </div>
            {{-- <section class="widget">
              <h2 class="widget-title ui-title-inner text-right">stay updated</h2>
              <div class="decor-right"></div>
              <div class="widget-content">
                <p>Sign up for our newsletter to receive latest news as it happenes in your inbox.</p>
                <form class="form-subscribe">
                  <div class="form-group has-feedback">
                    <input type="email" placeholder="your email address" class="form-control">
                    <button class="icon pe-7s-mail form-control-feedback"></button>
                  </div>
                </form>
              </div>
            </section> --}}
          </aside>
        </div>
      </div>
    </div>
  </div>
  {{-- <section class="section-type-a">
    <div class="wrap-title-bg">
      <h2 class="ui-title-bg">today’s news trend</h2>
    </div>
    <div data-jarallax="{&quot;type&quot;: &quot;scroll-opacity&quot;, &quot;speed&quot;: &quot;.2&quot;}" style="background-image: url(assets/media/content/bg/1.jpg)" class="section-default section-bg section-bg_dark jarallax">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section__inner">
              <div id="slider-1" class="slider-pro slider-thumbnails">
                <div class="sp-slides">
                  <div class="sp-slide">
                    <article class="post post-2 post-2_mod-a clearfix">
                      <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                          </h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-slide">
                    <article class="post post-2 post-2_mod-a clearfix">
                      <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                          </h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-slide">
                    <article class="post post-2 post-2_mod-a clearfix">
                      <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                          </h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-slide">
                    <article class="post post-2 post-2_mod-a clearfix">
                      <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                          </h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-slide">
                    <article class="post post-2 post-2_mod-a clearfix">
                      <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                          </h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-slide">
                    <article class="post post-2 post-2_mod-a clearfix">
                      <div class="entry-media"><a href="assets/media/content/post-slider/main/1.jpg" class="prettyPhoto"><img src="assets/media/content/post-slider/main/1.jpg" alt="Foto" class="img-responsive"/></a><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase"><a href="news_details-1.html">Lorem ipsum dolor amt elit sed tempor incidunt</a>
                          </h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        <div class="entry-content">
                          <p>Lorem ipsum dolor amet consecteu adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enimad minim tempor incididunt.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="sp-thumbnails">
                  <div class="sp-thumbnail">
                    <article class="post post-2 post-2_mod-b clearfix">
                      <div class="entry-media"><img src="assets/media/content/post-slider/thumb/1.jpg" alt="Foto" class="img-responsive"/><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-thumbnail">
                    <article class="post post-2 post-2_mod-b clearfix">
                      <div class="entry-media"><img src="assets/media/content/post-slider/thumb/2.jpg" alt="Foto" class="img-responsive"/><span class="label bg-5">world</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-thumbnail">
                    <article class="post post-2 post-2_mod-b clearfix">
                      <div class="entry-media"><img src="assets/media/content/post-slider/thumb/3.jpg" alt="Foto" class="img-responsive"/><span class="label bg-13">sports</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-thumbnail">
                    <article class="post post-2 post-2_mod-b clearfix">
                      <div class="entry-media"><img src="assets/media/content/post-slider/thumb/1.jpg" alt="Foto" class="img-responsive"/><span class="label bg-6">travel</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-thumbnail">
                    <article class="post post-2 post-2_mod-b clearfix">
                      <div class="entry-media"><img src="assets/media/content/post-slider/thumb/2.jpg" alt="Foto" class="img-responsive"/><span class="label bg-5">world</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                      </div>
                    </article>
                  </div>
                  <div class="sp-thumbnail">
                    <article class="post post-2 post-2_mod-b clearfix">
                      <div class="entry-media"><img src="assets/media/content/post-slider/thumb/3.jpg" alt="Foto" class="img-responsive"/><span class="label bg-13">sports</span>
                      </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h2 class="entry-title text-uppercase">amet consading elit usmod tempor</h2>
                        </div>
                        <div class="entry-meta"><span class="entry-meta__item">1 hour ago</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i>23</span></div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <div class="section-downloads section-downloads_mod-a wow">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2">
          <div class="downloads downloads_mod-a section__inner clearfix">
            <div class="downloads__wrap-text">
              <h2 class="downloads__title ui-title-block">
                <span class="ui-title-block__subtitle">Chercher magasin d'optique</span>
                <span class="text-uppercase">N'importe quand n'importe où</span>
              </h2>
              {{-- <div class="downloads__info">get free mobile app & enjoy reading news!</div> --}}
            </div>
            <div class="downloads__btns-group">
              <a href="{{route('magasins.index')}}" class="downloads__btn"><i class="icon fa fa-search"></i>Recherche</a>
              {{-- <a href="home.html" class="downloads__btn"><i class="icon fa fa-android"></i>for Apple iOS</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="section-default">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6 wow">
              <div class="title-category clearfix">
                <h2 class="title-category__title ui-title-inner color-4">entertainment</h2><span class="title-category__category">fashion, movies, ...</span>
              </div>
              <div class="decor-right bg-4"></div>
              <article class="post post-2 post-2_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/360x240/1.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x240/1.jpg" alt="Foto" class="img-responsive"/></a>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title text-uppercase">Incididunt labore et magna</h2>
                  </div>
                  <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                  <div class="entry-content">
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim ...</p>
                  </div>
                  <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                </div>
              </article>
            </div>
            <div class="col-md-6 wow">
              <div class="title-category clearfix">
                <h2 class="title-category__title ui-title-inner color-5">world news</h2><span class="title-category__category">Asia, europe, ...</span>
              </div>
              <div class="decor-right bg-5"></div>
              <article class="post post-2 post-2_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/360x240/2.jpg" class="prettyPhoto"><img src="assets/media/content/post/360x240/2.jpg" alt="Foto" class="img-responsive"/></a>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title text-uppercase">dolor amt elit sed tempor</h2>
                  </div>
                  <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                  <div class="entry-content">
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim ...</p>
                  </div>
                  <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue Reading</a></div>
                </div>
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="section-type-d wow"><a href="home.html" class="banner"><img src="assets/media/content/banners/2.jpg" alt="banner" class="img-responsive center-block"></a></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 wow">
              <article class="post post-3 post-3_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/100x100/6.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/6.jpg" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                  </div>
                  <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                </div>
              </article>
              <article class="post post-3 post-3_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/100x100/8.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/8.jpg" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                  </div>
                  <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                </div>
              </article>
              <article class="post post-3 post-3_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/100x100/10.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/10.jpg" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat duis</a></h2>
                  </div>
                  <div class="entry-meta"><span class="category color-4">entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">78</a></span></div>
                </div>
              </article>
            </div>
            <div class="col-md-6 wow">
              <article class="post post-3 post-3_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/100x100/7.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/7.jpg" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                  </div>
                  <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">51</a></span></div>
                </div>
              </article>
              <article class="post post-3 post-3_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/100x100/9.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/9.jpg" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nasek euat duis</a></h2>
                  </div>
                  <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">14</a></span></div>
                </div>
              </article>
              <article class="post post-3 post-3_mod-c clearfix">
                <div class="entry-media"><a href="assets/media/content/post/100x100/11.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/11.jpg" alt="Foto" class="img-responsive"/></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit</a></h2>
                  </div>
                  <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">3</a></span></div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <aside class="sidebar">
            <section class="widget wow">
              <h2 class="widget-title ui-title-inner text-right">categories</h2>
              <div class="decor-right"></div>
              <div class="widget-content">
                <ul class="list list-mark-1 list-mark-1_mod-a">
                  <li><a href="category.html">fashion & lifestyle</a></li>
                  <li><a href="category.html">World politics</a></li>
                  <li><a href="category.html">entertainment News</a></li>
                  <li><a href="category.html">music & videos</a></li>
                  <li><a href="category.html">fun & funny moments</a></li>
                </ul>
              </div>
            </section>
            <section class="widget wow">
              <h2 class="widget-title ui-title-inner text-right">Latest videos</h2>
              <div class="decor-right"></div>
              <div class="widget-content">
                <div id="accordion" class="panel-group acc-type-a acc-type-a_mod-a">
                  <div class="panel panel-default">
                    <div id="vi-ac_1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="panel-heading">
                      <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_1"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Journey into west sea</span><span class="acc-type-a__author">BY anderson</span></a></div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="vi-ac_2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="panel-heading">
                      <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_2"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Aliquic exea comod rureduis</span><span class="acc-type-a__author">BY sofia</span></a></div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="vi-ac_3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="panel-heading">
                      <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_3"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Dolore magna aliqua ut enim nim</span><span class="acc-type-a__author">BY clarkson</span></a></div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="vi-ac_4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <iframe width="100%" height="240" src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="panel-heading">
                      <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#vi-ac_4"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Slamco laboris nisi ute aliquip</span><span class="acc-type-a__author">BY zedan</span></a></div>
                    </div>
                  </div>
                </div>
                <div class="text-right"><a href="home.html" class="acc-type-a__link btn-link">all videos</a></div>
              </div>
            </section>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <div class="container wow">
    <div class="row">
      <div class="col-xs-12">
        <section class="section-type-c">
          <div class="wrap-title-bg">
            <h2 class="ui-title-bg">editor’s pick</h2>
          </div>
          <div data-min480="1" data-min768="2" data-min992="4" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
            <article class="post post-4 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/5.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/5.jpg" alt="Foto" class="img-responsive"/></a></div>
              <div class="entry-main">
                <div class="entry-header">
                  <h2 class="entry-title">Lorem ipsum dolor sit amet sed do eiusmod tempor</h2>
                </div>
                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sander</a></span></div>
              </div>
            </article>
            <article class="post post-4 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/6.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/6.jpg" alt="Foto" class="img-responsive"/></a></div>
              <div class="entry-main">
                <div class="entry-header">
                  <h2 class="entry-title">elit sed eiusmod tempor incididunt labore et</h2>
                </div>
                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  adam cowie</a></span></div>
              </div>
            </article>
            <article class="post post-4 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/7.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/7.jpg" alt="Foto" class="img-responsive"/></a></div>
              <div class="entry-main">
                <div class="entry-header">
                  <h2 class="entry-title">dolore magna aliqua Ut enim Lorem ipsum dolor sit amet</h2>
                </div>
                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  thomas ken</a></span></div>
              </div>
            </article>
            <article class="post post-4 clearfix">
              <div class="entry-media"><a href="assets/media/content/post/285x300/8.jpg" class="prettyPhoto"><img src="assets/media/content/post/285x300/8.jpg" alt="Foto" class="img-responsive"/></a></div>
              <div class="entry-main">
                <div class="entry-header">
                  <h2 class="entry-title">ullamco laboris nisi aliquip exercitation ullamco</h2>
                </div>
                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link">  saler ricky</a></span></div>
              </div>
            </article>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div class="section-type-g wow">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <article class="post post-3 post-3_mod-d clearfix">
            <div class="entry-media"><a href="assets/media/content/post/100x100/12.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/12.jpg" alt="Foto" class="img-responsive"/></a></div>
            <div class="entry-main">
              <div class="entry-header">
                <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus error sit ipsum dolor sit amep consectetur elit ...</a></h2>
              </div>
              <div class="entry-meta"><span class="category color-13">Sports</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">47</a></span></div>
            </div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="post post-3 post-3_mod-d clearfix">
            <div class="entry-media"><a href="assets/media/content/post/100x100/13.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/13.jpg" alt="Foto" class="img-responsive"/></a></div>
            <div class="entry-main">
              <div class="entry-header">
                <h2 class="entry-title"><a href="news_details-1.html">Aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate ...</a></h2>
              </div>
              <div class="entry-meta"><span class="category color-2">technology</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">31</a></span></div>
            </div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="post post-3 post-3_mod-d clearfix">
            <div class="entry-media"><a href="assets/media/content/post/100x100/14.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/14.jpg" alt="Foto" class="img-responsive"/></a></div>
            <div class="entry-main">
              <div class="entry-header">
                <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam ...</a></h2>
              </div>
              <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">74</a></span></div>
            </div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="post post-3 post-3_mod-d clearfix">
            <div class="entry-media"><a href="assets/media/content/post/100x100/15.jpg" class="prettyPhoto"><img src="assets/media/content/post/100x100/15.jpg" alt="Foto" class="img-responsive"/></a></div>
            <div class="entry-main">
              <div class="entry-header">
                <h2 class="entry-title"><a href="news_details-1.html">Ficia deserunt mollit anim aidu est laborum sed ut erspiciatis unde omnis iste ...</a></h2>
              </div>
              <div class="entry-meta"><span class="category color-7">health</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">17</a></span></div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div> --}}
  <section class="section-default wow">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="clearfix">
            <h2 class="ui-title-block">
              {{-- <span class="ui-title-block__subtitle">Read the</span> --}}
              <span class="text-uppercase">Dernier Articles</span></h2><a href="category.html" class="btn-link btn-link_under-title">Voir plus d'articles</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="wrap-posts">
            @foreach ($news_long as $new_ll)
              <article class="post post-2 post-2_mod-e clearfix">
                <div class="entry-media">
                  <a href="{{asset('storage/'.$new_ll->thumbnail)}}" class="prettyPhoto">
                    <img src="{{asset('storage/'.$new_ll->thumbnail)}}" alt="Foto" class="img-responsive"/>
                  </a>
                  <span class="label bg-3">{{$new_ll->category_name}}</span>
                </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <a href="{{route('news.show',$new_ll->slug)}}">
                      <h2 class="entry-title text-uppercase">{{$new_ll->name}}</h2>
                    </a>
                    
                  </div>
                  <div class="entry-meta">
                    <span class="entry-meta__item">
                      <a href="{{route('news.show',$new_ll->slug)}}" class="entry-meta__link">{{$new_ll->updated_at->diffForHumans()}}</a>
                    </span>
                  </div>
                </div>
              </article>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
 
@endsection