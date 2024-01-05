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
          <div class="ui-description ui-description_mod-a text-center">
            Votre plateforme offre une opportunité précieuse de connecter les opticiens et les clients au Maroc. En mettant en avant l'actualité de l'optique, vous favorisez non seulement l'accès aux services des opticiens pour les clients, mais vous créez également un espace où les opticiens peuvent mieux faire connaître leur profession et valoriser leur expertise. Cette plateforme contribue ainsi à renforcer le lien entre les professionnels de l'optique et leur clientèle, tout en promouvant la profession elle-même.  cette démarche innovante !
          </div>
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
            <h2 class="ui-title-block ui-title-block_font-sm text-uppercase">Notre Mission</h2>
            <p>Nous visons à créer un espace d'échange dynamique, facilitant la découverte des dernières nouveautés du domaine et favorisant une expérience optique enrichissante.</p>
            <ul class="list list-mark-1">
              <li>Trouvez votre Opticien Idéal sur Google : Découvrez Services, Avis et Horaires d'Opticiens près de chez Vous !</li>
              <li>Découvrez les Dernières Innovations en Optique : Les Nouveautés qui Transforment Votre Vision !</li>
              <li>À l'Écoute de Vos Questions en Optique : Notre Engagement à Répondre à Toutes vos Interrogations !</li>
              <li>Simplicité de Contact Opticien-Client : Notre Plateforme Facilite la Rencontre pour un Service Optique Personnalisé !</li>
            </ul><a class="btn-link" href="{{route('contact')}}">Contact us</a>
          </section>
        </div>
      </div>
    </div>
  </div>
 
@endsection