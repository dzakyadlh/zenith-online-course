@extends('layouts.forms')

@section('styles')
    <link rel="stylesheet" href="./css/login.css" type="text/css"/>
@endsection

@section('container')
    <main class="login-container">
        <h1>Login</h1>
        <div class="form-floating mb-3">
            <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
            />
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
            />
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-danger btn-md" type="submit">
            Login
        </button>
        <p>Or login with</p>
        <div class="login-options">
            <a href="#"><x-ri-google-fill class="icon"/></a>
            <a href="#"><x-ri-facebook-fill class="icon"/></a>
            <a href="#"><x-ri-twitter-fill class="icon"/></a>
        </div>
        <p>Haven't made an account? <span><a href="/signup">Sign Up</a></span></p>
    </main>
@endsection