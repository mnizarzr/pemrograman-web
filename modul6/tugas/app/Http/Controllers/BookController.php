<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Book::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();

        $book = Book::create([
            'title' => $validated['title'],
            'genre_id' => $validated['genre_id'],
        ]);

        if (isset($validated['author_id'])) {
            $book->authors()->attach($validated['author_id']);
        }

        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json($book->load('authors', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        return response()->json($book->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        return response()->json($book->delete());
    }
}
