<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order; 

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
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];          //to get id from the session user
            $cart->product_id = $req->product_id;
            $cart ->save();
            return redirect ('/');
        }
        else
        {
            return '<script>
                    alert("Please login to your account"); 
                    window.location.href="/login";
                </script>';
        }
    }

    public static function cartItem()                                   //here static func is using because. in header.blade file we are assigning $total = ProductController::cartItem(); and statically printing $total for count(). This is possible only by static function.
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    
    public function cartList()
    {                                                           //First we can check using "return 'Hello';"
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')                    // we need to select cart id also for removing product from cart by id in cartlist.blade.php.
        ->get();

        return view ('cartlist',['products'=>$products]);
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    public function checkout()
    {
        $userId = Session::get('user')['id'];
        $user = User::find($userId);
        $total = DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.product_new_price');
 
         return view('checkout',['total'=>$total,'user'=>$user]);
    }

    public function placeOrder(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->payment_method=$req->payment;
            $order->address=$req->address;
            $order->status="pending";
            $order->save();
            Cart::where('user_id',$userId)->delete(); 
        }
        $req->input();
        return '<script>
                    alert("Your orders has been successfully placed. Please click My Orders to see your orders.");
                    window.location.href="/";
                </script>';
    }

    public function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders = DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->select('products.*','orders.*','orders.id as orders_id')
         ->get();
 
         return view('myorders',['products'=>$orders]);
    }

    public function removeOrder($id)
    {
        Order::destroy($id);
        return redirect('/myorders');
    }

    //Admin
    public function adminHome()
    {
        $products = Product::all();
        return view('admin/home',['products'=>$products]);
    }
    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin/editproduct',['product'=>$product]);
    }
    public function updateProduct(Request $req, $id)
    {
        $this->validate($req, [
            'product_name1' => 'required|min:4',
            'product_old_price' => 'required|numeric|min:4000|max:100000',
            'product_new_price' => 'required|numeric|min:4000|max:100000',
            'product_image1'=> 'required|file|mimes:png,jpg,jpeg',
            'product_image2'=> 'required|file|mimes:png,jpg,jpeg',
            'product_name2' => 'required|min:6'
        ]);
        $product = Product::find($id);
        $product->product_name1 = $req->product_name1;
        $product->product_old_price = $req->product_old_price;
        $product->product_new_price = $req->product_new_price;
        $product->product_name2 = $req->product_name2;
        $product->description = $req->description;
        $product->highlights1 = $req->highlights1;
        $product->highlights2 = $req->highlights2;
        $product->highlights3 = $req->highlights3;
        $product->highlights4 = $req->highlights4;
        // $product->image = $req->file('image')->store('images');

        if($req->hasFile('product_image1') && $req->hasFile('product_image2')) {
            
            $file1 = $req->file('product_image1') ;
            $file2 = $req->file('product_image2') ;
            
            $fileName1 = $file1->getClientOriginalName() ;
            $fileName2 = $file2->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file1->move($destinationPath,$fileName1);
            $file2->move($destinationPath,$fileName2);
            $product->product_image1 = $fileName1 ;
            $product->product_image2 = $fileName2 ;
        }
        else
        {
            return $req;
            $product->product_image1 = '';
            $product->product_image2 = '';
        }
        $product->save();
        return '<script>
                    alert("Product details updated"); 
                    window.location.href="/admin";
                </script>';
    }
}