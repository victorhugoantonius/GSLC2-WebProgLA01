<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {
        $books_data = Books::all();
        return view('home', compact('books_data'));
    }
}
