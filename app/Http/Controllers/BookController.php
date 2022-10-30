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












     public function create(){

       return view('books.create');

     }



     public function index() {

        $books = Book::orderBy('created_at', 'desc')
        
        ->paginate(20);
        
        
        
        return view('books/index', [
        
        'books' => $books
        
        ]);
        
        }









     public function store(Request $request){


        $request->validate([

            'title' => 'required',
            
            'author' => 'required',

            'description'=> 'required',
            
            ]);
            
            auth()->user()->booksCreated()->create($request->all());
            
         
           
            
            return redirect()->route('books.index')
    
            ->with('success', 'Book added successfully');
            
            
     }
     


     public function show(Book $book) {

        return view('books.show', [
        
        'book' => $book
        
        ]);
        
        }


        public function edit(Book $book) {

            return view('books.edit', [
            
            'book' => $book
            
            ]);

}

public function update(Request $request, Book $book) {

    $request->validate([
    
    'title' => 'required',
    
    'author' => 'required',
    
    'description'=> 'required',

    ]);
    
    
    
    $book->update($request->all());
    
    
    
    return redirect()->route('books.index')
    
    ->with('success', 'Book updated successfully');
    
    }

    public function destroy(Book $book) {

        $book->delete();
        
        
        
        return redirect()->route('books.index')
        
        ->with('success', 'Book deleted successfully');
        
        } 

}