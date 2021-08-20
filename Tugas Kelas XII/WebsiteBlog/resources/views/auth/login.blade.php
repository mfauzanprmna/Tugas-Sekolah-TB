@extends('layouts.app')

@section('content')
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
<div class="col-lg-6">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}"" id=" exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                    id="exampleInputPassword" placeholder="Password" name="password" required
                    autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $mssage }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input"
                        id="customCheck {{ old('customCheck') ? 'checked' : '' }}">
                    <label class="custom-control-label" for="customCheck">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Login') }}
            </button>
        </form>
        <hr>
        <div class="text-center">
            @if (Route::has('password.request'))
            <a class="small" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
        <div class="text-center">
            @if (Route::has('register'))
                <a class="small" href="{{ route('register') }}">Create an Account!</a>
            @endif
        </div>
    </div>
</div>
@endsection
