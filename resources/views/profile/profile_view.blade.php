@extends('layout/base')
@include('layout.navbar')
@section('head')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<style>

</style>
@endsection


@section('content')

<div class="container mt-3">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
    
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
      </div>
    <div class="row">
        <div class="col-md-3">
            <img src="{{$data['user_profile']->image_url}}" class="img-thumbnail" alt="Profile Picture">
        </div>
        <div class="col-md-4">
            <h1>{{$data['user']->name}}</h1>
        </div>
        

    </div>

    <section class="mt-5">
        <div class="container">
           
                <div class="col-md-7">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10"> 
                                    Profile details
                                </div>
                                <div class="col-md-2">
                                    <a type="button" class="btn btn-primary" href="{{ route('edit-profile') }}">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Email: {{$data['user']->email}}</p>
                            <p>Phone: {{$data['user_profile']->phone_no}}</p>
                            <p>Age: {{$data['user_profile']->age}}</p>
                            <p>Gender: {{$data['user_profile']->gender}}</p>
                        </div>
                    </div>
                </div>
            
            @endsection