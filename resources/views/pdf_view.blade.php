<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-10 mt-5 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h4>Tax Invoice</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Total price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$order->product->product_name1}}</td>
                            <td><img src="./assets/images/{{$order->product->product_image1}}" width="50"></td>
                            <td>Rs {{$order->product->product_new_price}}</td>
                            <td>1</td>
                            <td>Rs {{$order->product->product_new_price}}</td>
                        </tr>
                        <tr>
                            <th colspan="3" class="pt-5">Total Quantity: 1</th>
                            <th colspan="2" class="pt-5">Total Price: Rs {{$order->product->product_new_price}}</th>
                        </tr>
                        <tr>
                            <td class="pt-5"><h6>Sold By:</h6>
                            <p>m-cart, Kannur, Kerala-670011, India</p>
                            </td>
                            <td colspan="2" class="pt-5"><h6>Shipping Address:</h6>
                            <p>{{$order->address}}</p>
                            </td>
                            <td colspan="2" class="pt-5"><h6>Billing Address:</h6>
                            <p>{{$order->address}}</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="col-8 mx-auto mt-5">
                        <p>Thank you for shopping with m-cart.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>