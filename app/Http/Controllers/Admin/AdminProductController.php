<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function adminHome()
    {
        $products = Product::paginate(8);
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
