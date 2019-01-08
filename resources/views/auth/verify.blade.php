@extends('layouts.app')

@section('content')
{{ __('Verify Your Email Address') }}

@if (session('resent'))
    {{ __('A fresh verification link has been sent to your email address.') }}
@endif

{{ __('Before proceeding, please check your email for a verification link.') }}
{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
@endsection
