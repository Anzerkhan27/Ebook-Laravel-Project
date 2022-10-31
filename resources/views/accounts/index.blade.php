@extends('layouts.app')

@section('content')


<div class="container">
   
<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center  h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">{{$user->username }}</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$user->email}}</p>
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div>
                    <p class="small text-muted mb-1  ">Books Added</p>
                    <p class="mb-0">{{$user->booksCreated->count() }}</p>
                  </div>
                 
                </div>
                <div class="d-flex pt-1">
                  <button type="button"  onclick="window.open('/books/create')"     class="btn btn-primary flex-grow-1">Add New Book</button>
                </div>
              </div>

  
            </div>
     
          </div>
         </div>
         @foreach($user->booksCreated as $book)

<ul class="list-group list-group-flush mx-5 mt-3">
  <li class="list-group-item"><a  class="link-dark" style="text-decoration: none;"  href="{{ route('books.show', $book->id) }}">{{ $book->title}}
  <p>{{ $book->author }}</p>  
  </li>

</ul>   

@endforeach
      </div>
    </div>
        
 


</div>
  




</section>





</div>
@endsection
