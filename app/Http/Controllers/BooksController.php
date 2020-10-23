<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {

        return Book::all();
    }

    public function show($id)
    {
        $books = Book::find($id);
        if ($books) {
            return response()->json([
                'massage' => 'Book has been found',
                'data' => $books
            ], 200);
        } else {
            return response()->json([
                'massage' => 'Book not found'
            ], 404);
        }
    }
}
