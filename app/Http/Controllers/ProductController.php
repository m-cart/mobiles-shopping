<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;
use PDF;

class ProductController extends Controller
{
    //
    public function home()
    {
        $products = Product::all();
        return view('home',['products'=>$products]);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('detail',['product'=>$product]);
    }

    public function search(Request $req)                                //Request means http request coming from form. What request we submit through the form. We can check this request by printing return $req;
    {
        $products= Product::
        where('product_name1', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$products]);
    }

    public function addToCart(Request $req)
    {
            $cart = new Cart;
            $cart->user_id = Auth::id();
            $cart->product_id = $req->product_id;
            $cart ->save();
            return redirect ('/');
    }

    public static function cartItem()                                   //here static func is using because. in header.blade file we are assigning $total = ProductController::cartItem(); and statically printing $total for count(). This is possible only by static function.
    {
        $userId = Auth::id();
        return Cart::where('user_id',$userId)->count();
    }
    
    public function cartList()
    {                                                           //First we can check using "return 'Hello';"
        $userId = Auth::id();
        // $products = DB::table('cart')
        // ->join('products','cart.product_id','=','products.id')
        // ->where('cart.user_id',$userId)
        // ->select('products.*','cart.id as cart_id')                    // we need to select cart id also for removing product from cart by id in cartlist.blade.php.
        // ->get();

        $cartList = Cart::where('user_id',$userId)->get();
        return view ('cartlist',['cartList'=>$cartList]);
    }

    public function removeCart($id)
    {
        Cart::find($id)->delete();
        return redirect('/cartlist');
    }

    public function checkout()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        $total = DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.product_new_price');
        return view('checkout',['total'=>$total,'user'=>$user]);
    }

    public function placeOrder(Request $req)
    {
        $userId = Auth::id();
        $user = Auth::user();
        $total = DB::table('cart')
                ->join('products','cart.product_id','=','products.id')
                ->where('cart.user_id',$userId)
                ->sum('products.product_new_price');
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->payment_method=$req->payment;
            $order->address=$req->address;
            $order->status="Pending";
            $order->payment_status="Pending";
            $order->save();
            Cart::where('user_id',$userId)->delete(); 
        }

        if($req->payment=='Debit Card')
        {
            Mail::to($user)->send(new OrderPlaced());
            return redirect()->route('stripe', ['price' => $total]);
        }
        else if($req->payment=='Cash on Delivery') {
            Mail::to($user)->send(new OrderPlaced());
            return '<script>
                        alert("Your orders has been successfully placed. Please click My Orders to track your orders.");
                        window.location.href="/myorders";
                    </script>';
        }
        
    }

    public function buyNow($id)
    {
        $userId = Auth::id();
        $user = User::find($userId);
        $product = Product::find($id);
        return view('buynow',['user'=>$user,'product'=>$product]);
    }

    public function placeOneOrder(Request $req)         //User who directly coming from 'Buy Now' link, not from cart
    {
        $userId = Auth::id();
        $user = Auth::user();
        $total = $req->product_price;
        $order= new Order;
        $order->product_id=$req->product_id;
        $order->user_id=$userId;
        $order->payment_method=$req->payment;
        $order->address=$req->address;
        $order->status="Pending";
        $order->payment_status="Pending";
        $order->save();

        if($req->payment=='Debit Card')
        {
            Mail::to($user)->send(new OrderPlaced());
            return redirect()->route('stripe', ['price' => $total]);
        }
        else if($req->payment=='Cash on Delivery') {
            Mail::to($user)->send(new OrderPlaced());
            return '<script>
                        alert("Your orders has been successfully placed. Please click My Orders to track your orders.");
                        window.location.href="/myorders";
                    </script>';
        }
    }

    public function myOrders()
    {
        $userId=Auth::id();
        // $orders = DB::table('orders')
        //  ->join('products','orders.product_id','=','products.id')
        //  ->where('orders.user_id',$userId)
        //  ->select('products.*','orders.*','orders.id as orders_id')
        //  ->get();

        $orders = Order::where('user_id',$userId)->latest()->get();
        return view('myorders',['orders'=>$orders]);
    }

    public function removeOrder($id)
    {
        Order::find($id)->delete();
        return redirect('/myorders');
    }

    public function exportPDF($id) 
    {
        $order = Order::find($id);
        
        // share data to view
        view()->share('order',$order);
        $pdf = PDF::loadView('pdf_view', $order);
  
        // download PDF file with download method
        return $pdf->download('order_'.$order->product->product_name1.'_'.$order->user->name.'.pdf');
    }

}