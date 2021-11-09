<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>OLX</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-primary">
        <div class="container">
          <a class="navbar-brand p-3" href="{{route('home')}}"><h2>OLX</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <form class="d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav justify-content-end  me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="@auth {{route('favourite')}} @endauth @guest {{route('register')}} @endguest "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg></a>
                      </li>
                          @guest
                          <li class="nav-item">
                            <a class="nav-link ml-3" href="{{route('register')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  </svg> MóJ OLX</a>
                                </li>
                              
                          @endguest
                          @auth
                          <form action="{{route('logout')}}" method="post" style="display: none;">
                            @csrf
                            <button class="btn bg-primary" type="submit" disabled></button>
                            </form>
                          <li class="nav-item dropdown-toggle" >
                            <div class="btn-group " data-toggle="dropdown" href="{{route('offers')}}" type="button"aria-haspopup="true" aria-expanded="false">
                            <a class="nav-link" href="{{route('offers')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg> MóJ OLX</a></div>
                              
                            <div class="dropdown-menu" style="right: auto; left: auto;">
                              <a class="dropdown-item" href="{{route('offers')}}">
                                 MóJ OLX</a>
                              <div class="dropdown-divider"></div>
                              <form action="{{route('logout')}}" method="post">
                              @csrf
                              <button type="submit" class="dropdown-item">Wyloguj</button>
                              </form>
                            </div>
                                </li>
                          @endauth
                        </ul>

              <a href="@auth {{route('add_post')}} @endauth @guest {{route('register')}} @endguest " class="btn bg-light py-2 px-3 ml-3 btn-outline-info">Dodaj ogłoszenie</a>
            </form>
          </div>
        </div>
      </nav>


    @yield('content')

    <div class="container-fluid border border-info border-right-0 border-left-0 border-bottom-0">
      <div class="container bg-light mb-5 mt-5 p-2 ">
        <div class="row">
          <div class="col-md-1">
            </div>
            <div class="col-md-3">
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Aplikacje mobilne OLX.pl</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Pomoc</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Wyróżnione ogłoszenia</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Oferta dla firm</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Blog</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Regulamin</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Polityka prywatności</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Reklama</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Biuro prasowe</p></a>
  
      </div>
  
      <div class="col-md-3">
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Jak działa OLX.pl</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Zasady bezpieczeństwa</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Mapa kategorii</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Mapa miejscowości</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Popularne wyszukiwania</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Kariera</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Ustawienia plików cookie</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Kody rabatowe</p></a>
              <a href="https://www.olx.pl/lp/mobilne/"><p class="font-weight-bold ml-3">Ubezpieczenia OC/AC</p></a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a href="https://play.google.com/store/apps/details?id=pl.tablica&referrer=utm_source%3Dolx.pl%26utm_medium%3Dcpc%26utm_campaign%3Dandroid-app-footer"><img src="/images/google-play-badge.png" class="img-fluid"></a>        
      </div>
      <div class="col-md-2 col-sm-6">
        <a href="https://apps.apple.com/pl/app/olx-pl-darmowe-og-oszenia/id531717763?l=pl&ls=1"><img src="/images/app-store-badge1.png" class="img-fluid"></a>
      </div>
      <div class="col-md-1 ">
  
      </div>
    </div>
  </div>
</body>
</html>