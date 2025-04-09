@extends('layouts.app')

@section('content')
<style>
    body {
        position: relative;
        background-image: url('/images/gambar12.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(91, 88, 88, 0.5); /* Overlay hitam transparan */
        z-index: 0;
    }

    .login-wrapper {
        position: relative;
        z-index: 1;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .login-title {
        color: #d3cccc;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        text-align: center;
    }

    .card.login-card {
        background-color: rgba(198, 193, 193, 0.9);
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        width: 100%;
        max-width: 500px;
    }

    .btn-primary {
        background-color: blue;
        border: none;
    }

    .btn-primary:hover {
        background-color: darkblue;
    }
</style>


<div class="login-wrapper">
    <div class="login-title">Masuk Sebagai Admin HKBP Sinambela Simanullang</div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card login-card">
                    <div class="card-body">
                        <!-- FORM LOGIN MULAI -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">Lupa Password?</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <!-- FORM LOGIN AKHIR -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
