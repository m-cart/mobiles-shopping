@extends("master")
@section("content")
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="4">
                                    <h3 class="text-center text-info display-4"><b>My Cart!</b></h3>
                                </td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartList as $cart)
                            <tr>
                                <td><img src="/assets/images/{{$cart->product->product_image1}}" width="50"></td>       {{-- variable/fuction 'product' is created 'Cart' model by relationship setup --}}
                                <td>{{$cart->product->product_name1}}</td>
                                <td>₹ {{$cart->product->product_new_price}}</td>
                                <td><a href="/removecart/{{$cart->id}}" class="text danger lead" onclick="return confirm('Are you sure you want to remove this product?');"><i class="fa fa-trash"></i>&nbsp;&nbsp; Remove</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><a href="/" class="btn btn-info">Continue Shopping</a> </td>
                                <td colspan="2"><a href="/checkout" class="btn btn-success"> 
                                        <i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection