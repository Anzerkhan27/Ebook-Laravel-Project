@extends('layouts.app')



@section('title', 'All of our Books')



@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

<p>{{ $message }}</p>

</div>

@endif

@foreach ($books as $book)

<article>

<h3><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></h3>



<p>{{ $book->author }}</p>



<form action="{{ route('books.destroy', $book->id) }}" method="POST">

<a class="btn btn-blue" href="{{ route('books.show', $book->id) }}">Show</a>


<a class="btn btn-blue" href="{{ route('books.edit', $book->id) }}">Edit</a>



@csrf

@method('DELETE')



<button type="submit" class="btn btn-red">Delete</button>

</form>



</article>

@endforeach



{{ $books->links() }}

@endsection

