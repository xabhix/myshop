@extends('layouts.app1')

@section('cssforitem')
<style>
  img{
    width:400px;
    height: 400px;
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
</style>
@endsection
@section('script')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 


@endsection



@section('content')

<div class="form-group">
<nav class="nav navbar-default bg-faded">
    
    <div class="container-fluid">
      <ul class="nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0zm18.31 6l-2.76 5z" fill="none"/>
            <path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-9.83-3.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1 2-2.76 5H8.53l-.13-.27L6.16 6l-.95-2-.94-2H1v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.13 0-.25-.11-.25-.25z"/>
            </svg>
            <span class= "badge badge-primary"></span> 
  
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      </ul>
    </div>
    
    </nav>
</div>  
  
<div class="form-group"><img src="{{asset('image/'.$cart['image'])}}"></div>
<div class="form-group">Name:{{$cart['item']}}</div>
<div class="form-group">Price:{{$cart['price']}}</div>
<a href="" target="_blank" class="btn btn-primary form-group" onclick="addcart()">Add To Cart</a>




<script>
// function addcart(){    
//     var cart = "{{$cart}}"
// var ItemInStoreage=localStorage.setItem("name","{{$cart->item}}");
var cartNumber=localStorage.getItem("name")
  document.querySelector('.badge').textContent=cartNumber;

//  else{
//   document.querySelector('.badge').style.hidden='true';
//  }
function addcart(){
var count=0;
//localStorage.setItem("name",1);
var ItemNumber=localStorage.getItem("name")
ItemNumber=parseInt(ItemNumber);
if(ItemNumber){
	localStorage.setItem("name",ItemNumber+1);
   count = parseInt(localStorage.getItem("name"));
}else{
	localStorage.setItem("name",1);
  count = parseInt(localStorage.getItem("name"))
}
document.querySelector('.badge').textContent=count;
}
// document.getElementById("demo").innerHTML = localStorage.getItem("name");
//document.getElementById("demo").innerHTML = cart;
// var count=0;
// var NumberOfCartItem=[];
// if (sizeof(Item))
// }

</script>
@endsection