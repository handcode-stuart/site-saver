@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @endif

        <input type="password" name="password" required>
        @if ($errors->has('password'))
                {{ $errors->first('password') }}
        @endif

        <div>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            {{ __('Remember Me') }}
        </div>

        <button type="submit">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection
