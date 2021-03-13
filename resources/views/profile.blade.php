@extends('layouts.app1')
@section('logout')
   href= "/logout"
@endsection

@section('editprofile')
   href= "{{"edit/".$user['id']}}"
@endsection

@section('additem')
   href="profile/itemform"
@endsection

@section('showitemtable')
   href="profile/itemtable"
@endsection

@section('itemcategory')
   href="profile/itemcategory"
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <strong>User Information ({{Auth::user()->role->role}})</strong>
    {{-- <example-component></example-component> --}}
    {{-- <my-component></my-component> --}}
    </div>
    <div class="card-body">
    <div class="form-group">
        <div><b>Name:</b> {{$user['name']}} </div>
        {{-- <input type="text" class="form-control" id="company" placeholder="Enter your company name"> --}}
        {{-- <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px ">{{$user['name']}}</div> --}}
        
    </div>
    <div class="form-group">
        <div><b>Email:</b></div><br>
        
        <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px ">{{$user['email']}}</div>
    </div>
    <div class="form-group">
        <div><b>Gender:</b></div><br>
        
        <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px ">{{$user['Gender']}}</div>
    </div>
    {{-- <div class="row">
    <div class="form-group col-sm-8">
        <div>Address:</div><br>
        
        <div style="border:1px;border-style:solid;border-radius:2px;padding:2px 5px "> Abhoshek Sharma</div>
    </div>
    <div class="form-group col-sm-4">
    <label for="postal-code">Postal Code</label>
    <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
    </div>
    </div> --}}
    
    <div class="form-group">
        <div><b>Address:</b></div><br>
        
        <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px ">{{$user['Address']}}</div>
    </div>
    </div>
    </div>




 @endsection   