@extends('layouts.app')

@section('title','Recherche d\'un magasin')
@section('content')
<div class="section-default">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            @foreach ($news as $item)
                <article class="post post-5 clearfix">
                    <div class="entry-media">
                        <a href="assets/media/content/post/340x310/1.jpg" class="prettyPhoto">
                            <img src="assets/media/content/post/340x310/1.jpg" alt="Foto" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="entry-main">
                        <div class="entry-header"><span class="category color-4">{{$item->category_name}}</span>
                            <h2 class="entry-title"><a href="news_details-1.html">{{$item->name}}</a></h2>
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
                            <a href="{{route('news.show',$item->slug)}}" class="btn-link">Continuer la lecture</a>
                        </div>
                    </div>
                </article>
            @endforeach
                
            <div class="wrap-pagination">
             {{ $news->links('widgets.pagination') }}
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