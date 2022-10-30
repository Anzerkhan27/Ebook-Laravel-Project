@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->username }}</div>

                <div class="card-body d-flex justify-content-between">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/books/create">Add New Book</a>
                
                </div>
                 
            
            </div>
        </div>
    </div>
</div>
@endsection
