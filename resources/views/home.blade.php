@extends('template')

@section('title', 'home')

@section('content')

<div class="container">
    <h1 class="p-md-4 text-center"
    style="font-family:'Arial'; font-size: 36px; border-bottom: 2px solid black">
    Books</h1>

<div class="row p-md-5">
    @foreach ($books_data as $books)
    <div class="col">
        {{-- <div class="row-3"> --}}
            <div class="d-flex justify-content-center">
                <div class="card">
                    <img src={{$books->books_image}} class="img-responsive image-resize" alt="">
                    <div class="card-body">
                        <h1 class="card-title text-center m-1" style="font-size: 20px; padding=3px; margin=5px">
                            {{ $books->books_name }}</h1>
                        <h3 class="card-title text-center m-1" style="font-size: 20px; padding=3px; margin=5px"> Price : Rp.
                            {{ $books->books_price }}</h3>
                        <p class="card-text" style="text-align: justify; font-size: 14px; padding-top: 10px">{{ $books->books_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
        @endforeach
</div>

</div>
@endsection
