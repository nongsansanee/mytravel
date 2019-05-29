@extends('layouts.app')
@section('title','MyTravel')
@section('content')

<br>
<!-- img src="{{ asset('storage/images/aaaa.jpg')}}" class="d-block w-100" alt="..."-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('storage/images/aaaa.jpg')}}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/images/bbbb.jpg')}}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/images/cccc.jpg')}}" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>

<form action="/2562">
  <div class="row">
    <div class="col">
      <input  id="fname" type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input id="lname" type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <br>
  <center>
  <button type="submit" class="btn btn-primary">SUBMIT</button>
  </center>
</form>

<br>

@endsection
@section('footer')
 
 contract to: aaaaa@hotmail.com
@endsection