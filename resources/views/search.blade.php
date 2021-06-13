@extends('master')
@section('content')
<div class = 'container custom-product'>
    <div class = 'col-sm-4'>
        <a href="#">Filter</a>
    </div>
    <div class = 'col-sm-4'>
        <div class = trending-wrapper>
            <h4>Result of Search</h4>
            @foreach ($data as $item)
                <div class="searched-items">
                <a href="detail/{{$item['id']}}">
                    <img class = 'trending-images' src="{{$item['gallery']}}" alt="Los Angeles" >
                    <div class="">
                      <h2>{{$item['name']}}</h2>
                      <h5>{{$item['description']}}</h5>
                    </div>  
                </a>
                  </div>     
                @endforeach
        </div>
    </div> 
</div>

@endsection

