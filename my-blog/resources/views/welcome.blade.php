@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>click below to enter the blog section</p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Blogs</a>
            </div>
        </div>
    </div>
@endsection
