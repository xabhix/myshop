@extends('layouts.app1')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Item Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Category</th>
        <th scope="col">Customer</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
        
       {{-- @foreach($itemlist as $items) --}}
       @foreach($userlist as $key=>$userlist)
      <tr>
        
        {{-- <td>{{$loop->iteration}}</td>
        <td>{{$items['item']}}</td>
        <td>{{$items['price']}}</td>
        <td><img src="{{asset('image/'.$items['image'] )}}" width="100"></td>
        <td>{{$items->category->name}}</td>
        <td></td> --}}



        <td>{{$loop->iteration}}</td>
        <td>{{$itemlist[$key]->item}}</td>
        <td>{{$itemlist[$key]->price}}</td>
        <td><img src="{{asset('image/'.$itemlist[$key]->image )}}" width="100"></td>
        <td>{{$itemlist[$key]->category->name}}</td>
        <td>{{$userlist['name']}}</td>
            
            
             
        
        <td>
            <form class="form-inline" action="/status" method="POST">
                @csrf
                <input type="hidden" name="item_id" value="{{$itemlist[$key]->id}}">
                {{-- {{$items['id']}}   --}}
                <div class="form-group row">
                    <div class="col">
                        <select id="status" class="form-control"  name="status" placeholder="status" >
                          {{-- <option value="">Select Order Status</option> --}}
                            @foreach($status as $statuses) 
                                {{-- <option value="{{$statuses['id']}}">{{$statuses['name']}}</option> --}}
                                @if (old('status')==$statuses['id'])
                                <option value={{$statuses['id']}} selected>{{$statuses['name']}}</option>
                                @else
                                <option value={{$statuses['id']}} >{{$statuses['name']}}</option>
                                @endif
                            @endforeach 
                            
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-sm offset-10">Add</button>
                    </div>
                </div>
                
            </form>



        </td> 
         {{-- style="background-color:{{$statuses['color']}};color:white;"  --}}
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