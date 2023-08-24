@extends('layouts.main')


@section('container')
    <h1 class="mb-2">Post Category : </h1>
    <div class="container">
        <div class="row mb-3">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="$category->name">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-4 text-white" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                            {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p> --}}
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="text-decoration-none btn btn-primary px-3 py-2" href="/posts">Back to Posts</a>  
    </div>
    
@endsection
    
