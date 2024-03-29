@extends("master")
@section("content")
<div class="container my-5">
    <div class="col-sm-10">
        <div class="table-responsive mt-2">
            <table class="table">
                <tbody>
                <tr>
                    <td colspan="2">
                        <h3 class="text-center text-info display-4"><b>Place Your Order!</b></h3>
                    </td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td>₹ {{$product->product_new_price}}</td>
                </tr>
                <tr>
                    <td>Delivery Charge:</td>
                    <td><del>₹ 50</del></td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>₹ {{$product->product_new_price}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <form action="/placeoneorder" method="POST">
            @csrf
            <input type="hidden"  name="product_id" value="{{$product->id}}">
            <input type="hidden"  name="product_price" value="{{$product->product_new_price}}">
            <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Enter your address" required>{{$user->address}}</textarea>
            </div>
            <div class="form-group">
                <label for="pay">Payment Method:</label>  <br>
                <input type="radio" value="Cash on Delivery" name="payment" checked> <span>Cash on Delivery</span> <br> <br>
                <input type="radio" value="Debit Card" name="payment" id=""> <span>Debit Card</span> <br> <br>
                <input type="radio" value="UPI" name="payment" disabled> <span>UPI</span> <br> <br>
                <input type="radio" value="EMI" name="payment" disabled> <span>EMI Payment</span> <br><br>
            </div>
            <button type="submit" class="btn btn-success">Place Order</button>
        </form>
    </div>
</div>

{{-- <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> --}}
        
        <!-- Modal body -->
        {{-- <div class="modal-body">
            <div class="card">
                <div class="card-header bg-secondary">

                </div> --}}
                {{-- <div class="card-body">
                    <form role="form" 
                    action="{{ route('stripe.modal',$total) }}" 
                    method="post" 
                    class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                    id="payment-form">
                        @csrf
                        <div class="row mb-3">
                            <div class="required">
                            <label for="">Name on Card</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" >
                            @error("name")
                            <p style="color:red">{{$errors->first("name")}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="card required">
                            <label>Card Number</label>
                            <input type="text" class="form-control card-number" placeholder="xxxx xxxx xxxx xxxx" name="card_num" value="{{ old('card_num') }}" >
                            @error("card_num")
                            <p style="color:red">{{$errors->first("card_num")}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col cvc required">
                                <label>CVC</label>
                                <input type="text" class="form-control card-cvc" placeholder='ex. 311' name="cvc"  value="{{ old('cvc') }}" >
                                @error("cvc")
                                <p style="color:red">{{$errors->first("cvc")}}</p>
                                @enderror
                            </div>
                            <div class="col expiration required">
                                <label>Expiration Month</label>
                                <input type="text" class="form-control card-expiry-month" placeholder="MM" name="month" value="{{ old('month') }}" >
                                @error("month")
                                <p style="color:red">{{$errors->first("month")}}</p>
                                @enderror
                            </div>
                            <div class="col expiration required">
                                <label>Expiration Year</label>
                                <input type="text" class="form-control card-expiry-year" placeholder="YYYY" name="year" value="{{ old('year') }}" >
                                @error("year")
                                <p style="color:red">{{$errors->first("year")}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class='col-md-12 error hide'>
                                <div class='alert-danger alert'>Please correct the errors and try again.</div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Pay Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
</div> --}}

@endsection