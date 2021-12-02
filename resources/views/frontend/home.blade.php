@extends('frontend.include.layouts')

@section('title')
    Home | Blog
@endsection

@section('welcome')
    <!-- Page header with logo and tagline-->
    <header class="py-4 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-4">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- Featured blog post-->
    <x-single-post title="This is first post">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</x-single-post>
    <x-single-post title="This is first post"></x-single-post>
    <x-single-post title="This is first post"></x-single-post>
    @include('frontend.include.pagination')
@endsection

@section('pagination')

@endsection
