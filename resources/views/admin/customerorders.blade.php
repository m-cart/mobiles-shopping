@extends("admin.master")
@section("content")
<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="4">
                                    <h4 class="text-center text-info">Customer's Orders</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>Product ID</th>
                                <th>User ID</th>
                                
                                <th>Payment Method</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->product_id}}</td>
                                <td>{{$order->user_id}}</td>
                                
                                <td>{{$order->payment_method}}</td>
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