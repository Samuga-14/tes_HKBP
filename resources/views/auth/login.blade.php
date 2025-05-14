@extends('layouts.auth')

@section('title', 'Login')
@section('auth-title', 'LOGIN')

@section('auth-content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required autofocus>
    </div>

    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center;">
            <input type="checkbox" id="remember" name="remember" style="margin-right: 8px;">
            <label for="remember" style="font-size: 13px;">Remember me</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 8px;">LOGIN</button>
</form>
@endsection
