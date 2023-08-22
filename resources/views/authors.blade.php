@extends('layouts.main')


@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach ($authors as $author)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $author->slug }}" class="text-decoration-none">{{ $author->title }}</a>
            </h2>
            <p>By : <a href="/authors/{{ $author->user->id }}" class="text-decoration-none">{{ $author->user->name }}</a> in <a href="/categories/{{ $author->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $author->excerpt }}</p>
            <a href="/posts/{{ $author->slug }}" class="text-decoration-none">ReadMore ... </a>
        </article>
    @endforeach    
@endsection
    
