<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view( "admin.category.index",compact('category'));
    }
    public function add()
    {
        return view( "admin.category.add");
    }
    public function insert(Request $request)
    {
        $category = new Category();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('upload\Adminimage\categoryImageFolder',$imagename);
            $category->image = $imagename;
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->status = $request->status == TRUE ? '1' :'0';
            $category->popular = $request->popular == TRUE ? '1' :'0';
            $category->description = $request->description;
            $category->meta_title = $request->meta_title;
            $category->meta_keywords = $request->meta_keywords;
            $category->meta_descrip = $request->meta_description;
            $category->save();
            return redirect()->back()->with('status','successfully');

            

        
    }
    public function editcategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update_category(Request $request , $id)
    {
        $update_category = Category::find($id);

        if($request->hasFile('image'))
        {
            $path = 'upload/Adminimage/categoryImageFolder/'.$update_category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('upload\Adminimage\categoryImageFolder',$imagename);
            $update_category->image = $imagename;

        }
      
        $update_category->name = $request->name;
        $update_category->slug = $request->slug;
        $update_category->description = $request->description;
        $update_category->status = $request->status == TRUE ? '1' :'0';
        $update_category->popular = $request->popular == TRUE ? '1' :'0';
        $update_category->meta_title = $request->meta_title;
        $update_category->meta_keywords = $request->meta_keywords;
        $update_category->meta_descrip = $request->meta_description;
        $update_category->update();
        return redirect()->back()->with('message', 'Updated Successfully!');
    }
    public function deletcategory($id)
    {
        $delet_category = Category::find($id);
        $path = 'upload/Adminimage/categoryImageFolder/'.$delet_category->image;

        if(File::exists($path))
            {
                File::delete($path);
            }

        $delet_category->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
