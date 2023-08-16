@extends('layouts.app')

@section('title','Nom du magasin')
@section('content')
<div class="section-type-k">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <article class="post post-full post-full_mod-a clearfix">
          <div class="post-full__top-block">
            <div class="entry-media">
              <div class="row">
                @foreach ($opticien->images as $image)
                  <div class="col-md-3">
                    <a href="{{asset('storage/'.$image)}}" class="prettyPhoto">
                      <img src="{{asset('storage/'.$image)}}" alt="{{$opticien->name}}" class="img-responsive" style="width: 100%;">
                    </a>
                  </div>
                @endforeach
                
              </div>
            </div>
            <div class="entry-header">
              <h2 class="entry-title"><a href="{{route('news.show',$opticien->slug)}}">{{$opticien->name}}</a></h2>
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <article class="post post-full post-full_mod-a clearfix" style="margin-bottom: 1em;">
          <div class="entry-main">
            <div class="entry-content">
                {!! $opticien->description !!}
            </div>
           
          </div>
        </article>

        <iframe height="450" frameborder="0" style="border:0;width:100%;margin-bottom: 1em;" src="https://maps.google.com/maps?q={{$opticien->latitude}},{{$opticien->longitude}}&hl=fr&z=14&amp;output=embed"></iframe>
      </div>
      
    </div>
  </div>
</div>

@endsection