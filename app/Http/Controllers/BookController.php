<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{

    /**
     * Check if the user is logged in except for index and show method
     * 
     */
    public function __construct()
    {

        $this->middleware('auth', array('except' => array('index', 'show')));
    }

    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('books.create');
    }


    /**
     * Display a listing of the books where title mathces the search word
     * This was adapted from a post from Kingcosult on Oct 12 2020 on Dev Community here:
     * https://dev.to/kingsconsult/how-to-implement-search-functionality-in-laravel-8-and-laravel-7-downwards-3g76
     * 
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

        $books = Book::where(
            [
                ['title', '!=', Null],
                [
                    function ($query) use ($request) {
                        if ($term = $request->term) {
                            $query->orWhere('title', 'LIKE', '%' . $term . '%')->get();
                        }
                    }
                ]
            ]
        )
            ->orderBy(
                "created_at",
                "desc"
            )
            ->paginate(
                50
            );

        return view(
            'books/index',
            [
                'books' => $books

            ]
        );
    }

    /**
     * Store a newly created book in storage.
     * This was adapted from a youtube tutorial by  Victor Gondalez on freeCodeCamp 
     * youtube channel here:
     * https://www.youtube.com/watch?v=ImtZ5yENzgE&amp;t=2635s
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


        $request->validate(
            [
                'title' => 'required',
                'author' => 'required',
                'description' => 'required',
            ]
        );

        auth()->user()->booksCreated()->create($request->all());

        $user = Auth::user();

        return redirect()->route('account.show', compact('user'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    public function show(Book $book)
    {

        return view(
            'books.show',
            compact('book')
        );
    }


    /**
     * Show the form for editing the specified book.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

    public function edit(Book $book)
    {

        return view(
            'books.edit',
            compact('book')
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Book $book)
    {

        $request->validate(
            [
                'title' => 'required',
                'author' => 'required',
                'description' => 'required',
            ]
        );



        $book->update($request->all());


        $user = Auth::user();

        return redirect()->route('account.show', compact('user'));
    }

    /**
     * Remove the specified book from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


    public function destroy(Book $book)
    {

        $book->delete();

        $user = Auth::user();
        return redirect()->route('account.show', compact('user'));
    }
}
