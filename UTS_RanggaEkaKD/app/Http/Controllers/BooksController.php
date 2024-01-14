<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Books::when($request->has('search'), function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->input('search') . '%');
        })->paginate(6);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|integer',
            'category' => 'required',
            'description' => 'required',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'cover_image' => 'required|image',
        ]);

        $data = $request->only(['title', 'author', 'publisher', 'year', 'category', 'description', 'stock', 'price','cover_image']);
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = 'post_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image_product'), $imageName);
            $data['cover_image'] = $imageName;
        }

        Books::create($data);

        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $books = Books::find($id);
        // dd($books);
        return view('books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $books = Books::find($id);
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Books::find($id);
    
        if ($book) {
            $book->update($request->all());
            return redirect()->route('books');
        }
    
        return redirect()->route('books')->with('error', 'Book not found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Books::find($id);

        if ($book) {
            $book->delete();
            return redirect()->route('books');
        }

        return redirect()->route('books')->with('error', 'Book not found');
    }
}
