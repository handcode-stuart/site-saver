@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            {{ $errors->first('name') }}
        @endif

        <input type="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @endif

        <input type="password" name="password" required>
        @if ($errors->has('password'))
                {{ $errors->first('password') }}
        @endif

        <input type="password" name="password_confirmation" required>

        <button type="submit">
            {{ __('Register') }}
        </button>
    </form>
@endsection
