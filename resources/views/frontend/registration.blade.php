<!-- Registration Start -->
@extends('frontend.layouts.main')
<link href="{{url('frontend/css/form.css')}}" rel="stylesheet">
@section('main-container')
<div id="form-container">
    <form action="/registration" method="post">
        @csrf
        <div id="form-control">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div id="form-control">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div id="form-control">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div id="form-control">
            <label for="confirm-passwrod">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <button type="submit" id="submit-button">Register</button>

        <p>Already have an account? <a href="{{route('login')}}" id="login-link">Log in</a></p>
    </form>
</div>

<!-- Registration End -->
@endsection