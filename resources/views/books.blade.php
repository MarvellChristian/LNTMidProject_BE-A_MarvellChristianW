@extends('layout/home')

@section('title', 'Our Collections')

@section('content')
    <div class="all-book-maincont">
        <h1 class="all-books-title" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">All Books <i class="uil uil-books"></i></h1>
        <hr class="hr-all" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 book-detail-cont">
                    <div class="col-md-12 all-book-detail rounded-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-once="true">
                        <h1 class="all-book-title">{{ $book->Title }}</h1>
                        <span class="all-book-author badge bg-primary">{{ $book->Author }}</span><br>
                        <span class="all-book-pages">{{ $book->Pages }} Pages</span><br>
                        <span class="all-book-year">Release Year: {{ $book->Release_Year }}</span><br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection