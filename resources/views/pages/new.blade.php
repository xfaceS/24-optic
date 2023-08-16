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
                  @foreach ($new->images as $image)
                    <div class="col-md-3">
                      <a href="{{asset('storage/'.$image)}}" class="prettyPhoto">
                        <img src="{{asset('storage/'.$image)}}" alt="{{$new->name}}" class="img-responsive" style="width: 100%;">
                      </a>
                    </div>
                  @endforeach
                  
                </div>
              </div>
              <div class="entry-header">
                <h2 class="entry-title"><a href="{{route('news.show',$new->slug)}}">{{$new->name}}</a></h2>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <article class="post post-full post-full_mod-a clearfix" style="margin-bottom: 2em;">
            <div class="entry-main">
              <div class="entry-content">
                  {!! $new->description !!}
              </div>
             
            </div>
          </article>

        </div>
        
      </div>
    </div>
  </div>

@endsection