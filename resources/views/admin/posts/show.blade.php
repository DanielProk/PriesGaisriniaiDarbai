@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
                    <div class="space-x-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Redaguoti
                        </a>
                        <a href="{{ route('admin.posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Grįžti atgal
                        </a>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <div>
                            <span class="font-semibold">Kategorija:</span> 
                            {{ $post->category->name }}
                        </div>
                        <div>
                            <span class="font-semibold">Sukurta:</span> 
                            {{ $post->created_at->format('Y-m-d H:i') }}
                        </div>
                        <div>
                            <span class="font-semibold">Atnaujinta:</span> 
                            {{ $post->updated_at->format('Y-m-d H:i') }}
                        </div>
                        <div>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $post->is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $post->is_published ? 'Publikuota' : 'Juodraštis' }}
                            </span>
                        </div>
                    </div>
                </div>

                @if($post->image)
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="max-w-lg rounded-lg shadow-lg">
                    </div>
                @endif

                <div class="prose max-w-none">
                    {!! $post->content !!}
                </div>

                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Meta informacija</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600"><span class="font-semibold">URL slug:</span> {{ $post->slug }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600"><span class="font-semibold">ID:</span> {{ $post->id }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
