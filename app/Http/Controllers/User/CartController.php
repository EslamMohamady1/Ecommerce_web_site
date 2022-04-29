<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtocart(Request $request , $id)
    {
        $user_id = Auth::user()->id;
        if($request->offer == "offer")
        {
            $cartoffer = new Cart();
            $cartoffer->prod_id = $id;
            $cartoffer->user_id = $user_id;
            $cartoffer->prod_qty = $request->qty;
            $cartoffer->offer = true;
            $cartoffer->save();
        }
        else 
        {
            $cart = new Cart();
            $cart->prod_id = $id;
            $cart->prod_qty = $request->qty;
            $cart->save();
        }
      
        return redirect()->back()->with('status',' Added Successfully ');
    }
    public function update_cart(Request $request , $id)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::find($id);
       
        $cart->user_id = $user_id;
        $cart->prod_qty = $request->qty;
        $cart->update();
        return redirect()->back()->with('status',' updated Successfully ');
    }
    public function edietcart($id)
    {
        $user_id = Auth::user()->id;
        // $category = Category::where('slug',$slug)->first();
            $cart = Cart::where('id',$id)->get();
          // $product = product::find($id);
          
            $product = Cart::join('products', 'carts.prod_id' , '=' , 'products.id')
            ->where('carts.id',$id)
                
                ->get();
          
        // $mycart = Cart::where('user_id',28)->get();
        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();       
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();
        $mycartcount = Cart::where('user_id',$user_id)->count();
            
            return view('admin.Products.edietcart',compact('cart','mycart','mycartcount','product','mycartoffers'));
    }
    public function edietoffercart($id)
    {
        $user_id = Auth::user()->id;
            $cart = Cart::where('id',$id)->get();
          
            $product = Cart::where('carts.id',$id)->join('offers', 'carts.prod_id' , '=' , 'offers.id')->get();
          
        // $mycart = Cart::where('user_id',28)->get();
        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();       
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();
        $mycartcount = Cart::where('user_id',$user_id)->count();
            
            return view('user.edietoffercart',compact('cart','mycart','mycartcount','product','mycartoffers'));
    }
    public function deletcart($id)
    {
        
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('status',' Added Successfully ');
    }
}
