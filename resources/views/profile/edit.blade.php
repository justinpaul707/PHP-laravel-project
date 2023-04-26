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
                            </div>
                        </div>
                        <div class="card-body">
                            <form  method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <label for="floatingInputphonenumber">Email:</label>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <input type="text" class="form-control" name="email" value="{{$data['user']->email}}" id="floatingInputphonenumber" placeholder="Email">

                            <label for="floatingInputphonenumber">Phone:</label>
                            @if ($errors->has('phone_no'))
                            <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                            @endif
                            <input type="text" class="form-control" name="phone_no" value="{{$data['user_profile']->phone_no}}" id="floatingInputphonenumber" placeholder="Phone Number">

                            <label for="floatingInputphonenumber">Age:</label>
                            @if ($errors->has('age'))
                            <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                            <input type="text" class="form-control" name="age" value="{{$data['user_profile']->age}}" id="floatingInputphonenumber" placeholder="Age">
                            
                            <label for="floatingInputphonenumber">Gender:</label>
                            @if ($errors->has('gender'))
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                            <input type="text" class="form-control" name="gender" value="{{$data['user_profile']->gender}}" id="floatingInputphonenumber" placeholder="Gender">

                            <label for="floatingInputphonenumber">Profile Image:</label>
                            @if ($errors->has('profile_img'))
                            <span class="text-danger">{{ $errors->first('profile_img') }}</span>
                            @endif
                            <input type="file" class="form-control" name="profile_img" value="{{$data['user_profile']->image_url}}" id="floatingInputphonenumber" placeholder="Image">
                            <button class="mt-2 btn btn-lg btn-primary" type="submit">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            
            @endsection