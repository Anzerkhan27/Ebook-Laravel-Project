@extends('layouts.app')



@section('title', 'Edit signing')



@section('content')

<form action="{{ route('books.update', $book->id) }}" method="POST">

@csrf

@method('PUT')



<div class="my-10">

<label for="title">title:</label>

<input type="text" name="title" id="title" value="{{ $book->title }}" class=" p-2 bg-gray-200 @error('title') is-invalid @enderror" />



@error('title')

<div class="alert alert-danger">{{ $message }}</div>

@enderror

</div>



<div class="my-10">

<label for="description">Comments:</label>

<textarea name="author" id="author" row="5" class=" p-2 bg-gray-200 @error('author') is-invalid @enderror"> {{ $book->author }}</textarea>



@error('author')

<div class="alert alert-danger">{{ $message }}</div>

@enderror

</div>


<div class="my-10">

<label for="description">Comments:</label>

<textarea name="description" id="description" row="5" class=" p-2 bg-gray-200 @error('description') is-invalid @enderror"> {{ $book->description }}</textarea>



@error('description')

<div class="alert alert-danger">{{ $message }}</div>

@enderror

</div>




<button type="submit" class="btn btn-blue">Update</button>

</form>

@endsection