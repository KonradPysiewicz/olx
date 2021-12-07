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
            Od użytkownika: <a href="{{route('others', $post->user)}}" class="text-weight-bold"> {{$post->user->username}}</a> <br>
            Dodano: {{$post->user->created_at->toDateString()}} <br>
            Lokalizacja: {{$post->lokalizacja}}

            <div class="d-flex justify-content-between">
              
              
            <p class = "font-weight-bold position-end mt-2">{{$post->cena}} </p> 

          
            
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
      </div>
      <div class="d-flex justify-content-center">
        <form action="{{route('delete', $post)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger top-static mr-2">Usuń</button>
          </form>


          <a href="{{ route('edit_post', $post) }}" class="btn btn-success ml-2">Edytuj</a>

    </div>
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
        {{$posts->links()}}
      </div>
@endsection