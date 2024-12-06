<!-- Login Start -->
@extends('frontend.layouts.main')
<link href="{{url('frontend/css/form.css')}}" rel="stylesheet">
@section('main-container')
<div id="form-container">
    <form action="/login" method="post">
        @csrf
        <div id="form-control">
            <label for="username-email">Username or Email</label>
            <input type="text" id="username-email" name="username-email" required>
        </div>
        <div id="form-control">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <!-- Log in button -->
        <button type="submit" id="submit-button">Log in</button>

        <!-- Register link -->
        <p>Don't have an account? <a href="{{route('register')}}}}" id="register-link">Register</a></p>
    </form>
</div>

<!-- Login End -->
@endsection