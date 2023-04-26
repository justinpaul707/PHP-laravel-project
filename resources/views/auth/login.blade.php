@extends('layout/base')

@section('head')
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('/asset/css/login.css') }}">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
@endsection


@section('content')

<div class="form-signin ">
    <form class="mt-5" method="POST" action="{{ route('check-login') }}">
      @csrf
      {{-- <img class="mb-4" src="" alt="" width="72" height="57"> --}}
      <h1 class="h3 mb-3 fw-normal">Please Log in</h1>  
      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInputemail" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        @if ($errors->has('email'))
      <span class="text-danger">{{ $errors->first('email') }}</span>
      @endif
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingPasswordemail" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @if ($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
      @endif
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    </form>
    <hr/>
    
    <a href="{{ route('signup') }}" class="btn btn-success signup-btn ">Create  New Account</a>
  







    @endsection







    



