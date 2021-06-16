@extends('master')
@section('content')
<div class="container">
    <h2>Billing Details</h2><br>
    <table class="table">
      <tbody>
        <tr>
          <td>Amount</td>
          <td>$ {{$order}}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$ 0</td>
        </tr>
        <tr>
          <td>Delivery Charges</td>
          <td>$ 10</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>$ {{$order + 10}}</td>
        </tr>
      </tbody>
    </table>
    <div class = 'col-sm-6' >
        <form action="/placeorder" method="POST">
          @csrf
            <div class="form-group">
              <label for="comment">Address</label>
              <textarea class="form-control" rows="3" id="address" name="address" placeholder="Enter Your Address"></textarea>
            </div>
            <div class="form-group">
                <label for="payment">Payment Method</label><br>
                <input type="radio" value="cash" name = 'payment'><span>EMI payment</span><br>
                <input type="radio" value="cash" name = 'payment'><span>Online pay</span><br>
                <input type="radio" value="cash" name = 'payment'><span>Cash on Delivery</span><br>
            </div>
                <button type="submit" class="btn btn-success">Proceed</button>     
          </form>
    </div>
</div>

@endsection

