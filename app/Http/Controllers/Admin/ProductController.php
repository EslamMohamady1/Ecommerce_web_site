<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function add()
    {
        $categories = Category::all();
        return view('admin.products.add',compact('categories'));
    }
    public function insert(Request $request)
    {
        $product = new Product();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('upload\Adminimage\productsImageFolder',$imagename);
            $product->image = $imagename;
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->status = $request->status == TRUE ? '1' :'0';
            $product->trending = $request->trending == TRUE ? '1' :'0';
            $product->description = $request->description;
            $product->meta_title = $request->meta_title;
            $product->meta_keywords = $request->meta_keywords;
            $product->meta_description = $request->meta_description;
            $product->qty = $request->qty;
            $product->tax = $request->tax;
            $product->original_price = $request->original_price;
            $product->selling_price = $request->selling_price;
            $product->small_description = $request->small_description;
            $product->cate_id = $request->cate_id;

            $product->save();
            return redirect()->back()->with('status','successfully');
    }
    public function editproduct($id)
    {
        $productdata = Product::find($id);
        $categories = Category::all();
        $mycartcount = Cart::where('user_id',$user_id)->count();

        return view('admin.products.edit',compact('productdata','categories'));
    }
    public function update_product(Request $request ,$id)
    {
        $update_product = Product::find($id);

        if($request->hasFile('image'))
        {
            $path = 'upload/Adminimage/productsImageFolder/'.$update_product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('upload\Adminimage\productsImageFolder',$imagename);
            $update_product->image = $imagename;

        }
    
        $update_product->name = $request->name;
            $update_product->slug = $request->slug;
            $update_product->status = $request->status == TRUE ? '1' :'0';
            $update_product->trending = $request->trending == TRUE ? '1' :'0';
            $update_product->description = $request->description;
            $update_product->meta_title = $request->meta_title;
            $update_product->meta_keywords = $request->meta_keywords;
            $update_product->meta_description = $request->meta_description;
            $update_product->qty = $request->qty;
            $update_product->tax = $request->tax;
            $update_product->original_price = $request->original_price;
            $update_product->selling_price = $request->selling_price;
            $update_product->small_description = $request->small_description;
            $update_product->cate_id = $request->cate_id;

        $update_product->update();
        return redirect()->back()->with('message', 'Updated Successfully!');
    }
    public function deletproduct($id)
    {
        $delet_product = Product::find($id);
        $path = 'upload/Adminimage/productsImageFolder/'.$delet_product->image;

        if(File::exists($path))
            {
                File::delete($path);
            }

        $delet_product->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
    public function productdetails($id)
    {
        $user_id = Auth::user()->id;
    // $category = Category::where('slug',$slug)->first();
        $product = Product::where('id',$id)->get();
    // $mycart = Cart::where('user_id',28)->get();
    $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
    ->where('user_id',$user_id)
    ->get();       
    $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
    ->where('user_id',$user_id)
    ->get();
    $mycartcount = Cart::where('user_id',$user_id)->count();
        
        return view('admin.Products.singleproduct',compact('product','mycart','mycartcount','mycartoffers')); 
    }
    public function addoffer()
    {
        $categories = Category::all();
        return view('admin.products.addoffer',compact('categories'));
    }
    public function insert_offer(Request $request )
    {
        $offer = new Offer();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('upload\Adminimage\productsImageFolder',$imagename);
        $offer->image = $imagename;
        $image2 = $request->image2;
        $imagename2 = time().'.'.$image2->getClientOriginalExtension().'2';
        $image2->move('upload\Adminimage\productsImageFolder',$imagename2);
        $offer->image2 = $imagename2;
        $offer->name = $request->name;
        $offer->slug = $request->slug;
        $offer->status = $request->status == TRUE ? '1' :'0';
        $offer->trending = $request->trending == TRUE ? '1' :'0';
        $offer->description = $request->description;
        $offer->meta_title = $request->meta_title;
        $offer->meta_keywords = $request->meta_keywords;
        $offer->meta_description = $request->meta_description;
        $offer->qty = $request->qty;
        $offer->tax = $request->tax;
        $offer->original_price = $request->original_price;
        $offer->selling_price = $request->selling_price;
        $offer->small_description = $request->small_description;
        $offer->cate_id = $request->cate_id;

        $offer->save();
        return redirect()->back()->with('status','successfully');
    }
    public function editoffer($id)
    {
        $offerdata = Offer::find($id);
        $categories = Category::all();
        
        return view('admin.products.editoffer',compact('offerdata','categories'));
    }
    public function update_offer(Request $request ,$id)
    {
        $update_offer = Offer::find($id);

        if($request->hasFile('image'))
        {
            $path = 'upload/Adminimage/productsImageFolder/'.$update_offer->image;
            $path2 = 'upload/Adminimage/productsImageFolder/'.$update_offer->image2;

            if(File::exists($path) && File::exists($path2))
            {
                File::delete($path);
                File::delete($path2);
            }
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('upload\Adminimage\productsImageFolder',$imagename);
            $update_offer->image = $imagename;
            
            $image2 = $request->image2;
            $imagename2 = time().'.'.$image2->getClientOriginalExtension().'2';
            $image2->move('upload\Adminimage\productsImageFolder',$imagename2);
            $update_offer->image2 = $imagename2;

        }
    
        $update_offer->name = $request->name;
            $update_offer->slug = $request->slug;
            $update_offer->status = $request->status == TRUE ? '1' :'0';
            $update_offer->trending = $request->trending == TRUE ? '1' :'0';
            $update_offer->description = $request->description;
            $update_offer->meta_title = $request->meta_title;
            $update_offer->meta_keywords = $request->meta_keywords;
            $update_offer->meta_description = $request->meta_description;
            $update_offer->qty = $request->qty;
            $update_offer->tax = $request->tax;
            $update_offer->original_price = $request->original_price;
            $update_offer->selling_price = $request->selling_price;
            $update_offer->small_description = $request->small_description;
            $update_offer->cate_id = $request->cate_id;

        $update_offer->update();
        return redirect()->back()->with('message', 'Updated Successfully!');
    }
    public function deletoffer($id)
    {
        $delet_offer = Product::find($id);
        $path = 'upload/Adminimage/productsImageFolder/'.$delet_offer->image;
        $path2 = 'upload/Adminimage/productsImageFolder/'.$delet_offer->image2;
        if(File::exists($path) && File::exists($path2))
            {
                File::delete($path);
                File::delete($path2);
            }

        $delet_offer->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
    public function alloffers()
    {
        $offers = Offer::all();
        return view('admin.products.alloffers',compact('offers'));
    }
    public function offerdetails($id)
    {
        $user_id = Auth::user()->id;
        // $category = Category::where('slug',$slug)->first();
        $offer = Offer::where('id',$id)->get();
        // $mycart = Cart::where('user_id',28)->get();

        $mycart = Cart::where('offer',0)->join('products', 'carts.prod_id' , '=' , 'products.id')
        ->where('user_id',$user_id)
        ->get();       
        $mycartoffers = Cart::where('offer',1)->join('offers', 'carts.prod_id' , '=' , 'offers.id')
        ->where('user_id',$user_id)
        ->get();
        $mycartcount = Cart::where('user_id',$user_id)->count();
        
        return view('admin.Products.singleoffer',compact('offer','mycart','mycartcount','mycartoffers')); 
    }
    
}
