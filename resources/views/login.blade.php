@extends('master')
@section('content')

<div class="container login">
    <div class='row'>
    <div class = 'col-sm-4 inner_div'>
    <form action="" class = 'login1'>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
  </div>
<button class = 'btn btn-primary'>Click me</button>
@endsection

