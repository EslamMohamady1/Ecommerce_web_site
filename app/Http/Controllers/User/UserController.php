<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    
       
    $user_id = Auth::user()->id;
    $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
    ->where('user_id',$user_id)
    ->get();


    
    $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
    ->where('user_id',$user_id)
    ->get();
    $mycartcount = Cart::where('user_id',$user_id)->count();
    
        $category = Category::all();
        $trendingproduct = Product::where('trending','1')->take(3)->get();
        $categoryproduct = Product::all();
        $categoryproduct2 = DB::table('products')->distinct('cate_id')->get();
        $products = Product::get()->unique('cate_id');
        $offers = Offer::get()->take(4);
        return view('home',compact('trendingproduct','mycartoffers','category','categoryproduct','products','categoryproduct2','mycart','mycartcount','offers'));
    }
    public function getproductbycategory($slug)
    {
        $user_id = Auth::user()->id;

        $category = Category::where('slug',$slug)->first();
       $product = Product::where('cate_id',$category->id)->get();
       $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
       ->where('user_id',$user_id)
       ->get();
   

       
       $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
       ->where('user_id',$user_id)
       ->get();
       $mycartcount = Cart::where('user_id',$user_id)->count();

        return view('getproductbycategory',compact('product','mycartoffers','mycart','mycartcount')); 
    
    }
    public function mycart()
    {
        $user_id = Auth::user()->id;
        
            $mycart = Cart::where('user_id',$user_id)->where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
            ->select('carts.*', 'products.name', 'products.description', 'products.original_price', 'products.selling_price', 'products.image')
            ->get();       
            $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
            ->where('user_id',$user_id)->select('carts.*', 'offers.name', 'offers.description', 'offers.original_price', 'offers.selling_price', 'offers.image','offers.image2')
            ->get();
            
       
        $mycartcount = Cart::where('user_id',$user_id)->count();
        return view('user.mycart',compact('mycart','mycartoffers','mycartcount'));
    }

    public function contactus()
    {
        $user_id = Auth::user()->id;

        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();
    

        
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();        $mycartcount = Cart::where('user_id',$user_id)->count();
        return view('user.contactus',compact('mycart','mycartcount','mycartoffers'));
    }
    public function sendcontactmessage(Request $request)
    {
        $user_id = Auth::user()->id;
        $contact = new Contact();
        $contact->fname = $request->firstname;
        $contact->lname = $request->lastname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        if($user_id)
        {
            $contact->user_id = $user_id;
        }
        $contact->save();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        
        $user_id = Auth::user()->id;
        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();
    

        
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();        
        $mycartcount = Cart::where('user_id',$user_id)->count();
        $search = Product::where('name','LIKE','%'.$request->search.'%')
        ->orwhere('description','LIKE','%'.$request->search.'%')
        ->orwhere('small_description','LIKE','%'.$request->search.'%')
        ->orwhere('selling_price','LIKE','%'.$request->search.'%')
        ->orwhere('original_price','LIKE','%'.$request->search.'%')
        ->orwhere('meta_title','LIKE','%'.$request->search.'%')
        ->orwhere('meta_description','LIKE','%'.$request->search.'%')
        ->get();
        return view('user.search',compact('mycart','mycartcount','search','mycartoffers'));
    }
    public function allcategoty()
    {
        $allcategoty = Category::all();
        $user_id = Auth::user()->id;
        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();       
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();
                $mycartcount = Cart::where('user_id',$user_id)->count();
        
        return view('user.categories',compact('mycart','mycartcount','allcategoty','mycartoffers'));
    }
    public function allproducts()
    {
        $allproducts = Product::all();
        $user_id = Auth::user()->id;
        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();
    

        
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();
        $mycartcount = Cart::where('user_id',$user_id)->count();
        
        return view('user.allproducts',compact('mycart','mycartcount','allproducts','mycartoffers'));
    }
    public function alloffers()
    {
        $alloffers = Offer::all();
        $user_id = Auth::user()->id;
        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();
    

        
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();
        $mycartcount = Cart::where('user_id',$user_id)->count();
        return view('user.alloffers',compact('mycart','mycartcount','alloffers','mycartoffers'));
    }
    

}
