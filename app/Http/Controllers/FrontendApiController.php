<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Section;
use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FrontendApiController extends Controller
{
    //
    public function category()
    {
        $category = Category::with('products')->where('status',1)->get();
        return $category;
    }
    public function categoryDetail(Request $request)
    {
        $category = Category::with('products')->where('status',1)->find($request->cat_id);
        return $category;
    }
    public function subcategory(Request $request)
    {
        $category = SubCategory::where('status',1)->where('category_id',$request->cat_id)->get();
        return $category;
    }
    public function sections()
    {
        $section = Section::with('products')->where('status',1)->get();
        return $section;
    }
    public function sectionDetail(Request $request)
    {
        $section = Section::with('products')->where('status',1)->find($request->sec_id);
        return $section;
    }
    public function products()
    {
        $products = Product::with('images','coupon','section')->where('status',1)->get();
        return $products;
    }
    public function details(Request $request)
    {
        $product = Product::with('images','coupon','section')->where('slug',$request->slug)->first();
        return $product;
    }

}
