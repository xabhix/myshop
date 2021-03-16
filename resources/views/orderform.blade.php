@extends('layouts.app1')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/orderaction" method="">
  @csrf  
  <input type="hidden" name="item_id" value="{{$item_id}}">
<div class="card">
  <div class="card-header">
    <strong>Step1:Order Form</strong>
    
    </div>
    <div class="card-body">
    <div class="row"> 
      <div class="form-group col-sm-8">
          {{-- <div><b>Name:</b> </div> --}}
          <label for="name">Name</label>
          <input type="text" class="form-control" id="company" name="name" placeholder=" your  name" value="{{Auth::user()->name}}"> 
          {{-- <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px "></div>  --}}
          
      </div>
      <div class="form-group col-sm-4">
        {{-- <div><b>Name:</b> </div> --}}
        <label for="name">Mobile Number</label>
        <input type="tel" class="form-control" id="Mobile-Number" name="name" placeholder="Your Number" > 
        {{-- <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px "></div>  --}}
        
      </div>
    </div> 

    

    <div class="row">
        <div class="form-group col-sm-8" style="margin-top:31px">
        
            <select  class="select2 form-control"  name="city" style="margin-top:-2px">
              <option>Your City</option>
              <option value="AL">Jaipur</option>
              <option value="Am">Kota</option>
              <option value="An">Udipur</option>
              <option value="Ak">Ajmer</option>
              <option value="WY">Mount Abu</option>
            </select>
        </div>
       
  
        <div class="form-group col-sm-4">
            <label for="postal-code">Postal Code</label>
            <input class="form-control" id="postal-code" type="text" name="postal_code"  required>
        </div>
    </div>




    
    
    <div class="form-group">
        {{-- <div><b>Address:</b></div><br> --}}
        
        <label for="comment">Address:</label>
        <textarea class="form-control" rows="5" id="comment" name="Address" required></textarea>
        {{-- <div style="border:1px;border-style:solid;border-radius:3px;padding:2px 5px "></div> --}}
    </div>
    {{-- <div class="form-group">
       <input type="submit">
    </div> --}}
 </div>
</div>

<!----------------------Step2---------------------------------------->


<div class="card">
    <div class="card-header">
        <strong>Step2: Payment Mode</strong>
        
    </div>
        <div class="card-body">
        <div class="form-group">
            
            <div class="form-check-inline">
               

            <div class="form-check form-group">
              <input class="form-check-input" type="radio" name="payment_mode" id="flexRadioDefault1" value="1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Online payment
                </label>
            </div>
            <div class="form-check form-group">
              <input class="form-check-input" type="radio" name="payment_mode" id="flexRadioDefault1" value="2">
                <label class="form-check-label" for="flexRadioDefault1">
                  Cash On Delivery
                </label>
            </div>
        </div>
            <div class="form-check form-group input-group">
              <button class="btn btn-primary offset-5" type="submit">order place</button>
            </div>
     </div>

</div>

</form>



@endsection 
@section('scriptfororderform')
    
    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/select2.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js" type="text/javascript"></script> --}}
    <script type="text/javascript" src="{{asset('assets/js/jquery.inputmask.js')}}"></script>
    <script type="text/javascript">
       
      jQuery(document).ready(function() {
          $(".select2").select2();
      });
    </script>
    

    <script type="text/javascript">
      
      $(document).ready(function($){
        $("#postal-code").inputmask({"mask":"999999","placeholder":"XXXXX"});
      });
    </script>
    <script type="text/javascript">
      
      $(document).ready(function($){
        $("#Mobile-Number").inputmask({"mask":"+99-9999999999","placeholder":"+91-XXXXXXXXXX"});
      });
    </script>
    

@endsection
