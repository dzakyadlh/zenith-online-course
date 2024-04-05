@extends('layouts.main')

@section('container')
  <h3 class="my-5 text-center fs-2">{{ $title }}</h3>
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/courses">
        @if (request('category'))
            <input type="hidden" name="category" value="request('category')">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search for a course..." name="search" value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  @if (count($courses))
  <p class="text-center fs-4">{{ $courses[0]->category->description }}</p>
  <div class="row">
    @foreach ($courses as $course)
      <a href="/courses/{{ $course->slug }}" class="text-decoration-none col mb-3">
        <div class="card mx-1" style="width: 18rem;">
          <img src="https://source.unsplash.com/500x500?{{ $course->category->name }}" class="card-img-top" alt="{{$title}}">
          <div class="card-body">
            <h5 class="card-title">{{ $course->title }}</h5>
            <p class="card-text">{{ $course->excerpt }}</p>
          </div>
        </div>
      </a>
    @endforeach
  </div>
  @else
      <p class="text-center fs-4">No course found.</p>
  @endif
  
  {{ $courses->links() }}

@endsection