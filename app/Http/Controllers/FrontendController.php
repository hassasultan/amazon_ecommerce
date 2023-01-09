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
        // dd(count(auth()->user()->wishlistCount->toArray()));
        $featured = Product::where('status',1)->where('IsFeature',1)->get();
        $product = Product::where('status',1)->where('IsFeature',0)->get();
        $category = Category::where('status',1)->get();
        $section = Section::with('products')->where('status',1)->get();
        return view('frontend.home',compact('product','section','featured','category'));
    }
    public function details($slug)
    {
        $product = Product::with('images','coupon')->where('slug',$slug)->first();
        // dd($product->toArray());
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
    public function collection($type,$slug)
    {
        $category = Category::with('products')->get();
        $products = Product::with('singleImage')->where('status',1);
        $section = Section::with('products')->where('status',1)->get();
        if($type == "products" && $slug == "all")
        {
            $products = $products->paginate(9);
        }
        elseif($type == "category")
        {
            $find = Category::where('slug',$slug)->first();
            $products = $products->where('category_id',$find->id)->paginate(9);
        }
        elseif($type == "section")
        {
            $find = Section::where('slug',$slug)->first();
            $products = $products->with('section')->whereHas('section',function($query)use($slug){
                $query->where('slug',$slug);
            })->paginate(9);
            // dd($products->toArray());
        }

        return view('frontend.collection',compact('category','products','slug','section'));
    }
    public function  collectionview()
    {
        $category = Category::with('products')->get();
        return view('frontend.collection-view',compact('category'));
    }
    public function topCategory()
    {
        $data['category'] = Category::with(['products'=>function($query) {
            return $query->limit(5);
        }])->take(4)->latest()->get();
        $data['section'] = Section::with(['products'=>function($query) {
            return $query->where('status',1)->limit(5);
        }])->take(4)->get();
        return $data;
    }
}
