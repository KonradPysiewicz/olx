@extends('layouts.app')

@section('content')
<div class="container">
<ul class="nav nav-tabs">
    <li class="nav-item m-3">
      <a class="nav-link"  href="{{route('offers')}}" >Oferty</a>
    </li>
    <li class="nav-item m-3">
      <a class="nav-link" href="{{route('favourite')}}" >Ulubione oferty</a>
    </li>
  </ul>

  <div class="row mt-3 mb-3">
          
    
    @if ($favs->count())
    @foreach ($favs as $fav)
    @foreach ($fav->posts as $post)
    

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
          Od użytkownika: <a href="{{route('others', $post->user)}}" class="text-weight-bold"> {{$post->user->username}}</a> <br>
          Dodano: {{$post->user->created_at->toDateString()}} <br>
          Lokalizacja: {{$post->lokalizacja}}

          <div class="d-flex justify-content-between">
          <p class = "font-weight-bold position-end mt-2">{{$post->cena}} </p> 
  



          
        @if($post->favedBy(auth()->user()))

        
        <a href="{{route('redirect', $post)}}">
          <input type="hidden">
        <button class="btn bg-light" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
        </svg>
         </button>
        </a>

        @else
        @endif

      </div>
      </div>
    </div>
  </div>
    @endforeach
    @endforeach
    @else
    @endif
    </div>
</div>

<div class='container'>
  {{$favs->links()}}
</div>


@endsection