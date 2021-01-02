@extends("master")
@section("content")
<div class="container my-5">
    <div class="col-sm-10">
        <div class="table-responsive mt-2">
            <table class="table">
                <tbody>
                <tr>
                    <td colspan="2">
                        <h3 class="text-center text-info ">Place your order!</h3>
                    </td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td>₹ {{$total}}</td>
                </tr>
                <tr>
                    <td>Delivery Charge:</td>
                    <td>₹ 50</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>₹ {{$total+50}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <form action="/placeorder" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Enter your address" required>{{$user->address}}</textarea>
            </div>
            <div class="form-group">
                <label for="pay">Payment Method:</label>  <br>
                <input type="radio" value="UPI" name="payment"> <span>UPI</span> <br> <br>
                <input type="radio" value="Debit Card" name="payment"> <span>Debit Card</span> <br> <br>
                <input type="radio" value="EMI" name="payment"> <span>EMI Payment</span> <br><br>
                <input type="radio" value="Cash on Delivery" name="payment" checked> <span>Cash on Delivery</span> <br> <br>
            </div>
            <button type="submit" class="btn btn-success">Place Order</button>
        </form>
    </div>
</div>
@endsection