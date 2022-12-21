<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Section;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



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
        $product = Product::with('images')->where('slug',$slug)->first();
        return view('frontend.product-details',compact('product'));
    }
    public function profile()
    {
        $user = auth()->user();
        return view('frontend.user.profile',compact('user'));
    }
    public function updatePassword(Request $request)
    {
        $valid =  Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if(!$valid->fails())
        {
            try
            {
                $user = User::find(auth()->user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('success',"Password has been successfully updated...");
            }
            catch(Exception $ex)
            {
                return redirect()->back()->with('error', $ex->getMessage());
            }
        }
        else
        {
            return redirect()->back()->with('error', $valid->errors());
        }
    }
    public function collection($slug)
    {
        $category = Category::with('products')->get();
        $products = Product::with('singleImage')->where('status',1);
        if($slug == "all")
        {
            $products = $products->get();
        }
        else
        {
            $find = Category::where('slug',$slug)->first();
            $products = $products->where('category_id',$find->id)->get();
        }

        return view('frontend.collection',compact('category','products','slug'));
    }
    public function  collectionview()
    {
        $category = Category::with('products')->get();
        return view('frontend.collection-view',compact('category'));
    }
    public function topCategory()
    {
        $category = Category::with(['products'=>function($query) {
            return $query->limit(5);
        }])->take(4)->get();
        return $category;
    }
}
