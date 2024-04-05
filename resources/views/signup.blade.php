@extends('layouts.forms')

@section('styles')
    <link rel="stylesheet" href="./css/signup.css" type="text/css"/>
@endsection

@section('container')
    <main class="signup-container">
        <h1>Sign Up</h1>
        <form action="/signup" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input
                    type="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="floatingInput"
                    placeholder="name@example.com"
                    required
                    value="{{ old('email') }}"
                />
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    id="floatingName"
                    placeholder="Name"
                    required
                    value="{{ old('name') }}"
                />
                <label for="floatingPassword">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input
                    type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    id="floatingPassword"
                    placeholder="Password"
                    required
                />
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-danger btn-md" type="submit">
                Sign Up
            </button>
        </form>
        <p>Or sign up with</p>
        <div class="signup-options">
            <a href="#"><x-ri-google-fill class="icon"/></a>
            <a href="#"><x-ri-facebook-fill class="icon"/></a>
            <a href="#"><x-ri-twitter-fill class="icon"/></a>
        </div>
        <p>Already have an account? <span><a href="/login">Login</a></span></p>
    </main>
@endsection