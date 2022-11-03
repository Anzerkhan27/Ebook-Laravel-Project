@extends('layouts.app')

@section('content')


<div class="container">
   


<section class="vh-100" >
<h1 class="text-white text-center">My Account</h1>  
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center  h-100">   
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
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
                  <button type="button"  onclick="window.open('/books/create')"     class="btn btn-success flex-grow-1">Add New Book</button>
                </div>
              </div>

  
            </div>
     
          </div>
         </div>
         

  @if($user->booksCreated->count() == 0 )





  <h2 class="text-center text-white my-4" >No books Added</h2>
  </div>
    </div>
        
 


</div>
  




</section>





</div>

  
  
  @else

  <h2 class="text-center text-white my-3" >Books Added</h2>
  <table class="table table-bordered my-3 table-light table-hover ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr >
    @foreach($user->booksCreated as $book)    
  
      <th scope="row">1</th>
      <td>{{$book->title}}</td>
      <td></a>{{$book->author}}</td>
      <td> 
      <div class="d-flex justify-content-around  align-items-center" >  
      <div>
      <a class="btn btn-primary  " href="{{ route('books.show', $book->id) }}">Show</a>
      </div>
      <div>
      <a class="btn btn-success "   href="{{ route('books.edit', $book->id) }}">Edit</a>
      </div>
      <div>
      <form action="{{ route('books.destroy', $book->id) }}" method="POST">  
       @csrf

       @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>

      </form>
      </div>
      </div>
      </td>
    </tr>
  
@endforeach  
  </tbody>
</table>  

      </div>
    </div>
        
 


</div>
  




</section>





</div>
@endif
@endsection
