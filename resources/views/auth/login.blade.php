@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="tab-wrap shadow-lg">
                <!-- active tab on page load gets checked attribute -->
                <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
                <label for="tab1">Log In</label>

                <input type="radio" id="tab2" name="tabGroup1" class="tab">
                <label for="tab2">Sign Up</label>

                <div class="tab__content row m-0 ">
                    <div class="col-lg-6 mt-4 mb-4 pt-4 pb-4 text-center">
                        <h3 style="color: white;font-weight: bold;">Welcome to</h3>
                        <img src="{{ URL('diacare_logo/diacare_logo.png') }}" style="width: 130px" alt="">
                        <h2 style="color: white;font-weight: bold;"> DiaCare </h2>
                        <label class="form-label text-center" style="color: white;">Live Well, Manage Better</label>
                    </div>

                    <form class="col-lg-6 pt-5 pb-2 bg-light" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center">
                            <h4 style="color: rgba(90, 140, 228, 0.8);">Log In</h4>
                        </div>

                        <input id="email" type="email" placeholder="Username" class="form-control mt-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="password" placeholder="Password" type="password" class="form-control mt-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        <div class="pt-4 pb-4">
                            <div class="form-check col-lg-12" >
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary form-control" style="background-color: rgba(90, 140, 228, 0.8);">
                            {{ __('Login') }}
                        </button>

                        <div class="form-check col-lg-12 pt-4 text-end" >
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                    </form>

                </div>

                <div class="tab__content row m-0">
                    <form class="col-lg-6 pt-5 pb-2 bg-light" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center">
                            <h4 style="color: rgba(90, 140, 228, 0.8);">Sign Up</h4>
                        </div>

                        <input id="firstname" placeholder="Firstname" type="text" class="form-control mt-4 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="lastname" placeholder="Lastname" type="text" class="form-control mt-4 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="email" type="email" placeholder="Email" class="form-control mt-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="password" type="password" placeholder="Password" class="form-control mt-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control mt-4" name="password_confirmation" required autocomplete="new-password">
                                <button type="submit" class="btn btn-primary form-control mt-4 mb-4" style="background-color: rgba(90, 140, 228, 0.8);">
                                    {{ __('Register') }}
                                </button>
                    </form>
                    <div class="col-lg-6 mt-4 mb-4 pt-4 pb-4 text-center">
                        <h3 style="color: white;font-weight: bold;">Welcome to</h3>
                        <img src="{{ URL('diacare_logo/diacare_logo.png') }}" style="width: 130px" alt="">
                        <h2 style="color: white;font-weight: bold;"> DiaCare </h2>
                        <label class="form-label text-center" style="color: white;">Live Well, Manage Better</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
