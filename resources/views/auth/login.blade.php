@section('title') 
Login
@endsection
@extends('layouts.main')
@section('style')

@endsection
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">
    <!-- Start Container -->
    <div class="container">
        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">
                <!-- Start XP Auth Box -->
                <div class="xp-auth-box">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="index.html" class="xp-web-logo"><img src="{{asset('assets/images/logo.svg')}}" height="40" alt="logo"></a>
                            </h3>
                            <div class="p-3">

                            @if (Auth::check())
                                Je bent al ingelogd....wat doe je hier dan?
                            @else
    


                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">{{ __('auth.logintitle') }}</h4> 
                                    </div>                  
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="rememberme">
                                              <label class="custom-control-label" for="rememberme">{{ __('auth.remember') }}</label>
                                            </div>                                
                                        </div>                  
                                  <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">
                                    {{ __('auth.loginbtn') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('auth.forgot') }}
                                    </a>
                                @endif
                                </form>
                            </div>
                            @endif 
                        </div>
                    </div>

                </div>
                <!-- End XP Auth Box -->
            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->
@section('script')

@endsection 