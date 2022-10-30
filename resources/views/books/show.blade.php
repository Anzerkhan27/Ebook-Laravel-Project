@extends('layouts.app')



@section('title', 'Showing ' . $book->title)



@section('content')

<p>{{ $book->description }}</p>

@endsection