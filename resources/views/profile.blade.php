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
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                   <label >Name</label> 
                  <input type="text" class="form-control" id="company"  value="{{$user['name']}}" style="background-color: whitesmoke" readonly>
                    {{-- <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px ">{{$user['name']}}</div> --}}
                    
                </div>
            </div>
            <div class="col-sm-6">  
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="company"  value="{{$user['email']}}" style="background-color: whitesmoke" readonly>
                    
                </div>
            </div>      
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" id="company"  value="{{$user['Gender']}}" style="background-color: whitesmoke" readonly>
                    
                </div>
            </div> 
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="company"  value="{{$user['Address']}}" style="background-color:whitesmoke" readonly>
                    
                </div>
            </div>    
        </div>        
    </div>
    </div>




 @endsection   