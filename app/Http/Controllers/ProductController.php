<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function saveProduct(Request $request){
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->category_name=$request->category_name;
        $product->brand_name=$request->brand_name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->image=$this->saveImage($request);
        $product->save();
        return back();
    }
    private function saveImage ($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='adminAsset/upload/product-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function manageProduct(){
        return view('admin.product.manage-product',[
            'products'=>Product::all()
        ]);
    }
    public function status($id){
        
    }

}
