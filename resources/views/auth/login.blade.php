@extends('layouts.auth')

@section('title', 'Login')

@section('auth-content')
<div class="login-wrapper">
    <div class="login-box">
        <img src="{{ asset('images/logo-hkbp.png') }}" alt="HKBP Logo" class="login-logo">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <span class="input-icon"><i class="fas fa-user"></i></span>
                <input type="email" name="email" placeholder="Email" required autofocus>
            </div>

            <div class="input-group">
                <span class="input-icon"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</div>
@endsection
