@extends('layouts.app')

@section('content')
@if ($post->count())

    <div class="container">
        <div class="row">
            <div class="col-md-6">    
                <img
                src="{{ asset('images/' . $post->image) }}"
                class="img-fluid p-4"
              />
              
            </div>
            <div class="col-md-6 mt-4"> 
                <h1>{{$post->tytul}}</h1>
                <h2>{{$post->cena}} </h2>
                Od użytkownika: <a href="{{route('others', $post->user)}}" class="text-weight-bold"> {{$post->user->username}}</a> <br>
                email kontaktowy: {{$post->user->email}} <br>
                Lokalizacja: {{$post->lokalizacja}} <br>
                Kategoria: {{$post->kategoria}} <br>
                Dodano: {{$post->user->created_at->toDateString()}} <br>
                <br>
                Opis: <br>
                {{$post->opis}}
                </div>
        </div>
    </div>
                
          @else
          @endif

            
@endsection