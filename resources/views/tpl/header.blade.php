<nav class="navbar yamm">
    <div id="navbar-collapse-1" class="navbar-collapse collapse">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul class="nav navbar-nav">
              <li>
                  <a href="{{route('home')}}">Accueil</a>
              </li>
              <li>
                <a href="{{route('about-us')}}">Qui somme nous</a>
              </li>
              <li>
                <a href="#">Categories</a>
                <ul class="dropdown-menu">

                  <li>
                    <a href="#">Cat 1 </a>
                  </li>
                  <li>
                    <a href="#">Cat 1 </a>
                  </li>
                  <li>
                    <a href="#">Cat 1 </a>
                  </li>
                  <li>
                    <a href="#">Cat 1 </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="{{route('magasins.index')}}">Magasin d'optiques</a>
              </li>
              <li>
                <a href="{{route('news.index')}}">News d'optiques</a>
              </li>

              <li>
                <a href="{{route('contact')}}">Contact</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="header-search">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
    </div> --}}
</nav>

