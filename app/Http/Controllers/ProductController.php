<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use App\Traits\SaveImage;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductImage;

class ProductController extends Controller
{
    //
    use SaveImage;

    public function index()
    {
        $product = Product::all();
        return view('dashboard.admin.pages.product.index',compact('product'));
    }
    public function create()
    {
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
        return view('dashboard.admin.pages.product.create',compact('category','brand'));
    }
    public function subcat(Request $request)
    {
        // dd($request->all());
        $subcategory = SubCategory::where('category_id',$request->category)->get();
        return $subcategory;
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:product,title',
            'category_id'   => 'required|numeric|exists:category,id',
            'subcategory'   => 'required|numeric|exists:sub_category,id',
            'description'   => 'string',
            'IsFeature'     => 'required|numeric|In:0,1',
            'old_price'     => 'required|numeric|gt:new_price',
            'new_price'     => 'required|numeric|lt:old_price',
            'fea_img'       => 'required|image|max:2048',
            'image'         => 'required',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $product = new Product;
            $product->category_id  = $request->category_id;
            $product->subcat_id  = $request->subcategory;
            $product->title         = $request->name;
            $product->IsFeature         = $request->IsFeature;
            $product->fea_img   = $this->ProductFeaturedImage($request->fea_img);
            if($request->has('description'))
            {
                $product->description   = $request->description;
            }
            $product->old_price         = $request->old_price;
            $product->new_price         = $request->new_price;
            $product->discount          = (((int)$request->old_price - (int)$request->new_price)/(int)$request->new_price)*100;
            $product->slug          = $slug;
            $product->status        = 1;
            $product->created_by        = auth()->user()->id;
            $product->save();

            DB::commit();

            return redirect()->route('product.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $category = Category::where('status',1)->get();
        $subcategory = SubCategory::find($id);
        return view('dashboard.admin.pages.product.edit',compact('subcategory','category'));
    }
    public function update($id,Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:sub_category,name,'.$id,
            'category_id'   => 'required|numeric|exists:category,id',
            'description'   => 'string',
            'icon'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $cat = SubCategory::find($id);
            if($request->has('name'))
            {
                $cat->name  = $request->name;
                $cat->slug          = $slug;
            }
            if($request->has('description'))
            {
                $cat->description   = $request->description;
            }
            if($request->has('icon'))
            {
                $cat->icon   = $this->CatImage($request->icon);
            }
            if($request->has('status'))
            {
                $cat->status = $request->status;
            }
            $cat->save();

            DB::commit();

            return redirect()->route('product.index')->with('success', 'Record Updated successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
}
