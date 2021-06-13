@extends('master')
@section('content')
<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-sm-6'>
            <img class = 'detail-img' src="{{$data1['gallery']}}" alt="">
        </div>
        <div class = 'col-sm-6'>
            <a href="/">Go Back</a>
            <h2>{{$data1['name']}}</h2>
            <h3>price : ${{$data1['price']}}</h3>
            <h4>Details : {{$data1['description']}}</h4>
            <h4>Category : {{$data1['category']}}</h4>
            <br><br>
            <button class = 'btn btn-primary'>Add to Card</button>
            <br><br>
            <button class = 'btn btn-success'>Buy Now</button>



        </div>
    </div>
    
</div>

@endsection

