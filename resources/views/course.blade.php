@extends('layouts.main')

@section('container')
    <h3>{{ $course['title'] }}</h3>
    <p>{{ $course['desc'] }}</p>
@endsection