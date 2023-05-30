@extends('layouts.app')
@section('content')
    <div class="container d-flex">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-one">Our Blog</h1>
                    </div>
                  
                </div>
                @forelse ($posts as $post)
                <ol>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ol>
                @empty
                    <p class="text-warning">no blog posts available</p>
                @endforelse
            </div>
        </div>
        <div class="col-4 col-md-12 text-center">
            <p>Create new Post</p>
            <a href="/blog/create" class="btn btn-primary btn-sm">Add Post</a>
        </div>
    </div>
@endsection
