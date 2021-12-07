@extends('layouts.app')

@section('content')
    

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="row mt-5 mb-5">
    <aside class="col-sm-4">
        </aside>
	<aside class="col-sm-4">
<div class="card">
    <article class="card-body">
        
        <a href="{{route('login')}}" class="float-right btn btn-outline-primary">Sign in</a>
        <h4 class="card-title mb-4 mt-1">Sign up</h4>
        
        <hr>
        <form action="{{route('register')}}" method="post">
        @csrf
            <div class="form-group">
                <input name="username" class="form-control @error('username') border border-danger @enderror" placeholder="Username" type="text" id="username" value="{{old('username')}}" >
            @error('username')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group">
            <input name="email" id="email" class="form-control @error('email') border border-danger @enderror" placeholder="Email" type="email" value="{{old('email')}}" >
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group">
            <input name="password" class="form-control @error('password') border border-danger @enderror" id="password" placeholder="******" type="password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div> <!-- form-group// -->      

        <div class="form-group">
            <input name="password_confirmation" class="form-control @error('password') border border-danger @enderror" placeholder="Repeat password" type="password">
        </div> <!-- form-group// -->                                
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    
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
    