<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

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
                'massage' => 'Show book by id',
                'data' => $books
            ], 200);
        } else {
            return response()->json([
                'massage' => 'Book not found'
            ], 404);
        }
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);
        $book = Book::create(
            $request->only([
                'title',
                'description',
                'author'
            ])
        );
        return response()->json([
            'created' => true,
            'data' => $book
        ], 201);
    }
    public function update(Request $request, $id)
    {
        try {
            $book = Book::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'book not found'
            ], 404);
        }
        $book->fill(
            $request->only([
                'title',
                'description',
                'author'
            ])
        );
        $book->save();
        return response()->json([
            'updated' => true,
            'data' => $book
        ], 200);
    }
    public function destroy($id)
    {
        try {
            $book = Book::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'book not found'
                ]
            ], 404);
        }

        $book->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
}
