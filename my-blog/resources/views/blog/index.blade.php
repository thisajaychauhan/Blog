@extends('layouts.app')
@section('content')
    <div class="container d-flex">
        <div class="row mx-auto">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-one">Our Blog</h1>
                    </div>

                </div>
                @php
                    $a = 1;
                @endphp
                @forelse ($posts as $post)
                   <div class="card p-1 mb-1">
                       <h6>{{ $a }}.  <a href="./blog/{{ $post->id }}" class="text-decoration-none text-dark">{{ ucfirst($post->title) }}</a></h6>
                   </div>
                    @php
                    $a++;
                    @endphp
                @empty
                    <div class="text-center mt-5">
                        <h4 class="text-warning">No blog posts available</h4>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="col-3 text-center mt-5">
            <p>Create new Post</p>
            <a href="/blog/create" class="btn btn-primary btn-sm">Add Post</a>
        </div>
    </div>
@endsection
