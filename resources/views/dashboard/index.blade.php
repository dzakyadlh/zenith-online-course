@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    
</div>

<div class="d-flex align-items-end gap-3">
  <i class="bi-graph-up-arrow fs-3"></i>
  <h5>Continue your progress</h5>
</div>
<div class="row row-cols-auto g-2 px-2 my-2 justify-content-start">
  {{-- @foreach ($courses as $course)
    <a href="/courses/{{ $course->slug }}" class="text-decoration-none col mb-3">
      <div class="card mx-1" style="width: 18rem;">
        <img src="https://source.unsplash.com/500x500?{{ $course->category->name }}" class="card-img-top" alt="{{$title}}">
        <div class="card-body">
          <h5 class="card-title">{{ $course->title }}</h5>
          <p class="card-text">{{ $course->excerpt }}</p>
        </div>
      </div>
    </a>
  @endforeach --}}
  @for ($i = 0; $i < 3; $i++)
  <a href="#" class="text-decoration-none col mb-3">
    <div class="card mx-1" style="width: 18rem;">
      <img src="https://source.unsplash.com/500x500?study" class="card-img-top" style="height: 200px; object-fit:cover" alt="study">
      <div class="card-body">
        <h5 class="card-title">Lorem Ipsum</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </a>
  @endfor
</div>

<div class="d-flex align-items-end gap-3">
  <i class="bi-alarm align-middle fs-3"></i>
  <h5>Deadlines</h5>
</div>
<div class="table-responsive medium">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Assignment</th>
        <th scope="col">Assigned By</th>
        <th scope="col">Time Left</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1,001</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
      </tr>
      <tr>
        <td>1,002</td>
        <td>placeholder</td>
        <td>irrelevant</td>
        <td>visual</td>
      </tr>
      <tr>
        <td>1,003</td>
        <td>data</td>
        <td>rich</td>
        <td>dashboard</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection