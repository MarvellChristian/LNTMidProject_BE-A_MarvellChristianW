@extends('layout/home')

@section('title', 'Add Book')

@section('content')
  <div class="create-main-cont">
    <img src="{{ asset('images/booksicon.png') }}" alt="books" class="booksicon float-end fade-in-fwd">
    <div class="container slide-in-elliptic-top-fwd">
      <div class="col-md-8 create-cont">
          <h1><i class="uil uil-plus-circle"></i> Add Book</h1>
          <p>Adding book to the collection</p>
          <hr>
          <form action="{{ url('books/create') }}" method="POST">
            @csrf
              <div class="mb-3">
                <label class="form-label">Book Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}">
                @error('author') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Total Page</label>
                <input type="number" class="form-control @error('page') is-invalid @enderror" name="page" value="{{ old('page') }}">
                @error('page') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Release Year</label>
                <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}">
                @error('year') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </div>
  </div>
@endsection