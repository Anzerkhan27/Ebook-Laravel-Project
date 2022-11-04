@extends('layouts.app')



@section('author', 'New signing')



@section('content')


<div class="container">
    <div class=" text-center mt-5 ">
        <h1 class="text-white">Add a New Book</h1>
    </div>
    {{--
* This template is adapted from a Bootsrap
* https://getbootstrap.com/
* Displays the form which allows user to create a new Book
--}}
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">
                        <form action="{{ route('books.store') }}" method="POST">

                            @csrf

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">title:</label>
                                            <input class="form-control" type="text" name="title" id="title"
                                                class=" p-2 bg-gray-200 @error('title') is-invalid @enderror" />

                                            @error('title')

                                            <div class="alert alert-danger">{{ $message }}</div>

                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="author">Author:</label>
                                            <input class="form-control" type="text" name="author" id="author"
                                                class=" p-2 bg-gray-200 @error('author') is-invalid @enderror"></input>
                                            @error('author')

                                            <div class="alert alert-danger">{{ $message }}</div>

                                            @enderror

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description:</label>

                                            <textarea class="form-control" name="description" id="description" row="5"
                                                class=" p-2 bg-gray-200 @error('description') is-invalid @enderror"></textarea>

                                            @error('description')

                                            <div class="alert alert-danger">{{ $message }}</div>

                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-12">

                                        <button type="submit" class="btn btn-success">Create</button>

                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @endsection