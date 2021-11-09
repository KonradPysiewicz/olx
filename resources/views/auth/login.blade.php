@extends('layouts.app')

@section('content')
    


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="row mt-5 mb-5">
    <aside class="col-sm-4">
        </aside>
	<aside class="col-sm-4">
<div class="card">
    <article class="card-body">
        <a href="{{route('register')}}" class="float-right btn btn-outline-primary">Sign up</a>
        <h4 class="card-title mb-4 mt-1">Sign in</h4>
        
        <hr>
        @if(session('status'))
        <div class="alert alert-danger" role="alert">
        {{session('status')}}
        </div>
        @endif

        <form action="{{route('login')}}" method="post">
            @csrf

            <div class="form-group">
        <div class="form-group">
            <input name="email" class="form-control" placeholder="E-mail" type="email">
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group">
            <input name="password" class="form-control" placeholder="******" type="password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div> <!-- form-group// -->      
        <div class="form-group">
                               
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                </div> <!-- form-group// -->
            </div>
                                                       
        </div> <!-- .row// -->                                                                  
    </form>
    </article>
    </div> <!-- card.// -->
    </aside>
    <aside class="col-sm-4">
    </aside>
    </div>
</div>
@endsection
    