@extends('layouts.app')




@section('content')


<div class="container">
    

	<div class="row justify-content-center">
        <div class="div col-12 col-md-10 col-lg-8  text-center text-white mt-2 mb-5"><h1>Welcome to EBOOK<h1></div>
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm"  action="{{ route('books.index') }}" method="GET" role="search" >
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input    class="form-control form-control-lg form-control-borderless" name="term" placeholder="Search books" id="term" >
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-warning" type="submit" title="Search projects"  >Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>




@endsection
