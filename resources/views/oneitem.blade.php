@extends('layouts.app1')

@section('cssforitem')
<style>
  
  img{
    width:400px;
    height: 250px;
    object-fit: cover;
  }

  .card-img-top {
    width: 100%;
    height: 10vw;
    object-fit: cover;
}
.card:hover{
  box-shadow: 5px 15px 10px lightblue;    
  transform: scale(1.1);
}
.badge{
    

    position: absolute;
    top:0.20rem;
    right:1rem;
    

}
.custom {
    width: 78px !important;
    text-align: center;
    margin-left:16px;
}
</style>
@endsection
{{-- @section('script')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 


@endsection --}}



@section('content')

<div class="form-group">
<nav class="nav navbar-default bg-faded">
    
    <div class="container-fluid">
      <ul class="nav navbar-right">
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0zm18.31 6l-2.76 5z" fill="none"/>
            <path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1 2-2.76 5H8.53l-.13-.27L6.16 6l-.95-2-.94-2H1v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25z"/>
            </svg>
            <span class= "badge badge-primary"></span> 
  
          </a>
        </li>
        --}}
       
      </ul>
    </div>
    
    </nav>
</div>  
<div class="container">
  
        
          
            <div class="form-group img"><img src="{{asset('image/'.$cart['image'])}}"></div>
            <div class="form-group row">
              <div class="col-xl-2" style="margin-left:-1px">Name: {{$cart['item']}}</div>
              <div class="col-xl-3" style="margin-left:18px">Category: {{$cart->category->name}}</div>
            </div>
            <div class="form-group">Price:{{$cart['price']}}</div>
            <div class="form-group row">
            <a href="" target="_blank" class="btn btn-primary custom "  onclick="addcart({{$cart['id']}})">Cart</a>
            <a href="{{(Auth::user())? url('order/'.$cart['id'].'/'.$cart['item']):url('login')}}" target="_blank" class="btn btn-success custom" style="margin-left:248px;">Buy</a>
            </div>
        
        
</div> 


<script>
  var a = "{{$cart}}"
  
  function setCookie(name,value,days) {
   var expires = "";
   if (days) {
       var date = new Date();
       date.setTime(date.getTime() + (days*24*60*60*1000));
       expires = "; expires=" + date.toUTCString();
   }
   document.cookie = name + "=" + (value || "")  + expires + "; path=/";
} 







  
  function addcart(data,setCookie){
    var itemarray 
    var localStorageContent=localStorage.getItem('items');
    console.log(itemarray);
    //console.log(localStorageContent===null);
    //document.write('3');
    //document.write(JSON.parse(localStorage.getItem('items')));
    if(localStorageContent===null){
       itemarray=[];
       itemarray.push(data);
       localStorage.setItem('items',JSON.stringify(itemarray));
       //console.log(itemarray);
    }else{
      itemarray=JSON.parse(localStorage.getItem('items'));
      itemarray.push(data);
      localStorage.setItem('items',JSON.stringify(itemarray));
      console.log(itemarray);
      console.log(itemarray[0]);
      console.log(itemarray.length);
    }
    
//console.log(JSON.parse(localStorage.getItem('items')).length);
  // if(JSON.parse(localStorage.getItem('items'))){
  //   //document.write('3');
  //   itemarray.push(JSON.parse(localStorage.getItem('items')));
  //   //document.write(typeof(JSON.parse(localStorage.getItem('items'))))
  //   itemarray.push(data);
  //   document.write(itemarray);
  //   localStorage.setItem('items',JSON.stringify(itemarray));
  //   var count=JSON.parse(localStorage.getItem('items'));
  //   document.write(count);
    
  // }
  // if(!JSON.parse(localStorage.getItem('items'))){
  //  // document.write('2');
  //   localStorage.setItem('items',JSON.stringify(itemarray));
  //   itemarray.push(data);
  //   document.write(itemarray);
  //   localStorage.setItem('items',JSON.stringify(itemarray));
  // }
    
  
  
  
   
  
  // var ItemNumber=localStorage.getItem("name")
  // ItemNumber=parseInt(ItemNumber);
  
  // if(ItemNumber)
  // {
    //Itemarray.push(ItemNumber);
    // localStorage.setItem("items",JSON.stringify(Itemarray));
    // count = JSON.parse(localStorage.getItem("items"));
   
    // document.write(typeof(count[0]));
    //Itemarray.push(count);
    // emptyarray.push()
    //count = parseInt(localStorage.getItem("name"));
  // }
  // else{
  //   localStorage.setItem("name",Itemarray);
  //   //count = parseInt(localStorage.getItem("name"))
  // }
  //document.querySelector('.badge').textContent=itemarray.length;
  
   
  }

  var myItem = localStorage.getItem('items');
  setCookie('cookieName', myItem, 7);

//get your item from the localStorage
 
  

  

</script>
@endsection