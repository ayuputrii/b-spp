@extends('layouts.auth')
@section('title', 'Form-Login')
@section('content')

    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-12 logo-section">
          <a class="logo">
            <img src="{{ asset('tmp/assets/images/logo.svg') }}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body">
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                  <form method="POST" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group input-rounded">
                      <input type="text" class="form-control" name="username" placeholder="Username" />
                    </div>
                    <div class="form-group input-rounded">
                      <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                    <div class="form-inline">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="form-check-input" />Remember me <i class="input-frame"></i>
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Sign In
                    </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </button>
                  </form>
                <br/>
                <div class="signup-link">
                    <p>Dont have an account yet?</p>
                    <a href="/register">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
@endsection
