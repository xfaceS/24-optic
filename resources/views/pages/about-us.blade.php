@extends('layouts.app')

@section('title','Qui somme nous ?')
@section('content')
  <div class="section-title section-bg">
      <div class="section__inner">
        <h1 class="ui-title-page">Qui somme nous ?</h1>
      </div>
  </div>
  <div class="breadcrumb-wrap">
    <ol class="breadcrumb">
      <li><a href="{{route('home')}}">Accueil</a></li>
      <li class="active">Qui somme nous ?</li>
    </ol>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="section-type-a">
          <div class="ui-description ui-description_mod-a text-center">Aliquip exea comod rure nsewuat duis Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididun labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <div class="decor-center"></div>
      </div>
    </div>
  </div>
  <div class="section-type-i">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div data-pagination="false" data-navigation="true" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"><img src="assets/media/content/carousel-1/1.jpg" alt="foto" class="img-responsive"><img src="assets/media/content/carousel-1/1.jpg" alt="foto" class="img-responsive"><img src="assets/media/content/carousel-1/1.jpg" alt="foto" class="img-responsive"></div>
        </div>
        <div class="col-md-6">
          <section class="section_mod-a">
            <h2 class="ui-title-block ui-title-block_font-sm text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt sed nostrud</h2>
            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incid dunt labore et dolore magna aliqua enimad minim.</p>
            <ul class="list list-mark-1">
              <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
              <li>Elit sed do eiusmod tempor incididunt ut labore et dolore</li>
              <li>Nostrud exercitation ullamco laboris nisi ut aliquip</li>
              <li>Commodo consequat duis aute irure dolor inc</li>
              <li>Cupidatat non proident sunt in culpa qui</li>
            </ul><a class="btn-link">Contact us</a>
          </section>
        </div>
      </div>
    </div>
  </div>
 
@endsection