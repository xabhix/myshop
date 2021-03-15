@extends('layouts.app1')
@section('css')
flex-row align-items-center 
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card mx-4">
            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h1>Register</h1>
                    <p class="text-muted">Create your account</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span></div>
                   
                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></span></div>
                            {{-- <input class="form-control" type="text" placeholder="Email"> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></span></div>
                            {{-- <input class="form-control" type="text" placeholder="Email"> --}}
                            <input id="text" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" placeholder="Address" required>

                            @error('Address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></span></div>
                            {{-- <input class="form-control" type="text" placeholder="Email"> --}}
                            <select id="Gender" class="form-control"  name="Gender" placeholder="Gender">
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                            </select>

                            @error('Gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></span></div>
                            {{-- <input class="form-control" type="text" placeholder="Email"> --}}
                            <select id="role" class="form-control"  name="role" placeholder="Role">
                                @foreach($role as $role)    
                                 <option value="{{$role['role']}}">{{$role['role']}}</option>
                                @endforeach   
                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    </div>

                    

                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            
                        </svg>  <input type="file" name="image" id="image" placholder="Your image" required></span>
                        </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    </div>

                    





                    <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg></span></div>
                           

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
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
                        {{-- <input class="form-control" type="password" placeholder="Repeat password"> --}}
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" required autocomplete="new-password">
                    </div>
                    {{-- <button class="btn btn-block btn-success" type="button">Create Account</button> --}}
                    <button type="submit" class="btn btn-primary btn-block btn-success">
                        {{ __('Register') }}
                    </button>
                    </div>
                    <div class="card-footer p-4">
                    <div class="row">
                    <div class="col-6">
                    <button class="btn btn-block btn-facebook" type="button"><span>facebook</span></button>
                    </div>
                    <div class="col-6">
                    <button class="btn btn-block btn-twitter" type="button"><span>twitter</span></button>
                    </div>
                    </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    </div>
@endsection