@extends('layouts.app')



@section('title', 'Showing ' . $book->title)



@section('content')

<div class="container d-flex justify-content-center">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $book->title }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
    <p class="card-text">{{ $book->description }}</p>
  </div>
</div>
</div>


@endsection