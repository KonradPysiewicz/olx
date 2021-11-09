@extends('layouts.app')

@section('content')
<div class="container mb-5 mt-5">
  
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
    <form action="{{route('search')}}" class="input-group" method="get">
        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></span>

        <input type="text" class="form-control" placeholder="{{$posts->count()}} Ogłoszeń blisko ciebie" name="search" >
        
        <button class="btn bg-light   btn-outline-info" type="submit">Szukaj <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
      
    
    </form>
      
    </div>
    <div class="col-md-3">
    </div>
  </div>
  </div>

    <div class="container mb-5 mt-5">
        <h1><p class="text-center font-weight-bold mb-5">Kategorie główne</p></h1>
        <div class="row">
          <div class="col-md-2 col-sm-4">
            <form action="{{route('filter')}}" method="get">
              <input type="hidden" name="kategoria" value="Motoryzacja">
          <button class="btn bg-light" type="submit" value="Motoryzacja"><img src="/images/car1.png" class="img-fluid"><p class="text-center font-weight-bold" >Motoryzacja</p></button>

          </form>
        </div>  
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Nieruchomości">
          <button class="btn bg-light" type="submit" value="Nieruchomości"><img src="/images/house.png" class="img-fluid"><p class="text-center font-weight-bold">Nieruchomości</p></button>
   
        </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Praca">
          <button class="btn bg-light" type="submit" value="Praca"><img src="/images/portfolio.png" class="img-fluid"><p class="text-center font-weight-bold">Praca</p></button>
        
        </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Dom i ogród">
          <button class="btn bg-light" type="submit" value="Dom i ogród"><img src="/images/feather-duster.png" class="img-fluid"><p class="text-center font-weight-bold">Dom i ogród</p></button>
   
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
            <input type="hidden" name="kategoria" value="Elektronika">
          <button class="btn bg-light" type="submit" value="Elektronika"><img src="/images/smartphone.png" class="img-fluid"><p class="text-center font-weight-bold">Elektronika</p></button>
    
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Moda">
          <button class="btn bg-light" type="submit" value="Moda"><img src="/images/woman-clothes.png" class="img-fluid"><p class="text-center font-weight-bold">Moda</p></button>
          
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Rolnictwo">
          <button class="btn bg-light" type="submit" value="Rolnictwo"><img src="/images/tractor.png" class="img-fluid"><p class="text-center font-weight-bold">Rolnictwo</p></button>
          
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Zwierzęta">
          <button class="btn bg-light" type="submit" value="Zwierzęta"><img src="/images/cat-face.png" class="img-fluid"><p class="text-center font-weight-bold">Zwierzęta</p></button>
          
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
            <input type="hidden" name="kategoria" value="Dla Dzieci">
          <button class="btn bg-light" type="submit" value="Dla Dzieci"><img src="/images/balloons.png" class="img-fluid"><p class="text-center font-weight-bold">Dla Dzieci</p></button>
         
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
            <input type="hidden" name="kategoria" value="Sport i Hobby">
          <button class="btn bg-light" type="submit" value="Sport i Hobby"><img src="/images/gym.png" class="img-fluid"><p class="text-center font-weight-bold">Sport i Hobby</p></button>
         
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Muzyka i Edukacja">
          <button class="btn bg-light" type="submit" value="Muzyka i Edukacja"><img src="/images/guitar.png" class="img-fluid"><p class="text-center font-weight-bold">Muzyka i Edukacja</p></button>
       
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Usługi i Firmy">
          <button class="btn bg-light" type="submit" value="Usługi i Firmy"><img src="/images/building.png" class="img-fluid"><p class="text-center font-weight-bold">Usługi i Firmy</p></button>
         
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
            <input type="hidden" name="kategoria" value="Ślub i Wesele">
          <button class="btn bg-light" type="submit" value="Ślub i Wesele"><img src="/images/diamond-ring.png" class="img-fluid"><p class="text-center font-weight-bold">Ślub i Wesele</p></button>
       
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Oddam za darmo">
          <button class="btn bg-light" type="submit" value="Oddam za darmo"><img src="/images/sticker.png" class="img-fluid"><p class="text-center font-weight-bold">Oddam za darmo</p></button>
         
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Zamienię">
          <button class="btn bg-light" type="submit" value="Zamienię"><img src="/images/deal.png" class="img-fluid"><p class="text-center font-weight-bold">Zamienię</p></button>
         
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Praca w sprzedaży">
          <button class="btn bg-light" type="submit" value="Praca w sprzedaży"><img src="/images/sticker2.png" class="img-fluid"><p class="text-center font-weight-bold">Praca w sprzedaży</p></button>
       
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Wynajem budowa">
          <button class="btn bg-light" type="submit" value="Wynajem budowa"><img src="/images/crane.png" class="img-fluid"><p class="text-center font-weight-bold">Wynajem budowa</p></button>
         
          </form>
        </div> 
        <div class="col-md-2 col-sm-4">
          <form action="{{route('filter')}}" method="get">
          <input type="hidden" name="kategoria" value="Piękny ogród">
          <button class="btn bg-light" type="submit" value="Piękny ogród"><img src="/images/plant-bud.png" class="img-fluid"><p class="text-center font-weight-bold">Piękny ogród</p></button>
          
          </form>
        </div> 
        </div>
        </div>
        <div class="container mb-5 mt-5">
          <h1><p class="text-center font-weight-bold mb-5">Ogłoszenia promowane</p></h1>
          
          <div class="row">
          
          @if ($posts->count())
          @foreach ($posts as $post)
          
            <div class="col-md-3 mb-4">
          <a href="{{route('show', $post)}}">
              <div class="card">


            <div class="bg-image hover-overlay ripple p-2" data-mdb-ripple-color="light">

              <img
                src="{{ asset('images/' . $post->image) }}" class="card-img-top img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>

            </div>

            <div class="card-body">
              <h5 class="card-title">{{$post->tytul}}</h5>
              <p class="card-text">
                Od użytkownika: <a href="{{route('others', $post->user)}}" class="text-weight-bold"> {{$post->user->username}}</a><br>
                Dodano: {{$post->created_at->toDateString()}} <br>
                Lokalizacja: {{$post->lokalizacja}}

                <div class="d-flex justify-content-between">
                <p class = "font-weight-bold position-end mt-2">{{$post->cena}} </p> 
                
              @auth
                
                @if(!$post->favedBy(auth()->user()))
                <form action="{{route('favs', $post)}}" method="post">
                <input type="hidden">
              <button class="btn bg-light" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg> </button>
              @csrf
              </form>
              @else
              <form action="{{route('favs', $post)}}" method="post">
                <input type="hidden">
              <button class="btn bg-light" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>
               </button>
              @csrf
              @method('DELETE')
            </form>
              @endif
            @endauth
            @guest
                <a href="{{route('register')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg></a>
            @endguest

            </div>
            </div>
          </div>
        </div>
          @endforeach

          @else
          @endif
          </div>
        </div>

        <div class="container">
          {{$posts->appends(request()->input())->links()}}
        </div>
        
        
        <div class="container-fluid bg-primary mt-5 p-2">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
          </div>
            <div class="col-md-1 col-sm-4">
              <svg id="Capa_1" enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg"><g><path d="m30 330h91v167h-91z" fill="#fed843"/><path d="m271 300h91v197h-91z" fill="#fed843"/><path d="m151 240h90v257h-90z" fill="#ff641a"/><path d="m392 180h90v317h-90z" fill="#ff641a"/><path d="m76 330h45v167h-45z" fill="#fabe2c"/><path d="m196 240h45v257h-45z" fill="#f03800"/><path d="m316 300h46v197h-46z" fill="#fabe2c"/><path d="m437 180h45v317h-45z" fill="#f03800"/><path d="m392 0v30h68.789l-144.789 143.789-60-60-60-60-191.605 190.606 21.21 21.21 170.395-169.394 60 60 60 60 166-165v68.789h30v-120z" fill="#97de3d"/><path d="m482 51.211v68.789h30v-120h-120v30h68.789l-144.789 143.789-60-60v42.422l60 60z" fill="#59c36a"/><path d="m256 482h-256v30h256 256v-30z" fill="#2d5177"/><path d="m256 482h256v30h-256z" fill="#32405d"/></g></svg>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="d-flex justify-content-center mt-2"><p class="font-weight-bold">Wyróżnij się jako firma!<br>Poznaj ofertę OLX dla biznesu</p></div>
          
      </div>
          <div class="col-md-2 col-sm-4">
            <a href="https://biznes.olx.pl/" class="btn bg-light py-2 mt-2 ml-3 btn-outline-info">Zobacz szczegóły</a>
        </div>
        </div>
        </div>
        </div>
        
      
      <div class="container-fluid bg-info mb-5 p-2">
        <div class="container">
        <h1><p class="text-center font-weight-bold mt-5 mb-5">OLX</p></h1>
        <p class="text-center mt-5 mb-5">OLX.pl to darmowe ogłoszenia lokalne w kategoriach: Moda, Zwierzęta, Dla Dzieci, Sport i Hobby, Muzyka i Edukacja. Szybko znajdziesz tu ciekawe ogłoszenia i łatwo skontaktujesz się z ogłoszeniodawcą. Na OLX.pl czeka na Ciebie praca biurowa, mieszkania, pokoje, samochody. Jeśli chcesz coś sprzedać - w prosty sposób dodasz bezpłatne ogłoszenia. Chcesz coś kupić - tutaj znajdziesz ciekawe okazje, taniej niż w sklepie. Sprzedawaj po sąsiedzku na OLX.pl</p>
        <p class="text-center mt-5 mb-5">Dołącz do nas:</p>
        
        <div class="row mb-5">
        <div class="col-md-4 col-sm-12">
          </div>
        <div class="col-md-1 col-sm-3">
          <a href="https://www.facebook.com/olx.polska"><img src="/images/facebook.png" class="img-fluid"></a>
          </div>
        <div class="col-md-1 col-sm-3">
            <a href="https://www.instagram.com/olxpolska/"><img src="/images/instagram.png" class="img-fluid"></a>
            </div>
            <div class="col-md-1 col-sm-3">
              <a href="https://www.youtube.com/channel/UCGr18y85p6zXQwBev6CGwow"><img src="/images/youtube.png" class="img-fluid"></a>
              </div>
              <div class="col-md-1 col-sm-3">
                <a href="https://pl.linkedin.com/company/olxpraca"><img src="/images/linkedin.png" class="img-fluid"></a>
                </div>
          </div>
        <div class="col-md-4">
          </div>  
        </div>
      </div>

      <div class="container bg-light mb-5 p-2">
        <div class="row">
          <div class="col-md-1">
          </div>
        <div class="col-md-4">
        <img src="/images/document.png" alt=":(">
        
        <p class="font-weight-bold mt-4 ml-3">Kategorie główne: </p>
        <p class="ml-3">Motoryzacja, Nieruchomości, Praca, Dom i Ogród, Elektronika, Moda, Rolnictwo, Zwierzęta, Dla Dzieci, Sport i Hobby, Muzyka i Edukacja, Usługi i Firmy, Ślub i Wesele, Oddam za darmo, Zamienię</p>
        </div>
        <div class="col-md-2">
          </div>
        <div class="col-md-4">
          <img src="/images/search1.png" alt=":(">
          <p class="font-weight-bold mt-4 ml-3">Popularne wyszukiwania: </p>
          <p class="ml-3">Rower, Praca, Kamper, Mercedes, Zetor, Ursus, Switch, Przyczepa kempingowa, Psp, Wywrotka, Kosiarka traktorek, Yankee, Przyczepka, Gameboy, 3ds, Corolla, Minikoparka, Neocate junior, 4x4, Przyczepa</p>
          </div>
          <div class="col-md-1">
          </div>
          </div>
        </div>
        @endsection

       
