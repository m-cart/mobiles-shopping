@extends("master")
@section("content")
    <div class="container my-5">
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="4">
                                    <h3 class="text-center text-info display-4"><b>My Orders!</b></h3>
                                </td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Delivery Status</th>
                                <th>Address</th>
                                <th>Payment Method</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td><img src="/assets/images/{{$order->product->product_image1}}" width="50"></td>          {{-- variable/fuction 'product' is created 'Order' model by relationship setup --}}
                                <td>{{$order->product->product_name1}}</td>
                                <td>₹ {{$order->product->product_new_price}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->payment_method}}</td>
                                <td>   @if ( $order->payment_status =="Pending")
                                        <a href="/stripe/{{$order->product->product_new_price}}" class="ml-3">Pay Now</a>
                                    @else
                                        <p>{{$order->payment_status}}</p>
                                    @endif
                                </td>
                                <td><a href="/removeorder/{{$order->id}}" class="text danger lead" onclick="return confirm('Are you sure you want to cancel/return this product?');">Cancel/Return</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><a href="/" class="btn btn-info">Continue Shopping</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection