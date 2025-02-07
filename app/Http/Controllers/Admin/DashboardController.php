<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'categories_count' => Category::count(),
            'posts_count' => Post::count(),
            'recent_posts' => Post::latest()->take(5)->get()
        ];

        return view('admin.dashboard', $stats);
    }
}
