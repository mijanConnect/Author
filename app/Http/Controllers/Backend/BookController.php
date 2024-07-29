<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        
        return view('Backend.book.list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.book.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        try{
            $data = $request->all();

            $slug = Str::slug($request->title);
            $data['slug'] = $slug;
            $data['is_featured'] = $request->is_featured ? '1' : '0' ?? '0';
            
            $image_name = time().'.'.$data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('storage/uploads/book_images'), $image_name);
            $data['image'] = $image_name;
            
            if($request->hasFile('book_pdf'))
            {   
                $book_pdf = time().'.'.$data['book_pdf']->getClientOriginalExtension();
                $data['book_pdf']->move(public_path('storage/uploads/book_pdf'), $book_pdf);
                $data['book_pdf'] = $book_pdf;
            }

            Book::create($data);
            return redirect()->route('book.index');
        }
        catch(\Exception $e){            
            return redirect()->route('book.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);

        return view('Backend.book.add', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        try{
            $data = $request->all();
            if($request->hasFile('image')){
                $image_name = time().'.'.$data['image']->getClientOriginalExtension();
                $data['image']->move(public_path('storage/uploads/book_images'), $image_name);
                $data['image'] = $image_name;
            }

            if($request->hasFile('book_pdf'))
            {   
                $book_pdf = time().'.'.$data['book_pdf']->getClientOriginalExtension();
                $data['book_pdf']->move(public_path('storage/uploads/book_pdf'), $book_pdf);
                $data['book_pdf'] = $book_pdf;
            }

            $data['is_featured'] = $request->is_featured ? '1' : '0' ?? '0';
            $book->fill($data)->save();

            return redirect()->route('book.index');
        }
        catch(\Exception $e){
             return redirect()->route('book.index')->with("error", 'Something went wrong please try again.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}
