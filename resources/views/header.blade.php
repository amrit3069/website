@php
use App\Http\Controllers\productcontroller;
$count = 0;
if(Session::has('user')){
$count = productcontroller::cartcount();
}
    
@endphp

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">Shopify</a>
  

    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
    </li>

    <li>
      <form class="form-inline" action="search">
        <input class="form-control mr-sm-2 search" type="text" placeholder="Search" name = 'search'>
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">cart({{$count}})</a>
    </li>
    @if(Session::has('user'))
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        {{Session::get('user')['name']}}
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/logout">Logout</a>
      </div>
    </li>          
    @else
    <li class="nav-item">
      <a class="nav-link" href="/login">Login</a>
  </li> 
    @endif
    
    </ul>
  </nav>
  <br>

  <style>

  </style>

 