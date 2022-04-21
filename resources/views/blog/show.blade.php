@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>
<h2 class="mt-6 text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">Comments</h2>
<div>
    <form action="/posts/{{ $post->id }}/comments" method="POST" class="mb-0">
        @csrf
        <label for="author" class="text-sm font-medium text-gray-700">Author</label>
        <input type="text" name="author" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" value="{{ old('author')}}" required>

        <label for="author" class="mt-6 block text-sm font-medium text-gray-700">Text</label>
        <textarea name="text" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" required>{{ old('text') }}</textarea>


        <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Post</button>
    </form>
</div>

@endsection 