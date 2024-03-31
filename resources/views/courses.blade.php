@extends('layouts.main')

@section('container')
  <h3>Courses</h3>
  <section class="d-flex my-4">
    @foreach ($courses as $course)
      <a href="/courses/{{ $course->slug }}" class="text-decoration-none">
        <div class="card mx-1" style="width: 18rem;">
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