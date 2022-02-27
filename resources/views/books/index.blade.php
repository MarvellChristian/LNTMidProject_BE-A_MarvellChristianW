@extends('layout/home')

@section('title', 'Manage Books')

@section('content')
    <div class="manage-main-cont">
        <div class="container manage-cont slide-in-elliptic-top-fwd">
            <div class="col-md-9">
              <h1>Manage Books</h1>
              <p>Add, edit, or delete books</p>
              <hr class="manage-hr">
              <a href="{{ url('books/create') }}" class="btn btn-dark btn-sm mb-3"><i class="uil uil-plus"></i> Add book</a>
              @if (session('success_status'))
                <div class="alert alert-success" role="alert">
                  {{ session('success_status') }}
                </div>
              @endif
              <table class="table table-striped table-hover books-table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Total Page</th>
                      <th>Release</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->Title }}</td>
                        <td>{{ $book->Author }}</td>
                        <td>{{ $book->Pages }}</td>
                        <td>{{ $book->Release_Year }}</td>
                        <td>
                          <a href="{{ url('books/' . $book->id) }}" class="text-primary"><i class="uil uil-edit"></i></a>
                          <a href="#" class="text-danger" onclick="event.preventDefault();document.getElementById('delete-form-{{ $book->id }}').submit();">
                            <i class="uil uil-trash-alt"></i>

                            <form id="delete-form-{{ $book->id }}" action="{{ url('books/' . $book->id) }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                            </form>
                          </a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection