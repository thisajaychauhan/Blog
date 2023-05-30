@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">

                <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                   <div class="d-flex justify-content-between align-item-center justify-content-center">
                    <div>
                        <h1 class="display-4">Edit Post</h1>
                    </div>
                    <div>
                        <a href="{{ route('blog.show', ['blogPost' => $post]) }}"
                            class="btn btn-outline-primary btn-sm float-end">Go back</a>
                    </div>
                   </div>
                    <form action="{{ route('blog.update', ['blogPost' => $post]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card p-3">
                            <div class="row">
                                <div class="control-group col-12">
                                    <label for="title">Post Title</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                        value="{{ $post->title }}" required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body">Post Body</label>
                                    <textarea id="body" class="form-control" name="body" rows="5" required>{{ $post->body }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id="btn-submit" class="btn btn-primary float-start">
                                        Update Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
