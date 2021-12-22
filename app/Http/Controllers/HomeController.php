<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->productRepository = $productRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->all();
        if(isset($input['categorie_id'])){
            $cat = $input['categorie_id'];
            $products = Product::where('categorie_id', $cat)->paginate(3);
        }else{
            $cat=0;
            $products = Product::paginate(3);
        }
        
        $categories =  [0 => 'Choose something…'] +Category::pluck('name','id')->toArray();
        return view('home')
            ->with(['products'=>$products, 'categories'=>$categories, 'cat'=>$cat]);
    }
}
