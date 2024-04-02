@extends('layouts.main')

@section('container')
  <h3>Courses</h3>
  <section class="row row-cols-4 row-gap-3">
    @foreach ($courses as $course)
      <a href="/courses/{{ $course->slug }}" class="text-decoration-none col">
        <div class="card mx-1" style="width: 18rem; height: 380px">
          <img src="{{ $course->thumbnail }}" class="card-img-top" alt="{{$title}}">
          <div class="card-body">
            <h5 class="card-title">{{ $course->title }}</h5>
            <p class="card-text">{{ $course->excerpt }}</p>
          </div>
        </div>
      </a>
    @endforeach
  </section>
@endsection