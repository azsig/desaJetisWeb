@extends('template')

@section('title', 'Login')

<style>
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInLeft {
        from { transform: translateX(-20px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    /* Gradient Colors */
    .bg-gradient-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .bg-gradient-light-success {
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
    }

    /* Login Form Styles */
    .login-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 2rem;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        animation: fadeIn 0.8s ease-out;
    }

    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .login-header h2 {
        color: #0d5e1f;
        font-weight: bold;
    }

    .login-header .divider {
        width: 80px;
        height: 3px;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        margin: 0.5rem auto;
        border-radius: 3px;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #0d5e1f;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #1a9e3f;
        box-shadow: 0 0 0 3px rgba(26, 158, 63, 0.2);
        outline: none;
    }

    .btn-primary {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        width: 100%;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.2);
    }

    .remember-me {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .remember-me input {
        margin-right: 0.5rem;
    }

    .forgot-password {
        text-align: right;
        margin-bottom: 1.5rem;
    }

    .forgot-password a {
        color: #1a9e3f;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    .input-error {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .status-message {
        padding: 0.75rem;
        margin-bottom: 1.5rem;
        border-radius: 5px;
        background-color: rgba(13, 94, 31, 0.1);
        color: #0d5e1f;
        text-align: center;
    }
</style>

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <div class="login-container animate-slideInLeft">
                <!-- Session Status -->
                @if (session('status'))
                    <div class="status-message">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="login-header">
                    <h2>Login</h2>
                    <div class="divider"></div>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                        @if ($errors->has('email'))
                            <div class="input-error">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                        @if ($errors->has('password'))
                            <div class="input-error">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <!-- Remember Me -->
                    <div class="remember-me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="remember_me">Remember me</label>
                    </div>

                    <button type="submit" class="btn-primary">
                        Log in
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
