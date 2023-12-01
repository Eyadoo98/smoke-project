@extends('layouts.app')
<style>


</style>
@section('content')
    <div class="container" style="">
        <div class="row justify-content-center" style="margin: auto">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="text-align: right;background-color: #efb448;color: white;">{{ __('تسجيل الدخول') }}</div>

                    <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
{{--                        <form method="get" action="{{ route('score-page') }}">--}}
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('الإيميل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('كلمة السر') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label" for="remember">
                                            {{ __('تذكرني') }}
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>


                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">


                                    @if (Route::has('password.request'))
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
                                        <a class="btn btn-link" href="{{ route('wizard-form') }}">
                                            {{ __('تسجيل حساب جديد؟') }}
                                        </a>
                                    @endif
                                        <button type="submit" class="btn btn-primary loginBtn" style="background-color: #efb448;border-color: #efb448">
                                            {{ __('تسجيل الدخول') }}
                                        </button>

                                </div>
                                <br>
{{--                                <a class="btn btn-link" href="{{ route('wizard-form') }}">--}}
{{--                                    {{ __('Register Now?') }}--}}
{{--                                </a>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
