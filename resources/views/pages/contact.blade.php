@extends('layouts.app')

@section('title','Qui somme nous ?')
@section('content')
  <div class="section-title section-bg">
      <div class="section__inner">
        <h1 class="ui-title-page">Contactez-nous</h1>
      </div>
  </div>
  <div class="breadcrumb-wrap">
    <ol class="breadcrumb">
      <li><a href="{{route('home')}}">Accueil</a></li>
      <li class="active">Contactez-nous</li>
    </ol>
  </div>
  <div class="section-type-a">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          {{-- <div class="contacts-item"><i class="icon pe-7s-map-marker color-primary"></i>
            <div class="decor-center bg-primary"></div>
            <div class="contacts-item__title">location</div>
            <div class="contacts-item__info">68 Central Road, Inner Ave. <br> FL 20568 - USA</div>
          </div> --}}
        </div>
        <div class="col-md-3">
          <div class="contacts-item"><i class="icon pe-7s-call color-7"></i>
            <div class="decor-center bg-7"></div>
            <div class="contacts-item__title">Telephone</div>
            <div class="contacts-item__info">{{$contact->phone}}</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contacts-item"><i class="icon pe-7s-mail-open-file color-13"></i>
            <div class="decor-center bg-13"></div>
            <div class="contacts-item__title">Email</div>
            <div class="contacts-item__info">{{$contact->email}}</div>
          </div>
        </div>
        <div class="col-md-3">
          {{-- <div class="contacts-item"><i class="icon pe-7s-clock color-3"></i>
            <div class="decor-center bg-3"></div>
            <div class="contacts-item__title">working hours</div>
            <div class="contacts-item__info">Mon - Fri : 9.00am to 6.00pm <br> Sat - Sun : 10.00am to 4.00pm</div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  {{-- <div id="map" class="map"></div> --}}
  
  <hr style="margin: 6rem auto;">
  <div class="section-type-f">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="ui-title-block"><span class="ui-title-block__subtitle">Get in Touch</span><span class="text-uppercase">Send message</span></h2>
          <form action="#" method="post" class="ui-form form-contacts">
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Full name" class="form-control">
              </div>
              <div class="col-md-6">
                <input type="email" placeholder="Email address" class="form-control">
              </div>
              <div class="col-md-6">
                <input type="tel" placeholder="Phone no." class="form-control">
              </div>
              <div class="col-md-6">
                <input type="text" placeholder="subject" class="form-control">
              </div>
              <div class="col-xs-12">
                <textarea rows="5" placeholder="message details" class="form-control"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <button class="ui-form__btn btn btn-sm btn-info btn-full btn-effect"><i class="icon pe-7s-mail"></i>send message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 
@endsection