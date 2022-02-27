@extends('layout/home')

@section('title', 'Welcome to ReadRelay Library')

@section('content')
    {{-- Welcome Page --}}
    <div class="banner">
        <div class="welcome-text text-focus-in">
            <h2 >Welcome To</h2>
            <h1>ReadRelay Library</h1>
            <p>Access The Door To Knowledge</p>
        </div>
    </div>

    {{-- Collection --}}
    <div class="collection-display">
        <div class="collect-title text-center pt-5 pb-5" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <h1>Our Collections</h1>
            <hr class="our-collect-hr">
        </div>
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-md-4">
                        <div class="col-md-12 book-detail text-center" data-aos="flip-left" data-aos-duration="2000" data-aos-once="true">
                            <i class="uil uil-book-open fs-1"></i><hr class="hr-book-detail">
                            <h1 class="book-title">{{ $book->Title }}</h1>
                            <span class="book-author">{{ $book->Author }}</span><br>
                            <span class="book-pages">{{ $book->Pages }}</span><br>
                            <span class="book-year">{{ $book->Release_Year }}</span><br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection