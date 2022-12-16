<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $featured = Product::where('status',1)->where('IsFeature',1)->get();
        $product = Product::where('status',1)->where('IsFeature',0)->get();
        $category = Category::where('status',1)->get();
        $section = Section::with('products')->where('status',1)->get();
        return view('frontend.home',compact('product','section','featured','category'));
    }
    public function details($slug)
    {
        return view('frontend.product-details');
    }
}