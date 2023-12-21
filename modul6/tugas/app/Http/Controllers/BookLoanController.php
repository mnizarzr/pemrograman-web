<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookLoanRequest;
use App\Http\Requests\UpdateBookLoanRequest;
use App\Models\BookLoan;

class BookLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(BookLoan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookLoanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookLoan $bookLoan)
    {
        return response()->json($bookLoan->load('authors', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookLoanRequest $request, BookLoan $bookLoan)
    {
        return response()->json($bookLoan->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookLoan $bookLoan)
    {
        return response()->json($bookLoan->delete());
    }
}
