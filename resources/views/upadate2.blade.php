@extends('layouts.app2')
@section('content2')
<form class="form-detail" action="/update" method="POST" enctype="multipart/form-data">
    @csrf
    		
    <h2>Edit Form</h2>
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif   
		
        
        <div class="form-row">
            <input type='hidden' name='id' value="{{$user['id']}}"> 
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" id="full-name" class="input-text" placeholder="Your First Name" value="{{$user['firstname']}}"required>
            <span>@error('firstname'){{$message}}@enderror</span>
		</div>
    
        <div class="form-row"> 
			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" id="full-name" class="input-text" placeholder="Your Last Name" value="{{$user['lastname']}}" >
            <span>@error('name'){{$message}}@enderror</span>
		</div><br>

        <div class="form-row"> 
			<label for="Address">Address</label>
			<input type="text" name="Address" id="full-name" class="input-text" placeholder="Your Address" value="{{$user['Address']}}">
            <span>@error('Address'){{$message}}@enderror</span>
		</div><br>
        
		<div class="form-row">
            <label for="image">Image</label>
            <input type="file" name="image">
        </div><br>
        
        <div class="form-row">
			<label for="email">Your Email</label>
			<input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="{{$user['email']}}">
            <i class="fas fa-envelope"></i>
            <span>@error('email'){{$message}}@enderror</span>
		</div>
        
		
        <div class="form-row-last">
			<input type="submit" name="action" class="register" value="update">
            <input type="submit" name="action" class="register" value="cancel"  style="text-align:center;">
            {{-- <button type="submit" name="register" class="register" style="padding:14px">Cancel</button>  --}}
        </div>
        
</form>
@endsection