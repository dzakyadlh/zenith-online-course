@extends('layouts.main')

@section('container')
  <h3 class="my-3">{{ $title }}</h3>
  @if (count($courses))
  <p>{{ $courses[0]->category->description }}</p>
    <section class="row">
      @foreach ($courses as $course)
        <a href="/courses/{{ $course->slug }}" class="text-decoration-none col mb-3">
          <div class="card mx-1" style="width: 18rem; height: 380px">
            <img src="https://api.unsplash.com/photos/random" class="card-img-top" alt="{{$title}}">
            <div class="card-body">
              <h5 class="card-title">{{ $course->title }}</h5>
              <p class="card-text">{{ $course->excerpt }}</p>
            </div>
          </div>
        </a>
      @endforeach
    </section>
  @else
      <p class="text-center fs-4">No course found.</p>
  @endif
  
@endsection