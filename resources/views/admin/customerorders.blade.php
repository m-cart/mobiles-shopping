@extends("admin.master")
@section("content")
<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="5">
                                    <h3 class="text-center text-info display-4"><b>Customer's Orders!</b></h3>
                                </td>
                            </tr>
                            <tr>
                                <th>User Name</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Address</th>
                                <th>Delivery Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->product->product_name1}}</td>
                                <td><img src="/assets/images/{{$order->product->product_image1}}" width="50"></td>
                                <td>₹ {{$order->product->product_new_price}}</td>
                                <td>@if($order->payment_method=='Cash on Delivery')
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                {{$order->payment_method}}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/debit/{{$order->id}}">Debit Card</a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($order->payment_method=='Debit Card')
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                {{$order->payment_method}}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/cod/{{$order->id}}">Cash on Delivery</a>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>@if($order->payment_status=='Pending')
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            {{$order->payment_status}}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/paid/{{$order->id}}">Paid</a>
                                        </div>
                                    </div>
                                    @else
                                        {{$order->payment_status}}
                                    @endif
                                </td>
                                <td>{{$order->address}}</td>
                                <td>@if($order->status=='Pending'||$order->status=='Placed'||$order->status=='Shipped')
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            {{$order->status}}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/placed/{{$order->id}}">Placed</a>
                                            <a class="dropdown-item" href="/shipped/{{$order->id}}">Shipped</a>
                                            <a class="dropdown-item" href="/delivered/{{$order->id}}">Delivered</a>
                                        </div>
                                    </div>
                                    @else
                                        Delivered
                                    @endif
                                    </td>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><a href="admin" class="btn btn-info">Go back</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection