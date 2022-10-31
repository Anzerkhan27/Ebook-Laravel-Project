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

<ul class="list-group list-group-flush mx-5">
  <li class="list-group-item"><a  class="link-dark" style="text-decoration: none;"  href="{{ route('books.show', $book->id) }}">{{ $book->title}}
  <p>{{ $book->author }}</p>  
  </li>

</ul>










<form action="{{ route('books.destroy', $book->id) }}" method="POST">

<a class="btn btn-outline-primary ms-5 mt-1" href="{{ route('books.show', $book->id) }}">Show</a>


@if(Auth::user() && Auth::user()->id === $book->user_id)

<a class="btn btn-outline-success mt-1 mx-1 " href="{{ route('books.edit', $book->id) }}">Edit</a>



@csrf

@method('DELETE')



<button type="submit" class="btn btn-outline-danger mt-1 mx-1">Delete</button>

</form>
@endif


</article>

@endforeach



{{ $books->links() }}

@endsection

