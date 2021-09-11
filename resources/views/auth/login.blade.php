@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="/img/massage.png" />
                <div class="card-title text-center font-weight-bold ">LOGIN</div>
                <form class="form-signin" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <span id="reauth-email" class="reauth-email"></span>
                        <label for="" class="form-label font-weight-bold @error('email') is-invalid @enderror">Email
                            :</label>
                        <input type="text" id="inputEmail" class="form-control form-control-lg"
                            placeholder=" Enter Email address" name="email" value="{{ old('email') }}" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="form-label font-weight-bold">Password :</div>
                        <input type="password" id="inputPassword"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            placeholder=" Enter Password" name="password" value="{{ old('password') }}">

                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{  $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group d-flex">
                        <div class="form-check pl-1" style="">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label font-weight-bold" for="remember"> Remember Me
                                &nbsp&nbsp&nbsp</label>
                        </div>
                        <div id="remember" class="checkbox pr-1">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password">
                                Forgot the password?
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="wrapper">
                        <span class="group-btn ">
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"> login</button>
                        </span>
                    </div>
                    <div class="form-group pl-4">
                        <a href="{{ route('register') }}" class="forgot-password">
                            Don't have an account, sign up
                        </a>
                    </div>
                </form><!-- /form -->

            </div><!-- /card-container -->
        </div>
    </div>
</div><!-- /container -->



@endsection