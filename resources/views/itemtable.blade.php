@extends('layouts.app1')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Item Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($item as $items)
      <tr>
        
        <td>{{$loop->iteration}}</td>
        <td>{{$items['item']}}</td>
        <td>{{$items['price']}}</td>
        <td><img src="{{asset('image/'.$items['image'] )}}" width="100"></td>
        <td><a href="{{"edititem/".$items['id']}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="18"><path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg></a>
            <a href="{{"itemdelete/".$items['id']}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="18" color="red"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg></a>
        </td>
        
      </tr>
    @endforeach
      {{-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr> --}}
    </tbody>
  </table>
  
  {{-- <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table> --}}

@endsection