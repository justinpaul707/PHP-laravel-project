@extends('layout/base')

@section('head')
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('/asset/css/login.css') }}">
<style>

.signup-form{
  margin-top: 5%;
}
.signup-submit{
  display: block;
  margin: 0;

}

</style>


@endsection


@section('content')
<div class="form-signin ">
  <form class="mt-5" method="POST" action="{{ route('signup-store') }}">
    @csrf
    {{-- <img class="mb-4" src="" alt="" width="72" height="57"> --}}
    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
  
    <div class="form-floating">
      <input type="text" class="form-control" name="name" id="floatingInputname" placeholder="Name">
      <label for="floatingInputname">Name</label>
      @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="phone_no" id="floatingInputphonenumber" placeholder="Phone Number">
      <label for="floatingInputphonenumber">Phone Number</label>
      @if ($errors->has('phone_no'))
    <span class="text-danger">{{ $errors->first('phone_no') }}</span>
    @endif
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" name="gender" id="floatingInputphonenumber" placeholder="Gender">
        <label for="floatingInputphonenumber">Gender</label>
        @if ($errors->has('gender'))
      <span class="text-danger">{{ $errors->first('gender') }}</span>
      @endif
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="age" id="floatingInputphonenumber" placeholder="Age">
        <label for="floatingInputphonenumber">Age</label>
        @if ($errors->has('age'))
      <span class="text-danger">{{ $errors->first('age') }}</span>
      @endif
      </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInputemail" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
      @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-0" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @if ($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="confirm_password" id="floatingConfirmPassword" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
      @if ($errors->has('confirm_password'))
    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
    @endif
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <a href="{{ route('login') }}" class="btn btn-success signup-btn mt-4">Already have an Account</a>

  </form>
@endsection






    



