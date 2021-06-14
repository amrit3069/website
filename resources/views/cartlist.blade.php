@extends('master')
@section('content')
<div class="container">        
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name/Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($productlist as $item)  
          <tr>
            <td>
                <a href="detail/{{$item->id}}">
                <img class = 'trending-images1' src="{{$item->gallery}}" alt="Los Angeles"> 
                </a>
            </td>
            <td><h3>{{$item->name}}</h3></td>
            <td><a href="/removeitem/{{$item->cart_id}}"><button class = 'btn btn-danger'>Remove from Cart</button></a></td>
          </tr>     
          @endforeach
      </tbody>
    </table>
    <a href="/order"><button class = 'btn btn-success'>Order Now</button></a>
  </div>

@endsection

