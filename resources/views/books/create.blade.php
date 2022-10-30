@extends('layouts.app')



@section('author', 'New signing')



@section('content')

<form action="{{ route('books.store') }}" method="POST">

@csrf



<div class=" my-10">

<label for="title">Title:</label>

<input type="text" name="title" id="title" class=" p-2 bg-gray-200 @error('title') is-invalid @enderror" />



@error('title')

<div class="alert alert-danger">{{ $message }}</div>

@enderror

</div>


<div class=" my-10">

<label for="author">Author:</label>

<input type="text" name="author" id="author" class=" p-2 bg-gray-200 @error('author') is-invalid @enderror" />



@error('author')

<div class="alert alert-danger">{{ $message }}</div>

@enderror

</div>




<div class=" my-10">

<label for="description">Description:</label>

<textarea name="description" id="description" row="5" class=" p-2 bg-gray-200 @error('description') is-invalid @enderror"></textarea>



@error('description')

<div class="alert alert-danger">{{ $message }}</div>

@enderror

</div>



<button type="submit" class="btn btn-blue">Create</button>

</form>

@endsection


