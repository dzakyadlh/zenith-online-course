@extends('layouts.forms')

@section('container')
    <main class="signup-container">
        <h1>Sign Up</h1>
        <div class="form-floating mb-3">
            <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
            />
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
            />
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Repeat Password"
            />
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-danger btn-md" type="submit">
            Sign Up
        </button>
        <p>Or sign up with</p>
        <div class="signup-options">
            <a href="#"><x-ri-google-fill class="icon"/></a>
            <a href="#"><x-ri-facebook-fill class="icon"/></a>
            <a href="#"><x-ri-twitter-fill class="icon"/></a>
        </div>
        <p>Already have an account? <span><a href="/login">Login</a></span></p>
    </main>
@endsection