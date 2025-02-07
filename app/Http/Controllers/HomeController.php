<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'home')->firstOrFail();
        return view('home', [
            'page' => $page
        ]);
    }

    public function fireblock()
    {
        $page = Page::where('slug', 'fireblock')->firstOrFail();
        return view('fireblock', [
            'page' => $page
        ]);
    }

    public function design()
    {
        $page = Page::where('slug', 'design')->firstOrFail();
        return view('design', [
            'page' => $page
        ]);
    }

    public function products()
    {
        $page = Page::where('slug', 'products')->firstOrFail();
        return view('products', [
            'page' => $page
        ]);
    }

    public function installation()
    {
        $page = Page::where('slug', 'installation')->firstOrFail();
        return view('installation', [
            'page' => $page
        ]);
    }

    public function painting()
    {
        $page = Page::where('slug', 'painting')->firstOrFail();
        return view('painting', [
            'page' => $page
        ]);
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->firstOrFail();
        return view('contact', [
            'page' => $page
        ]);
    }
}
