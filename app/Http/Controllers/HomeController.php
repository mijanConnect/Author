<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function home()
    {
        return view('frontend.home');
    }

    public function books()
    {
        return view('frontend.books');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function blog_details()
    {
        return view('frontend.blog-details');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function contact_us()
    {
        return view('frontend.contact-us');
    }

    public function single_book()
    {
        return view('frontend.single-book');
    }

    public function store()
    {
        return view('frontend.store');
    }
}
