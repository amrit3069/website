@extends('master')
@section('content')
<div class="container">        
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name/Description</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($myorders as $item)  
          <tr>
            <td>
                <a href="detail/{{$item->id}}">
                <img class = 'trending-images1' src="{{$item->gallery}}" alt="Los Angeles"> 
                </a>
            </td>
            <td><h3>{{$item->name}}</h3></td>
          </tr>     
          @endforeach
      </tbody>
    </table>
  </div>

@endsection

