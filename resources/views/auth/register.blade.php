@extends('layouts.auth')

@section('title', 'Register')
@section('auth-title', 'Create Account')
@section('auth-subtitle', 'Get started with your new account')

@section('auth-content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    
    <div class="form-group">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required autofocus>
    </div>
    
    <div class="form-group">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    
    <div class="form-group">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
@endsection

@section('auth-footer')
Already have an account? <a href="{{ route('login') }}">Sign in</a>
@endsection