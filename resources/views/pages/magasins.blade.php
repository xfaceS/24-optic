@extends('layouts.app')

@section('title','Recherche d\'un magasin')
@section('content')
<div class="section-default">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <form id="search-global-form" method="get" class="form-search" style="margin-top: 100px;" action="">
                <div class="form-group has-feedback">
                  <input type="text" placeholder="Recherche d'opticien" name="opticien" class="form-search__input form-control">
                  <button class="form-search__btn icon pe-7s-search form-control-feedback"></button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            @foreach ($opticiens as $item)
                <article class="post post-5 clearfix">
                    <div class="entry-media">
                        <a href="{{asset('storage/'.$item->thumbnail)}}" class="prettyPhoto">
                            <img src="{{asset('storage/'.$item->thumbnail)}}" alt="Foto" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="entry-main">
                        <div class="entry-header"><span class="category color-4">{{$item->category_name}}</span>
                            <h2 class="entry-title"><a href="{{route('magasins.show',$item->slug)}}">{{$item->name}}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <span class="entry-meta__item">
                                <a href="#" class="entry-meta__link">{{$item->updated_at->diffForHumans()}}</a>
                            </span>
                        </div>
                        {{-- <div class="entry-content">
                            <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco laboris onsequat ...</p>
                        </div> --}}
                        <div class="entry-footer">
                            <a href="{{route('magasins.show',$item->slug)}}" class="btn-link">Continuer la lecture</a>
                        </div>
                    </div>
                </article>
            @endforeach
                
            <div class="wrap-pagination">
             {{ $opticiens->links('widgets.pagination') }}
            </div>
          
            {{-- <div class="wrap-pagination">
                <ul class="pagination">
                <li><a href="#">previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Next</a></li>
                </ul>
            </div> --}}
        </div>
       
      </div>
    </div>
  </div>
@endsection