<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function showAllBook(){
        $books = Book::all();
        return view('books/index', compact('books'));
    }

    public function create(){
        return view('books/create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'page' => 'required|integer|min:1',
            'year' => 'required|integer|min:2000|max:2021',
        ]);
        
        Book::create([
            'Title' => $request->title,
            'Author' => $request->author,
            'Pages' => $request->page,
            'Release_Year' => $request->year,
        ]);
        return redirect('/books/manage')->with('success_status', 'Book added successfuly');
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books/edit', compact('book'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'page' => 'required|integer|min:1',
            'year' => 'required|integer|min:2000|max:2021',
        ]);
        $book = Book::findOrFail($id);
        $book->update([
            'Title' => $request->title,
            'Author' => $request->author,
            'Pages' => $request->page,
            'Release_Year' => $request->year,
        ]);
        return redirect('/books/manage')->with('success_status', 'Book updated successfuly ');
    }

    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books/manage')->with('success_status', 'Book deleted successfuly ');
    }
}
