@extends('master')
@section('content')
<div class = 'container custom-product'>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            @foreach ($data as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
                    <img class = 'slider-img' src="{{$item['gallery']}}" alt="Los Angeles" >
                    <div class="carousel-caption slider-text">
                      <h3>{{$item['name']}}</h3>
                      <p>{{$item['description']}}</p>
                    </div>   
                </a>
                  </div>   
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <br><br>
    <div class = trending-wrapper>
        <h3>Treding products</h3>
        @foreach ($data as $item)
            <div class="trending-items">
            <a href="detail/{{$item['id']}}">
                <img class = 'trending-images' src="{{$item['gallery']}}" alt="Los Angeles" >
                <div class="">
                  <h3>{{$item['name']}}</h3>
                </div>  
            </a>
              </div>     
            @endforeach


    </div>
</div>

@endsection

