@extends('Homeheader')
@section('content')
<div class="container customlogin">
<form action="{{route('loginpost')}}" method="POST"  class='ms-auto mt-auto me-auto' style='width:500px'>
    @csrf
    <h4>
        Login Here
</h4>
<hr>
<!-- @if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif -->
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control btn btn-outline-info" name="email"  value="{{old('email')}}">
    <spam class="text-danger">@error ('email') {{$message}}@enderror</spam>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control btn btn-outline-info" name="password"  value="{{old('password')}}" >
    <spam class="text-danger">@error ('password') {{$message}}@enderror</spam>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
