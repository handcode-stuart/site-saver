@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <input type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        @if ($errors->has('email'))
                {{ $errors->first('email') }}
        @endif

        <input type="password" name="password" required>
        @if ($errors->has('password'))
            {{ $errors->first('password') }}
        @endif

        <input type="password" name="password_confirmation" required>
        <button type="submit">
            {{ __('Reset Password') }}
        </button>
    </form>
@endsection
