<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    


public function __construct(){

    $this->middleware('auth', array('except' => array('index', 'show')));

}

 /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\Http\Response
     */


public function create(){

       return view('books.create');

     }


 /**
     * Display a listing of the books where title mathces search
     *
     * @return \Illuminate\Http\Response
     */



public function index(Request $request) {

        $books = Book::where([
          ['title', '!=', Null],
          [function($query) use ($request) {
               if($term = $request->term){
                $query->orWhere('title', 'LIKE', '%' . $term . '%')->get();
               }            
              }]                
        ])
         ->orderBy("created_at", "desc")
        ->paginate(50);

        return view('books/index', [
        
        'books' => $books
        
        ]);
        
        }

/**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request){


        $request->validate([

            'title' => 'required',
            
            'author' => 'required',

            'description'=> 'required',
            
            ]);
            
            auth()->user()->booksCreated()->create($request->all());
            
            $user = Auth::user();
           
            return redirect()->route('account.show',['user'=> $user])->with('success', 'Book updated successfully');
            
     }
     
 /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */



     public function show(Book $book) {

        return view('books.show', [
        
        'book' => $book
        
        ]);        
        }



 /**
     * Show the form for editing the specified book.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */




        public function edit(Book $book) {

            return view('books.edit', [
            
            'book' => $book
            
            ]);

}


/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


public function update(Request $request, Book $book) {

    $request->validate([
    
    'title' => 'required',
    
    'author' => 'required',
    
    'description'=> 'required',

    ]);
    
    
    
    $book->update($request->all());
    
    
    $user = Auth::user();

    return redirect()->route('account.show',['user'=> $user])->with('success', 'Book updated successfully');
    
    }

/**
     * Remove the specified book from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    public function destroy(Book $book) {

        $book->delete();
        
        $user = Auth::user();
        return redirect()->route('account.show',['user'=> $user])->with('success', 'Book updated successfully');
        
        } 






}