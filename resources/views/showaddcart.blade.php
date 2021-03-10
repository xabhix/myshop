@extends('layouts.app1')
@section('content')
<table class="table" style="border-spacing:1px">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Item Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Category</th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($itemlist as $items) --}}
      {{-- @foreach($status as $key=>$status) --}}
      @foreach($cartItems as $cartItem)
      <tr>
        
       

        {{-- <td>{{$loop->iteration  }}</td>
        <td>{{$itemlist[$key]->item}}</td>
        <td>{{$itemlist[$key]->price}}</td>
        <td><img src="{{asset('image/'.$itemlist[$key]->image )}}" width="100"></td>
        <td>{{$itemlist[$key]->category->name}}</td>
       
        <td> --}}
          
          {{-- @foreach($status as $statuses)
          
          @endforeach --}}
        {{-- </td> --}}
       
        <td scope="col">{{$loop->iteration  }}</td>
        <td scope="col">{{$cartItem['item']}}</td>
        <td scope="col">{{$cartItem['price']}}</td>
        <td scope="col"><img src="{{asset('image/'.$cartItem['image'] )}}" width="100"></td>
        <td scope="col">{{$cartItem->category->name}}</td>
       
        {{-- <td scope="col">
           <span class="badge" style="background-color:{{$placed_items->placed_status->color}};">{{$placed_items->placed_status->name}}</span> 
          
        </td> --}}
        <td scope="col">
            <button class="btn btn-primary">Buy</button>
        </td>


      </tr>
    @endforeach




    {{-- @foreach($combine as $items)
      <tr>
        
        <td>{{$items['id']}}</td>
        <td>{{$items['item']}}</td>
        <td>{{$items['price']}}</td>
        <td><img src="{{asset('image/'.$items['image'] )}}" width="100"></td>
        <td>{{$items->category->name}}</td>
        @foreach($status as $statuses)
        <td><span class="badge" style="background-color:{{$items['color']}};color:white;">{{$items['name']}}</span></td>
        @endforeach
      </tr>
    @endforeach  --}}
     
    </tbody>
  </table>

  {{-- <table class="table">
    <thead class="thead-dark">

      <tr>
        <th>NUM</th>
      </tr>
    </thead>
    <tbody>
      @foreach($status as $statuses)
          
     
      <tr>
        <td>{{$statuses['name']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> --}}
@endsection