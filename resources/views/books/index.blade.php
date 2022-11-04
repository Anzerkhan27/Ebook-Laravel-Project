@extends('layouts.app')



@section('content')


@if ($message = Session::get('success'))

<div class="alert alert-success">

<p>{{ $message }}</p>

</div>

@endif

{{-- 
  This template is adapted from a post from Deyson on Free Boostrap snippets and examples here:
  https://www.bootdey.com/snippets/view/bs4-search-Bar
  --}}


<div class="row justify-content-center  mb-3">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm"  action="{{ route('books.index') }}" method="GET" role="search" >
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search  text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input    class="form-control  form-control-borderless" name="term" placeholder="Search books" id="term" >
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn  btn-success" type="submit" title="Search projects"  >Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>





@if($books->count() == 0)

<h1 class="text-white  text-center">There are 0 results for your search<h1>

@else








<div class="container"  >









@foreach ($books as $book)

   

<ul class="list-group list-group-light">
  <li class="list-group-item my-2  d-flex justify-content-between align-items-center">
    <div>
      <div class="fw-bold">{{$book->title}}</div>
      <div class="text-muted">Written by {{$book->author}}</div>
    </div>

    <div class="d-flex justify-content-between  align-items-center" >
    <a class="btn btn-outline-primary  " href="{{ route('books.show', $book->id) }}">Show</a>
    </div>
  </li>
</ul>


@endforeach



</div>


{{ $books->links() }}


@endif
@endsection

