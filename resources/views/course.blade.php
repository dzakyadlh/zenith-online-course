@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="https://source.unsplash.com/1200x400?{{ $course->category->name }}" alt="{{ $course->category->name }}" class="img-fluid my-3">
                <h1 class="mb-3">{{ $course->title }}</h1>
                <article class="my-3 fs-5">
                    {!! $course->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection