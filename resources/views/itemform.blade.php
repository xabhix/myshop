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
                <form method="POST" action="/itemadd" enctype="multipart/form-data">
                    @csrf
                    <h1>Add Items</h1>
                    <p class="text-muted"></p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg></span></div>
                    {{-- <input class="form-control" type="text" placeholder="Username">  --}}
                    
                        {{-- <label for="name">{{ __('Name') }}</label> --}}

                        
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="item" value="{{ old('item') }}" required autocomplete="name" placeholder="Your Item" autofocus>

                            @error('item')
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
                            <input id="email" type="number" class="form-control @error('email') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Price of Item" required>

                            @error('price')
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
                            <select id="category" class="form-control"  name="category" placeholder="category">
                               @foreach($category as $category) 
                                <option value="{{$category['name']}}">{{$category['name']}}</option>
                               @endforeach 
                            </select>

                            @error('Gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    </div>

                   

                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></span></div>
                            {{-- <input class="form-control" type="text" placeholder="Email"> --}}
                            {{-- <select id="Role" class="form-control"  name="role">
                                @foreach($users as $user)	
                                <option value="{{$user->role}}">{{$user->role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}


                    {{-- </div> --}} 

                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            
                        </svg>  <input type="file" name="image" id="image" placholder="Item image" required></span>
                            {{-- <input class="form-control" type="text" placeholder="Email"> --}}
                            {{-- <input type="file" name="image" id="image" placholder="Your image" required> --}}
                        </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


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