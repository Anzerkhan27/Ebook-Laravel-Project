@extends('layouts.app')



@section('title', 'Showing ' . $book->title)

{{--
* This template is adapted from a Bootsrap
* https://getbootstrap.com/
* Displays the Book details
--}}
@section('content')
<h2 class="text-center text-white  my-2">Book Details</h2>
<div class="container d-flex justify-content-center">


  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $book->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Written by {{ $book->author }}</h6>
      <p class="card-text">{{ $book->description }}</p>
    </div>
  </div>
</div>


@endsection