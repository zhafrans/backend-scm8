@extends('layouts.admin.login')

@section('content')
    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
        @csrf
        <span class="login100-form-logo">
            <i class="zmdi zmdi-flower"></i>
        </span>
        <span class="login100-form-title p-b-34 p-t-27">
            Log in
        </span>
        <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>

        </div>
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Enter confirm password">
            <input class="input100" type="password" name="password_confirmation" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>
        <div class="text-center p-t-90">
            <a class="txt1" href="#">
                Forgot Password?
            </a>
        </div>
    </form>    
@endsection
