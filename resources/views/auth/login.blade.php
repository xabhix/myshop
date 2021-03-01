@extends('layouts.app1')
@section('css')
flex-row align-items-center
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span></div>
                        {{-- <input class="form-control" type="text" placeholder="Email" name="email"> --}}
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group mb-4">
                        <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg></span></div>
                        {{-- <input class="form-control" type="password" placeholder="Password"> --}}
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row">
                        <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Login</button>
                        </div>
                        <div class="col-6 text-right">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                    <div>
                    <h2>Sign up</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection