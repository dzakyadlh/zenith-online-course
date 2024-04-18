@extends('layouts.main')

@section('container')
  <h1>Home</h1>
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Admin</strong>
      <small>Today</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Checkout some of this week's offers!
    </div>
  </div>
@endsection