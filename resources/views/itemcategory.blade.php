@extends("layouts.app1")
@section('content')
<form action="/itemcategoryadd" method="Post">
    @csrf
  
<div class="row form-group">
    
    <div class="col-xs-4  d-flex justify-content-center">
        <div class="input-group ">
            <input class="form-control" type="text" name="category" placeholder="Item category" style="margin-left:456px">
            {{-- <input type="submit" name="submit" placeholder="Add Category"> --}}
            
        </div>
   </div> 
</div>

<div class="row form-group">
    <div class="col d-flex justify-content-center ">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</div>



</form>
{{-- <div class="input-group mb-3">
    <div class="input-group-prepend"><span class="input-group-text">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
        </svg></span></div>
        {{-- <input class="form-control" type="text" placeholder="Email"> --}}
        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


</div> --}} 
@endsection