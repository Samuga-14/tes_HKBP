@extends('layouts.auth')

@section('content')
<div class="login-wrapper">
    {{-- Logo HKBP Sinambela --}}
    <div class="text-center mb-4">
        <img src="{{ asset('images/hkbplogo.png') }}" alt="Logo HKBP Sinambela" style="max-height: 100px;">
    </div>

    <div class="card login-card border-0 shadow-none">
        <div class="card-body p-0">
            <!-- FORM LOGIN MULAI -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Ingat Saya</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Lupa Password?
                        </a>
                    @endif
                </div>
            </form>
            <!-- FORM LOGIN AKHIR -->
        </div>
    </div>
</div>
@endsection
