@extends('layouts.auth')

@section('content')
<p class="login-box-msg">Sign in to start your session</p>

<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    </div>
</form>

<p class="mb-1">
    <a href="{{ route('password.request') }}">I forgot my password</a>
</p>
<p class="mb-0">
    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
</p>
@endsection