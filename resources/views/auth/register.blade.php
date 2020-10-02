@extends('layouts.auth')
@section('text', 'Form Register')
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
                    <form method="POST" action="/register">
                    {{ csrf_field() }}
                        <div class="form-group has-feedback">Nama Petugas
                            <input type="text" placeholder="Nama Petugas" class="form-control form-control-rounded" name="nama_petugas" autocomplete="off" required>
                        </div>
                        <div class="form-group has-feedback"> Email
                            <input type="text" placeholder="Email" class="form-control form-control-rounded" name="email" autocomplete="off" required>
                        </div>
                        <div class="form-group has-feedback"> Username
                            <input type="text" placeholder="Username" class="form-control form-control-rounded" name="username" autocomplete="off" required>
                        </div>
                        <div class="form-group has-feedback"> Password
                            <input type="password" placeholder="Password" class="form-control form-control-rounded" name="password" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="level" value="petugas" hidden>
                            <input type="text" name="status" value="disable" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary"> Sign Up
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </button>
                    </form>
                <br/>
                <div class="sigin-link">
                    <p>You Have Account?</p>
                    <a href="/login">Sign In</a>
                </div>
                </div>
            </div>
		  </div>
        </div>
    </div>
@endsection
