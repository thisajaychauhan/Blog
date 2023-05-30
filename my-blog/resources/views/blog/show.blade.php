@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="card p-4">
                    <div class="mt-5">
                    <a href="/blog" class="btn btn-outline-primary btn-sm float-end">Go back</a>
                    <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                    <p>{!! $post->body !!}</p>

                    @dd($post->body)
                   </div>
                    
                   <div class="d-flex">
                    <div class="mx-1">
                        <a href="{{ route('blog.edit', ['blogPost' => $post]) }}" class="btn btn-outline-primary">Edit Post</a>
                    </div>
    
                    <div>
                        <form id="delete-frm" class="" action="{{ route('blog.destroy', ['blogPost' => $post]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete Post</button>
                        </form>
                    </div>
                   </div>
              </div>
            @endsection

                  
