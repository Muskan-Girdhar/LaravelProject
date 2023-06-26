@extends('Homeheader')
@section('content')
<div class="container ">

<form action="{{route('addpostpost')}}" method="POST"  class='ms-auto  me-auto' style='width:500px'>
    @csrf
    <h4>
        Addpost
</h4>
<hr>
@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
  <div class="mb-3">
    <label for="tittle" class="form-label">Tiitle</label>
    <input type="text" class="form-control btn btn-outline-info" name="tittle"  value="{{old('tittle')}}">
    
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control btn btn-outline-info" name="description"  value="{{old('description')}}" >
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Chhose file</label>
    <input type="file" class="form-control btn btn-outline-info" name="file"  value="{{old('file')}}" >
  </div>

  
<div class="col">
  <label class="form-check-label fs-5" for="coursetype">choose Category --
  </label><br>
  <input class="form-check-input" type="radio" name="coursetype"   value="dance" checked>Dance<br>

  <input class="form-check-input" type="radio" name="coursetype"   value="singing"> Singing</br>
  <input class="form-check-input" type="radio" name="coursetype"   value="publicSpeaking" checked>Public Speaking<br>
</div>





  <div class="col">
  <label class="form-check-label fs-5" for="postingtype"> Do  You Want to --
  </label><br>
  <input class="form-check-input" type="radio" name="postingtype" id="flexRadioDefault1"  value="post" checked> Post<br>

  <input class="form-check-input" type="radio" name="postingtype" id="flexRadioDefault2"  value="draft"> draft
   
</div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
