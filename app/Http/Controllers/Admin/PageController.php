<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('title')->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:pages|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
        ]);

        Page::create($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Puslapis sėkmingai sukurtas.');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:pages,slug,' . $page->id,
            'content' => 'required',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
        ]);

        $page->update($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Puslapis sėkmingai atnaujintas.');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Puslapis sėkmingai ištrintas.');
    }

    public function editInline($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.edit-inline', compact('page'));
    }

    public function updateInline(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        
        $validated = $request->validate([
            'content' => 'required',
        ]);

        $page->update($validated);

        return redirect()->back()->with('success', 'Puslapis sėkmingai atnaujintas.');
    }
}
