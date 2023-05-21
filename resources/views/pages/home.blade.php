@extends('layouts.app')

@section('title','Accueil')

@section('content')
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">          
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($sliders as $key => $slider)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <div class="trending-top mb-30 owl-item">
                                    <div class="trend-top-img">
                                        <img src="{{asset('storage/'.$slider->image)}}" alt="">
                                        <div class="trend-top-cap">
                                            <span>{{$slider->title}}</span>
                                            <h2><a href="{{$slider->url}}"> {{$slider->description}} </a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection